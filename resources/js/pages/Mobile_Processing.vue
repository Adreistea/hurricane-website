<template>
  <MainLayout>
    <!-- Hero Section with same animations as home.vue -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Mobile Credit Card
            Payment
            Processing
            Solutions
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            Let's face it - if you're running a business in the US today, you've got to take credit and debit cards. But what if you don't have a regular storefront or room for bulky payment equipment? That's where mobile processing comes in. It lets you accept payments right from your phone or tablet, no matter where your business takes you.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <router-link 
            to="/request-consultation" 
            class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
            style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </router-link>
          
          <button
            @click="scrollToNextSection"
            class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
            style="border-color: #973131; color: #973131;">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
      
      <!-- Right Content - Terminal Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img :src="mobileDeviceImg" alt="Mobile Payment Processing" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Stats Section with Scroll Animations -->
    <div class="container mx-auto px-6 py-20 mt-8">
      <!-- Section Header -->
      <div class="text-center mb-16 scroll-reveal opacity-0">
        <span class="inline-block text-indigo-600 font-semibold mb-4 tracking-wider text-sm uppercase scroll-reveal opacity-0" style="animation-delay: 0.2s; color: #973131;">
          Your Passion, Our Mission
        </span>
        <h2 class="text-4xl lg:text-5xl font-bold mb-6 scroll-reveal opacity-0" style="animation-delay: 0.4s;">
          Empowering Businesses Like Yours Since 1988
        </h2>
      </div>
      
      <!-- Stats Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- 95% Stat Card -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="0">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <!-- Animated circular background -->
            <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-red-200 rounded-full pulse-slow"></div>
            <!-- Counter number with animation -->
            <div class="relative counter-animation font-bold text-5xl" style="color: #4CAF50;">97%</div>
          </div>
          <p class="text-gray-700">
            Achieve substantial savings by reviewing the rates of their current mobile credit card processing provider.
          </p>
        </div>
        
        <!-- 100+ Stat Card -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="200">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full pulse-slow"></div>
            <div class="relative counter-animation font-bold text-5xl" style="color: #2196F3;">100+</div>
          </div>
          <p class="text-gray-700">
            U.S. cities have Hurricane Payments presence and use our Mobile Credit Card Processing Solutions
          </p>
        </div>
        
        <!-- 30+ Stat Card -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="400">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full pulse-slow"></div>
            <div class="relative counter-animation font-bold text-5xl" style="color: #9C27B0;">20+</div>
          </div>
          <p class="text-gray-700">
            Years operating as a leading payments provider with best-in-class Credit Card Processing Solutions
          </p>
        </div>
        
        <!-- 11 Stat Card -->
        <div class="bg-white rounded-lg p-8 text-center shadow-lg scroll-reveal opacity-0 stats-card" data-delay="600">
          <div class="relative mb-6 mx-auto w-24 h-24 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-100 to-orange-200 rounded-full pulse-slow"></div>
            <div class="relative counter-animation font-bold text-5xl" style="color: #FF9800;">19</div>
          </div>
          <p class="text-gray-700">
            Regional sales offices across the country provide support for Phone, Tablet, and Mobile Credit Card Processing Solutions
          </p>
        </div>
      </div>
      
      <!-- Visual Element: Dotted Background -->
      <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-24 h-64 opacity-20">
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
        <!-- Pattern repeats -->
      </div>
    </div>

    <!-- EMSmobile Feature Section with YouTube Video -->
    <div class="container mx-auto px-6 py-24 mt-8">
      <div class="flex flex-col lg:flex-row items-center">
        <!-- Left Content with Text Animation -->
        <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 scroll-reveal-left opacity-0">
          <div class="relative z-10">
            <h2 class="text-4xl font-bold mb-6 text-gray-900">
              Accept Credit Cards 
              <span class="block mt-2">from your Phone by</span>
              <span class="block mt-2">Empowering Your Phone,</span>
              <span class="block mt-2">Tablet, or Computer with</span>
              <span class="block mt-2">an Advanced Credit Card</span>
              <span class="block mt-2">Reader</span>
            </h2>
            
            <p class="text-lg text-gray-700 mb-6">
              Hurricane Payments' Mobile Credit Card Processing is a simple, yet powerful <a href="#" class="text-custom-red font-medium hover:underline">mobile payment acceptance</a> option for any business looking to get paid on the go. It is compatible with iOS and Android devices, offering a card reader that connects to your device via Bluetooth. With this solution, you can:
            </p>
            
            <ul class="space-y-4 mb-8">
              <li class="flex items-start fade-in-slide-up" style="animation-delay: 100ms;">
                <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="ml-3 text-gray-700">Dip, tap, or swipe credit cards.</span>
              </li>
              
              <li class="flex items-start fade-in-slide-up" style="animation-delay: 200ms;">
                <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="ml-3 text-gray-700">Create itemized or simple transactions.</span>
              </li>
              
              <li class="flex items-start fade-in-slide-up" style="animation-delay: 300ms;">
                <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="ml-3 text-gray-700">Accept tips and manage cash payments.</span>
              </li>
              
              <li class="flex items-start fade-in-slide-up" style="animation-delay: 400ms;">
                <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="ml-3 text-gray-700">Track and control inventory.</span>
              </li>
              
              <li class="flex items-start fade-in-slide-up" style="animation-delay: 500ms;">
                <div class="flex-shrink-0 w-6 h-6 text-custom-red mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="ml-3 text-gray-700">Allow multiple users at the same time.</span>
              </li>
            </ul>
            
            <div class="mt-8">
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Thomas@hurricanepayments.com" 
                 target="_blank" 
                 class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg inline-block" 
                 style="background-color: #973131; transition: all 0.3s ease;">
                Contact Hurricane Payments Today
              </a>
            </div>
          </div>
        </div>
        
        <!-- Right Content - YouTube Video with Animation -->
        <div class="lg:w-1/2 scroll-reveal-right opacity-0 relative">
          <!-- Video frame with shadow and border effect -->
          <div class="rounded-xl overflow-hidden shadow-2xl relative z-10 border-4 border-white transform transition hover:-rotate-1 hover:scale-[1.01] duration-500">
            <!-- Responsive YouTube Embed -->
            <div class="relative pb-[56.25%] h-0 overflow-hidden max-w-full bg-gray-200">
              <iframe 
                class="absolute top-0 left-0 w-full h-full"
                src="https://www.youtube.com/embed/JxkfrPj1118" 
                title="EMSmobile Credit Card Processing"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
              
              <!-- Clickable overlay that redirects to YouTube -->
              <a 
                href="https://www.youtube.com/watch?v=JxkfrPj1118" 
                target="_blank" 
                class="absolute inset-0 z-20 cursor-pointer flex items-center justify-center bg-transparent hover:bg-black/10 transition-colors">
                <div class="bg-red-600 text-white px-4 py-2 rounded-lg opacity-0 hover:opacity-100 transition-opacity">
                  Watch on YouTube
                </div>
              </a>
              
              <!-- Loading animation overlay that fades out -->
              <div class="absolute inset-0 bg-gray-100 flex items-center justify-center youtube-loader">
                <div class="w-16 h-16 border-4 border-custom-red border-t-transparent rounded-full animate-spin"></div>
              </div>
            </div>
          </div>
          
          <!-- Decorative elements behind the video -->
          <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-8 translate-y-8 blur-sm"></div>
          <div class="absolute -z-20 inset-0 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-3xl transform -rotate-2 translate-x-4 translate-y-12 blur-sm"></div>
          
          <!-- Floating badge/label -->
          <div class="absolute -right-4 -top-4 bg-custom-red text-white py-2 px-4 rounded-lg font-bold shadow-lg z-20 animate-bounce-slow">
            Watch Demo
          </div>
        </div>
      </div>
    </div>

   
    
    <!-- KwickPOS CTA Section -->
    <CtaActionSection 
      heading="Ready to Accept Payments Anywhere?"
      subheading="Transform your smartphone or tablet into a powerful mobile payment terminal.<br>Get paid on the go with secure, reliable mobile processing solutions."
    />
  </MainLayout>
</template>

<script setup>
import { onMounted } from 'vue';
import MainLayout from './MainLayout.vue';
import NavBar from './NavBar.vue'; // Import the NavBar component
import CtaActionSection from '../components/CtaActionSection.vue';

// Import mobile device image with correct file name
const mobileDeviceImg = new URL('@/../images/QR table ordering-01.jpg', import.meta.url).href;

// Define scrollToNextSection outside onMounted so it's available to the template
function scrollToNextSection() {
  // Scroll to the stats section
  const statsSection = document.querySelector('.container.mx-auto.px-6.py-20.mt-8');
  if (statsSection) {
    statsSection.scrollIntoView({ behavior: 'smooth' });
  }
}

onMounted(() => {
  // Fancy button hover effect
  document.querySelectorAll('.fancy-button').forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.style.backgroundColor = '#7e2929'; // Darker shade for hover
    });
    
    button.addEventListener('mouseleave', () => {
      button.style.backgroundColor = '#973131'; // Original color
    });
  });
  
  // Set up Intersection Observer for scroll reveal animations
  const observerOptions = {
    root: null, // Use the viewport as the root
    rootMargin: '0px', // No margin
    threshold: 0.2 // Trigger when 20% of the element is visible
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      console.log('Element intersection state changed:', entry.target, entry.isIntersecting);
      if (entry.isIntersecting) {
        // Get the delay attribute
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        // Add animation class after the specified delay
        setTimeout(() => {
          console.log('Animating element:', entry.target);
          if (entry.target.classList.contains('scroll-reveal-left')) {
            entry.target.classList.add('animate-reveal-left');
          } else if (entry.target.classList.contains('scroll-reveal-right')) {
            entry.target.classList.add('animate-reveal-right');
          } else {
            entry.target.classList.add('animate-reveal');
          }
          entry.target.classList.remove('opacity-0');
        }, parseInt(delay));
        
        // Unobserve the element to prevent re-animation
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observe all elements with the scroll-reveal class
  document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right').forEach(element => {
    observer.observe(element);
  });

  // Set up counter animations
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add the animation class to start counting
        entry.target.classList.add('animated');
        
        // Unobserve after animation has started
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  // Observe all counter elements
  setTimeout(() => {
    document.querySelectorAll('.counter-animation').forEach(counter => {
      counterObserver.observe(counter);
    });
  }, 500);

  // Handle YouTube iframe loading
  const youtubeIframe = document.querySelector('iframe');
  if (youtubeIframe) {
    youtubeIframe.addEventListener('load', () => {
      const loader = document.querySelector('.youtube-loader');
      if (loader) {
        loader.style.opacity = 0;
      }
    });
  }

  // Add this to your existing onMounted function
  // Set up special animation for CTA section
  const ctaObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animated class to create particle effects
        entry.target.classList.add('animated');
        ctaObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  // Observe CTA section
  const ctaSection = document.querySelector('.cta-particles');
  if (ctaSection) {
    ctaObserver.observe(ctaSection);
  }

  // At the very bottom of the onMounted function, add:
  console.log('Mobile_Processing.vue mounted, observers initialized');
  console.log('Elements to animate:', document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right').length);

  // Add this at the end of onMounted function to force visibility of the CTA section
  setTimeout(() => {
    console.log('Forcing visibility of CTA section');
    const ctaHeading = document.querySelector('.cta-heading');
    if (ctaHeading) {
      ctaHeading.classList.add('animate-reveal');
      ctaHeading.classList.remove('opacity-0');
    }
    
    document.querySelectorAll('.scroll-reveal').forEach(el => {
      el.classList.add('animate-reveal');
      el.classList.remove('opacity-0');
    });
    
    // Make all elements with opacity-0 visible
    document.querySelectorAll('.opacity-0').forEach(el => {
      el.classList.remove('opacity-0');
    });
  }, 500);
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

/* Make CTA buttons more distinct */
.fancy-button {
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  letter-spacing: 0.03em;
}

/* Enhance body text readability */
p {
  line-height: 1.6;
  font-weight: 400;
}

/* Card reveal animation */
.card-reveal {
  animation: cardReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
  transform-origin: bottom center;
}

@keyframes cardReveal {
  from {
    transform: perspective(1000px) rotateX(30deg) translateY(100px);
    opacity: 0;
  }
  to {
    transform: perspective(1000px) rotateX(0) translateY(0);
    opacity: 1;
  }
}

/* Text reveal animation */
.text-reveal {
  overflow: hidden;
  position: relative;
}

.text-reveal-content {
  animation: textReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) both;
}

@keyframes textReveal {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Slide Animations */
.slide-in-right {
  animation: slideInRight 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

.slide-in-left {
  animation: slideInLeft 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  will-change: transform;
}

/* Delay classes */
.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-400 { animation-delay: 0.4s; }
.delay-500 { animation-delay: 0.5s; }
.delay-600 { animation-delay: 0.6s; }
.delay-700 { animation-delay: 0.7s; }

/* Keyframes for slide animations */
@keyframes slideInRight {
  from {
    transform: translateX(100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInLeft {
  from {
    transform: translateX(-100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

/* Enhanced hover effects */
.hover-scale {
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.hover-scale:hover {
  transform: scale(1.05);
  background-color: rgba(151, 49, 49, 0.05); /* Very light red background on hover */
}

/* Fancy button animation */
.fancy-button {
  position: relative;
  overflow: hidden;
}

.fancy-button::after {
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

.fancy-button:hover::after {
  transform: translateX(100%);
}

/* Scroll reveal animation */
.scroll-reveal {
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.animate-reveal {
  opacity: 1 !important;
  transform: translateY(0) !important;
}

/* Left/Right reveal animations */
.scroll-reveal-left {
  transition: opacity 0.6s ease-out, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
  transform: translateX(-60px);
  position: relative;
}

.scroll-reveal-right {
  transition: opacity 0.6s ease-out, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
  transform: translateX(60px);
}

.animate-reveal-left, .animate-reveal-right {
  opacity: 1 !important;
  transform: translateX(0) !important;
}

/* Custom color classes for the red (#973131) */
:root {
  --custom-red: #973131;
  --custom-red-dark: #7e2929;
}

.bg-custom-red {
  background-color: var(--custom-red);
}

.bg-custom-red-dark {
  background-color: var(--custom-red-dark);
}

.text-custom-red {
  color: var(--custom-red);
}

.border-custom-red {
  border-color: var(--custom-red);
}

/* Stats Card Animation */
.stats-card {
  transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1), 
              box-shadow 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
  background: linear-gradient(
    145deg, 
    rgba(255, 255, 255, 1) 0%, 
    rgba(249, 250, 251, 1) 100%
  );
  border: 1px solid rgba(229, 231, 235, 0.5);
}

.stats-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Pulsing Animation for Stat Circles */
.pulse-slow {
  animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse-slow {
  0%, 100% {
    opacity: 0.8;
    transform: scale(1);
  }
  50% {
    opacity: 1;
    transform: scale(1.05);
  }
}

/* Counter Animation */
.counter-animation {
  position: relative;
  opacity: 0;
  transform: translateY(20px);
}

.counter-animation.animated {
  animation: count-up 2s forwards cubic-bezier(0.34, 1.56, 0.64, 1);
}

@keyframes count-up {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Add dots background animation */
@keyframes float-dots {
  0%, 100% {
    transform: translate(0, 0);
  }
  25% {
    transform: translate(5px, 5px);
  }
  50% {
    transform: translate(0, 10px);
  }
  75% {
    transform: translate(-5px, 5px);
  }
}

/* Additional Animation for Stat Cards on Scroll */
.stats-card.animate-reveal {
  animation: card-pop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
}

@keyframes card-pop {
  0% {
    opacity: 0;
    transform: scale(0.8) translateY(40px);
  }
  70% {
    opacity: 1;
    transform: scale(1.05) translateY(-5px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

/* YouTube video section animations */
.fade-in-slide-up {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.5s ease forwards;
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* YouTube video loading animation */
.youtube-loader {
  transition: opacity 1s ease;
  opacity: 1;
}

iframe:loaded + .youtube-loader {
  opacity: 0;
}

/* Slow bounce animation for badge */
@keyframes bounce-slow {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

.animate-bounce-slow {
  animation: bounce-slow 3s infinite ease-in-out;
}

/* Enhanced link styles */
a.text-custom-red {
  position: relative;
  transition: all 0.3s ease;
}

a.text-custom-red:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 1px;
  bottom: -2px;
  left: 0;
  background-color: var(--custom-red);
  transform: scaleX(0);
  transform-origin: bottom right;
  transition: transform 0.3s ease;
}

a.text-custom-red:hover:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

/* Add smooth fade in for YouTube iframe */
iframe {
  opacity: 0;
  transition: opacity 1s ease;
  animation: fadeIn 0.5s ease 0.5s forwards;
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

/* CTA Section Animations */
.cta-heading {
  background: linear-gradient(90deg, #333, #973131, #333);
  background-size: 200% auto;
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textShine 6s linear infinite;
}

@keyframes textShine {
  to {
    background-position: 200% center;
  }
}

/* Pulsing button effect */
.pulsing-button {
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

.pulsing-button:hover {
  box-shadow: 0 0 30px rgba(255, 112, 67, 0.6);
}

.pulsing-button:before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to right,
    transparent 0%,
    rgba(255, 255, 255, 0.2) 50%,
    transparent 100%
  );
  transition: all 0.6s;
}

.pulsing-button:hover:before {
  left: 100%;
}

/* Wrapper positioning for button + effects */
.cta-button-wrapper {
  position: relative;
  display: inline-block;
  margin: 0 auto;
}

/* Particle effects on hover */
.cta-particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

/* Enhanced CTA section background pattern */
.bg-gray-50 {
  position: relative;
  background-image: linear-gradient(rgba(249, 250, 251, 0.8) 1px, transparent 1px),
    linear-gradient(90deg, rgba(249, 250, 251, 0.8) 1px, transparent 1px);
  background-size: 20px 20px;
  background-position: center center;
}

.bg-gray-50:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 10px;
  background: linear-gradient(90deg, transparent, #973131, transparent);
  opacity: 0.3;
}
</style>
