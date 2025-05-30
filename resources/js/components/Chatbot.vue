<template>
  <div class="chatbot-container">
    <!-- Chatbot Button (Circle) - always visible, toggles open/close -->
    <button @click="toggleChat" class="chatbot-circle-button" :class="{ 'chatbot-button-open': isChatOpen }">
      <svg v-if="!isChatOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
      </svg>
      <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
    
    <!-- Chatbot Panel -->
    <div v-if="isChatOpen" class="chatbot-panel">
      <!-- Chatbot Header -->
      <div class="chatbot-panel-header">
        <div class="flex items-center">
          <div class="chatbot-avatar">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
          </div>
          <span class="ml-3 font-medium">Hurricane Payments Chatbot</span>
        </div>
      </div>
      
      <!-- Chatbot Messages -->
      <div class="chatbot-messages" ref="messagesContainer">
        <div v-for="(message, index) in messages" :key="index" 
             :class="[message.type === 'bot' ? 'bot-message' : 'user-message']">
          <div v-html="message.text"></div>
          
          <!-- Option buttons - only show for bot messages with options -->
          <div v-if="message.options && message.options.length > 0" class="option-buttons">
            <button 
              v-for="option in message.options" 
              :key="option.id"
              @click="selectOption(option)"
              class="option-button"
            >
              {{ option.text }}
            </button>
          </div>
        </div>
      </div>
      
      <!-- Message Input -->
      <div class="chatbot-input">
        <input 
          type="text" 
          v-model="newMessage" 
          @keyup.enter="sendMessage"
          placeholder="Type your message here..." 
          class="chatbot-input-field"
        >
        <button @click="sendMessage" class="chatbot-send-button">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, watch, nextTick } from 'vue';

// Chatbot state
const isChatOpen = ref(false);
const newMessage = ref('');
const messagesContainer = ref(null);

// Define the welcome message with options
const welcomeMessage = {
  type: 'bot',
  text: 'Hi 👋! Welcome to Hurricane Payments – home of zero transaction fees and the powerful KwickPOS system. How can I help you today?',
  options: [
    { id: 1, text: 'Learn About POS Systems', action: 'pos' },
    { id: 2, text: 'Eliminate My Credit Card Processing Fees', action: 'fees' },
    { id: 3, text: 'Get a Quote or Schedule a Demo', action: 'quote' },
    { id: 4, text: 'Working Capital / Business Funding', action: 'funding' },
    { id: 7, text: 'I\'m a Partner / Reseller', action: 'partner' },
    { id: 8, text: 'Speak With a Representative', action: 'speak-rep' }
  ]
};

const messages = ref([welcomeMessage]);

// Auto-scroll to bottom when messages change
watch(() => [...messages.value], async () => {
  await nextTick();
  if (messagesContainer.value) {
    messagesContainer.value.scrollTop = messagesContainer.value.scrollHeight;
  }
}, { deep: true });

// Chatbot methods
function toggleChat() {
  isChatOpen.value = !isChatOpen.value;
  
  // Reset chat if it was closed
  if (!isChatOpen.value) {
    setTimeout(() => {
      messages.value = [welcomeMessage];
    }, 300);
  }
}

function sendMessage() {
  if (newMessage.value.trim() === '') return;
  
  // Add user message
  messages.value.push({ type: 'user', text: newMessage.value });
  
  // Clear input
  const userQuery = newMessage.value;
  newMessage.value = '';
  
  // Process the message
  processUserMessage(userQuery);
}

function selectOption(option) {
  // Add user selection as a message
  messages.value.push({ type: 'user', text: option.text });
  
  // Handle the selected option
  handleOptionSelection(option.action);
}

function processUserMessage(message) {
  // Simple keyword matching
  const lowerMsg = message.toLowerCase();
  
  if (lowerMsg.includes('pos') || lowerMsg.includes('point of sale')) {
    handleOptionSelection('pos');
  } else if (lowerMsg.includes('fee') || lowerMsg.includes('processing') || lowerMsg.includes('transaction')) {
    handleOptionSelection('fees');
  } else if (lowerMsg.includes('quote') || lowerMsg.includes('demo')) {
    handleOptionSelection('quote');
  } else if (lowerMsg.includes('fund') || lowerMsg.includes('capital') || lowerMsg.includes('loan')) {
    handleOptionSelection('funding');
  } else if (lowerMsg.includes('partner') || lowerMsg.includes('reseller')) {
    handleOptionSelection('partner');
  } else {
    // Default response for unrecognized queries
    setTimeout(() => {
      messages.value.push({
        type: 'bot',
        text: 'I\'m not sure I understand. Could you please select one of these options?',
        options: welcomeMessage.options
      });
    }, 1000);
  }
}

function handleOptionSelection(action) {
  setTimeout(() => {
    switch(action) {
      case 'pos':
        messages.value.push({
          type: 'bot',
          text: `<strong>KwickPOS Systems</strong><br><br>
                Our KwickPOS solutions are built for restaurants, bars, retail, and service businesses. What are you looking for?`,
          options: [
            { id: 'pos-features', text: 'KwickPOS Features Overview', action: 'pos-features' },
            { id: 'pos-hardware', text: 'Hardware Options', action: 'pos-hardware' },
            { id: 'pos-industry', text: 'Industry-Specific Solutions', action: 'pos-industry' },
            { id: 'pos-pricing', text: 'Monthly Pricing & Packages', action: 'pos-pricing' },
            { id: 'pos-compare', text: 'Compare to Competitors', action: 'pos-compare' },
            { id: 'pos-demo', text: 'Schedule a Demo', action: 'quote' },
            { id: 'pos-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'pos-features':
        messages.value.push({
          type: 'bot',
          text: `<strong>KwickPOS Features Overview</strong><br><br>
                KwickPOS offers comprehensive tools for modern businesses:<br><br>
                • <a href="https://web.hurricanepayments.com/restaurants" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Restaurant & Bar Tools</a> - Menu building, Table management, Tabs, Kitchen Display<br>
                • <a href="https://web.hurricanepayments.com/retail" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Retail Tools</a> - Barcode Scanning, Product Catalog, Inventory Tracking<br>
                • <a href="https://web.hurricanepayments.com/gift-loyalty" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Reservations & Loyalty</a> - Customer rewards, Gift cards, Reservation management<br>
                • <a href="https://web.hurricanepayments.com/integrations" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Online Ordering & Delivery Integration</a> - Third-party delivery services<br>
                • <a href="https://web.hurricanepayments.com/text-qr" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">QR Code Menus</a> - Contactless ordering<br>
                • Advanced Reporting - Business insights<br><br>
                Which feature would you like to know more about?`,
          options: [
            { id: 'pos-demo', text: 'Schedule a Demo', action: 'quote' },
            { id: 'pos-menu', text: 'Back to POS Menu', action: 'pos' },
            { id: 'pos-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'pos-hardware':
        messages.value.push({
          type: 'bot',
          text: `<strong>KwickPOS Hardware Options</strong><br><br>
                We offer flexible hardware solutions to fit your business needs:<br><br>
                • iPad Bundle - Sleek, modern tablet-based solution<br>
                • Kitchen Printer - High-speed thermal printing for orders<br>
                • Cash Drawer - Secure cash management<br>
                • All-in-One POS Terminal - Integrated solution with touch screen<br>
                • Handheld Ordering Devices - For table-side or mobile ordering<br>
                • Receipt Printers - For customer receipts<br>
                • Barcode Scanners - Quick inventory management<br><br>
                All hardware comes with installation support and warranty options.`,
          options: [
            { id: 'pos-pricing', text: 'View Pricing', action: 'pos-pricing' },
            { id: 'pos-demo', text: 'Get a Hardware Quote', action: 'quote' },
            { id: 'pos-menu', text: 'Back to POS Menu', action: 'pos' }
          ]
        });
        break;
        
      case 'pos-industry':
        messages.value.push({
          type: 'bot',
          text: `<strong>Industry-Specific POS Solutions</strong><br><br>
                KwickPOS is customized for different business types:<br><br>
                • <a href="https://web.hurricanepayments.com/restaurants" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Restaurant / Bar</a> - Full-service table management, menu modifiers, split checks<br>
                • Food Truck - Mobile-friendly, compact solutions<br>
                • Coffee Shop / Café - Quick-service features, modifiers<br>
                • <a href="https://web.hurricanepayments.com/retail" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Retail Store</a> - Inventory management, barcode scanning, customer profiles<br>
                • <a href="https://web.hurricanepayments.com/skill-trade" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Service Business</a> - Appointment scheduling, customer management<br><br>
                Which industry solution would you like to explore?`,
          options: [
            { id: 'pos-demo', text: 'Get Industry-Specific Demo', action: 'quote' },
            { id: 'pos-menu', text: 'Back to POS Menu', action: 'pos' },
            { id: 'pos-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'pos-pricing':
        messages.value.push({
          type: 'bot',
          text: `<strong>KwickPOS Pricing & Packages</strong><br><br>
                Our flexible pricing options:<br><br>
                • Software License: Starting at $99/month<br>
                • Hardware Bundles: From $549 (lease or purchase options)<br>
                • Installation & Training: Custom packages available<br>
                • No transaction fees with our dual pricing program<br><br>
                KwickPOS offers significant savings compared to competitors through our zero-fee processing program. We can customize a package specifically for your business needs and volume.`,
          options: [
            { id: 'pos-demo', text: 'Get Custom Quote', action: 'quote' },
            { id: 'pos-compare', text: 'Compare to Competitors', action: 'pos-compare' },
            { id: 'pos-menu', text: 'Back to POS Menu', action: 'pos' }
          ]
        });
        break;
        
      case 'pos-compare':
        messages.value.push({
          type: 'bot',
          text: `<strong>KwickPOS vs. Competitors</strong><br><br>
                See how KwickPOS compares to other popular systems:<br><br>
                <strong>✓ Feature Comparison:</strong><br>
                • Equal or better feature set than Square, Toast & Clover<br>
                • More customization options for specific industries<br>
                • Better integration with our zero-fee payment processing<br><br>
                <strong>✓ Cost Comparison:</strong><br>
                • Similar monthly software costs<br>
                • MAJOR SAVINGS on payment processing fees<br>
                • Better hardware pricing and flexibility<br><br>
                <strong>✓ The Hurricane Advantage:</strong><br>
                • Eliminate ALL processing fees (competitors charge 2.5-3.5%)<br>
                • Local support and training<br>
                • Custom development options for specific needs`,
          options: [
            { id: 'pos-demo', text: 'Get a Side-by-Side Comparison', action: 'quote' },
            { id: 'pos-menu', text: 'Back to POS Menu', action: 'pos' },
            { id: 'pos-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'pos-details':
        messages.value.push({
          type: 'bot',
          text: `<strong>More About KwickPOS</strong><br><br>
                KwickPOS is more than just a payment processor - it's a complete business management system:<br><br>
                • Customizable for retail, restaurants, and service businesses<br>
                • Integrated payment processing<br>
                • Cloud-based with offline capabilities<br>
                • 24/7 technical support<br><br>
                Visit our website for more details: <a href="https://web.hurricanepayments.com/point-of-sale" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">KwickPOS Systems</a>`,
          options: [
            { id: 'pos-menu', text: 'Back to POS Menu', action: 'pos' },
            { id: 'pos-quote', text: 'Get a Quote', action: 'quote' },
            { id: 'pos-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'fees':
        messages.value.push({
          type: 'bot',
          text: `<strong>Eliminate Credit Card Processing Fees</strong><br><br>
                We help business owners eliminate up to 100% of their credit card fees using our Dual Pricing model:<br><br>
                • Save $500-$3,000 per month<br>
                • 100% legal & compliant in all 50 states<br>
                • Transparent pricing for customers<br>
                • Easy integration with POS systems<br><br>
                Learn more: <a href="https://web.hurricanepayments.com/dual-pricing" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Dual Pricing Program</a>`,
          options: [
            { id: 'fees-how', text: 'How Does It Work?', action: 'fees-details' },
            { id: 'fees-quote', text: 'Get Started', action: 'quote' },
            { id: 'fees-faq', text: 'Common Questions', action: 'fees-faq' },
            { id: 'fees-savings', text: 'Estimate My Savings', action: 'fees-savings' },
            { id: 'fees-switch', text: 'Switch From Other Systems', action: 'fees-switch' },
            { id: 'fees-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'fees-details':
        messages.value.push({
          type: 'bot',
          text: `<strong>How Our Dual Pricing Works</strong><br><br>
                1. Display both cash and card prices (like gas stations do)<br>
                2. Our POS system automatically calculates the appropriate price<br>
                3. Card users pay a slightly higher price that covers processing fees<br>
                4. Cash users enjoy a discounted price<br>
                5. You keep 100% of your sales revenue<br><br>
                It's fully automated, transparent, and thousands of merchants are already saving!`,
          options: [
            { id: 'fees-quote', text: 'Sign Me Up', action: 'quote' },
            { id: 'fees-faq', text: 'Common Questions', action: 'fees-faq' },
            { id: 'fees-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'fees-faq':
        messages.value.push({
          type: 'bot',
          text: `<strong>Common Questions About Dual Pricing</strong><br><br>
                <strong>Q: Will customers complain?</strong><br>
                A: Most customers are already familiar with this pricing model from gas stations. We provide staff training and signage to make the transition smooth.<br><br>
                <strong>Q: Is this legal in my state?</strong><br>
                A: Yes! Our dual pricing program is 100% legal and compliant in all 50 states.<br><br>
                <strong>Q: Do I need to update my signage?</strong><br>
                A: We provide all necessary signage and staff training materials to make implementation easy.`,
          options: [
            { id: 'fees-savings', text: 'Estimate My Savings', action: 'fees-savings' },
            { id: 'fees-quote', text: 'Get Started', action: 'quote' },
            { id: 'fees-back', text: 'Back to Fees Menu', action: 'fees' }
          ]
        });
        break;
        
      case 'fees-savings':
        messages.value.push({
          type: 'bot',
          text: `<strong>Estimate Your Savings</strong><br><br>
                Here's a quick estimate of your potential monthly savings:<br><br>
                • $10,000 monthly volume = ~$300 savings<br>
                • $15,000 monthly volume = ~$450 savings<br>
                • $25,000 monthly volume = ~$750 savings<br>
                • $50,000 monthly volume = ~$1,500 savings<br>
                • $100,000+ monthly volume = $3,000+ savings<br><br>
                For a personalized savings estimate based on your business, let's schedule a consultation.`,
          options: [
            { id: 'fees-quote', text: 'Get My Custom Estimate', action: 'quote' },
            { id: 'fees-switch', text: 'Switch From Other Systems', action: 'fees-switch' },
            { id: 'fees-back', text: 'Back to Fees Menu', action: 'fees' }
          ]
        });
        break;
        
      case 'fees-switch':
        messages.value.push({
          type: 'bot',
          text: `<strong>Switch From Square, Clover, or Toast</strong><br><br>
                Square, Toast, and Clover don't offer true dual pricing options to eliminate processing fees. When you switch to Hurricane Payments:<br><br>
                • Keep all your profit instead of paying 2.5-4% in fees<br>
                • Transparent pricing for your customers<br>
                • Full-featured POS with equal or better functionality<br>
                • Seamless transition with our migration assistance<br><br>
                We'll provide a detailed comparison showing exactly how much you'll save by switching.`,
          options: [
            { id: 'fees-quote', text: 'Get a Comparison & Quote', action: 'quote' },
            { id: 'fees-back', text: 'Back to Fees Menu', action: 'fees' }
          ]
        });
        break;
        
      case 'quote':
        messages.value.push({
          type: 'bot',
          text: `<strong>Get a Quote or Schedule a Demo</strong><br><br>
                We'd be happy to provide you with a custom quote or schedule a demonstration of our systems.<br><br>
                Please fill out our quick form, and a Hurricane Payments specialist will contact you within one business day:<br><br>
                <a href="http://127.0.0.1:8000/request-consultation" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Request a Quote/Demo</a>`,
          options: [
            { id: 'quote-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'funding':
        messages.value.push({
          type: 'bot',
          text: `<strong>Working Capital / Business Funding</strong><br><br>
                Need business funding? We offer revenue-based financing solutions to help your business grow:<br><br>
                • Fast approval (24-48 hours)<br>
                • Simple qualification process<br>
                • Funding based on your business revenue<br>
                • Flexible repayment options<br><br>
                Learn more: <a href="https://web.hurricanepayments.com/speedybusinessloan" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Business Funding Options</a>`,
          options: [
            { id: 'funding-how', text: 'How It Works', action: 'funding-how' },
            { id: 'funding-requirements', text: 'Requirements', action: 'funding-requirements' },
            { id: 'funding-uses', text: 'Use Cases', action: 'funding-uses' },
            { id: 'funding-apply', text: 'Apply Now', action: 'funding-apply' },
            { id: 'funding-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'funding-how':
        messages.value.push({
          type: 'bot',
          text: `<strong>How Our Business Funding Works</strong><br><br>
                Our streamlined funding process makes it easy to get the capital you need:<br><br>
                1. Submit 3 months of bank statements<br>
                2. We perform a soft credit pull (no impact on credit score)<br>
                3. Get approval within 24-48 hours<br>
                4. Receive funds directly to your business account<br><br>
                No lengthy paperwork or complex applications required!`,
          options: [
            { id: 'funding-requirements', text: 'See Requirements', action: 'funding-requirements' },
            { id: 'funding-apply', text: 'Apply Now', action: 'funding-apply' },
            { id: 'funding-back', text: 'Back to Funding Menu', action: 'funding' }
          ]
        });
        break;
        
      case 'funding-requirements':
        messages.value.push({
          type: 'bot',
          text: `<strong>Business Funding Requirements</strong><br><br>
                To qualify for our funding solutions, you need:<br><br>
                • Minimum 3 months in business<br>
                • At least $5,000 in monthly revenue<br>
                • Business bank account<br><br>
                That's it! We've simplified the qualification process to help more businesses access the capital they need.`,
          options: [
            { id: 'funding-uses', text: 'See Use Cases', action: 'funding-uses' },
            { id: 'funding-apply', text: 'Apply Now', action: 'funding-apply' },
            { id: 'funding-back', text: 'Back to Funding Menu', action: 'funding' }
          ]
        });
        break;
        
      case 'funding-uses':
        messages.value.push({
          type: 'bot',
          text: `<strong>How Businesses Use Our Funding</strong><br><br>
                Our clients use business funding for a variety of purposes:<br><br>
                • Payroll and staffing<br>
                • Equipment purchases<br>
                • Business expansion<br>
                • Inventory and supplies<br>
                • Marketing and advertising<br><br>
                No matter what your business needs, our funding can help you grow.`,
          options: [
            { id: 'funding-how', text: 'How It Works', action: 'funding-how' },
            { id: 'funding-apply', text: 'Apply Now', action: 'funding-apply' },
            { id: 'funding-back', text: 'Back to Funding Menu', action: 'funding' }
          ]
        });
        break;
        
      case 'funding-apply':
        messages.value.push({
          type: 'bot',
          text: `<strong>Apply for Business Funding</strong><br><br>
                Ready to get started? Complete our quick request form, and our specialist will contact you within one business day:<br><br>
                <a href="https://web.hurricanepayments.com/request-consultation" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Apply for Funding</a><br><br>
                `,
          options: [
            { id: 'funding-back', text: 'Back to Funding Menu', action: 'funding' },
            { id: 'main-menu', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'partner':
        messages.value.push({
          type: 'bot',
          text: `<strong>Partner/Reseller Program</strong><br><br>
                Join our growing network of partners and resellers!<br><br>
                • Competitive revenue sharing<br>
                • Sales and marketing support<br>
                • Technical training and certification<br>
                • White-label options available<br><br>
                Learn more: <a href="https://web.hurricanepayments.com/pos-reseller" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Partner Program</a>`,
          options: [
            { id: 'partner-join', text: 'Become a Partner', action: 'partner-apply' },
            { id: 'partner-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'partner-apply':
        messages.value.push({
          type: 'bot',
          text: `<strong>Join Our Partner Program</strong><br><br>
                Please fill out our partner application form, and our partnership team will contact you shortly:<br><br>
                <a href="https://web.hurricanepayments.com/partnership-forms" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Partner Application</a>`,
          options: [
            { id: 'partner-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'speak-rep':
        messages.value.push({
          type: 'bot',
          text: `<strong>Speak With a Representative</strong><br><br>
                Let's connect you to a human. Fill out this quick form and a Hurricane Payments representative will reach out to you shortly:<br><br>
                <a href="http://127.0.0.1:8000/request-consultation" target="_blank" style="color: #973131; text-decoration: underline; font-weight: 600;">Contact Representative</a>`,
          options: [
            { id: 'rep-back', text: 'Back to Main Menu', action: 'back' }
          ]
        });
        break;
        
      case 'back':
        // Return to main menu
        messages.value.push(welcomeMessage);
        break;
        
      default:
        messages.value.push({
          type: 'bot',
          text: 'I\'m not sure how to help with that. Please select one of these options:',
          options: welcomeMessage.options
        });
    }
  }, 1000);
}
</script>

<style scoped>
/* Updated Chatbot Styles */
:root {
  --custom-red: #973131;
  --custom-red-dark: #7e2929;
}

.chatbot-container {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 1000;
  font-family: 'Inter', system-ui, sans-serif;
}

/* Circular button that stays visible */
.chatbot-circle-button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #5e1f1f !important;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 20px rgba(94, 31, 31, 0.4);
  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  border: none;
  outline: none;
  animation: pulse-subtle 2s infinite;
  z-index: 1010;
  position: relative;
  fill: white;
}

/* Button when chat is open */
.chatbot-button-open {
  background-color: #4e1a1a !important;
  transform: rotate(0deg);
  animation: none;
  box-shadow: 0 2px 10px rgba(94, 31, 31, 0.3);
}

@keyframes pulse-subtle {
  0% {
    box-shadow: 0 4px 20px rgba(94, 31, 31, 0.4);
    transform: scale(1);
  }
  50% {
    box-shadow: 0 4px 25px rgba(94, 31, 31, 0.6);
    transform: scale(1.05);
  }
  100% {
    box-shadow: 0 4px 20px rgba(94, 31, 31, 0.4);
    transform: scale(1);
  }
}

.chatbot-circle-button:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 30px rgba(94, 31, 31, 0.5);
}

.chatbot-button-open:hover {
  transform: scale(1.05);
}

/* Chat panel */
.chatbot-panel {
  position: absolute;
  bottom: 75px;
  right: 0;
  width: 350px;
  border-radius: 20px;
  overflow: hidden;
  background-color: white;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
  display: flex;
  flex-direction: column;
  animation: slide-up 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transform-origin: bottom right;
}

@keyframes slide-up {
  from {
    opacity: 0;
    transform: translateY(20px) scale(0.9);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Chat panel header */
.chatbot-panel-header {
  background-color: var(--custom-red);
  color: #4e1a1a;
  padding: 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-radius: 20px 20px 0 0;
}

.chatbot-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Messages container */
.chatbot-messages {
  flex: 1;
  overflow-y: auto;
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 16px;
  max-height: 400px;
  background-color: #f7f8fa;
}

/* Message bubbles */
.bot-message, .user-message {
  max-width: 85%;
  padding: 12px 16px;
  font-size: 14px;
  line-height: 1.5;
  animation: fade-in 0.2s ease-out;
}

@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.bot-message {
  align-self: flex-start;
  background-color: white;
  color: #333;
  border-radius: 18px 18px 18px 4px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

.user-message {
  align-self: flex-end;
  background-color: #5e1f1f;
  color: white;
  border-radius: 18px 18px 4px 18px;
  box-shadow: 0 2px 8px rgba(94, 31, 31, 0.3);
}

/* Option buttons */
.option-buttons {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-top: 12px;
}

.option-button {
  background-color: #f0f0f0;
  border: 1px solid #ddd;
  color: #333;
  padding: 8px 12px;
  border-radius: 16px;
  font-size: 13px;
  cursor: pointer;
  transition: all 0.2s ease;
  text-align: left;
}

.option-button:hover {
  background-color: #e6e6e6;
  border-color: #ccc;
}

/* Input area */
.chatbot-input {
  padding: 12px;
  display: flex;
  align-items: center;
  background-color: white;
  border-top: 1px solid #eee;
}

.chatbot-input-field {
  flex: 1;
  border: 1px solid #e2e2e2;
  border-radius: 20px;
  padding: 10px 16px;
  font-size: 14px;
  outline: none;
  transition: all 0.2s ease;
  color: black;
}

.chatbot-input-field:focus {
  border-color: #5e1f1f;
  box-shadow: 0 0 0 2px rgba(94, 31, 31, 0.1);
}

.chatbot-send-button {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background-color: #5e1f1f;
  color: white;
  border: none;
  margin-left: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
}

.chatbot-send-button:hover {
  background-color: #4e1a1a;
  transform: scale(1.05);
}

/* Ensure SVG inherits the white color */
.chatbot-circle-button svg,
.chatbot-send-button svg {
  color: white !important;
  fill: white !important;
}

/* When chat is open, keep the SVG white */
.chatbot-button-open svg {
  color: white !important;
  fill: white !important;
}

/* Update placeholder text color */
.chatbot-input-field::placeholder {
  color: #666;
}

/* Links in chat */
.bot-message a {
  color: #973131;
  text-decoration: underline;
  font-weight: 600;
}

.bot-message a:hover {
  color: #b73c3c;
}
</style> 