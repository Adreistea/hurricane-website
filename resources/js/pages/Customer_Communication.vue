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
          Customer Communication
        </h1>
        <p 
          class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
        >
          How Clear Policies and Communication Prevent Chargebacks
        </p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="guide-content py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto">
        <div class="prose prose-lg mb-16 scroll-reveal">
          <p>Clear communication with your customers can stop a chargeback before it starts. Many disputes happen simply because customers don't recognize the charge or misunderstand a policy.</p>
          
          <p>Your receipt should clearly list your business name, address, and phone number—especially if your legal name is different from your store's name. That way, the charge on a customer's bank statement won't look unfamiliar.</p>
          
          <p>Display your refund and return policies prominently near the register, on your website, and on printed receipts. Make sure staff are familiar with these policies and can explain them confidently.</p>
          
          <p>For online orders, email a confirmation that includes what was ordered, pickup/delivery time, and contact info for any questions. This prevents confusion and encourages customers to reach out before disputing the charge.</p>
          
          <p>If a guest complains or has a bad experience, offer a resolution on the spot. A refund or replacement might cost a few dollars now but save you from fees and penalties later.</p>
          
          <p>By being proactive and approachable, you reduce frustration and increase the chance that customers will come to you first—not their bank.</p>
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

  <!-- Communication Strategies Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Effective Communication Strategies</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Strategy 1 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Clear Business Identification</h3>
            </div>
            <p class="text-gray-700">Ensure your legal business name, DBA name (if different), and contact information appear on all customer-facing materials, including receipts, order confirmations, and bank statements. This prevents "unrecognized charge" chargebacks.</p>
          </div>
          
          <!-- Strategy 2 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Visible Policy Statements</h3>
            </div>
            <p class="text-gray-700">Post refund, return, and satisfaction guarantee policies prominently in your establishment and online. Include them on receipts using clear, concise language that avoids legal jargon and focuses on customer understanding.</p>
          </div>
          
          <!-- Strategy 3 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Order Confirmations</h3>
            </div>
            <p class="text-gray-700">Send detailed order confirmations for all online and phone orders. Include itemized list, prices, payment method (last 4 digits only), delivery/pickup time, and clear contact information for order issues.</p>
          </div>
          
          <!-- Strategy 4 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Real-Time Communication</h3>
            </div>
            <p class="text-gray-700">Send order status updates via text or email for significant events (order received, preparation started, out for delivery). This keeps customers informed and reduces "where's my order?" inquiries that can lead to disputes.</p>
          </div>
          
          <!-- Strategy 5 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Problem Resolution Protocol</h3>
            </div>
            <p class="text-gray-700">Create a simple, empathetic process for handling complaints. Train staff to acknowledge concerns, document issues, and offer solutions promptly. Consider a "no questions asked" refund policy for smaller orders.</p>
          </div>
          
          <!-- Strategy 6 -->
          <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
            <div class="flex items-start mb-4">
              <div class="bg-red-100 rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                </svg>
              </div>
              <h3 class="text-xl font-bold" style="color: #973131;">Multi-Channel Access</h3>
            </div>
            <p class="text-gray-700">Provide multiple ways for customers to reach you—phone, email, text, social media, and website contact forms. Monitor all channels regularly and respond quickly, ideally within hours, not days.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crafting Effective Policies Section -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Crafting Effective Policies</h2>
        
        <div class="bg-white p-8 rounded-lg shadow-md mb-8">
          <h3 class="text-2xl font-bold mb-6" style="color: #973131;">Sample Refund Policy for Cafés & Restaurants</h3>
          
          <div class="prose prose-lg mx-auto">
            <p>A clear, concise refund policy helps prevent misunderstandings that lead to chargebacks. Here's a sample policy that strikes a good balance between protecting your business and satisfying customers:</p>
            
            <div class="bg-gray-50 p-6 rounded-lg my-6 border-l-4 border-red-700">
              <p class="font-semibold mb-4">Our Satisfaction Guarantee</p>
              <p class="mb-3">At [Your Business Name], we want every experience to be exceptional. If you're not completely satisfied with your order:</p>
              <ul class="list-disc pl-6 mb-4">
                <li><span class="font-medium">In-store purchases:</span> Please inform our staff immediately so we can make it right.</li>
                <li><span class="font-medium">Delivery/takeout orders:</span> Contact us within 30 minutes of receipt at [phone number] or [email].</li>
                <li><span class="font-medium">Quality issues:</span> We'll replace the item or provide a full refund.</li>
                <li><span class="font-medium">Special orders/catering:</span> Please review your order upon delivery and notify us of any discrepancies immediately.</li>
              </ul>
              <p>Refunds will be processed to the original payment method within 3-5 business days.</p>
            </div>
            
            <p>This policy should be:</p>
            <ul>
              <li>Posted near your register</li>
              <li>Available on your website</li>
              <li>Included on receipts (condensed version)</li>
              <li>Emailed with online order confirmations</li>
            </ul>
            
            <p>Remember to update your policy as needed and review it with staff regularly so they can communicate it confidently to customers.</p>
          </div>
        </div>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
          <h3 class="text-2xl font-bold mb-6" style="color: #973131;">Receipt Best Practices</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <h4 class="text-lg font-semibold mb-4">Essential Elements</h4>
              <ul class="space-y-2">
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Full business name (legal and DBA)</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Complete address and phone number</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Transaction date and time</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Itemized list with prices</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Payment method (last 4 digits of card)</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Order/transaction number</span>
                </li>
              </ul>
            </div>
            
            <div>
              <h4 class="text-lg font-semibold mb-4">Additional Best Practices</h4>
              <ul class="space-y-2">
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Use descriptor that matches bank statements</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Include short refund policy or URL to full policy</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Customer signature for in-person transactions</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Email and phone number for digital receipts</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>QR code linking to feedback form</span>
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-red-700 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Friendly message encouraging contact with issues</span>
                </li>
              </ul>
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
          <router-link to="/staff-training" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Staff Training</h3>
            <p class="text-gray-600">Ensure your team is prepared to communicate policies and handle customer concerns effectively.</p>
          </router-link>
          
          <router-link to="/refund-fight-chargeback" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">When to Refund vs. Fight</h3>
            <p class="text-gray-600">Learn how to decide when offering a refund is better than fighting a potential chargeback.</p>
          </router-link>
          
          <router-link to="/documenting-transactions" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Documenting Transactions</h3>
            <p class="text-gray-600">Discover how proper documentation supports clear customer communication.</p>
          </router-link>
          
          <router-link to="/delivery-order-chargebacks" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            <h3 class="text-xl font-bold mb-3" style="color: #973131;">Delivery Order Chargebacks</h3>
            <p class="text-gray-600">See special communication considerations for delivery orders to prevent disputes.</p>
          </router-link>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-gradient-to-r from-red-900 to-red-700 text-white py-16" style="background: linear-gradient(to right, #973131, #b64848);">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 scroll-reveal opacity-0">Improve your customer communication</h2>
      <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 scroll-reveal opacity-0 delay-200">Our payment processing experts can help you develop clear policies and communication strategies that reduce chargebacks and improve customer satisfaction.</p>
      <div class="scroll-reveal opacity-0 delay-300">
        <router-link to="/request-consultation" class="bg-white text-red-900 font-medium py-3 px-8 rounded-md shadow-lg hover:bg-opacity-90 transition-all duration-300 inline-block mx-2 mb-4">
          Request a Consultation
        </router-link>
        <a href="#" class="border-2 border-white text-white font-medium py-3 px-8 rounded-md hover:bg-white hover:text-red-900 transition-all duration-300 inline-block mx-2 mb-4">
          Download Communications Guide
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
