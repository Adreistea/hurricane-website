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
</template>

<script setup>
import { ref } from 'vue';

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
  width: 340px;
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
  color: black;
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
  max-height: 320px;
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
  color: black;
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
</style> 