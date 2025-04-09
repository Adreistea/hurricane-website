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
        <!-- Left side - Image area (display only) -->
        <div class="lightbox-image-container">
          <div v-if="!imageUrl" class="image-placeholder">
            <!-- Placeholder SVG for when no image is available -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          
          <div v-else class="image-display-container">
            <img 
              :src="imageUrl" 
              alt="Lightbox image" 
              class="displayed-image"
              @error="handleImageError" 
            />
          </div>
        </div>
        
        <!-- Right side - Description area -->
        <div class="lightbox-description">
          <h2 class="description-title">{{ header }}</h2>
          
          <div class="description-content">
            <slot>
              <!-- Default content if no slot provided -->
              <div v-if="!hasSlotContent" class="default-content">
                <p v-if="description">{{ description }}</p>
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
          {{ ctaText || 'Request a Consultation Now' }}
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, useSlots, computed, watch } from 'vue';
import axios from 'axios';

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
  },
  lightboxId: {
    type: Number,
    default: null
  },
  isEditing: {
    type: Boolean,
    default: false
  },
  isPreview: {
    type: Boolean,
    default: false
  }
});

// Emits
const emit = defineEmits(['close', 'consultation-click']);

// Refs
const imageUrl = ref('');
const header = ref(props.title);
const description = ref(props.description);
const ctaText = ref('');

// Watch for prop changes
watch(() => props.title, (newVal) => {
  header.value = newVal;
});

watch(() => props.description, (newVal) => {
  description.value = newVal;
});

// Check if slot content exists
const slots = useSlots();
const hasSlotContent = computed(() => !!slots.default);

// Fetch lightbox data if ID is provided
const fetchLightboxData = async () => {
  if (props.lightboxId) {
    try {
      const response = await axios.get(`/api/lightboxes/${props.lightboxId}`);
      if (response.data.success) {
        const lightbox = response.data.data;
        header.value = lightbox.header;
        description.value = lightbox.description;
        ctaText.value = lightbox.cta_text;
        
        if (lightbox.image) {
          console.log("Original image path:", lightbox.image);
          
          // Simplify the URL construction
          if (lightbox.full_image_url) {
            imageUrl.value = lightbox.full_image_url;
          } else {
            // Ensure the path starts with /storage/
            imageUrl.value = lightbox.image.startsWith('/') 
                ? lightbox.image 
                : '/' + lightbox.image;
          }
          
          console.log("Final image URL:", imageUrl.value);
        }
        
        // Only record impression if not in preview mode
        if (!props.isPreview) {
          recordImpression();
        }
      }
    } catch (error) {
      console.error('Error fetching lightbox data:', error);
    }
  }
};

// Record impression
const recordImpression = async () => {
  if (props.lightboxId) {
    try {
      await axios.post(`/api/lightboxes/${props.lightboxId}/impression`);
    } catch (error) {
      console.error('Error recording impression:', error);
    }
  }
};

// Record click
const recordClick = async () => {
  if (props.lightboxId) {
    try {
      await axios.post(`/api/lightboxes/${props.lightboxId}/click`);
    } catch (error) {
      console.error('Error recording click:', error);
    }
  }
};

const close = () => {
  emit('close');
};

const onConsultationClick = () => {
  // Record click before emitting event
  recordClick();
  emit('consultation-click');
};

const handleImageError = (e) => {
  console.error('Image failed to load:', imageUrl.value);
  // Remove the error handler first to prevent loops
  e.target.removeEventListener('error', handleImageError);
  
  // Show the placeholder SVG
  imageUrl.value = '';
  
  // Log additional information for debugging
  console.log('Failed to load image. Image URL was:', imageUrl.value);
};

// Keyboard events for accessibility
onMounted(() => {
  // Fetch data if lightboxId is provided
  fetchLightboxData();
  
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

/* Image placeholder */
.image-placeholder {
  width: 100%;
  height: 300px;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px;
  text-align: center;
  background-color: #f8fafc;
}

/* Image display */
.image-display-container {
  position: relative;
  width: 100%;
  height: 300px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.displayed-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  background-color: #f8fafc;
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
</style>
