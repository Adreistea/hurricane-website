<template>
<MainLayout>
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container mx-auto px-4 py-20 md:py-32">
      <div class="hero-content max-w-4xl mx-auto text-center">
        <h1 
          class="text-3xl md:text-5xl font-bold mb-6 text-gray-800 slide-in-left"
          style="color: #973131;"
        >
          Preventing Friendly Fraud
        </h1>
        <p 
          class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
        >
          In Your Café or Restaurant
        </p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="guide-content py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto">
        <div class="prose prose-lg mb-16 scroll-reveal">
          <p>Friendly fraud occurs when a customer makes a purchase, then disputes the charge even though the transaction was valid. It's common in restaurants and cafés where customers may forget they made the purchase or regret spending money.</p>
          
          <p>To reduce friendly fraud, set clear expectations and create a paper trail. Always provide itemized receipts and make your return/refund policy visible-on the counter, your website, and even on the receipt. If a customer signs for a purchase, keep that signature on file.</p>
          
          <p>Use a POS system that tracks orders with time stamps, item descriptions, and employee IDs. Encourage staff to enter customer names or phone numbers when taking orders, especially for takeout or large orders. For phone or online orders, send order confirmations by text or email.</p>
          
          <p>Train your staff to recognize suspicious behavior and verify customer identity if something seems off. Asking for ID isn't rude-it's protection. Make sure all staff follow the same protocol to maintain consistency.</p>
          
          <p>Lastly, consider enrolling in chargeback alert programs that notify you of a dispute before it becomes a chargeback. These give you the chance to issue a refund directly and avoid fees. A proactive approach to friendly fraud helps maintain trust while protecting your business.</p>
        </div>

        <!-- Back to Guide Button -->
        <div class="text-center mb-16">
          <router-link 
            to="/chargeback-guide" 
            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Complete Chargeback Guide
          </router-link>
        </div>
      </div>
    </div>
  </div>

  <!-- Prevention Strategies Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Effective Prevention Strategies</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Strategy 1 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Clear Documentation</h3>
            </div>
            <p class="text-gray-700">Provide detailed receipts with your business name, transaction date/time, itemized purchases, and total amount. Keep digital copies of all transactions including signatures when applicable.</p>
          </div>
          
          <!-- Strategy 2 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Customer Verification</h3>
            </div>
            <p class="text-gray-700">Verify customer identity for large orders or suspicious transactions. Record customer names, phone numbers, and email addresses in your POS system, especially for takeout or delivery orders.</p>
          </div>
          
          <!-- Strategy 3 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Timely Order Confirmations</h3>
            </div>
            <p class="text-gray-700">Send order confirmations immediately via text or email for online or phone orders. Include detailed order information, timing, and contact information in case of questions or issues.</p>
          </div>
          
          <!-- Strategy 4 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Clear Refund Policies</h3>
            </div>
            <p class="text-gray-700">Make your refund and return policies visible on menus, websites, receipts, and in-store signage. Train staff to explain your policies when handling customer complaints or issues.</p>
          </div>
          
          <!-- Strategy 5 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Staff Training</h3>
            </div>
            <p class="text-gray-700">Train all staff on proper transaction handling and record-keeping. Ensure they understand how to spot warning signs of potential friendly fraud and what documentation to collect.</p>
          </div>
          
          <!-- Strategy 6 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Chargeback Alerts</h3>
            </div>
            <p class="text-gray-700">Enroll in chargeback alert services with your payment processor. These will notify you when a customer initiates a dispute, giving you time to issue a refund before formal chargeback fees apply.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Topics Section -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Related Topics</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <router-link to="/understanding-chargebacks" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Understanding Chargebacks</h3>
            <p class="text-gray-600">Learn the basics of chargebacks and how they affect your coffee shop or restaurant.</p>
          </router-link>
          
          <router-link to="/win-chargeback-dispute" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">How to Win a Dispute</h3>
            <p class="text-gray-600">Discover effective techniques for successfully disputing chargebacks when they occur.</p>
          </router-link>
          
          <router-link to="/documenting-transactions" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Documenting Transactions</h3>
            <p class="text-gray-600">Learn how proper documentation can be your best defense against illegitimate chargebacks.</p>
          </router-link>
          
          <router-link to="/chargeback-guide#section-9" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Customer Communication</h3>
            <p class="text-gray-600">Find out how clear customer communication helps prevent disputes before they happen.</p>
          </router-link>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to reduce friendly fraud?</h2>
      <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you implement systems to prevent friendly fraud and protect your revenue.</p>
      <div class="scroll-reveal opacity-0 delay-300">
        <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block">
          Request a Consultation
        </router-link>
      </div>
    </div>
  </section>
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

/* Hero Section */
.hero-section {
  background: linear-gradient(to right, #ffffff, #f3f4f6);
  position: relative;
}

.hero-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('/img/pattern-dots.svg');
  background-size: 20px;
  opacity: 0.1;
  pointer-events: none;
}

/* Override default prose styles */
.prose p {
  margin-bottom: 1.25rem;
  line-height: 1.6;
  font-weight: 400;
  font-family: 'Inter', system-ui, sans-serif;
}

.prose a {
  color: #973131;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s;
  font-family: 'Inter', system-ui, sans-serif;
}

.prose a:hover {
  color: #7e2929;
  text-decoration: underline;
}

.prose strong {
  color: #1f2937;
  font-weight: 600;
}

/* Base animations */
.scroll-reveal {
  transform: translateY(20px);
  opacity: 0;
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
</style>