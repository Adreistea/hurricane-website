<template>
  <MainLayout>
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
            "Working with Hurricane Payments has been exceptional. Their customer service is outstanding, and their team is consistently responsive to our needs. As a small business, we truly value their personalized support and attention."
          </blockquote>
          
          <p class="mt-3 font-semibold">Hurricane Payments</p>
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
                We offer the lowest rates possible to help you increase profitability. In fact, 97% of business owners who receive our free rate review end up saving money.
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

    <!-- Payment Processing for All Business Types Section -->
    <div class="container mx-auto px-6 py-20 mt-16 relative overflow-hidden">
      <!-- Background decorative elements -->
      <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-gray-100 opacity-70"></div>
      <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
      
      <!-- Main content with scroll reveal -->
      <div class="relative z-10">
        <!-- Section header with staggered animation -->
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <span class="inline-block text-custom-red font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s">
            Tailored Solutions For Every Business
          </span>
          <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s; color: #973131;">
            Payment Processing for All Business Types
          </h2>
          <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-12 scroll-reveal opacity-0" style="animation-delay: 0.6s">
            Whether you need to manage multiple store locations, fulfill orders online, or accept credit cards on the go, we can help.
          </p>
        </div>

        <!-- Business Types Grid with staggered card animations - SMALLER CIRCLES -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
          <!-- Retail -->
          <div class="scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" style="animation-delay: 0.2s">
            <div class="bg-white aspect-square rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group max-w-[220px] mx-auto">
              <div class="absolute inset-0 bg-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="relative z-10">
                <div class="w-9 h-9 mx-auto mb-3 text-blue-600">
                  <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                </div>
                <h3 class="text-base font-bold mb-1.5">Retail</h3>
                <p class="text-gray-600 mb-2 text-xs leading-tight">
                  Whether you need to manage multiple store locations, fulfill orders online, or accept credit cards on the go, we can help.
                </p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center justify-center group text-xs">
                  Learn more
                  <svg class="w-3 h-3 ml-1 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- eCommerce (Purple) -->
          <div class="scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" style="animation-delay: 0.3s">
            <div class="bg-white aspect-square rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group max-w-[220px] mx-auto">
              <div class="absolute inset-0 bg-purple-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="relative z-10">
                <div class="w-9 h-9 mx-auto mb-3 text-purple-600">
                  <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </div>
                <h3 class="text-base font-bold mb-1.5">eCommerce</h3>
                <p class="text-gray-600 mb-2 text-xs leading-tight">
                  We can help you establish your web presence, add a store to your existing website, or enable payments for an existing online store.
                </p>
                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center justify-center group text-xs">
                  Learn more
                  <svg class="w-3 h-3 ml-1 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Restaurant & Bar -->
          <div class="scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" style="animation-delay: 0.4s">
            <div class="bg-white aspect-square rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group max-w-[220px] mx-auto">
              <div class="absolute inset-0 bg-green-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="relative z-10">
                <div class="w-9 h-9 mx-auto mb-3 text-green-600">
                  <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>
                </div>
                <h3 class="text-base font-bold mb-1.5">Restaurant & Bar</h3>
                <p class="text-gray-600 mb-2 text-xs leading-tight">
                  Our restaurant-specific point of sale systems can help you improve processes and make service easy.
                </p>
                <a href="#" class="text-green-600 hover:text-green-800 font-medium inline-flex items-center justify-center group text-xs">
                  Learn more
                  <svg class="w-3 h-3 ml-1 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Professional Services -->
          <div class="scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" style="animation-delay: 0.5s">
            <div class="bg-white aspect-square rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group max-w-[220px] mx-auto">
              <div class="absolute inset-0 bg-red-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="relative z-10">
                <div class="w-9 h-9 mx-auto mb-3 text-red-600">
                  <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <h3 class="text-base font-bold mb-1.5">Professional Services</h3>
                <p class="text-gray-600 mb-2 text-xs leading-tight">
                  With a secure, simple payment solution, you can help your customers get back to their daily lives faster.
                </p>
                <a href="#" class="text-red-600 hover:text-red-800 font-medium inline-flex items-center justify-center group text-xs">
                  Learn more
                  <svg class="w-3 h-3 ml-1 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Skilled Trade Services -->
          <div class="scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" style="animation-delay: 0.6s">
            <div class="bg-white aspect-square rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group max-w-[220px] mx-auto">
              <div class="absolute inset-0 bg-yellow-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="relative z-10">
                <div class="w-9 h-9 mx-auto mb-3 text-yellow-600">
                  <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                  </svg>
                </div>
                <h3 class="text-base font-bold mb-1.5">Skilled Trade Services</h3>
                <p class="text-gray-600 mb-2 text-xs leading-tight">
                  We provide innovative, secure payment solutions to help you streamline operations, save time, and elevate the customer experience.
                </p>
                <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium inline-flex items-center justify-center group text-xs">
                  Learn more
                  <svg class="w-3 h-3 ml-1 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Specialty -->
          <div class="scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" style="animation-delay: 0.7s">
            <div class="bg-white aspect-square rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group max-w-[220px] mx-auto">
              <div class="absolute inset-0 bg-indigo-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="relative z-10">
                <div class="w-9 h-9 mx-auto mb-3 text-indigo-600">
                  <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                  </svg>
                </div>
                <h3 class="text-base font-bold mb-1.5">Specialty</h3>
                <p class="text-gray-600 mb-2 text-xs leading-tight">
                  Whether you run a beauty salon, golf course, auto repair shop, or anything in-between, we're here to serve and support your unique needs!
                </p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center justify-center group text-xs">
                  Learn more
                  <svg class="w-3 h-3 ml-1 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- See All Industries Link -->
        <div class="text-center mt-12">
          <a href="#" class="inline-flex items-center text-gray-700 hover:text-gray-900 font-medium group">
            <span class="relative">
              See all industries we serve
              <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gray-900 transform scale-x-0 transition-transform group-hover:scale-x-100"></span>
            </span>
            <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
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

    <!-- Lightbox component -->
    <Lightbox
      v-if="currentLightbox"
      :is-visible="showLightbox"
      :lightbox-id="currentLightbox.lightbox_id"
      :title="currentLightbox.header"
      :description="currentLightbox.description"
      :close-on-overlay-click="currentLightbox.close_on_overlay"
      @close="closeLightbox"
      @consultation-click="handleConsultationClick"
    />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import axios from 'axios';
import Lightbox from '../lightbox.vue';
import MainLayout from '../MainLayout.vue'; // Make sure path is correct
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

// Lightbox state
const showLightbox = ref(false);
const currentLightbox = ref(null);
const hasShownLightbox = ref(false);

// Fetch active lightboxes for home page
const fetchLightboxes = async () => {
  try {
    console.log('Fetching lightboxes...');
    const response = await axios.get('/api/lightboxes/active', {
      params: { page: 'home' }
    });
    console.log('API Response:', response.data);
    
    if (response.data.success && response.data.data.length > 0) {
      console.log('Found active lightbox:', response.data.data[0]);
      currentLightbox.value = response.data.data[0];
      
      // Check if this lightbox should only be shown once
      const showOnceKey = `lightbox_shown_${currentLightbox.value.lightbox_id}`;
      if (currentLightbox.value.show_once && localStorage.getItem(showOnceKey)) {
        return;
      }
      
      // Show immediately or set up exit intent
      if (currentLightbox.value.show_on_exit) {
        setupExitIntent();
      } else {
        // Show after a short delay
        setTimeout(() => {
          showLightbox.value = true;
          if (currentLightbox.value.show_once) {
            localStorage.setItem(showOnceKey, 'true');
          }
        }, 3000);
      }
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
  }
};

// Set up exit intent detection
const setupExitIntent = () => {
  const handleMouseLeave = (e) => {
    // Trigger when mouse leaves through the top of the page
    if (e.clientY <= 0 && !hasShownLightbox.value) {
      showLightbox.value = true;
      hasShownLightbox.value = true;
      
      // Mark as shown if show_once is enabled
      if (currentLightbox.value.show_once) {
        const showOnceKey = `lightbox_shown_${currentLightbox.value.lightbox_id}`;
        localStorage.setItem(showOnceKey, 'true');
      }
    }
  };
  
  document.addEventListener('mouseleave', handleMouseLeave);
  
  // Cleanup function
  onUnmounted(() => {
    document.removeEventListener('mouseleave', handleMouseLeave);
  });
};

// Handle lightbox close
const closeLightbox = () => {
  showLightbox.value = false;
};

// Handle consultation click in lightbox
const handleConsultationClick = () => {
  // Handle the click action - typically navigation to consultation page
  const consultationUrl = currentLightbox.value.cta_url || '/request-consultation';
  window.location.href = consultationUrl;
};

// Fetch lightboxes when component mounts
onMounted(async () => {
  console.log('Home component mounted');
  
  // Clear any localStorage items that might prevent lightbox from showing
  for (let i = 0; i < localStorage.length; i++) {
    const key = localStorage.key(i);
    if (key && key.startsWith('lightbox_shown_')) {
      console.log('Removing stored lightbox key:', key);
      localStorage.removeItem(key);
    }
  }
  
  // Fetch lightboxes
  await fetchLightboxes();
  
  // If we found a lightbox from the database, show it
  if (currentLightbox.value) {
    console.log('Found lightbox from database:', currentLightbox.value);
    showLightbox.value = true;
  } else {
    console.log('No active lightboxes found for home page');
  }
});

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
  color: black;
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
  color: black; /* Change from white to black */
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
  color: black; /* Ensure bot messages are black */
  border-radius: 18px 18px 18px 4px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

.user-message {
  align-self: flex-end;
  background-color: var(--custom-red);
  color: black; /* Change user messages to black */
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
  color: black; /* Ensure input text is black */
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
  color: black;
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

/* Update the chatbot button color */
.chatbot-circle-button {
  /* ... existing styles ... */
  color: black; /* Change from white to black */
}

/* Update the send button color */
.chatbot-send-button {
  /* ... existing styles ... */
  color: black; /* Change from white to black */
}

/* Ensure SVG inherits the black color */
.chatbot-circle-button svg,
.chatbot-send-button svg {
  color: black;
}

/* When chat is open, keep the SVG black */
.chatbot-button-open svg {
  color: black;
}

/* Update placeholder text color */
.chatbot-input-field::placeholder {
  color: #666; /* Darker placeholder text for better visibility */
}

/* Add these new styles to your existing <style> section */

/* Grid pattern background */
.bg-grid-pattern {
  background-image: linear-gradient(to right, rgba(151, 49, 49, 0.1) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(151, 49, 49, 0.1) 1px, transparent 1px);
  background-size: 20px 20px;
}

/* Enhanced scroll reveal animation */
.scroll-reveal {
  animation: fadeInUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) forwards;
  animation-play-state: paused;
}

.scroll-reveal.animate-reveal {
  animation-play-state: running;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Card hover effects */
.hover\:scale-105:hover {
  transform: scale(1.05);
  z-index: 10;
}

/* Smooth shadow transition */
.hover\:shadow-2xl {
  transition: box-shadow 0.3s ease, transform 0.3s ease;
}

/* Add a subtle gradient overlay on hover */
.card-hover-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(45deg, rgba(151, 49, 49, 0.05), rgba(151, 49, 49, 0));
  opacity: 0;
  transition: opacity 0.3s ease;
}

.hover\:scale-105:hover .card-hover-overlay {
  opacity: 1;
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

/* Circular card specific styles */
.aspect-square {
  aspect-ratio: 1 / 1;
}

/* Enhanced hover effect for circular cards */
.group:hover .group-hover\:opacity-100 {
  opacity: 1;
}

/* Smooth background transition */
.transition-opacity {
  transition-property: opacity;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Adjust text size for better fit in circles */
.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

/* Add a subtle rotate effect on hover */
.hover\:scale-105:hover {
  transform: scale(1.05) rotate(1deg);
}

/* Enhance shadow transition */
.shadow-xl {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  transition: box-shadow 0.3s ease-in-out;
}

.hover\:shadow-2xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Adjust circular card sizes */
.max-w-\[280px\] {
  max-width: 280px; /* Constrains the maximum size of circles */
}

/* Adjust padding for smaller screens */
@media (max-width: 640px) {
  .max-w-\[280px\] {
    max-width: 240px;
  }
}

/* Adjust content spacing */
.p-6 {
  padding: 1.5rem;
}

/* Make icons slightly smaller */
.w-12 {
  width: 3rem;
}

.h-12 {
  height: 3rem;
}

/* Adjust text sizes */
.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

/* Adjust margins */
.mb-4 {
  margin-bottom: 1rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

/* Updated circle card styles for smaller size */
.max-w-\[220px\] {
  max-width: 220px; /* Reduced from 280px */
}

/* Adjust content padding */
.p-4 {
  padding: 1rem; /* Reduced from 1.5rem */
}

/* Make icons smaller */
.w-9 {
  width: 2.25rem; /* Reduced from 3rem */
}

.h-9 {
  height: 2.25rem; /* Reduced from 3rem */
}

/* Adjust text sizes */
.text-base {
  font-size: 1rem; /* Reduced from 1.125rem */
  line-height: 1.5rem;
}

.text-xs {
  font-size: 0.75rem; /* Reduced from 0.875rem */
  line-height: 1rem;
}

/* Adjust margins */
.mb-3 {
  margin-bottom: 0.75rem; /* Reduced from 1rem */
}

.mb-1\.5 {
  margin-bottom: 0.375rem; /* Reduced from 0.5rem */
}

.mb-2 {
  margin-bottom: 0.5rem; /* Reduced from 0.75rem */
}

/* Reduce gap between cards */
.gap-6 {
  gap: 1.5rem; /* Reduced from 2rem */
}

/* Smaller shadow */
.shadow-lg {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.hover\:shadow-xl:hover {
  box-shadow: 0 15px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Smaller rotation on hover */
.hover\:scale-105:hover {
  transform: scale(1.05) rotate(0.5deg); /* Less rotation */
}

/* Responsive adjustments */
@media (max-width: 640px) {
  .max-w-\[220px\] {
    max-width: 180px; /* Even smaller on mobile */
  }
}
</style>
