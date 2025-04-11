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
          Delivery Order Chargebacks
        </h1>
        <p 
          class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
        >
          Protecting Your Revenue in the Age of Food Delivery
        </p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="guide-content py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto">
        <div class="prose prose-lg mb-16 scroll-reveal">
          <p>Delivery orders are particularly vulnerable to chargebacks because the customer isn't present during the transaction. But that doesn't mean you're defenseless.</p>
          
          <p>To protect your business, document every part of the delivery process. Use order confirmations, delivery app logs, and customer contact records. If your delivery staff snap a photo of the food drop-off or get a signature, save that as evidence.</p>
          
          <p>Include customer names and phone numbers in the POS. Match delivery timestamps with the POS receipt. If you use third-party services like Uber Eats or DoorDash, keep copies of the completed delivery status.</p>
          
          <p>If a chargeback occurs, gather these records and submit them quickly. Show that the order was placed, fulfilled, and delivered. Include GPS logs if available.</p>
          
          <p>You can also contact the delivery platform to help fight the dispute. Some platforms have their own chargeback procedures and may provide additional documentation.</p>
          
          <p>In the future, make your delivery terms clear at checkout-especially for no-contact delivery or policies about incorrect addresses. With the right system in place, you can reduce risk while continuing to offer great service.</p>
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

  <!-- Delivery Protection Strategies Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Delivery Protection Strategies</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Strategy 1 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Photo Documentation</h3>
            </div>
            <p class="text-gray-700">Require delivery drivers to take photos of completed deliveries, especially for "leave at door" orders. Time-stamped photos showing the food at the specified location create strong evidence against "order not received" claims.</p>
          </div>
          
          <!-- Strategy 2 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">SMS Delivery Confirmations</h3>
            </div>
            <p class="text-gray-700">Send automated text confirmations when orders are delivered. Including a photo of the delivered items in these messages creates a communication trail that shows the customer was notified of delivery.</p>
          </div>
          
          <!-- Strategy 3 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">GPS Tracking Records</h3>
            </div>
            <p class="text-gray-700">Implement GPS tracking in your delivery process to document that drivers visited the delivery location. These digital breadcrumbs can help prove delivery actually occurred and at what time.</p>
          </div>
          
          <!-- Strategy 4 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Digital Signatures</h3>
            </div>
            <p class="text-gray-700">For higher-value orders, consider requiring digital signatures for delivery confirmation. Many delivery apps and POS systems support electronic signature capture, providing strong verification of order receipt.</p>
          </div>
          
          <!-- Strategy 5 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m-6-8h6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Detailed Order Policies</h3>
            </div>
            <p class="text-gray-700">Create clear, detailed delivery policies that customers must acknowledge during checkout. These should cover missing items, temperature expectations, delivery windows, and what to do if issues arise.</p>
          </div>
          
          <!-- Strategy 6 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Customer Communication</h3>
            </div>
            <p class="text-gray-700">Proactively communicate with customers about their delivery status. Send notifications when the order is received, being prepared, and out for delivery. This builds transparency and reduces "where's my order?" inquiries.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Third-Party Delivery Section -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Working With Third-Party Platforms</h2>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="prose prose-lg mx-auto">
            <p>Many restaurants rely on third-party delivery platforms like Uber Eats, DoorDash, and Grubhub. These services create additional complexity when handling chargebacks. Here's how to navigate them effectively:</p>
            
            <h3 class="text-xl font-bold mt-6" style="color: #973131;">Understanding Platform Policies</h3>
            <p>Each delivery platform has its own dispute resolution process. Familiarize yourself with these policies, as they may differ from your payment processor's procedures. Some platforms may absorb certain chargeback costs or provide their own evidence in disputes.</p>
            
            <h3 class="text-xl font-bold mt-6" style="color: #973131;">Maintaining Platform Records</h3>
            <p>Export and save records from delivery platforms regularly, including:</p>
            <ul class="list-disc pl-6">
              <li>Order confirmations and receipts</li>
              <li>Delivery confirmation screenshots</li>
              <li>Customer communications within the platform</li>
              <li>Delivery status updates and timestamps</li>
            </ul>
            
            <h3 class="text-xl font-bold mt-6" style="color: #973131;">Platform-Specific Protections</h3>
            <p>Take advantage of platform-specific features designed to reduce disputes:</p>
            <ul class="list-disc pl-6">
              <li>DoorDash's photo confirmation feature</li>
              <li>Uber Eats' PIN verification for alcohol deliveries</li>
              <li>Grubhub's driver tracking and ETA updates</li>
            </ul>
            
            <h3 class="text-xl font-bold mt-6" style="color: #973131;">Direct Integration Benefits</h3>
            <p>When possible, integrate third-party platforms directly with your POS system. This creates a unified record of all transactions across channels, making it easier to gather evidence if a chargeback occurs.</p>
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
          <router-link to="/documenting-transactions" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Documenting Transactions</h3>
            <p class="text-gray-600">Learn detailed strategies for creating foolproof documentation of all your transactions.</p>
          </router-link>
          
          <router-link to="/refund-fight-chargeback" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">When to Refund vs. Fight</h3>
            <p class="text-gray-600">Discover when it makes sense to fight a delivery-related chargeback and when to issue a refund.</p>
          </router-link>
          
          <router-link to="/chargeback-guide#section-9" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Customer Communication</h3>
            <p class="text-gray-600">Learn how clear communication with customers can prevent delivery chargebacks.</p>
          </router-link>
          
          <router-link to="/preventing-friendly-fraud" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Preventing Friendly Fraud</h3>
            <p class="text-gray-600">Strategies to combat customers who falsely claim they didn't receive their delivery.</p>
          </router-link>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Optimize your delivery process</h2>
      <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you implement secure delivery practices that minimize chargebacks while maintaining customer satisfaction.</p>
      <div class="scroll-reveal opacity-0 delay-300">
        <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
          Request a Consultation
        </router-link>
        <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
          Download Delivery Guide
        </a>
      </div>
    </div>
  </section>
</MainLayout>
</template>

<script setup>
import { onMounted } from 'vue';
import MainLayout from './MainLayout.vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';

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
