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
      <div class="absolute top-1/4 left-1/4 w-20 h-20 rounded-full bg-gradient-to-r from-red-100 to-amber-100 opacity-20 float-element" style="animation-delay: 0.2s;"></div>
      <div class="absolute bottom-1/4 right-1/3 w-16 h-16 rounded-full bg-gradient-to-r from-amber-100 to-yellow-100 opacity-20 float-element" style="animation-delay: 1.2s;"></div>
      <div class="absolute top-1/2 right-1/4 w-12 h-12 rounded-full bg-gradient-to-r from-yellow-100 to-amber-100 opacity-20 float-element" style="animation-delay: 0.7s;"></div>

      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 relative z-10">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-amber-600 font-semibold delay-100">Industries</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Skilled Trade Services Payment Processing
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Offer excellent service to your customers from the first call to final payment with Hurricane Payments. We provide innovative, secure payment solutions designed to help you streamline operations while simultaneously saving time and elevating the customer experience.
          </p>
          <p class="text-reveal-content text-lg text-gray-600 mt-4 delay-400">
            Here are some of the skilled trade and manual labor businesses we serve:
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
            
            <a href="#solutions"
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
            <img src="@/../images/weserve.jpeg" alt="Skilled Trade Services" class="w-full h-auto" 
                 onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" />
          </div>
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-amber-100 to-yellow-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-yellow-100 to-amber-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        
        <!-- Additional floating elements -->
        <div class="absolute -right-8 -top-8 w-16 h-16 bg-amber-50 rounded-full opacity-70 animate-pulse-slow"></div>
        <div class="absolute -left-8 -bottom-8 w-16 h-16 bg-yellow-50 rounded-full opacity-70 animate-pulse-slow" style="animation-delay: 1s;"></div>
      </div>
    </div>

    <!-- Solutions Section -->
    <div id="solutions" class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Why Hurricane Payments</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
          <p class="text-xl mt-4">Enhance the payment experience with Hurricane Payments.</p>
        </div>
        
        <!-- Solutions container with border -->
        <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Virtual Terminals -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4" style="color: #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold" style="color: #973131;">Virtual Terminals</h2>
              </div>
              <p class="text-gray-700">
                Send a custom email invoice for your services or set up recurring billing schedules for customers making fixed monthly payments.
              </p>
            </div>

            <!-- Mobile Processing -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4" style="color: #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold" style="color: #973131;">Mobile Processing</h2>
              </div>
              <p class="text-gray-700">
                Accept all payment types immediately using your phone or tablet, including EMV chip cards and contactless options such as Apple Pay and Google Pay.
              </p>
            </div>

            <!-- Web Services -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4" style="color: #973131;">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold" style="color: #973131;">Web Services</h2>
              </div>
              <p class="text-gray-700">
                Help customers find your services faster with a modern, responsive website. Our creative experts can build sites with or without online shopping carts.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="bg-gray-50 py-24">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12 fade-in-up" style="animation-delay: 0.1s;">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Benefits for Skilled Trade Businesses</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <!-- Left Column -->
          <div class="space-y-8">
            <!-- Benefit 1 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.2s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Get Paid Faster</h3>
                <p class="text-gray-700">
                  Accept payments on the spot instead of waiting for checks or invoice payments, improving cash flow for your business.
                </p>
              </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.3s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Enhanced Customer Experience</h3>
                <p class="text-gray-700">
                  Provide multiple payment options that cater to customer preferences, creating a more professional and convenient experience.
                </p>
              </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.4s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Secure Transactions</h3>
                <p class="text-gray-700">
                  Protect your business and customers with encrypted payment processing that meets industry security standards.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Right Column -->
          <div class="space-y-8">
            <!-- Benefit 4 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.5s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Simplified Record Keeping</h3>
                <p class="text-gray-700">
                  Automatically track payments, generate reports, and integrate with accounting software to streamline your business operations.
                </p>
              </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.6s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Build Customer Loyalty</h3>
                <p class="text-gray-700">
                  Create repeat business by providing a professional payment experience that distinguishes your service from competitors.
                </p>
              </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.7s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="#973131">
                  <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Business Insights</h3>
                <p class="text-gray-700">
                  Gain valuable data on service trends, payment patterns, and customer preferences to make informed business decisions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Mobile Processing Details Section -->
    <div class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-8 text-center" style="color: #973131;">Accept Credit Cards from Your Phone or Tablet</h2>
          <p class="text-lg text-gray-700 mb-8">
            Our mobile processing solution with Kwick, is a simple, secure mobile payment acceptance option for any trade services company. It is compatible with iOS and Android devices, offering a card reader that connects to your device via Bluetooth. With this solution, you can:
          </p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            <div class="flex items-start fade-in-up" style="animation-delay: 0.1s;">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: #f8e9e9; border: 1px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #973131;" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="text-gray-700">Dip, tap, or swipe credit cards.</p>
            </div>
            
            <div class="flex items-start fade-in-up" style="animation-delay: 0.2s;">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: #f8e9e9; border: 1px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #973131;" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="text-gray-700">Create itemized or simple transactions.</p>
            </div>
            
            <div class="flex items-start fade-in-up" style="animation-delay: 0.3s;">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: #f8e9e9; border: 1px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #973131;" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="text-gray-700">Accept tips and manage cash payments.</p>
            </div>
            
            <div class="flex items-start fade-in-up" style="animation-delay: 0.4s;">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: #f8e9e9; border: 1px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #973131;" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="text-gray-700">Allow multiple users at the same time.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Virtual Terminal Details Section -->
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-8 text-center" style="color: #973131;">Set Up Automatic Payments with a Virtual Terminal</h2>
          <p class="text-lg text-gray-700 mb-8">
            Our Virtual Terminal technology gives you access to advanced features that help you accept payments and manage your business. These features include:
          </p>
          
          <div class="space-y-8 mt-10">
            <!-- Feature 1 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.1s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="color: #973131;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Custom Email Invoicing</h3>
                <p class="text-gray-700">
                  Simply send an invoice via email and allow customers to make secure payments online.
                </p>
              </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.2s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="color: #973131;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Secure Vault Storage</h3>
                <p class="text-gray-700">
                  Securely store customer card information for future purchases or billing.
                </p>
              </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="flex items-start fade-in-up" style="animation-delay: 0.3s;">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4 flex-shrink-0" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="color: #973131;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Recurring Payment Features</h3>
                <p class="text-gray-700">
                  Set up automatic recurring billing schedules for customers with monthly payment plans or outstanding balances.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add the CtaActionSection component before the closing MainLayout tag -->
    <CtaActionSection 
      heading="Ready to Streamline Your Trade Business Payments?"
      subheading="Our skilled trade payment solutions are designed to help you get paid faster, reduce paperwork, and focus on what you do best.<br>Provide your customers with convenient payment options that set your business apart."
    />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import MainLayout from './MainLayout.vue';
import CtaActionSection from '../components/CtaActionSection.vue';

// Function to scroll to a section when "Learn More" is clicked
function scrollToSection(elementId) {
  const element = document.getElementById(elementId);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
  }
}

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

  // Initialize animation observer for scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animation class with delay if specified
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        setTimeout(() => {
          entry.target.classList.add('animate-reveal');
          entry.target.classList.remove('opacity-0');
        }, parseInt(delay));
        
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  // Observe all elements with scroll-reveal class
  document.querySelectorAll('.scroll-reveal').forEach(element => {
    observer.observe(element);
  });
  
  // Set up "Learn More" smooth scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      scrollToSection(targetId);
    });
  });

  // Set up special animation for CTA section
  const ctaObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animated class
        entry.target.classList.add('animated');
        ctaObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  // Observe CTA section
  const ctaSection = document.querySelector('.cta-heading');
  if (ctaSection) {
    ctaObserver.observe(ctaSection);
  }

  console.log('Skill_Trade.vue animations initialized');
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

/* Base animations */
.scroll-reveal {
  transform: translateY(20px);
  transition: all 0.6s ease-out;
}

.animate-reveal {
  opacity: 1 !important;
  transform: translateY(0) !important;
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
  animation: textReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
  will-change: transform, opacity;
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

.text-reveal.animate .text-reveal-content {
  transform: translateY(0);
}

/* Slide animations */
.slide-in-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: all 0.8s ease-out;
}

.slide-in-left.animate {
  opacity: 1;
  transform: translateX(0);
}

.slide-in-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.8s ease-out;
}

.slide-in-right.animate {
  opacity: 1;
  transform: translateX(0);
}

/* Card Reveal Animation */
.card-reveal {
  opacity: 0;
  animation: cardReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
  animation-delay: 0.2s;
  transform-origin: bottom center;
  will-change: transform, opacity;
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

/* Animations with delays */
.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-400 { animation-delay: 0.4s; }
.delay-500 { animation-delay: 0.5s; }

/* Solution cards hover effects */
.solution-card {
  transition: all 0.3s ease;
}

.solution-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

/* Hover scale animation */
.hover-scale:hover {
  transform: scale(1.05);
}

/* Enhanced hover effects */
.hover-scale {
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.hover-scale:hover {
  transform: scale(1.05);
  background-color: rgba(151, 49, 49, 0.05); /* Very light red background on hover */
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

/* Pulsing Animation for decorative elements */
.animate-pulse-slow {
  animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse-slow {
  0%, 100% {
    opacity: 0.5;
    transform: scale(1);
  }
  50% {
    opacity: 0.8;
    transform: scale(1.05);
  }
}

/* Enhanced CTA section background pattern */
.bg-gray-50 {
  position: relative;
  background-image: linear-gradient(rgba(249, 250, 251, 0.8) 1px, transparent 1px),
    linear-gradient(90deg, rgba(249, 250, 251, 0.8) 1px, transparent 1px);
  background-size: 20px 20px;
  background-position: center center;
}

.bg-gray-50:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 10px;
  background: linear-gradient(90deg, transparent, #973131, transparent);
  opacity: 0.3;
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

@keyframes float {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-15px);
  }
  100% {
    transform: translateY(0px);
  }
}
</style>
