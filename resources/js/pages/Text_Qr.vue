<template>
  <MainLayout>
    <!-- Hero Section with Burgundy Colors -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">Payment Solutions</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Request Payment For Your Business by Text, Email, or QR Code
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Hurricane Payments allows you to send secure, contactless, and tap-to-pay requests to your customers over text or email. Your personalized <span class="font-semibold">text-to-pay</span> message will include instant contactless payment options for a quick and convenient experience.
          </p>
        </div>
        
        <div class="mt-8 space-y-4">
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">No card readers, hardware, or special devices</p>
          </div>
          
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">No app download or account registration for your customers*</p>
          </div>
          
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">No redirect to a service provider or separate website</p>
          </div>
          
          <div class="flex items-start">
            <svg class="w-6 h-6 mr-3 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="text-gray-700">Pay via Apple Pay, Google Pay, or by entering in card data</p>
          </div>
        </div>
        
        <div class="mt-6 text-sm text-gray-500 italic">
          Services like Venmo®, CashApp®, and Zelle® require your customers to download an app and add their credit card to the respective service, which is something many consumers are hesitant to do.
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
      
      <!-- Right Content - Mobile Phone Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-xl overflow-hidden">
          <img src="@/../images/qrpic.jpg" alt="Payment Complete on Mobile" class="h-[800px] object-cover" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-gray-50 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Text & QR Payment Features</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-6">Streamline your payment process with modern, touchless solutions that customers love.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          <!-- Products and Services Inventory Management -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="0">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Products and Services Inventory Management</h3>
            <p class="text-gray-600 mb-6">Send professional, detailed tap-to-pay invoices. Includes customer management, and reporting tools that coordinate with your business and simplify the transaction process.</p>
          </div>
          
          <!-- Recurring Payments -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="200">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Recurring Payments</h3>
            <p class="text-gray-600 mb-6">Automate your customer's payments with an ongoing or time-specified payment plan. Pending your customer's first touchless payment, they can be auto-enrolled for recurring tap-to-pay requests.</p>
          </div>
          
          <!-- Secure Vault Card Storage -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="400">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Secure Vault Card Storage</h3>
            <p class="text-gray-600 mb-6">Securely store customer card information for future purchases or billing. No need to request credit card information for every future sale.</p>
          </div>
        </div>

        <!-- YouTube Video Section -->
        <div class="lg:w-1/2 scroll-reveal-right opacity-0 relative mx-auto">
          <!-- Video frame with shadow and border effect -->
          <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white transform transition hover:-rotate-1 hover:scale-[1.01] duration-500">
            <!-- Responsive YouTube Embed -->
            <div class="relative pb-[56.25%] h-0 overflow-hidden max-w-full bg-gray-200">
              <iframe 
                class="absolute top-0 left-0 w-full h-full"
                src="https://www.youtube.com/embed/S3FwXsT4CMY" 
                title="Hurricane Payments Text & QR Features"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
              
              <!-- Clickable overlay that redirects to YouTube -->
              <a 
                href="https://www.youtube.com/watch?v=S3FwXsT4CMY" 
                target="_blank" 
                class="absolute inset-0 z-20 cursor-pointer flex items-center justify-center bg-transparent hover:bg-black/10 transition-colors">
                <div class="bg-red-600 text-white px-4 py-2 rounded-lg opacity-0 hover:opacity-100 transition-opacity">
                  Watch on YouTube
                </div>
              </a>
              
              <!-- Loading animation overlay that fades out -->
              <div class="absolute inset-0 bg-gray-100 flex items-center justify-center youtube-loader">
                <div class="w-16 h-16 border-4 border-custom-red border-t-transparent rounded-full animate-spin"></div>
              </div>
            </div>
          </div>
          
          <!-- Decorative elements behind the video -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-8 blur-sm"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-12 blur-sm"></div>
          
          <!-- Floating badge/label -->
          <div class="absolute -right-4 -top-4 bg-custom-red text-white py-2 px-4 rounded-lg font-bold shadow-lg z-20 animate-bounce-slow">
            Watch Demo
          </div>
        </div>
      </div>
    </div>
    
    <!-- Text or Scan to Give Section -->
    <div class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">"Text or Scan to Give" Mobile Donation Platform</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-6"></div>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto">Give your nonprofit or church a fundraising platform that is as robust and unique as you are. Hurricane Payments can support you with the tools you need.</p>
        </div>
        
        <div class="max-w-3xl mx-auto">
          <div class="space-y-6 scroll-reveal opacity-0">
            <div class="flex items-start">
              <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: rgba(151, 49, 49, 0.1);">
                <span class="text-xl font-bold" style="color: #973131;">1</span>
              </div>
              <div class="ml-4">
                <p class="text-gray-700">Receive donations instantly by sending a direct text to donate payment links or custom QR codes to your donors' phone, email, social media feed, and even in person with flyers and signage.</p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: rgba(151, 49, 49, 0.1);">
                <span class="text-xl font-bold" style="color: #973131;">2</span>
              </div>
              <div class="ml-4">
                <p class="text-gray-700">Once they click or scan, your supporters view your personalized fundraising platform, where they set their contribution amount and add their credit card, debit card, or mobile wallet to pay.</p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0" style="background-color: rgba(151, 49, 49, 0.1);">
                <span class="text-xl font-bold" style="color: #973131;">3</span>
              </div>
              <div class="ml-4">
                <p class="text-gray-700">With one click, they authorize a mobile donation and get instant confirmation with a receipt sent to their phone or email.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Why Loyalty Program Matters Section -->
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Why Loyalty Program Matters?</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto mt-6">There are more ways to increase revenue than reaching new customers. In many cases, retargeting existing customers who have already visited your business can also achieve high revenue!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          <!-- Increased Customer Retention -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="0">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l3 3m0 0l3-3m-3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Increased Customer Retention</h3>
            <p class="text-gray-600 mb-6">Loyalty programs can increase customer retention rates by 5-10%. Our program keeps customers coming back by rewarding their continued patronage.</p>
          </div>
          
          <!-- Higher Customer Lifetime Value -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="200">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Higher Customer Lifetime Value</h3>
            <p class="text-gray-600 mb-6">Loyal customers spend 67% more than new ones. Our loyalty programs help you maximize the lifetime value of each customer by encouraging repeat business.</p>
          </div>
          
          <!-- Customer Data & Insights -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="400">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Customer Data & Insights</h3>
            <p class="text-gray-600 mb-6">Gain valuable insights into customer behavior and preferences. Our loyalty programs help you collect data to personalize marketing efforts and improve customer experience.</p>
          </div>
          
          <!-- Increased Average Order Value -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="600">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Increased Average Order Value</h3>
            <p class="text-gray-600 mb-6">Loyalty program members tend to spend more per transaction. Our tiered rewards encourage customers to add more items to their cart to reach point thresholds.</p>
          </div>
          
          <!-- Customer Referrals -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="800">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Customer Referrals</h3>
            <p class="text-gray-600 mb-6">Loyalty program members are more likely to refer friends and family. Our referral-boosting features reward customers for bringing in new business.</p>
          </div>
          
          <!-- Brand Differentiation -->
          <div class="bg-white p-8 rounded-xl shadow-md scroll-reveal opacity-0 transform hover:scale-105 transition-all duration-300" data-delay="1000">
            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-500 rounded-lg flex items-center justify-center mb-6" style="background: linear-gradient(to right, #973131, #7D2828);">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Brand Differentiation</h3>
            <p class="text-gray-600 mb-6">Stand out from competitors with a unique loyalty program. Our customizable solutions help you create a loyalty experience that reflects your brand identity.</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Review Generation Section -->
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">QR-Based Review Generation System</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-6"></div>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto">Boost your online reputation and customer engagement with our innovative review generation system.</p>
        </div>

        <!-- Large Centered Image -->
        <div class="flex justify-center mb-16">
          <div class="relative w-full max-w-2xl mx-auto">
            <!-- Decorative elements behind the image -->
            <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-purple-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 blur-sm"></div>
            <div class="absolute -z-20 inset-0 bg-gradient-to-r from-purple-100 to-pink-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-8 blur-sm"></div>
            
            <!-- Large Centered Image with Animation -->
            <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white card-reveal">
              <img src="@/../images/reviewqr.png" alt="QR-Based Review System" class="w-full h-auto" />
            </div>
          </div>
        </div>
        
        <!-- Features Section (Three Columns) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Quick Review Generation -->
          <div class="bg-white p-6 rounded-xl shadow-lg scroll-reveal opacity-0" data-delay="0">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-full flex items-center justify-center text-white mr-4" style="background: linear-gradient(to right, #973131, #7D2828);">
                <span class="text-xl font-bold">1</span>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Quick Review Generation</h3>
            </div>
            <ul class="space-y-3 text-gray-700">
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Review options for all printed receipts</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Pop up your restaurant's Google Map, Facebook, and Yelp links for customers</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Eliminate unnecessary steps for customers to search platforms</span>
              </li>
            </ul>
          </div>
          
          <!-- Reputation Control -->
          <div class="bg-white p-6 rounded-xl shadow-lg scroll-reveal opacity-0" data-delay="200">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-full flex items-center justify-center text-white mr-4" style="background: linear-gradient(to right, #973131, #7D2828);">
                <span class="text-xl font-bold">2</span>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Reputation Control</h3>
            </div>
            <ul class="space-y-3 text-gray-700">
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>You control which reviews to go public</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Receive text notification after each review</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Record customer feedback for deeper understanding</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Communicate with customers effectively</span>
              </li>
            </ul>
          </div>
          
          <!-- Be the Celebrity -->
          <div class="bg-white p-6 rounded-xl shadow-lg scroll-reveal opacity-0" data-delay="400">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-red-600 to-red-500 rounded-full flex items-center justify-center text-white mr-4" style="background: linear-gradient(to right, #973131, #7D2828);">
                <span class="text-xl font-bold">3</span>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Be the Celebrity</h3>
            </div>
            <ul class="space-y-3 text-gray-700">
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Increase exposure, affiliation, and sales</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #973131;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Stand out from competitors and be famous</span>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- YouTube Video Section with added spacing -->
        <div class="lg:w-3/4 scroll-reveal-right opacity-0 relative mx-auto mt-24">
          <div class="text-center mb-8">
            <h3 class="text-2xl font-bold">See How It Works</h3>
            <p class="text-gray-600">Watch our demonstration video to learn more about the QR-based review system</p>
          </div>
          
          <!-- Video frame with shadow and border effect -->
          <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white transform transition hover:-rotate-1 hover:scale-[1.01] duration-500">
            <!-- Responsive YouTube Embed -->
            <div class="relative pb-[56.25%] h-0 overflow-hidden max-w-full bg-gray-200">
              <iframe 
                class="absolute top-0 left-0 w-full h-full"
                src="https://www.youtube.com/embed/tnQyq7mB2lU" 
                title="QR-Based Review Generation System"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
              
              <!-- Clickable overlay that redirects to YouTube -->
              <a 
                href="https://www.youtube.com/watch?v=tnQyq7mB2lU" 
                target="_blank" 
                class="absolute inset-0 z-20 cursor-pointer flex items-center justify-center bg-transparent hover:bg-black/10 transition-colors">
                <div class="bg-red-600 text-white px-4 py-2 rounded-lg opacity-0 hover:opacity-100 transition-opacity">
                  Watch on YouTube
                </div>
              </a>
              
              <!-- Loading animation overlay that fades out -->
              <div class="absolute inset-0 bg-gray-100 flex items-center justify-center youtube-loader">
                <div class="w-16 h-16 border-4 border-custom-red border-t-transparent rounded-full animate-spin"></div>
              </div>
            </div>
          </div>
          
          <!-- Decorative elements behind the video -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-8 blur-sm"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-12 blur-sm"></div>
        </div>
      </div>
    </div>
    
   

    <!-- Add the CtaActionSection component before the closing MainLayout tag -->
    <CtaActionSection 
      heading="Ready to Enhance Your Business with QR Solutions?"
      subheading="Our contactless payment and review generation systems make it easy to process payments and collect valuable feedback.<br>Boost both your revenue and reputation with our integrated QR solutions."
    />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import MainLayout from './MainLayout.vue';
import lightbox from './lightbox.vue'; // Import the lightbox component
import CtaActionSection from '../components/CtaActionSection.vue';

// Existing code...

// Add these for lightbox functionality
const currentLightbox = ref(null);
const showLightbox = ref(false);

// Fetch active lightboxes for text-qr page
const fetchLightboxes = async () => {
  try {
    console.log('Fetching lightboxes for text-qr page...');
    const response = await axios.get('/api/lightboxes/active', {
      params: { page: 'text-qr' }
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

// Handle the close action
const closeLightbox = () => {
  showLightbox.value = false;
};

// Handle the consultation button click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // Navigate to consultation page or handle as needed
  window.location.href = currentLightbox.value.cta_url || '/request-consultation';
};

// Set up exit intent detection
const setupExitIntent = () => {
  const handleExitIntent = (e) => {
    // If the mouse leaves the top of the viewport
    if (e.clientY <= 0) {
      // Remove the event listener to prevent multiple triggers
      document.removeEventListener('mouseleave', handleExitIntent);
      
      // Show the lightbox
      showLightbox.value = true;
      
      // If show only once, set the flag
      if (currentLightbox.value && currentLightbox.value.show_once) {
        localStorage.setItem(`lightbox_shown_${currentLightbox.value.lightbox_id}`, 'true');
      }
    }
  };
  
  document.addEventListener('mouseleave', handleExitIntent);
};

// Add this function to your script setup section
function scrollToNextSection() {
  const featuresSection = document.querySelector('.py-16.bg-gray-50');
  if (featuresSection) {
    featuresSection.scrollIntoView({ behavior: 'smooth' });
  }
}

onMounted(() => {
  // Force the YouTube iframe to be visible immediately
  setTimeout(() => {
    const youtubeContainer = document.querySelector('.rounded-xl.overflow-hidden.shadow-2xl');
    if (youtubeContainer) {
      youtubeContainer.style.opacity = '1';
    }
    
    // Make sure the loader fades out to reveal the video
    const loader = document.querySelector('.youtube-loader');
    if (loader) {
      loader.style.opacity = '0.3';
      setTimeout(() => loader.style.opacity = '0', 1000);
    }
  }, 500);
  
  // Intro animation for entire page (like in home.vue)
  const heroSection = document.querySelector('.container.mx-auto.px-6.py-16');
  if (heroSection) {
    heroSection.style.opacity = '0';
    heroSection.style.transform = 'translateY(20px)';
    heroSection.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    
    setTimeout(() => {
      heroSection.style.opacity = '1';
      heroSection.style.transform = 'translateY(0)';
    }, 100);
  }
  
  // Existing animation observers and code
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.scroll-reveal').forEach(element => {
    observer.observe(element);
  });
  
  const slideElements = document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal, .card-reveal');
  slideElements.forEach(element => {
    element.classList.add('animate');
  });
  
  // Fetch lightboxes for this page
  fetchLightboxes();
  
  // Initialize floating elements animation
  document.querySelectorAll('.floating-element').forEach(el => {
    el.style.position = 'absolute';
    el.style.animation = 'float 6s ease-in-out infinite';
  });
  
  // Handle YouTube iframe loading
  const youtubeIframe = document.querySelector('iframe');
  if (youtubeIframe) {
    youtubeIframe.addEventListener('load', () => {
      const loader = document.querySelector('.youtube-loader');
      if (loader) {
        loader.style.opacity = 0;
      }
    });
  }
  
  // Observe the scroll-reveal-right elements like in Mobile_Processing.vue
  const scrollRevealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          if (entry.target.classList.contains('scroll-reveal-right')) {
            entry.target.classList.add('animate-reveal-right');
            entry.target.classList.remove('opacity-0');
          }
        }, 300);
        scrollRevealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  
  // Observe the YouTube container
  document.querySelectorAll('.scroll-reveal-right').forEach(element => {
    scrollRevealObserver.observe(element);
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

/* Make CTA buttons more distinct */
.fancy-button {
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  letter-spacing: 0.03em;
}

.fancy-button:hover {
  background-color: #7e2929 !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
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
}

/* Fancy button hover effect */
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

@keyframes float {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
  100% {
    transform: translateY(0px);
  }
}

.floating-element {
  animation: float 6s ease-in-out infinite;
  will-change: transform;
}

/* Enhanced scroll reveal animations */
.scroll-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease-out, transform 0.9s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
}

.scroll-reveal.animate {
  opacity: 1 !important;
  transform: translateY(0) !important;
}

/* Testimonial card hover effect */
.hover\:scale-102:hover {
  transform: scale(1.02) translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.08);
}

/* Custom bounce animation for floating badge */
@keyframes bounce-slow {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

.animate-bounce-slow {
  animation: bounce-slow 3s infinite ease-in-out;
}

/* Custom color classes */
.bg-custom-red {
  background-color: #973131;
}

.border-custom-red {
  border-color: #973131;
}

.text-custom-red {
  color: #973131;
}

/* Add classes for the red SVG icons */
.text-red-600 {
  color: #973131 !important;
}

/* YouTube video fixes */
.youtube-loader {
  transition: opacity 1s ease;
  opacity: 1;
  z-index: 4;
}

.rounded-xl.overflow-hidden iframe {
  z-index: 5;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 1;
}

/* Add scroll-reveal-right animation for YouTube section */
.scroll-reveal-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
}

.animate-reveal-right {
  opacity: 1 !important;
  transform: translateX(0) !important;
}
</style>
