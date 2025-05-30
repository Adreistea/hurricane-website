<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="py-20 bg-gradient-to-br from-indigo-900 to-indigo-700 text-white">
      <div class="container mx-auto px-6">
        <div class="max-w-3xl">
          <h1 class="text-5xl font-bold mb-6">Payment Partnerships</h1>
          <p class="text-xl mb-8">Integrate our payment solutions and grow your business with our partnership program.</p>
        </div>
      </div>
    </div>

    <!-- Application Form Section - Moved above Partnership Opportunities -->
    <div class="py-16 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Become a Partner</h2>
        <p class="text-xl text-center mb-12 max-w-2xl mx-auto">Fill out the form below to apply for our partnership program.</p>
        
        <!-- Embedded iframe for the partnership application form -->
        <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="relative" style="height: 1590px;">
            <iframe 
              src="https://crm.hurricanepayments.com/inquiries#partnership" 
              class="w-full h-full"
              frameborder="0"
              scrolling="no"
              style="overflow: hidden;"
            ></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Partnership Types Section -->
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Partnership Opportunities</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-indigo-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Technology Partners</h3>
            <p class="text-gray-600">Integrate our payment solutions into your software or platform to provide seamless payment experiences.</p>
          </div>
          
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-indigo-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Sales Partnerships</h3>
            <p class="text-gray-600">Partner with us to resell our payment solutions and earn competitive commissions.</p>
          </div>
          
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-indigo-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Strategic Alliances</h3>
            <p class="text-gray-600">Form a strategic alliance to combine resources and expertise for mutual growth.</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="py-16">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Partnership Benefits</h2>
        <div class="grid md:grid-cols-2 gap-12">
          <div>
            <h3 class="text-2xl font-semibold mb-4">Why Partner With Us?</h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <svg class="h-6 w-6 text-indigo-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Competitive revenue sharing models</span>
              </li>
              <li class="flex items-start">
                <svg class="h-6 w-6 text-indigo-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Dedicated partner support team</span>
              </li>
              <li class="flex items-start">
                <svg class="h-6 w-6 text-indigo-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Access to our comprehensive API documentation</span>
              </li>
              <li class="flex items-start">
                <svg class="h-6 w-6 text-indigo-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Joint marketing opportunities</span>
              </li>
              <li class="flex items-start">
                <svg class="h-6 w-6 text-indigo-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Regular training and updates on new features</span>
              </li>
            </ul>
          </div>
          <div>
            <img src="@/../images/homepic.png" alt="Partnership" class="rounded-lg shadow-xl" 
                 onerror="this.src='https://via.placeholder.com/600x400?text=Partnership+Image'; this.onerror=null;">
          </div>
        </div>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import MainLayout from './MainLayout.vue';
</script>

<style scoped>
/* Ensure iframe displays properly without scrollbars */
iframe {
  min-height: 6000px;
  height: 100%;
  width: 100%;
  border: none;
  transition: opacity 0.3s ease;
  overflow: hidden;
}

/* Make iframe container responsive */
.relative {
  overflow: hidden;
}

@media (max-width: 768px) {
  .relative {
    height: 6500px !important; /* Increase height on mobile to prevent scrolling */
  }
}
</style>
