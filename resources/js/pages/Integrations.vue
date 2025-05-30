<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center relative">
      <!-- Decorative dots pattern in background -->
      <div class="absolute left-0 top-1/3 transform -translate-y-1/2 w-24 h-64 opacity-20 z-0">
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
      </div>
      
      <!-- Right side decorative pattern -->
      <div class="absolute right-0 bottom-1/4 transform translate-y-1/2 w-24 h-64 opacity-20 z-0">
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full m-2 float-left"></div>
      </div>

      <!-- Floating decorative elements -->
      <div class="absolute top-1/4 left-1/4 w-20 h-20 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 opacity-20 float-element" style="animation-delay: 0.2s;"></div>
      <div class="absolute bottom-1/4 right-1/3 w-16 h-16 rounded-full bg-gradient-to-r from-indigo-100 to-purple-100 opacity-20 float-element" style="animation-delay: 1.2s;"></div>
      <div class="absolute top-1/2 right-1/4 w-12 h-12 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 opacity-20 float-element" style="animation-delay: 0.7s;"></div>
      
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 relative z-10">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content text-indigo-600 font-semibold delay-100">Integrations</span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
              Partnerships Developed with
              You in Mind
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            We partner with reputable companies to bring you the best solution possible. Whether you need a website, online shopping cart, payment gateway, or other custom application, you can trust that Hurricane Payments has the resources to build a tailored solution that lasts.
          </p>
        </div>
        
        <!-- CTA Buttons with better styling -->
        <div class="fade-in-up" style="animation-delay: 0.6s;">
          <div class="flex flex-col sm:flex-row gap-4">
            <router-link 
              to="/request-consultation" 
              class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
              style="background-color: #973131; transition: all 0.3s ease;">
              Get Started
            </router-link>
            
            <a href="#integrations"
              class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
              style="border-color: #973131; color: #973131;">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Right Content - Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative z-10">
        <div class="card-reveal">
          <div class="rounded-lg shadow-2xl overflow-hidden">
            <img src="@/../images/integrationpic2.png" alt="Integration Solutions" class="w-full h-auto" onerror="this.src='https://via.placeholder.com/600x400?text=Integration+Solutions';this.onerror='';" />
          </div>
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-teal-100 to-cyan-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
        
        <!-- Additional floating elements -->
        <div class="absolute -right-8 -top-8 w-16 h-16 bg-purple-50 rounded-full opacity-70 animate-pulse-slow"></div>
        <div class="absolute -left-8 -bottom-8 w-16 h-16 bg-indigo-50 rounded-full opacity-70 animate-pulse-slow" style="animation-delay: 1s;"></div>
      </div>
    </div>

    <!-- Why Hurricane Payments Section -->
    <div class="py-24 bg-gradient-to-b from-white to-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16 scroll-reveal opacity-0">
          <h2 class="text-5xl font-bold mb-4" style="color: #973131;">Why Hurricane Payments</h2>
          <div class="w-32 h-1 bg-gray-300 mx-auto mb-6"></div>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Improve the payment experience with Hurricane Payments.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <!-- Virtual Terminals -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0" data-delay="100">
            <div class="h-16 bg-gradient-to-r from-red-700 to-red-900" style="background: linear-gradient(to right, #973131, #7e2929);"></div>
            <div class="p-8">
              <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center -mt-16 mb-6 mx-auto border-4 border-white shadow-md" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#973131">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-center mb-4 text-gray-900">Virtual Terminals</h3>
              <p class="text-gray-600 text-center">Send a custom email invoice for your services or set up a recurring billing schedule for those customers making fixed monthly payments.</p>
            </div>
          </div>
          
          <!-- Payment APIs & SDKs -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0" data-delay="300">
            <div class="h-16 bg-gradient-to-r from-red-700 to-red-900" style="background: linear-gradient(to right, #973131, #7e2929);"></div>
            <div class="p-8">
              <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center -mt-16 mb-6 mx-auto border-4 border-white shadow-md" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#973131">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-center mb-4 text-gray-900">Payment APIs & SDKs</h3>
              <p class="text-gray-600 text-center">Gain the flexibility to easily integrate payments into your selling platform through our relationships with several industry-leading payment gateways.</p>
            </div>
          </div>
          
          <!-- Cost-Effective Web Services -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0" data-delay="500">
            <div class="h-16 bg-gradient-to-r from-red-700 to-red-900" style="background: linear-gradient(to right, #973131, #7e2929);"></div>
            <div class="p-8">
              <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center -mt-16 mb-6 mx-auto border-4 border-white shadow-md" style="border: 2px solid #973131;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#973131">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-center mb-4 text-gray-900">Cost-Effective Web Services</h3>
              <p class="text-gray-600 text-center">Help customers find your business faster with a modern, responsive website. We offer cutting-edge web design, hosting, and commerce solutions at affordable rates.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Integrations Feature Section -->
    <div class="py-24 bg-gray-50" id="integrations">
      <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <div class="lg:w-1/2 order-2 lg:order-1">
            <h2 class="text-4xl font-bold mb-6" style="color: #973131;">Integrations</h2>
            <h3 class="text-2xl font-semibold mb-4 text-gray-800">Flexible, Secure, Easily Integrated Payment APIs & SDKs</h3>
            <p class="text-gray-600 mb-8">
              Our relationships with several of the most respected payment gateways gives you the flexibility to easily integrate payments into your selling platform. Enhanced development features available through these relationships include:
            </p>
            
            <div class="space-y-4">
              <div class="flex fade-in-up" style="animation-delay: 0.2s;">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center" style="border: 2px solid #973131;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#973131">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <p class="text-gray-700"><span class="font-semibold">Pre-Certified SDKs:</span> Integrate payments into any application (including mobile!) with native SDKs. Our integrations support Android, iOS, Linux, and Windows operating systems.</p>
                </div>
            </div>

              <div class="flex fade-in-up" style="animation-delay: 0.3s;">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center" style="border: 2px solid #973131;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#973131">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <p class="text-gray-700"><span class="font-semibold">Mobile-Optimized Design:</span> Easily embed mobile-friendly, responsive payment forms on your payment gateway. This ensures a streamlined, efficient payment experience for customers using a mobile device to make an online payment.</p>
                </div>
              </div>
              
              <div class="flex fade-in-up" style="animation-delay: 0.4s;">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center" style="border: 2px solid #973131;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#973131">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <p class="text-gray-700"><span class="font-semibold">Tokenization:</span> Reuse tokenized cardholder data from previous transactions without having to store or secure it. This token can be used for subsequent transactions without re-entering cardholder data.</p>
                </div>
            </div>

              <div class="flex fade-in-up" style="animation-delay: 0.5s;">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center" style="border: 2px solid #973131;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#973131">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <p class="text-gray-700"><span class="font-semibold">APIs:</span> We currently support Rest API, Client JS, Payment Engine Terminal API, Soap API, and Transaction API.</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="lg:w-1/2 order-1 lg:order-2 relative">
            <div class="scroll-reveal-right opacity-0">
              <div class="rounded-lg shadow-2xl overflow-hidden transform transition-all duration-500 hover:scale-[1.02]">
                <img src="@/../images/integrationpic.png" alt="Integration Solutions" class="w-full h-auto" onerror="this.src='https://via.placeholder.com/600x400?text=Integration+Solutions';this.onerror='';" />
              </div>
            </div>
            
            <!-- Animated decorative elements -->
            <div class="absolute -z-10 inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
            <div class="absolute -z-20 inset-0 bg-gradient-to-r from-purple-100 to-pink-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
            
            <!-- Floating decorative elements -->
            <div class="absolute -right-4 -top-4 w-16 h-16 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 opacity-50 float-element" style="animation-delay: 0.5s;"></div>
            <div class="absolute -left-4 -bottom-4 w-12 h-12 rounded-full bg-gradient-to-r from-red-100 to-orange-100 opacity-50 float-element" style="animation-delay: 1.5s;"></div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Add this at the end of the template, just before the closing MainLayout tag -->
    <div v-if="currentLightbox && showLightbox">
      <lightbox
        :is-visible="showLightbox"
        :lightbox-id="currentLightbox.lightbox_id"
        @close="closeLightbox"
        @consultation-click="handleConsultationClick"
      />
    </div>

    <!-- Add the CtaActionSection component before the closing MainLayout tag -->
    <CtaActionSection 
      heading="Ready to Integrate Your Systems?"
      subheading="Our team is here to help you connect your business systems to our payment platform.<br>Get in touch today to learn more about our flexible integration solutions."
    />
  </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import MainLayout from './MainLayout.vue';
import lightbox from './lightbox.vue'; // Import the lightbox component
import CtaActionSection from '../components/CtaActionSection.vue';

// Add these for lightbox functionality
const currentLightbox = ref(null);
const showLightbox = ref(false);

// Fetch active lightboxes for integrations page
const fetchLightboxes = async () => {
  try {
    console.log('Fetching lightboxes for integrations page...');
    const response = await axios.get('/api/lightboxes/active', {
      params: { page: 'integrations' }
    });
    console.log('API Response:', response.data);
    
    if (response.data.success && response.data.data.length > 0) {
      console.log('Found active lightbox:', response.data.data[0]);
      currentLightbox.value = response.data.data[0];
      
      // Check if this lightbox should only be shown once
      const showOnceKey = `lightbox_shown_${currentLightbox.value.lightbox_id}`;
      if (currentLightbox.value.show_once && localStorage.getItem(showOnceKey)) {
        return;
      }
      
      // Show immediately or set up exit intent
      if (currentLightbox.value.show_on_exit) {
        setupExitIntent();
      } else {
        // Show after a short delay
        setTimeout(() => {
          showLightbox.value = true;
          if (currentLightbox.value.show_once) {
            localStorage.setItem(showOnceKey, 'true');
          }
        }, 3000);
      }
    }
  } catch (error) {
    console.error('Error fetching lightboxes:', error);
  }
};

// Handle the close action
const closeLightbox = () => {
  showLightbox.value = false;
};

// Handle the consultation button click
const handleConsultationClick = () => {
  showLightbox.value = false;
  // Navigate to consultation page or handle as needed
  window.location.href = currentLightbox.value.cta_url || '/request-consultation';
};

// Set up exit intent detection
const setupExitIntent = () => {
  const handleExitIntent = (e) => {
    // If the mouse leaves the top of the viewport
    if (e.clientY <= 0) {
      // Remove the event listener to prevent multiple triggers
      document.removeEventListener('mouseleave', handleExitIntent);
      
      // Show the lightbox
      showLightbox.value = true;
      
      // If show only once, set the flag
      if (currentLightbox.value && currentLightbox.value.show_once) {
        localStorage.setItem(`lightbox_shown_${currentLightbox.value.lightbox_id}`, 'true');
      }
    }
  };
  
  document.addEventListener('mouseleave', handleExitIntent);
};

onMounted(() => {
  // Initialize animation observer for scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animation class with delay if specified
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        setTimeout(() => {
          entry.target.classList.add('animate');
        }, parseInt(delay));
        
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
  
  // Set up smooth scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const element = document.getElementById(targetId);
      if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
  
  // Set up Intersection Observer for scroll reveal left/right animations
  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Get the delay attribute
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        // Add animation class after the specified delay
        setTimeout(() => {
          if (entry.target.classList.contains('scroll-reveal-left')) {
            entry.target.classList.add('animate-reveal-left');
          } else if (entry.target.classList.contains('scroll-reveal-right')) {
            entry.target.classList.add('animate-reveal-right');
          }
        }, parseInt(delay));
        
        // Unobserve the element to prevent re-animation
        scrollObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  
  // Observe elements with scroll-reveal-left and scroll-reveal-right classes
  document.querySelectorAll('.scroll-reveal-left, .scroll-reveal-right').forEach(element => {
    scrollObserver.observe(element);
  });
  
  // Fancy button hover effect
  document.querySelectorAll('.fancy-button').forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.style.backgroundColor = '#7e2929'; // Darker shade for hover
    });
    
    button.addEventListener('mouseleave', () => {
      button.style.backgroundColor = '#973131'; // Original color
    });
  });
  
  // Fetch lightboxes for this page
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

/* Add a touch of refinement to the main navigation */
nav a {
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  letter-spacing: 0.01em;
}

/* Enhance body text readability */
p {
  line-height: 1.6;
  font-weight: 400;
}

/* Base animations */
.scroll-reveal {
  transform: translateY(20px);
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

.delay-600 {
  transition-delay: 0.6s;
}

/* Hover animation for buttons */
.hover-scale:hover {
  transform: scale(1.05);
  background-color: rgba(151, 49, 49, 0.05); /* Very light red background on hover */
}

/* Fancy button hover effect */
.fancy-button {
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  letter-spacing: 0.03em;
}

.fancy-button:hover {
  background-color: #7e2929 !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.fancy-button:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.fancy-button:hover:after {
  transform: translateX(100%);
}

/* Enhanced text gradient animation */
.text-gradient {
  background-size: 200% auto;
  animation: textGradient 4s ease infinite;
}

@keyframes textGradient {
  0% { background-position: 0% center; }
  50% { background-position: 100% center; }
  100% { background-position: 0% center; }
}

/* Floating animation for section titles */
.animate-float {
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0px); }
}

/* Floating animation for decorative elements */
.float-element {
  animation: float 6s ease-in-out infinite;
}

/* Pulsing Animation for decorative elements */
.animate-pulse-slow {
  animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse-slow {
  0%, 100% {
    opacity: 0.5;
    transform: scale(1);
  }
  50% {
    opacity: 0.8;
    transform: scale(1.05);
  }
}

/* Fade in animation for sections */
.fade-in-up {
  animation: fadeInUp 0.8s ease-out forwards;
  opacity: 0;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Left-right reveal animations */
.scroll-reveal-left, .scroll-reveal-right {
  transition: all 0.8s cubic-bezier(0.17, 0.67, 0.45, 0.97);
}

.scroll-reveal-left {
  transform: translateX(-50px);
}

.scroll-reveal-right {
  transform: translateX(50px);
}

.animate-reveal-left {
  opacity: 1 !important;
  transform: translateX(0) !important;
}

.animate-reveal-right {
  opacity: 1 !important;
  transform: translateX(0) !important;
}
</style>
