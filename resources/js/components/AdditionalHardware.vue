<template>
  <!-- Additional Hardware Section -->
  <div>
    <h2 class="text-2xl font-bold text-gray-800 mb-6 mt-12 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
      </svg>
      Additional Hardware
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
      <!-- Additional Hardware cards -->
      <div v-for="(hardware, index) in additionalHardwareOptions" :key="index"
        @click="openHardwareModal(hardware)"
        class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 cursor-pointer transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 hover:border-custom-red">
        
        <!-- Hardware image -->
        <div class="h-40 bg-gray-50 flex items-center justify-center p-4 relative overflow-hidden">
          <template v-if="hardware.name === 'KP Thermal Printer'">
            <img src="@/../images/KPThermal.png" :alt="hardware.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
          </template>
          <template v-else-if="hardware.name === 'Epson Kitchen Printer'">
            <img src="@/../images/A7407925.png" :alt="hardware.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
          </template>
          <template v-else-if="hardware.name === 'Epson Label Printer'">
            <img src="@/../images/A7407925.png" :alt="hardware.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
          </template>
          <template v-else-if="hardware.name === 'Kitchen Display Monitor 20&quot;'">
            <img src="@/../images/ELO-refurbished KDS.png" :alt="hardware.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
          </template>
          <template v-else-if="hardware.name === 'Kitchen Armor Kitchen Display Monitor 22&quot;'">
            <img src="@/../images/ELO-refurbished KDS.png" :alt="hardware.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
          </template>
          <template v-else>
            <img src="@/../images/fourth.png" :alt="hardware.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
          </template>
          
          <!-- Subtle overlay with Add text that appears on hover -->
          <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-gray-900/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="bg-custom-red text-white px-4 py-1 rounded-full font-medium transform scale-90 hover:scale-100 transition-transform">
              Select Quantity
            </div>
          </div>
        </div>
        
        <div class="p-6">
          <h5 class="text-lg font-bold text-gray-800 mb-3">{{ hardware.name }}</h5>
          <div class="flex items-center justify-between">
            <span class="text-xl font-bold text-gray-900">{{ hardware.price }}</span>
            <span class="text-custom-red font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Hardware Quantity Modal -->
  <div 
    v-if="showHardwareModal" 
    class="fixed inset-0 z-50 overflow-hidden" 
    style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(2px);"
    @click.self="showHardwareModal = false"
  >
    <!-- Modal content -->
    <div 
      class="bg-white rounded-lg shadow-2xl overflow-hidden max-w-3xl w-full max-h-[90vh] fixed z-[100] border border-gray-200"
      style="top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >
      <!-- Modal header -->
      <div class="flex justify-between items-center p-4 border-b border-gray-200">
        <h3 class="text-xl font-bold text-gray-800">{{ selectedHardware?.name }}</h3>
        <button @click.stop.prevent="showHardwareModal = false" class="text-gray-400 hover:text-gray-600 transition-colors" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <!-- Modal body -->
      <div class="overflow-y-auto max-h-[calc(90vh-10rem)]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
          <!-- Product image -->
          <div class="bg-gray-50 p-4 rounded-lg flex items-center justify-center">
            <template v-if="selectedHardware?.name === 'KP Thermal Printer'">
              <img src="@/../images/KPThermal.png" :alt="selectedHardware?.name" class="h-64 object-contain">
            </template>
            <template v-else-if="selectedHardware?.name === 'Epson Kitchen Printer'">
              <img src="@/../images/A7407925.png" :alt="selectedHardware?.name" class="h-64 object-contain">
            </template>
            <template v-else-if="selectedHardware?.name === 'Epson Label Printer'">
              <img src="@/../images/A7407925.png" :alt="selectedHardware?.name" class="h-64 object-contain">
            </template>
            <template v-else-if="selectedHardware?.name === 'Kitchen Display Monitor 20&quot;'">
              <img src="@/../images/ELO-refurbished KDS.png" :alt="selectedHardware?.name" class="h-64 object-contain">
            </template>
            <template v-else-if="selectedHardware?.name === 'Kitchen Armor Kitchen Display Monitor 22&quot;'">
              <img src="@/../images/ELO-refurbished KDS.png" :alt="selectedHardware?.name" class="h-64 object-contain">
            </template>
            <template v-else>
              <img src="@/../images/fourth.png" :alt="selectedHardware?.name" class="h-64 object-contain">
            </template>
          </div>
          
          <!-- Product details -->
          <div class="flex flex-col">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ selectedHardware?.name }}</h1>
            <div class="flex items-center mb-4">
              <div class="flex text-yellow-400">
                <svg v-for="i in 5" :key="i" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" :class="i <= 5 ? 'text-yellow-400' : 'text-gray-300'" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <span class="text-blue-600 text-sm ml-2 hover:underline cursor-pointer">120+ ratings</span>
            </div>
            
            <div class="border-t border-b border-gray-200 py-4 mb-4">
              <div class="flex items-baseline mb-2">
                <span class="text-3xl font-bold text-gray-900">{{ getTotalPrice }}</span>
              </div>
              <div class="bg-green-100 text-green-800 inline-block px-2 py-1 rounded text-sm font-medium">
                Free Shipping
              </div>
            </div>
            
            <div class="space-y-4 mb-6">
              <div>
                <h4 class="font-medium text-gray-900">Description</h4>
                <p class="text-gray-700 text-sm">High-quality hardware component for your POS system. Compatible with most major POS solutions. Designed for durability and reliability in demanding business environments.</p>
              </div>
              
              <!-- Quantity selector -->
              <div class="mt-6 pt-5 border-t border-gray-200">
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-4 rounded-lg border border-gray-300 shadow-sm">
                  <div class="flex flex-col gap-3">
                    <div>
                      <label for="hardwareQuantity" class="block text-lg font-bold text-gray-900 mb-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        Quantity:
                      </label>
                      <select 
                        id="hardwareQuantity" 
                        v-model="hardwareQuantity" 
                        class="rounded-md border-gray-300 shadow-md focus:border-custom-red focus:ring focus:ring-custom-red focus:ring-opacity-30 w-full text-base font-medium py-2 bg-white hover:bg-gray-50 transition-colors"
                      >
                        <option v-for="i in 10" :key="i" :value="i">
                          {{ i }} {{ i === 1 ? 'unit' : 'units' }} ({{ formatPrice(getUnitPrice * i) }})
                        </option>
                      </select>
                    </div>
                    <p class="text-sm text-gray-600 italic">Select the quantity required for your business</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal footer -->
      <div class="border-t border-gray-200 p-4 bg-gray-50 flex justify-end gap-4">
        <button 
          @click.stop="addHardwareWithQuantity" 
          class="cart-button px-8 py-2 text-white rounded-md font-medium transition-all duration-300"
          style="background-color: #973131;"
          type="button"
        >
          Add to Cart
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
  additionalHardwareOptions: {
    type: Array,
    required: true
  }
});

const emit = defineEmits(['add-to-cart']);

// Hardware modal state
const showHardwareModal = ref(false);
const selectedHardware = ref(null);
const hardwareQuantity = ref(1);

// Function to open hardware modal
function openHardwareModal(hardware) {
  selectedHardware.value = hardware;
  hardwareQuantity.value = 1; // Reset to 1 when opening modal
  showHardwareModal.value = true;
  
  // Prevent any unwanted navigation
  if (typeof event !== 'undefined' && event) {
    event.stopPropagation();
    event.preventDefault();
  }
}

// Function to add hardware with quantity to cart
function addHardwareWithQuantity() {
  if (hardwareQuantity.value <= 0) {
    alert('Please select at least 1 unit');
    return;
  }
  
  emit('add-to-cart', {
    name: selectedHardware.value.name,
    price: formatPrice(getUnitPrice.value * hardwareQuantity.value),
    quantity: hardwareQuantity.value
  });
  
  showHardwareModal.value = false;
}

// Helper to get the unit price as a number
const getUnitPrice = computed(() => {
  if (!selectedHardware.value) return 0;
  
  // Extract numeric value from price string (e.g., "$225.00" -> 225)
  return parseFloat(selectedHardware.value.price.replace(/[^0-9.]/g, ''));
});

// Format total price display
const getTotalPrice = computed(() => {
  return formatPrice(getUnitPrice.value * hardwareQuantity.value);
});

// Helper to format price
function formatPrice(price) {
  return new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  }).format(price);
}
</script>

<style scoped>
.cart-button {
  background-color: #973131 !important;
  box-shadow: 0 4px 6px rgba(151, 49, 49, 0.25);
  transform: translateY(0);
  transition: all 0.3s ease;
}

.cart-button:hover {
  background-color: #7e2016 !important;
  box-shadow: 0 6px 8px rgba(151, 49, 49, 0.35);
  transform: translateY(-2px);
}
</style> 