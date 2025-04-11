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
            Tracking and Analyzing Chargebacks
          </h1>
          <p 
            class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
          >
            Turn Data into Actionable Insights
          </p>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="guide-content py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
          <div class="prose prose-lg mb-16 scroll-reveal">
            <p>Chargebacks aren't just a financial headache-they can also be a learning opportunity. Tracking and analyzing chargebacks can help you uncover patterns and improve your restaurant's operations.</p>
            
            <p>Start by keeping a log of all disputes. Note the date, amount, reason code, and outcome. Over time, you may see trends. Are disputes happening more with online orders? Certain staff members? Specific menu items?</p>
            
            <p>Once you identify a pattern, dig into the root cause. If many chargebacks cite order not received, maybe your delivery process needs refining. If customers claim unauthorized transaction, your card verification procedures might need work.</p>
            
            <p>Use this data in staff training and system updates. Maybe you'll change your refund policy, upgrade your POS, or start taking photos of delivery drop-offs.</p>
            
            <p>Your payment processor may offer reporting tools or alerts to help you monitor your chargeback ratio. Keeping this ratio low helps you avoid penalties or higher processing fees.</p>
            
            <p>By turning chargeback data into insights, you can take proactive steps to boost customer satisfaction, prevent fraud, and protect your bottom line.</p>
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

    <!-- Analysis Strategies Section -->
    <section class="bg-gray-50 py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Key Analysis Strategies</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Strategy 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Data Collection</h3>
              </div>
              <p class="text-gray-700">Maintain detailed records of every chargeback, including dates, amounts, reason codes, and final outcomes. Create a standardized logging system for consistency.</p>
            </div>
            
            <!-- Strategy 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Pattern Recognition</h3>
              </div>
              <p class="text-gray-700">Regularly analyze your chargeback data to identify trends in timing, transaction types, or specific products/services that are frequently disputed.</p>
            </div>
            
            <!-- Strategy 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Root Cause Analysis</h3>
              </div>
              <p class="text-gray-700">Investigate the underlying causes of chargebacks by examining operational procedures, staff training, and customer communication methods.</p>
            </div>
            
            <!-- Strategy 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
              <div class="flex items-start mb-4">
                <div class="bg-red-100 rounded-full p-3 mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold" style="color: #973131;">Response Time Tracking</h3>
              </div>
              <p class="text-gray-700">Monitor how quickly your team responds to disputes and measure the success rate of responses submitted within different timeframes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Topics Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Related Topics</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <router-link to="/chargeback-prevention" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Chargeback Prevention</h3>
              <p class="text-gray-600">Learn proactive strategies to prevent chargebacks before they occur.</p>
            </router-link>
            
            <router-link to="/data-driven-decisions" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Data-Driven Decisions</h3>
              <p class="text-gray-600">Use your chargeback data to make informed business decisions and improvements.</p>
            </router-link>
            
            <router-link to="/staff-training" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Staff Training</h3>
              <p class="text-gray-600">Train your team to recognize patterns and respond effectively to potential dispute situations.</p>
            </router-link>
            
            <router-link to="/customer-communication" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              <h3 class="text-xl font-bold mb-3" style="color: #973131;">Customer Communication</h3>
              <p class="text-gray-600">Improve communication strategies to reduce chargebacks and increase customer satisfaction.</p>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Ready to improve your chargeback management?</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our experts can help you implement effective tracking systems and analyze your chargeback data.</p>
        <div class="scroll-reveal opacity-0 delay-300">
          <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
            Request a Consultation
          </router-link>
          <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
            Download Analysis Guide
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
  const slideElements = document.querySelectorAll('.slide-in-left, .slide-in-right');
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

/* Animations */
.scroll-reveal {
  transform: translateY(20px);
  opacity: 0;
  transition: all 0.6s ease-out;
}

.scroll-reveal.animate {
  opacity: 1 !important;
  transform: translateY(0);
}

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
.delay-200 {
  transition-delay: 0.2s;
}

.delay-300 {
  transition-delay: 0.3s;
}
</style>
