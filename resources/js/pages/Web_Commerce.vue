<template>
  <MainLayout>
    <!-- Hero Section with animations -->
    <div class="container mx-auto px-6 py-16 flex flex-col lg:flex-row items-center">
      <!-- Left Content with Text Reveal Animation -->
      <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 slide-in-left">
        <div class="text-reveal mb-2">
          <span class="text-reveal-content inline-block font-semibold tracking-wider text-sm uppercase delay-100" style="color: #973131;">
            Payment Solutions
          </span>
        </div>
        
        <div class="text-reveal mb-6">
          <h1 class="text-reveal-content text-5xl lg:text-6xl font-bold leading-tight delay-200"
              style="color: #973131;">
            Web Commerce
          </h1>
        </div>
        
        <div class="text-reveal mb-8">
          <p class="text-reveal-content text-lg text-gray-600 delay-300">
            It's important to meet your customers where they are, and today, they're online! Equip your business with an eCommerce solution and allow your customers to place orders or make secure payments on the web. Plus, take advantage of advanced features designed to help you streamline your business.
          </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
          <a href="#" class="fancy-button text-white font-medium py-3 px-8 rounded-md shadow-lg" 
             style="background-color: #973131; transition: all 0.3s ease;">
            Get Started
          </a>
          
          <a href="#" class="hover-scale border font-medium py-3 px-8 rounded-md transition-all duration-300 inline-flex items-center"
             style="border-color: #973131; color: #973131;">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Right Content - Payment UI Image with Card Reveal Animation -->
      <div class="lg:w-1/2 relative card-reveal delay-200">
        <div class="rounded-lg shadow-2xl overflow-hidden">
          <img :src="webPicImg" alt="Web Commerce Solutions" class="w-full h-auto" />
        </div>
        
        <!-- Animated decorative elements -->
        <div class="absolute -z-10 inset-0 bg-gradient-to-r from-red-100 to-rose-100 rounded-3xl transform rotate-3 translate-x-4 translate-y-4 slide-in-right delay-300"></div>
        <div class="absolute -z-20 inset-0 bg-gradient-to-r from-rose-100 to-red-100 rounded-3xl transform -rotate-2 translate-x-8 translate-y-8 slide-in-right delay-500"></div>
      </div>
    </div>

    <!-- Add this code after the hero section and before the features section -->
    <div class="bg-gray-50 py-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12 scroll-reveal opacity-0">
          <span class="text-indigo-600 font-semibold tracking-wider text-sm uppercase" style="color: #973131;">
            Your Passion, Our Mission
          </span>
          <h2 class="text-4xl font-bold mt-2" style="color: #333;">
            Empowering Businesses Like Yours Since 1988
          </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
          <!-- Stat 1 -->
          <div class="text-center scroll-reveal opacity-0" data-delay="0">
            <div class="text-5xl font-bold mb-4" style="color: #79c142;">97%</div>
            <p class="text-gray-600">Achieve substantial savings by reviewing the rates of their current mobile credit card processing provider.</p>
          </div>
          
          <!-- Stat 2 -->
          <div class="text-center scroll-reveal opacity-0" data-delay="200">
            <div class="text-5xl font-bold mb-4" style="color: #79c142;">100+</div>
            <p class="text-gray-600">U.S. cities have Hurricane Payments presence and use our Mobile Credit Card Processing Solutions</p>
          </div>
          
          <!-- Stat 3 -->
          <div class="text-center scroll-reveal opacity-0" data-delay="400">
            <div class="text-5xl font-bold mb-4" style="color: #79c142;">20+</div>
            <p class="text-gray-600">Years operating as a leading payments provider with best-in-class Credit Card Processing Solutions</p>
          </div>
          
          <!-- Stat 4 -->
          <div class="text-center scroll-reveal opacity-0" data-delay="600">
            <div class="text-5xl font-bold mb-4" style="color: #79c142;">19</div>
            <p class="text-gray-600">Regional sales offices across the country provide support for Phone, Tablet, and Mobile Credit Card Processing Solutions</p>
          </div>
        </div>
      </div>
      
      <!-- Background pattern -->
      <div class="absolute left-0 top-0 z-0 opacity-20">
        <div class="w-32 h-32 bg-dots"></div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto px-6 py-24 mt-8">
      <div class="text-center mb-16 scroll-reveal opacity-0">
        <h2 class="text-4xl font-bold mb-6" style="color: #973131;">
          Everything You Need for Online Payments
        </h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Our comprehensive web commerce solutions help you build, manage, and grow your online business with ease.
        </p>
      </div>

      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white rounded-xl p-8 shadow-lg scroll-reveal opacity-0 feature-card" data-delay="0">
          <div class="w-14 h-14 mb-6 text-custom-red">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Secure Payments</h3>
          <p class="text-gray-600">
            Process payments securely with PCI compliance and advanced fraud protection built right in.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white rounded-xl p-8 shadow-lg scroll-reveal opacity-0 feature-card" data-delay="200">
          <div class="w-14 h-14 mb-6 text-custom-red">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Shopping Cart Integration</h3>
          <p class="text-gray-600">
            Seamless integration with popular shopping cart solutions and eCommerce platforms.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white rounded-xl p-8 shadow-lg scroll-reveal opacity-0 feature-card" data-delay="400">
          <div class="w-14 h-14 mb-6 text-custom-red">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Detailed Analytics</h3>
          <p class="text-gray-600">
            Gain valuable insights into your customers' buying patterns with comprehensive reporting tools.
          </p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white rounded-xl p-8 shadow-lg scroll-reveal opacity-0 feature-card" data-delay="600">
          <div class="w-14 h-14 mb-6 text-custom-red">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Subscription Management</h3>
          <p class="text-gray-600">
            Create and manage recurring billing plans with flexible payment schedules.
          </p>
        </div>

        <!-- Feature 5 -->
        <div class="bg-white rounded-xl p-8 shadow-lg scroll-reveal opacity-0 feature-card" data-delay="800">
          <div class="w-14 h-14 mb-6 text-custom-red">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Global Reach</h3>
          <p class="text-gray-600">
            Accept payments in multiple currencies and expand your business internationally.
          </p>
        </div>

        <!-- Feature 6 -->
        <div class="bg-white rounded-xl p-8 shadow-lg scroll-reveal opacity-0 feature-card" data-delay="1000">
          <div class="w-14 h-14 mb-6 text-custom-red">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Mobile Optimized</h3>
          <p class="text-gray-600">
            Fully responsive checkout flows that look great on any device, from desktop to mobile.
          </p>
        </div>
      </div>
    </div>

    <!-- Virtual Terminal Section -->
    <div class="container mx-auto px-6 py-20">
      <div class="flex flex-col lg:flex-row items-center gap-12">
        <!-- Left Content with Text -->
        <div class="lg:w-1/2 scroll-reveal-left opacity-0">
          <h2 class="text-4xl font-bold mb-6" style="color: #973131;">What is a Virtual Terminal?</h2>
          <p class="text-lg text-gray-600 mb-6">
            A Virtual Terminal is an interface built into a Payment Gateway. Its impressive technology empowers you to run your Gateway as if it were a credit card terminal on your computer, tablet, or mobile device. Plus, the Virtual Terminal is browser-based, which means you can access this essential business tool on any web-enabled device. Each Virtual Terminal also offers innovative features to make getting paid easier. Keep scrolling to find out what they are!
          </p>
        </div>
        
        <!-- Right Content - Video/Image -->
        <div class="lg:w-1/2 scroll-reveal-right opacity-0">
          <div class="relative aspect-video rounded-lg overflow-hidden shadow-xl">
            <img :src="webPic2Img" alt="Virtual Terminal Interface" class="w-full h-auto" />
          </div>
        </div>
      </div>
    </div>

    <!-- Features that Go Beyond Section -->
    <div class="bg-gray-50 py-20">
      <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-start gap-12">
          <!-- Left Content - Image is hidden in mobile view -->
          <div class="hidden lg:block lg:w-1/2 scroll-reveal-left opacity-0">
            <div class="relative">
              <div class="aspect-video bg-white p-6 rounded-lg shadow-xl">
                <!-- YouTube embed placeholder -->
                <div class="aspect-video relative">
                  <iframe 
                    class="absolute inset-0 w-full h-full rounded-md"
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                    title="Virtual Terminal Demo"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                  </iframe>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Content with Text -->
          <div class="lg:w-1/2 scroll-reveal-right opacity-0">
            <h2 class="text-4xl font-bold mb-6" style="color: #973131;">Features that Go Beyond Getting Paid</h2>
            <p class="text-lg text-gray-600 mb-8">
              When you choose to implement an EMS Virtual Terminal solution, you get more than a secure way to accept online payments. You also get access to a suite of features designed help you streamline every aspect of your business.
            </p>
            
            <!-- Feature List -->
            <div class="space-y-6">
              <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-5 h-5 rounded-full bg-custom-red flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h4 class="text-lg font-semibold">Secure Payment Processing</h4>
                  <p class="text-gray-600">End-to-end encryption and tokenization for maximum security and PCI compliance.</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-5 h-5 rounded-full bg-custom-red flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h4 class="text-lg font-semibold">Customer Management</h4>
                  <p class="text-gray-600">Store customer information securely for easier repeat transactions.</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                  <div class="w-5 h-5 rounded-full bg-custom-red flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h4 class="text-lg font-semibold">Real-time Reporting</h4>
                  <p class="text-gray-600">Get instant access to transaction data and customizable reports.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-[#973131] py-16 relative overflow-hidden">
      <div class="absolute top-0 left-0 w-full h-full opacity-10">
        <div class="absolute top-0 right-0 bg-white rounded-full w-64 h-64 -mt-20 -mr-20"></div>
        <div class="absolute bottom-0 left-0 bg-white rounded-full w-80 h-80 -mb-32 -ml-32"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-4xl font-bold mb-6 text-white">Ready to Transform Your Online Business?</h2>
          <p class="text-xl mb-10 text-white opacity-90">
            Join thousands of businesses that trust our web commerce solutions
          </p>
          
          <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#" class="bg-white text-[#973131] hover:bg-red-50 font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
              Get Started Today
            </a>
            <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-[#973131] font-bold py-3 px-8 rounded-lg transition-all duration-300">
              Talk to Sales
            </a>
          </div>
        </div>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import { onMounted } from 'vue';
import MainLayout from './MainLayout.vue';

// Import the image using Vue's import mechanism
const webPicImg = new URL('@/../images/webpic.png', import.meta.url).href;
const webPic2Img = new URL('@/../images/webpic2.png', import.meta.url).href;

onMounted(() => {
  // Fancy button hover effect
  document.querySelectorAll('.fancy-button').forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.style.backgroundColor = '#7e2929'; // Darker burgundy shade for hover
    });
    
    button.addEventListener('mouseleave', () => {
      button.style.backgroundColor = '#973131'; // Original burgundy color
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
      if (entry.isIntersecting) {
        // Get the delay attribute
        const delay = entry.target.getAttribute('data-delay') || 0;
        
        // Add animation class after the specified delay
        setTimeout(() => {
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

  // Add counter animation
  const statElements = document.querySelectorAll('.text-5xl');
  statElements.forEach(stat => {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    stat.style.animationPlayState = 'paused';
    observer.observe(stat);
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
  background-color: rgba(151, 49, 49, 0.05); /* Very light burgundy background on hover */
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
  transition: opacity 0.6s ease-out, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  will-change: transform, opacity;
  transform: translateY(40px);
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

/* Define the custom red color variables */
:root {
  --custom-red: #973131;
  --custom-red-dark: #7e2929;
}

.text-custom-red {
  color: var(--custom-red);
}

.bg-custom-red {
  background-color: var(--custom-red);
}

.border-custom-red {
  border-color: var(--custom-red);
}

/* Feature card animations */
.feature-card {
  transition: all 0.3s ease;
  border: 1px solid rgba(229, 231, 235, 0.5);
}

.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  border-color: rgba(151, 49, 49, 0.3);
}

.feature-card .w-14 {
  transition: transform 0.3s ease;
}

.feature-card:hover .w-14 {
  transform: scale(1.1);
}

/* Add this to your existing style section */
.bg-dots {
  background-image: radial-gradient(rgba(0, 0, 0, 0.2) 1px, transparent 1px);
  background-size: 16px 16px;
}

/* Counter animations */
@keyframes countUp {
  from {
    transform: translateY(10px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.text-5xl {
  animation: countUp 1s ease-out forwards;
}
</style>
