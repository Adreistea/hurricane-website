<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">Industry Solutions</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Retail Payment Solutions
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Streamline your retail operations with our comprehensive payment processing solutions designed specifically for retail businesses of all sizes - from small boutiques to large chain stores.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <a href="#" class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
             style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </a>
          
          <a href="#" class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
             style="border-color: #973131; color: #973131;">
            View Pricing
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img src="@/../images/TransparentLogo.png" alt="Retail Payment Solutions" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Solutions Section -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Retail Payment Solutions</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <!-- Solutions container with border -->
        <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- In-Store POS -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-500">In-Store POS Systems</h2>
              </div>
              <p class="text-gray-700">
                Our comprehensive POS systems are designed to handle everything from simple transactions to complex inventory management, helping you run your retail operation efficiently.
              </p>
            </div>

            <!-- Mobile Checkout -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-purple-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-purple-500">Mobile Checkout</h2>
              </div>
              <p class="text-gray-700">
                Break free from fixed checkout counters with mobile payment solutions that allow your staff to process sales anywhere in the store, reducing wait times and improving customer experience.
              </p>
            </div>

            <!-- Contactless Payments -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-green-500">Contactless Payments</h2>
              </div>
              <p class="text-gray-700">
                Offer your customers quick, convenient, and secure payment options with our contactless payment solutions, including tap-to-pay cards and digital wallets like Apple Pay and Google Pay.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="bg-gray-50 py-24">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Benefits for Retailers</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <!-- Left Column -->
          <div class="space-y-8">
            <!-- Benefit 1 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="0">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Faster Checkout Experience</h3>
                <p class="text-gray-700">
                  Reduce customer wait times with speedy transaction processing. Our systems allow you to process payments up to 60% faster than traditional methods.
                </p>
              </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="100">
              <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Inventory Management</h3>
                <p class="text-gray-700">
                  Seamlessly integrate payment systems with inventory management. Track stock levels in real-time and receive alerts when it's time to reorder popular items.
                </p>
              </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="200">
              <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd" />
                  <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Customer Loyalty Programs</h3>
                <p class="text-gray-700">
                  Build repeat business with integrated loyalty programs. Easily track customer purchases and reward your most valuable shoppers.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Right Column -->
          <div class="space-y-8">
            <!-- Benefit 4 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="300">
              <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-rose-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Customer Insights</h3>
                <p class="text-gray-700">
                  Gain valuable insights into your customers' shopping habits with detailed analytics. Make data-driven decisions to optimize your product mix and marketing strategies.
                </p>
              </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="400">
              <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-yellow-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Enhanced Security</h3>
                <p class="text-gray-700">
                  Protect your business and customers with advanced security features including encrypted transactions, fraud detection, and compliance with the latest PCI standards.
                </p>
              </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="500">
              <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Omnichannel Capabilities</h3>
                <p class="text-gray-700">
                  Seamlessly connect your in-store and online sales channels. Offer customers a unified shopping experience with flexible options like buy online, pickup in-store (BOPIS).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to transform your retail experience?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our retail payment solutions are designed to help you streamline operations, enhance customer experience, and boost your bottom line.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
          <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
            View Pricing
          </a>
        </div>
      </div>
    </div>
    
    <!-- Lightbox Component -->
    <lightbox
      :is-visible="showLightbox"
      :lightbox-id="currentLightboxId"
      @close="showLightbox = false"
      @consultation-click="handleConsultationClick"
    />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import MainLayout from './MainLayout.vue';
import axios from 'axios';
import lightbox from './lightbox.vue';

// Lightbox state
const showLightbox = ref(false);
const currentLightboxId = ref(null);

// Handle consultation click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // Redirect to consultation page
  window.location.href = '/request-consultation';
};

// Fetch lightboxes and check if we need to show one
const fetchLightboxes = async () => {
  try {
    console.log('Fetching lightboxes for retail page...');
    const response = await axios.get('/api/lightboxes');
    if (response.data.success) {
      const lightboxes = response.data.data;
      console.log('API Response:', response.data);
      
      // Find active lightbox for retail page
      const retailLightbox = lightboxes.find(item => {
        const displayPages = Array.isArray(item.display_pages) 
          ? item.display_pages 
          : JSON.parse(item.display_pages || '[]');
        
        return displayPages.includes('retail') && item.status === 'active';
      });
      
      if (retailLightbox) {
        console.log('Found retail lightbox:', retailLightbox);
        currentLightboxId.value = retailLightbox.lightbox_id;
        
        // Check if we should show this lightbox (based on show_once setting)
        const lightboxShownKey = `lightbox_shown_${retailLightbox.lightbox_id}`;
        const hasBeenShown = localStorage.getItem(lightboxShownKey);
        
        if (!retailLightbox.show_once || !hasBeenShown) {
          // Show the lightbox after a short delay
          setTimeout(() => {
            console.log('Showing lightbox now');
            showLightbox.value = true;
            
            // If show_once is enabled, mark as shown
            if (retailLightbox.show_once) {
              localStorage.setItem(lightboxShownKey, 'true');
            }
          }, 2000); // Show after 2 seconds
        } else {
          console.log('Lightbox already shown to this visitor');
        }
      } else {
        console.log('No active lightbox found for retail page');
      }
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
  }
};

onMounted(() => {
  // Initialize animation observer for scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  // Observe all elements with scroll-reveal class
  document.querySelectorAll('.scroll-reveal').forEach(element => {
    observer.observe(element);
  });
  
  // Add slide-in animations for hero section
  const slideElements = document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal, .card-reveal');
  slideElements.forEach(element => {
    element.classList.add('animate');
  });
  
  // Fetch and check lightboxes
  fetchLightboxes();
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
</style>
