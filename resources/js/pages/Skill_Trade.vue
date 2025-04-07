<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-amber-600 font-semibold delay-100">Industry Solutions</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Skilled Trade Services
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Empower your skilled trade business with payment solutions designed for contractors, electricians, plumbers, HVAC technicians, and other field service professionals.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <a href="#" class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
             style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </a>
          
          <a href="#" class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
             style="border-color: #973131; color: #973131;">
            View Pricing
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img src="@/../images/TransparentLogo.png" alt="Skilled Trade Services" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-amber-100 to-yellow-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-yellow-100 to-amber-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Solutions Section -->
    <div class="relative py-24 mt-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Payment Solutions for Skilled Trades</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <!-- Solutions container with border -->
        <div class="solutions-container relative rounded-3xl border border-gray-300 bg-white p-6 md:p-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Mobile Payments -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="0">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-amber-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-amber-500">Mobile Payments</h2>
              </div>
              <p class="text-gray-700">
                Accept payments on-site using your smartphone or tablet with mobile card readers, helping you get paid faster without having to send invoices.
              </p>
            </div>

            <!-- Invoicing & Scheduling -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="200">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-orange-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-orange-500">Digital Invoicing</h2>
              </div>
              <p class="text-gray-700">
                Send professional digital invoices instantly from the field with payment links, allowing customers to pay immediately while you're still on site.
              </p>
            </div>

            <!-- Text & QR Payments -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-sm scroll-reveal opacity-0 solution-card" data-delay="400">
              <div class="flex flex-row items-center mb-4">
                <div class="w-14 h-14 mr-4 text-yellow-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-yellow-500">Contactless Payments</h2>
              </div>
              <p class="text-gray-700">
                Offer touch-free payment options with text-to-pay links and QR codes, providing convenience and safety for your customers.
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
          <h2 class="text-4xl font-bold mb-4" style="color: #973131;">Benefits for Skilled Trade Businesses</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <!-- Left Column -->
          <div class="space-y-8">
            <!-- Benefit 1 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="0">
              <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-yellow-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Get Paid Faster</h3>
                <p class="text-gray-700">
                  Accept payments on the spot instead of waiting for checks or invoice payments, improving cash flow for your business.
                </p>
              </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="100">
              <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-amber-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Enhanced Customer Experience</h3>
                <p class="text-gray-700">
                  Provide multiple payment options that cater to customer preferences, creating a more professional and convenient experience.
                </p>
              </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="200">
              <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-rose-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Secure Transactions</h3>
                <p class="text-gray-700">
                  Protect your business and customers with encrypted payment processing that meets industry security standards.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Right Column -->
          <div class="space-y-8">
            <!-- Benefit 4 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="300">
              <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Simplified Record Keeping</h3>
                <p class="text-gray-700">
                  Automatically track payments, generate reports, and integrate with accounting software to streamline your business operations.
                </p>
              </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="400">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Build Customer Loyalty</h3>
                <p class="text-gray-700">
                  Create repeat business by providing a professional payment experience that distinguishes your service from competitors.
                </p>
              </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="flex items-start scroll-reveal opacity-0" data-delay="500">
              <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-violet-400 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2 text-gray-900">Business Insights</h3>
                <p class="text-gray-700">
                  Gain valuable data on service trends, payment patterns, and customer preferences to make informed business decisions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to streamline your trade business payments?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our skilled trade payment solutions are designed to help you get paid faster, reduce paperwork, and focus on what you do best.</p>
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
