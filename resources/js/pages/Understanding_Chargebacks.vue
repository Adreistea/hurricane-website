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
            Understanding Chargebacks
          </h1>
          <p 
            class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
          >
            A Guide for Coffee Shop and Restaurant Owners
          </p>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="guide-content py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
          <div class="prose prose-lg mb-16 scroll-reveal">
            <p>Chargebacks can be frustrating and costly for coffee shop and restaurant owners. When a customer disputes a charge with their credit card issuer, the funds are withdrawn from your account-often without warning. While some chargebacks are legitimate, many are preventable with the right systems in place.</p>
            
            <p>The first step in responding to a chargeback is understanding the reason code. This code explains why the charge was disputed: unauthorized transaction, item not received, quality issues, or duplicate charges. Once you know the reason, gather your evidence. For restaurants, this could include signed receipts, order tickets, POS transaction records, or even security footage.</p>
            
            <p>Timeliness is key-respond to the chargeback within the window allowed by your payment processor. Submit all documentation clearly and concisely. Explain the situation, provide evidence that the transaction was valid, and demonstrate that you followed best practices.</p>
            
            <p>Prevention is also vital. Ensure your staff checks ID for large transactions or card-not-present scenarios. Make your refund and cancellation policies clear and visible. Use a strong POS system that captures digital signatures and timestamps.</p>
            
            <p>Lastly, remember chargebacks are part of doing business, but they don't have to eat into your profits. By understanding the process and being proactive, you can protect your coffee shop or restaurant from unnecessary losses.</p>
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

    <!-- Related Topics Section -->
    <section class="bg-gray-50 py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Related Topics</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <router-link to="/chargeback-guide#section-2" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">How to Win a Dispute</h3>
              <p class="text-gray-600">Learn step-by-step strategies for successfully disputing chargebacks and protecting your revenue.</p>
            </router-link>
            
            <router-link to="/chargeback-guide#section-3" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Preventing Friendly Fraud</h3>
              <p class="text-gray-600">Discover effective techniques to prevent and combat friendly fraud in your food service business.</p>
            </router-link>
            
            <router-link to="/chargeback-guide#section-4" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Documenting Transactions</h3>
              <p class="text-gray-600">Learn how proper documentation can be your best defense against illegitimate chargebacks.</p>
            </router-link>
            
            <router-link to="/chargeback-guide#section-8" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Staff Training</h3>
              <p class="text-gray-600">Find out how to train your team to help prevent chargebacks before they happen.</p>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Need help with chargebacks?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you implement systems to reduce chargebacks and protect your revenue.</p>
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
