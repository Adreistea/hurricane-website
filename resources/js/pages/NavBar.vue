<template>
  <!-- Navigation Bar with Slide Down Animation -->
  <nav class="container mx-auto px-6 py-4 slide-in-down relative z-[100]">
    <div class="flex items-center justify-between">
      <!-- Logo with Slide Left Animation - Now links to home -->
      <div class="flex items-center slide-in-left delay-200">
        <router-link to="/">
          <img :src="logoImg" alt="Electronic Merchant Systems" class="h-12 w-auto" />
        </router-link>
      </div>
      
      <!-- Navigation Links with Sequenced Menu Item Animation -->
      <div class="hidden md:flex space-x-8">
        <!-- Home Link -->
        <div class="menu-item" style="animation-delay: 0.05s;">
          <router-link to="/" class="text-gray-700 hover:text-indigo-600 transition-colors duration-300 font-medium">
            Home
          </router-link>
        </div>
        
        <div class="group relative menu-item" style="animation-delay: 0.1s;">
          <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors duration-300 font-medium">
            Solutions
            <span class="ml-1">▾</span>
          </a>
          <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-4 w-48 mt-2 z-[999] transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2">
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
          <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-4 w-48 mt-2 z-[999] transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2">
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
          <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-4 w-48 mt-2 z-[999] transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2">
            <a href="#" class="block py-2 hover:text-indigo-600">Become a Partner</a>
            <a href="#" class="block py-2 hover:text-indigo-600">Partner Programs</a>
            <a href="#" class="block py-2 hover:text-indigo-600">Partner Resources</a>
          </div>
        </div>
      </div>
      
      <!-- CTA Button with direct inline styles to ensure color is applied -->
      <div class="slide-in-right delay-300">
        <router-link to="/request-consultation" class="fancy-button text-white font-medium py-2 px-6 rounded-md shadow-md" 
          style="background-color: #973131; transition: all 0.3s ease;">
          Request a Consultation
        </router-link>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { onMounted } from 'vue';
// Import logo image
import logoImg from '@/../images/TransparentLogo.png';

onMounted(() => {
  // Fancy button hover effect
  document.querySelectorAll('.fancy-button').forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.style.backgroundColor = '#7e2929'; // Darker shade for hover
    });
    
    button.addEventListener('mouseleave', () => {
      button.style.backgroundColor = '#973131'; // Original color
    });
  });
});
</script>
