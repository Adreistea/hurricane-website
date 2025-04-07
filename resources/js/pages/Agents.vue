<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="py-20 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
      <div class="container mx-auto px-6">
        <div class="max-w-3xl">
          <h1 class="text-5xl font-bold mb-6">Join Our Agent Program</h1>
          <p class="text-xl mb-8">Partner with us to grow your business and provide your clients with industry-leading payment processing solutions.</p>
          <router-link to="/request-consultation" class="bg-white text-blue-800 font-semibold py-3 px-8 rounded-md shadow-lg hover:bg-gray-100 transition-all duration-300">
            Become an Agent
          </router-link>
        </div>
      </div>
    </div>

    <!-- Benefits Section -->
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Agent Program Benefits</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-blue-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Competitive Compensation</h3>
            <p class="text-gray-600">Earn industry-leading commissions and residual income on every account you bring in.</p>
          </div>
          
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-blue-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Comprehensive Support</h3>
            <p class="text-gray-600">Get access to marketing materials, sales training, and dedicated support to help you succeed.</p>
          </div>
          
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-blue-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Industry-Leading Products</h3>
            <p class="text-gray-600">Offer your clients cutting-edge payment solutions that meet their specific business needs.</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="py-16 bg-blue-800 text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Grow Your Business?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Join our agent program today and start offering industry-leading payment processing solutions to your clients.</p>
        <router-link to="/request-consultation" class="bg-white text-blue-800 font-semibold py-3 px-8 rounded-md shadow-lg hover:bg-gray-100 transition-all duration-300">
          Apply Now
        </router-link>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import MainLayout from './MainLayout.vue';
</script>
