<template>
  <div class="bg-gradient-to-br from-[#973131] to-[#7D2828] py-20 relative overflow-hidden">
    <!-- Enhanced background shapes -->
    <div class="absolute inset-0 overflow-hidden">
      <!-- Decorative circles -->
      <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-xl -mt-20 -mr-20 animate-pulse-slow"></div>
      <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/10 rounded-full blur-xl -mb-20 -ml-20 animate-pulse-slow" style="animation-delay: 1s;"></div>
      
      <!-- Abstract shapes -->
      <div class="absolute top-1/3 left-10 w-20 h-20 bg-white/5 rotate-45 transform skew-y-12"></div>
      <div class="absolute bottom-1/3 right-10 w-32 h-32 bg-white/5 rounded-full backdrop-blur-md"></div>
      
      <!-- Subtle grid pattern overlay -->
      <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'1\'/%3E%3C/g%3E%3C/svg%3E');"></div>
      
      <!-- Dynamic wave shape -->
      <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-20 text-white/5 fill-current">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
      </div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
      <div class="max-w-4xl mx-auto text-center">
        <!-- Enhanced typography with custom font class -->
        <h2 class="text-5xl font-bold mb-8 text-white cta-header">Ready To Transform Your Payment Experience?</h2>
        <p class="text-xl mb-16 text-white/90 font-light max-w-3xl mx-auto cta-text">
          {{ subheading }}
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-10 max-w-3xl mx-auto">
          <!-- Request Consultation - Styled text link -->
          <div class="text-center transform transition hover:-translate-y-1 duration-300">
            <router-link 
              to="/request-consultation" 
              class="inline-flex flex-col items-center group"
            >
              <div class="w-16 h-16 rounded-full border-2 border-white/30 flex items-center justify-center mb-4 group-hover:border-orange-400 transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white group-hover:text-orange-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
              </div>
              <span class="block text-xl font-medium text-white mb-1 group-hover:text-orange-400 transition-colors duration-300 cta-menu-item">Request a Consultation</span>
              <span class="block text-white/70 text-sm group-hover:text-orange-300 transition-colors duration-300">Start your journey</span>
            </router-link>
          </div>
          
          <!-- Call Hurricane -->
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
              <span class="block text-xl font-medium text-white mb-1 group-hover:text-orange-400 transition-colors duration-300 cta-menu-item">Call Hurricane Payments</span>
              <span class="block text-white/70 text-sm group-hover:text-orange-300 transition-colors duration-300">1-888-440-0936</span>
            </a>
          </div>

          <!-- Email -->
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
              <span class="block text-xl font-medium text-white mb-1 group-hover:text-orange-400 transition-colors duration-300 cta-menu-item">Email Hurricane Payments</span>
              <span class="block text-white/70 text-sm group-hover:text-orange-300 transition-colors duration-300">Thomas@hurricanepayments.com</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps({
  subheading: {
    type: String,
    default: 'Apply for your merchant account today and experience hassle-free payment processing.'
  }
});
</script>

<style scoped>
/* Import custom fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap');

/* Custom typography */
.cta-header {
  font-family: 'Playfair Display', serif;
  letter-spacing: -0.02em;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
}

.cta-text {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.01em;
  line-height: 1.6;
}

.cta-menu-item {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.02em;
  font-weight: 500;
}

/* Custom animation */
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
</style> 