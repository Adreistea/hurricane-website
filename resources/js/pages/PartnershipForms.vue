<template>
  <MainLayout>
    <!-- Hero Section -->
    <div class="py-20 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
      <div class="container mx-auto px-6">
        <div class="max-w-3xl">
          <h1 class="text-5xl font-bold mb-6">Partnership Inquiries</h1>
          <p class="text-xl mb-8">Select the type of partnership you're interested in and complete the form to get started with Hurricane Payments.</p>
        </div>
      </div>
    </div>
    
    <div class="py-10 bg-gray-50">
      <div class="container mx-auto px-6">
        <!-- Partnership Type Selection Buttons -->
        <div class="partnership-types-container mb-12">
          <h2 class="text-3xl font-bold text-center mb-8">Partnership Types</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <button 
              @click="selectPartnershipType('reseller')" 
              :class="['partnership-option', form.partnershipType === 'reseller' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1z" />
                </svg>
              </span>
              <span class="title">Reseller</span>
              <span class="description">Sell our payment solutions under your brand</span>
            </button>
            
            <button 
              @click="selectPartnershipType('referral')" 
              :class="['partnership-option', form.partnershipType === 'referral' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M20 16l-5.5-5.5 1.5-1.5 4 4 4-4 1.5 1.5L20 16zm-13.5-7c1.38 0 2.5-1.12 2.5-2.5S7.88 4 6.5 4 4 5.12 4 6.5 5.12 9 6.5 9zM6.5 5c.83 0 1.5.67 1.5 1.5S7.33 8 6.5 8 5 7.33 5 6.5 5.67 5 6.5 5zm11 7c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm0 4c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                </svg>
              </span>
              <span class="title">Referral Partner</span>
              <span class="description">Refer clients and earn commissions</span>
            </button>
            
            <button 
              @click="selectPartnershipType('integration')" 
              :class="['partnership-option', form.partnershipType === 'integration' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M19.5 5.5h-15c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2zm-7 13h-2v-9h2v9z" />
                </svg>
              </span>
              <span class="title">Technology Integration</span>
              <span class="description">Integrate our payment solutions with your technology</span>
            </button>
            
            <button 
              @click="selectPartnershipType('iso')" 
              :class="['partnership-option', form.partnershipType === 'iso' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" />
                </svg>
              </span>
              <span class="title">Independent Sales Organization (ISO)</span>
              <span class="description">Partner with us as an ISO</span>
            </button>
            
            <button 
              @click="selectPartnershipType('agency')" 
              :class="['partnership-option', form.partnershipType === 'agency' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                </svg>
              </span>
              <span class="title">Agency Partnership</span>
              <span class="description">Strategic partnership for agencies</span>
            </button>
            
            <button 
              @click="selectPartnershipType('bank')" 
              :class="['partnership-option', form.partnershipType === 'bank' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z" />
                </svg>
              </span>
              <span class="title">Bank Partner</span>
              <span class="description">Financial institution partnerships</span>
            </button>
            
            <button 
              @click="selectPartnershipType('other')" 
              :class="['partnership-option', form.partnershipType === 'other' ? 'active' : '']"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-11h2v6h-2zm0-4h2v2h-2z" />
                </svg>
              </span>
              <span class="title">Other</span>
              <span class="description">Custom partnership opportunity</span>
            </button>
          </div>
        </div>

        <!-- Form Title Section -->
        <div class="form-header mb-8" v-if="partnershipTypeSelected">
          <h2 class="text-3xl font-bold text-center mb-8">Partnership Inquiry Form</h2>
          <p class="text-center text-gray-600 mb-8">Please complete the form below to submit your partnership request</p>
        </div>
        
        <!-- Success Message -->
        <div v-if="successMessage" class="success-message bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-8 flex items-start">
          <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <div>
            <p class="font-medium">{{ successMessage }}</p>
            <p class="text-sm mt-1">We appreciate your interest in partnering with Hurricane Payments.</p>
          </div>
        </div>
        
        <!-- No Partnership Type Selected Message -->
        <div v-if="!partnershipTypeSelected && !successMessage" class="text-center mb-10 mt-6">
          <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg inline-block">
            <p class="font-medium">Please select a partnership type above to continue</p>
            <p class="text-sm mt-1">Click on one of the partnership options to access the inquiry form</p>
          </div>
        </div>
        
        <!-- Error Message -->
        <div v-if="error" class="error-message bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-8 flex items-start">
          <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <div>
            <p class="font-medium">{{ error }}</p>
            <p class="text-sm mt-1">Please try again or contact our support team for assistance.</p>
            
            <!-- Fallback Option for CORS issues -->
            <div v-if="showFallbackOption" class="mt-4">
              <p class="text-sm font-medium mb-2">Alternative submission option:</p>
              <button 
                @click="useAlternativeSubmission" 
                class="bg-white hover:bg-gray-50 text-red-700 px-4 py-2 text-sm font-medium rounded border border-red-300 inline-flex items-center"
              >
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Submit via Email
              </button>
              <p class="text-xs mt-2 text-gray-600">This will prepare an email with your form data that you can send.</p>
            </div>
          </div>
        </div>
        
        <!-- Form only visible after selecting a partnership type -->
        <form v-if="partnershipTypeSelected" @submit.prevent="submitForm" class="space-y-8 max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
          <!-- Contact Information -->
          <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-hurricane-red">*</span></label>
                <input 
                  type="text" 
                  id="fullName" 
                  v-model="form.fullName" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                  placeholder="Enter your full name"
                  required
                />
              </div>
              
              <div>
                <label for="companyName" class="block text-sm font-medium text-gray-700 mb-1">Company Name <span class="text-hurricane-red">*</span></label>
                <input 
                  type="text" 
                  id="companyName" 
                  v-model="form.companyName" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                  placeholder="Enter your company name"
                  required
                />
              </div>
            </div>
            
            <div>
              <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title / Role <span class="text-hurricane-red">*</span></label>
              <input 
                type="text" 
                id="title" 
                v-model="form.title" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                placeholder="Your position in the company"
                required
              />
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span class="text-hurricane-red">*</span></label>
                <input 
                  type="email" 
                  id="email" 
                  v-model="form.email" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                  placeholder="email@example.com"
                  required
                />
              </div>
              
              <div>
                <label for="phoneNumber" class="block text-sm font-medium text-gray-700 mb-1">Phone Number <span class="text-hurricane-red">*</span></label>
                <input 
                  type="tel" 
                  id="phoneNumber" 
                  v-model="form.phoneNumber" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                  placeholder="(123) 456-7890"
                  required
                />
              </div>
            </div>
            
            <div>
              <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website (Optional)</label>
              <input 
                type="url" 
                id="website" 
                v-model="form.website" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                placeholder="https://example.com"
              />
            </div>
            
            <div>
              <label for="partnershipType" class="block text-sm font-medium text-gray-700 mb-1">Type of Partnership <span class="text-hurricane-red">*</span></label>
              <div v-if="partnershipTypeSelected" class="relative">
                <input 
                  type="text" 
                  :value="getPartnershipTypeLabel(form.partnershipType)" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-50 cursor-not-allowed shadow-sm"
                  readonly
                />
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                  <button 
                    type="button" 
                    @click="resetPartnershipType" 
                    class="text-gray-500 hover:text-hurricane-red focus:outline-none"
                    title="Change partnership type"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              </div>
              <select 
                v-else
                id="partnershipType" 
                v-model="form.partnershipType" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm bg-white transition-all duration-200"
                required
              >
                <option value="" disabled>Select Partnership Type</option>
                <option value="reseller">Reseller</option>
                <option value="referral">Referral Partner</option>
                <option value="integration">Technology Integration</option>
                <option value="iso">Independent Sales Organization (ISO)</option>
                <option value="agency">Agency Partnership</option>
                <option value="bank">Bank Partner</option>
                <option value="other">Other</option>
              </select>
            </div>
            
            <div>
              <label for="proposal" class="block text-sm font-medium text-gray-700 mb-1">Brief Description of Proposal or Interest <span class="text-hurricane-red">*</span></label>
              <textarea 
                id="proposal" 
                v-model="form.proposal" 
                rows="4" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm transition-all duration-200"
                placeholder="Please describe your partnership proposal or interest"
                required
              ></textarea>
            </div>
            
            <div>
              <label for="referralSource" class="block text-sm font-medium text-gray-700 mb-1">How did you hear about us? <span class="text-hurricane-red">*</span></label>
              <select 
                id="referralSource" 
                v-model="form.referralSource" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-hurricane-red focus:border-hurricane-red shadow-sm bg-white transition-all duration-200"
                required
              >
                <option value="" disabled>Select Source</option>
                <option value="search">Search Engine</option>
                <option value="social">Social Media</option>
                <option value="referral">Referral</option>
                <option value="email">Email</option>
                <option value="advertisement">Advertisement</option>
                <option value="event">Event or Conference</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          
          <!-- Submit button -->
          <div class="flex justify-end mt-6">
            <button 
              type="submit"
              :disabled="isSubmitting"
              class="w-full bg-[#D84040] hover:bg-red-700 text-white py-3 px-6 rounded-md font-medium transition-colors duration-300 flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed"
            >
              <svg v-if="isSubmitting" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
              {{ isSubmitting ? 'Submitting...' : 'Submit Partnership Request' }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </MainLayout>
</template>

<script>
import MainLayout from './MainLayout.vue';
import axios from 'axios';

export default {
  name: 'PartnershipForms',
  components: {
    MainLayout
  },
  props: {
    modelValue: {
      type: Object,
      default: () => ({})
    }
  },
  data() {
    return {
      form: {
        fullName: this.modelValue.fullName || '',
        companyName: this.modelValue.companyName || '',
        title: this.modelValue.title || '',
        email: this.modelValue.email || '',
        phoneNumber: this.modelValue.phoneNumber || '',
        website: this.modelValue.website || '',
        partnershipType: this.modelValue.partnershipType || '',
        proposal: this.modelValue.proposal || '',
        referralSource: this.modelValue.referralSource || '',
      },
      isSubmitting: false,
      error: null,
      partnershipTypeSelected: false,
      successMessage: null,
      showFallbackOption: false
    }
  },
  created() {
    // Check if a partnership type is in the URL hash when the component is created
    this.checkUrlHash();
    
    // Listen for hash changes and update the form accordingly
    window.addEventListener('hashchange', this.checkUrlHash);
  },
  beforeUnmount() {
    // Remove the event listener when the component is unmounted
    window.removeEventListener('hashchange', this.checkUrlHash);
  },
  watch: {
    form: {
      handler(newVal) {
        this.$emit('update:modelValue', newVal);
      },
      deep: true
    },
    modelValue: {
      handler(newVal) {
        // Prevent recursive updates by checking if values are different
        if (JSON.stringify(this.form) !== JSON.stringify(newVal)) {
          this.form = { ...newVal };
        }
      },
      deep: true
    }
  },
  methods: {
    checkUrlHash() {
      // Get the path from the URL
      const path = window.location.pathname;
      
      // Check if the path contains a partnership type
      // The path should be like /partnership-forms/reseller
      const match = path.match(/\/partnership-forms\/([^\/]+)/);
      
      if (match && match[1]) {
        const type = match[1];
        
        // Check if the type corresponds to a valid partnership type
        const validTypes = ['reseller', 'referral', 'integration', 'iso', 'agency', 'bank', 'other'];
        
        if (validTypes.includes(type)) {
          // Update the form with the partnership type from the URL
          this.form.partnershipType = type;
          this.partnershipTypeSelected = true;
          
          // Scroll to the form after a short delay to ensure the component is rendered
          setTimeout(() => {
            document.querySelector('.form-header')?.scrollIntoView({ 
              behavior: 'smooth',
              block: 'start'
            });
          }, 500);
        }
      }
    },
    handleCorsError(error) {
      console.error('CORS Error:', error);
      
      // Show a more user-friendly error message with alternative submission option
      this.error = 'We encountered a connection issue. This appears to be a cross-origin (CORS) restriction.';
      
      // Add a fallback option to the UI - display a button to use alternative submission method
      this.showFallbackOption = true;
      
      this.$emit('error', this.error);
    },
    // Fallback method for CORS issues
    useAlternativeSubmission() {
      // Create an email link with form data
      const subject = encodeURIComponent(`Partnership Inquiry - ${this.form.partnershipType}`);
      const formattedData = `
Full Name: ${this.form.fullName}
Company: ${this.form.companyName}
Title: ${this.form.title}
Email: ${this.form.email}
Phone: ${this.form.phoneNumber}
Website: ${this.form.website}
Partnership Type: ${this.form.partnershipType}
Proposal: 
${this.form.proposal}
Referral Source: ${this.form.referralSource}
      `;
      const body = encodeURIComponent(formattedData);
      
      // Create and open the mailto link
      const mailtoLink = `mailto:partnerships@hurricanepayments.com?subject=${subject}&body=${body}`;
      window.open(mailtoLink);
      
      // Update UI to indicate the alternative method was used
      this.error = null;
      this.successMessage = 'An email has been prepared with your submission. Please send it from your email client.';
      this.showFallbackOption = false;
      
      // Reset form after submission
      this.form = {
        fullName: '',
        companyName: '',
        title: '',
        email: '',
        phoneNumber: '',
        website: '',
        partnershipType: '',
        proposal: '',
        referralSource: '',
      };
      
      // Reset the partnership type selected flag
      this.partnershipTypeSelected = false;
      
      // Remove any partnership type from the URL
      window.history.pushState(null, null, '/partnership-forms');
      
      // Scroll to top to show success message
      window.scrollTo({ top: 0, behavior: 'smooth' });
    },
    selectPartnershipType(type) {
      this.form.partnershipType = type;
      this.partnershipTypeSelected = true;
      
      // Update the URL without triggering a page reload
      const currentPath = window.location.pathname;
      const newPath = `/partnership-forms/${type}`;
      
      if (currentPath !== newPath) {
        window.history.pushState(null, null, newPath);
      }
      
      // Wait for Vue to update the DOM before scrolling
      this.$nextTick(() => {
        // Add a small delay to ensure DOM is fully rendered
        setTimeout(() => {
          // Determine if we're on mobile
          const isMobile = window.innerWidth < 768;
          
          // Get the form element
          const formElement = document.querySelector('form');
          
          if (formElement) {
            // On mobile, add more offset to account for the fixed header
            const offset = isMobile ? -80 : -20;
            
            // Calculate the element's position relative to the viewport
            const rect = formElement.getBoundingClientRect();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const targetPosition = rect.top + scrollTop + offset;
            
            // Smooth scroll to the form
            window.scrollTo({
              top: targetPosition,
              behavior: 'smooth'
            });
          } else {
            // Fallback - try to find the form header
            const formHeader = document.querySelector('.form-header');
            if (formHeader) {
              formHeader.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
              });
            } else {
              // Last resort fallback - scroll a fixed amount
              const scrollAmount = isMobile ? 500 : 400;
              window.scrollTo({
                top: scrollAmount,
                behavior: 'smooth'
              });
            }
          }
        }, 100); // 100ms delay
      });
    },
    async submitForm() {
      if (this.isSubmitting) return;
      
      this.isSubmitting = true;
      this.error = null;
      
      // Add a success message container if it doesn't exist already
      if (!this.successMessage) {
        this.successMessage = null;
      }

      try {
        // Send form data to the API
        const response = await axios.post('/api/partnership-requests', this.form, {
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          }
        });
        
        // Set success message
        this.successMessage = 'Your partnership request has been submitted successfully! We will contact you soon.';
        
        // Emit events for parent component
        this.$emit('submitted', response.data);
        this.$emit('success', this.successMessage);
        
        // Reset form after successful submission
        this.form = {
          fullName: '',
          companyName: '',
          title: '',
          email: '',
          phoneNumber: '',
          website: '',
          partnershipType: '',
          proposal: '',
          referralSource: '',
        };
        
        // Reset the partnership type selected flag
        this.partnershipTypeSelected = false;
        
        // Remove any partnership type from the URL
        window.history.pushState(null, null, '/partnership-forms');
        
        // Scroll to top to show success message
        window.scrollTo({ top: 0, behavior: 'smooth' });
      } catch (error) {
        console.error('Error submitting partnership request:', error);
        
        // Check if this is a CORS-related error
        if (
          error.message && (
            error.message.includes('Network Error') || 
            error.message.includes('CORS') ||
            error.message.includes('Failed to fetch')
          )
        ) {
          this.handleCorsError(error);
        } else {
          // Set appropriate error message for other types of errors
          const errorMessage = error.response?.data?.message || 
                            'There was an error submitting your partnership request. Please try again later.';
          this.error = errorMessage;
          this.$emit('error', errorMessage);
        }
      } finally {
        this.isSubmitting = false;
      }
    },
    getPartnershipTypeLabel(type) {
      const labels = {
        reseller: 'Reseller',
        referral: 'Referral Partner',
        integration: 'Technology Integration',
        iso: 'Independent Sales Organization (ISO)',
        agency: 'Agency Partnership',
        bank: 'Bank Partner',
        other: 'Other'
      };
      return labels[type] || type;
    },
    resetPartnershipType() {
      this.partnershipTypeSelected = false;
      this.form.partnershipType = '';
      
      // Remove any partnership type from the URL
      window.history.pushState(null, null, '/partnership-forms');
      
      // Scroll to the partnership type selection section
      document.querySelector('.partnership-types-container').scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
      });
    }
  }
}
</script>

<style scoped>
/* Custom input styling */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
select:focus,
textarea:focus {
  outline: none;
  border-color: #dc2626;
  box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.15);
}

/* Transition effects */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

/* Placeholder text styling */
::placeholder {
  color: #9ca3af;
  opacity: 0.7;
}

/* Partnership selection buttons styling */
.partnership-types-container {
  margin-bottom: 2rem;
}

.partnership-option {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 1.5rem 1rem;
  background-color: white;
  border: 1px solid #e5e7eb;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
  cursor: pointer;
  text-align: center;
  height: 100%;
}

.partnership-option:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  border-color: #dc2626;
}

.partnership-option.active {
  background-color: rgba(220, 38, 38, 0.05);
  border-color: #dc2626;
  box-shadow: 0 10px 25px -5px rgba(220, 38, 38, 0.15), 0 10px 10px -5px rgba(220, 38, 38, 0.1);
}

.partnership-option .icon {
  margin-bottom: 0.75rem;
  width: 3rem;
  height: 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(220, 38, 38, 0.1);
  border-radius: 50%;
  color: #dc2626;
  transition: all 0.3s ease;
}

.partnership-option:hover .icon,
.partnership-option.active .icon {
  background-color: rgba(220, 38, 38, 0.2);
  transform: scale(1.1);
}

.partnership-option .title {
  font-weight: 600;
  font-size: 1rem;
  margin-bottom: 0.5rem;
  color: #111827;
}

.partnership-option .description {
  font-size: 0.875rem;
  color: #6b7280;
  line-height: 1.25;
}

.text-hurricane-red {
  color: #dc2626;
}
</style> 