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
            path: '/privacy-policy',
            name: 'PrivacyPolicy',
            component: () => import('./pages/PrivacyPolicy.vue')
        },
        {
            path: '/industries/adult-industry',
            name: 'AdultIndustry',
            component: () => import('./pages/industries/Adult_Industry.vue')
        },
        {
            path: '/all-industries',
            name: 'AllIndustries',
            component: () => import('./pages/All_Industries.vue')
        },
        {
            path: '/industries/firearms',
            name: 'Firearms',
            component: () => import('./pages/industries/Firearems.vue')
        },
        {
            path: '/industries/airline-booking',
            name: 'AirlineBooking',
            component: () => import('./pages/industries/Airline_Booking.vue')
        },
        {
            path: '/industries/auction-houses',
            name: 'AuctionHouses',
            component: () => import('./pages/industries/Auction_Houses.vue')
        },
        {
            path: '/industries/automotive',
            name: 'Automotive',
            component: () => import('./pages/industries/Automotive.vue')
        },
        {
            path: '/industries/background-checks',
            name: 'BackgroundChecks',
            component: () => import('./pages/industries/Background_Checks.vue')
        },
        {
            path: '/industries/bad-credit',
            name: 'BadCredit',
            component: () => import('./pages/industries/Bad_Credit.vue')
        },
        {
            path: '/industries/business-consulting',
            name: 'BusinessConsulting',
            component: () => import('./pages/industries/Business_Consulting.vue')
        },
        {
            path: '/industries/business-opportunities',
            name: 'BusinessOpportunities',
            component: () => import('./pages/industries/Business_Opportunities.vue')
        },
        {
            path: '/industries/cbd-oil',
            name: 'Cannabis',
            component: () => import('./pages/industries/CBD_Oil.vue')
        },
        {
            path: '/industries/coaching',
            name: 'Coaching',
            component: () => import('./pages/industries/Coaching.vue')
        },
        {
            path: '/industries/coin-collectibles',
            name: 'CoinCollectibles',
            component: () => import('./pages/industries/Coin_Collectibles.vue')
        },
        {
            path: '/industries/collection-agency',
            name: 'CollectionAgency',
            component: () => import('./pages/industries/Collection_Agency.vue')
        },
        {
            path: '/industries/credit-education-repair',
            name: 'CreditEducation',
            component: () => import('./pages/industries/Credit_Education.vue')
        },
        {
            path: '/industries/credit-repair',
            name: 'CreditRepair',
            component: () => import('./pages/industries/Credit_Education.vue')
        },
        {
            path: '/industries/credit-monitoring',
            name: 'CreditMonitoring',
            component: () => import('./pages/industries/Credit_Monitoring.vue')
        },
        {
            path: '/industries/cryptocurrency-trading',
            name: 'CryptocurrencyTrading',
            component: () => import('./pages/industries/Cryptocurrency_Trading.vue')
        },
        {
            path: '/industries/dating',
            name: 'Dating',
            component: () => import('./pages/industries/Dating.vue')
        },
        {
            path: '/industries/debt-settlement',
            name: 'DebtSettlement',
            component: () => import('./pages/industries/Debt_Settlement.vue')
        },
        {
            path: '/industries/document-preparation',
            name: 'DocumentPreparation',
            component: () => import('./pages/industries/Document_Preparation.vue')
        },
        {
            path: '/industries/fantasy-sports',
            name: 'FantasySports',
            component: () => import('./pages/industries/Fantasy_Sports.vue')
        },
        {
            path: '/industries/fintech',
            name: 'Fintech',
            component: () => import('./pages/industries/Fintech.vue')
        },
        {
            path: '/industries/forex-platforms',
            name: 'ForexPlatforms',
            component: () => import('./pages/industries/Forex_Platforms.vue')
        },
        {
            path: '/industries/gentlemans-club',
            name: 'GentlemansClub',
            component: () => import('./pages/industries/Gentlemans_Club.vue')
        },
        {
            path: '/industries/health-and-beauty',
            name: 'HealthBeauty',
            component: () => import('./pages/industries/Health_Beauty.vue')
        },
        {
            path: '/industries/high-volume',
            name: 'HighVolume',
            component: () => import('./pages/industries/High_Volume.vue')
        },
        {
            path: '/industries/hipaa-compliant',
            name: 'HipaaCompliant',
            component: () => import('./pages/industries/Hipaa_Compliant.vue')
        },
        {
            path: '/industries/insurance-premium-financing',
            name: 'Insurance',
            component: () => import('./pages/industries/Insurance.vue')
        },
        {
            path: '/industries/investment-advisory',
            name: 'InvestmentAdvisory',
            component: () => import('./pages/industries/Investment_Advisory.vue')
        },
        {
            path: '/industries/investment-recovery',
            name: 'InvestmentRecovery',
            component: () => import('./pages/industries/Investment_Recovery.vue')
        },
        {
            path: '/industries/male-enhancement',
            name: 'MaleEnhancement',
            component: () => import('./pages/industries/Male_Enhancement.vue')
        },
        {
            path: '/industries/money-transfer',
            name: 'MoneyTransfer',
            component: () => import('./pages/industries/Money_Transfer.vue')
        },
        {
            path: '/industries/multi-level-marketing',
            name: 'MultilevelMarketing',
            component: () => import('./pages/industries/Multilevel_Marketing.vue')
        },
        {
            path: '/industries/nonprofit',
            name: 'Nonprofit',
            component: () => import('./pages/industries/Nonprofit.vue')
        },
        {
            path: '/industries/nutraceuticals',
            name: 'Nutraceuticals',
            component: () => import('./pages/industries/Nutraceuticals.vue')
        },
        {
            path: '/industries/online-gaming',
            name: 'OnlineGaming',
            component: () => import('./pages/industries/Online_Gaming.vue')
        },
        {
            path: '/industries/pawn-shops',
            name: 'Pawnshop',
            component: () => import('./pages/industries/Pawnshop.vue')
        },
        {
            path: '/industries/pay-lenders',
            name: 'PaydayLending',
            component: () => import('./pages/industries/Payday_Lender.vue')
        },
        {
            path: '/industries/peer-to-peer-lending',
            name: 'PeerToPeerLending',
            component: () => import('./pages/industries/P2P_Lending.vue')
        },
        {
            path: '/industries/pharmacy',
            name: 'Pharmacy',
            component: () => import('./pages/industries/Pharmacy.vue')
        },
        {
            path: '/industries/precious-metals-jewelry',
            name: 'PreciousMetalsJewelry',
            component: () => import('./pages/industries/Precious_Metal_Jewelry.vue')
        },
        {
            path: '/industries/property-management',
            name: 'PropertyManagement',
            component: () => import('./pages/industries/Property_Management.vue')
        },
        {
            path: '/industries/restaurant',
            name: 'Restaurant',
            component: () => import('./pages/industries/Restaurant.vue')
        },
        {
            path: '/industries/shopping-membership-club',
            name: 'ShoppingMembershipClub',
            component: () => import('./pages/industries/Shopping_Membership_Club.vue')
        },
        {
            path: '/industries/skill-based-gaming',
            name: 'SkillbasedGaming',
            component: () => import('./pages/industries/Skillbased_Gaming.vue')
        },
        {
            path: '/industries/sweepstakes',
            name: 'Sweepstakes',
            component: () => import('./pages/industries/Sweepstake.vue')
        },
        {
            path: '/industries/skin-hair-care',
            name: 'SkinHairCare',
            component: () => import('./pages/industries/Skin_Hair_Care.vue')
        },
        {
            path: '/industries/social-gaming',
            name: 'SocialGaming',
            component: () => import('./pages/industries/Social_Gaming.vue')
        },
        {
            path: '/industries/sports-betting',
            name: 'SportsBetting',
            component: () => import('./pages/industries/Sports_Betting.vue')
        },
        {
            path: '/industries/tech-support',
            name: 'TechSupport',
            component: () => import('./pages/industries/Tech_Support.vue')
        },
        {
            path: '/industries/telemedicine',
            name: 'Telemedicine',
            component: () => import('./pages/industries/Telemedicine.vue')
        },
        {
            path: '/industries/trading-platforms',
            name: 'TradingPlatform',
            component: () => import('./pages/industries/Trading_Platform.vue')
        },
        {
            path: '/industries/travel',
            name: 'Travel',
            component: () => import('./pages/industries/Travel.vue')
        },
        {
            path: '/industries/vape',
            name: 'Vape',
            component: () => import('./pages/industries/Vape.vue')
        },
        {
            path: '/industries/web-design-seo',
            name: 'Web',
            component: () => import('./pages/industries/Web.vue')
        },
        {
            path: '/industries/franchise',
            name: 'Franchise',
            component: () => import('./pages/industries/Franchise.vue')
        },
        {
            path: '/industries/property-management',
            name: 'PropertyManagement',
            component: () => import('./pages/industries/Property_Management.vue')
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
