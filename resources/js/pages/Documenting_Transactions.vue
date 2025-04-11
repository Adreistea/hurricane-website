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
            Documenting Transactions
          </h1>
          <p 
            class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
          >
            Your First Line of Defense Against Chargebacks
          </p>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="guide-content py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
          <div class="prose prose-lg mb-16 scroll-reveal">
            <p>Proper documentation can make or break your chargeback case. In the fast-paced world of restaurants and coffee shops, keeping track of transactions isn't just good practice-it's essential.</p>
            
            <p>Every transaction should generate a detailed receipt that includes the date, time, items purchased, amount, and payment method. Make sure your POS system stores digital copies automatically. If customers sign or tip, keep a copy of the signed receipt as well.</p>
            
            <p>Train your staff to note any special instructions, delivery confirmations, or unusual situations in the system. If a customer disputes an order for being wrong or missing, your staff's notes can support your case.</p>
            
            <p>For online or phone orders, store email confirmations or delivery app receipts. If you use delivery drivers, have them log delivery times and request signatures or photos of where the food was left.</p>
            
            <p>Surveillance footage can be especially helpful. If your cameras show a customer picking up their order, that's powerful evidence in a dispute. Keep video footage for at least 30 days if possible.</p>
            
            <p>Consistent documentation builds a strong foundation for responding to chargebacks. It also sends a message to card issuers that your business takes fraud prevention seriously.</p>
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

    <!-- Documentation Strategies Section -->
    <section class="bg-gray-50 py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Effective Documentation Strategies</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Strategy 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Detailed Receipts</h3>
              </div>
              <p class="text-gray-700">Create detailed receipts that include your business name, date, time, employee ID, itemized purchases, and payment method. Make sure your business name on receipts matches what appears on credit card statements.</p>
            </div>
            
            <!-- Strategy 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Digital Storage</h3>
              </div>
              <p class="text-gray-700">Store all transaction records digitally with a reliable backup system. Most modern POS systems automatically archive transactions, but establish a procedure for regular data backups and verification.</p>
            </div>
            
            <!-- Strategy 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Capture Signatures</h3>
              </div>
              <p class="text-gray-700">Always collect signatures for in-person transactions over a certain amount. Digital signature pads or tablets are ideal, as they timestamp the signature and link it directly to the transaction record.</p>
            </div>
            
            <!-- Strategy 4 -->
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
              <p class="text-gray-700">Take photos of prepared orders for pickup or delivery. Many restaurants now photograph bagged orders with receipts visible, providing evidence that the order was prepared as requested and ready for pickup.</p>
            </div>
            
            <!-- Strategy 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Video Surveillance</h3>
              </div>
              <p class="text-gray-700">Maintain security cameras covering order pickup areas and payment terminals. Store footage for at least 30 days, and ensure your system records with timestamps that can be easily retrieved if needed.</p>
            </div>
            
            <!-- Strategy 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Delivery Confirmations</h3>
              </div>
              <p class="text-gray-700">For deliveries, use tracking systems that confirm when orders are delivered. Whether through a third-party app or your own system, collect delivery time, location data, and if possible, confirmation photos.</p>
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
            
            <router-link to="/preventing-friendly-fraud" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Preventing Friendly Fraud</h3>
              <p class="text-gray-600">Learn strategies to prevent customers from filing fraudulent chargebacks against your business.</p>
            </router-link>
            
            <router-link to="/chargeback-guide#section-5" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Using Your POS System</h3>
              <p class="text-gray-600">Discover how to leverage your POS system as a powerful tool against chargebacks.</p>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to improve your documentation?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you implement systems to document transactions effectively and protect your business from chargebacks.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
          <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
            Download Documentation Guide
          </a>
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
