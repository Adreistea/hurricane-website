<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <NavBar />
    
    <!-- Main Content Slot -->
    <slot></slot>
    
    <AppFooter />
  </div>
</template>

<script setup>
import { ref } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';
</script>
