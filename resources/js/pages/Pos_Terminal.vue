<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">POS Solutions</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            POS Terminals
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Our state-of-the-art POS terminals offer advanced payment processing capabilities for your business. With multiple hardware options designed for different business types, our terminals combine reliability with cutting-edge technology.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <a href="#" class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
             style="background-color: #973131; transition: all 0.3s ease;">
            View Terminal Options
          </a>
          
          <a href="#" class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
             style="border-color: #973131; color: #973131;">
            Get Custom Quote
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img src="@/../images/TransparentLogo.png" alt="POS Terminal" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-indigo-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Terminal Types Section -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">POS Terminal Options</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <!-- Terminal options container with border -->
        <div class="terminals-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Countertop Terminals -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 terminal-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-500">Countertop Terminals</h2>
              </div>
              <p class="text-gray-700">
                Traditional countertop terminals perfect for retail stores, restaurants, and any business with a fixed checkout location. Reliable, fast, and secure payment processing.
              </p>
            </div>

            <!-- Mobile Terminals -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 terminal-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-purple-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-purple-500">Mobile Terminals</h2>
              </div>
              <p class="text-gray-700">
                Wireless, portable terminals that let you take payments anywhere in your store, at a table, or on the go. Perfect for businesses that need flexibility in payment collection.
              </p>
            </div>

            <!-- Smart Terminals -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 terminal-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-green-500">Smart Terminals</h2>
              </div>
              <p class="text-gray-700">
                Advanced all-in-one terminals with integrated software for inventory management, customer data, and comprehensive business insights. The ultimate solution for modern businesses.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Find the right terminal for your business</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment experts can help you choose the perfect POS terminal solution based on your specific business requirements.</p>
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
  </MainLayout>
</template>

<script setup>
import { onMounted } from 'vue';
import MainLayout from './MainLayout.vue';

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

/* Terminal card hover effects */
.terminal-card {
  transition: all 0.3s ease;
}

.terminal-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
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
</style>
