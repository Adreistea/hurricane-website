import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import Home from './pages/home/home.vue';

// Create the router
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        }
    ]
});

// Create and mount the Vue application
const app = createApp({});
app.use(router);
app.mount('#app');
