<template>
  <div class="min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <NavBar />
    
    <!-- Main Content -->
    <main class="flex-grow">
      <!-- Hero Section - Updated with gradient and texture -->
      <section class="bg-gradient-to-r from-gray-900 via-red-900 to-gray-900 text-white py-20 relative overflow-hidden">
        <!-- Background texture -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'1\'/%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <!-- Decorative shapes -->
        <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-red-500/10 rounded-full blur-xl"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-500/10 rounded-full blur-xl -mt-20 -mr-20"></div>
        
        <div class="container mx-auto px-6 relative z-10">
          <h1 class="text-4xl md:text-5xl font-bold mb-6 hero-title">
            High Risk Processing <span class="text-red-300">Industries</span>
          </h1>
          <p class="text-xl max-w-3xl hero-text leading-relaxed">
            Explore our comprehensive list of high-risk processing industries. We specialize in providing tailored payment solutions for businesses that face unique challenges in accepting payments due to their industry classification or business model.
          </p>
        </div>
      </section>
      
      <!-- Search and Filter Section - Improved styling -->
      <section class="py-12 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
          <div class="mb-10 bg-white rounded-xl shadow-lg p-8 transform transition hover:shadow-xl duration-300 border border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Search Input -->
              <div class="col-span-1 md:col-span-2">
                <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Search Industries</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                  </div>
                  <input
                    type="text"
                    id="search"
                    v-model="searchQuery"
                    class="focus:ring-red-800 focus:border-red-800 block w-full pl-12 pr-4 py-3.5 border-gray-300 rounded-lg text-gray-700"
                    placeholder="Search for an industry..."
                  />
                </div>
              </div>
              
              <!-- Category Filter -->
              <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Filter by Category</label>
                <div class="relative">
                  <select
                    id="category"
                    v-model="selectedCategory"
                    class="focus:ring-red-800 focus:border-red-800 block w-full py-3.5 px-4 border-gray-300 rounded-lg appearance-none text-gray-700 pr-10"
                  >
                    <option value="">All Categories</option>
                    <option v-for="category in categories" :key="category" :value="category">
                      {{ category }}
                    </option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Industries List Section - Main improvements here -->
      <section class="py-12">
        <div class="container mx-auto px-6">
          <!-- Display total count with improved styling -->
          <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-2xl font-bold text-gray-800">
              {{ filteredIndustries.length }} {{ filteredIndustries.length === 1 ? 'Industry' : 'Industries' }}
            </h2>
            
            <div class="mt-4 sm:mt-0">
              <span class="text-gray-600 mr-2">Sort by:</span>
              <select
                v-model="sortBy"
                class="focus:ring-red-800 focus:border-red-800 px-4 py-2 border-gray-300 rounded-lg text-sm"
              >
                <option value="alphabetical">A-Z</option>
                <option value="categoryAsc">Category (A-Z)</option>
                <option value="categoryDesc">Category (Z-A)</option>
              </select>
            </div>
          </div>
          
          <!-- No results message - Enhanced styling -->
          <div v-if="filteredIndustries.length === 0" class="text-center py-16 bg-gray-50 rounded-xl shadow-sm">
            <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="mt-4 text-2xl font-medium text-gray-900">No industries found</h3>
            <p class="mt-2 text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
          </div>
          
          <!-- Industries Grid - MAJOR REDESIGN HERE -->
          <div v-else class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <router-link
              v-for="industry in filteredIndustries"
              :key="industry.name"
              :to="`/industries/${industry.slug}`"
              class="industry-card group relative rounded-xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl"
            >
              <!-- Color overlay based on category -->
              <div class="absolute inset-0 opacity-90" :class="getCategoryColorClass(industry.category)"></div>
              
              <!-- Subtle pattern overlay -->
              <div class="absolute inset-0 opacity-20 mix-blend-overlay bg-gradient-to-br from-black/20 via-transparent to-white/20" 
                   style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.3\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'1\'/%3E%3C/g%3E%3C/svg%3E');"></div>
              
              <!-- Glass card effect -->
              <div class="relative z-10 backdrop-blur-sm p-6 h-full flex flex-col justify-between bg-gradient-to-b from-white/10 to-black/10">
                <!-- Category badge -->
                <div class="mb-4">
                  <span class="inline-block px-3 py-1 text-xs font-bold rounded-full backdrop-blur-md shadow-sm" 
                        :class="getCategoryBadgeClass(industry.category)">
                    {{ industry.category }}
                  </span>
                </div>
                
                <!-- Industry name -->
                <div>
                  <h3 class="text-xl font-bold text-white mb-2 group-hover:text-white/90 transition-colors">
                    {{ industry.name }}
                  </h3>
                  
                  <!-- Animated arrow -->
                  <div class="flex items-center text-white/80 group-hover:text-white transition-all duration-300">
                    <span class="text-sm mr-2">Learn more</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform duration-300" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                  </div>
                </div>
              </div>
            </router-link>
          </div>
        </div>
      </section>
      
      <!-- CTA Section - Enhanced with better styling -->
      <section class="bg-gradient-to-br from-red-900 to-red-800 py-20 relative overflow-hidden">
        <!-- Decorative shapes -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
          <div class="absolute top-0 right-0 bg-white rounded-full w-64 h-64 -mt-20 -mr-20"></div>
          <div class="absolute bottom-0 left-0 bg-white rounded-full w-80 h-80 -mb-32 -ml-32"></div>
        </div>
        
        <div class="container mx-auto px-6 text-center relative z-10">
          <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white hero-title">Need a Customized Solution?</h2>
          <p class="text-xl mb-10 max-w-2xl mx-auto text-white/90 hero-text">
            Our team specializes in creating tailored payment processing solutions for high-risk industries.
          </p>
          <router-link
            to="/request-consultation"
            class="inline-flex items-center px-8 py-4 text-lg font-semibold text-red-900 bg-white rounded-lg shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group"
          >
            <span>Request a Consultation</span>
            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" 
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </router-link>
        </div>
      </section>
    </main>
    
    <!-- Footer -->
    <AppFooter />
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';

// Define categories
const categories = [
  'Financial Services',
  'E-commerce',
  'Health & Wellness',
  'Gaming & Entertainment',
  'Regulated Products',
  'Professional Services',
  'Travel',
  'Collectibles',
  'Digital Services',
  'Education'
];

// Industry data with names, slugs, and categories
const industries = ref([
  { name: 'Adult', slug: 'adult-industry', category: 'Gaming & Entertainment' },
  { name: 'Airline Booking', slug: 'airline-booking', category: 'Travel' },
  { name: 'Auction Houses', slug: 'auction-houses', category: 'Collectibles' },
  { name: 'Automotive', slug: 'automotive', category: 'Professional Services' },
  { name: 'Background Checks', slug: 'background-checks', category: 'Professional Services' },
  { name: 'Bad Credit', slug: 'bad-credit', category: 'Financial Services' },
  { name: 'Business Consulting', slug: 'business-consulting', category: 'Professional Services' },
  { name: 'Business Opportunities', slug: 'business-opportunities', category: 'Professional Services' },
  { name: 'CBD Oil', slug: 'cbd-oil', category: 'Health & Wellness' },
  { name: 'Coaching', slug: 'coaching', category: 'Education' },
  { name: 'Coin Collectibles', slug: 'coin-collectibles', category: 'Collectibles' },
  { name: 'Collection Agency', slug: 'collection-agency', category: 'Financial Services' },
  { name: 'Credit Education Repair', slug: 'credit-education-repair', category: 'Financial Services' },
  { name: 'Credit Monitoring', slug: 'credit-monitoring', category: 'Financial Services' },
  { name: 'Cryptocurrency Trading', slug: 'cryptocurrency-trading', category: 'Financial Services' },
  { name: 'Dating', slug: 'dating', category: 'Digital Services' },
  { name: 'Debt Settlement', slug: 'debt-settlement', category: 'Financial Services' },
  { name: 'Document Preparation', slug: 'document-preparation', category: 'Professional Services' },
  { name: 'Fantasy Sports', slug: 'fantasy-sports', category: 'Gaming & Entertainment' },
  { name: 'Fintech', slug: 'fintech', category: 'Financial Services' },
  { name: 'Fire Arms', slug: 'fire-arms', category: 'Regulated Products' },
  { name: 'Forex Platforms', slug: 'forex-platforms', category: 'Financial Services' },
  { name: 'Gentlemans Club', slug: 'gentlemans-club', category: 'Gaming & Entertainment' },
  { name: 'Health and Beauty', slug: 'health-and-beauty', category: 'Health & Wellness' },
  { name: 'High Volume', slug: 'high-volume', category: 'E-commerce' },
  { name: 'HIPAA Compliant', slug: 'hipaa-compliant', category: 'Health & Wellness' },
  { name: 'Insurance Premium Financing', slug: 'insurance-premium-financing', category: 'Financial Services' },
  { name: 'Investment Advisory', slug: 'investment-advisory', category: 'Financial Services' },
  { name: 'Investment Recovery', slug: 'investment-recovery', category: 'Financial Services' },
  { name: 'Male Enhancement', slug: 'male-enhancement', category: 'Health & Wellness' },
  { name: 'Money Transfer', slug: 'money-transfer', category: 'Financial Services' },
  { name: 'Multi Level Marketing', slug: 'multi-level-marketing', category: 'E-commerce' },
  { name: 'Nonprofit', slug: 'nonprofit', category: 'Professional Services' },
  { name: 'Nutraceuticals', slug: 'nutraceuticals', category: 'Health & Wellness' },
  { name: 'Online Gaming', slug: 'online-gaming', category: 'Gaming & Entertainment' },
  { name: 'Pawn Shops', slug: 'pawn-shops', category: 'Financial Services' },
  { name: 'Pay Lenders', slug: 'pay-lenders', category: 'Financial Services' },
  { name: 'Peer to Peer Lending', slug: 'peer-to-peer-lending', category: 'Financial Services' },
  { name: 'Pharmacy', slug: 'pharmacy', category: 'Health & Wellness' },
  { name: 'Precious Metals Jewelry', slug: 'precious-metals-jewelry', category: 'Collectibles' },
  { name: 'Property Management', slug: 'property-management', category: 'Professional Services' },
  { name: 'Restaurant', slug: 'restaurant', category: 'Professional Services' },
  { name: 'Shopping Membership Club', slug: 'shopping-membership-club', category: 'E-commerce' },
  { name: 'Skill Based Gaming', slug: 'skill-based-gaming', category: 'Gaming & Entertainment' },
  { name: 'Skin Hair Care', slug: 'skin-hair-care', category: 'Health & Wellness' },
  { name: 'Social Gaming', slug: 'social-gaming', category: 'Gaming & Entertainment' },
  { name: 'Sports Betting', slug: 'sports-betting', category: 'Gaming & Entertainment' },
  { name: 'Sweepstakes', slug: 'sweepstakes', category: 'Gaming & Entertainment' },
  { name: 'Tech Support', slug: 'tech-support', category: 'Digital Services' },
  { name: 'Telemedicine', slug: 'telemedicine', category: 'Health & Wellness' },
  { name: 'Trading Platforms', slug: 'trading-platforms', category: 'Financial Services' },
  { name: 'Travel', slug: 'travel', category: 'Travel' },
  { name: 'Vape', slug: 'vape', category: 'Regulated Products' },
  { name: 'Web Design SEO', slug: 'web-design-seo', category: 'Digital Services' }
]);

// Filter and sort states
const searchQuery = ref('');
const selectedCategory = ref('');
const sortBy = ref('alphabetical');

// Get filtered and sorted industries list
const filteredIndustries = computed(() => {
  let result = [...industries.value];
  
  // Apply search filter
  if (searchQuery.value) {
    const query = searchQuery.value.toLowerCase().trim();
    result = result.filter(industry => 
      industry.name.toLowerCase().includes(query) || 
      industry.category.toLowerCase().includes(query)
    );
  }
  
  // Apply category filter
  if (selectedCategory.value) {
    result = result.filter(industry => industry.category === selectedCategory.value);
  }
  
  // Apply sorting
  switch (sortBy.value) {
    case 'alphabetical':
      result.sort((a, b) => a.name.localeCompare(b.name));
      break;
    case 'categoryAsc':
      result.sort((a, b) => a.category.localeCompare(b.category) || a.name.localeCompare(b.name));
      break;
    case 'categoryDesc':
      result.sort((a, b) => b.category.localeCompare(a.category) || a.name.localeCompare(b.name));
      break;
  }
  
  return result;
});

// Helper functions for styling based on category - UPDATED WITH GRADIENT BACKGROUNDS
const getCategoryColorClass = (category) => {
  switch (category) {
    case 'Financial Services': return 'bg-gradient-to-br from-blue-600 to-blue-800';
    case 'E-commerce': return 'bg-gradient-to-br from-purple-600 to-purple-800';
    case 'Health & Wellness': return 'bg-gradient-to-br from-green-600 to-green-800';
    case 'Gaming & Entertainment': return 'bg-gradient-to-br from-red-600 to-red-800';
    case 'Regulated Products': return 'bg-gradient-to-br from-yellow-600 to-yellow-800';
    case 'Professional Services': return 'bg-gradient-to-br from-indigo-600 to-indigo-800';
    case 'Travel': return 'bg-gradient-to-br from-teal-600 to-teal-800';
    case 'Collectibles': return 'bg-gradient-to-br from-amber-600 to-amber-800';
    case 'Digital Services': return 'bg-gradient-to-br from-cyan-600 to-cyan-800';
    case 'Education': return 'bg-gradient-to-br from-pink-600 to-pink-800';
    default: return 'bg-gradient-to-br from-gray-600 to-gray-800';
  }
};

// Updated badge classes
const getCategoryBadgeClass = (category) => {
  switch (category) {
    case 'Financial Services': return 'bg-white/30 text-white border border-blue-400/30';
    case 'E-commerce': return 'bg-white/30 text-white border border-purple-400/30';
    case 'Health & Wellness': return 'bg-white/30 text-white border border-green-400/30';
    case 'Gaming & Entertainment': return 'bg-white/30 text-white border border-red-400/30';
    case 'Regulated Products': return 'bg-white/30 text-white border border-yellow-400/30';
    case 'Professional Services': return 'bg-white/30 text-white border border-indigo-400/30';
    case 'Travel': return 'bg-white/30 text-white border border-teal-400/30';
    case 'Collectibles': return 'bg-white/30 text-white border border-amber-400/30';
    case 'Digital Services': return 'bg-white/30 text-white border border-cyan-400/30';
    case 'Education': return 'bg-white/30 text-white border border-pink-400/30';
    default: return 'bg-white/30 text-white border border-gray-400/30';
  }
};

// Sort alphabetically by default when component mounts
onMounted(() => {
  sortBy.value = 'alphabetical';
});
</script>

<style scoped>
/* Import custom fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Apply font families to elements */
h1, h2, h3, h4, h5, h6, .hero-title {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, blockquote, li, .hero-text {
  font-family: 'Inter', sans-serif;
}

/* Industry card effects */
.industry-card {
  box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
  will-change: transform;
  backface-visibility: hidden;
  perspective: 1000px;
}

.industry-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(0,0,0,0.4) 100%);
  opacity: 0.7;
  z-index: 1;
  transition: opacity 0.3s ease;
}

.industry-card:hover::before {
  opacity: 0.5;
}

/* Animated hover effect for cards */
@keyframes shine {
  0% {
    background-position: 0% 0%;
  }
  100% {
    background-position: 200% 0%;
  }
}

.industry-card:hover {
  box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.2);
}

.industry-card:hover::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 200%;
  height: 100%;
  background: linear-gradient(90deg, 
                              rgba(255,255,255,0) 0%, 
                              rgba(255,255,255,0.1) 25%,
                              rgba(255,255,255,0.1) 50%,
                              rgba(255,255,255,0) 100%);
  animation: shine 1.5s infinite;
  z-index: 3;
}

/* Improved form elements focus state */
input:focus, select:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(151, 49, 49, 0.2);
}

/* Enhanced transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Hero section animation for page load */
.hero-title, .hero-text {
  opacity: 0;
  animation: fadeInUp 0.8s forwards;
}

.hero-text {
  animation-delay: 0.2s;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
