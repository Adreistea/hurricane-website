<template>
    <MainLayout>
      <!-- Hero Section -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-2">
            <span class="text-reveal-content text-purple-600 font-semibold delay-100">Industries</span>
          </div>
          
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
              eCommerce & Online Payment Processing
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-300">
              Leverage the right digital tools and strategies to help your online business grow! We can help you establish your web presence, add a store to your existing website, or even enable payments for your online store. Our digital solutions are cost-effective, user-friendly, and always held to the highest security standards.
            </p>
          </div>
        </div>
        
        <!-- Right Content - Image with Card Reveal Animation -->
        <div class="lg:w-1/2 relative card-reveal delay-200">
          <div class="rounded-lg shadow-2xl overflow-hidden">
            <img src="@/../images/ecommercepic.png" alt="eCommerce Payment Solutions" class="w-full h-auto" 
                 onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" />
          </div>
          
          <!-- Animated decorative elements -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-purple-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-r from-indigo-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        </div>
      </div>
  
      <!-- Modern Business Section -->
      <div class="py-24 bg-white">
        <div class="container mx-auto px-6">
          <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left side image with decorative elements -->
            <div class="lg:w-2/5 relative">
              <div class="rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0">
                <img src="@/../images/ecommercepic2.jpeg" alt="Modern eCommerce Solutions" class="w-full h-auto" 
                     onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" />
              </div>
              <!-- Decorative elements -->
              <div class="absolute -z-10 -bottom-6 -right-6 w-full h-full bg-gradient-to-r from-purple-100 to-indigo-100 rounded-xl transform rotate-2"></div>
              <div class="absolute -z-20 -bottom-12 -right-12 w-full h-full bg-gradient-to-r from-indigo-100 to-purple-100 rounded-xl transform -rotate-3"></div>
            </div>
            
            <!-- Right side content -->
            <div class="lg:w-3/5">
              <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0" style="color: #973131;">Modern Businesses Need Innovative Solutions</h2>
              <div class="text-lg text-gray-700 space-y-4 scroll-reveal opacity-0" data-delay="100">
                <p>
                  Conducting business online is an option steadily gaining popularity and potential. Electronic Merchant Systems is prepared to help online businesses reach more customers and offer excellent service to every online guest.
                </p>
                <p>
                  You may not be able to present a friendly greeting or your personal attention when a customer enters your website, but you can still show you care by providing a straightforward and secure buying experience. Let us help you develop that experience with an innovative eCommerce payment processing solution.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Solutions Section -->
      <div class="relative py-24 mt-16">
        <div class="container mx-auto px-6">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Why Hurricane Payments</h2>
            <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto mt-4">Hurricane Payments provides innovative web services to reinforce your digital presence.</p>
          </div>
          
          <!-- Solutions container with border -->
          <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
              <!-- Responsive Web Design -->
              <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="0">
                <div class="flex flex-row items-center mb-4">
                  <div class="w-14 h-14 mr-4 text-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <h2 class="text-2xl font-bold text-purple-500">Responsive Web Design</h2>
                </div>
                <p class="text-gray-700">
                  Offer a consistent experience to all customers with EMS. Our websites are designed to be responsive, meaning they adapt to fit any screen size.
                </p>
              </div>
  
              <!-- Online Shopping Carts -->
              <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="200">
                <div class="flex flex-row items-center mb-4">
                  <div class="w-14 h-14 mr-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </div>
                  <h2 class="text-2xl font-bold text-blue-500">Online Shopping Carts</h2>
                </div>
                <p class="text-gray-700">
                  Control the shopper's online buying experience with a simple, clean, and straightforward shopping cart. We can build one into a new website or add a cart to your existing website.
                </p>
              </div>
  
              <!-- Web Hosting Services -->
              <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="400">
                <div class="flex flex-row items-center mb-4">
                  <div class="w-14 h-14 mr-4 text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                  </div>
                  <h2 class="text-2xl font-bold text-indigo-500">Web Hosting Services</h2>
                </div>
                <p class="text-gray-700">
                  Host your website with us to benefit from: data storage, an email address tied to your website, simple web transfer, design tools, and administrative tools.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Benefits Section -->
      <div class="bg-gray-50 py-24">
        <div class="container mx-auto px-6">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Benefits for Online Businesses</h2>
            <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            <!-- Left Column -->
            <div class="space-y-8">
              <!-- Benefit 1 -->
              <div class="flex items-start scroll-reveal opacity-0" data-delay="0">
                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-900">Increased Conversion Rates</h3>
                  <p class="text-gray-700">
                    Streamlined checkout processes reduce cart abandonment and increase completed purchases by up to 35%.
                  </p>
                </div>
              </div>
              
              <!-- Benefit 2 -->
              <div class="flex items-start scroll-reveal opacity-0" data-delay="100">
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-900">Enhanced Security</h3>
                  <p class="text-gray-700">
                    PCI-compliant solutions with advanced fraud protection features to safeguard your customers' payment information and build trust.
                  </p>
                </div>
              </div>
              
              <!-- Benefit 3 -->
              <div class="flex items-start scroll-reveal opacity-0" data-delay="200">
                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-900">Multiple Payment Options</h3>
                  <p class="text-gray-700">
                    Support for credit cards, digital wallets (Apple Pay, Google Pay), buy-now-pay-later services, and international payment methods to reach a global customer base.
                  </p>
                </div>
              </div>
            </div>
            
            <!-- Right Column -->
            <div class="space-y-8">
              <!-- Benefit 4 -->
              <div class="flex items-start scroll-reveal opacity-0" data-delay="300">
                <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-rose-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-900">Detailed Analytics</h3>
                  <p class="text-gray-700">
                    Comprehensive reporting tools to track sales, identify trends, and gain valuable insights into customer purchasing behavior.
                  </p>
                </div>
              </div>
              
              <!-- Benefit 5 -->
              <div class="flex items-start scroll-reveal opacity-0" data-delay="400">
                <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-yellow-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-900">Customer Management</h3>
                  <p class="text-gray-700">
                    Store customer profiles and payment information securely to enable one-click purchases and personalized shopping experiences.
                  </p>
                </div>
              </div>
              
              <!-- Benefit 6 -->
              <div class="flex items-start scroll-reveal opacity-0" data-delay="500">
                <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-900">Global Reach</h3>
                  <p class="text-gray-700">
                    Accept payments in multiple currencies with automatic currency conversion, enabling you to expand your business internationally with ease.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Affordable Solutions Section -->
      <div class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
            <!-- Right side image with decorative elements -->
            <div class="lg:w-2/5 relative">
              <div class="rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0">
                <div class="bg-white p-16 rounded-xl flex items-center justify-center">
                  <div class="text-center relative">
                    <div class="text-8xl font-bold mb-4" style="color: #973131;">$</div>
                    <div class="flex items-center justify-center">
                      <span class="animate-ping absolute h-5 w-5 rounded-full bg-red-200 opacity-75"></span>
                      <span class="relative block h-5 w-5 rounded-full bg-red-300"></span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Decorative elements -->
              <div class="absolute -z-10 -bottom-6 -left-6 w-full h-full bg-gradient-to-r from-green-100 to-blue-100 rounded-xl transform -rotate-2"></div>
              <div class="absolute -z-20 -bottom-12 -left-12 w-full h-full bg-gradient-to-r from-amber-100 to-purple-100 rounded-xl transform rotate-3"></div>
            </div>
            
            <!-- Left side content -->
            <div class="lg:w-3/5">
              <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0" style="color: #973131;">Affordable, Simple, Secure Solutions</h2>
              <div class="text-lg text-gray-700 scroll-reveal opacity-0" data-delay="100">
                <p>
                  Helping small businesses improve profitability is part of our company mission. Therefore, we are committed to offering low, wholesale rates for all our products and services. However, we never sacrifice quality. When you choose to implement an EMS solution, you can rest assured that you will be getting the best solution possible, at the lowest rate possible. And yes, the savings stack up quick!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- CTA Section -->
      <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to scale your online business?</h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our eCommerce payment solutions are designed to help you increase sales, expand globally, and provide a seamless checkout experience to your customers.</p>
          <div class="scroll-reveal opacity-0 delay-300">
            <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
              Request a Consultation
            </router-link>
            <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
              View Pricing
            </a>
          </div>
        </div>
      </div>
    </MainLayout>
  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import MainLayout from './MainLayout.vue';
  
  onMounted(() => {
    // Initialize animation observer for scroll reveal
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
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
  });
  </script>
  
  <style scoped>
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
  
  .card-reveal {
    opacity: 0;
    transform: scale(0.95);
    transition: all 1s ease-out;
  }
  
  .card-reveal.animate {
    opacity: 1;
    transform: scale(1);
  }
  
  /* Animations with delays */
  .delay-100 { transition-delay: 0.1s; }
  .delay-200 { transition-delay: 0.2s; }
  .delay-300 { transition-delay: 0.3s; }
  .delay-400 { transition-delay: 0.4s; }
  .delay-500 { transition-delay: 0.5s; }
  
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
  </style>