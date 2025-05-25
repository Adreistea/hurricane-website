<template>
    <MainLayout>
      <!-- Hero Section with same animations as home.vue -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
                Business Consulting Merchant Account and Payment Processing
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <h2 class="text-reveal-content text-2xl lg:text-3xl font-semibold leading-tight delay-200 text-gray-800">
              Why Choose Hurricane Payments for Your Business Consulting Merchant Account?
            </h2>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-300">
                Discover tailored payment processing solutions designed specifically for business consulting firms and navigate the complexities of high-risk categorization with Hurricane Payments. We understand the unique challenges faced by business consulting firms. Our specialized solutions ensure you have a reliable payment processing system in place so you can accept credit card payments.
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
      <img :src="firstImage" alt="Airline Booking Payment Processing" class="w-full h-[800px] object-cover" />
    </div>
  
  
          <!-- Animated decorative elements -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        </div>
      </div>
  
      <!-- Airline Booking Merchant Accounts Section -->
      <div class="container mx-auto px-6 py-20 mt-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
            Get Started with Business Consulting Payment Processing
          </span>
          <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
            Set Up Your Merchant Account in Four Easy Steps
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Complete an Online Application</h3>
            <p class="text-gray-700">
              Begin with our straightforward online application tailored for Business Consulting businesses.
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Submit Necessary Documentation</h3>
            <p class="text-gray-700">
              Provide essential documents to support your merchant account application.
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Work with Our Underwriting Team</h3>
            <p class="text-gray-700">
              Our experts guide you through the underwriting process specific to high-risk industries.
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Start Processing Payments</h3>
            <p class="text-gray-700">
                Begin accepting payments seamlessly and focus on growing your revenue.
            </p>
          </div>
        </div>
      </div>
  
      <!-- High-Risk Designation Section -->
      <div class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-100 rounded-full opacity-50 transform translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-100 rounded-full opacity-50 transform -translate-x-1/3 translate-y-1/3"></div>
        
        <div class="container mx-auto px-6 relative z-10">
          <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
              <span class="inline-block bg-red-50 text-custom-red px-4 py-2 rounded-full font-medium text-sm uppercase tracking-wide mb-4">Understanding Industry Challenges</span>
              <h2 class="text-4xl lg:text-5xl font-bold mb-6" style="color: #973131;">
                Understanding High-Risk Designation for Business Consulting Merchant Accounts
              </h2>
              <div class="w-24 h-1 bg-custom-red mx-auto rounded-full mb-8"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
              <!-- Left Content: Image with Effects -->
              <div class="relative order-2 lg:order-1">
                <div class="relative z-10 rounded-xl overflow-hidden shadow-2xl transition duration-500 transform hover:scale-[1.02]">
                  <img :src="thirdImage" alt="Airline Booking High-Risk Merchant Services" class="w-full h-[800px] object-cover" />
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent"></div>
                  <div class="absolute bottom-0 left-0 w-full p-8">
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
                      <h3 class="text-xl font-bold mb-2 text-white">Expert Solutions for High-Risk Merchants</h3>
                      <p class="text-white/90">Specialized processing for Business Consulting businesses</p>
                    </div>
                  </div>
                </div>
                
                <!-- Decorative elements behind the image -->
                <div class="absolute -z-10 -inset-4 bg-gradient-to-r from-red-200 to-red-100 rounded-xl transform rotate-3 blur-sm"></div>
                <div class="absolute -z-20 -inset-8 bg-gradient-to-br from-blue-200 to-indigo-100 rounded-xl transform -rotate-2 blur-sm"></div>
              </div>
              
              <!-- Right Content: Text with Card Design -->
              <div class="order-1 lg:order-2">
                <div class="space-y-8">
                  <div class="bg-white rounded-xl p-8 shadow-xl transform transition hover:shadow-2xl duration-500 border-l-4 border-custom-red">
                    <h3 class="text-2xl font-bold mb-4" style="color: #973131;">Why Business Consultants Are Labeled High-Riskgh-risk merchants require specialized payment processors</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Business consultants are considered high-risk merchants by payment service providers due to several specific factors. Primarily, they do not offer tangible goods or services, which often leads to a higher rate of chargebacks. Additionally, consulting businesses frequently depend on card-not-present transactions—such as online or phone payments—putting them at greater risk of fraud. The industry also tends to process high-ticket payments at irregular intervals, for example, during the lead-up to conferences or events. These patterns make traditional payment processors wary, often resulting in denied services or inflated fees.
                    </p>
                  </div>
                  
                  <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl p-8 shadow-xl text-white relative overflow-hidden">
                    <!-- Subtle pattern overlay -->
                    <div class="absolute inset-0 opacity-10">
                      <div class="absolute inset-0" :style="{ backgroundImage: 'url(\'data:image/svg+xml,%3Csvg width=\\\'20\\\' height=\\\'20\\\' viewBox=\\\'0 0 20 20\\\' xmlns=\\\'http://www.w3.org/2000/svg\\\'%3E%3Crect width=\\\'2\\\' height=\\\'2\\\' fill=\\\'%23ffffff\\\' fill-opacity=\\\'0.4\\\'/%3E%3C/svg%3E\')' }"></div>
                    </div>
                    
                    <div class="relative z-10">
                      <h3 class="text-2xl font-bold mb-4 text-white">How Hurricane Payments Helps You Avoid Payment Disruptions</h3>
                      <p class="text-gray-300 leading-relaxed mb-6">
                        To continue accepting payments without interruptions, business consultants must turn to specialized high-risk merchant account providers. Hurricane Payments offers tailored payment processing solutions designed specifically for high-risk industries like business consulting. With experience handling the unique challenges this field presents, Hurricane Payments helps consultants accept credit and debit card payments securely and reliably—without the hassle of unexpected account holds or excessive fees.
                      </p>
                      
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20 flex items-center">
                          <div class="p-2 bg-red-500/20 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                          </div>
                          <span>Industry-Specific Compliance</span>
                        </div>
                        
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20 flex items-center">
                          <div class="p-2 bg-blue-500/20 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                          </div>
                          <span>Chargeback Protection</span>
                        </div>
                        
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20 flex items-center">
                          <div class="p-2 bg-green-500/20 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                          </div>
                          <span>Competitive Processing Rates</span>
                        </div>
                        
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20 flex items-center">
                          <div class="p-2 bg-purple-500/20 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                          </div>
                          <span>Fast Approval Process</span>
                        </div>
                      </div>
                      
                     
                    </div>
                  </div>
                </div>
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
                <h3 class="text-xl font-bold mb-4 text-center">Business Consulting Merchant Accounts</h3>
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
                    <span class="text-gray-700">Fast Business Consulting Account Approval</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Large Merchant Case Studies</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">E-Commerce and Retail Business Consulting</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">B2B Business Consulting Vendors Supported</span>
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

  
      <!-- Airline & Booking Payment Gateway Section -->
      <div id="payment-gateway" class="bg-gradient-to-r from-gray-50 to-red-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Seamless Payment Processing for Business Consulting Firms</h2>
          
          <div class="bg-white p-10 rounded-xl shadow-lg mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 h-32 w-32 bg-red-50 rounded-full -mt-10 -mr-10"></div>
            
            <div class="flex flex-col md:flex-row items-start gap-12">
  <div class="md:w-1/2 relative z-10 self-center">
    <p class="text-2xl text-gray-700 leading-relaxed">
                    Our merchant accounts are designed for smooth, reliable payment processing. Focus on expanding your consulting business while we handle the complexities of high-risk payment solutions.
                </p>
            
              </div>
              
              <div class="md:w-1/2">
                <div class="relative">
                  <!-- Main image with effects -->
                  <div class="rounded-lg overflow-hidden shadow-lg relative z-20">
                    <img :src="fourthImage" alt="Airline Booking Payment Gateway" class="w-full h-auto transform transition hover:scale-105 duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
  
                    </div>
                  </div>
                  
                  <!-- Decorative elements -->
                  <div class="absolute top-4 right-4 w-24 h-24 bg-red-500/30 rounded-full blur-xl -z-10"></div>
                  <div class="absolute -bottom-2 -left-2 w-16 h-16 bg-blue-500/30 rounded-full blur-lg -z-10"></div>

                </div>
              </div>
            </div>
            
            <div class="flex items-center justify-center my-8">
              <div class="w-24 h-1 bg-red-200 rounded-full"></div>
            </div>
          
          </div>
        </div>
      </div>
  
      <!-- CTA Section -->
      <CtaSection subheading="Apply for your Business Consulting industry merchant account today and experience hassle-free payment processing." />
    </MainLayout>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import MainLayout from '../MainLayout.vue';
  import CtaSection from '../../components/CtaSection.vue';
  
  // Import images 
  import firstImage from '@/../images/businessconsult.jpg';
  import secondImage from '@/../images/airlinebooking(2).jpg';
  import thirdImage from '@/../images/businessconsult(2).jpg';
  import fourthImage from '@/../images/businessconsult(3).jpg';
  
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
  /* Add font imports at the top of your style section */
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
  </style>
  