<template>
  <div class="min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <NavBar />
    
    <!-- Main Content -->
    <main class="flex-grow">
      <!-- Hero Section -->
      <section class="bg-gradient-to-r from-gray-900 to-red-900 text-white py-16">
        <div class="container mx-auto px-6">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">High Risk Processing Industries</h1>
          <p class="text-xl max-w-3xl">
            Explore our comprehensive list of high-risk processing industries. We specialize in providing tailored payment solutions for businesses that face unique challenges in accepting payments due to their industry classification or business model.
          </p>
        </div>
      </section>
      
      <!-- Search and Filter Section -->
      <section class="py-10 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="mb-8 bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              <!-- Search Input -->
              <div class="col-span-1 md:col-span-2">
                <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Search Industries</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                  </div>
                  <input
                    type="text"
                    id="search"
                    v-model="searchQuery"
                    class="focus:ring-red-800 focus:border-red-800 block w-full pl-10 pr-4 py-3 border-gray-300 rounded-md"
                    placeholder="Search for an industry..."
                  />
                </div>
              </div>
              
              <!-- Category Filter -->
              <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Filter by Category</label>
                <select
                  id="category"
                  v-model="selectedCategory"
                  class="focus:ring-red-800 focus:border-red-800 block w-full py-3 px-4 border-gray-300 rounded-md"
                >
                  <option value="">All Categories</option>
                  <option v-for="category in categories" :key="category" :value="category">
                    {{ category }}
                  </option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Industries List Section -->
      <section class="py-12">
        <div class="container mx-auto px-6">
          <!-- Display total count -->
          <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-2xl font-bold text-gray-800">
              {{ filteredIndustries.length }} {{ filteredIndustries.length === 1 ? 'Industry' : 'Industries' }}
            </h2>
            
            <div class="mt-4 sm:mt-0">
              <span class="text-gray-600 mr-2">Sort by:</span>
              <select
                v-model="sortBy"
                class="focus:ring-red-800 focus:border-red-800 px-3 py-1 border-gray-300 rounded-md text-sm"
              >
                <option value="alphabetical">A-Z</option>
                <option value="categoryAsc">Category (A-Z)</option>
                <option value="categoryDesc">Category (Z-A)</option>
              </select>
            </div>
          </div>
          
          <!-- No results message -->
          <div v-if="filteredIndustries.length === 0" class="text-center py-10">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="mt-2 text-xl font-medium text-gray-900">No industries found</h3>
            <p class="mt-1 text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
          </div>
          
          <!-- Industries Grid -->
          <div v-else class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div
              v-for="industry in filteredIndustries"
              :key="industry.name"
              class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              <div class="h-3 bg-gradient-to-r" :class="getCategoryColorClass(industry.category)"></div>
              <div class="p-6">
                <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full mb-3" :class="getCategoryBadgeClass(industry.category)">
                  {{ industry.category }}
                </span>
                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ industry.name }}</h3>
                <router-link
                  :to="`/industries/${industry.slug}`"
                  class="mt-4 inline-flex items-center text-red-800 hover:text-red-600"
                >
                  Learn more
                  <svg class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- CTA Section -->
      <section class="bg-red-800 text-white py-16">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-3xl font-bold mb-6">Need a Customized Solution?</h2>
          <p class="text-xl mb-8 max-w-2xl mx-auto">
            Our team specializes in creating tailored payment processing solutions for high-risk industries.
          </p>
          <router-link
            to="/request-consultation"
            class="inline-block bg-white text-red-800 font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300"
          >
            Request a Consultation
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
  { name: 'Franchise', slug: 'franchise', category: 'Professional Services' },
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

// Helper functions for styling based on category
const getCategoryColorClass = (category) => {
  switch (category) {
    case 'Financial Services': return 'from-blue-500 to-blue-700';
    case 'E-commerce': return 'from-purple-500 to-purple-700';
    case 'Health & Wellness': return 'from-green-500 to-green-700';
    case 'Gaming & Entertainment': return 'from-red-500 to-red-700';
    case 'Regulated Products': return 'from-yellow-500 to-yellow-700';
    case 'Professional Services': return 'from-indigo-500 to-indigo-700';
    case 'Travel': return 'from-teal-500 to-teal-700';
    case 'Collectibles': return 'from-amber-500 to-amber-700';
    case 'Digital Services': return 'from-cyan-500 to-cyan-700';
    case 'Education': return 'from-pink-500 to-pink-700';
    default: return 'from-gray-500 to-gray-700';
  }
};

const getCategoryBadgeClass = (category) => {
  switch (category) {
    case 'Financial Services': return 'bg-blue-100 text-blue-800';
    case 'E-commerce': return 'bg-purple-100 text-purple-800';
    case 'Health & Wellness': return 'bg-green-100 text-green-800';
    case 'Gaming & Entertainment': return 'bg-red-100 text-red-800';
    case 'Regulated Products': return 'bg-yellow-100 text-yellow-800';
    case 'Professional Services': return 'bg-indigo-100 text-indigo-800';
    case 'Travel': return 'bg-teal-100 text-teal-800';
    case 'Collectibles': return 'bg-amber-100 text-amber-800';
    case 'Digital Services': return 'bg-cyan-100 text-cyan-800';
    case 'Education': return 'bg-pink-100 text-pink-800';
    default: return 'bg-gray-100 text-gray-800';
  }
};

// Sort alphabetically by default when component mounts
onMounted(() => {
  sortBy.value = 'alphabetical';
});
</script>

<style scoped>
/* Smooth transitions for hover effects */
.transition {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Card hover animations */
.hover\:scale-105:hover {
  transform: scale(1.05);
}

/* Make category badges look nicer */
.rounded-full {
  border-radius: 9999px;
}
</style>
