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

                <!-- Featured product card -->
                <div class="bg-white rounded-lg shadow-xl border border-gray-200 overflow-hidden mb-8 hover:shadow-2xl transition-shadow duration-300">
                  <div class="grid grid-cols-1 md:grid-cols-7">
                    <!-- Product image (3 columns on md) -->
                    <div class="md:col-span-3 bg-gradient-to-br from-gray-50 to-gray-100 p-6 flex items-center justify-center">
                      <img src="@/../images/fourth.png" alt="Kwick 15 POS Bundle" class="h-64 object-contain">
                    </div>
                    
                    <!-- Product details (4 columns on md) -->
                    <div class="md:col-span-4 p-6 flex flex-col">
                      <div class="mb-2">
                        <span class="inline-block px-3 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">MOST POPULAR</span>
                      </div>
                      <h4 class="text-3xl font-bold text-gray-800 mb-4">Kwick 15" POS Bundle</h4>
                      
                      <div class="mb-6">
                        <div class="flex items-center mb-4">
                          <span class="text-4xl font-bold text-green-600">$0</span>
                          <span class="ml-2 text-gray-500 line-through">$1,388.00</span>
                          <span class="ml-2 bg-green-100 text-green-800 text-sm font-semibold px-2 py-1 rounded">100% OFF</span>
                        </div>
                        <p class="text-gray-600 mb-4">Complete POS solution with 15" touchscreen, receipt printer, and all accessories needed to run your business efficiently.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                          <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Easy Setup
                          </span>
                          <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            1-Year Warranty
                          </span>
                          <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            24/7 Support
                          </span>
                        </div>
                      </div>
                      
                      <div class="mt-auto">
                        <div class="flex flex-wrap gap-4">
                        <button 
                            @click="selectBundleAndProceed(featuredBundle, 'buy')"
                            class="flex-grow md:flex-grow-0 px-6 py-3 bg-red-600 text-white font-bold rounded-md hover:bg-red-700 transition-colors shadow-md"
                            :class="{'ring-2 ring-red-600 bg-red-700': selectedDevice === featuredBundle && selectedPaymentOption === 'buy'}"
                            type="button"
                          >
                            Select This Bundle
                        </button>
                          <button 
                            @click="togglePriceList"
                            class="flex-grow md:flex-grow-0 px-6 py-3 bg-white border-2 border-red-600 text-red-600 font-bold rounded-md hover:bg-red-50 transition-colors"
                            type="button"
                          >
                            View Pricelist
                          </button>
                      </div>
                    </div>
                  </div>
                      </div>
                          </div>
                
                <!-- Price list slide-down section -->
                <div 
                  class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden mb-8 transition-all duration-500 ease-in-out"
                  :class="showPriceList ? 'max-h-[2000px] opacity-100' : 'max-h-0 opacity-0 hidden'"
                >
                  <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                      <h3 class="text-2xl font-bold text-gray-800">Bundle Pricing</h3>
                      <button @click="togglePriceList" class="text-gray-500 hover:text-gray-700" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                        </div>
                    
                    <div class="overflow-hidden rounded-lg border border-gray-200 mb-6">
                      <table class="w-full text-left">
                        <thead class="bg-gray-50 border-b border-gray-200">
                          <tr>
                            <th class="px-4 py-3 text-sm font-semibold text-gray-700">Bundle</th>
                            <th class="px-4 py-3 text-sm font-semibold text-gray-700 text-right">Price</th>
                            <th class="px-4 py-3 text-sm font-semibold text-gray-700 text-center">Select</th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                          <tr v-for="(price, index) in bundlePrices" :key="index" class="hover:bg-gray-50">
                            <td class="px-4 py-4 text-sm text-gray-800 font-medium">{{ price.name }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 text-right">{{ price.price }}</td>
                            <td class="px-4 py-4 flex justify-center">
                          <button 
                                @click="selectBundleAndProceed(price.name, 'buy')"
                                class="px-4 py-1 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition-colors"
                                :class="{'ring-2 ring-red-500': selectedDevice === price.name && selectedPaymentOption === 'buy'}"
                                type="button"
                              >
                                Select
                          </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                  <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end">
                          <button 
                      @click="togglePriceList" 
                      class="px-6 py-2 bg-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-400 transition-colors"
                      type="button"
                    >
                      Cancel
                          </button>
                        </div>
                </div>
                
                <!-- Bundle card grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                  <!-- Bundle cards -->
                  <div v-for="(bundle, index) in bundleOptions.slice(0, 6)" :key="index"
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-200">
                    <div class="p-6">
                      <h5 class="text-lg font-bold text-gray-800 mb-3">{{ bundle.name }}</h5>
                      <div class="mb-4">
                        <div class="flex items-center">
                          <span class="text-2xl font-bold text-gray-800">Bundle</span>
                        </div>
                      </div>
                      <button 
                        @click="selectDevice(bundle.name, 'buy')"
                        class="w-full mt-2 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition-colors"
                        :class="{'ring-2 ring-blue-500 bg-blue-700': selectedDevice === bundle.name && selectedPaymentOption === 'buy'}"
                      >
                        Select
                      </button>
                      </div>
                    </div>
                  </div>

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
              </div>
              
              <!-- Step 5: System Configuration -->
              <div v-if="currentStep === 5" class="animate-fade-in">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">System Configuration</h3>
                
                <!-- Selected Product Display -->
                <div class="mb-8 bg-white rounded-lg overflow-hidden shadow-lg border border-gray-200">
                  <div class="bg-gradient-to-r from-green-600 to-green-500 px-6 py-3">
                    <h4 class="text-white font-bold text-lg">Your Selected Bundle</h4>
                  </div>
                  <div class="p-6">
                    <div class="flex flex-col md:flex-row items-start gap-6">
                      <!-- Product Image -->
                      <div class="w-full md:w-1/4 flex-shrink-0 flex justify-center">
                        <img src="@/../images/fourth.png" alt="Selected POS Bundle" class="h-32 object-contain">
                      </div>
                      
                      <!-- Product Details -->
                      <div class="flex-grow">
                        <div class="flex items-center mb-2">
                          <div class="flex-grow">
                            <h5 class="text-xl font-bold text-gray-800">{{ selectedDevice }}</h5>
                            <p class="text-gray-600 text-sm">{{ selectedPaymentOption === 'buy' ? 'Purchase' : 'Lease' }} Option</p>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="inline-block px-3 py-1 text-sm bg-green-100 text-green-800 font-semibold rounded-full">
                              0% Processing Fees
                            </span>
                          </div>
                        </div>
                        
                        <div class="mt-4 flex flex-wrap gap-3">
                          <div class="bg-gray-100 px-3 py-2 rounded-md">
                            <span class="text-xs text-gray-500 block">Bundle Price</span>
                            <span class="text-lg font-bold text-gray-900">{{ getBundlePrice(selectedDevice) }}</span>
                          </div>
                          
                          <div class="bg-gray-100 px-3 py-2 rounded-md">
                            <span class="text-xs text-gray-500 block">Est. Monthly Savings</span>
                            <span class="text-lg font-bold text-green-600">$350+</span>
                          </div>
                          
                          <div class="bg-gray-100 px-3 py-2 rounded-md">
                            <span class="text-xs text-gray-500 block">Setup Fee</span>
                            <span class="text-lg font-bold text-gray-900">$0</span>
                          </div>
                        </div>
                        
                        <div class="mt-4 pt-4 border-t border-gray-200">
                          <p class="text-gray-600">
                            You're just a few steps away from completing your application and saving on processing fees forever! Complete the configuration below to customize your system.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
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

                  <!-- Payment Method Section -->
                  <div class="mt-8">
                    <h4 class="text-xl font-bold text-gray-800 mb-4">Payment Method</h4>
                    
                    <!-- Display only Cash option for bundles under $1500 -->
                    <div v-if="bundlePriceValue <= 1500" class="bg-gray-50 border border-gray-200 rounded-lg p-5">
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
                    
                    <!-- Display 3 payment options for bundles over $1500 -->
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
                              <span class="text-gray-500 text-sm ml-2">{{ calculateDiscount(getBundlePrice(selectedDevice), 0.05) }}</span>
                      </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Option 2: 6-Month Financing -->
                      <div 
                        class="bg-white border rounded-lg p-5 cursor-pointer transition-all duration-200"
                        :class="form.payment_method === 'financing_6mo' ? 'border-green-500 shadow-md' : 'border-gray-200 hover:border-gray-300'"
                        @click="form.payment_method = 'financing_6mo'"
                      >
                        <div class="flex items-start">
                          <input 
                            type="radio" 
                            id="paymentFinancing6mo" 
                            value="financing_6mo" 
                            v-model="form.payment_method" 
                            class="w-5 h-5 mt-1 text-custom-red focus:ring-custom-red"
                          >
                          <div class="ml-3">
                            <label for="paymentFinancing6mo" class="block text-lg font-semibold text-gray-800 cursor-pointer">6-Month Financing</label>
                            <p class="text-gray-600 mb-2">Split your payment over 6 months with 0% interest.</p>
                            <div class="flex items-center">
                              <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Monthly Payment</span>
                              <span class="text-gray-500 text-sm ml-2">{{ calculateMonthlyPayment(getBundlePrice(selectedDevice), 6) }}/month for 6 months</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Option 3: 12-Month Financing -->
                      <div 
                        class="bg-white border rounded-lg p-5 cursor-pointer transition-all duration-200"
                        :class="form.payment_method === 'financing_12mo' ? 'border-green-500 shadow-md' : 'border-gray-200 hover:border-gray-300'"
                        @click="form.payment_method = 'financing_12mo'"
                      >
                        <div class="flex items-start">
                          <input 
                            type="radio" 
                            id="paymentFinancing12mo" 
                            value="financing_12mo" 
                            v-model="form.payment_method" 
                            class="w-5 h-5 mt-1 text-custom-red focus:ring-custom-red"
                          >
                          <div class="ml-3">
                            <label for="paymentFinancing12mo" class="block text-lg font-semibold text-gray-800 cursor-pointer">12-Month Financing</label>
                            <p class="text-gray-600 mb-2">Spread your payment over 12 months with our lowest monthly payments.</p>
                            <div class="flex items-center">
                              <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Monthly Payment</span>
                              <span class="text-gray-500 text-sm ml-2">{{ calculateMonthlyPayment(getBundlePrice(selectedDevice), 12) }}/month for 12 months</span>
                            </div>
                          </div>
                        </div>
                      </div>
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
              
              <!-- Step 6: Optional Restaurant Profile (Conversational) -->
              <div v-if="currentStep === 6" class="animate-fade-in">
                <div class="bg-white rounded-lg shadow-lg mb-8 overflow-hidden">
                  <div class="bg-gradient-to-r from-blue-600 to-blue-500 px-6 py-4">
                    <div class="flex justify-between items-center">
                      <h3 class="text-2xl font-bold text-white">Restaurant Profile <span class="text-sm bg-yellow-300 text-blue-800 px-2 py-1 rounded ml-2">Optional</span></h3>
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
                      We'd love to learn more about your restaurant to help us customize your POS system perfectly. 
                      These questions are optional but will help us better understand your needs.
                    </p>
                    
                    <!-- Conversational Question Tree -->
                    <div class="space-y-8">
                      <!-- Question 1 -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What hardware components do you need?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                          <div 
                            v-for="component in hardwareComponents" 
                            :key="component.name"
                            @click="toggleHardwareComponent(component.name)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.selected_hardware.includes(component.name) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.selected_hardware.includes(component.name) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.selected_hardware.includes(component.name)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="flex-grow">
                              <div class="font-medium">{{ component.name }}</div>
                              <div class="text-sm text-gray-500">{{ component.description }}</div>
                            </div>
                            <div class="flex-shrink-0 text-gray-700 font-medium">
                              {{ component.quantity }}
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 2 - Marketing Tools -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What marketing tools would you like to include?</h4>
                        <p class="text-gray-600 mb-4">Select all that apply</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                          <div 
                            v-for="tool in marketingTools" 
                            :key="tool.name"
                            @click="toggleMarketingTool(tool.name)"
                            class="border rounded-lg px-4 py-3 cursor-pointer transition-all flex items-center"
                            :class="form.selected_marketing_tools.includes(tool.name) ? 'bg-blue-50 border-blue-400 shadow-sm' : 'border-gray-200 hover:border-gray-300'"
                          >
                            <div class="w-5 h-5 rounded border mr-3 flex items-center justify-center"
                              :class="form.selected_marketing_tools.includes(tool.name) ? 'bg-blue-500 border-blue-500' : 'border-gray-400'"
                            >
                              <svg v-if="form.selected_marketing_tools.includes(tool.name)" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </div>
                            <div class="flex-grow">
                              <div class="font-medium">{{ tool.name }}</div>
                              <div class="text-sm text-gray-500">{{ tool.description }}</div>
                            </div>
                            <div class="flex-shrink-0 text-gray-700 font-medium">
                              {{ tool.quantity }}
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 3 - Setup Services -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">What setup services do you need?</h4>
                        <p class="text-gray-600 mb-4">All services included in the Value Hardware Bundle</p>
                        <div class="bg-gray-50 rounded-lg border border-gray-200 p-5">
                          <div class="space-y-3">
                            <div v-for="service in setupServices" :key="service" class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                              </svg>
                              <span class="text-gray-700">{{ service }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Question 4 - Warranty Information -->
                      <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-3">Warranty Information</h4>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-5">
                          <p class="text-blue-800">
                            <span class="font-medium">Hardware Warranty:</span> 2nd day replacement for Front of House equipment and Server Replacement next business day in most cases.
                          </p>
                        </div>
                      </div>
                      
                      <!-- Value Bundle Special Offer -->
                      <div class="bg-gradient-to-r from-red-100 to-yellow-50 rounded-lg border border-yellow-200 p-5">
                        <div class="flex flex-col md:flex-row items-start md:items-center">
                          <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-4">
                            <div class="bg-yellow-400 transform -rotate-12 px-3 py-1 text-lg font-bold uppercase tracking-wide text-red-900 inline-block">
                              Open Box Deal
                            </div>
                          </div>
                          <div class="flex-grow">
                            <h3 class="text-xl font-bold text-red-800 mb-1">Value Hardware Bundle</h3>
                            <div class="flex items-baseline mb-2">
                              <span class="text-2xl font-bold text-gray-900">$999.00</span>
                              <span class="ml-2 text-red-600 line-through text-lg">$2,388.00</span>
                              <span class="ml-2 text-gray-500">or $49/Month</span>
                            </div>
                            <p class="text-gray-700">
                              Complete POS solution with all the hardware and marketing tools you need to get started.
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
                    </div>
                  </div>
                </div>
                
                <!-- Recommendation based on answers - Shows only if all questions are answered -->
                <div v-if="form.tech_comfort" class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border border-blue-100 p-6 mb-8">
                  <h4 class="text-xl font-bold text-blue-800 mb-3">Our Recommendation</h4>
                  <p class="text-gray-700 mb-4">
                    Based on your answers, we recommend the <span class="font-semibold">{{ getRecommendedSetup() }}</span> 
                    for your {{ form.restaurant_type }} restaurant.
                  </p>
                  <div class="bg-white rounded-lg p-4 shadow-sm">
                    <p class="text-sm text-gray-600">
                      This setup includes {{ getRecommendationDetails() }}
                    </p>
                  </div>
                </div>
              </div>
              
              <!-- Step 7: Confirmation (updated from step 6) -->
              <div v-if="currentStep === 7" class="animate-fade-in">
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
              <div v-if="currentStep < 7" class="flex justify-between mt-8">
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
                  {{ currentStep === 6 ? 'Continue' : 'Next' }}
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
const steps = [
  'Business Information',
  'Business Details', 
  'Owner Information', 
  'Device Selection', 
  'System Configuration',
  'Restaurant Profile', 
  'Confirmation'
];
const totalSteps = 7;
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
  additional_notes: '',
  selected_hardware: [],
  selected_marketing_tools: [],
  selected_value_bundle: false,
  
  // New conversational fields
  payment_challenges: [],
  has_loyalty_program: '',
  busy_times: [],
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
    
    // Only automatically submit if moving from step 6 to step 7 (which doesn't exist, so we submit instead)
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
    currentStep.value = 7;
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

// Add new data for device selection components in script section
const showPriceList = ref(false);
const featuredBundle = 'Kwick 15" POS Bundle';

const bundlePrices = [
  { name: "1 Bundle", price: "$1,388.00" },
  { name: "2 Bundles", price: "$2,776.00" },
  { name: "3 Bundles", price: "$4,164.00" },
  { name: "4 Bundles", price: "$5,552.00" },
  { name: "5 Bundles", price: "$6,940.00" },
  { name: "6 Bundles", price: "$8,328.00" },
  { name: "7 Bundles", price: "$9,716.00" },
  { name: "8 Bundles", price: "$11,104.00" },
  { name: "9 Bundles", price: "$12,492.00" },
  { name: "10 Bundles", price: "$13,880.00" },
  { name: "11 Bundles", price: "$15,268.00" },
  { name: "12 Bundles", price: "$16,656.00" },
  { name: "13 Bundles", price: "$18,044.00" },
  { name: "14 Bundles", price: "$19,432.00" },
  { name: "15 Bundles", price: "$20,820.00" },
  { name: "16 Bundles", price: "$22,208.00" },
  { name: "17 Bundles", price: "$23,596.00" },
  { name: "18 Bundles", price: "$24,984.00" },
  { name: "19 Bundles", price: "$26,372.00" },
  { name: "20 Bundles", price: "$27,760.00" }
];

const bundleOptions = [
  { name: "Kwick 15\" Server Bundle" },
  { name: "Kwick Customer Display POS Bundle" },
  { name: "Kwick iPad Bundle" },
  { name: "Kwick 21\" Large Kiosk Bundle" },
  { name: "Handheld - A920 (Financing Only)" },
  { name: "ACT 15\" POS Station" },
  { name: "MINT 10\" POS Station w/ Built-in Printer" },
  { name: "MagTek Payment Device DynaFlex II Go" },
  { name: "Food Truck / Mobile Vendor Hardware Setup" },
  { name: "Innovative QR Bundle" },
  { name: "3rd Party Platform Integration (After 3-month trial)" }
];

// Toggle price list modal
function togglePriceList() {
  showPriceList.value = !showPriceList.value;
}

// Add new function to select a bundle and immediately proceed to the next step
function selectBundleAndProceed(device, paymentOption) {
  // First set the device
  selectDevice(device, paymentOption);
  
  // Then proceed to the next step (System Configuration)
  currentStep.value = 5;
  
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

// Add function to get bundle price based on selected device
function getBundlePrice(device) {
  if (!device) return '$0.00';
  
  // First, check the bundlePrices array for exact matches
  const bundleMatch = bundlePrices.find(b => b.name === device);
  if (bundleMatch) return bundleMatch.price;
  
  // For featured bundle, return the price of 1 Bundle
  if (device === featuredBundle) return '$1,388.00';
  
  // For other bundles, return a default price
  return '$1,388.00';
}

// Add computed property for bundle price value (numeric)
const bundlePriceValue = computed(() => {
  const priceString = getBundlePrice(selectedDevice.value);
  // Extract numeric value from price string (e.g., "$1,388.00" -> 1388)
  const numericValue = parseFloat(priceString.replace(/[^0-9.]/g, ''));
  return numericValue || 0;
});

// Helper function to calculate discount
function calculateDiscount(priceString, discountRate) {
  const price = parseFloat(priceString.replace(/[^0-9.]/g, ''));
  if (isNaN(price)) return '$0.00';
  
  const discountAmount = price * discountRate;
  return `Save $${discountAmount.toFixed(2)}`;
}

// Helper function to calculate monthly payment
function calculateMonthlyPayment(priceString, months) {
  const price = parseFloat(priceString.replace(/[^0-9.]/g, ''));
  if (isNaN(price) || months <= 0) return '$0.00';
  
  const monthlyPayment = price / months;
  return `$${monthlyPayment.toFixed(2)}`;
}

// Add new data for the Restaurant Profile step (conversational questions)
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

const salesVolumes = [
  'Less than $5,000',
  '$5,000 - $10,000',
  '$10,001 - $25,000',
  '$25,001 - $50,000',
  'More than $50,000'
];

const techComfortLevels = [
  'Beginner - We need a simple system',
  'Intermediate - We can learn new systems',
  'Advanced - We\'re tech-savvy and want the latest features'
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
  if (form.value.important_features.includes(feature)) {
    form.value.important_features = form.value.important_features.filter(f => f !== feature);
  } else {
    form.value.important_features.push(feature);
  }
}

// Function to get tech comfort level description
function getTechComfortDescription(level) {
  switch(level) {
    case 'Beginner - We need a simple system':
      return 'Our staff needs minimal training and intuitive interfaces';
    case 'Intermediate - We can learn new systems':
      return 'We can adapt to new technology with some training';
    case 'Advanced - We\'re tech-savvy and want the latest features':
      return 'We quickly embrace new technology and want cutting-edge features';
    default:
      return '';
  }
}

// Function to skip to confirmation step
function skipToConfirmation() {
  currentStep.value = 7;
  window.scrollTo(0, 0);
}

// Function to get recommended setup based on answers
function getRecommendedSetup() {
  if (form.value.selected_value_bundle) {
    return 'Value Hardware Bundle ($999.00)';
  }
  
  if (form.value.selected_hardware.length > 0 || form.value.selected_marketing_tools.length > 0) {
    return 'Custom Hardware Package';
  }
  
  return 'Standard POS Setup';
}

// Function to get recommendation details
function getRecommendationDetails() {
  if (form.value.selected_value_bundle) {
    return 'all hardware components, marketing tools, professional installation, and comprehensive training with our special Open Box Deal pricing';
  }
  
  let details = '';
  
  if (form.value.selected_hardware.length > 0) {
    details += form.value.selected_hardware.join(', ');
  }
  
  if (form.value.selected_marketing_tools.length > 0) {
    if (details) details += ', plus ';
    details += form.value.selected_marketing_tools.join(', ');
  }
  
  return details || 'standard POS components';
}

// Add new data arrays based on the image
const hardwareComponents = [
  { name: 'High-Performance Local PC Server', description: 'Central server for your POS system', quantity: '1' },
  { name: 'Network Switch', description: 'Connect all your POS devices', quantity: '1' },
  { name: 'High-Speed Ethernet Cable', description: 'For reliable connectivity', quantity: 'Several' },
  { name: '15" All-in-One POS Station', description: 'Touchscreen POS terminal', quantity: '1' },
  { name: 'Thermal Receipt Printer', description: 'For customer receipts', quantity: '1' },
  { name: 'Credit Card Pinpad', description: 'For secure payment processing', quantity: '1' }
];

const marketingTools = [
  { name: 'Table Ordering QR Code', description: 'Allow customers to order directly from their table', quantity: '5' },
  { name: 'Online Ordering QR Code', description: 'Enable online ordering with custom QR code', quantity: '1' },
  { name: 'Customer Review QR Code', description: 'Encourage customers to leave reviews', quantity: '2' },
  { name: 'Employee Access Card', description: 'Secure login for staff members', quantity: '2' },
  { name: 'Generic Gift Card', description: 'Customizable gift cards for your business', quantity: '2' }
];

const setupServices = [
  'Professional Installation',
  'Menu Programming',
  'Comprehensive Training for Staff and Management',
  'End-to-End Project Management for Successful Implementation'
];

// Function to toggle hardware component selection
function toggleHardwareComponent(component) {
  if (form.value.selected_hardware.includes(component)) {
    form.value.selected_hardware = form.value.selected_hardware.filter(c => c !== component);
  } else {
    form.value.selected_hardware.push(component);
  }
}

// Function to toggle marketing tool selection
function toggleMarketingTool(tool) {
  if (form.value.selected_marketing_tools.includes(tool)) {
    form.value.selected_marketing_tools = form.value.selected_marketing_tools.filter(t => t !== tool);
  } else {
    form.value.selected_marketing_tools.push(tool);
  }
}

// Function to select the value bundle
function selectValueBundle() {
  form.value.selected_value_bundle = true;
  
  // Auto-select all hardware components and marketing tools
  form.value.selected_hardware = hardwareComponents.map(c => c.name);
  form.value.selected_marketing_tools = marketingTools.map(t => t.name);
  
  // Display confirmation message
  alert('Value Hardware Bundle selected! All components have been added to your package.');
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
