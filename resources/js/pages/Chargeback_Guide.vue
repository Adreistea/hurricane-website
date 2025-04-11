<template>
  <div class="chargeback-guide">
    <NavBar />

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container mx-auto px-4 py-20 md:py-32">
        <div class="hero-content max-w-4xl mx-auto text-center">
          <h1 
            class="text-3xl md:text-5xl font-bold mb-6 text-gray-800 slide-in-left"
          >
            Understanding Chargebacks
          </h1>
          <p 
            class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
          >
            Learn how to prevent, manage, and dispute chargebacks to protect your business
          </p>
        </div>
      </div>
    </section>

    <!-- Table of Contents -->
    <section class="toc-section bg-gray-50 py-10">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-2xl font-semibold mb-6 text-gray-800">In This Guide:</h2>
          <div class="toc-grid grid md:grid-cols-2 gap-4">
            <a href="#" @click.prevent="$router.push('/understanding-chargebacks')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <span>Understanding Chargebacks</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/win-chargeback-dispute')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                  </svg>
                </div>
                <span>How to Win a Dispute</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/preventing-friendly-fraud')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </div>
                <span>Preventing Friendly Fraud</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/documenting-transactions')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </div>
                <span>Documenting Transactions</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/pos-system')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <span>Using Your POS System</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/refund-fight-chargeback')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
                </div>
                <span>When to Refund vs. Fight</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/delivery-order-chargebacks')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                  </svg>
                </div>
                <span>Delivery Order Chargebacks</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/staff-training')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </div>
                <span>Staff Training</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/customer-communication')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                  </svg>
                </div>
                <span>Customer Communication</span>
              </div>
            </a>
            <a href="#" @click.prevent="$router.push('/tracking-analysis')" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                </div>
                <span>Tracking & Analysis</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section bg-primary-600 py-16 text-white">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-6">Need Help Managing Chargebacks?</h2>
          <p class="text-xl mb-8">Our payment processing experts can help you implement systems to reduce chargebacks and protect your revenue.</p>
          <div class="cta-buttons">
            <a href="/contact" class="btn-white">Contact Us</a>
            <a href="/demo" class="btn-outline-white ml-4">Schedule a Demo</a>
          </div>
        </div>
      </div>
    </section>

    <AppFooter />
    
    <!-- Lightbox Component -->
    <lightbox
      :is-visible="showLightbox"
      :lightbox-id="currentLightboxId"
      @close="showLightbox = false"
      @consultation-click="handleConsultationClick"
    />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';
import axios from 'axios';
import lightbox from './lightbox.vue';

// Lightbox state
const showLightbox = ref(false);
const currentLightboxId = ref(null);

// Handle consultation click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // You can add a redirect or other action here
  console.log('Consultation requested from Chargeback Guide page');
};

// Fetch lightboxes and check if we need to show one
const fetchLightboxes = async () => {
  try {
    const response = await axios.get('/api/lightboxes');
    if (response.data.success) {
      const lightboxes = response.data.data;
      
      // Find active lightbox for chargeback-guide page
      const chargebackLightbox = lightboxes.find(item => {
        const displayPages = Array.isArray(item.display_pages) 
          ? item.display_pages 
          : JSON.parse(item.display_pages || '[]');
        
        return displayPages.includes('chargeback-guide') && item.status === 'active';
      });
      
      if (chargebackLightbox) {
        currentLightboxId.value = chargebackLightbox.lightbox_id;
        
        // Check if we should show this lightbox (based on show_once setting)
        const lightboxShownKey = `lightbox_shown_${chargebackLightbox.lightbox_id}`;
        const hasBeenShown = localStorage.getItem(lightboxShownKey);
        
        if (!chargebackLightbox.show_once || !hasBeenShown) {
          // Show the lightbox
          setTimeout(() => {
            showLightbox.value = true;
            
            // If show_once is enabled, mark as shown
            if (chargebackLightbox.show_once) {
              localStorage.setItem(lightboxShownKey, 'true');
            }
          }, 2000); // Show after 2 seconds
        }
      }
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
  }
};

onMounted(() => {
  // Scroll to section if URL has hash
  if (window.location.hash) {
    const id = window.location.hash.substring(1);
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
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
  
  // Fetch and check lightboxes
  fetchLightboxes();
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

/* Button Styles */
.btn-primary {
  display: inline-block;
  background-color: #973131;
  color: white;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-primary:hover {
  background-color: #7e2929;
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.btn-secondary {
  display: inline-block;
  background-color: transparent;
  color: #374151;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border: 2px solid #d1d5db;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-secondary:hover {
  border-color: #9ca3af;
  transform: translateY(-2px);
}

.btn-white {
  display: inline-block;
  background-color: white;
  color: #973131;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-white:hover {
  background-color: #f9fafb;
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.btn-outline-white {
  display: inline-block;
  background-color: transparent;
  color: white;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border: 2px solid white;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-outline-white:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transform: translateY(-2px);
}

/* Table of Contents */
.toc-section {
  border-top: 1px solid #e5e7eb;
  border-bottom: 1px solid #e5e7eb;
}

.toc-item {
  text-decoration: none;
  color: #1f2937;
}

.toc-icon {
  flex-shrink: 0;
}

/* Content Sections */
.guide-content {
  color: #374151;
}

.content-section:not(:last-child) {
  border-bottom: 1px solid #e5e7eb;
  padding-bottom: 4rem;
}

/* CTA Section */
.cta-section {
  background-color: #973131;
  background-image: linear-gradient(135deg, #973131 0%, #7e2929 100%);
}

/* Add responsive typography */
@media (max-width: 768px) {
  .prose {
    font-size: 1rem;
  }
  
  .content-section h2 {
    font-size: 1.75rem;
  }
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

/* Add animation to sections */
.content-section {
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.content-section:hover {
  transform: translateY(-5px);
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

/* Card animations */
.card-reveal {
  opacity: 0;
  transform: scale(0.9);
  transition: all 0.8s ease-out;
}

.card-reveal.animate {
  opacity: 1;
  transform: scale(1);
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

.delay-400 {
  transition-delay: 0.4s;
}

.delay-500 {
  transition-delay: 0.5s;
}

/* Enhanced Animations from home.vue */
.animate-fade-in-slide-up {
  animation: fadeInSlideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  will-change: transform, opacity;
  backface-visibility: hidden;
}

.animation-delay-200 {
  animation-delay: 0.2s;
}

.animation-delay-300 {
  animation-delay: 0.3s;
}

.animation-delay-400 {
  animation-delay: 0.4s;
}

.animation-delay-600 {
  animation-delay: 0.6s;
}

@keyframes fadeInSlideUp {
  from {
    opacity: 0;
    transform: translateY(30px);
    filter: blur(5px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
}

/* Hover animations */
.hover-lift {
  transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), 
              box-shadow 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.hover-lift:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>
