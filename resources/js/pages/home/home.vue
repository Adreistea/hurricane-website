<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Navigation Bar with Slide Down Animation -->
    <nav class="container mx-auto px-6 py-4 slide-in-down">
      <div class="flex items-center justify-between">
        <!-- Logo with Slide Left Animation -->
        <div class="flex items-center slide-in-left delay-200">
          <img :src="logoImg" alt="Electronic Merchant Systems" class="h-12 w-auto" />
        </div>
        
        <!-- Navigation Links with Sequenced Menu Item Animation -->
        <div class="hidden md:flex space-x-8">
          <div class="group relative menu-item" style="animation-delay: 0.1s;">
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors duration-300 font-medium">
              Solutions
              <span class="ml-1">▾</span>
            </a>
            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-4 w-48 mt-2 z-10 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2">
              <a href="#" class="block py-2 hover:text-indigo-600">Payment Processing</a>
              <a href="#" class="block py-2 hover:text-indigo-600">Financial Services</a>
              <a href="#" class="block py-2 hover:text-indigo-600">Point of Sale</a>
            </div>
          </div>
          
          <div class="group relative menu-item" style="animation-delay: 0.2s;">
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors duration-300 font-medium">
              Industries
              <span class="ml-1">▾</span>
            </a>
            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-4 w-48 mt-2 z-10 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2">
              <a href="#" class="block py-2 hover:text-indigo-600">Retail</a>
              <a href="#" class="block py-2 hover:text-indigo-600">Restaurant</a>
              <a href="#" class="block py-2 hover:text-indigo-600">E-commerce</a>
            </div>
          </div>
          
          <div class="group relative menu-item" style="animation-delay: 0.3s;">
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors duration-300 font-medium">
              Partnerships
              <span class="ml-1">▾</span>
            </a>
            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-4 w-48 mt-2 z-10 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2">
              <a href="#" class="block py-2 hover:text-indigo-600">Become a Partner</a>
              <a href="#" class="block py-2 hover:text-indigo-600">Partner Programs</a>
              <a href="#" class="block py-2 hover:text-indigo-600">Partner Resources</a>
            </div>
          </div>
        </div>
        
        <!-- CTA Button with direct inline styles to ensure color is applied -->
        <div class="slide-in-right delay-300">
          <a href="#" class="fancy-button text-white font-medium py-2 px-6 rounded-md shadow-md" 
             style="background-color: #973131; transition: all 0.3s ease;">
            Request a Consultation
          </a>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Innovative, cost-effective payment processing
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            We are a leading payment processing company with more than 30 years of experience assisting businesses like yours.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <a href="#" class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
             style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </a>
          
          <a href="#" class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
             style="border-color: #973131; color: #973131;">
            See our Solutions
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        
        <div class="mt-10 slide-in-left delay-600">
          <div class="flex items-center mb-3">
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" v-for="i in 5" :key="i">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
            </div>
            <span class="ml-2 text-sm text-gray-600">Based on <a href="#" class="text-indigo-600 hover:underline">1,000+ Google Reviews</a></span>
          </div>
          
          <blockquote class="italic text-gray-600 border-l-4 border-indigo-300 pl-4">
            "EMS has been a pleasure to work with. Always providing great customer service. Our representative is always available to assist and as a small business we appreciate that."
          </blockquote>
          
          <p class="mt-3 font-semibold">AME Loyal Inc</p>
        </div>
      </div>
      
      <!-- Right Content - Dashboard Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img :src="dashboardImg" alt="Dashboard Interface" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
// Import using the @ alias which points to resources/js
import dashboardImg from '@/../images/homepic.png';
// Import logo image
import logoImg from '@/../images/TransparentLogo.png';

// Add staggered animation timing for dashboard elements
onMounted(() => {
  // If you have any elements that need staggered animation timing
  const staggerItems = document.querySelectorAll('.stagger-item');
  staggerItems.forEach((item, index) => {
    item.style.animationDelay = `${0.1 + index * 0.1}s`;
  });

  document.querySelectorAll('.fancy-button').forEach(button => {
    // Add hover effect
    button.addEventListener('mouseenter', () => {
      button.style.backgroundColor = '#7e2929'; // Darker shade for hover
    });
    
    // Remove hover effect
    button.addEventListener('mouseleave', () => {
      button.style.backgroundColor = '#973131'; // Original color
    });
  });
});
</script>

<style scoped>
/* Enhanced Animations */
.animate-fade-in-slide-up {
  animation: fadeInSlideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  will-change: transform, opacity;
  backface-visibility: hidden;
}

.animation-delay-200 {
  animation-delay: 0.2s;
}

.animation-delay-300 {
  animation-delay: 0.3s;
}

.animation-delay-400 {
  animation-delay: 0.4s;
}

.animation-delay-600 {
  animation-delay: 0.6s;
}

@keyframes fadeInSlideUp {
  from {
    opacity: 0;
    transform: translateY(30px);
    filter: blur(5px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
}

/* Add a subtle hover animation to buttons */
.hover-lift {
  transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), 
              box-shadow 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.hover-lift:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Add staggered animation for dashboard items */
.stagger-item {
  opacity: 0;
  transform: translateY(20px);
  animation: staggerFade 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes staggerFade {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Subtle pulse animation for the dashboard icons */
.pulse-icon {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}

/* Slide Animations */
.slide-in-right {
  animation: slideInRight 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-left {
  animation: slideInLeft 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-up {
  animation: slideInUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-down {
  animation: slideInDown 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

/* Delay classes */
.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-400 { animation-delay: 0.4s; }
.delay-500 { animation-delay: 0.5s; }
.delay-600 { animation-delay: 0.6s; }
.delay-700 { animation-delay: 0.7s; }

/* Keyframes for slide animations */
@keyframes slideInRight {
  from {
    transform: translateX(100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInLeft {
  from {
    transform: translateX(-100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInUp {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes slideInDown {
  from {
    transform: translateY(-50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Enhanced hover effects */
.hover-scale {
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.hover-scale:hover {
  transform: scale(1.05);
  background-color: rgba(151, 49, 49, 0.05); /* Very light burgundy background on hover */
}

/* Fancy button animation */
.fancy-button {
  position: relative;
  overflow: hidden;
}

.fancy-button::after {
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

.fancy-button:hover::after {
  transform: translateX(100%);
}

/* Card reveal animation */
.card-reveal {
  animation: cardReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
  transform-origin: bottom center;
}

@keyframes cardReveal {
  from {
    transform: perspective(1000px) rotateX(30deg) translateY(100px);
    opacity: 0;
  }
  to {
    transform: perspective(1000px) rotateX(0) translateY(0);
    opacity: 1;
  }
}

/* Text reveal animation */
.text-reveal {
  overflow: hidden;
  position: relative;
}

.text-reveal-content {
  animation: textReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
}

@keyframes textReveal {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Menu items animation */
.menu-item {
  transform: translateX(-20px);
  opacity: 0;
  animation: menuSlide 0.5s ease forwards;
}

@keyframes menuSlide {
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

/* Custom color classes for the burgundy red (#973131) */
:root {
  --custom-red: #973131;
  --custom-red-dark: #7e2929;
}

.bg-custom-red {
  background-color: var(--custom-red);
}

.bg-custom-red-dark {
  background-color: var(--custom-red-dark);
}

.text-custom-red {
  color: var(--custom-red);
}

.border-custom-red {
  border-color: var(--custom-red);
}

/* Updated hover effect for buttons */
.hover-scale:hover {
  transform: scale(1.05);
  border-color: var(--custom-red);
}
</style>
