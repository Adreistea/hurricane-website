<template>
  <div 
    class="lightbox-overlay" 
    :class="{ 'lightbox-active': isVisible }" 
    @click="closeOnOverlayClick ? close() : null"
  >
    <div 
      class="lightbox-container" 
      :class="{ 'text-only': !imageUrl }" 
      @click.stop
    >
      <!-- Close button -->
      <button class="lightbox-close" @click="close">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      
      <div class="lightbox-content" :class="{ 'text-only-content': !imageUrl }">
        <!-- Left side - Image area (display only) - Only show if image exists -->
        <div v-if="imageUrl" class="lightbox-image-container">
          <div class="image-display-container">
            <img 
              :src="imageUrl" 
              alt="Lightbox image" 
              class="displayed-image"
              @error="handleImageError" 
            />
          </div>
        </div>
        
        <!-- Right side - Description area -->
        <div class="lightbox-description" :class="{ 'full-width': !imageUrl }">
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
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500&display=swap');

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
  background-color: rgba(0, 0, 0, 0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 50;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.4s ease, visibility 0.4s ease;
  backdrop-filter: blur(5px);
}

.lightbox-active {
  opacity: 1;
  visibility: visible;
}

/* Lightbox container */
.lightbox-container {
  background: linear-gradient(135deg, #ffffff, #f8f9fa);
  border-radius: 12px;
  width: 92%;
  max-width: 950px;
  max-height: 90vh;
  overflow: hidden;
  position: relative;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  animation: lightboxFadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Text-only container variant */
.lightbox-container.text-only {
  max-width: 600px;
}

@keyframes lightboxFadeIn {
  from {
    opacity: 0;
    transform: scale(0.92) translateY(10px);
  }
  to {
    opacity: 1;
    transform: scale(1) translateY(0);
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
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 10px -1px rgba(0, 0, 0, 0.15);
  z-index: 5;
  transition: all 0.2s ease;
}

.lightbox-close:hover {
  background-color: #f3f4f6;
  transform: rotate(90deg);
}

.lightbox-close svg {
  color: #973131;
}

/* Content area */
.lightbox-content {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  overflow: hidden;
  padding: 25px;
  position: relative;
}

.lightbox-content.text-only-content {
  padding: 30px 40px;
}

@media (min-width: 768px) {
  .lightbox-content {
    flex-direction: row;
    padding: 40px;
  }
  
  .lightbox-content::before {
    content: '';
    position: absolute;
    top: -30px;
    right: -30px;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(151, 49, 49, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
    border-radius: 50%;
    z-index: 0;
  }
}

/* Image container */
.lightbox-image-container {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  position: relative;
  z-index: 1;
}

@media (min-width: 768px) {
  .lightbox-image-container {
    margin-bottom: 0;
    margin-right: 40px;
    min-height: 320px;
  }
}

/* Image display */
.image-display-container {
  position: relative;
  width: 100%;
  height: 320px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
  transform: perspective(1000px) rotateY(-2deg);
  transition: transform 0.5s ease;
}

.image-display-container:hover {
  transform: perspective(1000px) rotateY(0deg);
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
  max-height: 420px;
  overflow-y: auto;
  position: relative;
  z-index: 1;
  padding: 10px;
}

/* Full width when there's no image */
.lightbox-description.full-width {
  text-align: center;
  max-width: 100%;
  padding: 0;
}

.description-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: #111827;
  margin-bottom: 20px;
  line-height: 1.2;
  position: relative;
  display: inline-block;
}

.full-width .description-title {
  margin-left: auto;
  margin-right: auto;
}

.description-title::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 60px;
  height: 4px;
  background-color: #973131;
  border-radius: 2px;
}

.full-width .description-title::after {
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
}

.description-content {
  color: #4b5563;
  line-height: 1.7;
  font-size: 1.05rem;
}

.full-width .description-content {
  margin: 0 auto;
  max-width: 90%;
}

.default-content {
  min-height: 80px;
}

.full-width .default-content {
  min-height: 120px;
}

/* Action area */
.lightbox-actions {
  padding: 20px 30px 25px;
  background: linear-gradient(to right, #f7f8f9, #ffffff);
  border-top: 1px solid #e5e7eb;
  display: flex;
  justify-content: center;
  position: relative;
}

.lightbox-actions::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, #973131, #b85151);
}

.action-button {
  background: linear-gradient(to bottom right, #973131, #812929);
  color: white;
  font-weight: 700;
  padding: 12px 30px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 10px 15px -3px rgba(151, 49, 49, 0.3), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  font-size: 1.1rem;
  position: relative;
  overflow: hidden;
}

.action-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: all 0.6s ease;
}

.action-button:hover {
  background: linear-gradient(to bottom right, #872b2b, #6e2323);
  transform: translateY(-3px);
  box-shadow: 0 15px 20px -7px rgba(151, 49, 49, 0.5), 0 4px 6px -2px rgba(0, 0, 0, 0.1);
}

.action-button:hover::before {
  left: 100%;
}

.action-button:active {
  transform: translateY(-1px);
}

/* Custom scrollbar for the description */
.lightbox-description::-webkit-scrollbar {
  width: 5px;
}

.lightbox-description::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.lightbox-description::-webkit-scrollbar-thumb {
  background: #973131;
  border-radius: 10px;
}

.lightbox-description::-webkit-scrollbar-thumb:hover {
  background: #7e2929;
}
</style>
