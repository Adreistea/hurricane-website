<template>  <div>
    <NavBar />
    
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
          <!-- Heading -->
          <div class="text-center mb-12">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="color: #973131;">
              Merchant 
            </h1>
            <p class="text-lg text-gray-600 mb-4">
              Let's get started! Please tell us about your business and see how much you could save with Hurricane Pay
            </p>
            <p class="text-md text-custom-red font-medium">
              <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                5 minutes to Complete App
              </span>
            </p>
            
            <!-- Toast Success Notification -->
            <div v-if="showCartSuccessMessage" class="fixed top-20 left-1/2 transform -translate-x-1/2 z-50 max-w-md w-full animate-fade-in">
              <div class="bg-green-100 border border-green-500 rounded-lg shadow-lg p-4 flex mx-4">
                <div class="flex-shrink-0 bg-green-500 rounded-full p-2">
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="ml-4 flex-grow text-center">
                  <p class="text-base font-bold text-green-800">
                    {{ cartSuccessMessage }}
                  </p>
                </div>
                <div class="ml-auto pl-3">
                  <div class="-mx-1.5 -my-1.5">
                    <button @click="showCartSuccessMessage = false" class="text-green-600 hover:text-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 p-1 rounded-md">
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Shopping Cart Icon with Badge - Improved Design -->
            <div class="mt-4 inline-flex flex-col items-center">
              <div class="relative cursor-pointer" @click="showCartItems = !showCartItems">
                <div class="p-3 bg-gradient-to-br from-red-50 to-white rounded-full shadow-md flex items-center justify-center relative border border-red-100 hover:shadow-lg transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-custom-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                  <transition name="bounce">
                    <div v-if="cartItemCount > 0" class="absolute -top-1 -right-1 bg-custom-red text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center shadow-sm border border-white">
                      {{ cartItemCount }}
                    </div>
                  </transition>
                </div>
                <div class="text-sm text-custom-red font-medium mt-2 whitespace-nowrap">Your products are here</div>
              </div>
              <!-- Cart Items Dropdown -->
              <div v-if="showCartItems" class="absolute mt-16 w-72 bg-white rounded-md shadow-lg p-4 z-10 border border-gray-100">
                <h3 class="text-lg font-bold mb-2 text-gray-800 border-b pb-2">Your Selected Bundles</h3>
                <div v-if="cartItems.length === 0" class="text-gray-500 py-4 text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                  <p>Your cart is empty</p>
                </div>
                <ul v-else class="space-y-2 max-h-60 overflow-y-auto">
                  <li v-for="(item, index) in cartItems" :key="index" class="flex justify-between items-center p-2 hover:bg-gray-50 rounded">
                    <span class="font-medium text-gray-700">{{ item.name }}</span>
                    <div class="flex items-center">
                      <span class="text-sm text-gray-500 mr-2">{{ item.price }}</span>
                      <button @click="removeFromCart(index)" class="text-red-500 hover:text-red-700 bg-red-50 rounded-full p-1 hover:bg-red-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                  </li>
                </ul>
                <div v-if="cartItems.length > 0" class="mt-3 pt-3 border-t flex justify-between items-center">
                  <span class="text-sm text-gray-600">Total items: {{ cartItemCount }}</span>
                  <button class="px-3 py-1 bg-custom-red text-white text-sm rounded hover:bg-red-800 transition-colors">Continue</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Step Indicator -->
          <div class="flex justify-center mb-6">
            <div class="flex items-center">
              <div 
                v-for="(step, index) in steps" 
                :key="index" 
                class="flex items-center"
              >
                <div 
                  class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors duration-300 relative border shadow cursor-pointer"
                  :class="[
                    currentStep > index + 1 ? 'bg-custom-red text-white border-custom-red' : 
                    currentStep === index + 1 ? 'bg-custom-red text-white border-custom-red font-bold step-active' : 
                    'bg-gray-200 text-gray-800 border-gray-300'
                  ]"
                  :style="currentStep >= index + 1 ? 'background-color: #973131 !important; color: white !important' : ''"
                  @click="goToStep(index + 1)"
                >
                  <span v-if="currentStep > index + 1" class="absolute inset-0 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                  </span>
                  <span v-else class="step-number" :style="currentStep >= index + 1 ? 'color: white !important' : ''">{{ index + 1 }}</span>
                </div>
                <div 
                  v-if="index < steps.length - 1" 
                  class="w-20 h-1 mx-2"
                  :class="currentStep > index + 1 ? 'bg-custom-red' : 'bg-gray-300'"
                ></div>
              </div>
            </div>
          </div>
          
          <!-- Step Names Under Indicators -->
          <div class="flex justify-center mb-8">
            <div class="flex justify-center w-full max-w-6xl">
              <div class="grid grid-cols-8 gap-2 w-full">
              <div 
                v-for="(step, index) in steps" 
                :key="index"
                class="text-center cursor-pointer" 
                @click="goToStep(index + 1)"
              >
                <div 
                    class="text-xs md:text-sm font-medium px-1 py-1"
                    :class="currentStep === index + 1 ? 'text-custom-red font-bold' : 'text-gray-500'"
                >
                  {{ step }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Onboarding Form -->
          <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 transition-all duration-500">
            <form @submit.prevent="submitForm">
              <!-- Step 1: Business Information -->
              <div v-if="currentStep === 1" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Business Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                  <div>
                    <label for="firstName" class="block text-gray-700 font-medium mb-2">First Name *</label>
                    <input 
                      type="text" 
                      id="firstName" 
                      v-model="form.first_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="lastName" class="block text-gray-700 font-medium mb-2">Last Name *</label>
                    <input 
                      type="text" 
                      id="lastName" 
                      v-model="form.last_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="businessName" class="block text-gray-700 font-medium mb-2">Business Legal Name *</label>
                    <input 
                      type="text" 
                      id="businessName" 
                      v-model="form.business_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="phoneNumber" class="block text-gray-700 font-medium mb-2">Phone Number *</label>
                    <input 
                      type="tel" 
                      id="phoneNumber" 
                      v-model="form.phone_number" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="businessEmail" class="block text-gray-700 font-medium mb-2">Business Email *</label>
                    <input 
                      type="email" 
                      id="businessEmail" 
                      v-model="form.business_email" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="monthlyVolume" class="block text-gray-700 font-medium mb-2">Monthly Visa/MC/Discover/Amex Volume *</label>
                    <select 
                      id="monthlyVolume" 
                      v-model="form.monthly_volume" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Select volume range</option>
                      <option value="$0 (New business)">$0 (New business)</option>
                      <option value="$5,000 - $9,999">$5,000 - $9,999</option>
                      <option value="$10,000 - $29,999">$10,000 - $29,999</option>
                      <option value="$30,000 - $49,999">$30,000 - $49,999</option>
                      <option value="$50,000 - $99,999">$50,000 - $99,999</option>
                      <option value="$100,000+">$100,000+</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="averageSale" class="block text-gray-700 font-medium mb-2">Average Sale $ *</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500">$</span>
                      </div>
                      <input 
                        type="number" 
                        id="averageSale" 
                        v-model="form.average_sale" 
                        class="w-full pl-8 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        min="0"
                        required
                      >
                    </div>
                  </div>
                  
                  <div>
                    <label for="highTicket" class="block text-gray-700 font-medium mb-2">High Ticket Amount *</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500">$</span>
                      </div>
                      <input 
                        type="number" 
                        id="highTicket" 
                        v-model="form.high_ticket" 
                        class="w-full pl-8 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        min="0"
                        required
                      >
                    </div>
                  </div>
                </div>
                
                <div class="mb-8">
                  <div class="flex items-center">
                    <input 
                      type="checkbox" 
                      id="privacyAgreement" 
                      v-model="form.privacy_agreement" 
                      class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      required
                    >
                    <label for="privacyAgreement" class="ml-3 text-gray-700">
                      By submitting this form, you agree to our <a href="#" class="text-custom-red hover:underline">Privacy Policy</a>.
                    </label>
                  </div>
                  <p class="text-sm text-gray-500 mt-2 ml-8">Your information is confidential and secure.</p>
                </div>
              </div>
              
              <!-- Step 2: Business Details -->
              <div v-if="currentStep === 2" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Business Details</h3>
                
                <!-- Promotional Box -->
                <div class="mb-8 rounded-xl overflow-hidden">
                  <div class="bg-gradient-to-r from-red-800 to-red-600 px-6 py-4 text-white">
                    <div class="flex items-center justify-between">
                      <h4 class="text-2xl font-bold">Save up to $400</h4>
                      <div class="hidden md:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="bg-gray-50 p-6 rounded-b-xl border border-gray-200 border-t-0">
                    <h4 class="text-xl font-bold text-custom-red mb-4">Ready to Eliminate Processing Fees Forever? Same Day Approvals!!</h4>
                    <p class="text-gray-700 mb-4">Here is the process:</p>
                    
                    <div class="space-y-6">
                      <div class="flex">
                        <div class="flex-shrink-0 mt-1">
                          <div class="flex items-center justify-center w-8 h-8 rounded-full bg-custom-red text-white font-bold">1</div>
                        </div>
                        <div class="ml-4">
                          <h5 class="text-lg font-semibold text-gray-800">Complete your Application</h5>
                          <p class="text-gray-600">Get a Free Terminal with Your Online App Completion and a $50 Gift Card with Approval*</p>
                          <p class="text-sm font-bold text-custom-red mt-1">NO OBLIGATIONS</p>
                        </div>
                      </div>
                      
                      <div class="flex">
                        <div class="flex-shrink-0 mt-1">
                          <div class="flex items-center justify-center w-8 h-8 rounded-full bg-custom-red text-white font-bold">2</div>
                        </div>
                        <div class="ml-4">
                          <h5 class="text-lg font-semibold text-gray-800">Equipment Delivery and Installation</h5>
                          <p class="text-gray-600">We will process your application and schedule installation of your terminal.</p>
                        </div>
                      </div>
                      
                      <div class="flex">
                        <div class="flex-shrink-0 mt-1">
                          <div class="flex items-center justify-center w-8 h-8 rounded-full bg-custom-red text-white font-bold">3</div>
                        </div>
                        <div class="ml-4">
                          <h5 class="text-lg font-semibold text-gray-800">Start Saving!</h5>
                          <p class="text-gray-600">You can now process Credit Cards at 0% with your new state of the art equipment!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="grid grid-cols-1 gap-6 mb-8">
                  <div>
                    <label for="businessType" class="block text-gray-700 font-medium mb-2">Business Entity Type *</label>
                    <select 
                      id="businessType" 
                      v-model="form.business_entity_type" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Please select...</option>
                      <option value="Sole Prop">Sole Prop</option>
                      <option value="Partnership">Partnership</option>
                      <option value="LLC">LLC</option>
                      <option value="LLP">LLP</option>
                      <option value="C Corp">C Corp</option>
                      <option value="S Corp">S Corp</option>
                      <option value="Govt. (Local/State/Federal)">Govt. (Local/State/Federal)</option>
                      <option value="501 c/Tax Ex.">501 c/Tax Ex.</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="dba" class="block text-gray-700 font-medium mb-2">DBA (Doing Business As) name <span class="text-gray-500 text-sm font-normal">(Optional)</span></label>
                    <input 
                      type="text" 
                      id="dba" 
                      v-model="form.dba" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="This name will appear on your customer receipts"
                    >
                  </div>
                  
                  <div>
                    <label for="industryType" class="block text-gray-700 font-medium mb-2">Type of Business *</label>
                    <select 
                      id="industryType" 
                      v-model="form.industry_type" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Please select...</option>
                      <option value="Retail - Store Front Location">Retail - Store Front Location</option>
                      <option value="Restaurant">Restaurant</option>
                      <option value="Service Business">Service Business</option>
                      <option value="Mobile Business">Mobile Business</option>
                      <option value="Licensed Professional Service">Licensed Professional Service</option>
                      <option value="Online/MOTO">Online/MOTO</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="productService" class="block text-gray-700 font-medium mb-2">Product/Service Sold *</label>
                    <input 
                      type="text" 
                      id="productService" 
                      v-model="form.product_service" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="businessPhone" class="block text-gray-700 font-medium mb-2">Business Phone Number *</label>
                    <input 
                      type="tel" 
                      id="businessPhone" 
                      v-model="form.business_phone" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="yearStarted" class="block text-gray-700 font-medium mb-2">Year Business Started *</label>
                    <select 
                      id="yearStarted" 
                      v-model="form.year_started" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Select year</option>
                      <option v-for="year in businessYears" :key="year" :value="year">{{ year }}</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="website" class="block text-gray-700 font-medium mb-2">Website <span class="text-gray-500 text-sm font-normal">(Optional)</span></label>
                    <input 
                      type="url" 
                      id="website" 
                      v-model="form.website" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="https://www.yourbusiness.com"
                    >
                  </div>
                  
                  <div>
                    <label for="addressLine1" class="block text-gray-700 font-medium mb-2">Business Address Line 1 *</label>
                    <input 
                      type="text" 
                      id="addressLine1" 
                      v-model="form.address_line1" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="Street address"
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="addressLine2" class="block text-gray-700 font-medium mb-2">Business Address Line 2 <span class="text-gray-500 text-sm font-normal">(Optional)</span></label>
                    <input 
                      type="text" 
                      id="addressLine2" 
                      v-model="form.address_line2" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="Suite, Unit, etc."
                    >
                  </div>
                  
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label for="state" class="block text-gray-700 font-medium mb-2">State *</label>
                      <select 
                        id="state" 
                        v-model="form.state" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>Select state</option>
                        <option v-for="state in usStates" :key="state.code" :value="state.code">{{ state.name }}</option>
                      </select>
                    </div>
                    
                    <div>
                      <label for="zip" class="block text-gray-700 font-medium mb-2">ZIP Code *</label>
                      <input 
                        type="text" 
                        id="zip" 
                        v-model="form.zip" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Step 3: Restaurant Profile -->
              <div v-if="currentStep === 3" class="animate-fade-in">
                <div class="bg-white rounded-lg shadow-lg mb-8 overflow-hidden">
                  <div class="bg-gradient-to-r from-blue-600 to-blue-500 px-6 py-4">
                    <div class="flex justify-between items-center">
                      <h3 class="text-2xl font-bold text-white">
                        <span v-if="form.industry_type === 'Restaurant'">Restaurant Profile</span>
                        <span v-else-if="form.industry_type === 'Retail - Store Front Location'">Retail Profile</span>
                        <span v-else-if="form.industry_type === 'Service Business'">Service Business Profile</span>
                        <span v-else-if="form.industry_type === 'Mobile Business'">Mobile Business Profile</span>
                        <span v-else-if="form.industry_type === 'Licensed Professional Service'">Professional Service Profile</span>
                        <span v-else-if="form.industry_type === 'Online/MOTO'">Online Business Profile</span>
                        <span v-else>Business Profile</span>
                        <span class="text-sm bg-yellow-300 text-blue-800 px-2 py-1 rounded ml-2">Optional</span>
                      </h3>
                          <button 
                        @click="skipToConfirmation" 
                        type="button"
                        class="bg-white text-blue-600 px-4 py-2 rounded font-medium hover:bg-gray-100 transition-colors"
                      >
                        Skip this step
                          </button>
                        </div>
                      </div>
                  <div class="p-6">
                    <p class="text-gray-600 mb-6">
                      <span v-if="form.industry_type === 'Restaurant'">
                        We'd love to learn more about your restaurant to help us customize your POS system perfectly.
                      </span>
                      <span v-else-if="form.industry_type === 'Retail - Store Front Location'">
                        We'd love to learn more about your retail store to help us customize your POS system perfectly.
                      </span>
                      <span v-else-if="form.industry_type === 'Service Business'">
                        We'd love to learn more about your service business to help us customize your POS system perfectly.
                      </span>
                      <span v-else-if="form.industry_type === 'Mobile Business'">
                        We'd love to learn more about your mobile business to help us customize your POS system perfectly.
                      </span>
                      <span v-else-if="form.industry_type === 'Licensed Professional Service'">
                        We'd love to learn more about your professional service to help us customize your POS system perfectly.
                      </span>
                      <span v-else-if="form.industry_type === 'Online/MOTO'">
                        We'd love to learn more about your online business to help us customize your payment system perfectly.
                      </span>
                      <span v-else>
                        We'd love to learn more about your business to help us customize your system perfectly.
                      </span>
                      These questions are optional but will help us better understand your needs.
                    </p>
                    
                    <!-- Restaurant-specific questions -->
                    <div v-if="form.industry_type === 'Restaurant'" class="space-y-12">
                      <!-- Question 1 - Current POS System -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">Do you currently use a POS system?</h4>
                        <p class="text-gray-600 mb-4">Understanding your current setup helps us provide the best solution</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="option in [
                              'Yes, but it\'s outdated.',
                              'Yes, but it\'s slow or crashes often.',
                              'No, we\'re still using manual receipts/cash register.',
                              'We use tablets or apps, not a full POS.',
                              'We use one, but it doesn\'t support online orders.'
                            ]" 
                            :key="option"
                            @click="form.current_pos_status = option"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.current_pos_status === option ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.current_pos_status === option ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.current_pos_status === option" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ option }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 2 - Current Issues -->
                      <div v-if="form.current_pos_status">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What issues or limitations have you experienced with your current system?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply to your business</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div 
                            v-for="issue in [
                              {
                                title: 'System Crashes',
                                description: 'POS system freezes, jams, and kitchen touchscreens fail mid-rush, causing chaos and order delays.'
                              },
                              {
                                title: 'Difficult Menu Management',
                                description: 'Making changes to menus, modifiers, or combos is frustrating and often requires outside support.'
                              },
                              {
                                title: 'Lack of KDS Integration',
                                description: 'Poor or missing Kitchen Display System integration causes order confusion and longer ticket times.'
                              },
                              {
                                title: 'Poor Offline Functionality',
                                description: 'When internet goes down, system stops working entirely—no orders, no payments.'
                              },
                              {
                                title: 'Weak Inventory Tracking',
                                description: 'System doesn\'t track ingredients, portions, or spoilage well—leading to waste and cost overruns.'
                              },
                              {
                                title: 'Long Wait Times for Support',
                                description: 'Critical issues during dinner rush can\'t wait 30–60 minutes on hold with tech support.'
                              },
                              {
                                title: 'Non-Intuitive Order Entry',
                                description: 'Servers struggle to split checks, modify orders, or handle custom requests quickly.'
                              },
                              {
                                title: 'No Built-in Tip Pooling/Payroll',
                                description: 'Lack of labor management tools forces restaurant owners to juggle third-party systems.'
                              },
                              {
                                title: 'Limited Reporting Tools',
                                description: 'We want clear insights into performance—but get confusing or incomplete data.'
                              },
                              {
                                title: 'Expensive Monthly Add-Ons',
                                description: 'Online ordering, loyalty programs, or marketing tools are sold separately, driving up costs.'
                              },
                              {
                                title: 'Lack of Loyalty/Reservation Tools',
                                description: 'System doesn\'t include customer rewards or table reservations, forcing us to pay for third-party apps.'
                              },
                              {
                                title: 'Clunky Online Ordering Integration',
                                description: 'Orders from third-party delivery platforms don\'t sync well with in-house operations, causing errors.'
                              },
                              {
                                title: 'Lack of Table/Seat Management',
                                description: 'System isn\'t built for full-service restaurants and can\'t manage floor plans or seat-by-seat orders.'
                              },
                              {
                                title: 'Complicated Staff Training',
                                description: 'With high turnover, we need a system that\'s easy to train and use—current one isn\'t.'
                              }
                            ]" 
                            :key="issue.title"
                            @click="toggleIssue(issue.title)"
                            class="border rounded-lg p-4 cursor-pointer transition-all flex flex-col"
                            :class="form.current_system_issues.includes(issue.title) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-start mb-2">
                              <div class="w-5 h-5 rounded border mr-3 flex-shrink-0 mt-0.5 flex items-center justify-center"
                                :class="form.current_system_issues.includes(issue.title) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <svg v-if="form.current_system_issues.includes(issue.title)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                              </div>
                              <div>
                                <div class="font-medium text-gray-800">{{ issue.title }}</div>
                                <div class="text-sm text-gray-600 mt-1">{{ issue.description }}</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 3 - Order Management -->
                      <div v-if="form.current_system_issues.length > 0">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you currently manage dine-in, takeout, or online orders?</h4>
                        <p class="text-gray-600 mb-4">Understanding your order flow helps us optimize your system</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'Everything is manual or through separate systems.',
                              'We use messaging apps or call-ins.',
                              'We accept orders through Facebook but it\'s disorganized.',
                              'Online orders confuse our kitchen staff.',
                              'Customers have to wait long due to missing automation.'
                            ]" 
                            :key="method"
                            @click="form.order_management_method = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.order_management_method === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.order_management_method === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.order_management_method === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 4 - Customer Engagement Tools -->
                      <div v-if="form.order_management_method">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What tools do you use to engage with customers—like feedback, loyalty, or gift cards?</h4>
                        <p class="text-gray-600 mb-4">Customer engagement can significantly increase repeat business</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="tool in [
                              'We don\'t really use any.',
                              'Just basic comment cards.',
                              'Customers don\'t really leave reviews.',
                              'We tried gift cards but had no system to track them.',
                              'We use social media, but it\'s not consistent.'
                            ]" 
                            :key="tool"
                            @click="form.customer_engagement_tools = tool"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.customer_engagement_tools === tool ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.customer_engagement_tools === tool ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.customer_engagement_tools === tool" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ tool }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 5 - Staff Confidence -->
                      <div v-if="form.customer_engagement_tools">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How confident are your staff using your current system, especially during rush hours?</h4>
                        <p class="text-gray-600 mb-4">An intuitive system can reduce training time and staff errors</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="confidence in [
                              'They still ask a lot of questions.',
                              'New staff always need days of training.',
                              'Some staff only use it partially.',
                              'We don\'t have time to train them fully.',
                              'It\'s okay, but not efficient.'
                            ]" 
                            :key="confidence"
                            @click="form.staff_confidence = confidence"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.staff_confidence === confidence ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.staff_confidence === confidence ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.staff_confidence === confidence" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ confidence }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 6 - Technical Support -->
                      <div v-if="form.staff_confidence">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you handle technical issues or broken hardware?</h4>
                        <p class="text-gray-600 mb-4">Downtime can significantly impact your business revenue</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="support in [
                              'We wait days for a technician.',
                              'No local support, we DIY everything.',
                              'Replacing parts is expensive and slow.',
                              'We lose sales when printers go down.',
                              'No warranty, just buy new when broken.'
                            ]" 
                            :key="support"
                            @click="form.technical_support = support"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.technical_support === support ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.technical_support === support ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.technical_support === support" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ support }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 7 - Complete Solution -->
                      <div v-if="form.technical_support">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Would it help if you had a full solution that included: a local server, POS station, printer, credit card pinpad, QR ordering, marketing tools, and professional setup — all in one affordable package?</h4>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="response in [
                              'That would make a huge difference.',
                              'We\'ve been looking for something like that.',
                              'Only if the cost is manageable.',
                              'Yes, but we\'d need support and training.',
                              'That sounds like what we actually need.'
                            ]" 
                            :key="response"
                            @click="selectCompleteSolution(response)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.complete_solution_response === response ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.complete_solution_response === response ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.complete_solution_response === response" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ response }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Custom Bundle Offer (appears after complete solution answer) -->
                      <div v-if="form.complete_solution_response" class="bg-gradient-to-r from-red-100 to-yellow-50 rounded-lg border border-yellow-200 p-5">
                        <div class="flex flex-col md:flex-row items-start md:items-center">
                          <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-4">
                            <div class="bg-yellow-400 transform -rotate-12 px-3 py-1 text-lg font-bold uppercase tracking-wide text-red-900 inline-block">
                              Special Offer
                            </div>
                          </div>
                          <div class="flex-grow">
                            <h3 class="text-xl font-bold text-red-800 mb-1">Complete POS Solution Package</h3>
                            <div class="flex items-baseline mb-2">
                              <span class="text-2xl font-bold text-gray-900">$999.00</span>
                              <span class="ml-2 text-red-600 line-through text-lg">$2,388.00</span>
                              <span class="ml-2 text-gray-500">or $49/Month</span>
                            </div>
                            <ul class="text-gray-700 space-y-1 mb-2">
                              <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>High-Performance Local Server</span>
                              </li>
                              <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>15" Touchscreen POS Terminal</span>
                              </li>
                              <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>Thermal Receipt Printer & Credit Card Reader</span>
                              </li>
                              <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>QR Code Ordering System + Marketing Tools</span>
                              </li>
                              <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>Professional Installation & Staff Training</span>
                              </li>
                              <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>2-Day Hardware Replacement Warranty</span>
                              </li>
                            </ul>
                            <p class="text-gray-700 text-sm">
                              Complete POS solution with all the hardware and marketing tools you need to get started - plus 0% credit card processing with Hurricane Pay.
                            </p>
                          </div>
                          <div class="flex-shrink-0 mt-4 md:mt-0 md:ml-4">
                            <button 
                              @click="selectValueBundle"
                              type="button"
                              class="px-4 py-2 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 transition-colors"
                            >
                              Select This Bundle
                            </button>
                          </div>
                        </div>
                      </div>
                  
                      <!-- Recommendation based on answers - Shows only if all questions are answered -->
                      <div v-if="form.complete_solution_response" class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border border-blue-100 p-6 mb-8">
                        <h4 class="text-xl font-bold text-blue-800 mb-3">Our Recommendation</h4>
                        <p class="text-gray-700 mb-4">
                          Based on your answers, we recommend the <span class="font-semibold">{{ getRecommendedSetup() }}</span> 
                          to address your current challenges.
                        </p>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                          <p class="text-sm text-gray-600">
                            This setup includes {{ getRecommendationDetails() }}
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Retail-specific questions -->
                    <div v-else-if="form.industry_type === 'Retail - Store Front Location'" class="space-y-12">
                      <!-- Question 1 - Current POS System -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">Do you currently use a POS system?</h4>
                        <p class="text-gray-600 mb-4">Understanding your current setup helps us provide the best solution</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="option in [
                              'Yes, but it\'s outdated.',
                              'Yes, but it\'s slow or crashes often.',
                              'No, we\'re still using manual receipts/cash register.',
                              'We use tablets or apps, not a full POS.',
                              'We need better inventory management.'
                            ]" 
                            :key="option"
                            @click="form.current_pos_status = option"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.current_pos_status === option ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.current_pos_status === option ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.current_pos_status === option" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ option }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 2 - Inventory Tracking -->
                      <div v-if="form.current_pos_status">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you currently track your inventory?</h4>
                        <p class="text-gray-600 mb-4">Efficient inventory management helps control costs and improve profitability</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'Manual tracking (spreadsheets, paper)',
                              'Basic POS inventory features',
                              'Dedicated inventory software',
                              'We don\'t track inventory consistently',
                              'We need better inventory management'
                            ]" 
                            :key="method"
                            @click="form.inventory_tracking = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.inventory_tracking === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.inventory_tracking === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.inventory_tracking === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 3 - Current POS Issues -->
                      <div v-if="form.inventory_tracking">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What issues or limitations have you experienced with your current system?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply to your retail business</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                          <div 
                            v-for="issue in [
                              'Inventory counts are often inaccurate',
                              'Barcode scanning is unreliable',
                              'Can\'t track items across multiple locations',
                              'Difficult to manage product variations',
                              'Reporting is limited or complicated',
                              'Customer data isn\'t integrated with sales'
                            ]" 
                            :key="issue"
                            @click="toggleRetailIssue(issue)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.retail_system_issues && form.retail_system_issues.includes(issue) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.retail_system_issues && form.retail_system_issues.includes(issue) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.retail_system_issues && form.retail_system_issues.includes(issue)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="font-medium">{{ issue }}</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 4 - Customer Loyalty -->
                      <div v-if="form.retail_system_issues && form.retail_system_issues.length > 0">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">Do you have a customer loyalty or rewards program?</h4>
                        <p class="text-gray-600 mb-4">Customer loyalty programs can increase repeat business and average order value</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="program in [
                              'Yes, we use a digital loyalty program',
                              'Yes, but it\'s a manual punch card system',
                              'No, but we\'re interested in starting one',
                              'No, we don\'t need one',
                              'We tried one but it was too complex to manage'
                            ]" 
                            :key="program"
                            @click="form.loyalty_program = program"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.loyalty_program === program ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.loyalty_program === program ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.loyalty_program === program" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ program }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 5 - Staff Training -->
                      <div v-if="form.loyalty_program">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How would you describe your staff's comfort level with technology?</h4>
                        <p class="text-gray-600 mb-4">This helps us understand training needs for your new system</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="level in [
                              'Very tech-savvy, quick to learn new systems',
                              'Comfortable with technology but need some training',
                              'Mixed - some staff are comfortable, others struggle',
                              'Most need extensive training on new technology',
                              'We have high staff turnover so easy onboarding is important'
                            ]" 
                            :key="level"
                            @click="form.staff_tech_comfort = level"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.staff_tech_comfort === level ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.staff_tech_comfort === level ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.staff_tech_comfort === level" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ level }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 6 - Complete Solution -->
                      <div v-if="form.staff_tech_comfort">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Would a complete retail POS solution with inventory management, customer loyalty, and integrated payment processing solve your current challenges?</h4>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="response in [
                              'Yes, that would address most of our needs',
                              'We need something that integrates with our online store too',
                              'Only if it\'s easy for our staff to learn quickly',
                              'That sounds perfect, especially if it can grow with us',
                              'We need to see a demo to be sure'
                            ]" 
                            :key="response"
                            @click="form.retail_solution_response = response"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.retail_solution_response === response ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.retail_solution_response === response ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.retail_solution_response === response" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ response }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Recommendation based on answers - Similar to restaurant recommendation -->
                      <div v-if="form.retail_solution_response" class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border border-blue-100 p-6 mb-8">
                        <h4 class="text-xl font-bold text-blue-800 mb-3">Our Recommendation</h4>
                        <p class="text-gray-700 mb-4">
                          Based on your answers, we recommend the <span class="font-semibold">Complete Retail POS Solution</span> 
                          to address your current challenges.
                        </p>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                          <p class="text-sm text-gray-600">
                            This setup includes a complete retail POS system with inventory management, customer loyalty program, and integrated payment processing with 0% fees through Hurricane Pay.
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Service Business-specific questions -->
                    <div v-else-if="form.industry_type === 'Service Business'" class="space-y-12">
                      <!-- Question 1 - Appointment Scheduling -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you currently manage appointments and scheduling?</h4>
                        <p class="text-gray-600 mb-4">Efficient scheduling can maximize your service capacity and revenue</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'Paper appointment book',
                              'Digital calendar (Google Calendar, etc.)',
                              'Dedicated scheduling software',
                              'We take appointments by phone only',
                              'We don\'t have a formal scheduling system'
                            ]" 
                            :key="method"
                            @click="form.appointment_scheduling = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.appointment_scheduling === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.appointment_scheduling === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.appointment_scheduling === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 2 - Scheduling Challenges -->
                      <div v-if="form.appointment_scheduling">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What scheduling challenges does your business face?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply to your service business</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                          <div 
                            v-for="challenge in [
                              'Double bookings or scheduling conflicts',
                              'No-shows and last-minute cancellations',
                              'Staff availability management',
                              'Difficulty managing appointments across multiple locations',
                              'Can\'t send automatic appointment reminders',
                              'Clients can\'t book appointments online themselves'
                            ]" 
                            :key="challenge"
                            @click="toggleServiceChallenge(challenge)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.service_challenges && form.service_challenges.includes(challenge) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.service_challenges && form.service_challenges.includes(challenge) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.service_challenges && form.service_challenges.includes(challenge)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="font-medium">{{ challenge }}</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 3 - Client Management -->
                      <div v-if="form.service_challenges && form.service_challenges.length > 0">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you manage client information and history?</h4>
                        <p class="text-gray-600 mb-4">Tracking client details helps personalize service and build relationships</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'Paper files or cards',
                              'Spreadsheets',
                              'CRM software',
                              'We don\'t consistently track client information',
                              'We need a better system for client management'
                            ]" 
                            :key="method"
                            @click="form.client_management = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.client_management === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.client_management === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.client_management === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 4 - Payment Processing -->
                      <div v-if="form.client_management">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you currently process payments?</h4>
                        <p class="text-gray-600 mb-4">Efficient payment processing improves cash flow and customer experience</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'Cash and checks only',
                              'Mobile card reader (Square, etc.)',
                              'Traditional credit card terminal',
                              'Integrated POS system',
                              'We invoice clients and accept payments later'
                            ]" 
                            :key="method"
                            @click="form.service_payment_method = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.service_payment_method === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.service_payment_method === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.service_payment_method === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 5 - Complete Solution -->
                      <div v-if="form.service_payment_method">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Would an all-in-one solution with online booking, client management, and integrated payment processing solve your current challenges?</h4>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="response in [
                              'Yes, that would streamline our whole operation',
                              'We\'d need it to integrate with our existing systems',
                              'That sounds ideal if staff can learn it quickly',
                              'Yes, especially if clients can book online',
                              'We\'d need to see how it works for our specific services'
                            ]" 
                            :key="response"
                            @click="form.service_solution_response = response"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.service_solution_response === response ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.service_solution_response === response ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.service_solution_response === response" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ response }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Recommendation based on answers -->
                      <div v-if="form.service_solution_response" class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border border-blue-100 p-6 mb-8">
                        <h4 class="text-xl font-bold text-blue-800 mb-3">Our Recommendation</h4>
                        <p class="text-gray-700 mb-4">
                          Based on your answers, we recommend the <span class="font-semibold">Complete Service Business Solution</span> 
                          to address your current challenges.
                        </p>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                          <p class="text-sm text-gray-600">
                            This setup includes online booking, client management, staff scheduling, and integrated payment processing with 0% fees through Hurricane Pay.
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Mobile Business-specific questions -->
                    <div v-else-if="form.industry_type === 'Mobile Business'" class="space-y-12">
                      <!-- Question 1 - Payment Processing -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you currently process payments on the go?</h4>
                        <p class="text-gray-600 mb-4">Mobile payment solutions can help you accept payments anywhere</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'Mobile card reader (Square, etc.)',
                              'Cash only',
                              'Invoice clients later',
                              'Mobile POS system',
                              'We need a better mobile payment solution'
                            ]" 
                            :key="method"
                            @click="form.mobile_payment = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.mobile_payment === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.mobile_payment === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.mobile_payment === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 2 - Payment Challenges -->
                      <div v-if="form.mobile_payment">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What challenges do you face with mobile payments?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply to your mobile business</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                          <div 
                            v-for="challenge in [
                              'Unreliable internet/connectivity issues',
                              'Battery life limitations',
                              'Device durability concerns',
                              'High processing fees',
                              'Limited receipt options',
                              'Difficulty tracking inventory on the go'
                            ]" 
                            :key="challenge"
                            @click="toggleMobileChallenge(challenge)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.mobile_challenges && form.mobile_challenges.includes(challenge) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.mobile_challenges && form.mobile_challenges.includes(challenge) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.mobile_challenges && form.mobile_challenges.includes(challenge)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="font-medium">{{ challenge }}</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 3 - Location Tracking -->
                      <div v-if="form.mobile_challenges && form.mobile_challenges.length > 0">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">Do you need to track multiple locations or routes?</h4>
                        <p class="text-gray-600 mb-4">Location tracking can help optimize your mobile business operations</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="response in [
                              'Yes, we operate in multiple areas',
                              'Yes, we have regular routes',
                              'No, we operate in a fixed location',
                              'No, but we might expand to more areas',
                              'We need help with route planning'
                            ]" 
                            :key="response"
                            @click="form.location_tracking = response"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.location_tracking === response ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.location_tracking === response ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.location_tracking === response" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ response }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 4 - Business Type -->
                      <div v-if="form.location_tracking">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What type of mobile business do you operate?</h4>
                        <p class="text-gray-600 mb-4">This helps us recommend the most appropriate solution</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="type in [
                              'Food truck or mobile food service',
                              'Mobile retail (pop-up shop, market vendor)',
                              'Service provider (repairs, cleaning, etc.)',
                              'Door-to-door sales',
                              'Event-based business (fairs, concerts, etc.)'
                            ]" 
                            :key="type"
                            @click="form.mobile_business_type = type"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.mobile_business_type === type ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.mobile_business_type === type ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.mobile_business_type === type" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ type }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 5 - Complete Solution -->
                      <div v-if="form.mobile_business_type">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Would a rugged, reliable mobile payment solution with offline capability and 0% processing fees solve your current challenges?</h4>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="response in [
                              'Yes, that would be perfect for our mobile operations',
                              'We\'d need inventory tracking capabilities too',
                              'That sounds great if it works in areas with poor connectivity',
                              'We\'d need multiple devices for our team',
                              'We\'d want to see how durable the equipment is first'
                            ]" 
                            :key="response"
                            @click="form.mobile_solution_response = response"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.mobile_solution_response === response ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.mobile_solution_response === response ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.mobile_solution_response === response" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ response }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Recommendation based on answers -->
                      <div v-if="form.mobile_solution_response" class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border border-blue-100 p-6 mb-8">
                        <h4 class="text-xl font-bold text-blue-800 mb-3">Our Recommendation</h4>
                        <p class="text-gray-700 mb-4">
                          Based on your answers, we recommend the <span class="font-semibold">Mobile Business Solution</span> 
                          to address your current challenges.
                        </p>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                          <p class="text-sm text-gray-600">
                            This setup includes rugged mobile payment hardware, offline processing capability, and 0% processing fees through Hurricane Pay - perfect for businesses on the move.
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Online Business-specific questions -->
                    <div v-else-if="form.industry_type === 'Online/MOTO'" class="space-y-12">
                      <!-- Question 1 - Online Payment Processing -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">How do you currently process online payments?</h4>
                        <p class="text-gray-600 mb-4">Secure, reliable online payment processing is essential for e-commerce</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="method in [
                              'PayPal/Stripe/Other payment processor',
                              'Shopping cart software',
                              'Manual processing (phone orders)',
                              'We use multiple payment methods',
                              'We need a better online payment solution'
                            ]" 
                            :key="method"
                            @click="form.online_payment = method"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.online_payment === method ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.online_payment === method ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.online_payment === method" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ method }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 2 - Payment Challenges -->
                      <div v-if="form.online_payment">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What challenges do you face with online payments?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply to your online business</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                          <div 
                            v-for="challenge in [
                              'High processing fees',
                              'Payment security concerns',
                              'Cart abandonment issues',
                              'Integration problems with our website',
                              'International payment limitations',
                              'Chargeback and fraud concerns'
                            ]" 
                            :key="challenge"
                            @click="toggleOnlineChallenge(challenge)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.online_challenges && form.online_challenges.includes(challenge) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.online_challenges && form.online_challenges.includes(challenge) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.online_challenges && form.online_challenges.includes(challenge)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="font-medium">{{ challenge }}</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 3 - E-commerce Platform -->
                      <div v-if="form.online_challenges && form.online_challenges.length > 0">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What e-commerce platform do you use?</h4>
                        <p class="text-gray-600 mb-4">Your platform choice affects your payment integration options</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="platform in [
                              'Shopify',
                              'WooCommerce/WordPress',
                              'Magento',
                              'Custom website',
                              'Other platform/marketplace',
                              'We don\'t have an e-commerce platform yet'
                            ]" 
                            :key="platform"
                            @click="form.ecommerce_platform = platform"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.ecommerce_platform === platform ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.ecommerce_platform === platform ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.ecommerce_platform === platform" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ platform }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 4 - Order Volume -->
                      <div v-if="form.ecommerce_platform">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What is your average monthly online order volume?</h4>
                        <p class="text-gray-600 mb-4">This helps us recommend the most appropriate payment solution</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="volume in [
                              'Less than 100 orders',
                              '100-500 orders',
                              '501-1,000 orders',
                              '1,001-5,000 orders',
                              'More than 5,000 orders'
                            ]" 
                            :key="volume"
                            @click="form.online_order_volume = volume"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.online_order_volume === volume ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.online_order_volume === volume ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.online_order_volume === volume" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ volume }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 5 - Complete Solution -->
                      <div v-if="form.online_order_volume">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Would an integrated payment solution with 0% processing fees and enhanced fraud protection help your online business grow?</h4>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="response in [
                              'Yes, eliminating processing fees would be a game-changer',
                              'We\'d need it to integrate seamlessly with our platform',
                              'We\'re especially interested in better fraud protection',
                              'That would help us offer more competitive pricing',
                              'We\'d need to understand the integration process first'
                            ]" 
                            :key="response"
                            @click="form.online_solution_response = response"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all"
                            :class="form.online_solution_response === response ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="flex items-center">
                              <div class="w-5 h-5 rounded-full border mr-3 flex items-center justify-center"
                                :class="form.online_solution_response === response ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                              >
                                <div v-if="form.online_solution_response === response" class="w-3 h-3 rounded-full bg-white"></div>
                              </div>
                              <div class="font-medium">{{ response }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Recommendation based on answers -->
                      <div v-if="form.online_solution_response" class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border border-blue-100 p-6 mb-8">
                        <h4 class="text-xl font-bold text-blue-800 mb-3">Our Recommendation</h4>
                        <p class="text-gray-700 mb-4">
                          Based on your answers, we recommend the <span class="font-semibold">E-Commerce Payment Solution</span> 
                          to address your current challenges.
                        </p>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                          <p class="text-sm text-gray-600">
                            This solution includes seamless integration with your e-commerce platform, enhanced fraud protection, and 0% processing fees through Hurricane Pay - helping you maximize online revenue.
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Default questions for other business types -->
                    <div v-else class="space-y-12">
                      <!-- Generic Question 1 -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What payment processing challenges do you currently face?</h4>
                        <p class="text-gray-600 mb-4">Understanding your challenges helps us provide the best solution</p>
                        <div class="grid grid-cols-1 gap-3">
                          <div 
                            v-for="challenge in [
                              'High processing fees',
                              'Slow transaction times',
                              'Limited payment options for customers',
                              'Equipment reliability issues',
                              'Complicated statements/reporting',
                              'Poor customer support from current provider'
                            ]" 
                            :key="challenge"
                            @click="toggleBusinessChallenge(challenge)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.business_challenges && form.business_challenges.includes(challenge) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.business_challenges && form.business_challenges.includes(challenge) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.business_challenges && form.business_challenges.includes(challenge)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="font-medium">{{ challenge }}</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Step 4: Owner Information -->
              <div v-if="currentStep === 4" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Owner Information</h3>
                <p class="text-gray-600 mb-6">Please fill out information about the owner</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                  <div>
                    <label for="ownerFirstName" class="block text-gray-700 font-medium mb-2">Owner First Name *</label>
                    <input 
                      type="text" 
                      id="ownerFirstName" 
                      v-model="form.owner_first_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="ownerLastName" class="block text-gray-700 font-medium mb-2">Owner Last Name *</label>
                    <input 
                      type="text" 
                      id="ownerLastName" 
                      v-model="form.owner_last_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="title" class="block text-gray-700 font-medium mb-2">Title *</label>
                    <input 
                      type="text" 
                      id="title" 
                      v-model="form.title" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="dob" class="block text-gray-700 font-medium mb-2">Date of Birth *</label>
                    <input 
                      type="date" 
                      id="dob" 
                      v-model="form.date_of_birth" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="ownershipPercentage" class="block text-gray-700 font-medium mb-2">Business Ownership % *</label>
                    <div class="relative">
                      <input 
                        type="number" 
                        id="ownershipPercentage" 
                        v-model="form.ownership_percentage" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        min="0"
                        max="100"
                        required
                      >
                      <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-gray-500">%</span>
                      </div>
                    </div>
                  </div>
                  
                  <div>
                    <label for="driversLicense" class="block text-gray-700 font-medium mb-2">Driver's License *</label>
                    <input 
                      type="text" 
                      id="driversLicense" 
                      v-model="form.drivers_license" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="dlState" class="block text-gray-700 font-medium mb-2">Driver's License State *</label>
                    <select 
                      id="dlState" 
                      v-model="form.dl_state" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Select state</option>
                      <option v-for="state in usStates" :key="state.code" :value="state.code">{{ state.name }}</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="ownerPhone" class="block text-gray-700 font-medium mb-2">Owner Phone *</label>
                    <input 
                      type="tel" 
                      id="ownerPhone" 
                      v-model="form.owner_phone" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                </div>
                
                <h4 class="text-xl font-semibold mb-4 text-gray-800">Home Address</h4>
                <div class="grid grid-cols-1 gap-6 mb-8">
                  <div>
                    <label for="homeAddressLine1" class="block text-gray-700 font-medium mb-2">Home Address Line 1 *</label>
                    <input 
                      type="text" 
                      id="homeAddressLine1" 
                      v-model="form.home_address_line1" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="Street address"
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="homeAddressLine2" class="block text-gray-700 font-medium mb-2">Home Address Line 2 <span class="text-gray-500 text-sm font-normal">(Optional)</span></label>
                    <input 
                      type="text" 
                      id="homeAddressLine2" 
                      v-model="form.home_address_line2" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="Suite, Unit, etc."
                    >
                  </div>
                  
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                      <label for="city" class="block text-gray-700 font-medium mb-2">City *</label>
                      <input 
                        type="text" 
                        id="city" 
                        v-model="form.city" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                    </div>
                    
                    <div>
                      <label for="homeState" class="block text-gray-700 font-medium mb-2">State *</label>
                      <select 
                        id="homeState" 
                        v-model="form.home_state" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>Select state</option>
                        <option v-for="state in usStates" :key="state.code" :value="state.code">{{ state.name }}</option>
                      </select>
                    </div>
                    
                    <div>
                      <label for="homeZip" class="block text-gray-700 font-medium mb-2">ZIP Code *</label>
                      <input 
                        type="text" 
                        id="homeZip" 
                        v-model="form.home_zip" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Step 5: System Configuration -->
              <div v-if="currentStep === 5" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">System Configuration</h3>
                
                <p class="text-gray-600 mb-6">
                  Please help us customize your POS system by providing the following information.
                </p>
                
                <!-- Configuration form -->
                <div class="grid grid-cols-1 gap-6 mb-8">
                  <div>
                    <label for="numberOfLocations" class="block text-gray-700 font-medium mb-2">How many locations do you have? *</label>
                    <select 
                      id="numberOfLocations" 
                      v-model="form.number_of_locations" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Please select...</option>
                      <option value="1">1 Location</option>
                      <option value="2">2 Locations</option>
                      <option value="3">3 Locations</option>
                      <option value="4">4 Locations</option>
                      <option value="5">5 Locations</option>
                      <option value="6+">6+ Locations</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="numberOfRegisters" class="block text-gray-700 font-medium mb-2">How many registers per location? *</label>
                    <select 
                      id="numberOfRegisters" 
                      v-model="form.number_of_registers" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Please select...</option>
                      <option value="1">1 Register</option>
                      <option value="2">2 Registers</option>
                      <option value="3">3 Registers</option>
                      <option value="4">4 Registers</option>
                      <option value="5+">5+ Registers</option>
                    </select>
                  </div>
                  
                  <div v-if="isRestaurantBusiness">
                    <label for="numberOfServers" class="block text-gray-700 font-medium mb-2">How many servers/waitstaff do you have? *</label>
                    <select 
                      id="numberOfServers" 
                      v-model="form.number_of_servers" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Please select...</option>
                      <option value="1-5">1-5 Servers</option>
                      <option value="6-10">6-10 Servers</option>
                      <option value="11-20">11-20 Servers</option>
                      <option value="21+">21+ Servers</option>
                    </select>
                  </div>
                  
                  <div v-if="isRestaurantBusiness">
                    <label for="handheldsNeeded" class="block text-gray-700 font-medium mb-2">Do you need handheld ordering devices for your waitstaff? *</label>
                    <p class="text-gray-500 text-sm mb-3">Handheld devices allow servers to take orders tableside, increasing efficiency and table turnover rates</p>
                    <div class="grid grid-cols-2 gap-4">
                          <button 
                        type="button"
                        @click="form.handhelds_needed = true"
                        class="px-4 py-2 rounded-md text-center transition-colors"
                        :class="form.handhelds_needed ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'"
                      >
                        Yes
                          </button>
                          <button 
                        type="button"
                        @click="form.handhelds_needed = false"
                        class="px-4 py-2 rounded-md text-center transition-colors"
                        :class="!form.handhelds_needed && form.handhelds_needed !== undefined ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'"
                      >
                        No
                          </button>
                        </div>
                      </div>
                  
                  <div v-if="form.handhelds_needed">
                    <label for="numberOfHandhelds" class="block text-gray-700 font-medium mb-2">How many handheld devices do you need? *</label>
                    <div class="grid grid-cols-1 gap-6 mb-4">
                      <div class="flex flex-col">
                        <div class="text-sm text-gray-600 mb-2">Select the number of devices ({{ form.number_of_handhelds || "0" }})</div>
                        <input 
                          type="range" 
                          id="numberOfHandhelds" 
                          v-model="form.number_of_handhelds" 
                          min="1" 
                          max="20"
                          step="1"
                          class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-custom-red"
                        >
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                          <span>1</span>
                          <span>5</span>
                          <span>10</span>
                          <span>15</span>
                          <span>20</span>
                        </div>
                      </div>
                    </div>
                    <div class="bg-blue-50 border border-blue-200 rounded-md p-4 mb-6">
                      <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-sm text-blue-800">
                          Most restaurants provide one handheld device for every 1-2 servers. This allows for efficient order taking without overcrowding your staff.
                        </p>
                      </div>
                    </div>
                    
                    <div>
                      <label class="block text-gray-700 font-medium mb-2">Which features do you need on handheld devices? *</label>
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div 
                          v-for="feature in ['Order Taking', 'Payment Processing', 'Menu Modifications', 'Table Management', 'Split Checks', 'Loyalty Integration']" 
                          :key="feature"
                          @click="toggleHandheldFeature(feature)"
                          class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                          :class="form.handheld_features?.includes(feature) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                        >
                          <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                            :class="form.handheld_features?.includes(feature) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                          >
                            <svg v-if="form.handheld_features?.includes(feature)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                          </div>
                          <div class="font-medium">{{ feature }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div>
                    <label for="customerFacingDisplays" class="block text-gray-700 font-medium mb-2">Do you need customer-facing displays? *</label>
                    <div class="grid grid-cols-2 gap-4">
                      <button 
                        type="button"
                        @click="form.customer_displays_needed = true"
                        class="px-4 py-2 rounded-md text-center transition-colors"
                        :class="form.customer_displays_needed ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'"
                      >
                        Yes
                      </button>
                      <button 
                        type="button"
                        @click="form.customer_displays_needed = false"
                        class="px-4 py-2 rounded-md text-center transition-colors"
                        :class="!form.customer_displays_needed && form.customer_displays_needed !== undefined ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'"
                      >
                        No
                      </button>
                    </div>
                  </div>

             
                  <div>
                    <label for="additionalRequirements" class="block text-gray-700 font-medium mb-2">Any additional requirements? <span class="text-gray-500 text-sm font-normal">(Optional)</span></label>
                    <textarea
                      id="additionalRequirements"
                      v-model="form.additional_requirements"
                      rows="4"
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red"
                      placeholder="Please describe any specific requirements or features you need"
                    ></textarea>
                  </div>
                </div>
              </div>
              
              <!-- Step 6: Device Selection -->
              <div v-if="currentStep === 6" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Please Choose Your Device</h3>
                <p class="text-gray-600 mb-6">
                  Please choose your option to proceed and start saving money quickly on merchant processing fees. 
                  We will not charge you until your account is approved.
                </p>
                
                <!-- Zero-fee processing banner -->
                <div class="mb-8 bg-gradient-to-r from-red-700 to-red-500 rounded-lg shadow-lg overflow-hidden">
                  <div class="p-6 text-white">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                      <div>
                        <h4 class="text-3xl font-bold mb-2">0% Credit Card Processing</h4>
                        <p class="text-xl mb-4">Eliminate processing fees forever!</p>
                        <div class="mb-2 font-medium">Best fits for:</div>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                          <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Full Service Restaurants
                          </li>
                          <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Counter Service Restaurant
                          </li>
                          <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Service Only
                          </li>
                          <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            E-Commerce
                          </li>
                        </ul>
                          </div>
                      <div class="mt-6 md:mt-0 flex-shrink-0">
                        <div class="bg-white text-red-600 rounded-full p-4 flex items-center justify-center h-24 w-24 font-bold text-3xl shadow-lg">
                          0%
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Bundle card grid -->
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                  Bundles
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                  <!-- Bundle cards -->
                  <div v-for="(bundle, index) in filteredBundleOptions" :key="index"
                    @click="openBundleModal(bundle)"
                    class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 cursor-pointer transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 hover:border-custom-red">
                    
                    <!-- Bundle image -->
                    <div class="h-48 bg-gray-50 flex items-center justify-center p-4 relative overflow-hidden">
                      <template v-if="bundle.name === 'Kwick 15&quot; POS Bundle'">
                        <img src="@/../images/kwickpos_posbank.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="bundle.name === 'Kwick 15&quot; Server Bundle'">
                        <div class="h-full w-full flex items-center justify-center">
                          <img src="@/../images/new_server.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                        </div>
                      </template>
                      <template v-else-if="bundle.name === 'Kwick 21&quot; Large Kiosk Bundle'">
                        <img src="@/../images/Kiosks21.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="bundle.name === 'Kwick Customer Display POS Bundle'">
                        <img src="@/../images/Customerdisplay.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="bundle.name === 'Kwick iPad Bundle'">
                        <img src="@/../images/ipadBundle.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="bundle.name === 'Setup for Kwick: Basic Setup'">
                        <img src="@/../images/kwickPoslogo.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else>
                        <img src="@/../images/fourth.png" :alt="bundle.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <!-- Subtle overlay with View text that appears on hover -->
                      <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-gray-900/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-custom-red text-white px-4 py-1 rounded-full font-medium transform scale-90 hover:scale-100 transition-transform">
                          View Details
                      </div>
                        </div>
                    </div>
                    
                    <div class="p-8">
                      <h5 class="text-lg font-bold text-gray-800 mb-3">{{ bundle.name }}</h5>
                      <div>
                        <div class="flex items-center justify-between">
                          <span class="text-xl font-bold text-gray-800">Bundle</span>
                          <span class="text-custom-red font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            Details
                          </span>
                      </div>
                    </div>
                  </div>
                      </div>
                          </div>
                
                <!-- Products Section -->
                <h2 class="text-2xl font-bold text-gray-800 mb-6 mt-12 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                  </svg>
                  Products
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                  <!-- Product cards -->
                  <div v-for="(product, index) in productOptions" :key="index"
                    @click="openBundleModal(product)"
                    class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 cursor-pointer transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 hover:border-custom-red">
                    
                    <!-- Product image -->
                    <div class="h-48 bg-gray-50 flex items-center justify-center p-4 relative overflow-hidden">
                      <template v-if="product.name === 'Handheld - A920'">
                        <img src="@/../images/A920.png" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="product.name === 'MINT 10&quot; POS Station w/ Built-in Printer'">
                        <img src="@/../images/mintPOS.jpg" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="product.name === 'MagTek Payment Device DynaFlex II Go'">
                        <img src="@/../images/Magtek.png" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="product.name === 'ACT 15&quot; POS Station'">
                        <img src="@/../images/Act15.jpg" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="product.name === 'Food Truck / Mobile Vendor Hardware Setup'">
                        <img src="@/../images/foodtruckimg.jpg" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="product.name === 'Innovative QR Bundle'">
                        <img src="@/../images/InnovativeQRBundle.png" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else-if="product.name === '3rd Party Platform Integration (After 3-month trial)'">
                        <img src="@/../images/thirdparty.jpg" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <template v-else>
                        <img src="@/../images/fourth.png" :alt="product.name" class="h-full object-contain transition-transform duration-500 group-hover:scale-110">
                      </template>
                      <!-- Subtle overlay with View text that appears on hover -->
                      <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-gray-900/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-custom-red text-white px-4 py-1 rounded-full font-medium transform scale-90 hover:scale-100 transition-transform">
                          View Details
                        </div>
                      </div>
                    </div>
                    
                    <div class="p-8">
                      <h5 class="text-lg font-bold text-gray-800 mb-3">{{ product.name }}</h5>
                      <div>
                        <div class="flex items-center justify-between">
                          <span class="text-xl font-bold text-gray-800">Product</span>
                          <span class="text-custom-red font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            Details
                          </span>
                        </div>
                        <div class="mt-2">
                          <span class="text-green-600 font-medium">{{ getBundlePrice(product.name) }}</span>
                      </div>
                    </div>
                  </div>
                      </div>
                          </div>
                
                <!-- Bundle Details Modal -->
                <div 
                  v-if="showBundleModal" 
                  class="fixed inset-0 z-50 flex items-start justify-center px-4 py-5 overflow-auto" 
                  style="background-color: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"
                  @click.self="showBundleModal = false"
                >
                  
                  <!-- Modal content -->
                  <div 
                    class="bg-white rounded-lg shadow-2xl overflow-hidden max-w-5xl w-full max-h-[90vh] relative z-10 border border-gray-200"
                    :style="{ 'margin-top': `${modalOffsetTop}px` }"
                  >
                    <!-- Modal header -->
                    <div class="flex justify-between items-center p-4 border-b border-gray-200">
                      <h3 class="text-xl font-bold text-gray-800">Bundle Details</h3>
                      <button @click.stop.prevent="showBundleModal = false" class="text-gray-400 hover:text-gray-600 transition-colors" type="button">
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
                          <template v-if="selectedBundleDetails?.name === 'Handheld - A920'">
                            <img src="@/../images/A920.jpg" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'MINT 10&quot; POS Station w/ Built-in Printer'">
                            <img src="@/../images/mintPOS.jpg" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'MagTek Payment Device DynaFlex II Go'">
                            <img src="@/../images/Magtek.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'ACT 15&quot; POS Station'">
                            <img src="@/../images/Act15.jpg" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Food Truck / Mobile Vendor Hardware Setup'">
                            <img src="@/../images/foodtruckimg.jpg" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Kwick 15&quot; POS Bundle'">
                            <img src="@/../images/kwickpos_posbank.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Kwick 15&quot; Server Bundle'">
                            <img src="@/../images/new_server.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Kwick 21&quot; Large Kiosk Bundle'">
                            <img src="@/../images/Kiosks21.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Kwick Customer Display POS Bundle'">
                            <img src="@/../images/Customerdisplay.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Kwick iPad Bundle'">
                            <img src="@/../images/ipadBundle.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Setup for Kwick: Basic Setup'">
                            <img src="@/../images/kwickPoslogo.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === 'Innovative QR Bundle'">
                            <img src="@/../images/InnovativeQRBundle.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else-if="selectedBundleDetails?.name === '3rd Party Platform Integration (After 3-month trial)'">
                            <img src="@/../images/thirdparty.jpg" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                          <template v-else>
                            <img src="@/../images/fourth.png" :alt="selectedBundleDetails?.name || 'Bundle Image'" class="h-64 object-contain">
                          </template>
                    </div>
                        
                        <!-- Product details -->
                        <div class="flex flex-col">
                          <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ selectedBundleDetails?.name || "Bundle" }}</h1>
                          
                          <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                              <svg v-for="i in 5" :key="i" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" :class="i <= 4 ? 'text-yellow-400' : 'text-gray-300'" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                              </svg>
                            </div>
                            <span class="text-blue-600 text-sm ml-2 hover:underline cursor-pointer">578 ratings</span>
                  </div>
                  
                          <div class="border-t border-b border-gray-200 py-4 mb-4">
                            <div class="flex items-baseline mb-2">
                              <span class="text-xl text-red-600 font-bold">Special Price:</span>
                              <span class="text-3xl font-bold text-gray-900 ml-2">{{ getBundlePrice(selectedBundleDetails?.name) }}</span>
                              <span class="ml-2 text-lg text-gray-500 line-through">$2,388.00</span>
                            </div>
                            <div class="bg-green-100 text-green-800 inline-block px-2 py-1 rounded text-sm font-medium">
                              0% Credit Card Processing Fees
                            </div>
                          </div>
                          
                          <div class="space-y-4 mb-6">
                            <div>
                              <h4 class="font-medium text-gray-900">Description</h4>
                              <p class="text-gray-700 text-sm">Complete POS solution with all hardware, software, and payment processing needed to run your business efficiently.</p>
                            </div>
                            
                            <div>
                              <h4 class="font-medium text-gray-900">Features</h4>
                              <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1 mt-2">
                                <li>High-performance touchscreen display</li>
                                <li>Receipt printer included</li>
                                <li>Payment terminal with PIN pad</li>
                                <li>Cash drawer</li>
                                <li>Professional installation and setup</li>
                                <li>Staff training included</li>
                              </ul>
                            </div>
                            
                          <!-- Bundles quantity selector -->
                          <div class="mt-6 pt-5 border-t border-gray-200" v-if="selectedBundleDetails?.name !== 'Setup for Kwick: Basic Setup'">
                              <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-4 rounded-lg border border-gray-300 shadow-sm">
                                <div class="flex flex-col gap-3">
                                  <div>
                                    <label for="bundleQuantity" class="block text-lg font-bold text-gray-900 mb-2 flex items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                      </svg>
                                      {{ selectedBundleDetails?.name === 'Handheld - A920' ? 'Units:' : 'Bundles:' }}
                                    </label>
                                    <select 
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
                                  <p class="text-sm text-gray-600 italic">Select the number of {{ selectedBundleDetails?.name === 'Handheld - A920' ? 'units' : 'bundles' }} required for your business</p>
                                </div>
                              </div>
                            </div>

                            <!-- Fixed price display for Setup bundle -->
                            <div class="mt-6 pt-5 border-t border-gray-200" v-if="selectedBundleDetails?.name === 'Setup for Kwick: Basic Setup'">
                              <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-4 rounded-lg border border-gray-300 shadow-sm">
                                <div class="flex items-center justify-between">
                                  <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-custom-red" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-lg font-bold text-gray-900">Basic Setup</span>
                          </div>
                                  <div class="text-lg font-bold text-custom-red">$500.00</div>
                                </div>
                                <p class="text-sm text-gray-600 italic mt-2">Automatically included with your bundle purchase</p>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
                
                      <!-- What's included section -->
                      <div class="p-6 bg-gray-50 border-t border-gray-200">
                        <h4 class="font-bold text-gray-900 mb-3">What's included in this bundle:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="flex items-start" v-for="(item, idx) in bundleItems" :key="idx">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <div>
                              <span class="font-medium text-gray-900">{{ item.name }}</span>
                              <p class="text-sm text-gray-600">{{ item.description }}</p>
                        </div>
                      </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="border-t border-gray-200 p-4 bg-gray-50 flex flex-col md:flex-row gap-4">
                      <div class="flex-grow">
                        <!-- Removed quantity selector from here -->
                      </div>
                      <div class="flex gap-4">
                      <button 
                          @click.stop="addBundleToCart" 
                          class="px-8 py-2 bg-custom-red text-white rounded-md font-medium hover:bg-red-700 transition-colors"
                          type="button"
                      >
                          Add to Cart
                      </button>
                        <!-- Removed Buy Now button -->
                      </div>
                      </div>
                    </div>
                  </div>

                <AdditionalHardware 
                  :additional-hardware-options="additionalHardwareOptions"
                  @add-to-cart="addHardwareToCart"
                />

                <!-- Need assistance card -->
                <div class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-lg shadow-lg overflow-hidden mb-8">
                  <div class="p-6 text-white">
                    <h4 class="text-xl font-bold mb-2">Need assistance selecting the right hardware?</h4>
                    <p class="mb-4">Our experts are ready to help you find the perfect solution for your business needs.</p>
                      <div class="flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                      </svg>
                      <span class="font-medium">Call (888) 123-4567</span>
                      </div>
                          </div>
                        </div>
                
                <!-- Error message if no device is selected -->
                <div v-if="deviceSelectionError" class="text-red-600 text-center mb-6">
                  Please select a device to continue
                </div>

                <div v-if="deviceSelectionError" class="text-red-600 text-center mb-6">
                  Please select a device or ensure you have items in your cart to continue
                </div>
              </div>
              
              <!-- Step 7: Bundle Selection -->
              <div v-if="currentStep === 7" class="animate-fade-in">
                <div class="flex justify-between items-center mb-6">
                  <h3 class="text-2xl font-bold text-gray-800">Bundle Selection Details</h3>
                  <button 
                    type="button" 
                    @click="goBackToProducts" 
                    class="px-4 py-2 bg-white border border-custom-red text-custom-red rounded-md hover:bg-red-50 transition-colors flex items-center shadow-sm"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Go Back to Products
                  </button>
                </div>
                
                <!-- Selected Bundle Confirmation -->
                <div class="mb-8 bg-white rounded-lg overflow-hidden shadow-lg border border-gray-200">
                  <div class="bg-gradient-to-r from-green-600 to-green-500 px-6 py-4">
                    <h4 class="text-white font-bold text-xl flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                      Your Selected Bundles
                    </h4>
                  </div>
                  <div class="p-4">
                    <!-- Empty cart message -->
                    <div v-if="cartItems.length === 0" class="text-center py-4">
                      <p class="text-gray-600">No items have been added to your cart yet.</p>
                      </div>
                      
                    <!-- Cart items list -->
                    <div v-else>
                      <div class="overflow-x-auto">
                        <table class="w-full table-auto border-collapse">
                          <thead class="bg-gray-50">
                            <tr>
                              <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item</th>
                              <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                              <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-200">
                            <tr v-for="(item, index) in cartItems" :key="index" class="hover:bg-gray-50">
                              <td class="px-4 py-3 text-sm font-medium text-gray-800">
                                <div class="flex items-center">
                                  <!-- Dynamic product images based on product name -->
                                  <template v-if="item.name.includes('Kwick 15') && item.name.includes('POS Bundle')">
                                    <img src="@/../images/kwickpos_posbank.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Kwick 15') && item.name.includes('Server Bundle')">
                                    <img src="@/../images/new_server.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Kwick 21') && item.name.includes('Large Kiosk Bundle')">
                                    <img src="@/../images/Kiosks21.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Kwick Customer Display POS Bundle')">
                                    <img src="@/../images/Customerdisplay.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Kwick iPad Bundle')">
                                    <img src="@/../images/ipadBundle.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Setup for Kwick') || item.name.includes('Basic Setup')">
                                    <img src="@/../images/kwickPoslogo.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Handheld - A920')">
                                    <img src="@/../images/A920.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('ACT 15') && item.name.includes('POS Station')">
                                    <img src="@/../images/Act15.jpg" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('MINT 10') && item.name.includes('POS Station')">
                                    <img src="@/../images/mintPOS.jpg" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('MagTek Payment Device')">
                                    <img src="@/../images/Magtek.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Food Truck') || item.name.includes('Mobile Vendor')">
                                    <img src="@/../images/foodtruckimg.jpg" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Innovative QR Bundle')">
                                    <img src="@/../images/InnovativeQRBundle.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('3rd Party Platform') || item.name.includes('Integration')">
                                    <img src="@/../images/thirdparty.jpg" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('KP Thermal Printer')">
                                    <img src="@/../images/KPThermal.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Epson')">
                                    <img src="@/../images/A7407925.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else-if="item.name.includes('Kitchen Display') || item.name.includes('Monitor')">
                                    <img src="@/../images/ELO-refurbished KDS.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <template v-else>
                                    <img src="@/../images/fourth.png" alt="Bundle Image" class="h-10 w-10 mr-3 object-contain">
                                  </template>
                                  <div>
                                    <div>{{ item.name }}</div>
                                    <span class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full mt-1">
                                      {{ getBundleCategory(item.name) }}
                                    </span>
                                  </div>
                                </div>
                              </td>
                              <td class="px-4 py-3 text-sm text-gray-600 text-center">{{ item.quantity || 1 }}</td>
                              <td class="px-4 py-3 text-sm font-medium text-right">{{ item.price }}</td>
                            </tr>
                          </tbody>
                          <tfoot class="bg-gray-50">
                            <tr>
                              <td colspan="2" class="px-4 py-3 text-sm font-medium text-gray-800 text-right">Total:</td>
                              <td class="px-4 py-3 text-base font-bold text-right">${{ totalCartValue.toFixed(2) }}</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      
                      <div class="bg-blue-50 border border-blue-100 rounded-md p-3 mt-4">
                        <h6 class="font-medium text-blue-800 text-sm mb-2">All bundles include:</h6>
                        <div class="grid grid-cols-2 gap-1 text-sm">
                          <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-1 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                              <span>POS Software License</span>
                          </div>
                          <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-1 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                              <span>Installation Support</span>
                        </div>
                          <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-1 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>0% Processing Fees</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Payment Method Section -->
                <div class="mb-8">
                  <div class="flex justify-between items-center mb-4">
                    <h4 class="text-xl font-bold text-gray-800">Payment Method</h4>
                    <div class="bg-gray-100 px-4 py-2 rounded-lg">
                      <span class="text-gray-600 text-sm mr-2">Cart Total:</span>
                      <span class="text-xl font-bold text-gray-900">${{ totalCartValue.toFixed(2) }}</span>
                    </div>
                  </div>
                  
                  <!-- Display only Cash option for bundles under $1500 -->
                  <div v-if="totalCartValue <= 1500" class="bg-gray-50 border border-gray-200 rounded-lg p-5">
                    <div class="flex items-center mb-4">
                      <input 
                        type="radio" 
                        id="paymentCashOnly" 
                        value="cash" 
                        v-model="form.payment_method" 
                        class="w-5 h-5 text-custom-red focus:ring-custom-red"
                        checked
                        disabled
                      >
                      <label for="paymentCashOnly" class="ml-3">
                        <span class="block text-lg font-semibold text-gray-800">100% Cash Upfront</span>
                        <span class="block text-gray-600 text-sm">Full payment required for purchases under $1,500</span>
                      </label>
                    </div>
                    <div class="bg-blue-50 border border-blue-200 rounded p-3 text-sm text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                      </svg>
                      This payment method is automatically selected for your purchase.
                    </div>
                  </div>
                  
                  <!-- Display 2 payment options for bundles over $1500 -->
                  <div v-else class="grid grid-cols-1 gap-4">
                    <!-- Option 1: Cash Upfront -->
                    <div 
                      class="bg-white border rounded-lg p-5 cursor-pointer transition-all duration-200"
                      :class="form.payment_method === 'cash' ? 'border-green-500 shadow-md' : 'border-gray-200 hover:border-gray-300'"
                      @click="form.payment_method = 'cash'"
                    >
                      <div class="flex items-start">
                        <input 
                          type="radio" 
                          id="paymentCash" 
                          value="cash" 
                          v-model="form.payment_method" 
                          class="w-5 h-5 mt-1 text-custom-red focus:ring-custom-red"
                        >
                        <div class="ml-3">
                          <label for="paymentCash" class="block text-lg font-semibold text-gray-800 cursor-pointer">100% Cash Upfront</label>
                          <p class="text-gray-600 mb-2">Pay the full amount today and receive your equipment immediately.</p>
                          <div class="flex items-center">
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">5% Discount Applied</span>
                            <span class="text-gray-500 text-sm ml-2">{{ calculateDiscount(totalCartValue.toFixed(2), 0.05) }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Option 2: 3-Month Financing -->
                    <div 
                      class="bg-white border rounded-lg p-5 cursor-pointer transition-all duration-200"
                      :class="form.payment_method === 'financing_3mo' ? 'border-green-500 shadow-md' : 'border-gray-200 hover:border-gray-300'"
                      @click="form.payment_method = 'financing_3mo'"
                    >
                      <div class="flex items-start">
                        <input 
                          type="radio" 
                          id="paymentFinancing3mo" 
                          value="financing_3mo" 
                          v-model="form.payment_method" 
                          class="w-5 h-5 mt-1 text-custom-red focus:ring-custom-red"
                        >
                        <div class="ml-3">
                          <label for="paymentFinancing3mo" class="block text-lg font-semibold text-gray-800 cursor-pointer">3-Month Financing</label>
                          <p class="text-gray-600 mb-2">Split your payment over 3 months with 0% interest.</p>
                          <div class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Monthly Payment</span>
                            <span class="text-gray-500 text-sm ml-2">{{ calculateMonthlyPayment(totalCartValue.toFixed(2), 3) }}/month for 3 months</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Final note -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-5 mb-8">
                  <div class="flex items-start">
                    <div class="flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </div>
                    <div class="ml-3">
                      <h5 class="text-lg font-semibold text-gray-800">Important Note</h5>
                      <p class="text-gray-600">
                        Your bundle will be delivered and installed after your application is approved. Our team will contact you within 24 hours to confirm your order and schedule installation.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Signature and Terms of Service Section -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 mb-8">
                  <h4 class="text-xl font-bold text-gray-800 mb-4">Authorization & Agreement</h4>
                  
                  <!-- Terms of Service Acknowledgment -->
                  <div class="mb-6">
                    <div class="bg-gray-50 border border-gray-200 rounded-md p-4 mb-4">
                      <h5 class="font-semibold text-gray-800 mb-2">Terms of Service</h5>
                      <div class="max-h-40 overflow-y-auto text-sm text-gray-600 mb-3 p-2 border border-gray-200 bg-white rounded">
                        <p class="mb-2">By signing below, I acknowledge and agree that:</p>
                        <ol class="list-decimal pl-5 space-y-2">
                          <li>I am authorized to make purchase decisions on behalf of the business listed in this application.</li>
                          <li>I authorize Hurricane Pay to process this order and agree to the payment terms selected above.</li>
                          <li>I have reviewed and agree to the <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>.</li>
                          <li>I understand that the hardware and software bundle is subject to approval of the merchant application.</li>
                          <li>I authorize Hurricane Pay to conduct necessary background and credit checks related to this application.</li>
                        </ol>
                      </div>
                      
                      <div class="flex items-center mb-2">
                        <input 
                          type="checkbox" 
                          id="termsAgreement" 
                          v-model="form.terms_agreement" 
                          class="w-5 h-5 text-custom-red focus:ring-custom-red rounded"
                          required
                        >
                        <label for="termsAgreement" class="ml-3 text-gray-700">
                          I have read and agree to the Terms of Service
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Signature Field -->
                  <div class="mb-6">
                    <label for="signatureName" class="block text-gray-700 font-medium mb-2">Full Name of Authorized Representative *</label>
                    <input 
                      type="text" 
                      id="signatureName" 
                      v-model="form.signature_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      placeholder="Enter your full legal name"
                      required
                    >
                    <p class="text-sm text-gray-500 mt-1">This serves as your electronic signature</p>
                  </div>
                  
                  <!-- Signature Canvas -->
                  <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Signature *</label>
                    <div 
                      class="border border-gray-300 rounded-md p-2 bg-white"
                      :class="{'border-red-500': signatureError}"
                    >
                      <div class="border-b border-gray-200 w-full h-32 relative">
                        <canvas 
                          ref="signatureCanvas"
                          class="w-full h-full cursor-crosshair absolute top-0 left-0"
                        ></canvas>
                        
                        <div v-if="!hasSignature" class="absolute inset-0 flex items-center justify-center text-gray-400 pointer-events-none">
                          Sign here
                        </div>
                      </div>
                      <div class="flex justify-between mt-2">
                        <button 
                          type="button" 
                          @click="clearSignature"
                          class="px-3 py-1 text-sm text-gray-600 hover:text-gray-800"
                        >
                          Clear
                        </button>
                        <button 
                          type="button" 
                          @click="testSignature"
                          class="px-3 py-1 text-sm text-blue-600 hover:text-blue-800"
                        >
                          Test Signature
                        </button>
                      </div>
                    </div>
                    <p v-if="signatureError" class="mt-1 text-sm text-red-600">Signature is required to continue</p>
                  </div>
                  
                  <!-- Date Field -->
                  <div class="mb-4">
                    <label for="signatureDate" class="block text-gray-700 font-medium mb-2">Date *</label>
                    <input 
                      type="date" 
                      id="signatureDate" 
                      v-model="form.signature_date" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      :min="todayDate"
                      required
                    >
                  </div>
                  
                  <!-- Signature Confirmation -->
                  <div class="bg-blue-50 border border-blue-100 rounded-md p-4 mt-4">
                    <p class="text-sm text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                      </svg>
                      By providing my electronic signature above, I certify that I am authorized to make this purchase on behalf of the business and agree to all terms and conditions.
                    </p>
                  </div>
                </div>
              </div>
              
              <!-- Step 8: Confirmation -->
              <div v-if="currentStep === 8" class="animate-fade-in">
                <div class="text-center py-8">
                  <div class="w-24 h-24 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  
                  <h3 class="text-2xl font-bold mb-4 text-gray-800">Application Submitted Successfully!</h3>
                  <p class="text-gray-600 mb-6">
                    Thank you for completing your merchant application. Our team will review your information and contact you shortly.
                  </p>
                  
                  <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-6 max-w-md mx-auto">
                    <h4 class="text-xl font-bold text-custom-red mb-2">What Happens Next?</h4>
                    <p class="text-gray-700 mb-4">
                      A member of our team will reach out within 24 hours to confirm your application details and guide you through the next steps.
                    </p>
                  </div>
                  
                  <router-link 
                    to="/" 
                    class="inline-block px-6 py-3 bg-custom-red text-white font-medium rounded-md shadow-md hover:bg-red-800 transition-colors duration-300"
                  >
                    Return to Home
                  </router-link>
                </div>
              </div>
              
              <!-- Navigation Buttons -->
              <div v-if="currentStep < 8" class="flex justify-between mt-8">
                <button 
                  v-if="currentStep > 1" 
                  type="button" 
                  @click="prevStep" 
                  class="px-6 py-2 border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-50 transition-colors duration-300"
                >
                  Previous
                </button>
                <div v-else></div>
                
                <button 
                  v-if="currentStep < totalSteps" 
                  type="button" 
                  @click="nextStep" 
                  class="px-8 py-3 bg-custom-red text-white font-medium rounded-md shadow-md hover:bg-red-800 transition-colors duration-300"
                  style="background-color: #973131 !important; color: white !important;"
                >
                  {{ currentStep === 7 ? 'Continue' : 'Next' }}
                </button>
                <button 
                  v-else 
                  type="submit" 
                  class="px-8 py-3 bg-custom-red text-white font-medium rounded-md shadow-md hover:bg-red-800 transition-colors duration-300"
                  :disabled="isSubmitting"
                  style="background-color: #973131 !important; color: white !important;"
                >
                  {{ isSubmitting ? 'Submitting...' : 'Finish' }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <AppFooter />
  </div>
</template>

<script setup>
import { ref, computed, onMounted, nextTick, watch } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';
import SignaturePad from 'signature_pad';
import AdditionalHardware from '../components/AdditionalHardware.vue';

// Form steps
const steps = [
  'Business Information',
  'Business Details', 
  'Restaurant Profile',
  'Owner Information', 
  'System Configuration',
  'Device Selection',
  'Bundle Selection',
  'Confirmation'
];
const totalSteps = 8;
const currentStep = ref(1);
const isSubmitting = ref(false);

// Device selection
const selectedDevice = ref('');
const selectedPaymentOption = ref('');
const deviceSelectionError = ref(false);

// Generate years for business start year dropdown (from 1950 to current year)
const currentYear = new Date().getFullYear();
const businessYears = Array.from({ length: currentYear - 1949 }, (_, i) => currentYear - i);

// US States array for dropdown
const usStates = [
  { code: 'AL', name: 'Alabama' },
  { code: 'AK', name: 'Alaska' },
  { code: 'AZ', name: 'Arizona' },
  { code: 'AR', name: 'Arkansas' },
  { code: 'CA', name: 'California' },
  { code: 'CO', name: 'Colorado' },
  { code: 'CT', name: 'Connecticut' },
  { code: 'DE', name: 'Delaware' },
  { code: 'FL', name: 'Florida' },
  { code: 'GA', name: 'Georgia' },
  { code: 'HI', name: 'Hawaii' },
  { code: 'ID', name: 'Idaho' },
  { code: 'IL', name: 'Illinois' },
  { code: 'IN', name: 'Indiana' },
  { code: 'IA', name: 'Iowa' },
  { code: 'KS', name: 'Kansas' },
  { code: 'KY', name: 'Kentucky' },
  { code: 'LA', name: 'Louisiana' },
  { code: 'ME', name: 'Maine' },
  { code: 'MD', name: 'Maryland' },
  { code: 'MA', name: 'Massachusetts' },
  { code: 'MI', name: 'Michigan' },
  { code: 'MN', name: 'Minnesota' },
  { code: 'MS', name: 'Mississippi' },
  { code: 'MO', name: 'Missouri' },
  { code: 'MT', name: 'Montana' },
  { code: 'NE', name: 'Nebraska' },
  { code: 'NV', name: 'Nevada' },
  { code: 'NH', name: 'New Hampshire' },
  { code: 'NJ', name: 'New Jersey' },
  { code: 'NM', name: 'New Mexico' },
  { code: 'NY', name: 'New York' },
  { code: 'NC', name: 'North Carolina' },
  { code: 'ND', name: 'North Dakota' },
  { code: 'OH', name: 'Ohio' },
  { code: 'OK', name: 'Oklahoma' },
  { code: 'OR', name: 'Oregon' },
  { code: 'PA', name: 'Pennsylvania' },
  { code: 'RI', name: 'Rhode Island' },
  { code: 'SC', name: 'South Carolina' },
  { code: 'SD', name: 'South Dakota' },
  { code: 'TN', name: 'Tennessee' },
  { code: 'TX', name: 'Texas' },
  { code: 'UT', name: 'Utah' },
  { code: 'VT', name: 'Vermont' },
  { code: 'VA', name: 'Virginia' },
  { code: 'WA', name: 'Washington' },
  { code: 'WV', name: 'West Virginia' },
  { code: 'WI', name: 'Wisconsin' },
  { code: 'WY', name: 'Wyoming' },
  { code: 'DC', name: 'District of Columbia' },
  { code: 'PR', name: 'Puerto Rico' },
  { code: 'VI', name: 'U.S. Virgin Islands' },
  { code: 'GU', name: 'Guam' },
  { code: 'AS', name: 'American Samoa' }
];

// Form data
const form = ref({
  first_name: '',
  last_name: '',
  business_name: '',
  phone_number: '',
  business_email: '',
  monthly_volume: '',
  average_sale: null,
  high_ticket: null,
  privacy_agreement: false,
  
  business_entity_type: '',
  industry_type: '',
  dba: '',
  product_service: '',
  business_phone: '',
  year_started: '',
  website: '',
  address_line1: '',
  address_line2: '',
  state: '',
  zip: '',
  
  owner_first_name: '',
  owner_last_name: '',
  title: '',
  date_of_birth: '',
  ownership_percentage: null,
  drivers_license: '',
  dl_state: '',
  owner_phone: '',
  home_address_line1: '',
  home_address_line2: '',
  city: '',
  home_state: '',
  home_zip: '',
  
  // Device Selection fields
  selected_device: '',
  payment_option: '',
  
  // System Configuration fields
  number_of_locations: '',
  number_of_registers: '',
  number_of_servers: '',
  handhelds_needed: undefined,
  number_of_handhelds: 1,
  handheld_features: [],
  customer_displays_needed: undefined,
  payment_method: 'cash',
  additional_requirements: '',
  
  // Restaurant Profile fields
  restaurant_type: '',
  service_style: '',
  important_features: [],
  sales_volume: '',
  tech_comfort: '',
  current_pos_status: '',
  current_system_issues: [],
  order_management_method: '',
  customer_engagement_tools: '',
  staff_confidence: '',
  technical_support: '',
  complete_solution_response: '',
  
  // New fields for different business types
  inventory_tracking: '',
  loyalty_program: '',
  appointment_scheduling: '',
  client_management: '',
  mobile_payment: '',
  location_tracking: '',
  online_payment: '',
  ecommerce_platform: '',
  business_challenges: [],
  
  // Additional fields for retail business
  retail_system_issues: [],
  staff_tech_comfort: '',
  retail_solution_response: '',
  
  // Additional fields for service business
  service_challenges: [],
  service_payment_method: '',
  service_solution_response: '',
  
  // Additional fields for mobile business
  mobile_challenges: [],
  mobile_business_type: '',
  mobile_solution_response: '',
  
  // Additional fields for online business
  online_challenges: [],
  online_order_volume: '',
  online_solution_response: '',
  
  // Signature fields
  terms_agreement: false,
  signature_name: '',
  signature_data: null,
  signature_date: new Date().toISOString().split('T')[0], // Today's date as default
});

// Step navigation
function nextStep() {
  if (validateCurrentStep()) {
    // If on device selection step, check if a device was selected OR if there are items in the cart
    if (currentStep.value === 6 && !selectedDevice.value && cartItems.value.length === 0) {
      deviceSelectionError.value = true;
      return;
    }
    
    // If there are items in the cart, allow proceeding to the next step even if no device is currently selected
    if (currentStep.value === 6 && !selectedDevice.value && cartItems.value.length > 0) {
      deviceSelectionError.value = false;
    }
    
    currentStep.value++;
    window.scrollTo(0, 0);
    
    // Only automatically submit if moving from step 7 to step 8 (which doesn't exist, so we submit instead)
    if (currentStep.value > totalSteps) {
      submitForm();
    }
  }
}

function prevStep() {
  currentStep.value--;
  window.scrollTo(0, 0);
}

// Validate current step before proceeding
function validateCurrentStep() {
  if (currentStep.value === 1) {
    // Validate Business Information
    if (!form.value.first_name || !form.value.last_name || 
        !form.value.business_name || !form.value.phone_number || 
        !form.value.business_email || !form.value.monthly_volume || 
        !form.value.average_sale || !form.value.high_ticket || 
        !form.value.privacy_agreement) {
      alert('Please fill out all required fields');
      return false;
    }
    
    // Basic email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(form.value.business_email)) {
      alert('Please enter a valid email address');
      return false;
    }
    
    // Phone number validation
    const phoneRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!phoneRegex.test(form.value.phone_number)) {
      alert('Please enter a valid phone number (e.g., 555-555-5555)');
      return false;
    }
  } else if (currentStep.value === 2) {
    // Validate Business Details
    if (!form.value.business_entity_type || !form.value.industry_type) {
      alert('Please select all required business details');
      return false;
    }
  }
  // Restaurant Profile (step 3) is optional, so no validation needed
  else if (currentStep.value === 4) {
    // Validate Owner Information if needed
    // (this is optional for now)
  }
  
  // Add validation for signature fields in step 7
  if (currentStep.value === 7) {
    if (!form.value.terms_agreement || !form.value.signature_name || !form.value.signature_data || !form.value.signature_date) {
      // Show error for signature field
      signatureError.value = !form.value.signature_data;
      
      alert('Please complete all required fields including signature');
      return false;
    }
  }
  
  return true;
}

// Form submission method
function submitForm() {
  if (!validateCurrentStep()) {
    return;
  }
  
  isSubmitting.value = true;
  
  // Simulate API call with a timeout
  setTimeout(() => {
    // Process form submission
    console.log('Form submitted:', form.value);
    
    // Move to confirmation step
    currentStep.value = 8;
    isSubmitting.value = false;
    
    // Scroll to top of page to show confirmation
    window.scrollTo(0, 0);
  }, 1500);
}

// Device selection function
function selectDevice(device, paymentOption) {
  selectedDevice.value = device;
  selectedPaymentOption.value = paymentOption;
  deviceSelectionError.value = false; // Clear any error when a device is selected
  
  // Update form data with selected device
  form.value.selected_device = device;
  form.value.payment_option = paymentOption;
  
  // Add to cart with animation
  addToCart({
    name: device,
    price: paymentOption || getBundlePrice(device)
  });
}

// Include these additions in your script\n// Removed duplicate deviceSelectionError declaration

// Add new data for device selection components in script section
const showPriceList = ref(false);
const featuredBundle = 'Kwick 15" POS Bundle';

const bundlePrices = [
  { name: "1 Bundle", price: "$1,288.00" },
  { name: "2 Bundles", price: "$2,576.00" },
  { name: "3 Bundles", price: "$3,864.00" },
  { name: "4 Bundles", price: "$5,152.00" },
  { name: "5 Bundles", price: "$6,440.00" },
  { name: "6 Bundles", price: "$7,728.00" },
  { name: "7 Bundles", price: "$9,016.00" },
  { name: "8 Bundles", price: "$10,304.00" },
  { name: "9 Bundles", price: "$11,592.00" },
  { name: "10 Bundles", price: "$12,880.00" },
  { name: "11 Bundles", price: "$14,168.00" },
  { name: "12 Bundles", price: "$15,456.00" },
  { name: "13 Bundles", price: "$16,744.00" },
  { name: "14 Bundles", price: "$18,032.00" },
  { name: "15 Bundles", price: "$19,320.00" },
  { name: "16 Bundles", price: "$20,608.00" },
  { name: "17 Bundles", price: "$21,896.00" },
  { name: "18 Bundles", price: "$23,184.00" },
  { name: "19 Bundles", price: "$24,472.00" },
  { name: "20 Bundles", price: "$25,760.00" }
];

const bundleOptions = [
  { name: "Kwick 15\" POS Bundle" },
  { name: "Kwick 15\" Server Bundle" },
  { name: "Kwick Customer Display POS Bundle" },
  { name: "Kwick iPad Bundle" },
  { name: "Kwick 21\" Large Kiosk Bundle" },
  { name: "Setup for Kwick: Basic Setup" },
  { name: "Handheld - A920 (Financing Only)" }
];

// Define product options for the Products section
const productOptions = [
  { name: "Handheld - A920" },
  { name: "ACT 15\" POS Station" },
  { name: "MINT 10\" POS Station w/ Built-in Printer" },
  { name: "MagTek Payment Device DynaFlex II Go" },
  { name: "Food Truck / Mobile Vendor Hardware Setup" },
  { name: "Innovative QR Bundle" },
  { name: "3rd Party Platform Integration (After 3-month trial)" }
];

// Define additional hardware options
const additionalHardwareOptions = [
  { name: "KP Thermal Printer", price: "$225.00" },
  { name: "Epson Kitchen Printer", price: "$500.00" },
  { name: "Epson Label Printer", price: "$550.00" },
  { name: "Kitchen Display Monitor 20\"", price: "$1,000.00" },
  { name: "KwickPOS Caller ID", price: "$100.00" },
  { name: "Kitchen Armor Kitchen Display Monitor 22\"", price: "$1,500.00" }
];

// Computed property to filter out products from bundle options
const filteredBundleOptions = computed(() => {
  return bundleOptions.filter(bundle => bundle.name !== "Handheld - A920 (Financing Only)");
});

// Toggle price list modal
function togglePriceList() {
  showPriceList.value = !showPriceList.value;
}

// Add new function to select a bundle and immediately proceed to the next step
function selectBundleAndProceed(device, paymentOption) {
  // First set the device
  selectDevice(device, paymentOption);
  
  // Since step order changed, we now go to the next step in sequence
  nextStep();
  
  // Hide the price list
  showPriceList.value = false;
  
  // Scroll to top
  window.scrollTo(0, 0);
}

// Add computed property for restaurant business check
const isRestaurantBusiness = computed(() => {
  return form.value.industry_type === 'Restaurant' || 
         form.value.product_service?.toLowerCase().includes('restaurant') || 
         form.value.product_service?.toLowerCase().includes('food');
});

// Add computed properties for other business types
const isRetailBusiness = computed(() => {
  return form.value.industry_type === 'Retail - Store Front Location' || 
         form.value.product_service?.toLowerCase().includes('retail') ||
         form.value.product_service?.toLowerCase().includes('shop') ||
         form.value.product_service?.toLowerCase().includes('store');
});

const isServiceBusiness = computed(() => {
  return form.value.industry_type === 'Service Business' || 
         form.value.product_service?.toLowerCase().includes('service');
});

const isMobileBusiness = computed(() => {
  return form.value.industry_type === 'Mobile Business' || 
         form.value.product_service?.toLowerCase().includes('mobile') ||
         form.value.product_service?.toLowerCase().includes('truck');
});

const isOnlineBusiness = computed(() => {
  return form.value.industry_type === 'Online/MOTO' || 
         form.value.product_service?.toLowerCase().includes('online') ||
         form.value.product_service?.toLowerCase().includes('e-commerce') ||
         form.value.product_service?.toLowerCase().includes('ecommerce');
});

const isProfessionalService = computed(() => {
  return form.value.industry_type === 'Licensed Professional Service' || 
         form.value.product_service?.toLowerCase().includes('professional') ||
         form.value.product_service?.toLowerCase().includes('licensed');
});

// Function to get bundle price based on selected device
function getBundlePrice(device) {
  if (!device) return '$0.00';
  
  // First, check for specific bundle types with their prices
  switch(device) {
    case "Kwick 15\" Server Bundle":
      return '$1,288.00';
    case "Kwick 15\" POS Bundle":
      return '$1,388.00';
    case "Kwick Customer Display POS Bundle":
      return '$1,788.00';
    case "Kwick iPad Bundle":
      return '$1,099.00';
    case "Kwick 21\" Large Kiosk Bundle":
      return '$3,000.00';
  }
  
  // Individual Hardware
  if (device === "Handheld - A920 (Financing Only)") return '$625.00';
  if (device === "Handheld - A920") return '$550.00';
  if (device === "ACT 15\" POS Station") return '$1,288.00';
  if (device === "MINT 10\" POS Station w/ Built-in Printer") return '$999.00';
  if (device === "MagTek Payment Device DynaFlex II Go") return '$999.00';
  if (device === "Food Truck / Mobile Vendor Hardware Setup") return '$1,288.00';
  if (device === "Innovative QR Bundle") return '$49.00';
  if (device === "3rd Party Platform Integration (After 3-month trial)") return '$109.00';
  
  // Additional Hardware Options
  if (device === "KP Thermal Printer") return '$225.00';
  if (device === "Epson Kitchen Printer") return '$500.00';
  if (device === "Epson Label Printer") return '$550.00';
  if (device === "Kitchen Display Monitor 20\"") return '$1,000.00';
  if (device === "KwickPOS Caller ID") return '$100.00';
  if (device === "Kitchen Armor Kitchen Display Monitor 22\"") return '$1,500.00';
  
  // Setup Options
  if (device === "Basic Setup") return '$500.00';
  if (device === "Setup for Kwick: Basic Setup") return '$500.00';
  
  // Default fallback price
  return '$1,388.00';
}

// Function to add bundle to cart
function addBundleToCart() {
  if (bundleQuantity.value <= 0) {
    alert('Please select at least 1 bundle');
    return;
  }

  // Get the bundle name and quantity
  const bundleName = selectedBundleDetails.value.name;
  const quantity = parseInt(bundleQuantity.value);
  
  // Handle Setup bundle differently
  if (bundleName === "Setup for Kwick: Basic Setup") {
    addToCart({
      name: bundleName,
      price: "$500.00",
      quantity: 1
    });
    showBundleModal.value = false;
    return;
  }
  
  // Set price per bundle based on bundle type
  let pricePerBundle;
  switch(bundleName) {
    case "Kwick 15\" Server Bundle":
      pricePerBundle = 1288;
      break;
    case "Kwick 15\" POS Bundle":
      pricePerBundle = 1388;
      break;
    case "Kwick Customer Display POS Bundle":
      pricePerBundle = 1788;
      break;
    case "Kwick iPad Bundle":
      pricePerBundle = 1099;
      break;
    case "Kwick 21\" Large Kiosk Bundle":
      pricePerBundle = 3000;
      break;
    case "ACT 15\" POS Station":
      pricePerBundle = 1288;
      break;
    case "MINT 10\" POS Station w/ Built-in Printer":
      pricePerBundle = 999;
      break;
    case "MagTek Payment Device DynaFlex II Go":
      pricePerBundle = 999;
      break;
    case "Food Truck / Mobile Vendor Hardware Setup":
      pricePerBundle = 1288;
      break;
    case "Innovative QR Bundle":
      pricePerBundle = 49;
      break;
    case "3rd Party Platform Integration (After 3-month trial)":
      pricePerBundle = 109;
      break;
    case "Handheld - A920":
      pricePerBundle = 550;
      break;
    default:
      pricePerBundle = 1388;
  }
  
  // Calculate total price
  const totalPrice = pricePerBundle * quantity;
  
  // Format total price with commas and decimals
  const formattedTotalPrice = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  }).format(totalPrice);

  // Determine label based on product type
  const itemLabel = bundleName === "Handheld - A920" ? 
    (quantity > 1 ? 'units' : 'unit') : 
    (quantity > 1 ? 'bundles' : 'bundle');

  // Add to cart with quantity and total price
  addToCart({
    name: `${bundleName} (${quantity} ${itemLabel})`,
    price: formattedTotalPrice,
    quantity: quantity
  });
  
  showBundleModal.value = false;
}

// Function to get bundle prices array based on bundle type
function getBundlePricesArray(bundleName) {
  // For Setup bundle, only show single fixed price
  if (bundleName === "Setup for Kwick: Basic Setup") {
    return [{
      name: "Basic Setup",
      price: "$500.00"
    }];
  }

  // Get base price for the bundle type
  let basePrice;
  switch(bundleName) {
    case "Kwick 15\" Server Bundle":
      basePrice = 1288;
      break;
    case "Kwick 15\" POS Bundle":
      basePrice = 1388;
      break;
    case "Kwick Customer Display POS Bundle":
      basePrice = 1788;
      break;
    case "Kwick iPad Bundle":
      basePrice = 1099;
      break;
    case "Kwick 21\" Large Kiosk Bundle":
      basePrice = 3000;
      break;
    case "ACT 15\" POS Station":
      basePrice = 1288;
      break;
    case "MINT 10\" POS Station w/ Built-in Printer":
      basePrice = 999;
      break;
    case "MagTek Payment Device DynaFlex II Go":
      basePrice = 999;
      break;
    case "Food Truck / Mobile Vendor Hardware Setup":
      basePrice = 1288;
      break;
    case "Innovative QR Bundle":
      basePrice = 49;
      break;
    case "3rd Party Platform Integration (After 3-month trial)":
      basePrice = 109;
      break;
    case "Handheld - A920":
      basePrice = 550;
      break;
    default:
      basePrice = 1388;
  }

  // For Handheld A920, use units instead of bundles label
  const itemLabel = bundleName === "Handheld - A920" ? 
    (i => `${i + 1} ${i === 0 ? 'Unit' : 'Units'}`) : 
    (i => `${i + 1} ${i === 0 ? 'Bundle' : 'Bundles'}`);

  return Array.from({ length: 20 }, (_, i) => ({
    name: itemLabel(i),
    price: new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    }).format(basePrice * (i + 1))
  }));
}

// Function to buy now
function buyNowBundle() {
  addToCart({
    name: selectedBundleDetails.value.name,
    price: getBundlePrice(selectedBundleDetails.value.name),
    quantity: bundleQuantity.value
  });
  
  // Select this device/bundle
  selectDevice(selectedBundleDetails.value.name, 'buy');
  
  // Close the modal
  showBundleModal.value = false;
  
  // We don't want to automatically go to step 8, so no navigation here
}

// Function to add hardware to cart
function addHardwareToCart(hardware) {
  addToCart({
    name: hardware.name,
    price: hardware.price,
    quantity: 1
  });
}

// Bundle Modal
const showBundleModal = ref(false);
const bundleItems = ref([
  { name: 'POS Terminal', description: 'High-performance touchscreen terminal' },
  { name: 'Receipt Printer', description: 'Thermal receipt printer for fast printing' },
  { name: 'Payment Terminal', description: 'Secure payment processing terminal with PIN pad' },
  { name: 'Cash Drawer', description: 'Durable metal cash drawer with security features' },
  { name: 'Barcode Scanner', description: 'High-speed laser barcode scanner' },
  { name: 'Cloud Software', description: 'Full-featured POS software with inventory management' },
  { name: 'Installation', description: 'Professional on-site installation and setup' },
  { name: 'Training', description: 'Staff training on using the POS system' },
]);

// Function to go to a specific step
function goToStep(step) {
  // Allow going back to previous steps without validation
  if (step < currentStep.value) {
    currentStep.value = step;
  window.scrollTo(0, 0);
    return;
  }
  
  // Skip current step (stay on same step)
  if (step === currentStep.value) {
    return;
  }
  
  // When moving forward, we need to validate the current step first
  if (validateCurrentStep()) {
    // Check device selection specifically for step 6
    if (currentStep.value === 6 && step > 6 && !selectedDevice.value) {
      deviceSelectionError.value = true;
      return;
    }
    
    // If validation passed, go to the requested step
    currentStep.value = step;
    window.scrollTo(0, 0);
    
    // Handle submission if trying to go beyond the last step
    if (currentStep.value > totalSteps) {
      submitForm();
    }
  }
}

// Add new function to get bundle category
function getBundleCategory(bundleName) {
  if (bundleName.includes("Kwick") || bundleName.includes("POS") || bundleName.includes("ACT") || bundleName.includes("MINT")) {
    return "Hardware";
  } else if (bundleName.includes("Setup")) {
    return "Service";
  } else if (bundleName.includes("Integration")) {
    return "Software";
  } else {
    return "Accessory";
  }
}

// Function to toggle issue selection for current POS system
function toggleIssue(issue) {
  if (!form.value.current_system_issues) {
    form.value.current_system_issues = [];
  }
  
  if (form.value.current_system_issues.includes(issue)) {
    form.value.current_system_issues = form.value.current_system_issues.filter(i => i !== issue);
  } else {
    form.value.current_system_issues.push(issue);
  }
}

// Function to handle business challenges for generic business profiles
function toggleBusinessChallenge(challenge) {
  if (!form.value.business_challenges) {
    form.value.business_challenges = [];
  }
  
  if (form.value.business_challenges.includes(challenge)) {
    form.value.business_challenges = form.value.business_challenges.filter(c => c !== challenge);
  } else {
    form.value.business_challenges.push(challenge);
  }
}

// Function to handle complete solution selection
function selectCompleteSolution(response) {
  form.value.complete_solution_response = response;
  form.value.selected_value_bundle = true;
}

// Add new function to select a bundle and transfer it to the Bundle Selection step
function selectBundleAndTransfer(device, paymentOption) {
  // First set the device (this will also add to cart)
  selectDevice(device, paymentOption);
  
  // Next step will show the selected bundle details
  nextStep();
  
  // Hide the price list
  showPriceList.value = false;
  
  // Scroll to top
  window.scrollTo(0, 0);
}

// Function to toggle retail business system issues
function toggleRetailIssue(issue) {
  if (!form.value.retail_system_issues) {
    form.value.retail_system_issues = [];
  }
  
  if (form.value.retail_system_issues.includes(issue)) {
    form.value.retail_system_issues = form.value.retail_system_issues.filter(i => i !== issue);
  } else {
    form.value.retail_system_issues.push(issue);
  }
}

// Function to toggle service business challenges
function toggleServiceChallenge(challenge) {
  if (!form.value.service_challenges) {
    form.value.service_challenges = [];
  }
  
  if (form.value.service_challenges.includes(challenge)) {
    form.value.service_challenges = form.value.service_challenges.filter(c => c !== challenge);
  } else {
    form.value.service_challenges.push(challenge);
  }
}

// Function to toggle mobile business challenges
function toggleMobileChallenge(challenge) {
  if (!form.value.mobile_challenges) {
    form.value.mobile_challenges = [];
  }
  
  if (form.value.mobile_challenges.includes(challenge)) {
    form.value.mobile_challenges = form.value.mobile_challenges.filter(c => c !== challenge);
  } else {
    form.value.mobile_challenges.push(challenge);
  }
}

// Add new function to toggle online challenges
function toggleOnlineChallenge(challenge) {
  if (!form.value.online_challenges) {
    form.value.online_challenges = [];
  }
  
  if (form.value.online_challenges.includes(challenge)) {
    form.value.online_challenges = form.value.online_challenges.filter(c => c !== challenge);
  } else {
    form.value.online_challenges.push(challenge);
  }
}

// Add these new variables and functions after the existing code in the script section
const signatureCanvas = ref(null);
const hasSignature = ref(false);
const signatureError = ref(false);
let isDrawing = false;
let ctx = null;

// Get today's date in YYYY-MM-DD format for the min attribute of the date input
const todayDate = new Date().toISOString().split('T')[0];

// Initialize the signature canvas after component mounted
onMounted(() => {
  // Wait for DOM to be ready
  nextTick(() => {
    setupSignature();
  });
});

// Initialize the signature canvas after component mounted
onMounted(() => {
  // Only initialize the signature pad when we're on the correct step
  watch(() => currentStep.value, (newStep) => {
    // Step 7 is the signature step (based on your steps array)
    if (newStep === 7) {
      // Use nextTick to ensure the DOM is ready after step change
      nextTick(() => {
        // Use a safe version of setupSignature that won't loop infinitely
        setupSignatureWithRetry();
      });
    }
  });
});

// New function with retry limit
function setupSignatureWithRetry(retries = 0) {
  const MAX_RETRIES = 5;
  
  if (retries >= MAX_RETRIES) {
    console.error("Failed to initialize signature canvas after multiple attempts");
    return;
  }
  
  if (!signatureCanvas.value) {
    console.warn('Canvas ref not available yet, will retry');
    setTimeout(() => setupSignatureWithRetry(retries + 1), 500);
    return;
  }
  
  // If we reach here, the canvas is available, so set it up
  setupSignature();
}

function setupSignature() {
  if (!signatureCanvas.value) {
    console.warn('Canvas ref not available yet');
    // No need for setTimeout here anymore
    return;
  }
  
  console.log('Setting up signature pad');
  
  // Set dimensions
  const canvas = signatureCanvas.value;
  const rect = canvas.getBoundingClientRect();
  canvas.width = rect.width;
  canvas.height = rect.height;
  
  // Get context
  ctx = canvas.getContext('2d');
  if (!ctx) {
    console.error('Could not get canvas context');
    return;
  }
  
  // Set style
  ctx.lineWidth = 4;
  ctx.lineCap = 'round';
  ctx.lineJoin = 'round';
  ctx.strokeStyle = '#000000';
  
  // Add event listeners
  canvas.addEventListener('mousedown', startDrawing);
  canvas.addEventListener('mousemove', draw);
  canvas.addEventListener('mouseup', stopDrawing);
  canvas.addEventListener('mouseleave', stopDrawing);
  
  // Touch events
  canvas.addEventListener('touchstart', handleTouchStart);
  canvas.addEventListener('touchmove', handleTouchMove);
  canvas.addEventListener('touchend', stopDrawing);
}

// Drawing functions
function startDrawing(e) {
  isDrawing = true;
  draw(e);
}

function draw(e) {
  if (!isDrawing || !ctx || !signatureCanvas.value) return;
  
  e.preventDefault();
  
  // Get coordinates
  const canvas = signatureCanvas.value;
  const rect = canvas.getBoundingClientRect();
  const x = (e.clientX || (e.touches && e.touches[0].clientX)) - rect.left;
  const y = (e.clientY || (e.touches && e.touches[0].clientY)) - rect.top;
  
  ctx.lineTo(x, y);
  ctx.stroke();
  ctx.beginPath();
  ctx.moveTo(x, y);
  
  // Record that we have a signature
  hasSignature.value = true;
  form.value.signature_data = 'signed';
}

function stopDrawing() {
  if (isDrawing && ctx) {
    isDrawing = false;
    ctx.beginPath();
    signatureError.value = false;
    
    // Save signature data
    if (signatureCanvas.value) {
      form.value.signature_data = signatureCanvas.value.toDataURL();
    }
  }
}

function handleTouchStart(e) {
  if (e.touches && e.touches.length > 0) {
    e.preventDefault();
    startDrawing(e);
  }
}

function handleTouchMove(e) {
  if (e.touches && e.touches.length > 0) {
    e.preventDefault();
    draw(e);
  }
}

function clearSignature() {
  if (ctx && signatureCanvas.value) {
    ctx.clearRect(0, 0, signatureCanvas.value.width, signatureCanvas.value.height);
    hasSignature.value = false;
    form.value.signature_data = null;
  }
}

// Test function to ensure the signature pad is working
function testSignature() {
  if (!ctx || !signatureCanvas.value) {
    alert('Canvas context not available');
    return;
  }
  
  // Draw a test signature (simple line)
  ctx.beginPath();
  ctx.moveTo(30, 30);
  ctx.lineTo(signatureCanvas.value.width - 30, signatureCanvas.value.height - 30);
  ctx.stroke();
  
  ctx.beginPath();
  ctx.moveTo(30, signatureCanvas.value.height - 30);
  ctx.lineTo(signatureCanvas.value.width - 30, 30);
  ctx.stroke();
  
  hasSignature.value = true;
  form.value.signature_data = signatureCanvas.value.toDataURL();
  console.log('Test signature created');
}

// Remove this entire function as it's not used and may cause conflicts
function initializeCanvas() {
  // Empty function to replace any old implementations
  console.log('Old initialize function called - safe to ignore');
  return;
}

// Shopping cart functionality
const cartItems = ref([]);
const cartItemCount = computed(() => cartItems.value.length);
const showCartItems = ref(false);
const showCartSuccessMessage = ref(false);
const cartSuccessMessage = ref('');

// Animation for cart badge
const animateCartBadge = () => {
  const cartBadge = document.querySelector('.bounce-enter-active');
  if (cartBadge) {
    cartBadge.classList.add('animate-cart-badge');
    setTimeout(() => {
      cartBadge.classList.remove('animate-cart-badge');
    }, 500);
  }
};

// Add to cart function
const addToCart = (item) => {
  // Check if item already exists to avoid duplicates
  const exists = cartItems.value.some(cartItem => 
    cartItem.name === item.name && cartItem.price === item.price
  );
  
  if (!exists) {
    cartItems.value.push(item);
    
    // Show success message
    cartSuccessMessage.value = `${item.name} ${item.quantity ? `(${item.quantity} ${item.quantity > 1 ? 'bundles' : 'bundle'})` : ''} is added to cart successfully`;
    showCartSuccessMessage.value = true;
    
    // Hide success message after 5 seconds (increased from 3)
    setTimeout(() => {
      showCartSuccessMessage.value = false;
    }, 5000);
    
    // Create flying element animation
    const flyingItem = document.createElement('div');
    flyingItem.className = 'flying-item';
    flyingItem.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
      </svg>
    `;
    document.body.appendChild(flyingItem);
    
    // Get the button/element that was clicked
    const sourceElement = document.activeElement || document.querySelector('.border-blue-400');
    const cartIcon = document.querySelector('.mt-4.inline-flex .p-3.bg-gradient-to-br');
    
    if (sourceElement && cartIcon) {
      const sourceRect = sourceElement.getBoundingClientRect();
      const cartRect = cartIcon.getBoundingClientRect();
      
      // Position the flying item at the source element
      flyingItem.style.top = `${sourceRect.top + sourceRect.height/2 - 15}px`;
      flyingItem.style.left = `${sourceRect.left + sourceRect.width/2 - 15}px`;
      
      // Animate the flying item to the cart
      setTimeout(() => {
        flyingItem.style.top = `${cartRect.top + cartRect.height/2 - 15}px`;
        flyingItem.style.left = `${cartRect.left + cartRect.width/2 - 15}px`;
        flyingItem.style.opacity = '0.5';
        flyingItem.style.transform = 'scale(0.5)';
      }, 50);
      
      // Remove the flying item after animation
      setTimeout(() => {
        document.body.removeChild(flyingItem);
        
        // Animate the cart icon
        cartIcon.classList.add('animate-cart-icon');
        setTimeout(() => {
          cartIcon.classList.remove('animate-cart-icon');
        }, 500);
      }, 500);
    }
  }
};

// Remove from cart function
const removeFromCart = (index) => {
  cartItems.value.splice(index, 1);
};

// Function to go back to products
function goBackToProducts() {
  currentStep.value = 6; // Go back to device selection step
  window.scrollTo(0, 0);
}

// Add new data for the Bundle Details Modal
const selectedBundleDetails = ref(null);
const bundleQuantity = ref(0);
const modalOffsetTop = ref(0); // Modal position offset

// Function to open bundle details modal
function openBundleModal(bundle) {
  // Set the selected bundle details for the modal
  selectedBundleDetails.value = bundle;
  
  // If it's the Setup bundle, don't auto-add to cart, show the modal instead
  if (bundle.name === "Setup for Kwick: Basic Setup") {
    bundleQuantity.value = 1; // Pre-select quantity of 1
    
    // Calculate modal position based on current scroll position
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;
    // Position the modal slightly above the middle of the current viewport
    modalOffsetTop.value = scrollTop - (windowHeight * 0.2);
    // Ensure it's not positioned too high
    modalOffsetTop.value = Math.max(0, modalOffsetTop.value);
    
    // Show the modal
    showBundleModal.value = true;
    
    // Prevent any unwanted step navigation
    if (typeof event !== 'undefined' && event) {
      event.stopPropagation();
      event.preventDefault();
    }
    
    return;
  }
  
  // Reset bundle quantity to "None" when opening a new bundle modal
  bundleQuantity.value = 0;
  
  // Calculate modal position based on current scroll position
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const windowHeight = window.innerHeight;
  // Position the modal slightly above the middle of the current viewport
  modalOffsetTop.value = scrollTop - (windowHeight * 0.2);
  // Ensure it's not positioned too high
  modalOffsetTop.value = Math.max(0, modalOffsetTop.value);
  
  // Show the modal
  showBundleModal.value = true;
  
  // Prevent any unwanted step navigation
  if (typeof event !== 'undefined' && event) {
    event.stopPropagation();
    event.preventDefault();
  }
}

// Function to get recommended setup based on answers
function getRecommendedSetup() {
  return 'Complete POS Solution Package';
}

// Function to get recommendation details
function getRecommendationDetails() {
  return 'a complete POS solution with hardware, software, professional installation, and comprehensive training - plus 0% credit card processing with Hurricane Pay.';
}

// Function to skip to confirmation step
function skipToConfirmation() {
  currentStep.value = 8;
  window.scrollTo(0, 0);
}

// Restaurant profile related data
const restaurantTypes = [
  'Fine Dining', 
  'Casual Dining', 
  'Fast Casual',
  'Quick Service', 
  'Bar/Pub', 
  'Café/Bakery',
  'Food Truck',
  'Buffet',
  'Other'
];

const serviceStyles = [
  'Table Service',
  'Counter Service',
  'Self-Service',
  'Hybrid/Mixed',
  'Delivery-Focused',
  'Take-Out Primary'
];

const posFeatures = [
  'Inventory Management',
  'Staff Management',
  'Online Ordering',
  'Table Management',
  'Kitchen Display System',
  'Customer Loyalty Program',
  'Reporting & Analytics',
  'Menu Management',
  'Delivery Integration',
  'Payment Processing'
];

// Function to select restaurant type
function selectRestaurantType(type) {
  form.value.restaurant_type = type;
  
  // Reset dependent fields
  form.value.service_style = '';
  form.value.important_features = [];
  form.value.sales_volume = '';
  form.value.tech_comfort = '';
}

// Function to toggle feature selection
function toggleFeature(feature) {
  if (!form.value.important_features) {
    form.value.important_features = [];
  }
  
  if (form.value.important_features.includes(feature)) {
    form.value.important_features = form.value.important_features.filter(f => f !== feature);
  } else {
    form.value.important_features.push(feature);
  }
}

// Function to toggle handheld feature selection
function toggleHandheldFeature(feature) {
  if (!form.value.handheld_features) {
    form.value.handheld_features = [];
  }
  
  if (form.value.handheld_features.includes(feature)) {
    form.value.handheld_features = form.value.handheld_features.filter(f => f !== feature);
  } else {
    form.value.handheld_features.push(feature);
  }
}

// Helper functions for calculations
function calculateDiscount(priceInput, discountRate) {
  let price;
  if (typeof priceInput === 'string') {
    // Extract numeric value from price string (e.g., "$1,388.00" -> 1388)
    price = parseFloat(priceInput.replace(/[^0-9.]/g, ''));
  } else {
    price = priceInput;
  }
  
  if (isNaN(price)) return '$0.00';
  
  const discountAmount = price * discountRate;
  return `Save $${discountAmount.toFixed(2)}`;
}

function calculateMonthlyPayment(priceInput, months) {
  let price;
  if (typeof priceInput === 'string') {
    // Extract numeric value from price string (e.g., "$1,388.00" -> 1388)
    price = parseFloat(priceInput.replace(/[^0-9.]/g, ''));
  } else {
    price = priceInput;
  }
  
  if (isNaN(price) || months <= 0) return '$0.00';
  
  const monthlyPayment = price / months;
  return `$${monthlyPayment.toFixed(2)}`;
}

// Add computed property for bundle price value
const bundlePriceValue = computed(() => {
  const priceString = getBundlePrice(selectedDevice.value);
  // Extract numeric value from price string (e.g., "$1,388.00" -> 1388)
  const numericValue = parseFloat(priceString.replace(/[^0-9.]/g, ''));
  return numericValue || 0;
});

// Add computed property for total cart value
const totalCartValue = computed(() => {
  if (cartItems.value.length === 0) {
    return bundlePriceValue.value; // Fall back to selected device if cart is empty
  }
  
  let total = 0;
  cartItems.value.forEach(item => {
    // Extract numeric value from price string (e.g., "$1,388.00" -> 1388)
    const priceString = item.price;
    const priceValue = parseFloat(priceString.replace(/[$,]/g, ''));
    
    if (!isNaN(priceValue)) {
      total += priceValue;
    }
  });
  
  return total;
});

// Function to get product image
function getProductImage(productName) {
  if (productName === 'Handheld - A920') {
    return '@/../images/A920.png';
  } else if (productName === 'MINT 10" POS Station w/ Built-in Printer') {
    return '@/../images/mintPOS.jpg';
  } else {
    return '@/../images/fourth.png';
  }
}
</script>

<style scoped>
/* Custom color variables */
:root {
  --custom-red: #973131;
  --custom-red-dark: #7e2016;
}

/* Force red background and white text for buttons */
button.bg-custom-red,
button[class*="bg-custom-red"] {
  background-color: #973131 !important;
  color: white !important;
  border: 1px solid #973131 !important;
}

button.bg-custom-red:hover,
button[class*="bg-custom-red"]:hover {
  background-color: #7e2016 !important;
  border-color: #7e2016 !important;
}

/* Brighter red for better visibility */
.bg-custom-red {
  background-color: #973131 !important;
}

.border-custom-red {
  border-color: #973131 !important;
}

.text-custom-red {
  color: #973131;
}

.text-white {
  color: white !important;
}

/* Enhanced step indicator styles */
[class*="step-active"],
.step-active {
  box-shadow: 0 0 0 2px white, 0 0 0 4px #973131 !important;
  background-color: #973131 !important;
  color: white !important;
}

.step-number {
  color: inherit !important;
  position: relative;
  z-index: 5;
  font-size: 16px;
  font-weight: bold;
}

/* Additional styles to ensure visibility */
.bg-custom-red .step-number,
[class*="bg-custom-red"] .step-number {
  color: white !important;
}

/* Rest of existing styles */
.focus\:ring-custom-red:focus {
  --tw-ring-color: #973131;
  --tw-ring-opacity: 0.3;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, label, input, textarea, select {
  font-family: 'Inter', system-ui, sans-serif;
}

input[type="checkbox"] {
  accent-color: #973131;
}

/* Animations */
.animate-fade-in {
  animation: fadeIn 0.5s ease-out forwards;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Remove number input spinners (arrows) */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  appearance: none;
  margin: 0;
}

input[type="number"] {
  -moz-appearance: textfield; /* Firefox */
}

/* Cart animation styles */
.bounce-enter-active {
  animation: bounce 0.5s;
}

.bounce-leave-active {
  animation: bounce 0.5s reverse;
}

@keyframes bounce {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

.animate-cart-icon {
  animation: cartShake 0.5s ease-in-out;
}

@keyframes cartShake {
  0% { transform: translateX(0); }
  25% { transform: translateX(-5px) rotate(-5deg); }
  50% { transform: translateX(5px) rotate(5deg); }
  75% { transform: translateX(-5px) rotate(-5deg); }
  100% { transform: translateX(0); }
}

/* Flying item animation */
.flying-item {
  position: fixed;
  width: 30px;
  height: 30px;
  background-color: #973131;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  transition: all 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28);
  pointer-events: none;
}
</style>



