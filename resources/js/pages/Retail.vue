<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0">
        <div class="mb-2">
          <span class="text-indigo-600 font-semibold">Industries</span>
        </div>
        
        <div class="mb-6">
          <h1 class="text-5xl lg:text-6xl font-bold leading-tight"
              style="color: #973131;">
            Retail Payment Processing
          </h1>
        </div>
        
        <div class="mb-8">
          <p class="text-lg text-gray-600">
            As a retail store owner, you do it all: greet customers, fulfill orders, manage inventory, balance the books, clean the bathrooms, and much more. We know your days are busy and to-do list is long, and we'd like to take some of those extra tasks off your plate. This is why Hurricane Payments offers tools to help you both optimize the way you get paid and simplify important processes, such as inventory management and accounting!
          </p>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img src="@/../images/seamless-banner-img.png" alt="Retail Payment Solutions" class="w-full h-auto" 
               onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8"></div>
      </div>
    </div>

    <!-- Solutions Section -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Why Hurricane Payments</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-4"></div>
          <p class="text-xl text-gray-700 max-w-3xl mx-auto">Hurricane Payments is here to help you grow your retail business.</p>
        </div>
        
        <!-- Solutions container with border -->
        <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Point of Sale Systems -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4" style="color: #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold" style="color: #973131;">Point of Sale Systems</h2>
              </div>
              <p class="text-gray-700">
                Process all forms of payment, easily manage inventory, run essential reports in minutes, and more.
              </p>
            </div>

            <!-- Gift & Loyalty Cards -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4" style="color: #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold" style="color: #973131;">Gift & Loyalty Cards</h2>
              </div>
              <p class="text-gray-700">
                Attract new customers with a gift card and use your loyalty program to keep them coming back for more.
              </p>
            </div>

            <!-- Wireless Terminals -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4" style="color: #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold" style="color: #973131;">Wireless Terminals</h2>
              </div>
              <p class="text-gray-700">
                Accept all payment types, including EMV chip cards and contactless options such as Apple Pay and Google Pay.
              </p>
            </div>
          </div>
        </div>
        
        <!-- Standalone Image Section -->
        <div class="mt-16 scroll-reveal opacity-0" data-delay="600">
          <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
            <!-- Decorative elements -->
            <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-3xl transform rotate-1 translate-x-4 translate-y-4"></div>
            <div class="absolute -z-20 inset-0 bg-gradient-to-r from-red-50 to-rose-50 rounded-3xl transform -rotate-1 translate-x-6 translate-y-6"></div>
            
            <!-- Main image container -->
            <div class="relative bg-white p-4 rounded-3xl shadow-xl overflow-hidden">
              <div class="flex flex-col md:flex-row">
                <!-- Image -->
                <div class="md:w-3/5 relative">
                  <img 
                    src="@/../images/Company Introduction-051822-images-9.jpg" 
                    alt="Hurricane Payments Retail Solutions" 
                    class="w-full h-auto object-cover rounded-xl"
                    onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" 
                  />
                </div>
                
                <!-- Text Content -->
                <div class="md:w-2/5 p-4 md:p-8 flex flex-col justify-center relative overflow-hidden">
                  <!-- Pattern Background -->
                  <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100" fill="none">
                      <pattern id="grid-pattern" patternUnits="userSpaceOnUse" width="20" height="20" patternTransform="rotate(45)">
                        <rect width="1" height="1" fill="#333333" x="0" y="0" />
                      </pattern>
                      <rect width="100%" height="100%" fill="url(#grid-pattern)" />
                    </svg>
                  </div>
                  
                  <!-- Gradient Overlay -->
                  <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-200 opacity-90"></div>
                  
                  <!-- Content -->
                  <div class="relative z-10">
                    <div class="w-12 h-1 bg-red-800 mb-4 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-4" style="color: #973131;">
                      Simplify Your Retail Operations
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                      Our integrated payment solutions help retailers focus on growing their business while we handle the complexities of payment processing.
                    </p>
                  </div>
                </div>
              </div>
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
        
        <div class="benefits-container relative rounded-3xl p-6 md:p-12 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <!-- Left Column -->
          <div class="space-y-8">
            <!-- Benefit 1 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="0">
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="background: linear-gradient(to right, #973131, #7D2828);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
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
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="background: linear-gradient(to right, #973131, #7D2828);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
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
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="background: linear-gradient(to right, #973131, #7D2828);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
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
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="background: linear-gradient(to right, #973131, #7D2828);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2z" />
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
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="background: linear-gradient(to right, #973131, #7D2828);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
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
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="background: linear-gradient(to right, #973131, #7D2828);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
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
    
    <!-- Custom Solution Section -->
    <div class="py-24 bg-white">
      <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center lg:space-x-16">
          <!-- Left side image with decorative elements -->
          <div class="lg:w-2/5 mb-10 lg:mb-0 relative">
            <div class="rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0" data-delay="0">
              <img src="@/../images/pos.jpg" alt="Retail store owner" class="w-full h-auto" 
                   onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" />
            </div>
            <!-- Decorative elements -->
            <div class="absolute -z-10 -bottom-6 -right-6 w-full h-full bg-gradient-to-r from-red-100 to-rose-100 rounded-xl transform rotate-2"></div>
            <div class="absolute -z-20 -bottom-12 -right-12 w-full h-full bg-gradient-to-r from-blue-100 to-indigo-100 rounded-xl transform -rotate-3"></div>
          </div>
          
          <!-- Right side content -->
          <div class="lg:w-3/5">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0" style="color: #973131;">Your Business Deserves a Unique Solution</h2>
            <p class="text-lg text-gray-700 mb-8 scroll-reveal opacity-0" data-delay="100">
              Hurricane Payments has worked with thousands of retail business owners over the past 20 years. If there's one thing we've learned, it's that every retail operation is different! This is why we focus on offering innovative payment solutions that can be configured to your precise needs. Whether you need to manage and accept payments across multiple store locations, fulfill orders online, or even accept credit cards on the go, we can help. Just let us know what you need, and we'll work it out together.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Cost-Effective Section -->
    <div class="py-24 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row-reverse items-center lg:space-x-16 lg:space-x-reverse">
          <!-- Right side image with decorative elements -->
          <div class="lg:w-2/5 mb-10 lg:mb-0 relative">
            <div class="rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0" data-delay="0">
              <div class="bg-white p-10 rounded-xl flex items-center justify-center">
                <div class="text-center">
                  <div class="text-8xl font-bold mb-4" style="color: #973131;">$</div>
                  <div class="flex items-center justify-center space-x-2">
                    <span class="animate-ping absolute h-6 w-6 rounded-full bg-red-200 opacity-75"></span>
                    <span class="relative block h-6 w-6 rounded-full bg-red-300"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Decorative elements -->
            <div class="absolute -z-10 -bottom-6 -left-6 w-full h-full bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl transform -rotate-2"></div>
            <div class="absolute -z-20 -bottom-12 -left-12 w-full h-full bg-gradient-to-r from-amber-100 to-yellow-100 rounded-xl transform rotate-3"></div>
          </div>
          
          <!-- Left side content -->
          <div class="lg:w-3/5">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0" style="color: #973131;">Cost-Effective Products & Services</h2>
            <p class="text-lg text-gray-700 mb-8 scroll-reveal opacity-0" data-delay="100">
              Helping small businesses improve profitability is part of our company mission. Therefore, we are committed to offering low, wholesale rates for all our products and services. However, we never sacrifice quality. When you choose to implement Hurricane Payments solution, you can rest assured that you will be getting the best solution possible, at the lowest rate possible. And yes, the savings stack up quick!
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- KwickPOS CTA Section -->
    <CtaActionSection 
      heading="Ready to Transform Your Retail Experience?"
      subheading="Our retail payment solutions are designed to help you streamline operations, enhance customer experience, and boost your bottom line.<br>Get the tools you need to compete in today's retail environment."
    />
    
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
import CtaActionSection from '../components/CtaActionSection.vue';

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

  // Add animations for the Why Hurricane Payments section
  setTimeout(() => {
    document.querySelector('.fade-in')?.classList.add('animate');
    
    document.querySelectorAll('.card-reveal').forEach((el, index) => {
      const delay = parseInt(el.getAttribute('data-delay') || '0');
      setTimeout(() => {
        el.classList.add('animate');
      }, delay);
    });
  }, 300);
});
</script>

<style scoped>
/* Add these font imports at the top of your style section */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Apply font families to elements */
h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, blockquote, li {
  font-family: 'Inter', system-ui, sans-serif;
}

/* Refine heading styles */
h1 {
  font-weight: 700;
  line-height: 1.1;
}

h2 {
  font-weight: 600;
  line-height: 1.2;
}

h3 {
  font-weight: 600;
  line-height: 1.3;
}

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

/* Additional Animations */
@keyframes pulse-slow {
  0%, 100% {
    opacity: 0.6;
    transform: scale(1);
  }
  50% {
    opacity: 0.8;
    transform: scale(1.05);
  }
}

.animate-pulse-slow {
  animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.fade-in {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in.animate {
  opacity: 1;
  transform: translateY(0);
}

.card-reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.card-reveal.animate {
  opacity: 1;
  transform: translateY(0);
}

/* Circle pattern background */
.solutions-container, .benefits-container {
  position: relative;
}

.solutions-container::before, .benefits-container::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-image: radial-gradient(#973131 1px, transparent 1px), 
                    radial-gradient(#973131 1px, transparent 1px);
  background-size: 20px 20px;
  background-position: 0 0, 10px 10px;
  opacity: 0.05;
  z-index: -1;
}

/* Enhanced hover effects */
.solution-card {
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), 
              box-shadow 0.3s ease;
  background: linear-gradient(
    145deg, 
    rgba(255, 255, 255, 1) 0%, 
    rgba(249, 250, 251, 1) 100%
  );
}

.solution-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 
              0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

/* Benefits container styling */
.benefits-container {
  background-color: #f8f9fa;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

/* Image decorative backgrounds */
.image-background {
  background: linear-gradient(135deg, #f5f7fa 0%, #e4e7eb 100%);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.bg-gradient {
  background: linear-gradient(45deg, rgba(151, 49, 49, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
}

.image-circle-pattern {
  background-image: 
    radial-gradient(circle at 10% 20%, rgba(151, 49, 49, 0.15) 0%, rgba(151, 49, 49, 0.15) 5%, transparent 5%),
    radial-gradient(circle at 30% 70%, rgba(151, 49, 49, 0.1) 0%, rgba(151, 49, 49, 0.1) 5%, transparent 5%),
    radial-gradient(circle at 70% 10%, rgba(59, 130, 246, 0.1) 0%, rgba(59, 130, 246, 0.1) 5%, transparent 5%),
    radial-gradient(circle at 90% 40%, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.15) 5%, transparent 5%),
    radial-gradient(circle at 50% 50%, rgba(151, 49, 49, 0.1) 0%, rgba(151, 49, 49, 0.1) 5%, transparent 5%),
    radial-gradient(circle at 20% 30%, rgba(59, 130, 246, 0.1) 0%, rgba(59, 130, 246, 0.1) 5%, transparent 5%);
  background-size: 120px 120px;
  animation: pulse-pattern 8s ease infinite alternate;
}

@keyframes pulse-pattern {
  0% {
    background-size: 120px 120px;
    opacity: 0.7;
  }
  100% {
    background-size: 140px 140px;
    opacity: 0.9;
  }
}

.showcase-item:hover .image-background {
  transform: translateY(-8px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

/* Animation for scroll reveal */
.scroll-reveal {
  transition: opacity 0.6s ease, transform 0.6s ease;
  transform: translateY(20px);
}

.scroll-reveal.active {
  opacity: 1;
  transform: translateY(0);
}
</style>
