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
            Simple Process
          </span>
          <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
            Get Started with Adult Payment Processing
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto scroll-reveal opacity-0" style="animation-delay: 0.6s;">
            If you own an adult business, Hurricane Payments has a straightforward process for getting set up for payment processing. Follow these simple steps to set up your adult merchant account:
          </p>
        </div>
        
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="0">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-red-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Industry Expertise</h3>
            <p class="text-gray-700">
              Benefit from our specialized knowledge in adult business payment processing
            </p>
          </div>
          
          <!-- Step 2 -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="200">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Competitive Rates</h3>
            <p class="text-gray-700">
              Get fair pricing designed specifically for high-risk merchants
            </p>
          </div>
          
          <!-- Step 3 -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="400">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Fast Approval Process</h3>
            <p class="text-gray-700">
              Start processing payments in days, not weeks or months
            </p>
          </div>
          
          <!-- Step 4 -->
          <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="600">
            <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-green-100 to-green-200 rounded-full pulse-slow"></div>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Advanced Fraud Protection</h3>
            <p class="text-gray-700">
              Protect your business with cutting-edge security solutions
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
                <span class="relative inline-block">
                  <span class="relative z-10">Why Choose</span>
                  <span class="absolute bottom-0 left-0 w-full h-3 bg-red-100 transform -rotate-1"></span>
                </span>
                <span class="block mt-2">Hurricane Payments for</span>
                <span class="block mt-2 text-custom-red">Adult Payment Processing?</span>
              </h2>
              
              <p class="text-lg text-gray-700 mb-6">
                Adult entertainment businesses face unique challenges in the payment processing world. As a high-risk industry, many traditional banks and payment processors are hesitant to work with adult merchants. Choose a payment processor who understands the adult entertainment industry.
              </p>
              
              <div class="bg-gradient-to-r from-red-50 to-red-100 p-6 rounded-lg mb-8 transform hover:scale-[1.02] transition duration-300">
                <p class="text-gray-800 font-medium italic">
                  "Hurricane payments works with over 20 financial partners, so we can get you approved and ready to accept credit card payments quickly."
                </p>
              </div>
              
              <div class="space-y-5 mb-8">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-sm fade-in-slide-up" style="animation-delay: 100ms;">
                  <div class="flex-shrink-0 mr-4">
                    <div class="bg-red-100 p-2 rounded-full w-12 h-12 flex items-center justify-center">
                      <span class="text-custom-red font-bold text-xl">1</span>
                    </div>
                  </div>
                  <div>
                    <h3 class="font-semibold">Industry Expertise</h3>
                    <p class="text-gray-700">Benefit from our specialized knowledge in adult business payment processing</p>
                  </div>
                </div>
                
                <div class="flex items-center p-4 bg-white rounded-lg shadow-sm fade-in-slide-up" style="animation-delay: 200ms;">
                  <div class="flex-shrink-0 mr-4">
                    <div class="bg-blue-100 p-2 rounded-full w-12 h-12 flex items-center justify-center">
                      <span class="text-blue-500 font-bold text-xl">2</span>
                    </div>
                  </div>
                  <div>
                    <h3 class="font-semibold">Competitive Rates</h3>
                    <p class="text-gray-700">Get fair pricing designed specifically for high-risk merchants</p>
                  </div>
                </div>
                
                <div class="flex items-center p-4 bg-white rounded-lg shadow-sm fade-in-slide-up" style="animation-delay: 300ms;">
                  <div class="flex-shrink-0 mr-4">
                    <div class="bg-purple-100 p-2 rounded-full w-12 h-12 flex items-center justify-center">
                      <span class="text-purple-500 font-bold text-xl">3</span>
                    </div>
                  </div>
                  <div>
                    <h3 class="font-semibold">Fast Approval Process</h3>
                    <p class="text-gray-700">Start processing payments in days, not weeks or months</p>
                  </div>
                </div>
                
                <div class="flex items-center p-4 bg-white rounded-lg shadow-sm fade-in-slide-up" style="animation-delay: 400ms;">
                  <div class="flex-shrink-0 mr-4">
                    <div class="bg-green-100 p-2 rounded-full w-12 h-12 flex items-center justify-center">
                      <span class="text-green-500 font-bold text-xl">4</span>
                    </div>
                  </div>
                  <div>
                    <h3 class="font-semibold">Advanced Fraud Protection</h3>
                    <p class="text-gray-700">Protect your business with cutting-edge security solutions</p>
                  </div>
                </div>
              </div>
              
              <div class="mt-8 transform hover:scale-105 transition duration-300">
                <router-link 
                  to="/request-consultation" 
                  class="fancy-button text-white font-medium py-4 px-10 rounded-md shadow-lg inline-block" 
                  style="background-color: #973131; transition: all 0.3s ease;">
                  Get Your Account Today!
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
  
      <!-- Why Choose Section with Texture -->
      <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 py-24 overflow-hidden">
        <!-- Texture overlay -->
        <div class="absolute inset-0 opacity-10">
          <div class="absolute inset-0" :style="{ backgroundImage: 'url(\'data:image/svg+xml,%3Csvg width=\\\'20\\\' height=\\\'20\\\' viewBox=\\\'0 0 20 20\\\' xmlns=\\\'http://www.w3.org/2000/svg\\\'%3E%3Crect width=\\\'2\\\' height=\\\'2\\\' fill=\\\'%23ffffff\\\' fill-opacity=\\\'0.4\\\'/%3E%3C/svg%3E\')' }"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
          <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
              <h2 class="text-4xl font-bold mb-6 text-white">
                Why Choose Hurricane Payments for Your Adult Entertainment Payment Processing?
              </h2>
              <p class="text-lg text-gray-300 mb-8">
                Businesses in the adult entertainment industry face unique challenges in the payment processing world. As a high-risk industry, many traditional payment processors are hesitant to work with adult merchants. You'll need the right payment processing partner to get your adult merchant account set up so you can accept credit cards. Let a Hurricane Payments dedicated account manager help you get your adult merchant account and payment processing organized.
              </p>
              <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
                <h3 class="text-2xl font-bold mb-4 text-white">Tailored Solutions for the Adult Industry</h3>
                <p class="text-gray-300">
                  At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of adult businesses, ensuring you can process payments securely and efficiently. If you need an adult merchant account, trust Hurricane Payments to provide the perfect solution for your adult business needs.
                </p>
              </div>
            </div>
            <div class="lg:w-1/2">
              <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-red-500/30 to-purple-500/30 rounded-xl blur-xl"></div>
                <img :src="adultCameraImg" alt="Adult Industry Solutions" class="relative rounded-lg shadow-2xl w-full" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Why Choose Section with Light Background -->
      <div class="bg-white py-24">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <span class="inline-block bg-red-50 text-custom-red px-4 py-2 rounded-full font-medium text-sm uppercase tracking-wide mb-4">Industry Leaders</span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-8" style="color: #973131;">
              Why Choose Hurricane Payments for Your Adult Entertainment Payment Processing?
            </h2>
            <div class="w-24 h-1 bg-custom-red mx-auto rounded-full mb-8"></div>
          </div>
          
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="p-6">
                <div class="flex items-start">
                  <div class="p-3 bg-red-50 rounded-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                  </div>
                  <div>
                    <h3 class="text-2xl font-bold mb-3">High-Risk Industry Expertise</h3>
                    <p class="text-gray-700 leading-relaxed">
                      Businesses in the adult entertainment industry face unique challenges in the payment processing world. As a high-risk industry, many traditional payment processors are hesitant to work with adult merchants.
                    </p>
                  </div>
                </div>
                
                <div class="ml-16 mt-4 pl-5 border-l-2 border-red-100">
                  <p class="text-gray-600 italic">
                    "You'll need the right payment processing partner to get your adult merchant account set up so you can accept credit cards."
                  </p>
                </div>
              </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="p-6">
                <h3 class="text-2xl font-bold mb-4" style="color: #973131;">Tailored Solutions for the Adult Industry</h3>
                <div class="w-16 h-1 bg-custom-red rounded-full mb-5"></div>
                <p class="text-gray-700 mb-6 leading-relaxed">
                  At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of adult businesses, ensuring you can process payments securely and efficiently.
                </p>
                
                <div class="space-y-3">
                  <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-custom-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Advanced fraud protection & security features</span>
                  </div>
                  <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-custom-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Competitive rates for high-risk merchants</span>
                  </div>
                  <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-custom-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Fast approval & setup process</span>
                  </div>
                  <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-custom-red mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Dedicated account managers</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="flex justify-center">
            <div class="flex items-center space-x-8 p-4 bg-red-50 rounded-full">
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </div>
                <span class="font-medium">Secure Processing</span>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </div>
                <span class="font-medium">Fair Rates</span>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <span class="font-medium">24/7 Support</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Why is an Adult Merchant Account Considered High-Risk? Section -->
      <div class="bg-gradient-to-r from-gray-50 to-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Why is an Adult Merchant Account Considered High-Risk?</h2>
          
          <div class="bg-white p-10 rounded-xl shadow-lg">
            <div class="flex flex-col md:flex-row items-start gap-12">
              <div class="md:w-1/2 relative z-10 self-center">
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                  Adult businesses are classified as high-risk merchants. That's because every adult business faces a high rate of chargebacks and a high risk of fraud. Card-not-present transactions are risky for payment processing services. These factors lead to the high-risk designation making it difficult for any merchant in the adult industry to find a credit card processing company.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                  Being labeled as a high-risk merchant necessitates partnering with a payment processor experienced in high-risk accounts. Adult payment processors like Hurricane Payments understand the risks and make the best financial partners.
                </p>
              </div>
              <div class="md:w-1/2">
                <div class="rounded-lg overflow-hidden shadow-lg">
                  <img :src="adultHighRiskImg" alt="Adult High Risk Merchant Account" class="w-full h-auto transform transition hover:scale-105 duration-500">
                </div>
              </div>
            </div>
            
            <div class="flex items-center justify-center my-8">
              <div class="w-24 h-1 bg-red-200 rounded-full"></div>
            </div>
            
            <div class="max-w-5xl mx-auto">
              <h3 class="text-2xl font-bold mb-4" style="color: #973131;">Choose an Adult Merchant Account Provider</h3>
              <p class="text-lg text-gray-700 leading-relaxed">
                Adult merchant account providers and payment processing companies work specifically with businesses in the adult industry. They understand the risks adult businesses face and have the expertise to navigate credit card processing in this industry. Avoid disruptions by choosing Hurricane Payments, a leader in high-risk merchant account solutions for the adult entertainment industry.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Adult Content Guidelines Section with Page Break -->
      <div class="py-16">
        <div class="max-w-5xl mx-auto px-6 mb-12">
          <hr class="border-t-2 border-red-200 w-1/3 mx-auto mb-12">
          
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Adult Content Guidelines</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Acceptable Content -->
            <div class="bg-green-50 p-8 rounded-xl relative overflow-hidden">
              <div class="absolute top-0 right-0 w-24 h-24 bg-green-100 rounded-full -mt-8 -mr-8 z-0"></div>
              <h3 class="text-2xl font-bold mb-6 text-green-800 relative z-10">Acceptable Content</h3>
              <ul class="space-y-3 relative z-10">
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Legal adult entertainment</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Age-verified access controls</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Clear content warnings</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Consensual adult material</span>
                </li>
              </ul>
            </div>
            
            <!-- Prohibited Content -->
            <div class="bg-red-50 p-8 rounded-xl relative overflow-hidden">
              <div class="absolute top-0 right-0 w-24 h-24 bg-red-100 rounded-full -mt-8 -mr-8 z-0"></div>
              <h3 class="text-2xl font-bold mb-6 text-red-800 relative z-10">Prohibited Content</h3>
              <ul class="space-y-3 relative z-10">
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Illegal or non-consensual content</span>
                </li>
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Content involving minors</span>
                </li>
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Extreme or violent material</span>
                </li>
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Misleading or fraudulent practices</span>
                </li>
              </ul>
            </div>
          </div>
          
          <p class="text-center text-gray-700 mt-8">
            Adhering to these guidelines helps ensure compliance with regulations and maintains a safer environment for all users.
          </p>
        </div>
      </div>

      <!-- Adult Payment Gateway Section -->
      <div class="bg-gradient-to-r from-gray-50 to-red-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Adult Payment Gateway</h2>
          
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
                  <img :src="adultGatewayImg" alt="Adult Payment Gateway" class="w-full h-auto transform transition hover:scale-105 duration-500">
                </div>
              </div>
            </div>
            
            <div class="flex items-center justify-center my-8">
              <div class="w-24 h-1 bg-red-200 rounded-full"></div>
            </div>
            
            <h3 class="text-2xl font-bold mb-8 text-center" style="color: #973131;">Choose The Best Adult Payment Gateway Provider For Enhanced Security</h3>
            
            <p class="text-lg text-gray-700 leading-relaxed max-w-5xl mx-auto">
              Choose a host merchant services company that can get your adult business set up with a high-risk payment gateway. At Hurricane Payments, we have years of experience providing merchant account services to high-risk merchants. We'll get you set up with an adult merchant account, payment processing, and a secure payment gateway. Select the best adult payment processor to ensure you can securely accept payments both online and in person.
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
      <div class="bg-[#973131] py-16 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
          <div class="absolute top-0 right-0 bg-white rounded-full w-64 h-64 -mt-20 -mr-20"></div>
          <div class="absolute bottom-0 left-0 bg-white rounded-full w-80 h-80 -mb-32 -ml-32"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
          <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6 text-white">Ready to Get Started?</h2>
            <p class="text-xl mb-10 text-white opacity-90">
              Apply for your adult industry merchant account today and experience hassle-free payment processing.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
              <!-- Request Consultation -->
              <router-link 
                to="/request-consultation" 
                class="bg-white text-[#973131] hover:bg-red-50 font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300 flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                Request a Consultation
              </router-link>

              <!-- Call -->
              <a 
                href="tel:+18884400936" 
                class="bg-white text-[#973131] hover:bg-red-50 font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300 flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                Call Hurricane Payments<br/>
                <span class="text-sm">1-888-440-0936</span>
              </a>

              <!-- Email -->
              <a 
                href="https://mail.google.com/mail/?view=cm&fs=1&to=Thomas@hurricanepayments.com" 
                target="_blank"
                rel="noopener noreferrer"
                class="bg-white text-[#973131] hover:bg-red-50 font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300 flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Email Hurricane Payments<br/>
                <span class="text-sm">Thomas@hurricanepayments.com</span>
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
  import adultIndustryImg from '@/../images/adultcamera(3).jpg';
  import adultMerchantImg from '@/../images/adultcamera(2).jpg';
  import adultCameraImg from '@/../images/adultcamera.jpg';
  import adultGatewayImg from '@/../images/adult(4).jpg';
  import adultHighRiskImg from '@/../images/adult(1).jpg';
  
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

  /* Make CTA buttons more distinct */
  .fancy-button {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    letter-spacing: 0.03em;
  }

  /* Enhance body text readability */
  p {
    line-height: 1.6;
    font-weight: 400;
  }

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