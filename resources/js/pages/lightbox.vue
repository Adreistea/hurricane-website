<template>
  <div 
    class="lightbox-overlay" 
    :class="{ 'lightbox-active': isVisible }" 
    @click="closeOnOverlayClick ? close() : null"
  >
    <div class="lightbox-container" @click.stop>
      <!-- Close button -->
      <button class="lightbox-close" @click="close">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      
      <div class="lightbox-content">
        <!-- Left side - Image upload area -->
        <div class="lightbox-image-container">
          <div 
            v-if="!imageUrl" 
            class="image-upload-placeholder"
            @click="triggerFileInput"
            @dragover.prevent="dragOver = true"
            @dragleave.prevent="dragOver = false"
            @drop.prevent="handleFileDrop"
            :class="{ 'drag-over': dragOver }"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <p class="mt-2 text-sm text-gray-600">
              Drag and drop an image here, or click to select
            </p>
            <p class="mt-1 text-xs text-gray-500">
              Supports: JPG, PNG, GIF (Max 5MB)
            </p>
          </div>
          
          <div v-else class="image-preview-container">
            <img :src="imageUrl" alt="Uploaded image" class="uploaded-image" />
            <button 
              class="image-remove-button" 
              @click.prevent="removeImage"
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
            class="hidden-file-input" 
            accept="image/*"
            @change="handleFileChange" 
          />
        </div>
        
        <!-- Right side - Description area -->
        <div class="lightbox-description">
          <h2 class="description-title">{{ title || 'Add Description' }}</h2>
          
          <div class="description-content">
            <slot>
              <!-- Default content if no slot provided -->
              <div v-if="!hasSlotContent" class="default-content">
                <p v-if="description">{{ description }}</p>
                <p v-else class="text-gray-500 italic">Add your content here or provide it through the slot.</p>
              </div>
            </slot>
          </div>
        </div>
      </div>
      
      <!-- Bottom action area -->
      <div class="lightbox-actions">
        <button 
          class="action-button" 
          @click="onConsultationClick"
        >
          Request a Consultation Now
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, useSlots, computed } from 'vue';

// Props
const props = defineProps({
  isVisible: {
    type: Boolean,
    default: false
  },
  title: {
    type: String,
    default: ''
  },
  description: {
    type: String,
    default: ''
  },
  closeOnOverlayClick: {
    type: Boolean,
    default: true
  }
});

// Emits
const emit = defineEmits(['close', 'image-upload', 'image-remove', 'consultation-click']);

// Refs
const fileInput = ref(null);
const imageUrl = ref('');
const dragOver = ref(false);

// Check if slot content exists
const slots = useSlots();
const hasSlotContent = computed(() => !!slots.default);

// Methods
const triggerFileInput = () => {
  fileInput.value.click();
};

const handleFileChange = (event) => {
  const file = event.target.files[0];
  if (file) {
    processFile(file);
  }
};

const handleFileDrop = (event) => {
  dragOver.value = false;
  const file = event.dataTransfer.files[0];
  if (file && file.type.startsWith('image/')) {
    processFile(file);
  }
};

const processFile = (file) => {
  // Check file size (max 5MB)
  if (file.size > 5 * 1024 * 1024) {
    alert('File size exceeds 5MB. Please choose a smaller file.');
    return;
  }
  
  const reader = new FileReader();
  reader.onload = (e) => {
    imageUrl.value = e.target.result;
    emit('image-upload', file);
  };
  reader.readAsDataURL(file);
};

const removeImage = () => {
  imageUrl.value = '';
  emit('image-remove');
  // Reset file input
  if (fileInput.value) {
    fileInput.value.value = '';
  }
};

const close = () => {
  emit('close');
};

const onConsultationClick = () => {
  emit('consultation-click');
};

// Keyboard events for accessibility
onMounted(() => {
  const handleEscape = (event) => {
    if (event.key === 'Escape' && props.isVisible) {
      close();
    }
  };
  
  document.addEventListener('keydown', handleEscape);
  
  return () => {
    document.removeEventListener('keydown', handleEscape);
  };
});
</script>

<style scoped>
/* Add these font imports at the top of your style section */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Apply font families to elements */
h1, h2, h3, h4, h5, h6, .action-button {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, blockquote, li {
  font-family: 'Inter', system-ui, sans-serif;
}

/* Lightbox overlay */
.lightbox-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.75);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 50;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease, visibility 0.3s ease;
}

.lightbox-active {
  opacity: 1;
  visibility: visible;
}

/* Lightbox container */
.lightbox-container {
  background-color: white;
  border-radius: 8px;
  width: 90%;
  max-width: 900px;
  max-height: 90vh;
  overflow: hidden;
  position: relative;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  animation: lightboxFadeIn 0.3s ease forwards;
}

@keyframes lightboxFadeIn {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Close button */
.lightbox-close {
  position: absolute;
  top: 15px;
  right: 15px;
  background: white;
  border: none;
  border-radius: 50%;
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  z-index: 5;
  transition: background-color 0.2s ease;
}

.lightbox-close:hover {
  background-color: #f3f4f6;
}

/* Content area */
.lightbox-content {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  overflow: hidden;
  padding: 20px;
}

@media (min-width: 768px) {
  .lightbox-content {
    flex-direction: row;
    padding: 30px;
  }
}

/* Image container */
.lightbox-image-container {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  .lightbox-image-container {
    margin-bottom: 0;
    margin-right: 30px;
    min-height: 300px;
  }
}

/* Image upload placeholder */
.image-upload-placeholder {
  width: 100%;
  height: 300px;
  border: 2px dashed #e2e8f0;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.2s ease;
  padding: 20px;
  text-align: center;
  background-color: #f8fafc;
}

.image-upload-placeholder:hover {
  border-color: #973131;
  background-color: #fef2f2;
}

.drag-over {
  border-color: #973131;
  background-color: #fef2f2;
  transform: scale(1.02);
}

/* Image preview */
.image-preview-container {
  position: relative;
  width: 100%;
  height: 300px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.uploaded-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  background-color: #f8fafc;
}

.image-remove-button {
  position: absolute;
  top: 10px;
  right: 10px;
  background: rgba(255, 255, 255, 0.9);
  border: none;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  color: #dc2626;
  opacity: 0;
  transition: opacity 0.2s ease;
}

.image-preview-container:hover .image-remove-button {
  opacity: 1;
}

/* Description area */
.lightbox-description {
  flex: 1;
  min-width: 0;
  max-height: 400px;
  overflow-y: auto;
}

.description-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #111827;
  margin-bottom: 15px;
  line-height: 1.2;
}

.description-content {
  color: #4b5563;
  line-height: 1.6;
}

.default-content {
  min-height: 100px;
}

/* Action area */
.lightbox-actions {
  padding: 15px 30px;
  background-color: #f9fafb;
  border-top: 1px solid #e5e7eb;
  display: flex;
  justify-content: center;
}

.action-button {
  background-color: #973131;
  color: white;
  font-weight: 600;
  padding: 10px 24px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px -1px rgba(151, 49, 49, 0.3);
}

.action-button:hover {
  background-color: #7e2929;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px -2px rgba(151, 49, 49, 0.4);
}

.action-button:active {
  transform: translateY(0);
}

/* Hide file input */
.hidden-file-input {
  display: none;
}
</style>
