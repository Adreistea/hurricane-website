<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center relative">
      <!-- Decorative dots pattern in background -->
      <div class="absolute left-0 top-1/3 transform -translate-y-1/2 w-24 h-64 opacity-20 z-0">
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
      </div>
      
      <!-- Right side decorative pattern -->
      <div class="absolute right-0 bottom-1/4 transform translate-y-1/2 w-24 h-64 opacity-20 z-0">
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
      </div>

      <!-- Floating decorative elements -->
      <div class="absolute top-1/4 left-1/4 w-20 h-20 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 opacity-20 float-element" style="animation-delay: 0.2s;"></div>
      <div class="absolute bottom-1/4 right-1/3 w-16 h-16 rounded-full bg-gradient-to-r from-indigo-100 to-purple-100 opacity-20 float-element" style="animation-delay: 1.2s;"></div>
      <div class="absolute top-1/2 right-1/4 w-12 h-12 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 opacity-20 float-element" style="animation-delay: 0.7s;"></div>
      
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 relative z-10">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">Additional Services</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Surcharge Program
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Our Surcharge Program allows you to pass the cost of credit card processing to your customers through a fee-based model, potentially saving your business thousands of dollars per year.
          </p>
        </div>
        
        <!-- CTA Buttons with better styling -->
        <div class="fade-in-up" style="animation-delay: 0.6s;">
          <div class="flex flex-col sm:flex-row gap-4">
            <router-link 
              to="/request-consultation" 
              class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
              style="background-color: #973131; transition: all 0.3s ease;">
              Get Started
            </router-link>
            
            <a href="#how-it-works"
              class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
              style="border-color: #973131; color: #973131;">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative z-10">
        <div class="card-reveal">
          <div class="rounded-lg shadow-2xl overflow-hidden">
            <img src="@/../images/surchargepic.jpg" alt="Surcharge Program" class="w-full h-auto" />
          </div>
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-purple-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        
        <!-- Additional floating elements -->
        <div class="absolute -right-8 -top-8 w-16 h-16 bg-purple-50 rounded-full opacity-70 animate-pulse-slow"></div>
        <div class="absolute -left-8 -bottom-8 w-16 h-16 bg-indigo-50 rounded-full opacity-70 animate-pulse-slow" style="animation-delay: 1s;"></div>
      </div>
    </div>

    <!-- How It Works Section -->
    <div class="relative py-24 mt-16" id="how-it-works">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">How Surcharging Works</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <!-- Process Steps container with border -->
        <div class="steps-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Step 1 -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 step-card" data-delay="0">
              <div class="w-14 h-14 rounded-full flex items-center justify-center mb-6 bg-white" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#973131" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold mb-4 text-gray-900">Notify Your Customers</h3>
              <p class="text-gray-700">
                We help you implement proper signage and notification systems to inform customers about the surcharge, in compliance with card brand regulations and state laws.
              </p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 step-card" data-delay="200">
              <div class="w-14 h-14 rounded-full flex items-center justify-center mb-6 bg-white" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#973131" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold mb-4 text-gray-900">Process Payments</h3>
              <p class="text-gray-700">
                When customers pay with a credit card, a small fee is automatically added to their transaction. This fee covers your processing costs while keeping your prices competitive.
              </p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 step-card" data-delay="400">
              <div class="w-14 h-14 rounded-full flex items-center justify-center mb-6 bg-white" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#973131" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold mb-4 text-gray-900">Save Money</h3>
              <p class="text-gray-700">
                By offsetting processing costs, you can significantly reduce operational expenses. Many businesses save thousands of dollars annually with our surcharge program.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- After the How It Works Section and before the Benefits Section -->
    <!-- Visual Information Section -->
    <div class="py-24 bg-gradient-to-br from-gray-100 to-gray-200 relative overflow-hidden">
      <!-- Enhanced Background with animated particles -->
      <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern"></div>
        <div class="absolute top-1/4 right-1/4 w-64 h-64 rounded-full bg-[#973131]/5 animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 left-1/4 w-96 h-96 rounded-full bg-indigo-500/5 animate-pulse-slower"></div>
      </div>
      
      <!-- Section Content with Enhanced Styling -->
      <div class="container mx-auto px-6 relative z-10">
        <!-- Section Title with decorative elements -->
        <div class="text-center mb-16 relative">
          <span class="absolute inset-x-0 top-1/2 h-0.5 bg-gray-200 transform -translate-y-1/2"></span>
          <span class="relative inline-block px-8 py-3 bg-white rounded-full shadow-md border border-gray-100">
            <h2 class="text-3xl md:text-4xl font-bold" style="color: #973131; text-shadow: 0 1px 2px rgba(0,0,0,0.1);">
              Compliance & Requirements
            </h2>
          </span>
        </div>
        
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <!-- Left Image with enhanced styling -->
          <div class="lg:w-1/2 transform hover:scale-[1.02] transition-all duration-500">
            <div class="relative rounded-xl overflow-hidden shadow-2xl">
              <!-- Primary Image - Without any overlays or info boxes -->
              <img 
                :src="surchargePic" 
                alt="Surcharge Program Details" 
                class="w-full h-auto object-cover"
                style="min-height: 480px; filter: saturate(1.1);"
              />
              
              <!-- Light decorative gradient overlay only at the bottom - very subtle -->
              <div class="absolute bottom-0 left-0 right-0 h-1/6 bg-gradient-to-t from-black/20 to-transparent opacity-40"></div>
            </div>
          </div>
          
          <!-- Right Content with animated entries -->
          <div class="lg:w-1/2">
            <h2 class="text-4xl font-bold mb-6 relative" style="color: #973131;">
              <span class="absolute -left-4 top-0 h-full w-1 bg-[#973131] rounded-full"></span>
              Surcharge Compliance Requirements
            </h2>
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
              Implementing a surcharge program requires careful attention to card brand rules and regulations. Our program ensures your business stays fully compliant while maximizing savings.
            </p>
            
            <div class="space-y-5">
              <!-- Enhanced compliance items with improved hover effects -->
              <div class="flex items-start p-5 bg-white rounded-lg shadow-md border-l-4 border-[#973131] hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-10 h-10 mr-4 bg-white rounded-full flex items-center justify-center text-white flex-shrink-0" style="border: 2px solid #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#973131">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Clear Customer Notification</h4>
                  <p class="text-gray-700">Required signage at business entrance and point of sale informs customers before transactions.</p>
                </div>
              </div>
              
              <div class="flex items-start p-5 bg-white rounded-lg shadow-md border-l-4 border-[#973131] hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-10 h-10 mr-4 bg-white rounded-full flex items-center justify-center text-white flex-shrink-0" style="border: 2px solid #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#973131">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Transparent Receipt Details</h4>
                  <p class="text-gray-700">Separate line item on receipts clearly showing the surcharge amount for transparency.</p>
                </div>
              </div>
              
              <div class="flex items-start p-5 bg-white rounded-lg shadow-md border-l-4 border-[#973131] hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-10 h-10 mr-4 bg-white rounded-full flex items-center justify-center text-white flex-shrink-0" style="border: 2px solid #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#973131">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Pre-Implementation Notice</h4>
                  <p class="text-gray-700">30-day advance notification to card brands before implementing your surcharge program.</p>
                </div>
              </div>
              
              <div class="flex items-start p-5 bg-white rounded-lg shadow-md border-l-4 border-[#973131] hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-10 h-10 mr-4 bg-white rounded-full flex items-center justify-center text-white flex-shrink-0" style="border: 2px solid #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#973131">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Fair Fee Structure</h4>
                  <p class="text-gray-700">Surcharge cannot exceed your cost of acceptance, ensuring fair treatment for customers.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="bg-gray-50 py-24">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Program Benefits</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <!-- Left Column -->
          <div class="space-y-8">
            <!-- Benefit 1 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="0">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Reduced Processing Costs</h3>
                <p class="text-gray-700">
                  Eliminate or significantly reduce your credit card processing fees by passing these costs to customers who choose to pay with credit cards.
                </p>
              </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="100">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Increased Cash Flow</h3>
                <p class="text-gray-700">
                  Retain more of your revenue to reinvest in your business, improve cash flow, and enhance your bottom line.
                </p>
              </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="200">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Fully Compliant Solution</h3>
                <p class="text-gray-700">
                  Our program is fully compliant with card brand regulations and state laws, ensuring you never have to worry about legal issues.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Right Column -->
          <div class="space-y-8">
            <!-- Benefit 4 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="300">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 100 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Transparent Pricing</h3>
                <p class="text-gray-700">
                  Customers are clearly informed of the surcharge before completing their transaction, ensuring transparency and trust.
                </p>
              </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="400">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Easy Implementation</h3>
                <p class="text-gray-700">
                  Our team handles the entire setup process, including programming your terminals, providing signage, and training your staff on the new system.
                </p>
              </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="500">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Customer Choice</h3>
                <p class="text-gray-700">
                  Customers can still choose to pay with cash, debit cards, or other payment methods without incurring the surcharge, giving them payment flexibility.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Lightbox Component -->
    <lightbox
      :is-visible="showLightbox"
      :lightbox-id="currentLightboxId"
      @close="showLightbox = false"
      @consultation-click="handleConsultationClick"
    />

    <!-- Add the CtaActionSection component before the closing MainLayout tag -->
    <CtaActionSection 
      heading="Ready to Eliminate Processing Fees?"
      subheading="Our Surcharge Program can help you save thousands of dollars annually on credit card processing fees.<br>Contact us today to learn how your business can benefit."
    />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import MainLayout from './MainLayout.vue';
import lightbox from './lightbox.vue';
import CtaActionSection from '../components/CtaActionSection.vue';

// Import the image using Vue's dynamic import
const surchargePic = new URL('@/../images/surchargepic.jpg', import.meta.url).href;

// Lightbox state
const showLightbox = ref(false);
const currentLightboxId = ref(null);

// Handle consultation click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // You can add a redirect or other action here
  console.log('Consultation requested');
};

// Fetch lightboxes and check if we need to show one
const fetchLightboxes = async () => {
  try {
    const response = await axios.get('/api/lightboxes');
    if (response.data.success) {
      const lightboxes = response.data.data;
      
      // Find active lightbox for surcharge page
      const surchargeLightbox = lightboxes.find(item => {
        const displayPages = Array.isArray(item.display_pages) 
          ? item.display_pages 
          : JSON.parse(item.display_pages || '[]');
        
        return displayPages.includes('surcharge') && item.status === 'active';
      });
      
      if (surchargeLightbox) {
        currentLightboxId.value = surchargeLightbox.lightbox_id;
        
        // Check if we should show this lightbox (based on show_once setting)
        const lightboxShownKey = `lightbox_shown_${surchargeLightbox.lightbox_id}`;
        const hasBeenShown = localStorage.getItem(lightboxShownKey);
        
        if (!surchargeLightbox.show_once || !hasBeenShown) {
          // Show the lightbox
          setTimeout(() => {
            showLightbox.value = true;
            
            // If show_once is enabled, mark as shown
            if (surchargeLightbox.show_once) {
              localStorage.setItem(lightboxShownKey, 'true');
            }
          }, 2000); // Show after 2 seconds
        }
      }
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
  }
};

onMounted(() => {
  // Initialize animation observer for scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animation class with delay if specified
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        setTimeout(() => {
          entry.target.classList.add('animate');
        }, parseInt(delay));
        
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
  
  // Set up smooth scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const element = document.getElementById(targetId);
      if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
  
  // Fancy button hover effect
  document.querySelectorAll('.fancy-button').forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.style.backgroundColor = '#7e2929'; // Darker shade for hover
    });
    
    button.addEventListener('mouseleave', () => {
      button.style.backgroundColor = '#973131'; // Original color
    });
  });
  
  // Fetch and check lightboxes
  fetchLightboxes();
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

/* Add a touch of refinement to the main navigation */
nav a {
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  letter-spacing: 0.01em;
}

/* Make CTA buttons more distinct */
.fancy-button {
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  letter-spacing: 0.03em;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

/* Enhance body text readability */
p {
  line-height: 1.6;
  font-weight: 400;
}

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

/* Step card hover effects */
.step-card {
  transition: all 0.3s ease;
}

.step-card:hover {
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
  background-color: rgba(151, 49, 49, 0.05); /* Very light red background on hover */
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

/* Enhanced text gradient animation */
.text-gradient {
  background-size: 200% auto;
  animation: textGradient 4s ease infinite;
}

@keyframes textGradient {
  0% { background-position: 0% center; }
  50% { background-position: 100% center; }
  100% { background-position: 0% center; }
}

/* Floating animation for section titles */
.animate-float {
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0px); }
}

/* Shine effect animation for cards */
.shine-effect {
  position: relative;
  overflow: hidden;
}

.shine-effect::before {
  content: '';
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 100%);
  transform: skewX(-25deg);
  z-index: 1;
  animation: shine 6s ease-in-out infinite;
}

@keyframes shine {
  0%, 100% { 
    left: -75%;
    opacity: 0;
  }
  10% {
    opacity: 0;
  }
  20% {
    opacity: 1;
  }
  55% { 
    left: 125%;
    opacity: 0;
  }
}

/* Add this to your style section */
.bg-pattern {
  background-image: radial-gradient(#973131 8%, transparent 8%);
  background-position: 0 0;
  background-size: 40px 40px;
  opacity: 0.2;
}

/* New animations for enhanced section */
@keyframes pulse-slow {
  0%, 100% { opacity: 0.4; transform: scale(1); }
  50% { opacity: 0.7; transform: scale(1.05); }
}

@keyframes pulse-slower {
  0%, 100% { opacity: 0.3; transform: scale(1); }
  50% { opacity: 0.6; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}

.animate-pulse-slower {
  animation: pulse-slower 12s infinite ease-in-out;
}

/* Fade in animation for sections */
.fade-in-up {
  animation: fadeInUp 0.8s ease-out forwards;
  opacity: 0;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Floating animation for decorative elements */
.float-element {
  animation: float 6s ease-in-out infinite;
}
</style>
