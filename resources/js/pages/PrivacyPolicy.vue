<template>
  <div>
    <NavBar />
    
    <div class="min-h-screen bg-white">
      <div class="max-w-7xl mx-auto flex">
        
        <!-- Sidebar Navigation -->
        <div class="w-80 bg-gray-50 min-h-screen border-r border-gray-200 p-6">
          <div class="space-y-4">
            
            <!-- Privacy Policy Section -->
            <div class="border-b border-gray-200 pb-4">
              <button 
                @click="toggleSection('privacy')" 
                class="w-full flex items-center justify-between text-left font-semibold text-gray-900 hover:text-blue-600 transition-colors"
              >
                <span>Privacy Policy</span>
                <svg 
                  :class="{'rotate-180': openSections.privacy}" 
                  class="w-5 h-5 transform transition-transform" 
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              
              <div v-show="openSections.privacy" class="mt-3 space-y-2">
                <a href="#introduction" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  1. Introduction
                </a>
                <a href="#data-collection" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  2. When Will Hurricane Payments Collect Personal Data?
                </a>
                <a href="#how-collect-data" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  3. How Does Hurricane Payments Collect Your Personal Data?
                </a>
                <a href="#purposes-data" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  4. Purposes for Which Hurricane Payments May/Will Collect, Use, Disclose or Process Your Personal Data
                </a>
                <a href="#protect-secure" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  5. How Does Hurricane Payments Protect and Secure Your Personal Data?
                </a>
                <a href="#your-rights" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  6. Rights That You Have Relating to Your Personal Data
                </a>
                <a href="#accessing-data" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  7. Accessing / Correcting / Updating Your Personal Data
                </a>
              </div>
            </div>

            <!-- Terms of Use Section -->
            <div class="border-b border-gray-200 pb-4">
              <button 
                @click="toggleSection('terms')" 
                class="w-full flex items-center justify-between text-left font-semibold text-gray-900 hover:text-blue-600 transition-colors"
              >
                <span>Terms of Use</span>
                <svg 
                  :class="{'rotate-180': openSections.terms}" 
                  class="w-5 h-5 transform transition-transform" 
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              
              <div v-show="openSections.terms" class="mt-3 space-y-2">
                <a href="#agreement-terms" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  1. Agreement to Terms
                </a>
                <a href="#services-provided" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  2. Services Provided
                </a>
                <a href="#account-requirements" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  3. Account Requirements
                </a>
                <a href="#user-obligations" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  4. User Obligations
                </a>
                <a href="#pricing-payments" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  5. Pricing, Payments, and Subscriptions
                </a>
                <a href="#refunds-cancellations" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  6. Refunds and Cancellations
                </a>
                <a href="#data-ownership" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  7. Data Ownership
                </a>
                <a href="#limitation-liability" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  8. Limitation of Liability
                </a>
                <a href="#contact-information" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  9. Contact Information
                </a>
              </div>
            </div>

            <!-- General Section -->
            <div class="border-b border-gray-200 pb-4">
              <button 
                @click="toggleSection('general')" 
                class="w-full flex items-center justify-between text-left font-semibold text-gray-900 hover:text-blue-600 transition-colors"
              >
                <span>General</span>
                <svg 
                  :class="{'rotate-180': openSections.general}" 
                  class="w-5 h-5 transform transition-transform" 
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              
              <div v-show="openSections.general" class="mt-3 space-y-2">
                <a href="#effective-date" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  Effective Date
                </a>
                <a href="#last-updated" class="block text-sm text-gray-600 hover:text-blue-600 pl-4 py-1 hover:bg-blue-50 rounded transition-colors">
                  Last Updated
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
          
          <!-- Page Header -->
          <div class="mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Hurricane Payments Privacy Policy</h1>
          </div>

          <!-- PRIVACY POLICY SECTION -->
          <div class="mb-16">
            
            <!-- 1. Introduction -->
            <div id="introduction" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">1. INTRODUCTION</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">1.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  At Hurricane Payments ("Company," "we," or "us"), your privacy is our priority. This Privacy Policy explains how we collect, use, and disclose your information when you use our services or visit our website at 
                  <a href="https://web.hurricanepayments.com" class="text-blue-600 underline">https://web.hurricanepayments.com</a>. 
                  By accessing our website or submitting your information, you agree to the terms outlined in this policy.
                </span>
              </div>

              <div class="mb-6">
                <span class="font-semibold text-gray-900">1.2</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  "Personal Data" or "personal data" means data, whether true or not, about an individual who can be identified from that data, or from that data and other information to which an organisation has or is likely to have access. Common examples of personal data could include name, identification number and contact information.
                </span>
              </div>

              <div class="mb-6">
                <span class="font-semibold text-gray-900">1.3</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  By using the Services, registering for an account with us, visiting our Platform, or accessing the Services, you acknowledge and agree that you accept the practices, requirements, and/or policies outlined in this Privacy Policy, and you hereby consent to us collecting, using, disclosing and/or processing your personal data as described herein. 
                  <strong>IF YOU DO NOT CONSENT TO THE PROCESSING OF YOUR PERSONAL DATA AS DESCRIBED IN THIS PRIVACY POLICY, PLEASE DO NOT USE OUR SERVICES OR ACCESS OUR PLATFORM.</strong> 
                  If we change our Privacy Policy, we will notify you including by posting those changes or the amended Privacy Policy on our Platform. We reserve the right to amend this Privacy Policy at any time. To the fullest extent permissible under applicable law, your continued use of the Services or Platform, including placing of any orders, shall constitute your acknowledgment and acceptance of the changes made to this Privacy Policy.
                </span>
              </div>

              <div class="mb-6">
                <span class="font-semibold text-gray-900">1.4</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  This Policy applies in conjunction with other notices, contractual clauses, consent clauses that apply in relation to the collection, storage, use, disclosure and/or processing of your personal data by us and is not intended to override those notices or clauses unless we state expressly otherwise.
                </span>
              </div>

              <div class="mb-6">
                <span class="font-semibold text-gray-900">1.5</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  This Policy applies to both buyers and sellers who use the Services except where expressly stated otherwise.
                </span>
              </div>
            </div>

            <!-- 2. Information We Collect -->
            <div id="data-collection" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">2. WHEN WILL HURRICANE PAYMENTS COLLECT PERSONAL DATA?</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">2.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  We collect personal and business information from you to facilitate the provision of our services. This includes your first and last name, phone number, and business email. We also gather business-specific details such as the legal name of the business, DBA, physical address, industry type, and years in operation.
                </span>
              </div>

              <div class="mb-6">
                <span class="font-semibold text-gray-900">2.2</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Financial data, including monthly processing volume, average transaction size, and bank account details, are also collected. For compliance purposes, we request tax identification information such as an EIN or SSN. We may also collect information about your processing history, existing systems, operational challenges, and product or service preferences.
                </span>
              </div>
            </div>

            <!-- 3. How We Collect Data -->
            <div id="how-collect-data" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">3. HOW DOES HURRICANE PAYMENTS COLLECT YOUR PERSONAL DATA?</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">3.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Your information is collected through several methods including multi-step merchant onboarding forms, contact and quote request forms on our website, cookies and tracking tools, phone consultations, and applications submitted for merchant account services.
                </span>
              </div>
            </div>

            <!-- 4. Use of Information -->
            <div id="purposes-data" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">4. PURPOSES FOR WHICH HURRICANE PAYMENTS MAY/WILL COLLECT, USE, DISCLOSE OR PROCESS YOUR PERSONAL DATA</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">4.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  The data we collect enables us to process your merchant account applications, provide payment processing and POS solutions, recommend appropriate hardware or software, communicate for sales and marketing, support your account, enhance user experience, and fulfill our regulatory obligations.
                </span>
              </div>
            </div>

            <!-- 5. Information Sharing -->
            <div id="protect-secure" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">5. HOW DOES HURRICANE PAYMENTS PROTECT AND SECURE YOUR PERSONAL DATA?</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">5.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  We share your data with trusted third parties necessary to operate our services. These include payment processors and banking partners for account setup, hardware vendors and logistics providers for equipment delivery, credit and identity verification services, regulatory compliance organizations, and marketing platforms used for business communications.
                </span>
              </div>
            </div>

            <!-- 6. Data Access and Deletion -->
            <div id="your-rights" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">6. RIGHTS THAT YOU HAVE RELATING TO YOUR PERSONAL DATA</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">6.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  You may request access to or deletion of your personal data by contacting us via email at 
                  <a href="mailto:Thomas@hurricanepayments.com" class="text-blue-600 underline">Thomas@hurricanepayments.com</a>, 
                  calling <a href="tel:1-888-440-0936" class="text-blue-600 underline">1-888-440-0936</a>, 
                  submitting a request through our website contact form, or speaking with your assigned account representative.
                </span>
              </div>
            </div>

            <!-- 7. Data Security -->
            <div id="accessing-data" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">7. ACCESSING / CORRECTING / UPDATING YOUR PERSONAL DATA</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">7.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  We employ reasonable and appropriate measures to protect your data from unauthorized access, misuse, or loss. However, no method of transmission over the Internet is 100% secure, and we cannot guarantee absolute security.
                </span>
              </div>
            </div>
          </div>

          <!-- Page Break -->
          <div class="border-t border-gray-300 my-12"></div>

          <!-- TERMS AND CONDITIONS SECTION -->
          <div class="mb-16">
            <div class="mb-8">
              <h1 class="text-3xl font-bold text-gray-900 mb-4">Hurricane Payments Terms of Use</h1>
            </div>

            <!-- 1. Agreement to Terms -->
            <div id="agreement-terms" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">1. AGREEMENT TO TERMS</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">1.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  By using the Hurricane Payments website and services, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you must not use our services.
                </span>
              </div>
            </div>

            <!-- 2. Services Provided -->
            <div id="services-provided" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">2. SERVICES PROVIDED</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">2.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Hurricane Payments provides a comprehensive suite of payment solutions. These include zero-percent credit card processing, POS hardware such as terminals and kiosks, inventory-enabled POS software, merchant account setup, professional installation and training, QR code ordering systems, and other industry-specific tools.
                </span>
              </div>
            </div>

            <!-- 3. Account Requirements -->
            <div id="account-requirements" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">3. ACCOUNT REQUIREMENTS</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">3.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  To access our services, users must complete a comprehensive merchant onboarding process. Account setup is required for access to the merchant dashboard and POS software. All information submitted during this process must be accurate and current.
                </span>
              </div>
            </div>

            <!-- 4. User Obligations -->
            <div id="user-obligations" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">4. USER OBLIGATIONS</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">4.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Users must comply with applicable laws and payment industry regulations, including but not limited to PCI DSS. You are prohibited from processing illegal transactions or engaging in fraud. High-risk business activities must be disclosed. Users must also adhere to the guidelines associated with any hardware or software provided.
                </span>
              </div>
            </div>

            <!-- 5. Pricing, Payments, and Subscriptions -->
            <div id="pricing-payments" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">5. PRICING, PAYMENTS, AND SUBSCRIPTIONS</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">5.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Our services include both one-time and recurring payments: Hardware purchases typically range between $500 and $2,000 or more. Monthly licensing fees apply to software services. Payment processing services operate on a per-transaction basis. Professional services such as installation and training may involve one-time fees.
                </span>
              </div>
            </div>

            <!-- 6. Refunds and Cancellations -->
            <div id="refunds-cancellations" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">6. REFUNDS AND CANCELLATIONS</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">6.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Refund and cancellation policies may vary depending on the service or product. Hardware is subject to specific return policies. Service contracts may include cancellation clauses. Processing fees are generally non-refundable. Equipment warranties and replacement options are available per vendor terms.
                </span>
              </div>
            </div>

            <!-- 7. Data Ownership -->
            <div id="data-ownership" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">7. DATA OWNERSHIP</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">7.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  You retain ownership of the business data you upload or share. However, Hurricane Payments reserves the right to use this data to fulfill service obligations, manage your account, and ensure compliance with financial industry regulations.
                </span>
              </div>
            </div>

            <!-- 8. Limitation of Liability -->
            <div id="limitation-liability" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">8. LIMITATION OF LIABILITY</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">8.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  Hurricane Payments shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your use of the services.
                </span>
              </div>
            </div>

            <!-- Contact Information -->
            <div id="contact-information" class="mb-8">
              <h2 class="text-xl font-bold text-gray-900 mb-4">9. CONTACT INFORMATION</h2>
              
              <div class="mb-6">
                <span class="font-semibold text-gray-900">9.1</span>
                <span class="ml-2 text-gray-700 leading-relaxed">
                  If you have any questions about this Privacy Policy or Terms of Use, please contact us:
                </span>
              </div>

              <div class="ml-8 text-gray-700 space-y-2">
                <div><strong>Email:</strong> <a href="mailto:Thomas@hurricanepayments.com" class="text-blue-600 underline">Thomas@hurricanepayments.com</a></div>
                <div><strong>Phone:</strong> <a href="tel:1-888-440-0936" class="text-blue-600 underline">1-888-440-0936</a></div>
                <div><strong>Website:</strong> <a href="https://web.hurricanepayments.com" class="text-blue-600 underline">https://web.hurricanepayments.com</a></div>
                <div><strong>Business Address:</strong> 1800 hwy 90 ste 263, gautier ms 39553</div>
              </div>
            </div>
          </div>

          <!-- Document Footer -->
          <div id="effective-date" class="text-center pt-8 border-t border-gray-300 mt-12">
            <div id="last-updated" class="text-sm text-gray-600">
              <p class="mb-2"><strong>Effective Date:</strong> {{ currentDate }}</p>
              <p class="mb-2"><strong>Last Updated:</strong> {{ currentDate }}</p>
              <p class="mb-2">This Privacy Policy and Terms of Use document was last updated on the date shown above.</p>
              <p>We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of any changes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <AppFooter />
  </div>
</template>

<script>
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';

export default {
  name: 'PrivacyPolicy',
  components: {
    NavBar,
    AppFooter
  },
  data() {
    return {
      openSections: {
        privacy: true,
        terms: false,
        general: false
      }
    };
  },
  methods: {
    toggleSection(section) {
      this.openSections[section] = !this.openSections[section];
    }
  },
  computed: {
    currentDate() {
      return new Date().toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });
    }
  }
};
</script>

<style scoped>
/* Clean document styling similar to Shopee */
body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}

/* Smooth scrolling */
html {
  scroll-behavior: smooth;
}

/* Sidebar styling */
.sidebar-link {
  transition: all 0.2s ease;
}

.sidebar-link:hover {
  background-color: #eff6ff;
  color: #2563eb;
}

/* Print styling */
@media print {
  .w-80 {
    display: none;
  }
  
  .flex-1 {
    width: 100% !important;
  }
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .w-80 {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 50;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
  }
  
  .flex {
    flex-direction: column;
  }
}
</style> 