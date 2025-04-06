<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <NavBar />
    
    <!-- Main Content Slot -->
    <slot></slot>
    
    <AppFooter />
    
    <!-- Chatbot Widget -->
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
            <span class="ml-3 font-medium">Customer Support</span>
          </div>
        </div>
        
        <!-- Chatbot Messages -->
        <div class="chatbot-messages">
          <div v-for="(message, index) in messages" :key="index" 
               :class="[message.type === 'bot' ? 'bot-message' : 'user-message']">
            {{ message.text }}
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
  </div>
</template>

<script setup>
import { ref } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';

// Chatbot state
const isChatOpen = ref(false);
const newMessage = ref('');
const messages = ref([
  { type: 'bot', text: 'Hi there! How can I help you with payment processing today?' },
]);

// Chatbot methods
function toggleChat() {
  isChatOpen.value = !isChatOpen.value;
}

function sendMessage() {
  if (newMessage.value.trim() === '') return;
  
  // Add user message
  messages.value.push({ type: 'user', text: newMessage.value });
  
  // Clear input
  const userQuery = newMessage.value;
  newMessage.value = '';
  
  // Simulate bot response after a short delay
  setTimeout(() => {
    let botResponse = "Thanks for your message! One of our payment experts will get back to you shortly.";
    
    // Simple keyword matching for demo purposes
    if (userQuery.toLowerCase().includes('pricing') || userQuery.toLowerCase().includes('cost')) {
      botResponse = "Our pricing is competitive and customized to your business needs. Would you like a free rate review?";
    } else if (userQuery.toLowerCase().includes('support') || userQuery.toLowerCase().includes('help')) {
      botResponse = "Our customer support team is available 24/7/365. How can we assist you today?";
    } else if (userQuery.toLowerCase().includes('pos') || userQuery.toLowerCase().includes('point of sale')) {
      botResponse = "We offer multiple POS solutions tailored to your business type. Would you like to learn more?";
    }
    
    messages.value.push({ type: 'bot', text: botResponse });
  }, 1000);
}
</script>
