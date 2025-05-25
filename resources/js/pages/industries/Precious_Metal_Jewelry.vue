<template>
    <MainLayout>
      <!-- Hero Section with same animations as home.vue -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
              Precious Metals & Jewelry Payment Processing
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-300">
              At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of precious metals dealers and jewelry businesses, ensuring you can process payments securely and efficiently. With extensive experience in high-value transactions and high-risk merchants, we understand your unique requirements.
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
            <img :src="jewelryImg" alt="Precious Metals & Jewelry Payment Processing" class="w-full h-[800px] object-cover" />
          </div>
          
          <!-- Animated decorative elements -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        </div>
      </div>
  
     
  
      <!-- Precious Metals & Jewelry Merchant Accounts Section -->
      <div class="container mx-auto px-6 py-20 mt-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
            Simple Process
          </span>
          <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
            Get Started with Precious Metals & Jewelry Payment Processing
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto scroll-reveal opacity-0" style="animation-delay: 0.6s;">
            If you own a precious metals or jewelry business, Hurricane Payments has a straightforward process for getting set up for payment processing. Follow these simple steps to set up your merchant account:
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
              Benefit from our specialized knowledge in high-value transaction processing
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
              Get fair pricing designed specifically for jewelry and precious metals merchants
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Enhanced Security Features</h3>
            <p class="text-gray-700">
              Protect your high-value transactions with cutting-edge security solutions
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
                <img :src="jewelry2Img" alt="Precious Metals & Jewelry Solutions" class="relative rounded-lg shadow-2xl w-full" />
              </div>
            </div>
            <div class="lg:w-1/2">
              <h2 class="text-4xl font-bold mb-6 text-white">
                Why is a Precious Metals & Jewelry Merchant Account Considered High-Risk?
              </h2>
              <p class="text-lg text-gray-300 mb-8">
                Precious metals and jewelry businesses are classified as high-risk merchants. That's because every precious metals and jewelry business faces a high rate of chargebacks and a high risk of fraud. Card-not-present transactions are risky for payment processing services. These factors lead to the high-risk designation making it difficult for any merchant in the precious metals and jewelry industry to find a credit card processing company.
              </p>
              <p class="text-lg text-gray-300 mb-8">
                Being labeled as a high-risk merchant necessitates partnering with a payment processor experienced in high-risk accounts. Precious metals and jewelry payment processors like Hurricane Payments understand the risks and make the best financial partners.
              </p>
              <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
                <h3 class="text-2xl font-bold mb-4 text-white">Choose a Precious Metals & Jewelry Merchant Account Provider</h3>
                <p class="text-gray-300">
                  Precious metals and jewelry merchant account providers and payment processing companies work specifically with businesses in the precious metals and jewelry industry. They understand the risks precious metals and jewelry businesses face and have the expertise to navigate credit card processing in this industry. Avoid disruptions by choosing Hurricane Payments, a leader in high-risk merchant account solutions for the precious metals and jewelry industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Feature Details Section -->
      <div class="container mx-auto px-6 py-24 mt-8">
        <div class="flex flex-col lg:flex-row items-center">
          <!-- Left Content with Text Animation -->
          <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 scroll-reveal-left opacity-0">
                      <div id="why-choose" class="relative z-10">
            <h2 class="text-4xl font-bold mb-6 text-gray-900">
              <span class="relative inline-block">
                <span class="relative z-10">Why Choose</span>
                <span class="absolute bottom-0 left-0 w-full h-3 bg-red-100 transform -rotate-1"></span>
              </span>
              <span class="block mt-2">Hurricane Payments for</span>
              <span class="block mt-2 text-custom-red">Precious Metals & Jewelry Payment Processing?</span>
            </h2>
              
              <p class="text-lg text-gray-700 mb-6">
                Precious metals and jewelry businesses face unique challenges in the payment processing world. As a high-risk industry, many traditional banks and payment processors are hesitant to work with precious metals and jewelry merchants. Choose a payment processor who understands the precious metals and jewelry industry.
              </p>
              
              <div class="bg-gradient-to-r from-red-50 to-red-100 p-6 rounded-lg mb-8 transform hover:scale-[1.02] transition duration-300">
                <p class="text-gray-800 font-medium italic">
                  "Hurricane payments works with over 20 financial partners, so we can get you approved and ready to accept credit card payments quickly."
                </p>
              </div>
              
              <div class="bg-white p-6 rounded-lg border border-red-100 mb-8">
                <h3 class="text-xl font-bold mb-3" style="color: #973131;">Tailored Solutions for the Precious Metals & Jewelry Industry</h3>
                <p class="text-gray-700">
                  At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of precious metals and jewelry businesses, ensuring you can process payments securely and efficiently. If you need a precious metals and jewelry merchant account, trust Hurricane Payments to provide the perfect solution for your precious metals and jewelry business needs.
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
                    <p class="text-gray-700">Benefit from our specialized knowledge in high-value transaction processing</p>
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
                    <p class="text-gray-700">Get fair pricing designed specifically for jewelry and precious metals merchants</p>
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
                    <h3 class="font-semibold">Enhanced Security Features</h3>
                    <p class="text-gray-700">Protect your high-value transactions with cutting-edge security solutions</p>
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
              <img :src="jewelry3Img" alt="Precious Metals & Jewelry Merchant Account Services" class="w-full h-auto" />
            </div>
            
            <!-- Decorative elements behind the image -->
            <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-8 blur-sm"></div>
            <div class="absolute -z-20 inset-0 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-12 blur-sm"></div>
          </div>
        </div>
      </div>
  


      <!-- Industry Challenges and Solutions Section -->
      <div id="challenges-solutions" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
          <div class="text-center mb-16">
            <span class="inline-block bg-red-50 text-custom-red px-4 py-2 rounded-full font-medium text-sm uppercase tracking-wide mb-4">Solutions That Work</span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-8" style="color: #973131;">
              Common Challenges & Our Solutions
            </h2>
            <div class="w-24 h-1 bg-custom-red mx-auto rounded-full mb-8"></div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Common Problems Column -->
            <div id="common-challenges" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="flex items-center mb-6">
                <div class="p-3 bg-red-50 rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-bold" style="color: #973131;">Common Industry Challenges</h3>
              </div>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">High-value transactions increasing risk profiles</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Market volatility affecting payment processing</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Heightened security requirements for valuable goods</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Difficulty finding traditional payment processors</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Complex verification processes for jewelry/precious metals</span>
                </li>
              </ul>
            </div>

            <!-- General Solutions Column -->
            <div id="industry-solutions" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="flex items-center mb-6">
                <div class="p-3 bg-blue-50 rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-500">Industry Solutions</h3>
              </div>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Specialized high-risk merchant accounts</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Enhanced transaction security measures</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Tailored fraud prevention systems</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Robust verification processes</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">High-value transaction protection</span>
                </li>
              </ul>
            </div>

            <!-- Hurricane Payments Solutions Column -->
            <div id="hurricane-solutions" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="flex items-center mb-6">
                <div class="p-3 bg-green-50 rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-bold text-green-500">Hurricane Payments Solutions</h3>
              </div>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">20+ proven bank relationships for stable processing</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Specialized high-value transaction security</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Fast approval process with competitive rates</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Dedicated account managers for ongoing support</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Multiple payment gateway options for flexibility</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Guidelines Section with Page Break -->
      <div id="content-guidelines" class="py-16">
        <div class="max-w-5xl mx-auto px-6 mb-12">
          <hr class="border-t-2 border-red-200 w-1/3 mx-auto mb-12">
          
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Precious Metals & Jewelry Transaction Guidelines</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Best Practices -->
            <div class="bg-green-50 p-8 rounded-xl relative overflow-hidden">
              <div class="absolute top-0 right-0 w-24 h-24 bg-green-100 rounded-full -mt-8 -mr-8 z-0"></div>
              <h3 class="text-2xl font-bold mb-6 text-green-800 relative z-10">Best Practices</h3>
              <ul class="space-y-3 relative z-10">
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Detailed transaction documentation</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Secure payment processing</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Clear refund and return policies</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-600 mr-2">✓</span>
                  <span class="text-gray-700">Verification processes for high-value sales</span>
                </li>
              </ul>
            </div>
            
            <!-- Risk Factors -->
            <div class="bg-red-50 p-8 rounded-xl relative overflow-hidden">
              <div class="absolute top-0 right-0 w-24 h-24 bg-red-100 rounded-full -mt-8 -mr-8 z-0"></div>
              <h3 class="text-2xl font-bold mb-6 text-red-800 relative z-10">Risk Factors</h3>
              <ul class="space-y-3 relative z-10">
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Insufficient security measures</span>
                </li>
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Poor transaction documentation</span>
                </li>
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Inadequate customer verification</span>
                </li>
                <li class="flex items-start">
                  <span class="text-red-600 mr-2">✗</span>
                  <span class="text-gray-700">Unclear pricing or product descriptions</span>
                </li>
              </ul>
            </div>
          </div>
          
          <p class="text-center text-gray-700 mt-8">
            Following these guidelines helps ensure compliance with regulations and reduces risk in high-value transactions.
          </p>
        </div>
      </div>

      <!-- Precious Metals & Jewelry Payment Gateway Section -->
      <div id="payment-gateway" class="bg-gradient-to-r from-gray-50 to-red-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Precious Metals & Jewelry Payment Gateway</h2>
          
          <div class="bg-white p-10 rounded-xl shadow-lg mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 h-32 w-32 bg-red-50 rounded-full -mt-10 -mr-10"></div>
            
            <div class="flex flex-col md:flex-row items-start gap-12">
              <div class="md:w-1/2 relative z-10 self-center">
                <p class="text-lg text-gray-700 leading-relaxed">
                  A reliable payment gateway is essential for precious metals and jewelry businesses. It serves as the crucial link between your business, your customers, and financial institutions, enabling secure and efficient high-value transactions. Our payment gateway solutions are designed to handle the unique requirements of precious metals and jewelry merchants.
                </p>
              </div>
              <div class="md:w-1/2">
                <div class="rounded-lg overflow-hidden shadow-lg">
                  <img :src="jewelry4Img" alt="Precious Metals & Jewelry Payment Gateway" class="w-full h-auto transform transition hover:scale-105 duration-500">
                </div>
              </div>
            </div>
            
            <div class="flex items-center justify-center my-8">
              <div class="w-24 h-1 bg-red-200 rounded-full"></div>
            </div>
            
            <h3 class="text-2xl font-bold mb-8 text-center" style="color: #973131;">Enhanced Security for High-Value Transactions</h3>
            
            <p class="text-lg text-gray-700 leading-relaxed max-w-5xl mx-auto">
              Choose Hurricane Payments for comprehensive merchant services that include secure payment gateways and robust fraud prevention tools. We understand the importance of maintaining security while providing seamless payment processing for your precious metals or jewelry business. Our solutions are designed to protect both your business and your customers in this high-value industry.
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
      <CtaSection subheading="Apply for your precious metals & jewelry merchant account today and experience hassle-free payment processing." />
    </MainLayout>
  </template>
  
  <script setup>
import { ref, onMounted } from 'vue';
import MainLayout from '../MainLayout.vue';
import CtaSection from '../../components/CtaSection.vue';

// Import images 
import jewelryImg from '@/../images/jewelry.jpg';
import jewelry2Img from '@/../images/jewelry(2).jpg';
import jewelry3Img from '@/../images/jewelry(3).jpg';
import jewelry4Img from '@/../images/jewelry(3).jpg';
  
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