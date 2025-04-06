import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from 'vue-router';
import Home from './pages/home/home.vue';
import RequestConsultation from './pages/Request_Consultation.vue';
import VCalendar from 'v-calendar';
import 'v-calendar/style.css';

// Create the router
const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/request-consultation',
            name: 'RequestConsultation',
            component: RequestConsultation
        }
    ]
});

// Create and mount the Vue application
const app = createApp({});
app.use(router);
app.use(VCalendar);
app.mount('#app');

export default router;
