<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Navigation Bar with Slide Down Animation -->
    <nav class="container mx-auto px-6 py-4 slide-in-down relative z-[100]">
      <div class="flex items-center justify-between">
        <!-- Logo with Slide Left Animation -->
        <div class="flex items-center slide-in-left delay-200">
          <img :src="logoImg" alt="Electronic Merchant Systems" class="h-12 w-auto" />
        </div>
        
        <!-- Navigation Links with Sequenced Menu Item Animation -->
        <div class="hidden md:flex space-x-8">
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

    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Innovative, cost-effective payment processing
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            We are a leading payment processing company with more than 30 years of experience assisting businesses like yours.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <a href="#" class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
             style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </a>
          
          <a href="#" class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
             style="border-color: #973131; color: #973131;">
            See our Solutions
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        
        <div class="mt-10 slide-in-left delay-600">
          <div class="flex items-center mb-3">
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" v-for="i in 5" :key="i">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
            </div>
            <span class="ml-2 text-sm text-gray-600">Based on <a href="#" class="text-indigo-600 hover:underline">1,000+ Google Reviews</a></span>
          </div>
          
          <blockquote class="italic text-gray-600 border-l-4 border-indigo-300 pl-4">
            "EMS has been a pleasure to work with. Always providing great customer service. Our representative is always available to assist and as a small business we appreciate that."
          </blockquote>
          
          <p class="mt-3 font-semibold">AME Loyal Inc</p>
        </div>
      </div>
      
      <!-- Right Content - Dashboard Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img :src="dashboardImg" alt="Dashboard Interface" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Replace the features section with this updated version -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Our Advantages</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <!-- Advantages container with border -->
        <div class="advantages-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Expert Guidance Column -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 advantages-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-500">Expert Guidance</h2>
              </div>
              <p class="text-gray-700">
                We currently serve tens of thousands of business owners across the United States, each with a tailored payment solution that suits their unique needs.
              </p>
            </div>

            <!-- Lower Rates and Fees Column -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 advantages-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-purple-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-purple-500">Lower Rates and Fees</h2>
              </div>
              <p class="text-gray-700">
                We offer the lowest rates possible to help you increase profitability. In fact, 95% of business owners who receive our free rate review end up saving money.
              </p>
            </div>

            <!-- 24/7/365 Customer Support Column -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 advantages-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-green-500">24/7/365 Customer Support</h2>
              </div>
              <p class="text-gray-700">
                Yes, you read that right! Whether you have a question at 3PM or 3AM, our U.S.-based support team is standing by to assist you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Payment Solutions Section -->
    <div class="container mx-auto px-6 py-20 mt-16">
      <div class="flex flex-col lg:flex-row items-center">
        <!-- Left Content - POS Image with animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 scroll-reveal-left opacity-0 relative">
          <!-- Animated decorative elements moved to the front with positive z-index and shifted left -->
          <div class="absolute z-10 inset-0 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-3xl transform rotate-3 -translate-x-8 translate-y-4"></div>
          <div class="absolute z-20 inset-0 bg-gradient-to-r from-purple-100 to-pink-100 rounded-3xl transform -rotate-2 -translate-x-12 translate-y-8"></div>
          
          <!-- Image container now has higher z-index to be in front of the decorative elements -->
          <div class="rounded-lg shadow-2xl overflow-hidden relative z-30">
            <img :src="posImg" alt="Point of Sale Solutions" class="w-full h-auto" />
          </div>
        </div>
        
        <!-- Right Content with Text -->
        <div class="lg:w-1/2 lg:pl-12 scroll-reveal-right opacity-0 relative">
          <!-- Aura effect for text content -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-bl from-blue-100/80 via-indigo-100/70 to-transparent rounded-3xl opacity-70 glow-effect-blue"></div>
          
          <div class="relative z-10 p-6">
            <div class="mb-2">
              <span class="text-indigo-600 font-semibold">Payment Solutions</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
              Accept Payments Online, In-Person, or On the Go
            </h2>
            
            <div class="mb-8">
              <h3 class="text-2xl font-bold mb-4">Point of Sale Solutions</h3>
              <p class="text-gray-700 mb-4">
                Do you need a tailored payment solution for your restaurant or retail business? We offer multiple point of sale options to help you streamline operations, increase efficiency, and improve the customer experience.
              </p>
              
              <a href="#" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors duration-300">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Online Payments Section -->
    <div class="container mx-auto px-6 py-20 mt-32">
      <div class="flex flex-col lg:flex-row-reverse items-center">
        <!-- Right Content - Online Payment Image with animation -->
        <div class="lg:w-1/2 lg:pl-12 mb-10 lg:mb-0 scroll-reveal-right opacity-0 relative">
          <!-- Animated decorative elements moved to the front with positive z-index and shifted right -->
          <div class="absolute z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-4"></div>
          <div class="absolute z-20 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-12 translate-y-8"></div>
          
          <!-- Image container with higher z-index -->
          <div class="rounded-lg shadow-2xl overflow-hidden relative z-30">
            <img :src="onlinePaymentsImg" alt="Online Payment Solutions" class="w-full h-auto" />
          </div>
        </div>
        
        <!-- Left Content with Text -->
        <div class="lg:w-1/2 lg:pr-12 scroll-reveal-left opacity-0 relative">
          <!-- Aura effect for text content - updated with more visible colors -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-br from-indigo-100/80 via-purple-100/70 to-pink-50/60 rounded-3xl glow-effect"></div>
          
          <div class="relative z-10 p-6">
            <div class="mb-2">
              <span class="text-indigo-600 font-semibold">E-Commerce Solutions</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
              Online Payments
            </h2>
            
            <div class="mb-8">
              <p class="text-gray-700 mb-4">
                Take advantage of the flexibility to accept payments online! Our payment gateway solutions offer a powerful, secure virtual terminal along with seamless integration to online stores. Plus, advanced features are available to help you manage your business.
              </p>
              
              <a href="#" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors duration-300">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Zero Processing Rates Section -->
    <div class="container mx-auto px-6 py-20 mt-16">
      <!-- Section title and intro without float animation -->
      <div class="text-center mb-16 scroll-reveal opacity-0">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">Access 0% Processing Rates</h2>
        <p class="text-lg text-gray-700 max-w-4xl mx-auto">
          Eliminate credit card processing costs with our Surcharge or Dual Pricing Program. These programs can put hundreds of dollars back in your pocket every month and greatly improve your bottom line.
        </p>
      </div>
      
      <!-- Two-column card layout with shine effect on both cards -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Surcharge Program Card - keeping shine effect, removing pulse -->
        <div class="bg-white p-8 rounded-lg shadow-lg scroll-reveal-left opacity-0 relative overflow-hidden hover-card shine-effect">
          <div class="mb-6">
            <div class="w-16 h-16 mb-4 text-green-500">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-full h-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-3">Surcharge Program</h3>
            <p class="text-gray-700 mb-6">
              Offset the cost of accepting credit cards by applying a service fee to all credit card sales.
            </p>
            
            <a href="#" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors duration-300 btn-bounce">
              Learn more
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 arrow-icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
        
        <!-- Dual Pricing Program Card - adding shine effect -->
        <div class="bg-white p-8 rounded-lg shadow-lg scroll-reveal-right opacity-0 relative overflow-hidden hover-card shine-effect">
          <div class="mb-6">
            <div class="w-16 h-16 mb-4 text-indigo-500">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-full h-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-3">Dual Pricing Program</h3>
            <p class="text-gray-700 mb-6">
              Save money on fees by offering a discounted cash price on all sales.
            </p>
            
            <a href="#" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors duration-300 btn-bounce">
              Learn more
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 arrow-icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Find the Right Solution Section with Shaped Burgundy Background -->
    <div class="relative py-24 mt-16 burgundy-section">
      <div class="absolute inset-0 burgundy-shape"></div>
      <div class="absolute inset-0 burgundy-dots"></div>
      <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <h2 class="text-5xl lg:text-6xl font-bold mb-6 text-white">
            Let's find the right solution for your business.
          </h2>
          
          <!-- Process Steps -->
          <div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-12">
            <div class="flex items-center">
              <div class="w-10 h-10 rounded-full bg-white text-custom-red flex items-center justify-center font-bold text-xl">
                1
              </div>
              <span class="ml-3 text-white font-medium text-lg">Build a Plan</span>
            </div>
            
            <div class="hidden md:block w-12 h-1 bg-white opacity-50"></div>
            
            <div class="flex items-center">
              <div class="w-10 h-10 rounded-full bg-white text-custom-red flex items-center justify-center font-bold text-xl">
                2
              </div>
              <span class="ml-3 text-white font-medium text-lg">Implement & Save</span>
            </div>
            
            <div class="hidden md:block w-12 h-1 bg-white opacity-50"></div>
            
            <div class="flex items-center">
              <div class="w-10 h-10 rounded-full bg-white text-custom-red flex items-center justify-center font-bold text-xl">
                3
              </div>
              <span class="ml-3 text-white font-medium text-lg">Receive Ongoing Support</span>
            </div>
          </div>
          
          <!-- CTA Button -->
          <div class="mt-12">
            <router-link to="/request-consultation" class="inline-block bg-white text-custom-red font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300">
              Request a Consultation
            </router-link>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8 mt-16">
      <div class="container mx-auto px-6">
        <!-- Footer top section with main content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
          <!-- Company Info Column -->
          <div class="space-y-4">
            <img :src="logoImg" alt="Electronic Merchant Systems" class="h-12 w-auto mb-4" />
            <p class="text-gray-400 text-sm leading-relaxed">
              A leading provider of payment processing solutions with over 30 years of experience serving businesses nationwide.
            </p>
            <!-- Social Media Icons -->
            <div class="flex space-x-4 mt-6">
              <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
          
          <!-- Solutions Links Column -->
          <div>
            <h3 class="text-lg font-semibold mb-6 text-white border-b border-gray-700 pb-2">Solutions</h3>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Credit Card Processing</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Point of Sale Systems</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Payment Gateways</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Mobile Payments</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Business Funding</a></li>
            </ul>
          </div>
          
          <!-- Industries Links Column -->
          <div>
            <h3 class="text-lg font-semibold mb-6 text-white border-b border-gray-700 pb-2">Industries</h3>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Retail</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Restaurants</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">E-Commerce</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Healthcare</a></li>
              <li><a href="#" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Professional Services</a></li>
            </ul>
          </div>
          
          <!-- Contact Info Column -->
          <div>
            <h3 class="text-lg font-semibold mb-6 text-white border-b border-gray-700 pb-2">Contact Us</h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <svg class="w-5 h-5 text-custom-red mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="text-gray-400">4000 West 150th Street<br>Cleveland, OH 44135</span>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-custom-red mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-gray-400">(800) 726-2117</span>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-custom-red mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="text-gray-400">info@emscorporate.com</span>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Divider -->
        <div class="border-t border-gray-800 my-8"></div>
        
        <!-- Footer bottom with copyright and links -->
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="text-gray-500 text-sm mb-4 md:mb-0">
            © 2023 Electronic Merchant Systems. All rights reserved.
          </div>
          <div class="flex space-x-6">
            <a href="#" class="text-sm text-gray-500 hover:text-gray-300 transition-colors duration-200">Privacy Policy</a>
            <a href="#" class="text-sm text-gray-500 hover:text-gray-300 transition-colors duration-200">Terms of Service</a>
            <a href="#" class="text-sm text-gray-500 hover:text-gray-300 transition-colors duration-200">Sitemap</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Chatbot Widget -->
    <div class="chatbot-container">
      <!-- Chatbot Button (Circle) - always visible, toggles open/close -->
      <button @click="toggleChat" class="chatbot-circle-button" :class="{ 'chatbot-button-open': isChatOpen }">
        <svg v-if="!isChatOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </button>
      
      <!-- Chatbot Panel -->
      <div v-if="isChatOpen" class="chatbot-panel">
        <!-- Chatbot Header -->
        <div class="chatbot-panel-header">
          <div class="flex items-center">
            <div class="chatbot-avatar">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
              </svg>
            </div>
            <span class="ml-3 font-medium">Customer Support</span>
          </div>
        </div>
        
        <!-- Chatbot Messages -->
        <div class="chatbot-messages">
          <div v-for="(message, index) in messages" :key="index" 
               :class="[message.type === 'bot' ? 'bot-message' : 'user-message']">
            {{ message.text }}
          </div>
        </div>
        
        <!-- Message Input -->
        <div class="chatbot-input">
          <input 
            type="text" 
            v-model="newMessage" 
            @keyup.enter="sendMessage"
            placeholder="Type your message here..." 
            class="chatbot-input-field"
          >
          <button @click="sendMessage" class="chatbot-send-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
// Import using the @ alias which points to resources/js
import dashboardImg from '@/../images/homepic.png';
// Import logo image
import logoImg from '@/../images/TransparentLogo.png';
// Import POS image
import posImg from '@/../images/homepic2.png';
// Import Online Payments image
import onlinePaymentsImg from '@/../images/homepic3.png';

// Chatbot state
const isChatOpen = ref(false);
const newMessage = ref('');
const messages = ref([
  { type: 'bot', text: 'Hi there! How can I help you with payment processing today?' },
]);

// Chatbot methods
function toggleChat() {
  isChatOpen.value = !isChatOpen.value;
}

function sendMessage() {
  if (newMessage.value.trim() === '') return;
  
  // Add user message
  messages.value.push({ type: 'user', text: newMessage.value });
  
  // Clear input
  const userQuery = newMessage.value;
  newMessage.value = '';
  
  // Simulate bot response after a short delay
  setTimeout(() => {
    let botResponse = "Thanks for your message! One of our payment experts will get back to you shortly.";
    
    // Simple keyword matching for demo purposes
    if (userQuery.toLowerCase().includes('pricing') || userQuery.toLowerCase().includes('cost')) {
      botResponse = "Our pricing is competitive and customized to your business needs. Would you like a free rate review?";
    } else if (userQuery.toLowerCase().includes('support') || userQuery.toLowerCase().includes('help')) {
      botResponse = "Our customer support team is available 24/7/365. How can we assist you today?";
    } else if (userQuery.toLowerCase().includes('pos') || userQuery.toLowerCase().includes('point of sale')) {
      botResponse = "We offer multiple POS solutions tailored to your business type. Would you like to learn more?";
    }
    
    messages.value.push({ type: 'bot', text: botResponse });
  }, 1000);
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
  
  // Set up Intersection Observer for scroll reveal animations
  const observerOptions = {
    root: null, // Use the viewport as the root
    rootMargin: '0px', // No margin
    threshold: 0.2 // Trigger when 20% of the element is visible
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Get the delay attribute
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        // Add animation class after the specified delay
        setTimeout(() => {
          if (entry.target.classList.contains('scroll-reveal-left')) {
            entry.target.classList.add('animate-reveal-left');
          } else if (entry.target.classList.contains('scroll-reveal-right')) {
            entry.target.classList.add('animate-reveal-right');
          } else {
            entry.target.classList.add('animate-reveal');
          }
          entry.target.classList.remove('opacity-0');
        }, parseInt(delay));
        
        // Unobserve the element to prevent re-animation
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observe all elements with the scroll-reveal class
  document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right').forEach(element => {
    observer.observe(element);
  });
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
}

/* Enhance body text readability */
p {
  line-height: 1.6;
  font-weight: 400;
}

/* Enhanced Animations */
.animate-fade-in-slide-up {
  animation: fadeInSlideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  will-change: transform, opacity;
  backface-visibility: hidden;
}

.animation-delay-200 {
  animation-delay: 0.2s;
}

.animation-delay-300 {
  animation-delay: 0.3s;
}

.animation-delay-400 {
  animation-delay: 0.4s;
}

.animation-delay-600 {
  animation-delay: 0.6s;
}

@keyframes fadeInSlideUp {
  from {
    opacity: 0;
    transform: translateY(30px);
    filter: blur(5px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
}

/* Add a subtle hover animation to buttons */
.hover-lift {
  transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), 
              box-shadow 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.hover-lift:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Add staggered animation for dashboard items */
.stagger-item {
  opacity: 0;
  transform: translateY(20px);
  animation: staggerFade 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes staggerFade {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Subtle pulse animation for the dashboard icons */
.pulse-icon {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.1);
    opacity: 0.8;
  }
}

/* Slide Animations */
.slide-in-right {
  animation: slideInRight 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-left {
  animation: slideInLeft 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-up {
  animation: slideInUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-down {
  animation: slideInDown 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

/* Delay classes */
.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-400 { animation-delay: 0.4s; }
.delay-500 { animation-delay: 0.5s; }
.delay-600 { animation-delay: 0.6s; }
.delay-700 { animation-delay: 0.7s; }

/* Keyframes for slide animations */
@keyframes slideInRight {
  from {
    transform: translateX(100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInLeft {
  from {
    transform: translateX(-100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInUp {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes slideInDown {
  from {
    transform: translateY(-50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Enhanced hover effects */
.hover-scale {
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.hover-scale:hover {
  transform: scale(1.05);
  background-color: rgba(151, 49, 49, 0.05); /* Very light burgundy background on hover */
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

/* Card reveal animation */
.card-reveal {
  animation: cardReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
  transform-origin: bottom center;
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

/* Text reveal animation */
.text-reveal {
  overflow: hidden;
  position: relative;
}

.text-reveal-content {
  animation: textReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
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

/* Menu items animation */
.menu-item {
  transform: translateX(-20px);
  opacity: 0;
  animation: menuSlide 0.5s ease forwards;
}

@keyframes menuSlide {
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

/* Custom color classes for the burgundy red (#973131) */
:root {
  --custom-red: #973131;
  --custom-red-dark: #7e2929;
}

.bg-custom-red {
  background-color: var(--custom-red);
}

.bg-custom-red-dark {
  background-color: var(--custom-red-dark);
}

.text-custom-red {
  color: var(--custom-red);
}

.border-custom-red {
  border-color: var(--custom-red);
}

/* Updated hover effect for buttons */
.hover-scale:hover {
  transform: scale(1.05);
  border-color: var(--custom-red);
}

/* Scroll reveal animation */
.scroll-reveal {
  transition: opacity 0.6s ease-out, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
  transform: translateY(40px);
}

.animate-reveal {
  opacity: 1 !important;
  transform: translateY(0) !important;
}

/* Add hover effect to the cards */
.scroll-reveal:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Left/Right reveal animations */
.scroll-reveal-left {
  transition: opacity 0.6s ease-out, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
  transform: translateX(-60px);
  position: relative;
}

.scroll-reveal-right {
  transition: opacity 0.6s ease-out, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
  transform: translateX(60px);
}

.animate-reveal-left, .animate-reveal-right {
  opacity: 1 !important;
  transform: translateX(0) !important;
}

/* Add a new class for card hover effects */
.hover-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
}

/* Override the .scroll-reveal:hover behavior to prevent header effects */
.scroll-reveal:not(.hover-card):hover {
  transform: translateY(0);
  box-shadow: none;
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

/* Button bounce animation */
.btn-bounce:hover .arrow-icon {
  animation: bounce 0.8s ease infinite;
}

@keyframes bounce {
  0%, 100% { transform: translateX(0); }
  50% { transform: translateX(5px); }
}

/* Glow effect for e-commerce section */
.glow-effect {
  filter: blur(25px);
  transform: scale(1.1);
  animation: pulseGlow 8s ease-in-out infinite;
  opacity: 0.85; /* Increased opacity for more visibility */
  box-shadow: 0 0 40px rgba(79, 70, 229, 0.2); /* Subtle shadow for depth */
}

@keyframes pulseGlow {
  0%, 100% {
    transform: scale(1.05) rotate(-1deg);
  }
  50% {
    transform: scale(1.15) rotate(1deg);
  }
}

/* Custom styling for the burgundy section */
.burgundy-section {
  position: relative;
  overflow: hidden;
}

.burgundy-shape {
  background-color: #973131;
  clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);
  height: 100%;
  width: 100%;
  position: absolute;
}

.burgundy-dots {
  background-image: radial-gradient(rgba(255, 255, 255, 0.15) 2px, transparent 2px);
  background-size: 30px 30px;
  height: 100%;
  width: 100%;
  opacity: 0.5;
  position: absolute;
}

@media (max-width: 768px) {
  .burgundy-shape {
    clip-path: polygon(0 5%, 100% 0, 100% 95%, 0 100%);
  }
}

/* Blue glow effect for Point of Sale section */
.glow-effect-blue {
  filter: blur(25px);
  transform: scale(1.1);
  animation: pulseGlowBlue 8s ease-in-out infinite;
  opacity: 0.85;
  box-shadow: 0 0 40px rgba(59, 130, 246, 0.2);
}

@keyframes pulseGlowBlue {
  0%, 100% {
    transform: scale(1.05) rotate(1deg);
  }
  50% {
    transform: scale(1.15) rotate(-1deg);
  }
}

/* Custom styling for the advantages section */
.advantages-section {
  position: relative;
  overflow: hidden;
  margin-top: 4rem;
  margin-bottom: 4rem;
}

.advantages-bg {
  background-color: #f8f8f9;
  clip-path: polygon(0 8%, 100% 0, 100% 92%, 0 100%);
  height: 100%;
  width: 100%;
  position: absolute;
  border: 1px solid #e5e7eb;
}

.advantages-card {
  border-radius: 12px;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
}

.advantages-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
}

/* Updated Chatbot Styles */
.chatbot-container {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 1000;
  font-family: 'Inter', system-ui, sans-serif;
}

/* Circular button that stays visible */
.chatbot-circle-button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: var(--custom-red);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 20px rgba(151, 49, 49, 0.3);
  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  border: none;
  outline: none;
  animation: pulse-subtle 2s infinite;
  z-index: 1010;
  position: relative;
}

/* Button when chat is open */
.chatbot-button-open {
  background-color: var(--custom-red-dark);
  transform: rotate(0deg);
  animation: none;
  box-shadow: 0 2px 10px rgba(151, 49, 49, 0.2);
}

@keyframes pulse-subtle {
  0% {
    box-shadow: 0 4px 20px rgba(151, 49, 49, 0.3);
    transform: scale(1);
  }
  50% {
    box-shadow: 0 4px 25px rgba(151, 49, 49, 0.5);
    transform: scale(1.05);
  }
  100% {
    box-shadow: 0 4px 20px rgba(151, 49, 49, 0.3);
    transform: scale(1);
  }
}

.chatbot-circle-button:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 30px rgba(151, 49, 49, 0.4);
}

.chatbot-button-open:hover {
  transform: scale(1.05);
}

/* Chat panel */
.chatbot-panel {
  position: absolute;
  bottom: 75px;
  right: 0;
  width: 340px;
  border-radius: 20px;
  overflow: hidden;
  background-color: white;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
  display: flex;
  flex-direction: column;
  animation: slide-up 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transform-origin: bottom right;
}

@keyframes slide-up {
  from {
    opacity: 0;
    transform: translateY(20px) scale(0.9);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Chat panel header */
.chatbot-panel-header {
  background-color: var(--custom-red);
  color: white;
  padding: 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-radius: 20px 20px 0 0;
}

.chatbot-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Messages container */
.chatbot-messages {
  flex: 1;
  overflow-y: auto;
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 16px;
  max-height: 320px;
  background-color: #f7f8fa;
}

/* Message bubbles */
.bot-message, .user-message {
  max-width: 85%;
  padding: 12px 16px;
  font-size: 14px;
  line-height: 1.5;
  animation: fade-in 0.2s ease-out;
}

@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.bot-message {
  align-self: flex-start;
  background-color: white;
  color: #333;
  border-radius: 18px 18px 18px 4px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

.user-message {
  align-self: flex-end;
  background-color: var(--custom-red);
  color: white;
  border-radius: 18px 18px 4px 18px;
  box-shadow: 0 2px 8px rgba(151, 49, 49, 0.15);
}

/* Input area */
.chatbot-input {
  padding: 12px;
  display: flex;
  align-items: center;
  background-color: white;
  border-top: 1px solid #eee;
}

.chatbot-input-field {
  flex: 1;
  border: 1px solid #e2e2e2;
  border-radius: 20px;
  padding: 10px 16px;
  font-size: 14px;
  outline: none;
  transition: all 0.2s ease;
}

.chatbot-input-field:focus {
  border-color: var(--custom-red);
  box-shadow: 0 0 0 2px rgba(151, 49, 49, 0.1);
}

.chatbot-send-button {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background-color: var(--custom-red);
  color: white;
  border: none;
  margin-left: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
}

.chatbot-send-button:hover {
  background-color: var(--custom-red-dark);
  transform: scale(1.05);
}
</style>
