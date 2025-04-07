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
        <!-- Home Link -->
        <div class="menu-item" style="animation-delay: 0.05s;">
          <router-link to="/" class="nav-link">
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
            <div class="grid grid-cols-3 gap-8 mt-6">
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
              
              <!-- POS Solutions Section -->
              <div class="dropdown-section pos-section">
                <h3 class="section-title">POS Solutions</h3>
                <div class="menu-items">
                  <router-link to="/maxx-pay" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="posGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#ef4444" />
                              <stop offset="100%" stop-color="#f87171" />
                            </linearGradient>
                          </defs>
                          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h16v12zm-6-1h4v-4h-4v4zm-6 0h4v-4H8v4zm-2-9h12V7H6v1z" fill="url(#posGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">MaxxPay</span>
                    </div>
                    <span class="link-desc">Complete POS system</span>
                  </router-link>
                  <router-link to="/pos-terminals" class="menu-item-link">
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
                      <span class="link-title">POS Terminals</span>
                    </div>
                    <span class="link-desc">Hardware solutions</span>
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
                            <linearGradient id="ecommerceGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h11c.55 0 1-.45 1-1s-.45-1-1-1H7l1.1-2h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.67-1.43c-.16-.35-.52-.57-.9-.57H1c-.55 0-1 .45-1 1s.45 1 1 1zm16 15c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="url(#ecommerceGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Surcharge Program</span>
                    </div>
                    <span class="link-desc">Dual pricing options</span>
                  </router-link>
                  <router-link to="/bizfunds-cash" class="menu-item-link">
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
                      <span class="link-title">BizFunds Cash Advance</span>
                    </div>
                    <span class="link-desc">Business financing</span>
                  </router-link>
                  <router-link to="/gift-loyalty" class="menu-item-link">
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
                      <span class="link-title">Gift & Loyalty Programs</span>
                    </div>
                    <span class="link-desc">Customer retention tools</span>
                  </router-link>
                  <router-link to="/web-design" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="ecommerceGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 2c2.615 0 4.95 1.007 6.707 2.765C20.493 6.257 21.5 8.593 21.5 11.25c0 2.615-1.007 4.95-2.765 6.707C16.207 20.493 13.87 21.5 11.25 21.5c-2.615 0-4.95-1.007-6.707-2.765C2.507 16.207 1.5 13.87 1.5 11.25c0-2.615 1.007-4.95 2.765-6.707C6.257 2.507 8.593 1.5 11.25 1.5z" fill="url(#ecommerceGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Web Design</span>
                    </div>
                    <span class="link-desc">Professional websites</span>
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
                            <linearGradient id="ecommerceGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 2c2.615 0 4.95 1.007 6.707 2.765C20.493 6.257 21.5 8.593 21.5 11.25c0 2.615-1.007 4.95-2.765 6.707C16.207 20.493 13.87 21.5 11.25 21.5c-2.615 0-4.95-1.007-6.707-2.765C2.507 16.207 1.5 13.87 1.5 11.25c0-2.615 1.007-4.95 2.765-6.707C6.257 2.507 8.593 1.5 11.25 1.5z" fill="url(#ecommerceGradient)"/>
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
                            <linearGradient id="ecommerceGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#7e22ce" />
                              <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                          </defs>
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 2c2.615 0 4.95 1.007 6.707 2.765C20.493 6.257 21.5 8.593 21.5 11.25c0 2.615-1.007 4.95-2.765 6.707C16.207 20.493 13.87 21.5 11.25 21.5c-2.615 0-4.95-1.007-6.707-2.765C2.507 16.207 1.5 13.87 1.5 11.25c0-2.615 1.007-4.95 2.765-6.707C6.257 2.507 8.593 1.5 11.25 1.5z" fill="url(#ecommerceGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Specialty Businesses</span>
                    </div>
                    <span class="link-desc">Unique business solutions</span>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Partnerships Dropdown - Click to Toggle -->
        <div class="relative menu-item" style="animation-delay: 0.3s;">
          <button @click="toggleDropdown('partnerships')" class="nav-link-dropdown">
            Partnerships
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
                          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm4.51-8.95C15.41 5.38 14 6.37 14 8c0 1.1.9 2 2 2 2.21 0 4-1.79 4-4 0-1.86-1.28-3.41-3-3.86v1.86c.64.32 1.1.98 1.1 1.76 0 1.1-.9 2-2 2-.34 0-.65-.09-.93-.24-.21.42-.32.89-.32 1.38 0 1.66 1.34 3 3 3 2.55 0 4.78-2.44 3.93-5.24-.5-1.66-1.97-2.94-3.66-3.31-.34-.07-.69-.1-1.05-.1-.51 0-1 .09-1.46.25z" fill="url(#agentsGradient)"/>
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
                  <router-link to="/payment-partnerships" class="menu-item-link">
                    <div class="top-row">
                      <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                          <defs>
                            <linearGradient id="partnershipGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#4f46e5" />
                              <stop offset="100%" stop-color="#6366f1" />
                            </linearGradient>
                          </defs>
                          <path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z" fill="url(#partnershipGradient)"/>
                        </svg>
                      </div>
                      <span class="link-title">Payment Partnerships</span>
                    </div>
                    <span class="link-desc">Integrate our payment solutions</span>
                  </router-link>
                </div>
              </div>
              
              <div class="dropdown-section">
                <h3 class="section-title">Reseller Programs</h3>
                <div class="menu-items">
                  <a href="#" class="menu-item-link">
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
                  </a>
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
          <router-link to="/web-commerce" class="block py-1 text-gray-600 hover:text-indigo-600">Web Commerce</router-link>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Text & QR Code Payments</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Integrations</a>
          
          <p class="font-semibold text-gray-800 mt-3">POS Solutions</p>
          <router-link to="/maxx-pay" class="block py-1 text-gray-600 hover:text-indigo-600">MaxxPay</router-link>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">POS Terminals</a>
          
          <p class="font-semibold text-gray-800 mt-3">Additional Services</p>
          <router-link to="/surcharge" class="block py-1 text-gray-600 hover:text-indigo-600">Surcharge & Dual Pricing Program</router-link>
          <router-link to="/bizfunds-cash" class="block py-1 text-gray-600 hover:text-indigo-600">BizFunds Cash Advance</router-link>
          <router-link to="/gift-loyalty" class="block py-1 text-gray-600 hover:text-indigo-600">Gift & Loyalty Programs</router-link>
          <router-link to="/web-design" class="block py-1 text-gray-600 hover:text-indigo-600">Web Design</router-link>
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
        </div>
      </div>
      
      <div class="py-2">
        <button @click="toggleMobileSubmenu('partnerships')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-indigo-600">
          <span>Partnerships</span>
          <span :class="{ 'transform rotate-180': activeMobileSubmenu === 'partnerships' }">▾</span>
        </button>
        <div v-if="activeMobileSubmenu === 'partnerships'" class="pl-4 mt-2 space-y-2">
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">Agents</a>
          <router-link to="/payment-partnerships" class="block py-1 text-gray-600 hover:text-indigo-600">Payment Partnerships</router-link>
          <a href="#" class="block py-1 text-gray-600 hover:text-indigo-600">POS Reseller</a>
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
import { ref, onMounted, onUnmounted } from 'vue';
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
     event.target.closest('button').textContent.includes('Partnerships'));
  
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
</script>

<style scoped>
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
}

/* Container for icon and title */
.menu-item-link .top-row {
  display: flex;
  align-items: center;
  margin-bottom: 4px;
}

/* Keep icon size and style the same */
.icon-container {
  margin-right: 12px;
  margin-bottom: 0;
  width: 38px;
  height: 38px;
}

/* Move link-title next to the icon */
.link-title {
  font-weight: 700;
  color: #111827;
  font-size: 1rem;
  padding-top: 2px;
}

/* Position the description below the icon and title */
.link-desc {
  font-size: 0.875rem;
  color: #6b7280;
  padding-left: 50px; /* Match the width of icon-container + margin-right */
}

/* Adjust hover effects to work with new layout */
.menu-item-link:hover .link-title {
  color: #991b1b;
}

/* Enhanced Icon Styling with gradients */
.icon-container {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  margin-right: 16px;
  flex-shrink: 0;
  position: relative;
  border-radius: 10px;
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
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 16px;
  padding-bottom: 8px;
  border-bottom: 2px solid #f3f4f6;
  color: #111827;
  position: relative;
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
</style>