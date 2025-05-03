<template>
  <MainLayout>
    <!-- Hero Section with same animations as home.vue -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Firearms Merchant Account Solutions
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <h2 class="text-reveal-content text-2xl lg:text-3xl font-semibold leading-tight delay-200 text-gray-800">
            Is Your Firearms Business Classified as High-Risk? Here's What You Need to Know
          </h2>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Secure a high-risk firearms merchant account from Hurricane Payments. Our specialized payment processing accounts are tailored to firearms industry businesses, providing robust solutions for both online and in-store credit card processing.
          </p>
          
          <ul class="mt-4 space-y-2">
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 100ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Dedicated Account Managers</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 200ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Fast and Easy Application Process</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 300ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Recurring Billing Options</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 400ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">20+ Financial Partners</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 500ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Chargeback Mitigation</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 600ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Years of Experience With High-Risk Merchants</span>
            </li>
          </ul>
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
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img :src="firearmsIndustryImg" alt="Firearms Industry Payment Processing" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Firearms Merchant Accounts Section -->
    <div class="container mx-auto px-6 py-20 mt-8">
      <!-- Section Header -->
      <div class="text-center mb-16 scroll-reveal opacity-0">
        <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
          Streamlined Setup for Firearms Payment Processing
        </span>
        <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
          Four Easy Steps to Establish Your Firearms Merchant Account
        </h2>
      </div>
      
      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Quick Online Application -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="0">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-red-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #973131;">1</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Quick Online Application</h3>
          <p class="text-gray-700">
            Initiate your firearms merchant account with our straightforward online application process.
          </p>
        </div>
        
        <!-- Document Submission -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="200">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #2196F3;">2</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Document Submission</h3>
          <p class="text-gray-700">
            Provide essential documentation to support your firearms business application.
          </p>
        </div>
        
        <!-- Expert Underwriting Assistance -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="400">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #9C27B0;">3</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Expert Underwriting Assistance</h3>
          <p class="text-gray-700">
            Benefit from our specialized underwriting team's guidance for firearms businesses.
          </p>
        </div>
        
        <!-- Launch Secure Payment Processing -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="600">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-green-100 to-green-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #4CAF50;">4</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Launch Secure Payment Processing</h3>
          <p class="text-gray-700">
            Start accepting payments for firearms products and expand your business revenue.
          </p>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 py-16">
      <div class="container mx-auto px-6">
        <div class="bg-white rounded-xl shadow-xl p-8 lg:p-12 max-w-4xl mx-auto">
          <div class="text-center mb-8">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-lg text-gray-600">Apply for your firearms industry merchant account today and experience hassle-free payment processing.</p>
          </div>
          
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link 
              to="/request-consultation" 
              class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg text-center" 
              style="background-color: #973131; transition: all 0.3s ease;">
              Request Consultation
            </router-link>
            
            <a 
              href="tel:8005678890" 
              class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center justify-center"
              style="border-color: #973131; color: #973131;">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Call Us
            </a>
          </div>
        </div>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import MainLayout from '../MainLayout.vue';

// Import images 
import firearmsIndustryImg from '@/../images/specialty.jpg'; // Using a placeholder image
import firearmsMerchantImg from '@/../images/homepic.png'; // Using a placeholder image

// Function to scroll to next section
const scrollToNextSection = () => {
  window.scrollBy({
    top: window.innerHeight,
    behavior: 'smooth'
  });
};

onMounted(() => {
  // Function to handle scroll reveal animations
  const handleScrollReveal = () => {
    const scrollRevealElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right');
    
    scrollRevealElements.forEach(element => {
      const elementTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementTop < windowHeight * 0.9) {
        element.classList.add('reveal-active');
        element.classList.remove('opacity-0');
      }
    });
    
    // Animate stats cards sequentially
    const statsCards = document.querySelectorAll('.stats-card');
    statsCards.forEach((card, index) => {
      const delay = parseInt(card.getAttribute('data-delay')) || (index * 200);
      const elementTop = card.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementTop < windowHeight * 0.9) {
        setTimeout(() => {
          card.classList.add('reveal-active');
          card.classList.remove('opacity-0');
        }, delay);
      }
    });
  };
  
  // Initial check for elements in viewport on page load
  handleScrollReveal();
  
  // Add scroll event listener
  window.addEventListener('scroll', handleScrollReveal);
  
  // Cleanup event listener on component unmount
  return () => {
    window.removeEventListener('scroll', handleScrollReveal);
  };
});
</script>

<style scoped>
/* Animation Classes */
.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right {
  transition: all 0.8s cubic-bezier(0.17, 0.67, 0.3, 0.96);
}

.scroll-reveal-left {
  transform: translateX(-50px);
}

.scroll-reveal-right {
  transform: translateX(50px);
}

.reveal-active {
  opacity: 1 !important;
  transform: translateX(0) !important;
}

.fade-in-slide-up {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInSlideUp 0.8s forwards;
}

@keyframes fadeInSlideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Card animations */
.card-reveal {
  opacity: 0;
  transform: translateY(40px);
  animation: cardReveal 1s cubic-bezier(0.17, 0.67, 0.3, 0.96) forwards;
}

@keyframes cardReveal {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Text reveal animation */
.text-reveal {
  position: relative;
  overflow: hidden;
}

.text-reveal-content {
  opacity: 0;
  animation: textReveal 1s ease forwards;
}

@keyframes textReveal {
  to {
    opacity: 1;
  }
}

.slide-in-left {
  opacity: 0;
  transform: translateX(-50px);
  animation: slideInLeft 1s cubic-bezier(0.17, 0.67, 0.3, 0.96) forwards;
}

.slide-in-right {
  opacity: 0;
  transform: translateX(50px);
  animation: slideInRight 1s cubic-bezier(0.17, 0.67, 0.3, 0.96) forwards;
}

@keyframes slideInLeft {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.delay-200 {
  animation-delay: 0.2s;
}

.delay-300 {
  animation-delay: 0.3s;
}

.delay-400 {
  animation-delay: 0.4s;
}

.delay-500 {
  animation-delay: 0.5s;
}

/* Pulse animation for stats backgrounds */
.pulse-slow {
  animation: pulseSlow 6s infinite alternate;
}

@keyframes pulseSlow {
  0% {
    transform: scale(1);
    opacity: 0.6;
  }
  100% {
    transform: scale(1.1);
    opacity: 1;
  }
}

/* Fancy button hover effect */
.fancy-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(151, 49, 49, 0.4);
}

/* Hover scale effect */
.hover-scale:hover {
  transform: scale(1.05);
}

/* Custom color variables */
.text-custom-red {
  color: #973131;
}

.bg-custom-red {
  background-color: #973131;
}
</style>
