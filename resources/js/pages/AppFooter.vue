<template>
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
            <a href="https://www.facebook.com/HurricanePayments" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors duration-200">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="https://www.linkedin.com/company/hurricane-payments/posts/?feedView=all" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors duration-200">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            <div class="relative group">
              <a class="text-gray-400 hover:text-white transition-colors duration-200 cursor-default">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
              </a>
              <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
                Coming Soon!
              </div>
            </div>
          </div>
        </div>
        
        <!-- Solutions Links Column -->
        <div>
          <h3 class="text-lg font-semibold mb-6 text-white border-b border-gray-700 pb-2">Solutions</h3>
          <ul class="space-y-3">
            <li><router-link to="/mobile-processing" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Credit Card Processing</router-link></li>
            <li><router-link to="/point-of-sale" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Point of Sale Systems</router-link></li>
            <li><router-link to="/integrations" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Payment Gateways</router-link></li>
            <li><router-link to="/mobile-processing" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Mobile Payments</router-link></li>
            <li><router-link to="/speedybusinessloan" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Business Funding</router-link></li>
          </ul>
        </div>
        
        <!-- Industries Links Column -->
        <div>
          <h3 class="text-lg font-semibold mb-6 text-white border-b border-gray-700 pb-2">Industries</h3>
          <ul class="space-y-3">
            <li><router-link to="/retail" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Retail</router-link></li>
            <li><router-link to="/restaurants" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Restaurants</router-link></li>
            <li><router-link to="/ecommerce" class="text-gray-400 hover:text-custom-red transition-colors duration-200">E-Commerce</router-link></li>
            <li><router-link to="/skill-trade" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Skill Trade Services</router-link></li>
            <li><router-link to="/professional-services" class="text-gray-400 hover:text-custom-red transition-colors duration-200">Professional Services</router-link></li>
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
              <span class="text-gray-400">1800 hwy 90 ste 263, gautier ms 39553</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-custom-red mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
              <span class="text-gray-400">888-440-0936</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-custom-red mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <span class="text-gray-400">info@hurricanepayments.com</span>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Divider -->
      <div class="border-t border-gray-800 my-8"></div>
      
      <!-- Footer bottom with copyright and links -->
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="text-gray-500 text-sm mb-4 md:mb-0">
          © 2025 Hurricane Payments. All rights reserved.
        </div>
        <div class="flex space-x-6">
          <router-link to="/privacy-policy" target="_blank" rel="noopener noreferrer" class="text-sm text-gray-500 hover:text-gray-300 transition-colors duration-200">Privacy Policy</router-link>
          <router-link to="/privacy-policy#agreement-terms" target="_blank" rel="noopener noreferrer" class="text-sm text-gray-500 hover:text-gray-300 transition-colors duration-200">Terms of Service</router-link>
          
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import logoImg from '@/../images/TransparentWhiteLogo.png';
</script>
