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
          Staff Training
        </h1>
        <p 
          class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
        >
          How Proper Training Reduces Chargebacks in Your Restaurant or Café
        </p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="guide-content py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto">
        <div class="prose prose-lg mb-16 scroll-reveal">
          <p>Well-trained staff are your frontline defense against chargebacks. Every employee—from baristas to servers to cashiers—should know how to handle transactions properly and spot red flags.</p>
          
          <p>Train your team to always offer receipts, check ID for large or suspicious purchases, and confirm names on mobile or phone orders. If a customer claims an item is missing, staff should document the complaint in the POS.</p>
          
          <p>For in-person orders, staff should ensure the correct card is used, especially if customers use mobile wallets. Always use chip or contactless payments when possible, since swiped transactions are less secure and harder to defend.</p>
          
          <p>Teach staff to note order modifications and customer complaints clearly. If a refund is issued, it should be recorded in the system, with a note as to why.</p>
          
          <p>Regularly reviewing chargeback cases during staff meetings can be helpful too. Let employees know what went wrong and how it could be prevented next time.</p>
          
          <p>Chargebacks are often caused by avoidable miscommunications or oversights. By equipping your team with the right knowledge and expectations, you minimize the chances of disputes and build a culture of accountability.</p>
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

  <!-- Training Strategies Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Effective Training Strategies</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Strategy 1 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Comprehensive Onboarding</h3>
            </div>
            <p class="text-gray-700">Create a detailed training manual that specifically addresses chargeback prevention. Include sections on card verification, proper documentation, and recognizing suspicious behavior. Make this a key part of all new employee onboarding.</p>
          </div>
          
          <!-- Strategy 2 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Transaction Checklists</h3>
            </div>
            <p class="text-gray-700">Develop simple checklists for different transaction types (dine-in, takeout, delivery, etc.) that staff can reference during busy periods. These should include verification steps that protect against common chargeback scenarios.</p>
          </div>
          
          <!-- Strategy 3 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Role-Playing Exercises</h3>
            </div>
            <p class="text-gray-700">Conduct regular role-playing sessions where staff practice handling common high-risk scenarios: large orders, suspicious behavior, missing items complaints, and requests for unusual payment arrangements.</p>
          </div>
          
          <!-- Strategy 4 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Case Study Reviews</h3>
            </div>
            <p class="text-gray-700">Review actual chargeback cases with your team (anonymized as needed). Discuss what happened, why the chargeback occurred, and what could have been done differently to prevent it. This real-world learning is invaluable.</p>
          </div>
          
          <!-- Strategy 5 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">POS System Training</h3>
            </div>
            <p class="text-gray-700">Provide comprehensive training on your POS system's documentation features. Ensure staff know how to add notes to orders, attach photos, record customer information, and properly document disputes or complaints.</p>
          </div>
          
          <!-- Strategy 6 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Recognition Program</h3>
            </div>
            <p class="text-gray-700">Create incentives for staff who excel at chargeback prevention. Recognize and reward employees who properly document transactions, identify potential fraud, or successfully resolve customer issues before they become disputes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Training Topics Section -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Essential Training Topics</h2>
        
        <div class="bg-white p-8 rounded-lg shadow-md mb-8">
          <h3 class="text-2xl font-bold mb-6" style="color: #973131;">Card-Present Transactions</h3>
          
          <div class="space-y-6">
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                1
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Verification Procedures</h4>
                <p class="text-gray-700">Train staff to request ID for transactions over a certain amount. Teach them how to properly compare signatures and check security features on cards.</p>
              </div>
            </div>
            
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                2
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Payment Technology</h4>
                <p class="text-gray-700">Ensure staff understand why chip and contactless payments are more secure than magnetic stripe transactions, and how to properly process each type.</p>
              </div>
            </div>
            
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                3
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Receipt Handling</h4>
                <p class="text-gray-700">Train on proper receipt procedures, including offering receipts to all customers, proper storage of signed copies, and clear documentation of tips and modifications.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="bg-white p-8 rounded-lg shadow-md mb-8">
          <h3 class="text-2xl font-bold mb-6" style="color: #973131;">Card-Not-Present Transactions</h3>
          
          <div class="space-y-6">
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                1
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Phone Order Protocol</h4>
                <p class="text-gray-700">Establish clear protocols for phone orders, including capturing billing address, verification codes, and confirming order details before processing the payment.</p>
              </div>
            </div>
            
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                2
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Online Order Verification</h4>
                <p class="text-gray-700">Teach staff how to document online orders and confirm identity at pickup using order numbers, customer names, or confirmation emails.</p>
              </div>
            </div>
            
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                3
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Red Flag Recognition</h4>
                <p class="text-gray-700">Train staff to identify suspicious orders, such as large orders to new addresses, orders requesting rush delivery, or customers who seem overly concerned about pickup timing.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
          <h3 class="text-2xl font-bold mb-6" style="color: #973131;">Customer Service & Dispute Prevention</h3>
          
          <div class="space-y-6">
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                1
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Complaint Handling</h4>
                <p class="text-gray-700">Develop a standard process for handling customer complaints. Teach staff to document all issues and resolutions in the POS system.</p>
              </div>
            </div>
            
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                2
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Refund Procedures</h4>
                <p class="text-gray-700">Ensure staff understand when and how to issue refunds properly, with clear documentation of the reason. This can often prevent a formal chargeback.</p>
              </div>
            </div>
            
            <div class="flex">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-800 font-bold text-lg">
                3
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-semibold mb-1">Escalation Protocol</h4>
                <p class="text-gray-700">Create clear guidelines for when staff should escalate issues to managers, especially for situations that may lead to disputes or chargebacks.</p>
              </div>
            </div>
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
          <router-link to="/documenting-transactions" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Documenting Transactions</h3>
            <p class="text-gray-600">Learn how proper documentation works hand-in-hand with staff training to prevent chargebacks.</p>
          </router-link>
          
          <router-link to="/preventing-friendly-fraud" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Preventing Friendly Fraud</h3>
            <p class="text-gray-600">Discover how well-trained staff can spot and prevent fraudulent customer behavior.</p>
          </router-link>
          
          <router-link to="/chargeback-guide#section-9" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Customer Communication</h3>
            <p class="text-gray-600">Learn effective communication techniques that your staff can use to prevent disputes.</p>
          </router-link>
          
          <router-link to="/pos-system" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Using Your POS System</h3>
            <p class="text-gray-600">See how to train staff to properly use your POS system to prevent and fight chargebacks.</p>
          </router-link>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Need help training your team?</h2>
      <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our restaurant payment experts can help develop customized training programs that reduce chargebacks and protect your revenue.</p>
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
