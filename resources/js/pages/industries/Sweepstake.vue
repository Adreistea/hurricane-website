<template>
    <MainLayout>
      <!-- Hero Section with same animations as home.vue -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
              Sweep Slots and Sweepstakes Merchant Account
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-300">
              A high-risk merchant account is essential for sweepstakes businesses. At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of the sweepstakes industry, ensuring you can process payments securely and efficiently. If you need a sweepstakes merchant account, trust Hurricane Payments! We have decades of experience working with sweepstakes businesses and other high-risk merchants.
            </p>
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
            <img :src="sweepstakeImg" alt="Sweepstakes Industry Payment Processing" class="w-full h-[800px] object-cover" />
          </div>
          
          <!-- Animated decorative elements -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        </div>
      </div>
  
     
  
      <!-- Sweepstakes Merchant Accounts Section -->
      <div class="container mx-auto px-6 py-20 mt-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
            Simple Process
          </span>
          <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
            Get Started with Sweepstakes Payment Processing
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto scroll-reveal opacity-0" style="animation-delay: 0.6s;">
            If you own a sweepstakes business, Hurricane Payments has a straightforward process for getting set up for payment processing. Follow these simple steps to set up your sweepstakes merchant account:
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Complete an online application</h3>
            <p class="text-gray-700">
              Start your journey with a simple online application process for your sweepstakes business
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Submit necessary documentation</h3>
            <p class="text-gray-700">
              Provide the required documents to support your sweepstakes merchant account application
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Benefit from our underwriting team's assistance</h3>
            <p class="text-gray-700">
              Our expert team will guide you through the underwriting process for sweepstakes businesses
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
            <h3 class="text-xl font-bold mb-3 text-gray-800">Start processing payments and growing your revenue</h3>
            <p class="text-gray-700">
              Begin accepting payments for your sweepstakes services and watch your business thrive
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
                <img :src="sweepstake2Img" alt="Sweepstakes Industry Solutions" class="relative rounded-lg shadow-2xl w-full" />
              </div>
            </div>
            <div class="lg:w-1/2">
              <h2 class="text-4xl font-bold mb-6 text-white">
                Why is a Sweepstakes Business Considered High-Risk?
              </h2>
              <p class="text-lg text-gray-300 mb-8">
                Sweepstakes businesses face unique challenges in the payment processing world. As a high-risk industry, many traditional banks and payment processors such as Stripe are hesitant to work with sweepstakes merchants. This high-risk designation often stems from factors like higher chargeback rates, regulatory complexities, and the association with gaming activities.
              </p>
              <p class="text-lg text-gray-300 mb-8">
                Being labeled as a high-risk merchant necessitates partnering with a payment processor experienced in high-risk accounts. Avoid disruptions by choosing Hurricane Payments, a leader in high-risk merchant account solutions for the sweepstakes industry.
              </p>
              <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
                <h3 class="text-2xl font-bold mb-4 text-white">Choose a Sweepstakes Merchant Account Provider</h3>
                <p class="text-gray-300">
                  Sweepstakes merchant account providers and payment processing companies work specifically with businesses in the sweepstakes industry. They understand the risks these businesses face and have the expertise to navigate credit card processing in this industry. Securing the right sweepstakes payment processor is crucial for businesses to avoid account closures and fund holds. Learn how Hurricane Payments can provide the stable, high-risk processing account your business needs for uninterrupted sales and growth.
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
              <span class="block mt-2 text-custom-red">Sweepstakes Payment Processing?</span>
            </h2>
              
              <p class="text-lg text-gray-700 mb-6">
                Sweepstakes businesses face unique challenges in the payment processing world. As a high-risk industry, many traditional banks and payment processors are hesitant to work with sweepstakes merchants. Choose a payment processor who understands the sweepstakes industry to prevent account closures and fund holds.
              </p>
              
              <div class="bg-gradient-to-r from-red-50 to-red-100 p-6 rounded-lg mb-8 transform hover:scale-[1.02] transition duration-300">
                <p class="text-gray-800 font-medium italic">
                  "Hurricane payments works with over 20 financial partners, so we can get you approved and ready to accept credit card payments quickly for your sweepstakes business."
                </p>
              </div>
              
              <div class="bg-white p-6 rounded-lg border border-red-100 mb-8">
                <h3 class="text-xl font-bold mb-3" style="color: #973131;">Tailored Solutions for the Sweepstakes Industry</h3>
                <p class="text-gray-700">
                  At Hurricane Payments, we specialize in providing merchant accounts tailored to the specific needs of sweepstakes businesses, ensuring you can process payments securely and efficiently. If you need a sweepstakes merchant account, trust Hurricane Payments to provide the perfect solution for your sweepstakes business needs.
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
                    <p class="text-gray-700">Benefit from our specialized knowledge in sweepstakes payment processing</p>
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
                    <p class="text-gray-700">Get fair pricing designed specifically for sweepstakes merchants</p>
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
                    <p class="text-gray-700">Start processing payments for your sweepstakes platform in days, not weeks</p>
                  </div>
                </div>
                
                <div class="flex items-center p-4 bg-white rounded-lg shadow-sm fade-in-slide-up" style="animation-delay: 400ms;">
                  <div class="flex-shrink-0 mr-4">
                    <div class="bg-green-100 p-2 rounded-full w-12 h-12 flex items-center justify-center">
                      <span class="text-green-500 font-bold text-xl">4</span>
                    </div>
                  </div>
                  <div>
                    <h3 class="font-semibold">Multiple Payment Options</h3>
                    <p class="text-gray-700">Support for credit cards, digital wallets, and alternative payment methods</p>
                  </div>
                </div>
              </div>
              
              <div class="mt-8 transform hover:scale-105 transition duration-300">
                <router-link 
                  to="/request-consultation" 
                  class="fancy-button text-white font-medium py-4 px-10 rounded-md shadow-lg inline-block" 
                  style="background-color: #973131; transition: all 0.3s ease;">
                  Get Your Account Today!
                </router-link>
              </div>
            </div>
          </div>
          
          <!-- Right Content - Image with Animation -->
          <div class="lg:w-1/2 scroll-reveal-right opacity-0 relative">
            <!-- Image frame with shadow and border effect -->
            <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white transform transition hover:-rotate-1 hover:scale-[1.01] duration-500">
              <img :src="sweepstake3Img" alt="Sweepstakes Merchant Account Services" class="w-full h-auto" />
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
            <span class="inline-block bg-red-50 text-custom-red px-4 py-2 rounded-full font-medium text-sm uppercase tracking-wide mb-4">Solutions That Work</span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-8" style="color: #973131;">
              Common Challenges & Our Solutions
            </h2>
            <div class="w-24 h-1 bg-custom-red mx-auto rounded-full mb-8"></div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Common Problems Column -->
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
                  <span class="text-gray-700">High chargeback rates affecting merchant stability</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Limited access to traditional payment processors</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Complex regulatory compliance requirements</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Account stability and fund hold concerns</span>
                </li>
                <li class="flex items-start">
                  <span class="text-custom-red mr-2">•</span>
                  <span class="text-gray-700">Managing virtual currency systems securely</span>
                </li>
              </ul>
            </div>

            <!-- General Solutions Column -->
            <div id="industry-solutions" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="flex items-center mb-6">
                <div class="p-3 bg-blue-50 rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-500">Industry Solutions</h3>
              </div>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Implement robust fraud prevention systems</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Partner with specialized high-risk processors</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Maintain clear terms and conditions</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Follow sweepstakes-specific regulations</span>
                </li>
                <li class="flex items-start">
                  <span class="text-blue-500 mr-2">•</span>
                  <span class="text-gray-700">Establish secure virtual currency systems</span>
                </li>
              </ul>
            </div>

            <!-- Hurricane Payments Solutions Column -->
            <div id="hurricane-solutions" class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
              <div class="flex items-center mb-6">
                <div class="p-3 bg-green-50 rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-bold text-green-500">Hurricane Payments Solutions</h3>
              </div>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">20+ proven bank relationships for stable processing</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Chargeback prevention & fraud protection</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Fast approval process with competitive rates</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Dedicated account managers for ongoing support</span>
                </li>
                <li class="flex items-start">
                  <span class="text-green-500 mr-2">•</span>
                  <span class="text-gray-700">Multiple payment options for your customers</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Sweepstakes Casino Section -->
      <div id="sweepstakes-casino" class="py-20 bg-gradient-to-r from-gray-100 to-blue-50">
        <div class="max-w-7xl mx-auto px-6">
          <div class="text-center mb-16">
            <span class="inline-block bg-red-50 text-custom-red px-4 py-2 rounded-full font-medium text-sm uppercase tracking-wide mb-4">Understanding Sweepstakes</span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" style="color: #973131;">
              What is a Sweepstakes Casino?
            </h2>
            <div class="w-24 h-1 bg-custom-red mx-auto rounded-full mb-8"></div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-16">
            <!-- Left side: Content -->
            <div>
              <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  A sweepstakes casino is an online gaming platform that operates using a sweepstakes model instead of traditional real-money gambling. Players do not directly wager real money; instead, they receive virtual currencies—typically "Gold Coins" for casual play and "Sweeps Coins" that can be redeemed for real prizes.
                </p>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  These coins are often acquired through free daily bonuses, social media promotions, or by purchasing Gold Coins, which may come with free Sweeps Coins as a bonus. Since sweepstakes casinos do not require direct cash gambling, they can legally operate in many regions where traditional online casinos are restricted.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                  This model allows players to enjoy casino-style games, such as slots and poker, while having the opportunity to win real rewards.
                </p>
              </div>

              <!-- Quote Block -->
              <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl p-8 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-500/10 rounded-full -mt-8 -mr-8 z-0"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-red-500/10 rounded-full -mb-10 -ml-10 z-0"></div>
                
                <!-- Quote marks -->
                <div class="text-6xl font-serif text-red-500/20 absolute top-4 left-4">"</div>
                
                <div class="relative z-10 pl-6">
                  <p class="text-xl italic text-white/90 mb-4">
                    Sweepstakes casinos offer a legal alternative to traditional gambling, allowing players to enjoy casino-style games while having the opportunity to win real rewards without direct cash betting.
                  </p>
                  <div class="flex items-center">
                    <div class="w-10 h-1 bg-red-500/50 mr-3"></div>
                    <p class="text-white/70">Kyle Hall, CEO of Hurricane Payments</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side: Image -->
            <div class="relative">
              <div class="relative z-10 rounded-xl overflow-hidden shadow-2xl">
                <img :src="sweepstake4Img" alt="Sweepstakes Casino Platform" class="w-full h-auto" />
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 w-full p-8">
                  <h3 class="text-2xl font-bold text-white mb-2">Sweepstakes Casino Model</h3>
                  <p class="text-white/90">Virtual currency system that enables legal gameplay</p>
                </div>
              </div>
              
              <!-- Feature Cards that overlap with the image -->
              <div class="absolute top-10 -right-8 bg-white rounded-lg shadow-xl p-5 z-20 max-w-[250px] transform rotate-3">
                <h4 class="font-bold mb-2 text-gray-800 text-lg">Gold Coins</h4>
                <p class="text-gray-600 text-sm">Used for entertainment only, with no cash value</p>
              </div>
              
              <div class="absolute bottom-20 -left-8 bg-white rounded-lg shadow-xl p-5 z-20 max-w-[250px] transform -rotate-2">
                <h4 class="font-bold mb-2 text-gray-800 text-lg">Sweeps Coins</h4>
                <p class="text-gray-600 text-sm">Can be redeemed for real prizes or cash</p>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-16">
            <!-- Left Column -->
            <div>
              <h3 class="text-3xl font-bold mb-6" style="color: #973131;">What are Sweep Slots?</h3>
              <div class="bg-white rounded-xl shadow-xl p-8">
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  Sweep slots are slot-style games available at internet sweepstakes casinos. These games function similarly to real-money slots, offering spinning reels, extra features, and jackpots.
                </p>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  Players can use Gold Coins for entertainment or Sweeps Coins for a chance to win real cash or prizes in online sweepstakes. Sweep slots are popular among players looking for a casino experience without the legal complexities of traditional online gambling.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                  These slot machine games are primarily found online, but some have a mobile app for iOS or Android where customers can play progressive jackpot slots, instant win games, Bingo, lottery games or other casino games such as Blackjack and roulette.
                </p>
              </div>
            </div>
            
            <!-- Right Column -->
            <div>
              <h3 class="text-3xl font-bold mb-6" style="color: #973131;">What are Sweepstakes Software Solutions?</h3>
              <div class="bg-white rounded-xl shadow-xl p-8">
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  Sweepstakes solutions are specialized software and services designed to help businesses create, manage, and optimize sweepstakes promotions. These solutions streamline the process by providing features such as automated entry tracking, winner selection, compliance with legal regulations, improved customer usability, and fraud prevention technology.
                </p>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  These services are essential for any online casino, betting sites, or responsible gambling organization. Businesses use sweepstakes solutions to boost customer engagement, increase brand awareness, and generate leads through interactive and incentivized advertising campaigns.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                  Many platforms also offer customizable templates, social media integration for social media marketing, and real-time analytics to ensure successful and transparent promotions. By leveraging sweepstakes solutions, companies can efficiently run engaging contests while minimizing administrative burdens and legal risks.
                </p>
              </div>
            </div>
          </div>

          <!-- Hurricane's Role Section -->
          <div class="bg-white rounded-xl shadow-xl p-8 mb-16">
            <h3 class="text-3xl font-bold mb-6 text-center" style="color: #973131;">Hurricane Payments' Role in Sweepstakes Solutions</h3>
            <div class="flex flex-col md:flex-row items-center gap-12">
              <div class="md:w-1/2">
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  While Hurricane Payments does not provide entry tracking or advertising services, the sweepstakes solution that we provide is our top-notch merchant services. As part of our merchant services we help set up a payment system with multiple payment options since we know its important for customers to have payment options.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                  Our payment processing services encompass a number of payment methods such as credit cards, debit cards, Apple Pay, Google Pay, ACH (automated clearing house) payments, virtual currency (cryptocurrency), and more.
                </p>
              </div>
              <div class="md:w-1/2">
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                  Whether your customers want to pay with their Mastercard, Discover card, or another payment card through their digital wallet on their desktop or through Google Pay on the mobile browser of their android phone we offer secure payment processing solutions.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                  We also provide payment gateways, both point of sale options and web browser payment software where customers can pay with digital currency.
                </p>
              </div>
            </div>
          </div>

          <!-- Feature Grid -->
          <div class="bg-white rounded-xl shadow-xl p-8">
            <h3 class="text-3xl font-bold mb-8 text-center" style="color: #973131;">Key Benefits of Hurricane Payments Sweepstakes Merchant Accounts</h3>
            <p class="text-center text-lg text-gray-700 mb-10">Our specialized payment processing solutions offer several advantages for sweepstakes businesses</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Enhanced Security -->
              <div class="bg-gray-50 rounded-xl p-6 text-center">
                <div class="bg-red-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-custom-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <h4 class="text-xl font-bold mb-3">Enhanced Security</h4>
                <p class="text-gray-700">Advanced fraud prevention and detection systems to protect your business and customers.</p>
              </div>
              
              <!-- Multiple Payment Options -->
              <div class="bg-gray-50 rounded-xl p-6 text-center">
                <div class="bg-blue-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                  </svg>
                </div>
                <h4 class="text-xl font-bold mb-3">Multiple Payment Options</h4>
                <p class="text-gray-700">Support for credit cards, debit cards, digital wallets, ACH, and cryptocurrency payments.</p>
              </div>
              
              <!-- Regulatory Compliance -->
              <div class="bg-gray-50 rounded-xl p-6 text-center">
                <div class="bg-green-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                  </svg>
                </div>
                <h4 class="text-xl font-bold mb-3">Regulatory Compliance</h4>
                <p class="text-gray-700">PCI-compliant payment processing to ensure you meet all necessary industry standards.</p>
              </div>
              
              <!-- Fast Approvals -->
              <div class="bg-gray-50 rounded-xl p-6 text-center">
                <div class="bg-purple-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <h4 class="text-xl font-bold mb-3">Fast Approvals</h4>
                <p class="text-gray-700">Streamlined underwriting process designed specifically for high-risk sweepstakes businesses.</p>
              </div>
              
              <!-- Real-time Reporting -->
              <div class="bg-gray-50 rounded-xl p-6 text-center">
                <div class="bg-yellow-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                </div>
                <h4 class="text-xl font-bold mb-3">Real-time Reporting</h4>
                <p class="text-gray-700">Access comprehensive transaction data and analytics to optimize your business.</p>
              </div>
              
              <!-- Chargeback Protection -->
              <div class="bg-gray-50 rounded-xl p-6 text-center">
                <div class="bg-red-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </div>
                <h4 class="text-xl font-bold mb-3">Chargeback Protection</h4>
                <p class="text-gray-700">Robust tools and strategies to minimize chargebacks and protect your revenue.</p>
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
                <h3 class="text-xl font-bold mb-4 text-center">Sweepstakes Merchant Accounts</h3>
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
                    <span class="text-gray-700">Fast Sweepstakes Account Approval</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">Large Merchant Case Studies</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">E-Commerce and Retail Sweepstakes</span>
                  </li>
                  <li class="flex items-start">
                    <span class="text-custom-red mr-2">•</span>
                    <span class="text-gray-700">B2B Sweepstakes Vendors Supported</span>
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
                    <span class="text-gray-700">B2B-Level II/III Data Discounts</span>
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

      <!-- Sweepstakes Payment Gateway Section -->
      <div id="payment-gateway" class="bg-gradient-to-r from-gray-50 to-red-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-center mb-10" style="color: #973131;">Sweepstakes Payment Gateway Solution</h2>
          
          <div class="bg-white p-10 rounded-xl shadow-lg mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 h-32 w-32 bg-red-50 rounded-full -mt-10 -mr-10"></div>
            
            <div class="flex flex-col md:flex-row items-start gap-12">
              <div class="md:w-1/2 relative z-10 self-center">
                <p class="text-lg text-gray-700 leading-relaxed">
                  Hurricane Payments offers advanced payment gateways designed to help businesses securely process online transactions. Our payment gateway solutions provide seamless integration with e-commerce platforms, allowing merchants to accept credit cards, debit cards, and alternative payment methods, including digital wallets such as Apple Pay and Google Pay. We offer a seamless experience for merchant and consumers alike.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mt-4">
                  Hurricane Payments uses AVS (address verification service), encryption, and other methods for fraud prevention, and chargeback protection to help your business's money arrive safely at your bank account. We are designed to handle all aspects of secure payment processing including communication with an acquiring bank and other transactions connected to online banking.
                </p>
              </div>
              <div class="md:w-1/2">
                <div class="rounded-lg overflow-hidden shadow-lg">
                  <img :src="sweepstake3Img" alt="Sweepstakes Payment Gateway" class="w-full h-auto transform transition hover:scale-105 duration-500">
                </div>
              </div>
            </div>
            
            <div class="flex items-center justify-center my-8">
              <div class="w-24 h-1 bg-red-200 rounded-full"></div>
            </div>
            
            <h3 class="text-2xl font-bold mb-8 text-center" style="color: #973131;">Seamless Payment Processing for Sweepstakes Businesses</h3>
            
            <p class="text-lg text-gray-700 leading-relaxed max-w-5xl mx-auto">
              Another selling point of Hurricane Payments is PCI compliance. While PCI compliance isn't required by law, non-compliance can result in fines and legal action. No company wants to have to waste time and money on a lawyer due to a data breach. As one of the best credit card processors and payment processing companies let Hurricane Payments help limit your financial liability. With a focus on flexibility and scalability, Hurricane Payments' payment gateways support recurring billing, multi-currency processing, and customized payment solutions tailored to various business needs.
            </p>
            
            <div class="mt-10 flex justify-center">
              <router-link 
                to="/request-consultation" 
                class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
                style="background-color: #973131; transition: all 0.3s ease;">
                Get Started
              </router-link>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <CtaSection subheading="Apply for your sweepstakes merchant account today and experience hassle-free payment processing." />
    </MainLayout>
  </template>
  
  <script setup>
import { ref, onMounted } from 'vue';
import MainLayout from '../MainLayout.vue';
import CtaSection from '../../components/CtaSection.vue';

// Import images 
import sweepstakeImg from '@/../images/sweepstake.jpg';
import sweepstake2Img from '@/../images/sweepstake(2).jpg';
import sweepstake3Img from '@/../images/sweepstake(3).jpg';
import sweepstake4Img from '@/../images/sweepstake(4).jpg';
  
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