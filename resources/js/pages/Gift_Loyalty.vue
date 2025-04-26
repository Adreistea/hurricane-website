<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">Additional Services</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Gift & Loyalty Programs
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Enhance customer retention and increase revenue with our customizable gift and loyalty programs. Build lasting relationships with your customers while driving repeat business.
          </p>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img src="@/../images/gift.png" alt="Gift & Loyalty Programs" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-purple-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Program Types Section -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Our Loyalty Programs</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <!-- Programs container with border -->
        <div class="programs-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Gift Cards Program -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 program-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-purple-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-purple-500">Gift Card Program</h2>
              </div>
              <p class="text-gray-700">
                Custom-branded physical and digital gift cards that increase sales, bring in new customers, and boost your brand recognition. Perfect for holiday seasons and special occasions.
              </p>
            </div>

            <!-- Points Program -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 program-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-indigo-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-indigo-500">Points Program</h2>
              </div>
              <p class="text-gray-700">
                Reward your customers for repeat purchases with a customizable points system. Customers earn points with each purchase that can be redeemed for discounts, free items, or special perks.
              </p>
            </div>

            <!-- Digital Rewards Program -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 program-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-500">Digital Rewards</h2>
              </div>
              <p class="text-gray-700">
                Modern, app-based loyalty program that lets customers collect and redeem rewards directly from their smartphones. No physical cards needed, just a seamless digital experience.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Why Loyalty Program Matters Section -->
    <div class="py-20 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Why Loyalty Program Matters?</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-6"></div>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto">
            There are more ways to increase revenue than reaching new customers. In many cases, retargeting existing customers who have already visited your business can also achieve high revenue!
          </p>
        </div>
        
        <!-- Image Carousel with Navigation -->
        <div class="max-w-5xl mx-auto mb-16 relative">
          <!-- Image Slides -->
          <div class="carousel-container">
            <!-- Slide 1 -->
            <div class="carousel-slide rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0" data-delay="0" id="slide-1">
              <div class="flex justify-center bg-white p-4">
                <img src="@/../images/advancedloyalty.png" alt="Advanced Loyalty Program" class="w-auto h-auto max-w-full max-h-[600px]" />
              </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-slide rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0 hidden" data-delay="100" id="slide-2">
              <div class="flex justify-center bg-white p-4">
                <img src="@/../images/kpgiftcard.png" alt="KwickPOS Loyalty" class="w-auto h-auto max-w-full max-h-[600px]" />
              </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-slide rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0 hidden" data-delay="200" id="slide-3">
              <div class="flex justify-center bg-white p-4">
                <img src="@/../images/comparison.png" alt="Points and Rewards" class="w-auto h-auto max-w-full max-h-[600px]" />
              </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="carousel-slide rounded-xl overflow-hidden shadow-xl scroll-reveal opacity-0 hidden" data-delay="300" id="slide-4">
              <div class="flex justify-center bg-white p-4">
                <img src="@/../images/benefit.png" alt="Marketing Campaigns" class="w-auto h-auto max-w-full max-h-[600px]" />
              </div>
            </div>
          </div>
          
          <!-- Navigation Controls -->
          <div class="flex justify-center mt-6 mb-8">
            <button @click="showSlide('slide-1')" class="w-3 h-3 rounded-full mx-2 focus:outline-none" :class="{'bg-red-600': currentSlide === 'slide-1', 'bg-gray-300': currentSlide !== 'slide-1'}"></button>
            <button @click="showSlide('slide-2')" class="w-3 h-3 rounded-full mx-2 focus:outline-none" :class="{'bg-red-600': currentSlide === 'slide-2', 'bg-gray-300': currentSlide !== 'slide-2'}"></button>
            <button @click="showSlide('slide-3')" class="w-3 h-3 rounded-full mx-2 focus:outline-none" :class="{'bg-red-600': currentSlide === 'slide-3', 'bg-gray-300': currentSlide !== 'slide-3'}"></button>
            <button @click="showSlide('slide-4')" class="w-3 h-3 rounded-full mx-2 focus:outline-none" :class="{'bg-red-600': currentSlide === 'slide-4', 'bg-gray-300': currentSlide !== 'slide-4'}"></button>
          </div>
          
          <!-- Caption -->
          <div class="text-center text-gray-600 italic mt-2 mb-6">
            These images showcase some of the gift card and loyalty services we offer to help your business grow.
          </div>
          
          <!-- Next/Prev Buttons -->
          <button @click="prevSlide" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg focus:outline-none hover:bg-gray-100 transition-colors z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <button @click="nextSlide" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg focus:outline-none hover:bg-gray-100 transition-colors z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
        
        <!-- Three column features -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl mx-auto">
          <!-- Feature 1 -->
          <div class="bg-white p-8 rounded-xl shadow-lg scroll-reveal opacity-0" data-delay="0">
            <div class="text-center mb-6">
              <h3 class="text-2xl font-bold mb-2" style="color: #973131;">Love at first sight</h3>
            </div>
            <p class="text-gray-700">
              KwickPOS offers a phone-number linked loyalty program that is based on purchases or visits.
            </p>
          </div>
          
          <!-- Feature 2 -->
          <div class="bg-white p-8 rounded-xl shadow-lg scroll-reveal opacity-0" data-delay="200">
            <div class="text-center mb-6">
              <h3 class="text-2xl font-bold mb-2" style="color: #973131;">Points + Rewards</h3>
            </div>
            <p class="text-gray-700">
              Customers can accumulate points with every purchase or visit to redeem rewards that will keep them coming back.
            </p>
          </div>
          
          <!-- Feature 3 -->
          <div class="bg-white p-8 rounded-xl shadow-lg scroll-reveal opacity-0" data-delay="400">
            <div class="text-center mb-6">
              <h3 class="text-2xl font-bold mb-2" style="color: #973131;">Retargeting Marketing Campaigns</h3>
            </div>
            <p class="text-gray-700">
              Excite your most loyal customers with ways to earn discounts and additional perks with a loyalty program.
            </p>
          </div>
        </div>
        
        <!-- YouTube Video Section - Added below features -->
        <div class="max-w-5xl mx-auto mt-16">
          <div class="flex flex-col lg:flex-row items-center gap-10">
            <!-- YouTube Video with Animation -->
            <div class="lg:w-1/2 scroll-reveal-right opacity-0 relative">
              <!-- Video frame with shadow and border effect -->
              <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white transform transition hover:-rotate-1 hover:scale-[1.01] duration-500">
                <!-- Responsive YouTube Embed -->
                <div class="relative pb-[56.25%] h-0 overflow-hidden max-w-full bg-gray-200">
                  <!-- YouTube iframe -->
                  <iframe 
                    class="absolute top-0 left-0 w-full h-full"
                    src="https://www.youtube.com/embed/PoCwK1yKh1c?rel=0&showinfo=0" 
                    title="Loyalty Program Benefits"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                  </iframe>
                  
                  <!-- Clickable overlay that redirects to YouTube -->
                  <a 
                    href="https://www.youtube.com/watch?v=PoCwK1yKh1c" 
                    target="_blank" 
                    class="absolute inset-0 z-20 cursor-pointer flex items-center justify-center bg-transparent hover:bg-black/10 transition-colors">
                    <div class="bg-red-600 text-white px-4 py-2 rounded-lg opacity-0 hover:opacity-100 transition-opacity">
                      Watch on YouTube
                    </div>
                  </a>
                  
                  <!-- Loading animation overlay that fades out -->
                  <div class="absolute inset-0 bg-gray-100 flex items-center justify-center youtube-loader" style="opacity: 1;">
                    <div class="w-16 h-16 border-4 border-custom-red border-t-transparent rounded-full animate-spin"></div>
                  </div>
                </div>
              </div>
              
              <!-- Decorative elements behind the video -->
              <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-8 blur-sm"></div>
              <div class="absolute -z-20 inset-0 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-12 blur-sm"></div>
              
              <!-- Floating badge/label -->
              <div class="absolute -right-4 -top-4 bg-custom-red text-black py-2 px-4 rounded-lg font-bold shadow-lg z-20 animate-bounce-slow">
                Watch Demo
              </div>
            </div>
            
            <!-- Text Content -->
            <div class="lg:w-1/2 scroll-reveal-left opacity-0">
              <h3 class="text-3xl font-bold mb-6" style="color: #973131;">How Our Loyalty Programs Work</h3>
              <p class="text-lg text-gray-700 mb-6">
                Our loyalty program solutions offer tremendous flexibility, allowing you to design a program that fits your specific business needs. The customizable platforms help you reward customers in ways that make sense for your business model.
              </p>
              <p class="text-lg text-gray-700 mb-6">
                Whether you're looking to increase customer visit frequency, boost average order value, or simply build a stronger connection with your clientele, our loyalty solutions can be tailored to achieve your goals.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="bg-white py-24">
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
              <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Increased Customer Retention</h3>
                <p class="text-gray-700">
                  Loyalty programs can increase customer retention rates by 5-10%. Our program keeps customers coming back by rewarding their continued patronage.
                </p>
              </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="100">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Higher Customer Lifetime Value</h3>
                <p class="text-gray-700">
                  Loyal customers spend 67% more than new ones. Our loyalty programs help you maximize the lifetime value of each customer by encouraging repeat business.
                </p>
              </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="200">
              <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Customer Data & Insights</h3>
                <p class="text-gray-700">
                  Gain valuable insights into customer behavior and preferences. Our loyalty programs help you collect data to personalize marketing efforts and improve customer experience.
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
                  <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Increased Average Order Value</h3>
                <p class="text-gray-700">
                  Loyalty program members tend to spend more per transaction. Our tiered rewards encourage customers to add more items to their cart to reach point thresholds.
                </p>
              </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="400">
              <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-yellow-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Customer Referrals</h3>
                <p class="text-gray-700">
                  Loyalty program members are more likely to refer friends and family. Our referral-boosting features reward customers for bringing in new business.
                </p>
              </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="500">
              <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Brand Differentiation</h3>
                <p class="text-gray-700">
                  Stand out from competitors with a unique loyalty program. Our customizable solutions help you create a loyalty experience that reflects your brand identity.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Attract New Customers Section -->
    <div class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12 scroll-reveal opacity-0">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Attract New Customers</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <div class="flex flex-col lg:flex-row gap-10 items-center max-w-6xl mx-auto">
          <!-- Image Column -->
          <div class="lg:w-1/2 scroll-reveal opacity-0" data-delay="100">
            <div class="rounded-lg shadow-xl overflow-hidden">
              <img src="@/../images/loyalty.png" alt="Attract New Customers" class="w-full h-auto" 
                   onerror="this.onerror=null; this.src='data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22400%22%20height%3D%22300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20400%20300%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_189a44be9d5%20text%20%7B%20fill%3A%23973131%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A20pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_189a44be9d5%22%3E%3Crect%20width%3D%22400%22%20height%3D%22300%22%20fill%3D%22%23f1f5f9%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22110%22%20y%3D%22156.5%22%3EGift%20Cards%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E';" />
            </div>
          </div>
          
          <!-- Text Column -->
          <div class="lg:w-1/2">
            <div class="scroll-reveal opacity-0" data-delay="200">
              <p class="text-lg text-gray-700 mb-6">
                Gift cards make great thank you gifts, prizes, stocking stuffers, and more. With each gift card you sell, you gain the opportunity to welcome a new customer to your business.
              </p>
            </div>
            
            <div class="scroll-reveal opacity-0" data-delay="300">
              <p class="text-lg text-gray-700 mb-6">
                Their experience with you starts when they receive that little piece of plastic, which means it needs to be visually appealing and represent your business.
              </p>
            </div>
            
            <div class="scroll-reveal opacity-0" data-delay="400">
              <p class="text-lg text-gray-700 mb-6">
                Trust the creative professionals at Hurricane Payments to deliver the branded, plastic card masterpiece you need to attract new customers. Our in-house team utilizes software and various designs to build a program that is completely customized to your business.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to build customer loyalty?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our gift and loyalty programs are designed to help your business grow through increased customer retention and higher average order values.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
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
  </MainLayout>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';
import MainLayout from './MainLayout.vue';
import axios from 'axios';
import lightbox from './lightbox.vue';

// Lightbox state
const showLightbox = ref(false);
const currentLightboxId = ref(null);
const currentSlide = ref('slide-1');
const slides = ['slide-1', 'slide-2', 'slide-3', 'slide-4'];
const youtubeLoaded = ref(false);

// Image carousel functions
const showSlide = (slideId) => {
  // Hide all slides
  document.querySelectorAll('.carousel-slide').forEach(slide => {
    slide.classList.add('hidden');
  });
  
  // Show the selected slide
  document.getElementById(slideId)?.classList.remove('hidden');
  currentSlide.value = slideId;
};

const nextSlide = () => {
  const currentIndex = slides.indexOf(currentSlide.value);
  const nextIndex = (currentIndex + 1) % slides.length;
  showSlide(slides[nextIndex]);
};

const prevSlide = () => {
  const currentIndex = slides.indexOf(currentSlide.value);
  const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(slides[prevIndex]);
};

// Handle consultation click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // You can add a redirect or other action here
  console.log('Consultation requested from Gift & Loyalty page');
};

// Fetch lightboxes and check if we need to show one
const fetchLightboxes = async () => {
  try {
    const response = await axios.get('/api/lightboxes');
    if (response.data.success) {
      const lightboxes = response.data.data;
      
      // Find active lightbox for gift-loyalty page
      const giftLoyaltyLightbox = lightboxes.find(item => {
        const displayPages = Array.isArray(item.display_pages) 
          ? item.display_pages 
          : JSON.parse(item.display_pages || '[]');
        
        return displayPages.includes('gift-loyalty') && item.status === 'active';
      });
      
      if (giftLoyaltyLightbox) {
        currentLightboxId.value = giftLoyaltyLightbox.lightbox_id;
        
        // Check if we should show this lightbox (based on show_once setting)
        const lightboxShownKey = `lightbox_shown_${giftLoyaltyLightbox.lightbox_id}`;
        const hasBeenShown = localStorage.getItem(lightboxShownKey);
        
        if (!giftLoyaltyLightbox.show_once || !hasBeenShown) {
          // Show the lightbox
          setTimeout(() => {
            showLightbox.value = true;
            
            // If show_once is enabled, mark as shown
            if (giftLoyaltyLightbox.show_once) {
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

  // Initialize carousel - show the first slide
  showSlide('slide-1');
  
  // Fetch and check lightboxes
  fetchLightboxes();

  // Animate the fade-in sections
  setTimeout(() => {
    document.querySelector('.fade-in-section')?.classList.add('animate');
    
    // Animate text appear elements with delay
    document.querySelectorAll('.text-appear').forEach(el => {
      setTimeout(() => {
        el.classList.add('animate');
      }, parseInt(el.getAttribute('data-delay') || '0'));
    });
    
    // Animate slide-up elements
    document.querySelector('.slide-up')?.classList.add('animate');
  }, 300);

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

  // Add intersection observer for the new section
  const newSectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const section = entry.target;
        section.querySelector('.fade-in-section')?.classList.add('animate');
        
        section.querySelectorAll('.text-appear').forEach(el => {
          setTimeout(() => {
            el.classList.add('animate');
          }, parseInt(el.getAttribute('data-delay') || '0'));
        });
        
        section.querySelector('.slide-up')?.classList.add('animate');
        newSectionObserver.unobserve(section);
      }
    });
  }, { threshold: 0.2 });

  // Observe the new section if it exists
  document.querySelectorAll('.py-24.bg-gradient-to-b').forEach(section => {
    newSectionObserver.observe(section);
  });
  
  // Set up Intersection Observer for scroll reveal left/right animations
  const scrollObserver = new IntersectionObserver((entries) => {
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
          }
          entry.target.classList.remove('opacity-0');
        }, parseInt(delay));
        
        // Unobserve the element to prevent re-animation
        scrollObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  
  // Observe elements with scroll-reveal-left and scroll-reveal-right classes
  document.querySelectorAll('.scroll-reveal-left, .scroll-reveal-right').forEach(element => {
    scrollObserver.observe(element);
  });
  
  // Handle YouTube iframe loading
  const youtubeIframe = document.querySelector('iframe');
  if (youtubeIframe) {
    // Set explicit onload handler
    youtubeIframe.onload = () => {
      const loader = document.querySelector('.youtube-loader');
      if (loader) {
        loader.style.opacity = '0';
      }
      youtubeLoaded.value = true;
    };
    
    // Force load event if iframe was already loaded
    if (youtubeIframe.complete) {
      const loader = document.querySelector('.youtube-loader');
      if (loader) {
        loader.style.opacity = '0';
      }
      youtubeLoaded.value = true;
    }
  }
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

/* Enhance body text readability */
p {
  line-height: 1.6;
  font-weight: 400;
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

/* Program card hover effects */
.program-card {
  transition: all 0.3s ease;
}

.program-card:hover {
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

/* New animations for Attract New Customers section */
.fade-in-section {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in-section.animate {
  opacity: 1;
  transform: translateY(0);
}

.text-appear {
  transform: translateY(15px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.text-appear.animate {
  opacity: 1 !important;
  transform: translateY(0);
}

.slide-up {
  transform: translateY(40px);
  transition: opacity 1s ease, transform 1s ease;
}

.slide-up.animate {
  opacity: 1 !important;
  transform: translateY(0);
}

/* Floating animation for decorative elements */
.floating {
  animation: floating 3s ease-in-out infinite;
}

.floating-slow {
  animation: floating 5s ease-in-out infinite;
}

@keyframes floating {
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

/* Gift card animations */
.gift-card {
  transition: transform 0.5s ease;
}

.gift-card:hover {
  transform: translateY(-10px) rotate(0deg) !important;
  z-index: 10 !important;
}

/* Carousel styles */
.carousel-container {
  position: relative;
  overflow: hidden;
}

.carousel-slide {
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.carousel-slide.hidden {
  display: none;
}

/* Button hover effects */
button.bg-white {
  transition: all 0.3s ease;
}

button.bg-white:hover {
  transform: scale(1.1);
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

/* Dot navigation active state */
button.bg-red-600 {
  transform: scale(1.3);
}

/* Scroll reveal animations for left/right */
.scroll-reveal-left, .scroll-reveal-right {
  opacity: 0;
  transition: all 0.8s cubic-bezier(0.17, 0.67, 0.45, 0.97);
}

.scroll-reveal-left {
  transform: translateX(-50px);
}

.scroll-reveal-right {
  transform: translateX(50px);
}

.animate-reveal-left, .animate-reveal-right {
  opacity: 1 !important;
  transform: translateX(0);
}

/* Slow bounce animation for badges */
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

/* YouTube loader fade */
.youtube-loader {
  transition: opacity 0.5s ease;
  z-index: 15;
  background-color: rgba(243, 244, 246, 0.8);
}

/* Add these styles for YouTube iframe visibility */
iframe {
  opacity: 1 !important;
  z-index: 10;
}

.rounded-xl.overflow-hidden iframe {
  z-index: 10;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
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
</style>
