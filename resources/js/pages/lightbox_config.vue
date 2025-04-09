<template>
  <div class="lightbox-config">
    <div class="config-header">
      <h1 class="config-title">Lightbox Configuration</h1>
      <div class="config-actions">
        <button 
          class="action-button create-button" 
          @click="createNewLightbox"
        >
          Create New Lightbox
        </button>
      </div>
    </div>

    <!-- Lightbox List -->
    <div v-if="!editMode" class="lightbox-list">
      <div class="list-header">
        <div class="list-column id-column">ID</div>
        <div class="list-column title-column">Title</div>
        <div class="list-column status-column">Status</div>
        <div class="list-column impressions-column">Impressions</div>
        <div class="list-column clicks-column">Clicks</div>
        <div class="list-column actions-column">Actions</div>
      </div>
      
      <div v-if="lightboxes.length === 0" class="no-lightboxes">
        No lightboxes found. Create one to get started.
      </div>
      
      <div v-for="item in lightboxes" :key="item.lightbox_id" class="list-item">
        <div class="list-column id-column">{{ item.lightbox_id }}</div>
        <div class="list-column title-column">{{ item.header }}</div>
        <div class="list-column status-column">
          <span :class="'status-badge status-' + item.status">{{ item.status }}</span>
        </div>
        <div class="list-column impressions-column">{{ item.impressions }}</div>
        <div class="list-column clicks-column">{{ item.clicks }}</div>
        <div class="list-column actions-column">
          <button 
            class="icon-button edit-button" 
            @click="editLightbox(item.lightbox_id)"
            title="Edit Lightbox"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
          </button>
          <button 
            class="icon-button preview-button" 
            @click="previewLightbox(item.lightbox_id)"
            title="Preview Lightbox"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
            </svg>
          </button>
          <button 
            class="icon-button delete-button" 
            @click="confirmDelete(item.lightbox_id)"
            title="Delete Lightbox"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Lightbox Edit Form -->
    <div v-if="editMode" class="lightbox-form">
      <div class="form-header">
        <h2 class="form-title">{{ currentLightbox.lightbox_id ? 'Edit' : 'Create' }} Lightbox</h2>
        <button class="back-button" @click="cancelEdit">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
          </svg>
          Back to List
        </button>
      </div>
      
      <div class="form-grid">
        <!-- Left column - Basic information -->
        <div class="form-column">
          <div class="form-group">
            <label for="header" class="form-label">Header/Title</label>
            <input 
              type="text" 
              id="header" 
              v-model="currentLightbox.header" 
              class="form-input"
              placeholder="Enter a title for your lightbox"
            />
          </div>
          
          <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea 
              id="description" 
              v-model="currentLightbox.description" 
              class="form-textarea"
              placeholder="Enter a description or content"
              rows="5"
            ></textarea>
          </div>
          
          <div class="form-group">
            <label for="status" class="form-label">Status</label>
            <select id="status" v-model="currentLightbox.status" class="form-select">
              <option value="draft">Draft</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="cta_text" class="form-label">Call to Action Text</label>
            <input 
              type="text" 
              id="cta_text" 
              v-model="currentLightbox.cta_text" 
              class="form-input"
              placeholder="e.g. Request a Consultation Now"
            />
          </div>
          
          <div class="form-group">
            <label for="cta_url" class="form-label">Call to Action URL (optional)</label>
            <input 
              type="text" 
              id="cta_url" 
              v-model="currentLightbox.cta_url" 
              class="form-input"
              placeholder="e.g. /request-consultation"
            />
          </div>
          
          <div class="form-row">
            <div class="form-group flex-1">
              <label for="start_date" class="form-label">Start Date (optional)</label>
              <input 
                type="date" 
                id="start_date" 
                v-model="currentLightbox.start_date" 
                class="form-input"
              />
            </div>
            
            <div class="form-group flex-1">
              <label for="end_date" class="form-label">End Date (optional)</label>
              <input 
                type="date" 
                id="end_date" 
                v-model="currentLightbox.end_date" 
                class="form-input"
              />
            </div>
          </div>
          
          <div class="form-group">
            <label class="form-label">Display Pages</label>
            <div class="checkbox-group">
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  value="home" 
                  v-model="displayPages" 
                  class="checkbox-input"
                />
                Home
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  value="pricing" 
                  v-model="displayPages" 
                  class="checkbox-input"
                />
                Pricing
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  value="services" 
                  v-model="displayPages" 
                  class="checkbox-input"
                />
                Services
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  value="contact" 
                  v-model="displayPages" 
                  class="checkbox-input"
                />
                Contact
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  value="retail" 
                  v-model="displayPages" 
                  class="checkbox-input"
                />
                Retail
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  value="ecommerce" 
                  v-model="displayPages" 
                  class="checkbox-input"
                />
                eCommerce
              </label>
            </div>
          </div>
          
          <div class="form-group">
            <label class="form-label">Display Options</label>
            <div class="checkbox-group">
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  v-model="currentLightbox.close_on_overlay" 
                  class="checkbox-input"
                />
                Close when clicking outside
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  v-model="currentLightbox.show_once" 
                  class="checkbox-input"
                />
                Show only once per visitor
              </label>
              <label class="checkbox-label">
                <input 
                  type="checkbox" 
                  v-model="currentLightbox.show_on_exit" 
                  class="checkbox-input"
                />
                Show on exit intent
              </label>
            </div>
          </div>
        </div>
        
        <!-- Right column - Display settings and image -->
        <div class="form-column">
          <div class="form-group">
            <label class="form-label">Image</label>
            <div class="image-upload-area">
              <div 
                v-if="!previewImage && !currentLightbox.image" 
                class="upload-placeholder"
                @click="triggerFileInput"
                @dragover.prevent="dragOver = true"
                @dragleave.prevent="dragOver = false"
                @drop.prevent="handleFileDrop"
                :class="{ 'drag-over': dragOver }"
              >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="upload-text">Drag and drop an image here, or click to select</p>
                <p class="upload-note">Supports: JPG, PNG, GIF (Max 5MB)</p>
              </div>
              
              <div v-else class="image-preview">
                <img :src="previewImage || currentLightbox.image" alt="Lightbox image" class="preview-img" />
                <button 
                  class="remove-image-button" 
                  @click="removeImage"
                  title="Remove image"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </div>
              
              <input 
                type="file" 
                ref="fileInput" 
                class="hidden-input" 
                accept="image/*"
                @change="handleFileChange" 
              />
            </div>
          </div>
        </div>
      </div>
      
      <div class="form-footer">
        <button class="action-button cancel-button" @click="cancelEdit">Cancel</button>
        <button class="action-button save-button" @click="saveLightbox">Save Lightbox</button>
      </div>
    </div>
    
    <!-- Preview Lightbox -->
    <div v-if="showPreview">
      <lightbox
        :is-visible="showPreview"
        :lightbox-id="previewLightboxId"
        :is-preview="true"
        @close="showPreview = false"
        @consultation-click="handleConsultationClick"
      />
    </div>
    
    <!-- Confirmation Dialog -->
    <div v-if="showDeleteConfirm" class="confirm-overlay">
      <div class="confirm-dialog">
        <h3 class="confirm-title">Delete Lightbox</h3>
        <p class="confirm-message">Are you sure you want to delete this lightbox? This action cannot be undone.</p>
        <div class="confirm-actions">
          <button class="action-button cancel-button" @click="showDeleteConfirm = false">Cancel</button>
          <button class="action-button delete-button" @click="deleteLightbox">Delete</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, watch } from 'vue';
import axios from 'axios';
import lightbox from './lightbox.vue';

// State
const lightboxes = ref([]);
const currentLightbox = ref({
  header: '',
  description: '',
  status: 'draft',
  display_pages: [],
  close_on_overlay: true,
  show_once: false,
  show_on_exit: false,
  cta_text: 'Request a Consultation Now',
  cta_url: ''
});
const editMode = ref(false);
const showPreview = ref(false);
const previewLightboxId = ref(null);
const showDeleteConfirm = ref(false);
const deleteId = ref(null);
const previewImage = ref('');
const fileInput = ref(null);
const dragOver = ref(false);
const displayPages = ref([]);

// Load lightboxes
const fetchLightboxes = async () => {
  try {
    const response = await axios.get('/api/lightboxes');
    if (response.data.success) {
      lightboxes.value = response.data.data;
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
    alert('Failed to load lightboxes. Please try again.');
  }
};

// Create a new lightbox
const createNewLightbox = () => {
  currentLightbox.value = {
    header: '',
    description: '',
    status: 'draft',
    display_pages: [],
    close_on_overlay: true,
    show_once: false,
    show_on_exit: false,
    cta_text: 'Request a Consultation Now',
    cta_url: ''
  };
  previewImage.value = '';
  displayPages.value = [];
  editMode.value = true;
};

// Edit an existing lightbox
const editLightbox = async (id) => {
  try {
    const response = await axios.get(`/api/lightboxes/${id}`);
    if (response.data.success) {
      currentLightbox.value = response.data.data;
      // Convert display_pages from JSON to array
      if (currentLightbox.value.display_pages) {
        displayPages.value = Array.isArray(currentLightbox.value.display_pages) 
          ? currentLightbox.value.display_pages 
          : JSON.parse(currentLightbox.value.display_pages);
      } else {
        displayPages.value = [];
      }
      editMode.value = true;
      previewImage.value = ''; // Reset preview image
    }
  } catch (error) {
    console.error('Error fetching lightbox details:', error);
    alert('Failed to load lightbox details. Please try again.');
  }
};

// Preview a lightbox
const previewLightbox = (id) => {
  previewLightboxId.value = id;
  showPreview.value = true;
};

// Handle lightbox consultation click
const handleConsultationClick = () => {
  showPreview.value = false;
  alert('Consultation button clicked! In a real scenario, this would redirect to the consultation page.');
};

// Confirm delete
const confirmDelete = (id) => {
  deleteId.value = id;
  showDeleteConfirm.value = true;
};

// Delete a lightbox
const deleteLightbox = async () => {
  try {
    const response = await axios.delete(`/api/lightboxes/${deleteId.value}`);
    if (response.data.success) {
      await fetchLightboxes();
      showDeleteConfirm.value = false;
      deleteId.value = null;
    }
  } catch (error) {
    console.error('Error deleting lightbox:', error);
    alert('Failed to delete lightbox. Please try again.');
  }
};

// Cancel edit mode
const cancelEdit = () => {
  editMode.value = false;
  previewImage.value = '';
};

// Trigger file input
const triggerFileInput = () => {
  fileInput.value.click();
};

// Handle file change
const handleFileChange = (event) => {
  const file = event.target.files[0];
  if (file) {
    processFile(file);
  }
};

// Handle file drop
const handleFileDrop = (event) => {
  dragOver.value = false;
  const file = event.dataTransfer.files[0];
  if (file && file.type.startsWith('image/')) {
    processFile(file);
  }
};

// Process selected file
const processFile = (file) => {
  // Check file size (max 5MB)
  if (file.size > 5 * 1024 * 1024) {
    alert('File size exceeds 5MB. Please choose a smaller file.');
    return;
  }
  
  currentLightbox.value.image_file = file;
  
  const reader = new FileReader();
  reader.onload = (e) => {
    previewImage.value = e.target.result;
  };
  reader.readAsDataURL(file);
};

// Remove image
const removeImage = () => {
  previewImage.value = '';
  currentLightbox.value.image = null;
  currentLightbox.value.image_file = null;
  if (fileInput.value) {
    fileInput.value.value = '';
  }
};

// Save lightbox
const saveLightbox = async () => {
  try {
    // Ensure we have the required fields
    if (!currentLightbox.value.header) {
      alert('Header/Title is required');
      return;
    }
    
    if (!currentLightbox.value.status) {
      currentLightbox.value.status = 'draft'; // Set default status
    }
    
    // Create form data for the request
    const formData = new FormData();
    
    // Add regular fields
    formData.append('header', currentLightbox.value.header);
    formData.append('description', currentLightbox.value.description || '');
    formData.append('status', currentLightbox.value.status);
    
    // For display_pages, try passing as a JSON string with a special name so Laravel recognizes it
    // This is a workaround for FormData not handling arrays natively
    if (displayPages.value && displayPages.value.length > 0) {
      // Add each page as a separate entry with array notation in the key
      displayPages.value.forEach((page, index) => {
        formData.append(`display_pages[${index}]`, page);
      });
    } else {
      // If empty, add an empty array parameter
      formData.append('display_pages', '');
    }
    
    // Convert booleans to proper values for Laravel
    formData.append('close_on_overlay', currentLightbox.value.close_on_overlay ? '1' : '0');
    formData.append('show_once', currentLightbox.value.show_once ? '1' : '0');
    formData.append('show_on_exit', currentLightbox.value.show_on_exit ? '1' : '0');
    
    // Add other fields
    if (currentLightbox.value.start_date) formData.append('start_date', currentLightbox.value.start_date);
    if (currentLightbox.value.end_date) formData.append('end_date', currentLightbox.value.end_date);
    formData.append('cta_text', currentLightbox.value.cta_text || 'Request a Consultation Now');
    if (currentLightbox.value.cta_url) formData.append('cta_url', currentLightbox.value.cta_url);
    
    // Add image if available
    if (currentLightbox.value.image_file) {
      formData.append('image', currentLightbox.value.image_file);
    }
    
    let response;
    if (currentLightbox.value.lightbox_id) {
      // Update existing lightbox
      response = await axios.post(`/api/lightboxes/${currentLightbox.value.lightbox_id}?_method=PUT`, formData, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      });
    } else {
      // Create new lightbox
      response = await axios.post('/api/lightboxes', formData, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      });
    }
    
    if (response.data.success) {
      await fetchLightboxes();
      editMode.value = false;
      alert('Lightbox saved successfully!');
    }
  } catch (error) {
    console.error('Error saving lightbox:', error);
    
    // Enhanced error reporting
    let errorMessage = 'Failed to save lightbox. Please try again.';
    if (error.response && error.response.data) {
      console.log('Error response data:', error.response.data);
      
      if (error.response.data.errors) {
        errorMessage = 'Validation errors:\n';
        for (const field in error.response.data.errors) {
          errorMessage += `- ${field}: ${error.response.data.errors[field].join(', ')}\n`;
        }
      } else if (error.response.data.message) {
        errorMessage = error.response.data.message;
      }
    }
    
    alert(errorMessage);
  }
};

// Watch for display_pages changes
watch(() => currentLightbox.value, (newVal) => {
  if (newVal && newVal.display_pages) {
    displayPages.value = Array.isArray(newVal.display_pages) 
      ? newVal.display_pages 
      : JSON.parse(newVal.display_pages);
  }
}, { deep: true, immediate: true });

// Load lightboxes on component mount
onMounted(() => {
  fetchLightboxes();
});
</script>

<style scoped>
/* Add these font imports at the top */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Apply font families to elements */
h1, h2, h3, h4, h5, h6, .action-button {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, label, input, select, textarea {
  font-family: 'Inter', system-ui, sans-serif;
}

.lightbox-config {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}

.config-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2rem;
}

.config-title {
  font-size: 1.875rem;
  font-weight: 700;
  color: #111827;
}

.action-button {
  background-color: #973131;
  color: white;
  font-weight: 600;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 0.375rem;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px -1px rgba(151, 49, 49, 0.3);
}

.action-button:hover {
  background-color: #7e2929;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px -2px rgba(151, 49, 49, 0.4);
}

.action-button.cancel-button {
  background-color: #6b7280;
}

.action-button.cancel-button:hover {
  background-color: #4b5563;
  box-shadow: 0 6px 12px -2px rgba(107, 114, 128, 0.4);
}

.action-button.delete-button {
  background-color: #dc2626;
}

.action-button.delete-button:hover {
  background-color: #b91c1c;
  box-shadow: 0 6px 12px -2px rgba(220, 38, 38, 0.4);
}

/* Lightbox list styles */
.lightbox-list {
  background-color: white;
  border-radius: 0.5rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.list-header {
  display: flex;
  background-color: #f9fafb;
  border-bottom: 1px solid #e5e7eb;
  font-weight: 600;
  color: #374151;
}

.list-item {
  display: flex;
  border-bottom: 1px solid #e5e7eb;
  transition: background-color 0.2s ease;
}

.list-item:hover {
  background-color: #f9fafb;
}

.list-column {
  padding: 1rem;
  display: flex;
  align-items: center;
}

.id-column {
  width: 10%;
}

.title-column {
  width: 30%;
  font-weight: 500;
}

.status-column {
  width: 15%;
}

.impressions-column, .clicks-column {
  width: 15%;
  justify-content: center;
}

.actions-column {
  width: 15%;
  justify-content: flex-end;
  gap: 0.5rem;
}

.status-badge {
  padding: 0.25rem 0.5rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: capitalize;
}

.status-draft {
  background-color: #e5e7eb;
  color: #374151;
}

.status-active {
  background-color: #d1fae5;
  color: #065f46;
}

.status-inactive {
  background-color: #fee2e2;
  color: #991b1b;
}

.icon-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2rem;
  height: 2rem;
  border-radius: 0.375rem;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
}

.icon-button svg {
  width: 1.25rem;
  height: 1.25rem;
}

.edit-button {
  background-color: #dbeafe;
  color: #1e40af;
}

.edit-button:hover {
  background-color: #bfdbfe;
}

.preview-button {
  background-color: #e0e7ff;
  color: #4338ca;
}

.preview-button:hover {
  background-color: #c7d2fe;
}

.delete-button {
  background-color: #fee2e2;
  color: #991b1b;
}

.delete-button:hover {
  background-color: #fecaca;
}

.no-lightboxes {
  padding: 2rem;
  text-align: center;
  color: #6b7280;
  font-style: italic;
}

/* Form styles */
.lightbox-form {
  background-color: white;
  border-radius: 0.5rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.form-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.5rem;
  border-bottom: 1px solid #e5e7eb;
}

.form-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #111827;
}

.back-button {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: #6b7280;
  background: none;
  border: none;
  cursor: pointer;
  transition: color 0.2s ease;
}

.back-button:hover {
  color: #111827;
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
  padding: 1.5rem;
}

@media (max-width: 768px) {
  .form-grid {
    grid-template-columns: 1fr;
  }
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-row {
  display: flex;
  gap: 1rem;
}

.flex-1 {
  flex: 1;
}

.form-label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
  color: #374151;
}

.form-input, .form-textarea, .form-select {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #e5e7eb;
  border-radius: 0.375rem;
}

.form-textarea {
  resize: vertical;
}

.form-select {
  appearance: none;
  background-color: white;
}

.image-upload-area {
  position: relative;
  width: 100%;
  height: 200px;
  border: 1px dashed #e5e7eb;
  border-radius: 0.375rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.upload-placeholder {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.drag-over {
  border-color: #4338ca;
}

.image-preview {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.preview-img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

.remove-image-button {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
  width: 2rem;
  height: 2rem;
  background: none;
  border: none;
  cursor: pointer;
}

.remove-image-button svg {
  width: 1rem;
  height: 1rem;
}

.upload-text {
  margin-top: 0.5rem;
  text-align: center;
  color: #6b7280;
}

.upload-note {
  margin-top: 0.25rem;
  text-align: center;
  color: #6b7280;
  font-size: 0.75rem;
}

.checkbox-group {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.checkbox-label {
  display: flex;
  align-items: center;
}

.checkbox-input {
  margin-right: 0.5rem;
}
</style>
