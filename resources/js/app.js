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
        },
        {
            path: '/mobile-processing',
            name: 'MobileProcessing',
            component: () => import('./pages/Mobile_Processing.vue')
        },
        {
            path: '/web-commerce',
            name: 'WebCommerce',
            component: () => import('./pages/Web_Commerce.vue')
        },
        {
            path: '/text-qr',
            name: 'TextQr',
            component: () => import('./pages/Text_Qr.vue')
        },
        {
            path: '/integrations',
            name: 'Integrations',
            component: () => import('./pages/Integrations.vue')
        },
        {
            path: '/maxx-pay',
            name: 'MaxxPay',
            component: () => import('./pages/Maxx_Pay.vue')
        },
        {
            path: '/pos-terminals',
            name: 'PosTerminals',
            component: () => import('./pages/Pos_Terminal.vue')
        },
        {
            path: '/surcharge',
            name: 'Surcharge',
            component: () => import('./pages/Surcharge.vue')
        },
        {
            path: '/bizfunds-cash',
            name: 'BizFundsCash',
            component: () => import('./pages/BizFunds_Cash.vue')
        },
        {
            path: '/gift-loyalty',
            name: 'GiftLoyalty',
            component: () => import('./pages/Gift_Loyalty.vue')
        },
        {
            path: '/web-design',
            name: 'WebDesign',
            component: () => import('./pages/Web_Design.vue')
        },
        {
            path: '/retail',
            name: 'Retail',
            component: () => import('./pages/Retail.vue')
        },
        {
            path: '/ecommerce',
            name: 'Ecommerce',
            component: () => import('./pages/Ecommerce.vue')
        },
        {
            path: '/restaurants',
            name: 'Restaurants',
            component: () => import('./pages/Restaurants.vue')
        },
        {
            path: '/professional-services',
            name: 'ProfessionalServices',
            component: () => import('./pages/Professional_Services.vue')
        },
        {
            path: '/skill-trade',
            name: 'SkillTrade',
            component: () => import('./pages/Skill_Trade.vue')
        },
        {
            path: '/specialty-business',
            name: 'SpecialtyBusiness',
            component: () => import('./pages/Specialty_Business.vue')
        },
        {
            path: '/agents',
            name: 'Agents',
            component: () => import('./pages/Agents.vue')
        },
        {
            path: '/payment-partnerships',
            name: 'PaymentPartnerships',
            component: () => import('./pages/Payments_Partnership.vue')
        },
        {
            path: '/lightbox',
            name: 'Lightbox',
            component: () => import('./pages/lightbox.vue')
        },
        {
            path: '/lightbox-config',
            name: 'LightboxConfig',
            component: () => import('./pages/lightbox_config.vue')
        }
    ]
});

// Create and mount the Vue application
const app = createApp({});
app.use(router);
app.use(VCalendar);
app.mount('#app');

export default router;
