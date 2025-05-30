<template>
  <!-- Attention-Grabbing CTA Section -->
  <div class="relative py-24 overflow-hidden" :class="{ 'opacity-0 animate-on-scroll': animateOnScroll }" data-animation="fade-up">
    <!-- Background with angle and patterns -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#973131] to-[#7D2828] -skew-y-3 transform origin-top-right z-0 overflow-hidden">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'0.05\' fill-rule=\'evenodd\'/%3E%3C/svg%3E')"></div>
      <!-- Animated circles -->
      <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
      <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
      
      <!-- Subtle grid pattern overlay -->
      <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'1\'/%3E%3C/g%3E%3C/svg%3E');"></div>
      
      <!-- Dynamic wave shape -->
      <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-20 text-white/5 fill-current">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
      </div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-6 relative z-10 pt-8">
      <div class="max-w-4xl mx-auto text-center">
        <!-- Heading with Glow Effect -->
        <h2 class="text-4xl font-black text-white text-center mb-4" style="text-shadow: 0 0 15px rgba(255,255,255,0.5);">
          {{ heading }}
        </h2>
        
        <!-- Subheading -->
        <p class="text-xl text-white/90 text-center mb-10 max-w-2xl mx-auto" v-html="subheading"></p>
        
        <!-- Call to Action Header -->
        <div class="text-center mb-10">
          <h3 class="inline-block text-2xl font-bold text-white bg-white/10 px-6 py-2 rounded-full backdrop-blur-sm shadow-lg mb-8">
            Schedule a Demo or Free Consultation Today
          </h3>
          
          <!-- Contact Information with Buttons styled like CtaSection -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-10 max-w-3xl mx-auto">
            <!-- Phone Button -->
            <div class="text-center transform transition hover:-translate-y-1 duration-300">
              <a 
                href="tel:+18884400936" 
                class="inline-flex flex-col items-center group"
              >
                <div class="w-16 h-16 rounded-full border-2 border-white/30 flex items-center justify-center mb-4 group-hover:border-orange-400 transition-colors duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white group-hover:text-orange-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <span class="block text-xl font-medium text-white mb-1 group-hover:text-orange-400 transition-colors duration-300">Call</span>
                <span class="block text-white/70 text-sm group-hover:text-orange-300 transition-colors duration-300">1-888-440-0936</span>
              </a>
            </div>
            
            <!-- Email Button -->
            <div class="text-center transform transition hover:-translate-y-1 duration-300">
              <a 
                href="https://mail.google.com/mail/?view=cm&fs=1&to=Thomas@hurricanepayments.com" 
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex flex-col items-center group"
              >
                <div class="w-16 h-16 rounded-full border-2 border-white/30 flex items-center justify-center mb-4 group-hover:border-orange-400 transition-colors duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white group-hover:text-orange-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <span class="block text-xl font-medium text-white mb-1 group-hover:text-orange-400 transition-colors duration-300">Email</span>
                <span class="block text-white/70 text-sm group-hover:text-orange-300 transition-colors duration-300">Thomas@hurricanepayments.com</span>
              </a>
            </div>
            
            <!-- Website Button changed to Request Consultation -->
            <div class="text-center transform transition hover:-translate-y-1 duration-300">
              <router-link
                to="/request-consultation" 
                class="inline-flex flex-col items-center group"
              >
                <div class="w-16 h-16 rounded-full border-2 border-white/30 flex items-center justify-center mb-4 group-hover:border-orange-400 transition-colors duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white group-hover:text-orange-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                </div>
                <span class="block text-xl font-medium text-white mb-1 group-hover:text-orange-400 transition-colors duration-300">Consultation</span>
                <span class="block text-white/70 text-sm group-hover:text-orange-300 transition-colors duration-300">Request a Free Quote</span>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';

// Define props for component
const props = defineProps({
  animateOnScroll: {
    type: Boolean,
    default: true
  },
  heading: {
    type: String,
    default: "Ready to See KwickPOS in Action?"
  },
  subheading: {
    type: String,
    default: "Stop letting your POS system hold you back.<br>Get a smarter solution that increases your profits from Day 1."
  }
});

onMounted(() => {
  if (props.animateOnScroll) {
    // Set up animation for sections when scrolled into view
    const animateOnScrollOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1 // Trigger when 10% of element is visible
    };
    
    const animateOnScrollObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const element = entry.target;
          const animation = element.getAttribute('data-animation') || 'fade-up';
          const delay = element.getAttribute('data-delay') || 0;
          
          setTimeout(() => {
            element.classList.remove('opacity-0');
            element.classList.add(`animate-${animation}`);
          }, parseInt(delay));
          
          animateOnScrollObserver.unobserve(element);
        }
      });
    }, animateOnScrollOptions);
    
    // Observe this component for animation
    document.querySelectorAll('.animate-on-scroll').forEach(element => {
      animateOnScrollObserver.observe(element);
    });
  }
});
</script>

<style scoped>
/* Custom animation for pulse effect */
@keyframes pulse-slow {
  0% {
    opacity: 0.4;
    transform: scale(1);
  }
  50% {
    opacity: 0.6;
    transform: scale(1.05);
  }
  100% {
    opacity: 0.4;
    transform: scale(1);
  }
}

.animate-pulse-slow {
  animation: pulse-slow 6s infinite ease-in-out;
}

/* Add these new animations for scrolling sections */
.animate-fade-up {
  animation: fadeUp 0.8s ease forwards;
}

@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style> 