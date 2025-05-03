import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import Home from './pages/home/home.vue';
import RequestConsultation from './pages/Request_Consultation.vue';
import VCalendar from 'v-calendar';
import 'v-calendar/style.css';

// Create the router
const router = createRouter({
    history: createWebHistory(),
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
            path: '/speedybusinessloan',
            name: 'SpeedyBusinessLoan',
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
        },
        {
            path: '/chargeback-guide',
            name: 'ChargebackGuide',
            component: () => import('./pages/Chargeback_Guide.vue')
        },
        {
            path: '/understanding-chargebacks',
            name: 'UnderstandingChargebacks',
            component: () => import('./pages/Understanding_Chargebacks.vue')
        },
        {
            path: '/win-chargeback-dispute',
            name: 'WinChargebackDispute',
            component: () => import('./pages/Win_Chargeback_Dispute.vue')
        },
        {
            path: '/preventing-friendly-fraud',
            name: 'PreventingFriendlyFraud',
            component: () => import('./pages/Preventing_Friendly_Fraud.vue')
        },
        {
            path: '/documenting-transactions',
            name: 'DocumentingTransactions',
            component: () => import('./pages/Documenting_Transactions.vue')
        },
        {
            path: '/pos-system',
            name: 'POSSystem',
            component: () => import('./pages/POS_System.vue')
        },
        {
            path: '/refund-fight-chargeback',
            name: 'RefundFightChargeback',
            component: () => import('./pages/Refund_Fight_Chargeback.vue')
        },
        {
            path: '/delivery-order-chargebacks',
            name: 'DeliveryOrderChargebacks',
            component: () => import('./pages/Delivery_Order_Chargebacks.vue')
        },
        {
            path: '/staff-training',
            name: 'StaffTraining',
            component: () => import('./pages/Staff_Training.vue')
        },
        {
            path: '/customer-communication',
            name: 'CustomerCommunication',
            component: () => import('./pages/Customer_Communication.vue')
        },
        {
            path: '/tracking-analysis',
            name: 'TrackingAnalysis',
            component: () => import('./pages/TrackingAnalysis.vue')
        },
        {
            path: '/dual-pricing',
            name: 'dual-pricing',
            component: () => import('./pages/DualPricing.vue')
        },
        {
            path: '/pos-reseller',
            name: 'POSReseller',
            component: () => import('./pages/POS_reseller.vue')
        },
        {
            path: '/point-of-sale',
            name: 'PointOfSale',
            component: () => import('./pages/Point_of_sale.vue')
        },
        {
            path: '/dual-pricing-dealership',
            name: 'DualPricingDealership',
            component: () => import('./pages/DualPricingDealership.vue')
        },
        {
            path: '/partnership-forms',
            name: 'PartnershipForms',
            component: () => import('./pages/PartnershipForms.vue')
        },
        {
            path: '/partnership-forms/:type',
            name: 'PartnershipFormsType',
            component: () => import('./pages/PartnershipForms.vue')
        },
        {
            path: '/merchant-onboarding',
            name: 'MerchantOnboarding',
            component: () => import('./pages/Merchant_Onboarding.vue')
        },
        {
            path: '/industries/Adult-Industry',
            name: 'AdultIndustry',
            component: () => import('./pages/industries/Adult_Industry.vue')
        },
        {
            path: '/All_Industries',
            name: 'AllIndustries',
            component: () => import('./pages/All_Industries.vue')
        },
        {
            path: '/industries/Firearms',
            name: 'Firearms',
            component: () => import('./pages/industries/Firearems.vue')
        }
    ],
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            // Return savedPosition when using browser back/forward buttons
            return savedPosition
        } else if (to.hash) {
            // If the route has a hash, scroll to the anchor
            return { el: to.hash }
        } else {
            // Otherwise, scroll to top
            return { top: 0 }
        }
    }
});

// Create and mount the Vue application
const app = createApp({});
app.use(router);
app.use(VCalendar);
app.mount('#app');

export default router;
