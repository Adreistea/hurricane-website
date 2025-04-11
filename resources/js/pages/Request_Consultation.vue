<template>
  <MainLayout>
    <div class="py-16">
      <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
          <!-- Heading -->
          <div class="text-center mb-12">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="color: #973131;">
              Request a Consultation
            </h1>
            <p class="text-lg text-gray-600 mb-8">
              Fill out the form below and one of our payment experts will contact you shortly.
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
                  class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors duration-300"
                  :class="currentStep >= index + 1 ? 'bg-custom-red text-white' : 'bg-gray-200 text-gray-600'"
                >
                  {{ index + 1 }}
                </div>
                <div 
                  v-if="index < steps.length - 1" 
                  class="w-20 h-1 mx-2"
                  :class="currentStep > index + 1 ? 'bg-custom-red' : 'bg-gray-200'"
                ></div>
              </div>
            </div>
          </div>
          
          <!-- Consultation Form -->
          <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            <form @submit.prevent="submitForm">
              <!-- Step 1: Contact Information -->
              <div v-if="currentStep === 1">
                <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                  <div>
                    <label for="fullName" class="block text-gray-700 font-medium mb-2">Full Name *</label>
                    <input 
                      type="text" 
                      id="fullName" 
                      v-model="form.full_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                  
                  <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                    <input 
                      type="email" 
                      id="email" 
                      v-model="form.email" 
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
                    <label for="businessName" class="block text-gray-700 font-medium mb-2">Business Name *</label>
                    <input 
                      type="text" 
                      id="businessName" 
                      v-model="form.business_name" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                  </div>
                </div>
              </div>
              
              <!-- Step 2: Business Details -->
              <div v-if="currentStep === 2">
                <h3 class="text-2xl font-bold mb-6">Business Details</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                  <div>
                    <label for="industryType" class="block text-gray-700 font-medium mb-2">Industry Type *</label>
                    <select 
                      id="industryType" 
                      v-model="form.industry_type" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      required
                    >
                      <option value="" disabled selected>Select an industry</option>
                      <option value="retail">Retail</option>
                      <option value="restaurant">Restaurant</option>
                      <option value="ecommerce">E-Commerce</option>
                      <option value="service">Professional Services</option>
                      <option value="healthcare">Healthcare</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  
                  <div>
                    <label for="numLocations" class="block text-gray-700 font-medium mb-2">Number of Locations</label>
                    <div class="relative">
                      <input 
                        type="number" 
                        id="numLocations" 
                        v-model="form.num_locations" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        min="1"
                        list="locationsOptions"
                      >
                      <datalist id="locationsOptions">
                        <option v-for="n in 100" :key="`location-${n}`" :value="n">{{ n }}</option>
                      </datalist>
                    </div>
                  </div>
                  
                  <div>
                    <label for="numTerminals" class="block text-gray-700 font-medium mb-2">Number of Terminals</label>
                    <div class="relative">
                      <input 
                        type="number" 
                        id="numTerminals" 
                        v-model="form.num_terminals" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        min="0"
                        list="terminalsOptions"
                      >
                      <datalist id="terminalsOptions">
                        <option v-for="n in 100" :key="`terminal-${n}`" :value="n">{{ n }}</option>
                      </datalist>
                    </div>
                  </div>
                  
                  <div>
                    <label for="processingVolume" class="block text-gray-700 font-medium mb-2">Monthly Processing Volume</label>
                    <select 
                      id="processingVolume" 
                      v-model="form.processing_volume" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                    >
                      <option value="" disabled selected>Select volume range</option>
                      <option value="under_10k">Under $10,000</option>
                      <option value="10k_50k">$10,000 - $50,000</option>
                      <option value="50k_100k">$50,000 - $100,000</option>
                      <option value="100k_500k">$100,000 - $500,000</option>
                      <option value="over_500k">Over $500,000</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <!-- Step 3: Scheduling Preferences -->
              <div v-if="currentStep === 3">
                <h3 class="text-2xl font-bold mb-6">Scheduling Preferences</h3>
                
                <div class="mb-6">
                  <label for="preferredDate" class="block text-gray-700 font-medium mb-2">Preferred Date *</label>
                  <div class="flex justify-center">
                    <div class="calendar-container rounded-lg shadow-md overflow-hidden max-w-md w-full border border-gray-300">
                      <v-date-picker 
                        v-model="form.preferred_date"
                        :min-date="new Date()"
                        mode="date"
                        color="#982B1C"
                        :masks="masks"
                        is-expanded
                      />
                    </div>
                  </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                  <div>
                    <label class="block text-gray-700 font-medium mb-2">Start Time *</label>
                    <div class="flex space-x-2">
                      <select 
                        v-model="form.start_hour" 
                        class="w-1/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>Hour</option>
                        <option v-for="n in 12" :key="`start-hour-${n}`" :value="n < 10 ? '0' + n : String(n)">
                          {{ n < 10 ? '0' + n : n }}
                        </option>
                      </select>
                      
                      <select 
                        v-model="form.start_minute" 
                        class="w-1/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>Minute</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                      </select>
                      
                      <select 
                        v-model="form.start_period" 
                        class="w-1/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>AM/PM</option>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                  </div>
                  
                  <div>
                    <label class="block text-gray-700 font-medium mb-2">End Time *</label>
                    <div class="flex space-x-2">
                      <select 
                        v-model="form.end_hour" 
                        class="w-1/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>Hour</option>
                        <option v-for="n in 12" :key="`end-hour-${n}`" :value="n < 10 ? '0' + n : String(n)">
                          {{ n < 10 ? '0' + n : n }}
                        </option>
                      </select>
                      
                      <select 
                        v-model="form.end_minute" 
                        class="w-1/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>Minute</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                      </select>
                      
                      <select 
                        v-model="form.end_period" 
                        class="w-1/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                        required
                      >
                        <option value="" disabled selected>AM/PM</option>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="mb-8">
                  <label for="timeZone" class="block text-gray-700 font-medium mb-2">Time Zone *</label>
                  <select 
                    id="timeZone" 
                    v-model="form.time_zone" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                    required
                  >
                    <option value="" disabled selected>Select time zone</option>
                    <option value="ET">Eastern Time (ET)</option>
                    <option value="CT">Central Time (CT)</option>
                    <option value="MT">Mountain Time (MT)</option>
                    <option value="PT">Pacific Time (PT)</option>
                    <option value="AKT">Alaska Time (AKT)</option>
                    <option value="HT">Hawaii Time (HT)</option>
                  </select>
                </div>
              </div>
              
              <!-- Step 4: Goals and Comments -->
              <div v-if="currentStep === 4">
                <h3 class="text-2xl font-bold mb-6">Business Goals</h3>
                
                <div class="mb-8">
                  <p class="text-gray-700 font-medium mb-3">What are you looking to accomplish? (Select all that apply)</p>
                  
                  <div class="space-y-3">
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalFeeElimination" 
                        v-model="form.goal_fee_elimination" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalFeeElimination" class="ml-3 text-gray-700">Eliminate Processing Fees</label>
                    </div>
                    
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalPOS" 
                        v-model="form.goal_pos" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalPOS" class="ml-3 text-gray-700">Point of Sale Solution</label>
                    </div>
                    
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalMobile" 
                        v-model="form.goal_mobile" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalMobile" class="ml-3 text-gray-700">Mobile Payment Solution</label>
                    </div>
                    
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalEcommerce" 
                        v-model="form.goal_ecommerce" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalEcommerce" class="ml-3 text-gray-700">E-Commerce Solution</label>
                    </div>
                    
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalIntegration" 
                        v-model="form.goal_integration" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalIntegration" class="ml-3 text-gray-700">Integration with Existing Software</label>
                    </div>
                    
                    <div v-if="form.goal_integration" class="ml-8 mt-2">
                      <label for="integrationSoftware" class="block text-gray-700 font-medium mb-2">Software/Platform Name</label>
                      <input 
                        type="text" 
                        id="integrationSoftware" 
                        v-model="form.integration_software" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      >
                    </div>
                    
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalFunding" 
                        v-model="form.goal_funding" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalFunding" class="ml-3 text-gray-700">Business Funding</label>
                    </div>
                    
                    <div class="flex items-center">
                      <input 
                        type="checkbox" 
                        id="goalOther" 
                        v-model="form.goal_other" 
                        class="w-5 h-5 rounded text-custom-red focus:ring-custom-red"
                      >
                      <label for="goalOther" class="ml-3 text-gray-700">Other</label>
                    </div>
                    
                    <div v-if="form.goal_other" class="ml-8 mt-2">
                      <label for="otherGoalSpecification" class="block text-gray-700 font-medium mb-2">Please Specify</label>
                      <input 
                        type="text" 
                        id="otherGoalSpecification" 
                        v-model="form.other_goal_specification" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red" 
                      >
                    </div>
                  </div>
                </div>
                
                <div class="mb-8">
                  <label for="comments" class="block text-gray-700 font-medium mb-2">Additional Comments</label>
                  <textarea 
                    id="comments" 
                    v-model="form.comments" 
                    rows="4" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-custom-red"
                    placeholder="Any additional information that would help us prepare for our consultation..."
                  ></textarea>
                </div>
              </div>
              
              <!-- Navigation Buttons -->
              <div class="flex justify-between mt-8">
                <button 
                  v-if="currentStep > 1" 
                  type="button" 
                  @click="prevStep" 
                  class="px-6 py-2 border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-50 transition-colors duration-300"
                >
                  Previous
                </button>
                <div v-else></div>
                
                <div>
                  <button 
                    v-if="currentStep < steps.length" 
                    type="button" 
                    @click="nextStep" 
                    class="px-8 py-3 text-white font-medium rounded-md shadow-md hover:bg-red-800 transition-colors duration-300"
                    style="background-color: #982B1C;"
                  >
                    Next
                  </button>
                  <button 
                    v-else 
                    type="submit" 
                    class="px-8 py-3 text-white font-medium rounded-md shadow-md hover:bg-red-800 transition-colors duration-300"
                    style="background-color: #982B1C;"
                    :disabled="isSubmitting"
                  >
                    {{ isSubmitting ? 'Submitting...' : 'Submit Request' }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Thank You Modal -->
    <div 
      v-if="showThankYouModal" 
      class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center"
      @click="showThankYouModal = false"
    >
      <div 
        class="bg-white rounded-lg shadow-xl p-8 max-w-md w-full mx-4 transform transition-all"
        @click.stop
      >
        <div class="text-center">
          <!-- Celebration Icon with Animation -->
          <div class="mx-auto mb-6 relative">
            <div class="celebration-container">
              <!-- Party popper emoji with animation -->
              <div class="celebration-icon">🎉</div>
              <!-- Confetti elements -->
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
            </div>
          </div>
          
          <h3 class="text-2xl font-bold text-gray-800 mb-3">Thank You!</h3>
          <p class="text-gray-600 mb-6">
            We've received your request! We will contact you shortly to confirm your consultation time.
          </p>
          
          <button 
            @click="showThankYouModal = false" 
            class="px-6 py-2 bg-custom-red text-white font-medium rounded-md shadow-md hover:bg-red-800 transition-colors duration-300"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import { ref, computed } from 'vue';
import MainLayout from './MainLayout.vue';
import VCalendar from 'v-calendar';
import 'v-calendar/style.css';

const showThankYouModal = ref(false);

const steps = [
  'Contact Information',
  'Business Details',
  'Scheduling Preferences',
  'Goals and Comments'
];

const currentStep = ref(1);
const isSubmitting = ref(false);

const minDate = computed(() => {
  const today = new Date();
  today.setHours(0, 0, 0, 0);
  return today;
});

const themeStyles = {
  wrapper: {
    backgroundColor: 'white',
    border: '0',
    fontFamily: '"Inter", sans-serif',
    padding: '0.5rem'
  },
  header: {
    padding: '10px 0',
    backgroundColor: 'white'
  },
  title: {
    fontSize: '16px',
    fontWeight: '600',
    color: '#982B1C',
    textTransform: 'uppercase',
    letterSpacing: '1px'
  },
  weekdays: {
    color: '#4A5568',
    fontWeight: '600',
    padding: '8px 0',
    borderBottom: '1px solid #EDF2F7'
  },
  dayContent: {
    height: '38px',
    width: '38px',
    fontSize: '14px',
    fontWeight: '500',
    color: '#2D3748',
    borderRadius: '50%',
    transition: 'all 0.2s ease'
  },
  dayContentHover: {
    backgroundColor: 'rgba(152, 43, 28, 0.1)',
    color: '#982B1C'
  },
  dots: {
    backgroundColor: '#982B1C'
  }
};

const masks = {
  title: 'MMMM YYYY',
  weekdays: 'WWW',
  navMonths: 'MMM',
  input: ['YYYY-MM-DD', 'YYYY/MM/DD'],
  data: ['YYYY-MM-DD', 'YYYY/MM/DD']
};

// Form data matches your database migration
const form = ref({
  full_name: '',
  business_name: '',
  phone_number: '',
  email: '',
  
  industry_type: '',
  num_locations: null,
  num_terminals: null,
  processing_volume: '',
  
  preferred_date: '',
  start_hour: '',
  start_minute: '',
  start_period: '',
  end_hour: '',
  end_minute: '',
  end_period: '',
  time_zone: '',
  
  goal_fee_elimination: false,
  goal_pos: false,
  goal_mobile: false,
  goal_ecommerce: false,
  goal_integration: false,
  goal_funding: false,
  goal_other: false,
  other_goal_specification: '',
  integration_software: '',
  
  comments: '',
  
  // Status will be set by the server
  status: 'pending'
});

// Step navigation
function nextStep() {
  if (validateCurrentStep()) {
    currentStep.value++;
    window.scrollTo(0, 0);
  }
}

function prevStep() {
  currentStep.value--;
  window.scrollTo(0, 0);
}

// Validate current step before proceeding
function validateCurrentStep() {
  if (currentStep.value === 1) {
    // Validate Contact Information
    if (!form.value.full_name || !form.value.business_name || 
        !form.value.phone_number || !form.value.email) {
      alert('Please fill out all required fields');
      return false;
    }
    // Basic email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(form.value.email)) {
      alert('Please enter a valid email address');
      return false;
    }
  } else if (currentStep.value === 2) {
    // Validate Business Details
    if (!form.value.industry_type) {
      alert('Please select an industry type');
      return false;
    }
  } else if (currentStep.value === 3) {
    // Validate Scheduling
    if (!form.value.preferred_date || !form.value.start_hour || 
        !form.value.start_minute || !form.value.start_period || 
        !form.value.end_hour || !form.value.end_minute || 
        !form.value.end_period || !form.value.time_zone) {
      alert('Please fill out all required scheduling fields');
      return false;
    }
    
    // Validate start time before end time
    const startTime = `${form.value.start_hour}:${form.value.start_minute} ${form.value.start_period}`;
    const endTime = `${form.value.end_hour}:${form.value.end_minute} ${form.value.end_period}`;
    
    if (convertTo24Hour(startTime) >= convertTo24Hour(endTime)) {
      alert('End time must be after start time');
      return false;
    }
  }
  
  return true;
}

// Helper to convert 12-hour time to 24-hour for comparison
function convertTo24Hour(time12h) {
  const [time, modifier] = time12h.split(' ');
  let [hours, minutes] = time.split(':');
  
  if (hours === '12') {
    hours = '00';
  }
  
  if (modifier === 'PM') {
    hours = parseInt(hours, 10) + 12;
  }
  
  return `${hours}:${minutes}`;
}

// Form submission method
function submitForm() {
  if (!validateCurrentStep()) {
    return;
  }
  
  isSubmitting.value = true;
  
  // Create a copy of the form data to modify for submission
  const formData = { ...form.value };
  
  // Format the preferred_date field if it's a Date object
  if (formData.preferred_date instanceof Date) {
    // Format as YYYY-MM-DD for Laravel
    formData.preferred_date = formData.preferred_date.toISOString().split('T')[0];
  }
  
  // Send the form data to your Laravel backend
  fetch('/api/consultation-requests', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json'
    },
    body: JSON.stringify(formData)
  })
  .then(response => {
    if (!response.ok) {
      return response.json().then(data => {
        // Display the actual validation errors from the server
        if (data.errors) {
          const errorMessages = Object.values(data.errors).flat().join('\n');
          throw new Error(errorMessages);
        }
        throw new Error(data.message || 'Server error');
      });
    }
    return response.json();
  })
  .then(data => {
    isSubmitting.value = false;
    
    if (data.success) {
      // Show the thank you modal
      showThankYouModal.value = true;
      
      // Reset form and go back to step 1
      resetForm();
      currentStep.value = 1;
    } else {
      // Handle validation errors
      const errorMessages = Object.values(data.errors || {}).flat().join('\n');
      alert(`Please correct the following errors:\n${errorMessages}`);
    }
  })
  .catch(error => {
    console.error('Error submitting form:', error);
    isSubmitting.value = false;
    alert(error.message || 'An error occurred while submitting the form. Please try again later.');
  });
}

// Add a separate function to reset the form
function resetForm() {
  form.value = {
    full_name: '',
    business_name: '',
    phone_number: '',
    email: '',
    
    industry_type: '',
    num_locations: null,
    num_terminals: null,
    processing_volume: '',
    
    preferred_date: '',
    start_hour: '',
    start_minute: '',
    start_period: '',
    end_hour: '',
    end_minute: '',
    end_period: '',
    time_zone: '',
    
    goal_fee_elimination: false,
    goal_pos: false,
    goal_mobile: false,
    goal_ecommerce: false,
    goal_integration: false,
    goal_funding: false,
    goal_other: false,
    other_goal_specification: '',
    integration_software: '',
    
    comments: '',
    
    status: 'pending'
  };
}
</script>

<style scoped>
/* Custom color variables */
:root {
  --custom-red: #982B1C;
  --custom-red-dark: #7e2016;
}

.bg-custom-red {
  background-color: var(--custom-red);
}

.text-custom-red {
  color: var(--custom-red);
}

.focus\:ring-custom-red:focus {
  --tw-ring-color: var(--custom-red);
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
  accent-color: var(--custom-red);
}

/* Enhanced calendar styling with burgundy color theme */
.styled-calendar :deep(.vc-container) {
  --day-border: 1px solid #f0f0f0;
  --day-width: 42px;
  --day-height: 42px;
  --weekday-bg: #fff;
  --weekday-color: #718096;
  border: none;
  font-family: 'Inter', system-ui, sans-serif;
  box-shadow: 0 4px 6px rgba(152, 43, 28, 0.05);
}

.styled-calendar :deep(.vc-header) {
  padding: 12px 0;
  background-color: rgba(152, 43, 28, 0.03);
  border-bottom: 1px solid rgba(152, 43, 28, 0.1);
}

.styled-calendar :deep(.vc-title) {
  font-weight: 700;
  font-size: 16px;
  color: #982B1C;
  letter-spacing: 0.5px;
}

.styled-calendar :deep(.vc-weekday) {
  font-weight: 600;
  color: #982B1C;
  font-size: 13px;
  padding: 8px 0;
  background-color: rgba(152, 43, 28, 0.05);
}

.styled-calendar :deep(.vc-day) {
  border-radius: 0;
  width: var(--day-width);
  height: var(--day-height);
  text-align: center;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  margin: 1px;
}

.styled-calendar :deep(.vc-day-content) {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  font-weight: 500;
  margin: 0;
  color: #4a5568;
  transition: all 0.2s ease;
}

.styled-calendar :deep(.vc-highlight) {
  background-color: rgba(152, 43, 28, 0.1);
  border-radius: 0;
}

.styled-calendar :deep(.vc-day-content:hover) {
  background-color: rgba(152, 43, 28, 0.1);
  color: #4a5568 !important;
}

.styled-calendar :deep(.is-today .vc-day-content) {
  border: 2px solid #982B1C;
  color: #982B1C;
  font-weight: bold;
}

.styled-calendar :deep(.is-selected .vc-day-content) {
  background-color: rgba(152, 43, 28, 0.8);
  color: black !important;
  font-weight: bold;
  border: 2px solid #982B1C;
  box-shadow: none;
}

.styled-calendar :deep(.vc-nav-title) {
  color: #982B1C;
  font-weight: 600;
}

.styled-calendar :deep(.vc-nav-item:hover) {
  background-color: rgba(152, 43, 28, 0.1);
  color: #982B1C;
}

.styled-calendar :deep(.vc-nav-item.is-active) {
  background-color: #982B1C;
  color: white;
  font-weight: bold;
}

.styled-calendar :deep(.vc-arrow) {
  padding: 10px;
  border-radius: 50%;
  color: #982B1C;
  background-color: rgba(152, 43, 28, 0.05);
  margin: 0 8px;
  transition: all 0.2s ease;
}

.styled-calendar :deep(.vc-arrow:hover) {
  background-color: rgba(152, 43, 28, 0.15);
  transform: scale(1.1);
}

.styled-calendar :deep(.vc-day.is-not-in-month) {
  opacity: 0.3;
}

.styled-calendar :deep(.vc-pane) {
  padding: 8px 0;
}

.styled-calendar :deep(.vc-day.is-disabled) {
  opacity: 0.4;
}

.styled-calendar :deep(.vc-day.is-disabled .vc-day-content:hover) {
  background-color: transparent;
  color: #9ca3af;
  transform: none;
}

/* Add a subtle red background to the whole calendar */
.styled-calendar {
  background-color: rgba(152, 43, 28, 0.02);
  border-radius: 12px;
  overflow: hidden;
}

.custom-date-picker {
  max-width: 100%;
  box-shadow: 0 4px 16px rgba(0,0,0,0.05);
}

.custom-date-picker :deep(.vc-container) {
  --day-content-transition: all 0.2s ease;
  --day-content-height: 38px;
  --day-content-width: 38px;
  --day-content-font-size: 14px;
  --day-content-font-weight: 500;
  --day-selected-background-color: #982B1C;
  --day-selected-content-color: white;
  --day-selected-font-weight: 600;
  --weekday-text-transform: uppercase;
  --weekday-font-size: 12px;
  --header-padding: 20px 0;
  --arrow-color: #982B1C;
  --arrow-hover-background-color: rgba(152, 43, 28, 0.1);
  border: none;
}

.custom-date-picker :deep(.vc-week) {
  padding: 0 8px;
}

.custom-date-picker :deep(.vc-day) {
  margin: 2px;
  position: relative;
}

.custom-date-picker :deep(.vc-day.is-today .vc-day-content) {
  border: 2px solid #982B1C;
  font-weight: bold;
  color: #000000 !important;
  background-color: rgba(152, 43, 28, 0.1);
}

.custom-date-picker :deep(.vc-day.is-disabled) {
  opacity: 0.35;
}

.custom-date-picker :deep(.vc-arrow) {
  border-radius: 50%;
  padding: 8px;
  background-color: rgba(152, 43, 28, 0.05);
  margin: 0 4px;
}

.custom-date-picker :deep(.vc-arrow:hover) {
  background-color: rgba(152, 43, 28, 0.15);
  color: #982B1C;
}

.custom-date-picker :deep(.vc-day.is-selected .vc-day-content) {
  box-shadow: 0 2px 6px rgba(152, 43, 28, 0.4);
  transform: scale(1.1);
}

.custom-date-picker :deep(.vc-day-content:hover) {
  background-color: rgba(152, 43, 28, 0.08);
  transform: scale(1.05);
}

.custom-date-picker :deep(.vc-day.is-not-in-month) {
  opacity: 0.3;
}

.custom-date-picker :deep(.vc-nav-title) {
  font-weight: bold;
  color: #982B1C;
}

.custom-date-picker :deep(.vc-nav-item:hover) {
  background-color: rgba(152, 43, 28, 0.1);
  color: #982B1C;
}

.custom-date-picker :deep(.vc-nav-item.is-active) {
  background-color: #982B1C;
  color: white;
  font-weight: bold;
}

/* Calendar with significantly increased spacing between month and weekdays */
.calendar-container {
  background-color: white;
}

.calendar-container :deep(.vc-container) {
  border: none !important;
  width: 100%;
}

.calendar-container :deep(.vc-header) {
  padding: 12px 0 6px; /* Reduced bottom padding */
  text-align: center;
  margin-bottom: 25px !important; /* Dramatically increased margin */
  border-bottom: none; /* Remove bottom border */
  position: relative;
}

/* Add a visual separator with spacing */
.calendar-container :deep(.vc-header::after) {
  content: '';
  position: absolute;
  bottom: -15px;
  left: 15%;
  right: 15%;
  height: 1px;
  background-color: #f0f0f0;
}

.calendar-container :deep(.vc-title) {
  font-weight: 600;
  color: #982B1C;
  font-size: 16px;
  text-transform: capitalize;
  padding: 5px 0;
  margin-bottom: 0; /* Remove bottom margin from title */
}

.calendar-container :deep(.vc-weeks) {
  padding: 0 8px 12px;
}

.calendar-container :deep(.vc-weekdays) {
  margin-top: 0; /* Reset top margin */
  margin-bottom: 12px; /* Keep good spacing below weekdays */
  padding-bottom: 8px;
  border-bottom: 1px solid #f8f8f8;
}

.calendar-container :deep(.vc-weekday) {
  color: #718096;
  font-weight: 600;
  font-size: 12px;
  padding: 5px 0;
}

.calendar-container :deep(.vc-weeks .vc-week) {
  padding: 3px 0;
}

.calendar-container :deep(.vc-day-content) {
  height: 34px;
  width: 34px;
  font-size: 14px;
  font-weight: 500;
  margin: 3px 0;
}

.calendar-container :deep(.is-today) {
  font-weight: bold;
}

.calendar-container :deep(.is-today .vc-day-content) {
  border: 2px solid #982B1C;
  color: #000000 !important;
  font-weight: bold;
  background-color: rgba(152, 43, 28, 0.1);
}

.calendar-container :deep(.is-selected .vc-day-content) {
  background-color: rgba(152, 43, 28, 0.8);
  color: black !important;
  font-weight: bold;
  border: 2px solid #982B1C;
  box-shadow: none;
}

.calendar-container :deep(.vc-arrow) {
  color: #982B1C;
  margin: 0 12px;
}

.calendar-container :deep(.vc-day.is-not-in-month) {
  opacity: 0.3;
}

/* Fixed steps indicator styles */
.flex .w-10.h-10.rounded-full {
  transition: background-color 0.3s ease, color 0.3s ease;
}

.bg-custom-red.text-white {
  background-color: #982B1C !important;
  color: white !important; 
}

.bg-gray-200.text-gray-600 {
  background-color: #e5e7eb !important;
  color: #4b5563 !important;
}

/* Ensure active step is properly colored */
.bg-custom-red {
  background-color: #982B1C !important;
}

.text-white {
  color: white !important;
}

/* Ensure inactive steps are properly colored */
.bg-gray-200 {
  background-color: #e5e7eb !important;
}

.text-gray-600 {
  color: #4b5563 !important;
}

/* Fix for selected dates in calendar - prevent white text */
.calendar-container :deep(.vc-day-content.vc-highlight-content-solid) {
  color: black !important;
  font-weight: bold !important;
  background-color: rgba(152, 43, 28, 0.6) !important;
}

.calendar-container :deep(.vc-day-content.vc-focus) {
  color: black !important;
  font-weight: bold !important;
}

/* Force text to remain black on all interactions */
.calendar-container :deep(.vc-highlight-content-solid), 
.calendar-container :deep(.vc-day-content.vc-attr),
.calendar-container :deep(.vc-focus) {
  color: black !important;
}

/* Add border to make selection clear without relying on text color */
.calendar-container :deep(.vc-day-content.vc-highlight-content-solid) {
  border: 2px solid #731a1a !important;
}


.calendar-container :deep(.vc-day-content.vc-attr),
.calendar-container :deep(.vc-focus) {
  color: black !important;
}

/* Add border to make selection clear without relying on text color */
.calendar-container :deep(.vc-day-content.vc-highlight-content-solid) {
  border: 2px solid #731a1a !important;
}

/* Replace existing Thank You Modal Animation Styles with this */
.celebration-container {
  position: relative;
  width: 120px;
  height: 120px;
  margin: 0 auto;
}

.celebration-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 60px;
  animation: bounceIcon 1.5s ease-in-out infinite;
  z-index: 5;
  text-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

@keyframes bounceIcon {
  0%, 100% {
    transform: translate(-50%, -50%) scale(1);
  }
  50% {
    transform: translate(-50%, -50%) scale(1.2);
  }
}

.confetti-piece {
  position: absolute;
  width: 10px;
  height: 20px;
  background-color: #982B1C;
  top: 50%;
  left: 50%;
  opacity: 0;
}

.confetti-piece:nth-child(1) {
  background-color: #973131;
  animation: confetti 3s ease-in-out infinite;
  animation-delay: 0s;
}

.confetti-piece:nth-child(2) {
  background-color: #FFC857;
  animation: confetti 3s ease-in-out infinite;
  animation-delay: 0.3s;
}

.confetti-piece:nth-child(3) {
  background-color: #FF5A5F;
  animation: confetti 3s ease-in-out infinite;
  animation-delay: 0.6s;
}

.confetti-piece:nth-child(4) {
  background-color: #973131;
  animation: confetti-reverse 3s ease-in-out infinite;
  animation-delay: 0.9s;
}

.confetti-piece:nth-child(5) {
  background-color: #B8D8D8;
  animation: confetti 3s ease-in-out infinite;
  animation-delay: 1.2s;
}

.confetti-piece:nth-child(6) {
  background-color: #FF5A5F;
  animation: confetti-reverse 3s ease-in-out infinite;
  animation-delay: 1.5s;
}

.confetti-piece:nth-child(7) {
  background-color: #FFC857;
  animation: confetti 3s ease-in-out infinite;
  animation-delay: 1.8s;
}

.confetti-piece:nth-child(8) {
  background-color: #973131;
  animation: confetti-reverse 3s ease-in-out infinite;
  animation-delay: 2.1s;
}

.confetti-piece:nth-child(9) {
  background-color: #B8D8D8;
  animation: confetti 3s ease-in-out infinite;
  animation-delay: 2.4s;
}

.confetti-piece:nth-child(10) {
  background-color: #FFC857;
  animation: confetti-reverse 3s ease-in-out infinite;
  animation-delay: 2.7s;
}

@keyframes confetti {
  0% {
    transform: translate(-50%, -50%) rotate(0deg) translateX(0) translateY(0);
    opacity: 1;
    width: 10px;
    height: 10px;
  }
  100% {
    transform: translate(-50%, -50%) rotate(360deg) translateX(100px) translateY(100px);
    opacity: 0;
    width: 5px;
    height: 5px;
  }
}

@keyframes confetti-reverse {
  0% {
    transform: translate(-50%, -50%) rotate(0deg) translateX(0) translateY(0);
    opacity: 1;
    width: 10px;
    height: 10px;
  }
  100% {
    transform: translate(-50%, -50%) rotate(-360deg) translateX(-100px) translateY(100px);
    opacity: 0;
    width: 5px;
    height: 5px;
  }
}

/* Keep modal animations */
.fixed.inset-0 {
  animation: modalBackdrop 0.3s ease-out forwards;
}

@keyframes modalBackdrop {
  from {
    background-color: rgba(0, 0, 0, 0);
  }
  to {
    background-color: rgba(0, 0, 0, 0.5);
  }
}

.transform.transition-all {
  animation: modalPopIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
}

@keyframes modalPopIn {
  0% {
    opacity: 0;
    transform: scale(0.9) translateY(20px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0);
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
