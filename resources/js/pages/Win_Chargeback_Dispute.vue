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
            How to Win a Chargeback Dispute
          </h1>
          <p 
            class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
          >
            A Step-by-Step Process
          </p>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="guide-content py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
          <div class="prose prose-lg mb-16 scroll-reveal">
            <p>Winning a chargeback dispute starts with preparation. For coffee shop and restaurant owners, being organized is your best defense. The first thing to do is review the chargeback notification for the reason code and deadline. Each code requires a different type of evidence.</p>
            
            <p>Next, gather your documentation. This could include order details, signed receipts, time-stamped POS records, loyalty program check-ins, photos of takeout or dine-in tickets, and even surveillance footage if available. Highlight any proof that shows the transaction was authorized and completed properly.</p>
            
            <p>When writing your response, be clear and factual. Avoid emotional language and focus on explaining what happened, referencing your attached evidence. For example: 'Customer placed a mobile order for a cappuccino and sandwich. Order was picked up at 2:15 PM, confirmed by receipt and camera footage.'</p>
            
            <p>Use a reliable format when submitting documents. Label each piece clearly (e.g., 'Receipt - 4/1/25, Order #1095') and submit them as PDFs or JPEGs, depending on processor requirements.</p>
            
            <p>Finally, follow up with your payment processor if you don't hear back. Not every dispute will go in your favor, but detailed responses and organized records will greatly increase your chances of winning chargebacks and protecting your revenue.</p>
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

    <!-- Steps Section -->
    <section class="bg-gray-50 py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">The Dispute Process</h2>
          
          <div class="space-y-6">
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md relative pl-20">
              <div class="absolute left-4 top-6 w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center text-xl font-bold">1</div>
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Review the Chargeback Notice</h3>
              <p class="text-gray-700">Carefully examine the reason code and deadline. Make note of exactly what type of evidence is required based on the specific reason given for the dispute.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md relative pl-20">
              <div class="absolute left-4 top-6 w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center text-xl font-bold">2</div>
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Gather Your Evidence</h3>
              <p class="text-gray-700">Collect all relevant documentation: receipts, order details, POS records, photos, delivery confirmations, and any other proof that the transaction was legitimate.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md relative pl-20">
              <div class="absolute left-4 top-6 w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center text-xl font-bold">3</div>
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Craft Your Response</h3>
              <p class="text-gray-700">Write a clear, fact-based explanation that references your evidence. Stay professional and avoid emotional arguments, focusing on the transaction details.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md relative pl-20">
              <div class="absolute left-4 top-6 w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center text-xl font-bold">4</div>
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Submit Documentation</h3>
              <p class="text-gray-700">Format all documents clearly with proper labels. Submit everything before the deadline through your payment processor's specified submission method.</p>
            </div>
            
            <!-- Step 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md relative pl-20">
              <div class="absolute left-4 top-6 w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center text-xl font-bold">5</div>
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Follow Up and Learn</h3>
              <p class="text-gray-700">Check the status of your dispute periodically. Whether you win or lose, learn from the experience to help prevent similar situations in the future.</p>
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
            
            <router-link to="/chargeback-guide#section-3" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Preventing Friendly Fraud</h3>
              <p class="text-gray-600">Discover effective techniques to prevent and combat friendly fraud in your food service business.</p>
            </router-link>
            
            <router-link to="/chargeback-guide#section-4" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Documenting Transactions</h3>
              <p class="text-gray-600">Learn how proper documentation can be your best defense against illegitimate chargebacks.</p>
            </router-link>
            
            <router-link to="/chargeback-guide#section-7" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Delivery Order Chargebacks</h3>
              <p class="text-gray-600">Find out how to protect your business from delivery-related chargeback disputes.</p>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Need help with chargeback disputes?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you implement systems to reduce chargebacks and increase your chances of winning disputes.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
          <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
            Download Dispute Checklist
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
