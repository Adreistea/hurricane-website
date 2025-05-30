<template>
    <MainLayout>
      <!-- Hero Section with same animations as home.vue -->
      <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Reveal Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
          <div class="text-reveal mb-2">
            <span class="text-reveal-content text-purple-600 font-semibold delay-100">Point of Sale Systems</span>
          </div>
          
          <div class="text-reveal mb-6">
            <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
                style="color: #973131;">
              Run Your Business Smarter with KwickPOS
            </h1>
          </div>
          
          <div class="text-reveal mb-8">
            <h3 class="text-reveal-content text-2xl text-gray-700 font-semibold delay-300">
              The Complete POS System That Saves You Money and Grows Your Revenue
            </h3>
          </div>
          
          <div class="text-reveal mb-8">
            <p class="text-reveal-content text-lg text-gray-600 delay-400">
              KwickPOS is a cutting-edge point-of-sale solution designed to streamline your business operations. Whether you run a restaurant, retail store, or service business, our comprehensive POS system provides the tools you need to manage inventory, track sales, and boost customer satisfaction.
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
        
        <!-- Right Content - POS Image with Card Reveal Animation -->
        <div class="lg:w-1/2 relative card-reveal delay-200">
          <div class="rounded-lg shadow-2xl overflow-hidden">
            <img src="@/../images/homepic3.png" alt="KwickPOS System" class="w-full h-auto" />
          </div>
          
          <!-- Animated decorative elements -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-pink-100 to-purple-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-r from-purple-100 to-pink-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        </div>
      </div>
  
      <!-- Simplified Features Section -->
      <div class="container mx-auto px-6 py-20 mt-8 opacity-0 animate-on-scroll" id="features-section" data-animation="fade-up">
        <div class="text-center mb-12">
          <h2 class="text-4xl lg:text-5xl font-bold mb-6" style="color: #973131;">
            Built for Business Owners Who Are Tired of Paying to Get Paid
          </h2>
          <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-10">
            If you're a restaurant, café, or bar owner, you know how frustrating traditional point-of-sale systems can be:
          </p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            <div class="bg-white rounded-lg p-6 shadow-lg transform opacity-0 animate-on-scroll" data-animation="slide-up" data-delay="100">
              <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-6 pulse-slow">
                <svg class="w-8 h-8" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <h3 class="text-xl font-bold mb-3 text-gray-800">Confusing Interfaces</h3>
              <p class="text-gray-600">Systems that slow your staff down and create unnecessary training headaches</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-lg transform opacity-0 animate-on-scroll" data-animation="slide-up" data-delay="200">
              <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-6 pulse-slow">
                <svg class="w-8 h-8" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <h3 class="text-xl font-bold mb-3 text-gray-800">Monthly Fees</h3>
              <p class="text-gray-600">Software subscriptions and costly hardware upgrades that drain your profits</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-lg transform opacity-0 animate-on-scroll" data-animation="slide-up" data-delay="300">
              <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-6 pulse-slow">
                <svg class="w-8 h-8" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
              </div>
              <h3 class="text-xl font-bold mb-3 text-gray-800">Lost Revenue</h3>
              <p class="text-gray-600"><span class="font-semibold">2–4% of every sale</span> disappears to processing fees</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-lg transform opacity-0 animate-on-scroll" data-animation="slide-up" data-delay="400">
              <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-6 pulse-slow">
                <svg class="w-8 h-8" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L8 10.586m4-4V4m0 4h-4"></path></svg>
              </div>
              <h3 class="text-xl font-bold mb-3 text-gray-800">Limited Support</h3>
              <p class="text-gray-600">Left without help when you actually need it most</p>
            </div>
          </div>
          
          <div class="bg-white rounded-xl p-8 mt-12 shadow-lg opacity-0 animate-on-scroll" data-animation="zoom-in" data-delay="500">
            <div class="flex justify-center mb-6">
              <img src="@/../images/Long-KP-Logo.png" alt="KwickPOS Logo" class="max-w-full h-auto w-64" />
            </div>
            <h3 class="text-3xl font-bold mb-3" style="color: #973131;">KwickPOS solves all of that.</h3>
            <p class="text-xl text-gray-700">A revolutionary approach to point-of-sale that puts money back in your pocket.</p>
          </div>
        </div>
      </div>
      
      <!-- Business Partner Section -->
      <div class="container mx-auto px-6 py-16 my-8 opacity-0 animate-on-scroll" id="business-partner-section" data-animation="fade-up">
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <!-- Left Content - Image with Animation -->
          <div class="lg:w-1/2 relative scroll-reveal-left">
            <div class="rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105">
              <img src="@/../images/2nddisplay.jpg" alt="KwickPOS Display" class="w-full h-auto rounded-2xl" />
            </div>
            
            <!-- Decorative elements for visual appeal -->
            <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-pink-100 rounded-3xl transform rotate-2 translate-x-4 translate-y-4"></div>
            <div class="absolute -z-20 inset-0 bg-gradient-to-r from-pink-100 to-red-50 rounded-3xl transform -rotate-1 translate-x-8 translate-y-8"></div>
            
            <!-- Floating badge -->
            <div class="absolute top-4 left-4 bg-white py-2 px-4 rounded-full shadow-lg text-sm font-bold text-red-700 animate-bounce-slow">
              Your Trusted Partner
            </div>
          </div>
          
          <!-- Right Content - Text with Animation -->
          <div class="lg:w-1/2 scroll-reveal-right">
            <h2 class="text-4xl font-bold mb-6" style="color: #973131;">What Makes KwickPOS Different?</h2>
            
            <p class="text-lg text-gray-700 mb-6 italic">
              <i>KwickPOS is more than a POS system — it's your business partner.</i>
            </p>
            <p class="text-lg text-gray-700 mb-6">
              We eliminate the junk fees, streamline your operations, and give you full control with intuitive tools designed specifically for food & beverage businesses.
            </p>
          </div>
        </div>
      </div>

      <!-- After the Business Partner Section -->
      <!-- Core Features Section -->
      <div class="container mx-auto px-6 py-16 my-8 opacity-0 animate-on-scroll" id="core-features-section" data-animation="fade-up">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-6" style="color: #973131;">
            Core Features That Power Profit
          </h2>
        </div>

        <!-- Feature Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Dual Pricing Card -->
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
            <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
              <img src="@/../images/dualpricing.png" alt="Dual Pricing" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">💳</div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Dual Pricing & Fee Elimination</h3>
            <p class="text-gray-600">Stop losing revenue to card processing fees. Offer your customers a choice between cash and card pricing. It's transparent, compliant, and immediately profitable.</p>
          </div>
          
          <!-- Cloud-Based Card -->
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
            <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
              <img src="@/../images/cloudbased.png" alt="Cloud-Based POS" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">📱</div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Cloud-Based, Tablet-Optimized System</h3>
            <p class="text-gray-600">Access your POS from anywhere — in the kitchen, on the patio, or from home. All data syncs in real time across devices.</p>
          </div>
          
          <!-- Online Ordering Card -->
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
            <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
              <img src="@/../images/onlineorder.png" alt="Online Ordering" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">🛒</div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Online Ordering & Delivery Integration</h3>
            <p class="text-gray-600">Launch online ordering directly through your POS. No need to rely on 3rd-party platforms that eat 30% of your margins.</p>
          </div>
          
          <!-- Loyalty Card -->
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
            <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
              <img src="@/../images/gift.png" alt="Loyalty Program" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">🎁</div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Built-In Loyalty & Rewards</h3>
            <p class="text-gray-600">Keep customers coming back with automatic rewards, points tracking, and special offers that build loyalty and increase ticket size.</p>
          </div>
          
          <!-- Analytics Card -->
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
            <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
              <img src="@/../images/analytics.png" alt="Analytics Dashboard" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">🧾</div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Smart Reporting & Real-Time Analytics</h3>
            <p class="text-gray-600">Know what sells, when, and to whom. Get real-time profit tracking, sales heatmaps, employee performance, and custom exports.</p>
          </div>
          
          <!-- Restaurant Management Card -->
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
            <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
              <img src="@/../images/management.png" alt="Restaurant Management" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">🍽</div>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Table, Kitchen, and Bar Management</h3>
            <p class="text-gray-600">Send orders to the right screen, track dining status, and keep your staff operating like a well-oiled machine.</p>
          </div>
          
          <!-- Support Card - Centered and Square -->
          <div class="col-span-3 flex justify-center mt-12">
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal max-w-md mx-auto">
              <div class="relative h-48 mb-6 rounded-lg overflow-hidden">
                <img src="@/../images/Adtool.jpg" alt="24/7 Support" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">🧠</div>
              </div>
              <h3 class="text-xl font-bold mb-3 text-gray-800 text-center">Training, Setup & Support – We Handle It</h3>
              <p class="text-gray-600 text-center">From install to launch, our team helps you every step of the way — with <span class="font-semibold">24/7 support</span> when you need it most.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Industry-Specific Solutions Section with both tables -->
      <div class="py-20 my-16 industry-solutions-section opacity-0 animate-on-scroll" data-animation="fade-up">
        <div class="container mx-auto px-6">
          <div class="flex flex-col lg:flex-row gap-8 justify-center">
            <!-- Left column - Industry Solutions Table -->
            <div class="lg:w-1/2">
              <!-- Industry header and text - Center-aligned -->
              <div class="mb-10 scroll-reveal text-center">
                <h2 class="text-4xl font-bold mb-6 text-white">
                  Industry-Specific Solutions
                </h2>
                <p class="text-xl text-white/90 mb-8 mx-auto">
                  We understand that no two businesses are the same. That's why KwickPOS is customized to your needs:
                </p>
              </div>
              
              <!-- Industry Solutions Table -->
              <div class="relative overflow-hidden rounded-2xl bg-white/10 backdrop-blur-lg p-8 shadow-2xl scroll-reveal">
                <!-- Decorative elements -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-purple-500/20 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-pink-500/20 rounded-full blur-2xl"></div>
                
                <!-- Table -->
                <div class="overflow-x-auto relative z-10">
                  <table class="w-full text-left">
                    <thead>
                      <tr class="border-b-2 border-white/20">
                        <th class="p-4 text-xl font-bold text-white">Business Type</th>
                        <th class="p-4 text-xl font-bold text-white">Key Features</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-4 text-white font-medium italic">Quick Service Restaurants</td>
                        <td class="p-4 text-white/90">Fast order entry, combo building, kitchen screen integration</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-4 text-white font-medium italic">Full-Service Restaurants</td>
                        <td class="p-4 text-white/90">Table management, server splits, gratuity tools</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-4 text-white font-medium italic">Bars & Breweries</td>
                        <td class="p-4 text-white/90">Open tabs, age verification, tip automation</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-4 text-white font-medium italic">Cafés & Coffee Shops</td>
                        <td class="p-4 text-white/90">Barcode scanners, customer loyalty, quick checkout</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-4 text-white font-medium italic">Food Trucks</td>
                        <td class="p-4 text-white/90">Mobile setup, offline mode, GPS-based tax configuration</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-4 text-white font-medium italic">Franchise Chains</td>
                        <td class="p-4 text-white/90">Centralized reporting, multi-location inventory & sales control</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <!-- Right column - Cost Savings Section -->
            <div class="lg:w-1/2">
              <!-- Cost Savings Section - Match styling exactly to Industry Solutions -->
              <div class="text-center mb-17 scroll-reveal">
                <h2 class="text-4xl font-bold mb-6 text-white">
                  Real Cost Savings
                </h2>
                <p class="text-xl text-white/90 mb-10 mx-auto">
                  How KwickPOS pays for itself:
                </p>
              </div>
              
              <!-- Cost Comparison Table - Match dimensions and styling but lowered -->
              <div class="relative overflow-hidden rounded-2xl bg-white/10 backdrop-blur-lg p-8 pb-24 shadow-2xl scroll-reveal mt-4" style="min-height: 434px;">
                <!-- Decorative elements -->
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-yellow-500/20 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-blue-500/20 rounded-full blur-2xl"></div>
                
                <!-- Table with more spacing -->
                <div class="overflow-x-auto relative z-10">
                  <table class="w-full text-left h-full">
                    <thead>
                      <tr class="border-b-2 border-white/20">
                        <th class="p-4 text-xl font-bold text-white">Traditional POS</th>
                        <th class="p-4 text-xl font-bold text-white">KwickPOS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-6 text-white font-medium">Monthly Fees: $100–$300</td>
                        <td class="p-6 text-white/90">$0 software fees</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-6 text-white font-medium">Processing Fees: 2–4%</td>
                        <td class="p-6 text-white/90">$0 with dual pricing</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-6 text-white font-medium">Hidden Fees & Contracts</td>
                        <td class="p-6 text-white/90">No long-term contracts</td>
                      </tr>
                      <tr class="business-row hover:bg-white/5 transition-all duration-300 cursor-pointer">
                        <td class="p-6 text-white font-medium">Limited Support</td>
                        <td class="p-6 text-white/90">24/7 human support</td>
                      </tr>
                      <tr class="h-2"></tr>
                      <tr class="h-7"></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Bottom Callout - Moved to a separate container with more margin -->
          <div class="mt-16 text-center scroll-reveal">
            <div class="inline-block bg-white/10 py-3 px-8 rounded-full backdrop-blur-sm">
              <p class="text-lg font-semibold text-white">See why businesses switch to KwickPOS and save thousands per year</p>
            </div>
          </div>
        </div>
      </div>

      <!-- What You Get with KwickPOS Section -->
      <div class="container mx-auto px-6 py-16 my-8 opacity-0 animate-on-scroll" data-animation="fade-up">
        <div class="text-center mb-12">
          <h2 class="text-5xl font-black mb-6" style="color: #973131; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
            What You Get with KwickPOS
          </h2>
          <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-10">
            A complete system designed for your business success
          </p>
        </div>
        
        <!-- Collage Layout with Images and Text -->
        <div class="flex flex-col lg:flex-row gap-8 mb-20">
          <!-- Left Images Column -->
          <div class="lg:w-1/4 space-y-6">
            <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 transform hover:scale-105">
              <img src="@/../images/magtekproductshot-03.jpg" alt="KwickPOS Terminal" class="w-full h-auto object-cover aspect-square" />
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 transform hover:scale-105">
              <img src="@/../images/product pic-06.png" alt="KwickPOS Equipment" class="w-full h-auto object-cover aspect-square" />
            </div>
          </div>
          
          <!-- Center Text Column -->
          <div class="lg:w-1/2 bg-white rounded-xl p-8 shadow-lg relative z-10">
            <!-- Content Grid -->
            <div class="space-y-8">
              <!-- Item 1 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-800">iPad or Android-compatible touchscreen terminals</h3>
                  <p class="text-gray-600">Use your existing devices or get our recommended hardware setup</p>
                </div>
              </div>
              
              <!-- Item 2 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Cash drawer, receipt printer, kitchen display system</h3>
                  <p class="text-gray-600">Complete hardware integration for seamless operations</p>
                </div>
              </div>
              
              <!-- Item 3 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Customized menu setup and initial programming</h3>
                  <p class="text-gray-600">Tailored to your specific business needs and workflow</p>
                </div>
              </div>
              
              <!-- Item 4 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Loyalty program pre-installed</h3>
                  <p class="text-gray-600">Start building customer relationships and repeat business from day one</p>
                </div>
              </div>
              
              <!-- Item 5 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Secure cloud backup and remote access</h3>
                  <p class="text-gray-600">Manage your business from anywhere with real-time data access</p>
                </div>
              </div>
              
              <!-- Item 6 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6" style="color: #973131;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Live U.S.-based onboarding and support</h3>
                  <p class="text-gray-600">Expert assistance whenever you need it, from setup to daily operations</p>
                </div>
              </div>
            </div>
            
            <!-- Decorative elements -->
            <div class="absolute -z-10 top-8 left-8 w-16 h-16 bg-red-100 rounded-full opacity-50"></div>
            <div class="absolute -z-10 bottom-8 right-8 w-24 h-24 bg-blue-100 rounded-full opacity-50"></div>
          </div>
          
          <!-- Right Images Column -->
          <div class="lg:w-1/4 space-y-6">
            <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 transform hover:scale-105">
              <img src="@/../images/close-up-baker-bakery-shop.jpg" alt="Bakery Shop" class="w-full h-auto object-cover aspect-square" />
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 transform hover:scale-105">
              <img src="@/../images/Online Ordering.png" alt="Online Ordering" class="w-full h-auto object-cover aspect-square" />
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonials Section -->
      <div class="bg-gray-50 py-16 my-8 opacity-0 animate-on-scroll" data-animation="fade-up">
        <div class="container mx-auto px-6">
          <div class="text-center mb-12">
            <h2 class="text-5xl font-extrabold mb-6" style="color: #973131; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
              Don't Just Take Our Word for It
            </h2>
          </div>
          
          <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 scroll-reveal relative">
              <!-- Decorative quote mark -->
              <div class="absolute top-4 left-6 text-6xl opacity-10" style="color: #973131;">❝</div>
              
              <blockquote class="text-xl italic text-gray-700 mb-8 relative z-10 pt-4">
                <p>"We switched from Toast and saved over $400/month. It does everything we need, and support is incredible."</p>
                <footer class="mt-4 text-base not-italic text-gray-600">
                  — John T., Café Owner, Oregon
                </footer>
              </blockquote>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 scroll-reveal relative">
              <!-- Decorative quote mark -->
              <div class="absolute top-4 left-6 text-6xl opacity-10" style="color: #973131;">❝</div>
              
              <blockquote class="text-xl italic text-gray-700 mb-8 relative z-10 pt-4">
                <p>"KwickPOS helped us streamline takeout, eliminate fees, and gave us better control of our sales data."</p>
                <footer class="mt-4 text-base not-italic text-gray-600">
                  — Maria S., Restaurant Manager, Texas
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ Section -->
      <div class="bg-gray-50 py-16 my-8 opacity-0 animate-on-scroll" data-animation="fade-up">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-5xl font-extrabold mb-6" style="color: #973131; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
              FAQ
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-10">
              Here are some of the most frequently asked questions
            </p>
          </div>
          
          <div class="max-w-5xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="mb-12 scroll-reveal">
              <div class="flex items-start mb-4">
                <div class="shrink-0 flex items-center justify-center w-14 h-14 rounded-full bg-red-100 mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor" style="color: #973131;">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="flex-1">
                  <h3 class="text-2xl font-bold mb-3 text-gray-800">Is dual pricing legal in my state?</h3>
                  <p class="text-gray-700">Yes. Dual pricing is legal in all 50 states when implemented correctly. We'll help you stay 100% compliant.</p>
                </div>
              </div>
              <div class="w-full h-px bg-gray-200 mt-8"></div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="mb-12 scroll-reveal">
              <div class="flex items-start mb-4">
                <div class="shrink-0 flex items-center justify-center w-14 h-14 rounded-full bg-red-100 mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor" style="color: #973131;">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="flex-1">
                  <h3 class="text-2xl font-bold mb-3 text-gray-800">Can I use my existing hardware?</h3>
                  <p class="text-gray-700">In most cases, yes. We'll review your current setup and help you save where possible.</p>
                </div>
              </div>
              <div class="w-full h-px bg-gray-200 mt-8"></div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="mb-12 scroll-reveal">
              <div class="flex items-start mb-4">
                <div class="shrink-0 flex items-center justify-center w-14 h-14 rounded-full bg-red-100 mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor" style="color: #973131;">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="flex-1">
                  <h3 class="text-2xl font-bold mb-3 text-gray-800">Is there a contract or cancellation fee?</h3>
                  <p class="text-gray-700">Nope. We don't lock you in. You stay because it works — not because you're forced to.</p>
                </div>
              </div>
              <div class="w-full h-px bg-gray-200 mt-8"></div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="mb-12 scroll-reveal">
              <div class="flex items-start mb-4">
                <div class="shrink-0 flex items-center justify-center w-14 h-14 rounded-full bg-red-100 mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor" style="color: #973131;">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="flex-1">
                  <h3 class="text-2xl font-bold mb-3 text-gray-800">What's the turnaround time for setup?</h3>
                  <p class="text-gray-700">We typically ship and set up your system within <span class="font-semibold">3–5 business days</span> after onboarding.</p>
                </div>
              </div>
            </div>
          </div>
          
         
        </div>
      </div>

      <!-- Attention-Grabbing CTA Section -->
      <CtaActionSection 
        heading="Ready to See KwickPOS in Action?"
        subheading="Stop letting your POS system hold you back.<br>Get a smarter solution that increases your profits from Day 1."
      />
    </MainLayout>
    <lightbox 
      v-if="showLightbox"
      :is-visible="showLightbox"
      :lightbox-id="activeLightboxId"
      @close="closeLightbox"
      @consultation-click="handleConsultationClick"
    />
</template>

<script setup>
import { onMounted } from 'vue';
import MainLayout from './MainLayout.vue';
import lightbox from './lightbox.vue';
import CtaActionSection from '../components/CtaActionSection.vue';

// Define scrollToNextSection outside onMounted so it's available to the template
function scrollToNextSection() {
  // Scroll to the features section
  const featuresSection = document.getElementById('features-section');
  if (featuresSection) {
    featuresSection.scrollIntoView({ behavior: 'smooth' });
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

  // Set up counter animations
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add the animation class to start counting
        entry.target.classList.add('animated');
        
        // Unobserve after animation has started
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  // Set up special animation for CTA section
  const ctaObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animated class to create particle effects
        entry.target.classList.add('animated');
        ctaObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  // Observe CTA section
  const ctaSection = document.querySelector('.cta-particles');
  if (ctaSection) {
    ctaObserver.observe(ctaSection);
  }

  // Force visibility of CTA section after a delay
  setTimeout(() => {
    const ctaHeading = document.querySelector('.cta-heading');
    if (ctaHeading) {
      ctaHeading.classList.add('animate-reveal');
      ctaHeading.classList.remove('opacity-0');
    }
    
    document.querySelectorAll('.scroll-reveal').forEach(el => {
      el.classList.add('animate-reveal');
      el.classList.remove('opacity-0');
    });
    
    // Make all elements with opacity-0 visible
    document.querySelectorAll('.opacity-0').forEach(el => {
      el.classList.remove('opacity-0');
    });
  }, 500);

  // Set up animation for sections when scrolled into view
  const animateOnScrollOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1 // Trigger when 10% of element is visible
  };
  
  const animateOnScrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const element = entry.target;
        const animation = element.getAttribute('data-animation') || 'fade-up';
        const delay = element.getAttribute('data-delay') || 0;
        
        setTimeout(() => {
          element.classList.remove('opacity-0');
          element.classList.add(`animate-${animation}`);
        }, parseInt(delay));
        
        animateOnScrollObserver.unobserve(element);
      }
    });
  }, animateOnScrollOptions);
  
  // Observe all elements with animate-on-scroll class
  document.querySelectorAll('.animate-on-scroll').forEach(element => {
    animateOnScrollObserver.observe(element);
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

/* Text reveal animations */
.text-reveal {
  overflow: hidden;
  position: relative;
}

.text-reveal-content {
  transform: translateY(100%);
  animation: reveal 0.8s forwards;
}

.delay-100 {
  animation-delay: 0.1s;
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

@keyframes reveal {
  to {
    transform: translateY(0);
  }
}

/* Card reveal animation */
.card-reveal {
  opacity: 0;
  transform: translateY(30px);
  animation: cardReveal 0.8s forwards;
}

@keyframes cardReveal {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Slide in animations */
.slide-in-left {
  opacity: 0;
  transform: translateX(-30px);
  animation: slideInLeft 0.8s forwards;
}

.slide-in-right {
  opacity: 0;
  transform: translateX(30px);
  animation: slideInRight 0.8s forwards;
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

/* Scroll reveal animations */
.animate-reveal {
  animation: reveal 0.8s forwards;
}

.animate-reveal-left {
  animation: slideInLeft 0.8s forwards;
}

.animate-reveal-right {
  animation: slideInRight 0.8s forwards;
}

/* Button hover scale effect */
.hover-scale:hover {
  transform: scale(1.05);
}

/* Slow pulse animation for feature icons */
.pulse-slow {
  animation: pulseSlow 3s infinite;
}

@keyframes pulseSlow {
  0% {
    transform: scale(1);
    opacity: 0.8;
  }
  50% {
    transform: scale(1.1);
    opacity: 1;
  }
  100% {
    transform: scale(1);
    opacity: 0.8;
  }
}

/* Bounce animation for badge */
.animate-bounce-slow {
  animation: bounceSlow 3s infinite;
}

@keyframes bounceSlow {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

/* Stats cards staggered animation */
.stats-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stats-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Glowing text effect */
.text-glow {
  background: linear-gradient(90deg, #333, #973131, #333);
  background-size: 200% auto;
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textShine 6s linear infinite;
}

@keyframes textShine {
  to {
    background-position: 200% center;
  }
}

/* Pulsing button effect */
.pulsing-button {
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

.pulsing-button:hover {
  box-shadow: 0 0 30px rgba(255, 112, 67, 0.6);
}

.pulsing-button:before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to right,
    transparent 0%,
    rgba(255, 255, 255, 0.2) 50%,
    transparent 100%
  );
  transition: all 0.6s;
}

.pulsing-button:hover:before {
  left: 100%;
}

/* Wrapper positioning for button + effects */
.cta-button-wrapper {
  position: relative;
  display: inline-block;
  margin: 0 auto;
}

/* Particle effects on hover */
.cta-particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
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

/* Custom color variables */
:root {
  --color-custom-red: #973131;
}

.text-custom-red {
  color: var(--color-custom-red);
}

.bg-custom-red {
  background-color: var(--color-custom-red);
}

/* Add these along with your existing styles */
.industry-solutions-section {
  background: linear-gradient(135deg, #973131 0%, #531a1a 100%);
  position: relative;
  overflow: hidden;
}

.industry-solutions-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  z-index: 0;
}

.business-row {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.business-row:last-child {
  border-bottom: none;
}

/* Add these new animations for scrolling sections */
.animate-fade-up {
  animation: fadeUp 0.8s ease forwards;
}

.animate-slide-up {
  animation: slideUp 0.8s ease forwards;
}

.animate-zoom-in {
  animation: zoomIn 0.8s ease forwards;
}

@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(60px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Custom animation for pulse effect */
@keyframes pulse-slow {
  0% {
    opacity: 0.4;
    transform: scale(1);
  }
  50% {
    opacity: 0.6;
    transform: scale(1.05);
  }
  100% {
    opacity: 0.4;
    transform: scale(1);
  }
}

.animate-pulse-slow {
  animation: pulse-slow 6s infinite ease-in-out;
}
</style>