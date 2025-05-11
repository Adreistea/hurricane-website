# Bundle Modal Implementation Instructions

## Issue Overview

You're getting the error because there's already a `bundleQuantity` variable declared in your file at line 4291:
```
// Add new data for the Bundle Details Modal
const selectedBundleDetails = ref(null);
const bundleQuantity = ref(0);
const modalOffsetTop = ref(0); // Modal position offset
```

## Solution

Follow these steps to implement the bundle quantity selector without variable conflicts:

### 1. Find the `selectValueBundle` function in your file (around line 3803)

Replace it with this code:
```javascript
function selectValueBundle() {
  // Set the selected bundle details for the Complete POS Solution Package
  selectedBundleDetails.value = {
    name: 'Complete POS Solution Package',
    price: '$999.00',
    originalPrice: '$2,388.00'
  };
  
  // Reset quantity to 1 each time
  bundleQuantity.value = 1;
  
  // Calculate modal position
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const windowHeight = window.innerHeight;
  modalOffsetTop.value = scrollTop - (windowHeight * 0.2);
  modalOffsetTop.value = Math.max(0, modalOffsetTop.value);
  
  // Show the modal
  showBundleModal.value = true;
}
```

### 2. Update the `addBundleToCart` function (around line 3650)

Modify it to handle the complete solution package:

```javascript
function addBundleToCart() {
  if (bundleQuantity.value <= 0) {
    alert('Please select at least 1 bundle');
    return;
  }

  // Check if this is the Complete POS Solution Package
  if (selectedBundleDetails.value && selectedBundleDetails.value.name === 'Complete POS Solution Package') {
    // Calculate the price
    const totalPrice = 999 * bundleQuantity.value;
    
    // Format with currency
    const formattedPrice = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    }).format(totalPrice);
    
    // Add to cart with quantity info
    addToCart({
      name: `Complete POS Solution Package (${bundleQuantity.value} ${bundleQuantity.value > 1 ? 'bundles' : 'bundle'})`,
      price: formattedPrice,
      quantity: bundleQuantity.value
    });
    
    // Show success message
    cartSuccessMessage.value = `${bundleQuantity.value} bundle${bundleQuantity.value > 1 ? 's' : ''} added to cart successfully!`;
    showCartSuccessMessage.value = true;
    
    // Hide success message after 3 seconds
    setTimeout(() => {
      showCartSuccessMessage.value = false;
    }, 3000);
    
    // Close the modal
    showBundleModal.value = false;
    return;
  }
  
  // Rest of your existing addBundleToCart code for other bundle types
  // ...
}
```

### 3. Update the bundle quantity selector in the modal (around line 2525)

Look for the bundle quantity selector section and ensure it looks like this:
```html
<!-- Bundles quantity selector -->
<div class="mt-6 pt-5 border-t border-gray-200" v-if="selectedBundleDetails?.name !== 'Setup for Kwick: Basic Setup'">
  <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-4 rounded-lg border border-gray-300 shadow-sm">
    <div class="flex flex-col gap-3">
      <div>
        <label for="bundleQuantity" class="block text-lg font-bold text-gray-900 mb-2 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>
          {{ selectedBundleDetails?.name === 'Complete POS Solution Package' ? 'Quantity:' : (selectedBundleDetails?.name === 'Handheld - A920' ? 'Units:' : 'Bundles:') }}
        </label>
        
        <!-- Special quantity control for Complete POS Solution Package -->
        <div v-if="selectedBundleDetails?.name === 'Complete POS Solution Package'" class="flex items-center">
          <button 
            @click="decrementBundleQuantity" 
            class="bg-gray-200 text-gray-700 rounded-l-md px-3 py-2 hover:bg-gray-300"
            type="button"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
          </button>
          <input 
            type="number" 
            v-model="bundleQuantity" 
            min="1" 
            class="w-20 border-t border-b border-gray-300 text-center py-2 focus:outline-none focus:ring-1 focus:ring-custom-red"
          >
          <button 
            @click="incrementBundleQuantity" 
            class="bg-gray-200 text-gray-700 rounded-r-md px-3 py-2 hover:bg-gray-300"
            type="button"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
          </button>
          
          <div class="ml-4 text-lg font-bold">
            Total: <span class="text-custom-red">${{(bundleQuantity * 999).toFixed(2)}}</span>
            <span class="ml-2 text-sm text-gray-500 line-through">${{(bundleQuantity * 2388).toFixed(2)}}</span>
          </div>
        </div>
        
        <!-- Standard dropdown for other bundles -->
        <select 
          v-else
          id="bundleQuantity" 
          v-model="bundleQuantity" 
          class="rounded-md border-gray-300 shadow-md focus:border-custom-red focus:ring focus:ring-custom-red focus:ring-opacity-30 w-full text-base font-medium py-2 bg-white hover:bg-gray-50 transition-colors"
        >
          <option value="0">None</option>
          <template v-for="(price, index) in getBundlePricesArray(selectedBundleDetails?.name)" :key="index">
            <option :value="index + 1">{{ price.name }} ({{ price.price }})</option>
          </template>
        </select>
      </div>
      <p class="text-sm text-gray-600 italic">Select the number of {{ selectedBundleDetails?.name === 'Complete POS Solution Package' ? 'bundles' : (selectedBundleDetails?.name === 'Handheld - A920' ? 'units' : 'bundles') }} required for your business</p>
    </div>
  </div>
</div>
```

These changes use the existing `bundleQuantity` variable and modal while adding special handling for the Complete POS Solution Package. 