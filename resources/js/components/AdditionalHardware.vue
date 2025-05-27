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
        @click="$emit('open-hardware-modal', hardware)"
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

</template>

<script setup>
const props = defineProps({
  additionalHardwareOptions: {
    type: Array,
    required: true
  }
});

const emit = defineEmits(['add-to-cart', 'open-hardware-modal']);
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