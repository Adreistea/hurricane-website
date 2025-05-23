<template>
    <MainLayout>
      <!-- Hero Section with same animations as home.vue -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
              CBD Credit Card Processing & Merchant Account
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-300">
                A high-risk merchant account is essential for CBD businesses. These specialized payment processing accounts are designed for merchants classified in high-risk categories, providing the necessary solutions for online credit card processing in the CBD industry. Hurricane Payments has the experience and expertise to set your business up with CBD credit card processing solutions.
            </p>
          </div>
          
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

          <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400 mt-12">
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
            <img :src="adultIndustryImg" alt="Adult Industry Payment Processing" class="w-full h-[800px] object-cover" />
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
            Get Started with CBD Merchant Processing
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto scroll-reveal opacity-0" style="animation-delay: 0.6s;">
            Set Up Your CBD Merchant Account in Four Easy Steps
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Complete an Online Application</h3>
            <p class="text-gray-700">
                Begin with our straightforward online application tailored for CBD oil businesses.
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Submit Necessary Documentation</h3>
            <p class="text-gray-700">
                Provide essential documents to support your merchant account application.
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Work with Our Underwriting Team</h3>
            <p class="text-gray-700">
                Our experts guide you through the underwriting process specific to high-risk industries.
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Start Processing Payments</h3>
            <p class="text-gray-700">
              Protect your business with cutting-edge security solutions
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
                <img :src="adultCameraImg" alt="Adult Industry Solutions" class="relative rounded-lg shadow-2xl w-full" />
              </div>
            </div>
            <div class="lg:w-1/2">
              <h2 class="text-4xl font-bold mb-6 text-white">
                Understanding High-Risk Designation for CBD Merchant Accounts
              </h2>
              <p class="text-lg text-gray-300 mb-8">
                Unfortunately, CBD businesses face unique challenges in the payment processing world. As a high-risk industry, many traditional banks and payment processors label the CBD sector as high-risk and are often reluctant to provide support. This hesitation stems from ongoing regulatory scrutiny, evolving legal status, and a history of chargebacks or compliance concerns. At the same time, CBD merchants need reliable, secure, and transparent solutions to grow their business without disruption. We understand these complexities and are committed to helping you overcome them with industry-specific merchant services designed for your success.
              </p>         
              <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
                <h3 class="text-2xl font-bold mb-4 text-white">Choosing the Best CBD Payment Processor for Your Business</h3>
                <p class="text-gray-300">
                    Hurricane Payments has years of CBD industry experience, and won't turn you away because you are a high-risk merchant. When you choose Hurricane Payments, you're not only getting a CBD merchant account, but you're also getting a dedicated partner. We offer Dedicated Account Managers so that you have someone you can trust to answer all of your questions about CBD payment processing.
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
              <span class="block mt-2 text-custom-red">CBD Payment Processing</span>
            </h2>
              
              <p class="text-lg text-gray-700 mb-6">
                CBD businesses face unique challenges when it comes to payment processing. Because the industry is considered high-risk, many banks and traditional payment providers are unwilling to work with CBD merchants. This is mostly due to changing laws and regulations around CBD products. As a result, it can be hard for these businesses to find reliable payment solutions, which often leads to account issues or interruptions in sales.
              </p>
              
              <div class="bg-gradient-to-r from-red-50 to-red-100 p-6 rounded-lg mb-8 transform hover:scale-[1.02] transition duration-300">
                <p class="text-gray-800 font-medium italic">
                  "Hurricane Payments collaborates with over 20 financial partners, ensuring swift approval and enabling CBD businesses to accept credit card payments promptly."
                </p>
              </div>
              
              <div class="bg-white p-6 rounded-lg border border-red-100 mb-8">
                <h3 class="text-xl font-bold mb-3" style="color: #973131;">Tailored Solutions for the CBD Industry</h3>
                <p class="text-gray-700">
                    At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of CBD businesses, ensuring secure and efficient payment processing. If you're seeking a CBD merchant account, trust Hurricane Payments to deliver the perfect solution for your business.
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
                    <p class="text-gray-700">Leverage our specialized knowledge in CBD payment processing.</p>
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
                    <p class="text-gray-700">Benefit from fair pricing designed specifically for high-risk merchants.</p>
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
                    <p class="text-gray-700">Begin processing payments in days, not weeks.</p>
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
                    <p class="text-gray-700">Safeguard your business with cutting-edge security solutions.</p>
                  </div>
                </div>
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
  


      <!-- Industry Challenges and Solutions Section -->
      <div id="challenges-solutions" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
          <div class="text-center mb-16">
            <span class="inline-block bg-red-50 text-custom-red px-4 py-2 rounded-full font-medium text-sm uppercase tracking-wide mb-4">✅ Solutions That Work</span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-8" style="color: #973131;">
              Common Challenges & Our Solutions
            </h2>
            <div class="w-24 h-1 bg-custom-red mx-auto rounded-full mb-8"></div>
          </div>

          <!-- First row: Challenges and Solutions -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Common Challenges Column -->
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
                  <span class="text-gray-700">High chargeback rates that threaten merchant account stability</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Difficulty accessing traditional banks and payment processors</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Increased exposure to fraud, especially in online transactions</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Complicated and changing regulatory requirements</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Worry over account freezes or sudden shutdowns</span>
                </li>
              </ul>
            </div>

            <!-- Proven Solutions Column -->
            <div id="industry-solutions" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="flex items-center mb-6">
                <div class="p-3 bg-blue-50 rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-500">Proven Industry Solutions</h3>
              </div>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Use strong fraud prevention tools to reduce chargebacks</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Work with payment processors experienced in high-risk industries</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Keep accurate transaction and customer records</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Stay compliant with evolving legal and regulatory standards</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Use clear and honest billing descriptors to avoid confusion and disputes</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Second Row: Hurricane Solutions (Full Width) -->
          <div id="hurricane-solutions" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <div class="flex items-center mb-8">
              <div class="p-3 bg-green-50 rounded-lg mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-green-500">How Hurricane Payments Solves These Challenges</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <!-- Solution 1 -->
              <div class="bg-green-50 rounded-lg p-6 hover:shadow-md transition duration-300">
                <h4 class="text-xl font-bold text-gray-900 mb-3">20+ Reliable Banking Partners</h4>
                <p class="text-gray-700">We work with over 20 trusted financial institutions to ensure your payment processing stays stable and uninterrupted.</p>
              </div>

              <!-- Solution 2 -->
              <div class="bg-green-50 rounded-lg p-6 hover:shadow-md transition duration-300">
                <h4 class="text-xl font-bold text-gray-900 mb-3">Advanced Fraud Protection</h4>
                <p class="text-gray-700">Our robust security systems help detect and prevent fraudulent activity, reducing your risk and chargebacks.</p>
              </div>

              <!-- Solution 3 -->
              <div class="bg-green-50 rounded-lg p-6 hover:shadow-md transition duration-300">
                <h4 class="text-xl font-bold text-gray-900 mb-3">Fast Approvals, Competitive Rates</h4>
                <p class="text-gray-700">Get approved quickly and start accepting payments without delay, all at pricing designed for high-risk merchants.</p>
              </div>

              <!-- Solution 4 -->
              <div class="bg-green-50 rounded-lg p-6 hover:shadow-md transition duration-300">
                <h4 class="text-xl font-bold text-gray-900 mb-3">Dedicated Account Managers</h4>
                <p class="text-gray-700">Our expert team supports you every step of the way, helping you navigate regulations and stay compliant.</p>
              </div>

              <!-- Solution 5 -->
              <div class="bg-green-50 rounded-lg p-6 hover:shadow-md transition duration-300">
                <h4 class="text-xl font-bold text-gray-900 mb-3">Flexible Gateway Options</h4>
                <p class="text-gray-700">Choose from multiple gateway solutions that work with your specific business model and needs.</p>
              </div>
              
              <!-- CTA Card -->
              <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-lg p-6 flex flex-col justify-center hover:shadow-md transition duration-300">
                <h4 class="text-xl font-bold text-custom-red mb-3">Ready to Get Started?</h4>
                <p class="text-gray-700 mb-4">Let us help you navigate the complexities of CBD payment processing.</p>
                <router-link 
                  to="/request-consultation" 
                  class="fancy-button text-white font-medium py-2 px-6 rounded-md shadow-lg mt-auto text-center" 
                  style="background-color: #973131; transition: all 0.3s ease;">
                  Request a Consultation
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>

    

    
      <!-- Our Services Section -->
      <div id="our-services" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
          <div class="bg-white rounded-2xl border-2 border-red-100 p-10">
            <h2 class="text-4xl font-bold text-center mb-16" style="color: #973131;">Our Services</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
              <!-- Column 1 -->
              <div>
                <div class="mb-6 flex justify-center">
                  <div class="bg-red-50 p-4 rounded-lg inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-center">Adult Entertainment Merchant Accounts</h3>
                <ul class="ml-5 space-y-2">
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">20+ Proven Bank Relationships</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Medium/High Risk Accounts</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Fast Adult Entertainment Account Approval</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Large Merchant Case Studies</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">E-Commerce and Retail Adult Entertainment</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">B2B Adult Entertainment Vendors Supported</span>
                  </li>
                </ul>
              </div>
              
              <!-- Column 2 -->
              <div>
                <div class="mb-6 flex justify-center">
                  <div class="bg-red-50 p-4 rounded-lg inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-center">Multiple Payment Solutions</h3>
                <ul class="ml-10 space-y-2">
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Multiple E-Commerce Gateway</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Chargeback Prevention</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">ACH</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">E-Check</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Credit Cards</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">B2B-Level I/II/III Data Discounts</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">3D Secure Frictionless Checkout</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Mobile Payment</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">EMV Readers</span>
                  </li>
                </ul>
              </div>
              
              <!-- Column 3 -->
              <div>
                <div class="mb-6 flex justify-center">
                  <div class="bg-red-50 p-4 rounded-lg inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-xl font-bold mb-4 text-center">Compatibility & Support</h3>
                <ul class="ml-15 space-y-2">
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Gateway Recurring Billing</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Vault</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">E-Commerce Cart Plugins</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Developer API / Docs</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">POS/Terminals</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Scalable Merchant Accounts</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Dedicated Account Managers</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Adult Payment Gateway Section -->
      <div id="payment-gateway" class="bg-gradient-to-r from-gray-50 to-red-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Seamless Payment Processing for CBD Businesses</h2>
          
          <div class="bg-white p-10 rounded-xl shadow-lg mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 h-32 w-32 bg-red-50 rounded-full -mt-10 -mr-10"></div>
            
            <div class="flex flex-col md:flex-row items-start gap-12">
  <div class="md:w-1/2 relative z-10 self-center">
    <p class="text-2xl text-gray-700 leading-relaxed">
                    Our CBD merchant accounts are designed for smooth, reliable payment processing. Focus on expanding your CBD oil business while we handle the complexities of high-risk payment solutions.
                </p>
              </div>
              <div class="md:w-1/2">
                <div class="rounded-lg overflow-hidden shadow-lg">
                  <img :src="adultGatewayImg" alt="Adult Payment Gateway" class="w-full h-auto transform transition hover:scale-105 duration-500">
                </div>
              </div>
            </div>
            
         
          
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <CtaSection subheading="Apply for your adult industry merchant account today and experience hassle-free payment processing." />
    </MainLayout>
  </template>
  
  <script setup>
import { ref, onMounted } from 'vue';
import MainLayout from '../MainLayout.vue';
import CtaSection from '../../components/CtaSection.vue';

// Import images 
import adultIndustryImg from '@/../images/cbdoil(4).jpg';
import adultMerchantImg from '@/../images/cbdoil(2).jpg';
import adultCameraImg from '@/../images/cbdoil.jpg';
import adultGatewayImg from '@/../images/cbdoil(3).jpg';
import adultHighRiskImg from '@/../images/adult(1).jpg';
  
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