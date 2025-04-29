<template>
  <!-- Navigation Bar with Slide Down Animation -->
  <nav class="container mx-auto px-6 py-4 slide-in-down relative z-[100] bg-gradient-to-r from-white to-gray-50">
    <div class="flex items-center justify-between">
      <!-- Logo with Slide Left Animation - Now links to home -->
      <div class="flex items-center slide-in-left delay-200">
        <router-link to="/">
          <img :src="logoImg" alt="Electronic Merchant Systems" class="h-12 w-auto" />
        </router-link>
      </div>
      
      <!-- Navigation Links with Sequenced Menu Item Animation -->
      <div class="hidden md:flex space-x-8">
        <!-- Home Link - Updated to match other links -->
        <div class="relative menu-item" style="animation-delay: 0.05s;">
          <router-link to="/" class="nav-link-dropdown">
            Home
          </router-link>
        </div>
        
        <!-- Solutions Dropdown - Click to Toggle -->
        <div class="relative menu-item" style="animation-delay: 0.1s;">
          <button @click="toggleDropdown('solutions')" class="nav-link-dropdown">
            Solutions
            <span class="ml-1 dropdown-arrow" :class="{ 'transform rotate-180': activeDropdown === 'solutions' }">▾</span>
          </button>
          <div v-if="activeDropdown === 'solutions'" class="dropdown-panel solutions-panel">
            <div class="dropdown-header">
              <h2>Payment Solutions</h2>
              <p>Explore our comprehensive payment processing solutions</p>
            </div>
            <div class="grid grid-cols-2 gap-8 mt-6">
              <!-- Payment Processing Section -->
              <div class="dropdown-section payment-section">
                <h3 class="section-title">Payment Processing</h3>
                <div class="menu-items">
                  <router-link to="/mobile-processing" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="mobileGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#8b5cf6" />
                              <stop offset="100%" stop-color="#c084fc" />
                            </linearGradient>
                          </defs>
                          <path d="M17 2H7C5.9 2 5 2.9 5 4v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-5 17c-.83 0-1.5-.67-1.5-1.5S11.17 16 12 16s1.5.67 1.5 1.5S12.83 19 12 19zm5-6H7V5h10v8z" fill="url(#mobileGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Mobile Processing</span>
                    </div>
                    <span class="link-desc">Accept payments anywhere</span>
                  </router-link>
                  <router-link to="/point-of-sale" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="posGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#ec4899" />
                              <stop offset="100%" stop-color="#f472b6" />
                            </linearGradient>
                          </defs>
                          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h16v12zM6 10h2v2H6zm0 4h8v2H6zm10 0h2v2h-2zm-6-4h8v2h-8z" fill="url(#posGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">POINT OF SALE</span>
                    </div>
                    <span class="link-desc">Complete POS solutions</span>
                  </router-link>
                  <router-link to="/web-commerce" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="webGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#3b82f6" />
                              <stop offset="100%" stop-color="#60a5fa" />
                            </linearGradient>
                          </defs>
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" fill="url(#webGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Web Commerce</span>
                    </div>
                    <span class="link-desc">Online payment solutions</span>
                  </router-link>
                  <router-link to="/text-qr" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="qrGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#10b981" />
                              <stop offset="100%" stop-color="#34d399" />
                            </linearGradient>
                          </defs>
                          <path d="M3 11h8V3H3v8zm2-6h4v4H5V5zM3 21h8v-8H3v8zm2-6h4v4H5v-4zM13 3v8h8V3h-8zm6 6h-4V5h4v4zM13 13h2v2h-2zM17 13h2v2h-2zM19 17h2v2h-2zM13 17h2v2h-2zM17 17h2v2h-2zM19 19h2v2h-2zM13 19h2v2h-2z" fill="url(#qrGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Text & QR Payments</span>
                    </div>
                    <span class="link-desc">Contactless payment options</span>
                  </router-link>
                  <router-link to="/integrations" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="integrationsGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#14b8a6" />
                              <stop offset="100%" stop-color="#2dd4bf" />
                            </linearGradient>
                          </defs>
                          <path d="M19.5 5.5h-15c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2zm.5 11c0 .28-.22.5-.5.5h-15c-.28 0-.5-.22-.5-.5v-9c0-.28.22-.5.5-.5h15c.28 0 .5.22.5.5v9zM7 11h10v2H7zm2-3h6v2H9zm8 6H7v2h10z" fill="url(#integrationsGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Integrations</span>
                    </div>
                    <span class="link-desc">Connect with existing systems</span>
                  </router-link>
                </div>
              </div>
              
              <!-- Additional Services Section -->
              <div class="dropdown-section services-section">
                <h3 class="section-title">Additional Services</h3>
                <div class="menu-items">
                  <router-link to="/surcharge" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="surchargeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 4h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h11c.55 0 1-.45 1-1s-.45-1-1-1H7l1.1-2h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.67-1.43c-.16-.35-.52-.57-.9-.57H1c-.55 0-1 .45-1 1s.45 1 1 1zm16 15c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="url(#surchargeGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Surcharge Program</span>
                    </div>
                    <span class="link-desc">Offset card processing fees</span>
                  </router-link>
                  <router-link to="/dual-pricing" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="dualPricingGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#0f766e" />
                              <stop offset="100%" stop-color="#14b8a6" />
                            </linearGradient>
                          </defs>
                          <path d="M11 17h2v-1h1c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1h-3v-1h4V8h-2V7h-2v1h-1c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3v1H9v2h2v1zm9-13H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V6h16v12z" fill="url(#dualPricingGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Dual Pricing Program</span>
                    </div>
                    <span class="link-desc">Cash discount pricing model</span>
                  </router-link>
                  <router-link to="/speedybusinessloan" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="loanGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#15803d" />
                              <stop offset="100%" stop-color="#22c55e" />
                            </linearGradient>
                          </defs>
                          <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" fill="url(#loanGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Speedy Business Loan</span>
                    </div>
                    <span class="link-desc">Business financing</span>
                  </router-link>
                  <router-link to="/gift-loyalty" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="giftGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#15803d" />
                              <stop offset="100%" stop-color="#22c55e" />
                            </linearGradient>
                          </defs>
                          <path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z" fill="url(#giftGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Gift & Loyalty Programs</span>
                    </div>
                    <span class="link-desc">Customer retention tools</span>
                  </router-link>
                  <router-link to="/chargeback-guide" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                          <defs>
                            <linearGradient id="chargebackGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#f97316" />
                              <stop offset="100%" stop-color="#fb923c" />
                            </linearGradient>
                          </defs>
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" fill="url(#chargebackGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Chargeback Guide</span>
                    </div>
                    <span class="link-desc">Manage & prevent disputes</span>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Industries Dropdown - Click to Toggle -->
        <div class="relative menu-item" style="animation-delay: 0.2s;">
          <button @click="toggleDropdown('industries')" class="nav-link-dropdown">
            Industries
            <span class="ml-1 dropdown-arrow" :class="{ 'transform rotate-180': activeDropdown === 'industries' }">▾</span>
          </button>
          <div v-if="activeDropdown === 'industries'" class="dropdown-panel">
            <div class="dropdown-header">
              <h2>Industry Solutions</h2>
              <p>Tailored payment processing for your specific business needs</p>
            </div>
            <div class="grid grid-cols-3 gap-8 mt-6">
              <div class="dropdown-section">
                <h3 class="section-title">Retail & Commerce</h3>
                <div class="menu-items">
                  <router-link to="/retail" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="retailGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#1d4ed8" />
                              <stop offset="100%" stop-color="#3b82f6" />
                            </linearGradient>
                          </defs>
                          <path d="M21.9 8.89l-1.05-4.37c-.22-.9-1-1.52-1.91-1.52H5.05c-.9 0-1.69.63-1.9 1.52L2.1 8.89c-.24 1.02-.02 2.06.62 2.88.08.11.19.19.28.29V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6.94c.09-.09.2-.18.28-.28.64-.82.87-1.87.62-2.89zm-2.99-3.9l1.05 4.37c.1.42.01.84-.25 1.17-.14.18-.44.47-.94.47-.61 0-1.14-.49-1.21-1.14L16.98 5l1.93-.01zM13 5h1.96l.54 4.52c.05.39-.07.78-.33 1.07-.22.26-.54.41-.95.41-.67 0-1.22-.59-1.22-1.31V5zM8.49 9.52L9.04 5H11v4.69c0 .72-.55 1.31-1.29 1.31-.34 0-.65-.15-.89-.41-.25-.29-.37-.68-.33-1.07zm-4.45-.16L5.05 5h1.97l-.58 4.86c-.08.65-.6 1.14-1.21 1.14-.49 0-.8-.29-.93-.47-.27-.32-.36-.75-.26-1.17zM5 19v-6.03c.08.01.15.03.23.03.87 0 1.66-.36 2.24-.95.6.6 1.4.95 2.31.95.87 0 1.65-.36 2.23-.93.59.57 1.39.93 2.29.93.84 0 1.64-.35 2.24-.95.58.59 1.37.95 2.24.95.08 0 .15-.02.23-.03V19H5z" fill="url(#retailGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Retail</span>
                    </div>
                    <span class="link-desc">In-store payment solutions</span>
                  </router-link>
                  <router-link to="/ecommerce" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="ecommerceGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 4h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h11c.55 0 1-.45 1-1s-.45-1-1-1H7l1.1-2h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.67-1.43c-.16-.35-.52-.57-.9-.57H1c-.55 0-1 .45-1 1s.45 1 1 1zm16 15c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="url(#ecommerceGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">eCommerce</span>
                    </div>
                    <span class="link-desc">Online store solutions</span>
                  </router-link>
                </div>
              </div>
              
              <div class="dropdown-section">
                <h3 class="section-title">Service Industries</h3>
                <div class="menu-items">
                  <router-link to="/restaurants" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="restaurantGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#15803d" />
                              <stop offset="100%" stop-color="#22c55e" />
                            </linearGradient>
                          </defs>
                          <path d="M8.1 13.34l2.83-2.83-6.19-6.18c-.48-.48-1.31-.35-1.61.27-.71 1.49-.45 3.32.78 4.56l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27l-9.05 9.05 1.41 1.41 9.05-9.05 9.05 9.05 1.41-1.41-9.05-9.05z" fill="url(#restaurantGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Restaurants & Bars</span>
                    </div>
                    <span class="link-desc">Food service solutions</span>
                  </router-link>
                  <router-link to="/professional-services" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="retailGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#1d4ed8" />
                              <stop offset="100%" stop-color="#3b82f6" />
                            </linearGradient>
                          </defs>
                          <path d="M21.9 8.89l-1.05-4.37c-.22-.9-1-1.52-1.91-1.52H5.05c-.9 0-1.69.63-1.9 1.52L2.1 8.89c-.24 1.02-.02 2.06.62 2.88.08.11.19.19.28.29V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6.94c.09-.09.2-.18.28-.28.64-.82.87-1.87.62-2.89zm-2.99-3.9l1.05 4.37c.1.42.01.84-.25 1.17-.14.18-.44.47-.94.47-.61 0-1.14-.49-1.21-1.14L16.98 5l1.93-.01zM13 5h1.96l.54 4.52c.05.39-.07.78-.33 1.07-.22.26-.54.41-.95.41-.67 0-1.22-.59-1.22-1.31V5zM8.49 9.52L9.04 5H11v4.69c0 .72-.55 1.31-1.29 1.31-.34 0-.65-.15-.89-.41-.25-.29-.37-.68-.33-1.07zm-4.45-.16L5.05 5h1.97l-.58 4.86c-.08.65-.6 1.14-1.21 1.14-.49 0-.8-.29-.93-.47-.27-.32-.36-.75-.26-1.17zM5 19v-6.03c.08.01.15.03.23.03.87 0 1.66-.36 2.24-.95.6.6 1.4.95 2.31.95.87 0 1.65-.36 2.23-.93.59.57 1.39.93 2.29.93.84 0 1.64-.35 2.24-.95.58.59 1.37.95 2.24.95.08 0 .15-.02.23-.03V19H5z" fill="url(#retailGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Professional Services</span>
                    </div>
                    <span class="link-desc">For service-based businesses</span>
                  </router-link>
                </div>
              </div>
              
              <div class="dropdown-section">
                <h3 class="section-title">Specialized Businesses</h3>
                <div class="menu-items">
                  <router-link to="/skill-trade" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="skillsGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M21.67 18.17l-5.3-5.3h-.99l-2.54 2.54v.99l5.3 5.3c.39.39 1.02.39 1.41 0l2.12-2.12c.39-.38.39-1.02 0-1.41zm-2.83 1.42l-4.24-4.24.71-.71 4.24 4.24-.71.71z M11 15h2v2h-2zm-1-4h4v2h-4zm5-3h-6c-.55 0-1 .45-1 1v1h8V9c0-.55-.45-1-1-1zm-1-4h-4c-.55 0-1 .45-1 1v1h6V5c0-.55-.45-1-1-1zM4.59 11.59l-.69.7-2.12-2.12c-.39-.39-.39-1.02 0-1.41l2.12-2.12.69.7L3.41 8.5h.99c2.48 0 4.5 2.02 4.5 4.5 0 .34-.04.67-.12.98-.23-.37-.53-.71-.88-1-.07-.16-.12-.33-.12-.51 0-1.55-1.22-2.82-2.76-2.88H3.41l1.18 1.18z" fill="url(#skillsGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Skilled Trade Services</span>
                    </div>
                    <span class="link-desc">Field service solutions</span>
                  </router-link>
                  <router-link to="/specialty-business" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="specialtyGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z" fill="url(#specialtyGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Specialty Businesses</span>
                    </div>
                    <span class="link-desc">Unique business solutions</span>
                  </router-link>
                </div>
              </div>
            </div>
            
            <!-- View All Industries Link -->
            <div class="flex justify-center mt-6 mb-2">
              <router-link to="/all-industries" class="view-all-link flex items-center text-red-800 hover:text-red-600 font-semibold transition duration-300">
                <span>View all industries</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </router-link>
            </div>
          </div>
        </div>
        
        <!-- Partnerships Dropdown - Click to Toggle -->
        <div class="relative menu-item" style="animation-delay: 0.3s;">
          <button @click="toggleDropdown('partnerships')" class="nav-link-dropdown">
            Partner with Us
            <span class="ml-1 dropdown-arrow" :class="{ 'transform rotate-180': activeDropdown === 'partnerships' }">▾</span>
          </button>
          <div v-if="activeDropdown === 'partnerships'" class="dropdown-panel">
            <div class="dropdown-header">
              <h2>Partnership Programs</h2>
              <p>Grow your business with our partnership opportunities</p>
            </div>
            <div class="grid grid-cols-3 gap-8 mt-6">
              <div class="dropdown-section">
                <h3 class="section-title">Agent Programs</h3>
                <div class="menu-items">
                  <router-link to="/agents" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="agentsGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#1e40af" />
                              <stop offset="100%" stop-color="#3b82f6" />
                            </linearGradient>
                          </defs>
                          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="url(#agentsGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Agents</span>
                    </div>
                    <span class="link-desc">Join our sales agent program</span>
                  </router-link>
                </div>
              </div>
              
              <div class="dropdown-section">
                <h3 class="section-title">Integration Partners</h3>
                <div class="menu-items">
                  <router-link to="/partnership-forms" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="partnershipGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#4f46e5" />
                              <stop offset="100%" stop-color="#6366f1" />
                            </linearGradient>
                          </defs>
                          <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" fill="url(#partnershipGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Payment Partnerships</span>
                    </div>
                    <span class="link-desc">Integrate our payment solutions</span>
                  </router-link>
                  <router-link to="/merchant-onboarding" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="onboardingGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#fb7185" />
                              <stop offset="100%" stop-color="#f43f5e" />
                            </linearGradient>
                          </defs>
                          <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z" fill="url(#onboardingGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Merchant Onboarding</span>
                    </div>
                    <span class="link-desc">Streamlined merchant setup</span>
                  </router-link>
                </div>
              </div>
              
              <div class="dropdown-section">
                <h3 class="section-title">Reseller Programs</h3>
                <div class="menu-items">
                  <router-link to="/pos-reseller" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="resellerGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#0d9488" />
                              <stop offset="100%" stop-color="#14b8a6" />
                            </linearGradient>
                          </defs>
                          <path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z" fill="url(#resellerGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">POS Reseller</span>
                    </div>
                    <span class="link-desc">Resell our POS solutions</span>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="mobile-menu-button">
          <svg v-if="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <!-- CTA Button -->
      <div class="hidden md:block slide-in-right delay-300">
        <router-link to="/request-consultation" class="cta-button">
          Request a Consultation
        </router-link>
      </div>
    </div>
    
    <!-- Mobile Menu -->
    <div v-if="mobileMenuOpen" class="md:hidden mt-4 bg-white rounded-lg shadow-lg p-4">
      <router-link to="/" class="block py-2 text-gray-700 hover:text-indigo-600">Home</router-link>
      
      <div class="py-2">
        <button @click="toggleMobileSubmenu('solutions')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-indigo-600">
          <span>Solutions</span>
          <span :class="{ 'transform rotate-180': activeMobileSubmenu === 'solutions' }">▾</span>
        </button>
        <div v-if="activeMobileSubmenu === 'solutions'" class="pl-4 mt-2 space-y-2">
          <p class="font-semibold text-gray-800 mt-3">Payment Processing</p>
          <router-link to="/mobile-processing" class="block py-1 text-gray-600 hover:text-indigo-600">Mobile Processing</router-link>
          <router-link to="/point-of-sale" class="block py-1 text-gray-600 hover:text-indigo-600">POINT OF SALE</router-link>
          <router-link to="/web-commerce" class="block py-1 text-gray-600 hover:text-indigo-600">Web Commerce</router-link>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Text & QR Code Payments</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Integrations</a>
          
          <p class="font-semibold text-gray-800 mt-3">Additional Services</p>
          <router-link to="/surcharge" class="block py-1 text-gray-600 hover:text-indigo-600">Surcharge Program</router-link>
          <router-link to="/dual-pricing" class="block py-1 text-gray-600 hover:text-indigo-600">Dual Pricing Program</router-link>
          <router-link to="/speedybusinessloan" class="block py-1 text-gray-600 hover:text-indigo-600">Speedy Business Loan</router-link>
          <router-link to="/gift-loyalty" class="block py-1 text-gray-600 hover:text-indigo-600">Gift & Loyalty Programs</router-link>
          <router-link to="/chargeback-guide" class="block py-1 text-gray-600 hover:text-indigo-600">Chargeback Guide</router-link>
        </div>
      </div>
      
      <div class="py-2">
        <button @click="toggleMobileSubmenu('industries')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-indigo-600">
          <span>Industries</span>
          <span :class="{ 'transform rotate-180': activeMobileSubmenu === 'industries' }">▾</span>
        </button>
        <div v-if="activeMobileSubmenu === 'industries'" class="pl-4 mt-2 space-y-2">
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Retail</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">eCommerce</a>
          <router-link to="/restaurants" class="block py-1 text-gray-600 hover:text-indigo-600">Restaurants & Bars</router-link>
          <router-link to="/professional-services" class="block py-1 text-gray-600 hover:text-indigo-600">Professional Services</router-link>
          <router-link to="/skill-trade" class="block py-1 text-gray-600 hover:text-indigo-600">Skilled Trade Services</router-link>
          <router-link to="/specialty-business" class="block py-1 text-gray-600 hover:text-indigo-600">Specialty Businesses</router-link>
          <router-link to="/all-industries" class="block py-2 mt-2 text-red-800 font-semibold hover:text-red-600 border-t border-gray-200 pt-3">View all industries</router-link>
        </div>
      </div>
      
      <div class="py-2">
        <button @click="toggleMobileSubmenu('partnerships')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-indigo-600">
          <span>Partner with Us</span>
          <span :class="{ 'transform rotate-180': activeMobileSubmenu === 'partnerships' }">▾</span>
        </button>
        <div v-if="activeMobileSubmenu === 'partnerships'" class="pl-4 mt-2 space-y-2">
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Agents</a>
          <router-link to="/partnership-forms" class="block py-1 text-gray-600 hover:text-indigo-600">Payment Partnerships</router-link>
          <router-link to="/merchant-onboarding" class="block py-1 text-gray-600 hover:text-indigo-600">Merchant Onboarding</router-link>
          <router-link to="/pos-reseller" class="block py-1 text-gray-600 hover:text-indigo-600">POS Reseller</router-link>
        </div>
      </div>
      
      <div class="mt-4">
        <router-link to="/request-consultation" class="block w-full text-center py-2 px-4 bg-red-800 text-white rounded-md">
          Request a Consultation
        </router-link>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted, defineExpose } from 'vue';
// Import logo image
import logoImg from '@/../images/TransparentLogo.png';

// Menu dropdown states
const activeDropdown = ref(null);
const mobileMenuOpen = ref(false);
const activeMobileSubmenu = ref(null);

// Function to toggle desktop dropdowns
const toggleDropdown = (menu) => {
  if (activeDropdown.value === menu) {
    activeDropdown.value = null;
  } else {
    activeDropdown.value = menu;
  }
};

// Function to directly open a specific dropdown
const openDropdown = (menu) => {
  activeDropdown.value = menu;
};

// Function to toggle mobile submenus
const toggleMobileSubmenu = (menu) => {
  if (activeMobileSubmenu.value === menu) {
    activeMobileSubmenu.value = null;
  } else {
    activeMobileSubmenu.value = menu;
  }
};

// Close dropdown when clicking outside
const closeDropdowns = (event) => {
  const isDropdownButton = event.target.closest('button') && 
    (event.target.closest('button').textContent.includes('Solutions') || 
     event.target.closest('button').textContent.includes('Industries') || 
     event.target.closest('button').textContent.includes('Partner with Us'));
  
  if (!isDropdownButton) {
    activeDropdown.value = null;
  }
};

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
  
  // Add event listener to close dropdowns when clicking outside
  document.addEventListener('click', closeDropdowns);
});

onUnmounted(() => {
  // Remove event listener when component is unmounted
  document.removeEventListener('click', closeDropdowns);
});

// Expose methods to parent components
defineExpose({
  openDropdown
});
</script>

<style scoped>
/* Add these font imports at the top of your style section in NavBar.vue */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Apply font families to elements */
.nav-link, .nav-link-dropdown, .cta-button, .menu-item-link .link-title, .dropdown-header h2, .section-title {
  font-family: 'Montserrat', sans-serif;
}

.menu-item-link .link-desc, .dropdown-header p, p, a, span {
  font-family: 'Inter', system-ui, sans-serif;
}

/* Refine font weights */
.nav-link, .nav-link-dropdown {
  font-weight: 600;
  letter-spacing: -0.01em;
}

.dropdown-header h2 {
  font-weight: 700;
  letter-spacing: -0.02em;
}

.section-title {
  font-weight: 600;
}

.link-title {
  font-weight: 600;
}

.cta-button {
  font-weight: 600;
  letter-spacing: 0.03em;
}

/* Base Navigation Styling */
.nav-link {
  color: #1f2937;
  transition: color 0.3s ease;
  position: relative;
  padding: 6px 0;
  font-weight: 500;
}

.nav-link:hover {
  color: #dc2626;
}

.nav-link::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #dc2626;
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}

.nav-link-dropdown {
  display: flex;
  align-items: center;
  color: #1f2937;
  transition: color 0.3s ease;
  position: relative;
  padding: 6px 0;
  font-weight: 500;
}

.nav-link-dropdown:hover {
  color: #dc2626;
}

.nav-link-dropdown::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #dc2626;
  transition: width 0.3s ease;
}

.nav-link-dropdown:hover::after {
  width: 100%;
}

/* Updated menu-item-link to position the icon and text properly */
.menu-item-link {
  display: flex;
  flex-direction: column;
  padding: 12px;
  border-radius: 12px;
  transition: all 0.3s ease;
  margin-bottom: 8px;
  border: 1px solid transparent;
  position: relative;
  min-height: 70px;
}

/* Container for icon and title */
.menu-item-link .top-row {
  display: flex;
  align-items: center;
  margin-bottom: 4px;
}

/* Keep icon size and style the same */
.icon-container {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  margin-right: 8px;
  flex-shrink: 0;
  position: relative;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.8);
  transition: all 0.3s ease;
  border: 1px solid rgba(0, 0, 0, 0.05);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
}

.icon-container svg {
  width: 24px;
  height: 24px;
  transition: all 0.3s ease;
}

.menu-item-link:hover .icon-container {
  transform: scale(1.1) rotate(-5deg);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.menu-item-link:hover .icon-container svg {
  transform: scale(1.2) rotate(5deg);
  filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.1));
}

/* More vibrant icon colors */
.purple-icon svg { fill: #8b5cf6; }
.purple-icon { background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(139, 92, 246, 0.05)); }

.blue-icon svg { fill: #3b82f6; }
.blue-icon { background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05)); }

.green-icon svg { fill: #10b981; }
.green-icon { background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05)); }

.teal-icon svg { fill: #14b8a6; }
.teal-icon { background: linear-gradient(135deg, rgba(20, 184, 166, 0.1), rgba(20, 184, 166, 0.05)); }

.red-icon svg { fill: #ef4444; }
.red-icon { background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(239, 68, 68, 0.05)); }

.orange-icon svg { fill: #f97316; }
.orange-icon { background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(249, 115, 22, 0.05)); }

.pink-icon svg { fill: #ec4899; }
.pink-icon { background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(236, 72, 153, 0.05)); }

.indigo-icon svg { fill: #6366f1; }
.indigo-icon { background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(99, 102, 241, 0.05)); }

.yellow-icon svg { fill: #eab308; }
.yellow-icon { background: linear-gradient(135deg, rgba(234, 179, 8, 0.1), rgba(234, 179, 8, 0.05)); }

/* Enhanced hover effects */
.menu-item-link:hover {
  transform: translateY(-2px) scale(1.02);
  background: linear-gradient(to right, rgba(255, 255, 255, 0.9), rgba(249, 250, 251, 0.9));
  border: 1px solid rgba(0, 0, 0, 0.08);
  box-shadow: 
    0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

/* Section title enhancement */
.section-title {
  font-size: 1rem;
  font-weight: 700;
  margin-bottom: 12px;
  padding-bottom: 8px;
  border-bottom: 2px solid #f3f4f6;
  color: #111827;
  position: relative;
  white-space: nowrap;
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 40px;
  height: 2px;
  background-color: #dc2626;
}

/* Industry specific icon colors */
.retail-icon i { color: #3b82f6; }
.ecommerce-icon i { color: #8b5cf6; }
.restaurant-icon i { color: #10b981; }
.professional-icon i { color: #ef4444; }
.trade-icon i { color: #f59e0b; }
.specialty-icon i { color: #14b8a6; }

/* Partnership specific icon colors */
.agents-icon i { color: #3b82f6; }
.payment-icon i { color: #0ea5e9; }
.reseller-icon i { color: #14b8a6; }

/* Make all panels the same size and design */
.dropdown-panel {
  width: 720px;
  max-width: 90vw;
  position: absolute;
  background-color: white;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  border-radius: 16px;
  margin-top: 16px;
  z-index: 999;
  transition: all 0.3s ease-in-out;
  left: 50%;
  transform: translateX(-50%);
  overflow: hidden;
  animation: panelFadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(0, 0, 0, 0.05);
  padding-bottom: 16px;
}

/* Consistent header styling for all dropdowns */
.dropdown-header {
  padding: 20px 24px;
  border-bottom: 1px solid #f3f4f6;
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
  position: relative;
  overflow: hidden;
}

.dropdown-header h2 {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 4px;
  background: linear-gradient(90deg, #991b1b, #dc2626);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
  letter-spacing: -0.02em;
}

.dropdown-header p {
  color: #4b5563;
  position: relative;
  max-width: 80%;
}

/* Redefine Industries Grid to match Solutions layout */
.industry-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  padding: 0px;
  margin-top: 6px;
}

.industry-card {
  display: flex;
  align-items: flex-start;
  padding: 10px 12px;
  border-radius: 12px;
  transition: all 0.3s ease;
  margin-bottom: 6px;
  border: 1px solid transparent;
  background: transparent;
  text-align: left;
  height: auto;
  flex-direction: row;
}

.industry-card:hover {
  transform: scale(1.05);
  background-color: rgba(249, 250, 251, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.05);
  box-shadow: 
    0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05),
    0 0 0 1px rgba(0, 0, 0, 0.03);
  z-index: 1;
}

.industry-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  margin-right: 15px;
  margin-bottom: 0;
  flex-shrink: 0;
}

.industry-icon i {
  font-size: 1.5rem;
}

.industry-card h3 {
  font-weight: 700;
  font-size: 1rem;
  color: #111827;
  margin-bottom: 2px;
}

.industry-card p {
  font-size: 0.875rem;
  color: #6b7280;
}

.industry-card:hover h3 {
  color: #991b1b;
  transform: none;
}

.industry-card:hover p {
  transform: none;
}

/* Update Partnership Cards to match Solutions cards */
.partnership-options {
  display: grid;
  grid-template-columns: 1fr;
  gap: 12px;
  padding: 0px;
  margin-top: 6px;
}

.partnership-card {
  display: flex;
  align-items: flex-start;
  padding: 10px 12px;
  border-radius: 12px;
  transition: all 0.3s ease;
  margin-bottom: 6px;
  border: 1px solid transparent;
  background: transparent;
}

.partnership-card:hover {
  transform: scale(1.05);
  background-color: rgba(249, 250, 251, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.05);
  box-shadow: 
    0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05),
    0 0 0 1px rgba(0, 0, 0, 0.03);
  z-index: 1;
}

.partnership-card::before {
  display: none;
}

.partnership-icon {
  margin-right: 15px;
}

.partnership-content h3 {
  font-size: 1rem;
  margin-bottom: 2px;
}

.partnership-content p {
  font-size: 0.875rem;
  margin-bottom: 4px;
}

.partnership-card:hover .partnership-content h3 {
  color: #991b1b;
  transform: none;
}

/* Make all sections padding consistent */
.dropdown-section {
  padding: 16px 24px;
  min-width: 200px;
  box-sizing: border-box;
}

/* Update structure to match Solutions dropdown for all panels */
.industries-panel .dropdown-header,
.partnerships-panel .dropdown-header {
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
}

.industries-panel .industry-grid,
.partnerships-panel .partnership-options {
  padding: 16px 24px;
}

/* Reset any transform animations that differ across dropdowns */
.industry-card:hover,
.partnership-card:hover {
  transform: scale(1.05);
}

/* Make all icon hover effects consistent */
.menu-item-link:hover .icon-container i,
.industry-card:hover .industry-icon i,
.partnership-card:hover .partnership-icon i {
  transform: scale(1.2);
  transition: transform 0.3s ease;
}

/* Make all text hover effects consistent */
.menu-item-link:hover .link-title,
.industry-card:hover h3,
.partnership-card:hover .partnership-content h3 {
  color: #991b1b;
}

.menu-item-link:hover .link-desc,
.industry-card:hover p,
.partnership-card:hover .partnership-content p {
  color: #6b7280;
}

/* Remove previous styling for .industries-header and .partnerships-header */
.industries-header h2,
.partnerships-header h2 {
  background: linear-gradient(90deg, #991b1b, #dc2626);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Animation classes */
.slide-in-down {
  animation: slideInDown 0.5s ease forwards;
}

.slide-in-left {
  animation: slideInLeft 0.5s ease forwards;
}

.slide-in-right {
  animation: slideInRight 0.5s ease forwards;
}

.menu-item {
  opacity: 0;
  animation: fadeIn 0.5s ease forwards;
}

/* Dropdown arrow with better transition */
.dropdown-arrow {
  transition: transform 0.3s ease;
}

/* Enhanced CTA Button */
.cta-button {
  color: white;
  font-weight: 700;
  padding: 12px 32px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(220, 38, 38, 0.4);
  background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  letter-spacing: 0.5px;
}

.cta-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 30px rgba(220, 38, 38, 0.5);
}

.cta-button::after {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: 0.5s;
}

.cta-button:hover::after {
  left: 100%;
}

/* Improved animations */
@keyframes panelFadeIn {
  from {
    opacity: 0;
    transform: translateY(10px) translateX(-50%) scale(0.98);
  }
  to {
    opacity: 1;
    transform: translateY(0) translateX(-50%) scale(1);
  }
}

@keyframes slideInDown {
  from {
    transform: translateY(-30px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes slideInLeft {
  from {
    transform: translateX(-30px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInRight {
  from {
    transform: translateX(30px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

/* Mobile menu button styling */
.mobile-menu-button {
  color: #4b5563;
  padding: 8px;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.mobile-menu-button:hover {
  background-color: #f3f4f6;
}

/* Add a subtle animation effect when hovering */
.menu-item-link:hover .icon-container svg {
  transform: scale(1.2) rotate(5deg);
  filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.1));
}

/* Add subtle animation to path elements for a more interactive feel */
.icon-container svg path {
  transition: transform 0.3s ease;
}

.menu-item-link:hover .icon-container svg path {
  transform: translateY(-1px);
}

/* Update the link-desc style to ensure consistent alignment */
.link-desc {
  font-size: 0.8rem;
  color: #6b7280;
  margin-left: 44px;
  display: block;
  white-space: normal;
  line-height: 1.2;
  max-width: 100%;
}
</style>