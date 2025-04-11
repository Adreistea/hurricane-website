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
          When to Refund and When to Fight
        </h1>
        <p 
          class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
        >
          Strategic Decision-Making for Restaurant & Café Chargebacks
        </p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="guide-content py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto">
        <div class="prose prose-lg mb-16 scroll-reveal">
          <p>As a coffee shop or restaurant owner, it's important to pick your battles. Not every chargeback is worth fighting, especially if the dispute amount is small or the customer truly had a poor experience.</p>
          
          <p>Start by reviewing the reason code. If it's due to fraud (like a stolen card), and you didn't follow proper verification steps, it may be easier to issue a refund and move on. However, if you have strong evidence the transaction was valid-signed receipts, camera footage, and detailed POS records-then it may be worth your time to challenge it.</p>
          
          <p>Consider the customer's history. Is this a regular guest or someone with repeated complaints? If it's the latter, defending the chargeback helps prevent repeat abuse.</p>
          
          <p>Also factor in your processor's chargeback fee. Sometimes, disputing a $4 coffee charge with a $25 fee just isn't worth it. But if the ticket was $100 for catering or a group order, defending your revenue makes more sense.</p>
          
          <p>In some cases, issuing a refund directly can help de-escalate the situation and avoid additional fees. Use your judgment-and always document your decision.</p>
          
          <p>Ultimately, knowing when to refund versus when to fight can save you time, money, and customer goodwill.</p>
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

  <!-- Decision Framework Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Decision Framework</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- When to Refund -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">When to Refund</h3>
            </div>
            <ul class="text-gray-700 space-y-2">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Small transaction amounts (under $20)</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Genuine customer complaints with merit</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Loyal customers with good history</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>When your evidence is weak or incomplete</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>When chargeback fees exceed transaction value</span>
              </li>
            </ul>
          </div>
          
          <!-- When to Fight -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">When to Fight</h3>
            </div>
            <ul class="text-gray-700 space-y-2">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Larger transactions (over $50)</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>When you have strong evidence (signatures, photos)</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Customers with history of disputes</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Clear cases of friendly fraud</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>If not fighting would encourage more disputes</span>
              </li>
            </ul>
          </div>
          
          <!-- Cost Analysis -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Cost Analysis</h3>
            </div>
            <p class="text-gray-700 mb-4">Always calculate the total cost of fighting versus refunding:</p>
            <ul class="text-gray-700 space-y-2">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Chargeback fees ($15-$50 depending on processor)</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Staff time to gather and submit evidence</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Potential negative reviews if customer is angered</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Risk of higher chargeback ratios affecting rates</span>
              </li>
            </ul>
          </div>
          
          <!-- Long-Term Strategy -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Long-Term Strategy</h3>
            </div>
            <p class="text-gray-700 mb-4">Look beyond individual cases to develop a consistent approach:</p>
            <ul class="text-gray-700 space-y-2">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Set clear dollar thresholds for automatic disputes</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Create a customer flagging system for repeat offenders</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Document decisions for consistency and training</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-red-800 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Implement preventative measures from each case</span>
              </li>
            </ul>
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
            <p class="text-gray-600">Discover effective techniques for successfully disputing chargebacks when you decide to fight.</p>
          </router-link>
          
          <router-link to="/preventing-friendly-fraud" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Preventing Friendly Fraud</h3>
            <p class="text-gray-600">Learn strategies to prevent customers from filing fraudulent chargebacks against your business.</p>
          </router-link>
          
          <router-link to="/chargeback-guide#section-9" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Customer Communication</h3>
            <p class="text-gray-600">Discover how clear communication with customers can prevent chargebacks before they happen.</p>
          </router-link>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Need help with chargeback decisions?</h2>
      <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you develop a strategic approach to handling chargebacks that protects your revenue.</p>
      <div class="scroll-reveal opacity-0 delay-300">
        <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
          Request a Consultation
        </router-link>
        <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
          Download Chargeback Decision Guide
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
