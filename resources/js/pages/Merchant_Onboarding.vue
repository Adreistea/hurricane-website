<template>
  <div>
    <NavBar />
    
    <div class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
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
          </div>
          
          <!-- Progress Bar with Percentage -->
          <div class="mb-12">
            <div class="flex justify-between items-center mb-2">
              <span class="text-sm font-medium text-gray-700">Progress</span>
              <span class="text-sm font-medium text-custom-red">{{ currentStep === 1 ? '0' : Math.round(((currentStep - 1) / totalSteps) * 100) }}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div 
                class="bg-custom-red h-2.5 rounded-full transition-all duration-500 ease-out"
                :style="{ width: `${currentStep === 1 ? '0' : ((currentStep - 1) / totalSteps) * 100}%` }">
              </div>
            </div>
          </div>
          
          <!-- Step Indicator -->
          <div class="flex justify-center mb-12">
            <div class="flex items-center">
              <div 
                v-for="(step, index) in steps" 
                :key="index" 
                class="flex items-center"
              >
                <div 
                  class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors duration-300 relative border shadow"
                  :class="[
                    currentStep > index + 1 ? 'bg-custom-red text-white border-custom-red' : 
                    currentStep === index + 1 ? 'bg-custom-red text-white border-custom-red font-bold step-active' : 
                    'bg-gray-200 text-gray-800 border-gray-300'
                  ]"
                  :style="currentStep >= index + 1 ? 'background-color: #973131 !important; color: white !important' : ''"
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
              
              <!-- Step 3: Owner Information -->
              <div v-if="currentStep === 3" class="animate-fade-in">
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
              
              <!-- Step 4: Device Selection -->
              <div v-if="currentStep === 4" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Please Choose Your Device</h3>
                <p class="text-gray-600 mb-6">
                  Please choose your option to proceed and start saving money quickly on merchant processing fees. 
                  Once you've selected your option, click the orange submit button. We will not charge you until your account is approved.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                  <!-- Smart Terminal -->
                  <div class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="p-4 flex flex-col items-center">
                      <img src="@/../images/first.png" alt="Smart Terminal" class="h-40 object-contain mb-4">
                      <h4 class="text-xl font-bold text-gray-800">Smart Terminal</h4>
                      <div class="flex items-center">
                        <span class="text-3xl font-bold text-indigo-600">0</span>
                        <span class="text-xl">%</span>
                        <span class="ml-1 text-sm text-gray-600">Credit Card<br>Processing</span>
                      </div>
                      <div class="w-full mt-4">
                        <p class="text-gray-700 font-medium mb-2">Best fits for</p>
                        <ul class="text-gray-600 text-sm mb-4">
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Quick-service Restaurants</li>
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Retailers</li>
                          <li class="border-l-2 border-gray-300 pl-2">Services</li>
                        </ul>
                        <div class="flex justify-between items-center">
                          <div class="text-gray-800">Get it</div>
                          <div class="text-center">
                            <div class="text-2xl font-bold text-red-600">FREE</div>
                            <div class="text-gray-400 line-through text-sm">$99.99/MO</div>
                          </div>
                        </div>
                        <button 
                          @click="selectDevice('Smart Terminal', 'free')"
                          class="mt-4 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                          :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Smart Terminal'}"
                        >
                          Get it Now
                        </button>
                        <p class="text-xs text-center text-gray-500 mt-2">please choose your payment option</p>
                      </div>
                    </div>
                  </div>

                  <!-- Smart Flex -->
                  <div class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="p-4 flex flex-col items-center">
                      <img src="@/../images/second.png" alt="Smart Flex" class="h-40 object-contain mb-4">
                      <h4 class="text-xl font-bold text-gray-800">Smart Flex</h4>
                      <div class="flex items-center">
                        <span class="text-3xl font-bold text-indigo-600">0</span>
                        <span class="text-xl">%</span>
                        <span class="ml-1 text-sm text-gray-600">Credit Card<br>Processing</span>
                      </div>
                      <div class="w-full mt-4">
                        <p class="text-gray-700 font-medium mb-2">Best fits for</p>
                        <ul class="text-gray-600 text-sm mb-4">
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Quick-service Restaurants</li>
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Retailers</li>
                          <li class="border-l-2 border-gray-300 pl-2">Services</li>
                        </ul>
                        <div class="flex justify-between items-center">
                          <div class="text-gray-800">Buy for</div>
                          <div class="text-center">
                            <div class="text-xl font-bold text-blue-600">$549<span class="text-sm">.95</span></div>
                            <div class="text-gray-600 text-sm">Lease for</div>
                            <div class="text-lg font-bold text-blue-600">$29<span class="text-sm">.99/mo</span></div>
                          </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mt-4">
                          <button 
                            @click="selectDevice('Smart Flex', 'buy')"
                            class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                            :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Smart Flex' && selectedPaymentOption === 'buy'}"
                          >
                            Buy
                          </button>
                          <button 
                            @click="selectDevice('Smart Flex', 'lease')"
                            class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                            :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Smart Flex' && selectedPaymentOption === 'lease'}"
                          >
                            Lease
                          </button>
                        </div>
                        <p class="text-xs text-center text-gray-500 mt-2">please choose your payment option</p>
                      </div>
                    </div>
                  </div>

                  <!-- Smart POS -->
                  <div class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="p-4 flex flex-col items-center">
                      <img src="@/../images/third.png" alt="Smart POS" class="h-40 object-contain mb-4">
                      <h4 class="text-xl font-bold text-gray-800">Smart POS</h4>
                      <div class="flex items-center">
                        <span class="text-3xl font-bold text-indigo-600">0</span>
                        <span class="text-xl">%</span>
                        <span class="ml-1 text-sm text-gray-600">Credit Card<br>Processing</span>
                      </div>
                      <div class="w-full mt-4">
                        <p class="text-gray-700 font-medium mb-2">Best fits for</p>
                        <ul class="text-gray-600 text-sm mb-4">
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Quick Service Restaurants</li>
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Retailers</li>
                          <li class="border-l-2 border-gray-300 pl-2">Restaurants</li>
                        </ul>
                        <div class="flex justify-between items-center">
                          <div class="text-gray-800">Buy for</div>
                          <div class="text-center">
                            <div class="text-xl font-bold text-blue-600">$949<span class="text-sm">.95</span></div>
                            <div class="text-gray-600 text-sm">Lease for</div>
                            <div class="text-lg font-bold text-blue-600">$49<span class="text-sm">.99/mo</span></div>
                          </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mt-4">
                          <button 
                            @click="selectDevice('Smart POS', 'buy')"
                            class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                            :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Smart POS' && selectedPaymentOption === 'buy'}"
                          >
                            Buy
                          </button>
                          <button 
                            @click="selectDevice('Smart POS', 'lease')"
                            class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                            :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Smart POS' && selectedPaymentOption === 'lease'}"
                          >
                            Lease
                          </button>
                        </div>
                        <p class="text-xs text-center text-gray-500 mt-2">please choose your payment option</p>
                      </div>
                    </div>
                  </div>

                  <!-- Paradise POS -->
                  <div class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="p-4 flex flex-col items-center">
                      <img src="@/../images/fourth.png" alt="Paradise POS" class="h-40 object-contain mb-4">
                      <h4 class="text-xl font-bold text-gray-800">Paradise POS</h4>
                      <div class="flex items-center">
                        <span class="text-3xl font-bold text-indigo-600">0</span>
                        <span class="text-xl">%</span>
                        <span class="ml-1 text-sm text-gray-600">Credit Card<br>Processing</span>
                      </div>
                      <div class="w-full mt-4">
                        <p class="text-gray-700 font-medium mb-2">Best fits for</p>
                        <ul class="text-gray-600 text-sm mb-4">
                          <li class="mb-1 border-l-2 border-gray-300 pl-2">Restaurants & Bars</li>
                        </ul>
                        <div class="flex justify-between items-center">
                          <div class="text-gray-800">Buy for</div>
                          <div class="text-center">
                            <div class="text-xl font-bold text-blue-600">$1299<span class="text-sm">.00</span></div>
                            <div class="text-gray-600 text-sm">Lease for</div>
                            <div class="text-lg font-bold text-blue-600">$54<span class="text-sm">.99/mo</span></div>
                          </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mt-4">
                          <button 
                            @click="selectDevice('Paradise POS', 'buy')"
                            class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                            :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Paradise POS' && selectedPaymentOption === 'buy'}"
                          >
                            Buy
                          </button>
                          <button 
                            @click="selectDevice('Paradise POS', 'lease')"
                            class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors"
                            :class="{'ring-2 ring-blue-600 bg-blue-700': selectedDevice === 'Paradise POS' && selectedPaymentOption === 'lease'}"
                          >
                            Lease
                          </button>
                        </div>
                        <p class="text-xs text-center text-gray-500 mt-2">please choose your payment option</p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Error message if no device is selected -->
                <div v-if="deviceSelectionError" class="text-red-600 text-center mb-6">
                  Please select a device to continue
                </div>
              </div>
              
              <!-- Step 5: Confirmation (moved from step 4) -->
              <div v-if="currentStep === 5" class="animate-fade-in">
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
              <div v-if="currentStep < 5" class="flex justify-between mt-8">
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
                  {{ currentStep === 4 ? 'Submit' : 'Next' }}
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
import { ref, computed } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';

// Form steps
const steps = ['Business Information', 'Business Details', 'Owner Information', 'Device Selection', 'Confirmation'];
const totalSteps = 5;
const currentStep = ref(1);
const isSubmitting = ref(false);

// Device selection
const selectedDevice = ref(null);
const selectedPaymentOption = ref(null);

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
});

// Step navigation
function nextStep() {
  if (validateCurrentStep()) {
    // If on device selection step, check if a device was selected
    if (currentStep.value === 4 && !selectedDevice.value) {
      deviceSelectionError.value = true;
      return;
    }
    
    currentStep.value++;
    window.scrollTo(0, 0);
    
    // If moving to last step, automatically submit
    if (currentStep.value === totalSteps) {
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
    currentStep.value = 5;
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
}

// Include these additions in your script
const deviceSelectionError = ref(false);
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
</style>
