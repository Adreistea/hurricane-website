<template>
  <MainLayout>
    <!-- Hero Section with Burgundy Colors -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">Payment Solutions</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Request Payment For Your Business by Text, Email, or QR Code
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Hurricane Payments allows you to send secure, contactless, and tap-to-pay requests to your customers over text or email. Your personalized <span class="font-semibold">text-to-pay</span> message will include instant contactless payment options for a quick and convenient experience.
          </p>
        </div>
        
        <div class="mt-8 space-y-4">
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">No card readers, hardware, or special devices</p>
          </div>
          
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">No app download or account registration for your customers*</p>
          </div>
          
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">No redirect to a service provider or separate website</p>
          </div>
          
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">Pay via Apple Pay, Google Pay, or by entering in card data</p>
          </div>
        </div>
        
        <div class="mt-6 text-sm text-gray-500 italic">
          Services like Venmo®, CashApp®, and Zelle® require your customers to download an app and add their credit card to the respective service, which is something many consumers are hesitant to do.
        </div>

        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <router-link 
            to="/request-consultation" 
            class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
            style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </router-link>
          
          <button
            @click="scrollToNextSection"
            class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
            style="border-color: #973131; color: #973131;">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
      
      <!-- Right Content - Mobile Phone Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-xl overflow-hidden">
          <img src="@/../images/textqr.png" alt="Payment Complete on Mobile" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-gray-50 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Text & QR Payment Features</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-6">Streamline your payment process with modern, touchless solutions that customers love.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Products and Services Inventory Management -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="0">
            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-400 rounded-lg flex items-center justify-center mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 11h8V3H3v8zm2-6h4v4H5V5zM3 21h8v-8H3v8zm2-6h4v4H5v-4zM13 3v8h8V3h-8zm6 6h-4V5h4v4zM13 13h2v2h-2zM17 13h2v2h-2zM19 17h2v2h-2zM13 17h2v2h-2zM17 17h2v2h-2zM19 19h2v2h-2zM13 19h2v2h-2z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Products and Services Inventory Management</h3>
            <p class="text-gray-600 mb-6">Send professional, detailed tap-to-pay invoices. Includes customer management, and reporting tools that coordinate with your business and simplify the transaction process.</p>
          </div>
          
          <!-- Recurring Payments -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="200">
            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-400 rounded-lg flex items-center justify-center mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Recurring Payments</h3>
            <p class="text-gray-600 mb-6">Automate your customer's payments with an ongoing or time-specified payment plan. Pending your customer's first touchless payment, they can be auto-enrolled for recurring tap-to-pay requests.</p>
          </div>
          
          <!-- Secure Vault Card Storage -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="400">
            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-400 rounded-lg flex items-center justify-center mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Secure Vault Card Storage</h3>
            <p class="text-gray-600 mb-6">Securely store customer card information for future purchases or billing. No need to request credit card information for every future sale.</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Text or Scan to Give Section -->
    <div class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">"Text or Scan to Give" Mobile Donation Platform</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-6"></div>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto">Give your nonprofit or church a fundraising platform that is as robust and unique as you are. Hurricane Payments can support you with the tools you need.</p>
        </div>
        
        <div class="max-w-3xl mx-auto">
          <div class="space-y-6 scroll-reveal opacity-0">
            <div class="flex items-start">
              <div class="flex-shrink-0 mt-1">
                <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                  <span class="text-xl font-bold" style="color: #973131;">1</span>
                </div>
              </div>
              <div class="ml-4">
                <p class="text-gray-700">Receive donations instantly by sending a direct text to donate payment links or custom QR codes to your donors' phone, email, social media feed, and even in person with flyers and signage.</p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="flex-shrink-0 mt-1">
                <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                  <span class="text-xl font-bold" style="color: #973131;">2</span>
                </div>
              </div>
              <div class="ml-4">
                <p class="text-gray-700">Once they click or scan, your supporters view your personalized fundraising platform, where they set their contribution amount and add their credit card, debit card, or mobile wallet to pay.</p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="flex-shrink-0 mt-1">
                <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                  <span class="text-xl font-bold" style="color: #973131;">3</span>
                </div>
              </div>
              <div class="ml-4">
                <p class="text-gray-700">With one click, they authorize a mobile donation and get instant confirmation with a receipt sent to their phone or email.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to upgrade your payment experience?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our contactless payment solutions can help you serve customers faster, reduce physical contact, and modernize your business.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
        </div>
      </div>
    </div>

    <!-- Add this at the end of the template, just before the closing MainLayout tag -->
    <div v-if="currentLightbox && showLightbox">
      <lightbox
        :is-visible="showLightbox"
        :lightbox-id="currentLightbox.lightbox_id"
        @close="closeLightbox"
        @consultation-click="handleConsultationClick"
      />
    </div>
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import MainLayout from './MainLayout.vue';
import lightbox from './lightbox.vue'; // Import the lightbox component

// Existing code...

// Add these for lightbox functionality
const currentLightbox = ref(null);
const showLightbox = ref(false);

// Fetch active lightboxes for text-qr page
const fetchLightboxes = async () => {
  try {
    console.log('Fetching lightboxes for text-qr page...');
    const response = await axios.get('/api/lightboxes/active', {
      params: { page: 'text-qr' }
    });
    console.log('API Response:', response.data);
    
    if (response.data.success && response.data.data.length > 0) {
      console.log('Found active lightbox:', response.data.data[0]);
      currentLightbox.value = response.data.data[0];
      
      // Check if this lightbox should only be shown once
      const showOnceKey = `lightbox_shown_${currentLightbox.value.lightbox_id}`;
      if (currentLightbox.value.show_once && localStorage.getItem(showOnceKey)) {
        return;
      }
      
      // Show immediately or set up exit intent
      if (currentLightbox.value.show_on_exit) {
        setupExitIntent();
      } else {
        // Show after a short delay
        setTimeout(() => {
          showLightbox.value = true;
          if (currentLightbox.value.show_once) {
            localStorage.setItem(showOnceKey, 'true');
          }
        }, 3000);
      }
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
  }
};

// Handle the close action
const closeLightbox = () => {
  showLightbox.value = false;
};

// Handle the consultation button click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // Navigate to consultation page or handle as needed
  window.location.href = currentLightbox.value.cta_url || '/request-consultation';
};

// Set up exit intent detection
const setupExitIntent = () => {
  const handleExitIntent = (e) => {
    // If the mouse leaves the top of the viewport
    if (e.clientY <= 0) {
      // Remove the event listener to prevent multiple triggers
      document.removeEventListener('mouseleave', handleExitIntent);
      
      // Show the lightbox
      showLightbox.value = true;
      
      // If show only once, set the flag
      if (currentLightbox.value && currentLightbox.value.show_once) {
        localStorage.setItem(`lightbox_shown_${currentLightbox.value.lightbox_id}`, 'true');
      }
    }
  };
  
  document.addEventListener('mouseleave', handleExitIntent);
};

// Add this function to your script setup section
function scrollToNextSection() {
  const featuresSection = document.querySelector('.py-16.bg-gray-50');
  if (featuresSection) {
    featuresSection.scrollIntoView({ behavior: 'smooth' });
  }
}

onMounted(() => {
  // Intro animation for entire page (like in home.vue)
  const heroSection = document.querySelector('.container.mx-auto.px-6.py-16');
  if (heroSection) {
    heroSection.style.opacity = '0';
    heroSection.style.transform = 'translateY(20px)';
    heroSection.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    
    setTimeout(() => {
      heroSection.style.opacity = '1';
      heroSection.style.transform = 'translateY(0)';
    }, 100);
  }
  
  // Existing animation observers and code
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.scroll-reveal').forEach(element => {
    observer.observe(element);
  });
  
  const slideElements = document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal, .card-reveal');
  slideElements.forEach(element => {
    element.classList.add('animate');
  });
  
  // Fetch lightboxes for this page
  fetchLightboxes();
  
  // Initialize floating elements animation
  document.querySelectorAll('.floating-element').forEach(el => {
    el.style.position = 'absolute';
    el.style.animation = 'float 6s ease-in-out infinite';
  });
  
  // Enhanced scroll reveal to handle delay attribute
  const enhancedObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const delay = entry.target.getAttribute('data-delay') || 0;
        setTimeout(() => {
          entry.target.classList.add('animate');
          entry.target.style.opacity = '1';
        }, delay);
        enhancedObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -100px 0px' });

  document.querySelectorAll('.scroll-reveal').forEach(element => {
    enhancedObserver.observe(element);
  });
});
</script>

<style scoped>
/* Base animations */
.scroll-reveal {
  transform: translateY(20px);
  transition: all 0.6s ease-out;
}

.scroll-reveal.animate {
  opacity: 1 !important;
  transform: translateY(0);
}

/* Text animations */
.text-reveal {
  position: relative;
  overflow: hidden;
}

.text-reveal-content {
  transform: translateY(100%);
  transition: transform 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.text-reveal.animate .text-reveal-content {
  transform: translateY(0);
}

/* Slide animations */
.slide-in-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: all 0.8s ease-out;
}

.slide-in-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.8s ease-out;
}

.slide-in-left.animate,
.slide-in-right.animate {
  opacity: 1;
  transform: translateX(0);
}

/* Card animations */
.card-reveal {
  opacity: 0;
  transform: scale(0.9);
  transition: all 0.8s ease-out;
}

.card-reveal.animate {
  opacity: 1;
  transform: scale(1);
}

/* Delay utility classes */
.delay-100 {
  transition-delay: 0.1s;
}

.delay-200 {
  transition-delay: 0.2s;
}

.delay-300 {
  transition-delay: 0.3s;
}

.delay-400 {
  transition-delay: 0.4s;
}

.delay-500 {
  transition-delay: 0.5s;
}

.delay-600 {
  transition-delay: 0.6s;
}

/* Hover animation for buttons */
.hover-scale:hover {
  transform: scale(1.05);
}

/* Fancy button hover effect */
.fancy-button {
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

.fancy-button:hover {
  background-color: #7e2929 !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.fancy-button:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.fancy-button:hover:after {
  transform: translateX(100%);
}

@keyframes float {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
  100% {
    transform: translateY(0px);
  }
}

.floating-element {
  animation: float 6s ease-in-out infinite;
  will-change: transform;
}

/* Enhanced scroll reveal animations */
.scroll-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease-out, transform 0.9s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
}

.scroll-reveal.animate {
  opacity: 1 !important;
  transform: translateY(0) !important;
}

/* Testimonial card hover effect */
.hover\:scale-102:hover {
  transform: scale(1.02) translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.08);
}
</style>
