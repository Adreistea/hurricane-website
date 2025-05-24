<template>
  <MainLayout>
    <!-- Hero Section with same animations as home.vue -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Health & Beauty Industry Payment Processing
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <h2 class="text-reveal-content text-2xl lg:text-3xl font-semibold leading-tight delay-200 text-gray-800">
            Is your health and beauty business considered high-risk?
          </h2>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            A high-risk merchant account is essential for health and beauty businesses. These specialized payment processing accounts are designed for merchants classified in high-risk categories, providing the necessary solutions for online credit card processing in the health and beauty industry.
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
              <span class="ml-3 text-gray-700">Years High-Risk Experience</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 300ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Fast and Easy Application Process</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 400ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Recurring Billing Options</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 500ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">20+ Financial Partners</span>
            </li>
            <li class="flex items-start fade-in-slide-up" style="animation-delay: 600ms;">
              <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <span class="ml-3 text-gray-700">Chargeback Mitigation</span>
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
          <img :src="firstImage" alt="Health & Beauty Payment Processing" class="w-full h-[800px] object-cover" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Health & Beauty Merchant Accounts Section -->
    <div class="container mx-auto px-6 py-20 mt-8">
      <!-- Section Header -->
      <div class="text-center mb-16 scroll-reveal opacity-0">
        <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
          Simple Process
        </span>
        <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
          Get Started with Health & Beauty Payment Processing
        </h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto scroll-reveal opacity-0" style="animation-delay: 0.6s;">
          Follow these simple steps to set up your health and beauty merchant account
        </p>
      </div>
      
      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Step 1 -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="0">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-red-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #973131;">1</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Complete an online application</h3>
          <p class="text-gray-700">
            Start your journey with a simple online application process for your health and beauty business.
          </p>
        </div>
        
        <!-- Step 2 -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="200">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #2196F3;">2</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Submit necessary documentation</h3>
          <p class="text-gray-700">
            Provide the required documents to support your health and beauty merchant account application.
          </p>
        </div>
        
        <!-- Step 3 -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="400">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #9C27B0;">3</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Benefit from our underwriting team's assistance</h3>
          <p class="text-gray-700">
            Our expert team will guide you through the underwriting process for health and beauty businesses.
          </p>
        </div>
        
        <!-- Step 4 -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="600">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-green-100 to-green-200 rounded-full pulse-slow"></div>
            <div class="relative">
              <div class="text-4xl font-bold" style="color: #4CAF50;">4</div>
            </div>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Start processing payments and growing your revenue</h3>
          <p class="text-gray-700">
            Begin accepting payments for your health and beauty products and watch your business thrive.
          </p>
        </div>
      </div>
    </div>

    <!-- Why Choose Section with Texture -->
    <div id="high-risk" class="relative bg-gradient-to-br from-gray-900 to-gray-800 py-24 overflow-hidden">
      <!-- Texture overlay -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" :style="{ backgroundImage: 'url(\'data:image/svg+xml,%3Csvg width=\\\'20\\\' height=\\\'20\\\' viewBox=\\\'0 0 20 20\\\' xmlns=\\\'http://www.w3.org/2000/svg\\\'%3E%3Crect width=\\\'2\\\' height=\\\'2\\\' fill=\\\'%23ffffff\\\' fill-opacity=\\\'0.4\\\'/%3E%3C/svg%3E\')' }"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <div class="lg:w-1/2">
            <div class="relative">
              <div class="absolute -inset-4 bg-gradient-to-r from-red-500/30 to-purple-500/30 rounded-xl blur-xl"></div>
              <img :src="thirdImage" alt="Health & Beauty Solutions" class="relative rounded-lg shadow-2xl w-full" />
            </div>
          </div>
          <div class="lg:w-1/2">
            <h2 class="text-4xl font-bold mb-6 text-white">
              Why is the Health and Beauty Industry Considered High-Risk?
            </h2>
            <p class="text-lg text-gray-300 mb-8">
              Health and beauty businesses face unique challenges in the payment processing world. As a high-risk industry, many traditional banks and payment processors are hesitant to work with health and beauty merchants. Whether you run a spa or sell hair products, beauty industry companies deal with high chargeback ratios on customer transactions.
            </p>
            <p class="text-lg text-gray-300 mb-8">
              On top of that, some companies put client satisfaction at risk because of unfounded claims they make about products and services. High chargeback rates and reputational risks mean that traditional payment processors are hesitant to provide merchant services and process card payments.
            </p>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
              <h3 class="text-2xl font-bold mb-4 text-white">Choose the Best Health & Beauty Payment Processor</h3>
              <p class="text-gray-300">
                Being labeled as a high-risk merchant necessitates partnering with a payment processor experienced in high-risk accounts. Avoid disruptions by choosing Hurricane Payments, a leader in high-risk merchant account solutions for the health and beauty industry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Payment Gateway Section -->
    <div id="payment-gateway" class="bg-gradient-to-r from-gray-50 to-red-50 py-16">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Health & Beauty Payment Gateway</h2>
        
        <div class="bg-white p-10 rounded-xl shadow-lg mb-10 relative overflow-hidden">
          <div class="absolute top-0 right-0 h-32 w-32 bg-red-50 rounded-full -mt-10 -mr-10"></div>
          
          <div class="flex flex-col md:flex-row items-start gap-12">
            <div class="md:w-1/2 relative z-10 self-center">
              <p class="text-lg text-gray-700 leading-relaxed">
                If you accept online transactions, you need more than a merchant account. Secure payment gateways are also necessary for online credit card processing. A payment gateway is the virtual equivalent of a credit card terminal. It serves as the middleman between the customer, the merchant, and the customer's financial institution. Payment gateways allow secure credit card processing instantaneously.
              </p>
            </div>
            <div class="md:w-1/2">
              <div class="rounded-lg overflow-hidden shadow-lg">
                <img :src="fourthImage" alt="Health & Beauty Payment Gateway" class="w-full h-auto transform transition hover:scale-105 duration-500">
              </div>
            </div>
          </div>
          
          <div class="flex items-center justify-center my-8">
            <div class="w-24 h-1 bg-red-200 rounded-full"></div>
          </div>
          
          <h3 class="text-2xl font-bold mb-8 text-center" style="color: #973131;">Choose The Best Health & Beauty Payment Gateway Provider For Enhanced Security</h3>
          
          <p class="text-lg text-gray-700 leading-relaxed max-w-5xl mx-auto">
            Choose a host merchant services company that can get your health and beauty business set up with a high-risk payment gateway. At Hurricane Payments, we have years of experience providing merchant account services to high-risk merchants. We'll get you set up with a health and beauty merchant account, payment processing, and a secure payment gateway.
          </p>
          
          <div class="mt-10 flex justify-center">
            <router-link 
              to="/request-consultation" 
              class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
              style="background-color: #973131; transition: all 0.3s ease;">
              Get Started
            </router-link>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <CtaSection subheading="Apply for your health and beauty industry merchant account today and experience hassle-free payment processing." />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import MainLayout from '../MainLayout.vue';
import CtaSection from '../../components/CtaSection.vue';

// Import images 
import firstImage from '@/../images/healthbeauty.jpg';
import secondImage from '@/../images/healthbeauty(2).jpg';
import thirdImage from '@/../images/healthbeauty(3).jpg';
import fourthImage from '@/../images/healthbeauty(4).jpg';

// Function to scroll to next section
const scrollToNextSection = () => {
  window.scrollBy({
    top: window.innerHeight,
    behavior: 'smooth'
  });
};

// Function to scroll to specific section
const scrollToSection = (sectionId) => {
  const element = document.getElementById(sectionId);
  if (element) {
    const yOffset = -100; // Offset to account for fixed header if needed
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
    window.scrollTo({
      top: y,
      behavior: 'smooth'
    });
  }
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