<template>
    <MainLayout>
      <!-- Hero Section with same animations as home.vue -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
              Adult Payment Processing and Merchant Account
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-300">
              At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of the adult industry, ensuring you can process payments securely and efficiently. If you need an adult merchant account, trust Hurricane Payments! We have decades of experience working with adult businesses and other high-risk merchants.
            </p>
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
            <img :src="adultIndustryImg" alt="Adult Industry Payment Processing" class="w-full h-auto" />
          </div>
          
          <!-- Animated decorative elements -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        </div>
      </div>
  
      <!-- Adult Entertainment Merchant Accounts Section -->
      <div class="container mx-auto px-6 py-20 mt-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
            Your Business, Our Priority
          </span>
          <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
            Adult Entertainment Merchant Accounts
          </h2>
        </div>
        
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Dedicated Account Managers -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="0">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-red-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="#973131">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Dedicated Account Managers</h3>
            <p class="text-gray-700">
              Get personalized support from specialists who understand your business needs and challenges.
            </p>
          </div>
          
          <!-- Years High-Risk Experience -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="200">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="#2196F3">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Years High-Risk Experience</h3>
            <p class="text-gray-700">
              Benefit from our decades of experience working with adult businesses and high-risk merchants.
            </p>
          </div>
          
          <!-- Fast and Easy Application Process -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="400">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="#9C27B0">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Fast and Easy Application Process</h3>
            <p class="text-gray-700">
              Streamlined application process designed to get your adult business processing payments quickly.
            </p>
          </div>
          
          <!-- Recurring Billing Options -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="600">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-orange-100 to-orange-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="#FF9800">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Recurring Billing Options</h3>
            <p class="text-gray-700">
              Subscription and membership-based businesses can leverage our robust recurring billing solutions.
            </p>
          </div>
          
          <!-- 20+ Financial Partners -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="800">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-green-100 to-green-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="#4CAF50">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">20+ Financial Partners</h3>
            <p class="text-gray-700">
              Access our extensive network of financial partners who specialize in adult industry payment processing.
            </p>
          </div>
          
          <!-- Chargeback Mitigation -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="1000">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-red-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="#973131">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Chargeback Mitigation</h3>
            <p class="text-gray-700">
              Protect your business with tools and strategies to reduce chargebacks and disputes.
            </p>
          </div>
        </div>
      </div>
  
      <!-- Feature Details Section -->
      <div class="container mx-auto px-6 py-24 mt-8">
        <div class="flex flex-col lg:flex-row items-center">
          <!-- Left Content with Text Animation -->
          <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 scroll-reveal-left opacity-0">
            <div class="relative z-10">
              <h2 class="text-4xl font-bold mb-6 text-gray-900">
                Specialized Solutions for
                <span class="block mt-2">Adult Entertainment</span>
                <span class="block mt-2">Businesses</span>
              </h2>
              
              <p class="text-lg text-gray-700 mb-6">
                Our adult merchant accounts are designed to meet the unique needs and challenges faced by businesses in the adult industry. With Hurricane Payments as your payment processor, you'll receive:
              </p>
              
              <ul class="space-y-4 mb-8">
                <li class="flex items-start fade-in-slide-up" style="animation-delay: 100ms;">
                  <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Reliable payment processing tailored to adult businesses</span>
                </li>
                
                <li class="flex items-start fade-in-slide-up" style="animation-delay: 200ms;">
                  <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">High approval rates with competitive pricing</span>
                </li>
                
                <li class="flex items-start fade-in-slide-up" style="animation-delay: 300ms;">
                  <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Enhanced fraud protection and risk management</span>
                </li>
                
                <li class="flex items-start fade-in-slide-up" style="animation-delay: 400ms;">
                  <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Multiple payment gateway integration options</span>
                </li>
                
                <li class="flex items-start fade-in-slide-up" style="animation-delay: 500ms;">
                  <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Continuous support and account monitoring</span>
                </li>
              </ul>
              
              <div class="mt-8">
                <router-link 
                  to="/request-consultation" 
                  class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg inline-block" 
                  style="background-color: #973131; transition: all 0.3s ease;">
                  Request Consultation now!
                </router-link>
              </div>
            </div>
          </div>
          
          <!-- Right Content - Image with Animation -->
          <div class="lg:w-1/2 scroll-reveal-right opacity-0 relative">
            <!-- Image frame with shadow and border effect -->
            <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white transform transition hover:-rotate-1 hover:scale-[1.01] duration-500">
              <img :src="adultMerchantImg" alt="Adult Merchant Account Services" class="w-full h-auto" />
            </div>
            
            <!-- Decorative elements behind the image -->
            <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-8 blur-sm"></div>
            <div class="absolute -z-20 inset-0 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-12 blur-sm"></div>
          </div>
        </div>
      </div>
  
      <!-- CTA Section -->
      <div class="bg-gradient-to-r from-gray-50 to-gray-100 py-16">
        <div class="container mx-auto px-6">
          <div class="bg-white rounded-xl shadow-xl p-8 lg:p-12 max-w-4xl mx-auto">
            <div class="text-center mb-8">
              <h2 class="text-3xl lg:text-4xl font-bold mb-4">Ready to Get Started?</h2>
              <p class="text-lg text-gray-600">Apply for your adult industry merchant account today and experience hassle-free payment processing.</p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <router-link 
                to="/request-consultation" 
                class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg text-center" 
                style="background-color: #973131; transition: all 0.3s ease;">
                Apply Now
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
  import adultIndustryImg from '@/../images/specialty.jpg'; // Using a placeholder image
  import adultMerchantImg from '@/../images/homepic.png'; // Using a placeholder image
  
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
  
  /* YouTube loader animation */
  .youtube-loader {
    animation: fadeOut 0.5s 1s forwards;
  }
  
  @keyframes fadeOut {
    to {
      opacity: 0;
      visibility: hidden;
    }
  }
  
  /* Slow bounce animation */
  .animate-bounce-slow {
    animation: bounceSlow 3s infinite;
  }
  
  @keyframes bounceSlow {
    0%, 100% {
      transform: translateY(-5%);
      animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
    }
    50% {
      transform: translateY(0);
      animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }
  }
  </style> 