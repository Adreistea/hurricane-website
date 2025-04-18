<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-green-600 font-semibold delay-100">Industries</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Food & Beverage Payment Processing
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Restaurateurs know that the key to success is offering the best dining experience possible. Every aspect, from being seated to enjoying a delicious meal and paying the check, is an important part of what keeps guests coming back for more. Our restaurant-specific solutions can help you improve processes and make service easy.
          </p>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img src="@/../images/WeChat-Image_20200904180730.jpg" alt="Restaurant Solutions" class="w-full h-auto"
               onerror="this.onerror=null; this.src='@/../images/TransparentLogo.png';" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-green-100 to-emerald-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-emerald-100 to-green-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Solutions Section -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Why Hurricane Payments</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
          <p class="text-xl mt-4">Powerful solutions for all restaurant concepts.</p>
        </div>
        
        <!-- Solutions container with border -->
        <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Total Touch Point of Sale -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-green-500">Total Touch® Point of Sale</h2>
              </div>
              <p class="text-gray-700">
                Discover the integrated point of sale solution that can help you manage sales, inventory, employees, operations, and more for your restaurant.
              </p>
            </div>

            <!-- Gift & Loyalty Cards -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-500">Gift & Loyalty Cards</h2>
              </div>
              <p class="text-gray-700">
                Attract new customers with a gift card and use your loyalty program to keep them coming back for more.
              </p>
            </div>

            <!-- Mobile Processing -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-indigo-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-indigo-500">Mobile Processing</h2>
              </div>
              <p class="text-gray-700">
                Accept all payment types at your food truck or stand, including EMV chip cards and contactless options such as Apple Pay and Google Pay.
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
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Benefits for Restaurants & Bars</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <!-- Left Column -->
          <div class="space-y-8">
            <!-- Benefit 1 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="0">
              <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Faster Table Turnover</h3>
                <p class="text-gray-700">
                  Streamlined payment processing reduces wait times for customers, allowing you to serve more guests and increase revenue.
                </p>
              </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="100">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Improved Staff Efficiency</h3>
                <p class="text-gray-700">
                  Mobile payment solutions reduce the time staff spend running back and forth to the POS terminal, allowing them to focus on customer service.
                </p>
              </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="200">
              <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-amber-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Inventory Management</h3>
                <p class="text-gray-700">
                  Integrated inventory tracking helps prevent stockouts, reduce waste, and optimize purchasing decisions based on real-time data.
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
                  Gain valuable insights into sales trends, popular menu items, peak business hours, and customer preferences to make data-driven decisions.
                </p>
              </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="400">
              <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-violet-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Enhanced Customer Experience</h3>
                <p class="text-gray-700">
                  Digital menus, contactless payments, and faster service lead to higher customer satisfaction and loyalty.
                </p>
              </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="500">
              <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Secure Transactions</h3>
                <p class="text-gray-700">
                  Advanced encryption, tokenization, and fraud prevention measures keep your customers' payment information safe and secure.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- New Section: Total Touch Details -->
    <div class="py-24 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Manage Every Aspect of Your Restaurant with Kwick and Hurricane</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-8"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
          <div class="bg-gradient-to-br from-white to-gray-50 p-8 rounded-xl shadow-md scroll-reveal opacity-0 border-l-4 border-red-700">
            <!-- Icon Header -->
            <div class="flex justify-center mb-6">
              <div class="w-20 h-20 bg-gradient-to-r from-red-700 to-red-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                </svg>
              </div>
            </div>
            
            <!-- Content with highlighted boxes -->
            <p class="text-lg text-gray-700 mb-6">
              KwickPOS is a preferred solution for all restaurant concepts, from quick-service pizza spots to premier fine dining rooms. Our <span class="font-semibold bg-green-50 text-green-800 px-2 py-1 rounded">hybrid cloud and server-based system</span> keeps running even during internet interruptions, while allowing you to manage operations from anywhere.
            </p>
            
            <!-- Results and Benefits Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <!-- Revenue Card -->
              <div class="bg-white rounded-lg p-5 shadow-md border-t-4 border-green-500 transform transition hover:scale-105 duration-300">
                <div class="flex items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                  </svg>
                  <h3 class="text-xl font-bold text-gray-900">15-20% Revenue Increase</h3>
                </div>
                <p class="text-gray-700">Through faster table turnover, integrated loyalty programs, and expanded payment options.</p>
              </div>
              
              <!-- Cost Reduction Card -->
              <div class="bg-white rounded-lg p-5 shadow-md border-t-4 border-blue-500 transform transition hover:scale-105 duration-300">
                <div class="flex items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-14a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V4z" clip-rule="evenodd" />
                  </svg>
                  <h3 class="text-xl font-bold text-gray-900">10-15% Cost Reduction</h3>
                </div>
                <p class="text-gray-700">Through streamlined operations, reduced food waste, and competitive processing rates.</p>
              </div>
            </div>
            
            <!-- Closing statement -->
            <div class="p-4 bg-red-50 rounded-lg border border-red-100 text-center">
              <p class="text-gray-800 font-medium">
                Our unified system connects your entire operation, allowing staff to focus on customers while you make smarter decisions with real-time analytics.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Essential Features Section -->
    <div class="py-24 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Essential Features for Restaurants & Bars</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-6"></div>
          <p class="text-xl text-gray-700 max-w-4xl mx-auto">
            The intuitive, powerful features KwickPOS offers can help you stop worrying about system downtime and focus on your primary goal — delivering the best dining experience possible. Some of these include:
          </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
          <!-- Feature 1: Tab Management -->
          <div class="bg-white p-6 rounded-lg shadow-md scroll-reveal opacity-0 transform hover:-translate-y-2 transition-all duration-300" data-delay="0">
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-400 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900">Tab Management</h3>
          </div>
          
          <!-- Feature 2: Mobile & Online Ordering -->
          <div class="bg-white p-6 rounded-lg shadow-md scroll-reveal opacity-0 transform hover:-translate-y-2 transition-all duration-300" data-delay="100">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-400 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900">Mobile & Online Ordering</h3>
          </div>
          
          <!-- Feature 3: Open Table Management -->
          <div class="bg-white p-6 rounded-lg shadow-md scroll-reveal opacity-0 transform hover:-translate-y-2 transition-all duration-300" data-delay="200">
            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-amber-400 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900">Open Table Management</h3>
          </div>
          
          <!-- Feature 4: Pre-Authorized Bar Tabs -->
          <div class="bg-white p-6 rounded-lg shadow-md scroll-reveal opacity-0 transform hover:-translate-y-2 transition-all duration-300" data-delay="300">
            <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-rose-400 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 012 2h12a2 2 0 012-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900">Pre-Authorized Bar Tabs</h3>
          </div>
          
          <!-- Feature 5: Split Check & Flexible Payment Options -->
          <div class="bg-white p-6 rounded-lg shadow-md scroll-reveal opacity-0 transform hover:-translate-y-2 transition-all duration-300" data-delay="400">
            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-violet-400 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900">Split Check & Flexible Payment Options</h3>
          </div>
          
          <!-- Feature 6: Inventory Management -->
          <div class="bg-white p-6 rounded-lg shadow-md scroll-reveal opacity-0 transform hover:-translate-y-2 transition-all duration-300" data-delay="500">
            <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-400 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900">Inventory Management</h3>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to transform your restaurant operations?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our restaurant & bar payment solutions are designed to help you increase efficiency, enhance customer experience, and boost your bottom line.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
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
