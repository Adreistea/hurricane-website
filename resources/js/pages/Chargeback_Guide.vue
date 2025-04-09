<template>
  <div class="chargeback-guide">
    <NavBar />

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container mx-auto px-4 py-20 md:py-32">
        <div class="hero-content max-w-4xl mx-auto text-center">
          <h1 
            class="text-3xl md:text-5xl font-bold mb-6 text-gray-800 slide-in-left"
          >
            Understanding Chargebacks
          </h1>
          <p 
            class="text-lg md:text-xl text-gray-600 mb-8 slide-in-right delay-200"
          >
            Learn how to prevent, manage, and dispute chargebacks to protect your business
          </p>
        </div>
      </div>
    </section>

    <!-- Table of Contents -->
    <section class="toc-section bg-gray-50 py-10">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-2xl font-semibold mb-6 text-gray-800">In This Guide:</h2>
          <div class="toc-grid grid md:grid-cols-2 gap-4">
            <a href="#section-1" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <span>Understanding Chargebacks</span>
              </div>
            </a>
            <a href="#section-2" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                  </svg>
                </div>
                <span>How to Win a Dispute</span>
              </div>
            </a>
            <a href="#section-3" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </div>
                <span>Preventing Friendly Fraud</span>
              </div>
            </a>
            <a href="#section-4" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </div>
                <span>Documenting Transactions</span>
              </div>
            </a>
            <a href="#section-5" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <span>Using Your POS System</span>
              </div>
            </a>
            <a href="#section-6" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
                </div>
                <span>When to Refund vs. Fight</span>
              </div>
            </a>
            <a href="#section-7" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                  </svg>
                </div>
                <span>Delivery Order Chargebacks</span>
              </div>
            </a>
            <a href="#section-8" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </div>
                <span>Staff Training</span>
              </div>
            </a>
            <a href="#section-9" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                  </svg>
                </div>
                <span>Customer Communication</span>
              </div>
            </a>
            <a href="#section-10" class="toc-item p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
              <div class="flex items-center">
                <div class="toc-icon mr-3 text-primary-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                </div>
                <span>Tracking & Analysis</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div id="guide-content" class="guide-content py-16">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
          <!-- Section 1 -->
          <section id="section-1" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Understanding Chargebacks: A Guide for Coffee Shop and Restaurant Owners</h2>
            <div class="prose prose-lg">
              <p>Chargebacks can be frustrating and costly for coffee shop and restaurant owners. When a customer disputes a charge with their credit card issuer, the funds are withdrawn from your account-often without warning. While some chargebacks are legitimate, many are preventable with the right systems in place.</p>
              <p>The first step in responding to a chargeback is understanding the reason code. This code explains why the charge was disputed: unauthorized transaction, item not received, quality issues, or duplicate charges. Once you know the reason, gather your evidence. For restaurants, this could include signed receipts, order tickets, POS transaction records, or even security footage.</p>
              <p>Timeliness is key-respond to the chargeback within the window allowed by your payment processor. Submit all documentation clearly and concisely. Explain the situation, provide evidence that the transaction was valid, and demonstrate that you followed best practices.</p>
              <p>Prevention is also vital. Ensure your staff checks ID for large transactions or card-not-present scenarios. Make your refund and cancellation policies clear and visible. Use a strong POS system that captures digital signatures and timestamps.</p>
              <p>Lastly, remember chargebacks are part of doing business, but they don't have to eat into your profits. By understanding the process and being proactive, you can protect your coffee shop or restaurant from unnecessary losses.</p>
            </div>
          </section>

          <!-- Section 2 -->
          <section id="section-2" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">How to Win a Chargeback Dispute: A Step-by-Step Process</h2>
            <div class="prose prose-lg">
              <p>Winning a chargeback dispute starts with preparation. For coffee shop and restaurant owners, being organized is your best defense. The first thing to do is review the chargeback notification for the reason code and deadline. Each code requires a different type of evidence.</p>
              <p>Next, gather your documentation. This could include order details, signed receipts, time-stamped POS records, loyalty program check-ins, photos of takeout or dine-in tickets, and even surveillance footage if available. Highlight any proof that shows the transaction was authorized and completed properly.</p>
              <p>When writing your response, be clear and factual. Avoid emotional language and focus on explaining what happened, referencing your attached evidence. For example: 'Customer placed a mobile order for a cappuccino and sandwich. Order was picked up at 2:15 PM, confirmed by receipt and camera footage.'</p>
              <p>Use a reliable format when submitting documents. Label each piece clearly (e.g., 'Receipt - 4/1/25, Order #1095') and submit them as PDFs or JPEGs, depending on processor requirements.</p>
              <p>Finally, follow up with your payment processor if you don't hear back. Not every dispute will go in your favor, but detailed responses and organized records will greatly increase your chances of winning chargebacks and protecting your revenue.</p>
            </div>
          </section>

          <!-- Section 3 -->
          <section id="section-3" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Preventing Friendly Fraud in Your Café or Restaurant</h2>
            <div class="prose prose-lg">
              <p>Friendly fraud occurs when a customer makes a purchase, then disputes the charge even though the transaction was valid. It's common in restaurants and cafés where customers may forget they made the purchase or regret spending money.</p>
              <p>To reduce friendly fraud, set clear expectations and create a paper trail. Always provide itemized receipts and make your return/refund policy visible-on the counter, your website, and even on the receipt. If a customer signs for a purchase, keep that signature on file.</p>
              <p>Use a POS system that tracks orders with time stamps, item descriptions, and employee IDs. Encourage staff to enter customer names or phone numbers when taking orders, especially for takeout or large orders. For phone or online orders, send order confirmations by text or email.</p>
              <p>Train your staff to recognize suspicious behavior and verify customer identity if something seems off. Asking for ID isn't rude-it's protection. Make sure all staff follow the same protocol to maintain consistency.</p>
              <p>Lastly, consider enrolling in chargeback alert programs that notify you of a dispute before it becomes a chargeback. These give you the chance to issue a refund directly and avoid fees. A proactive approach to friendly fraud helps maintain trust while protecting your business.</p>
            </div>
          </section>

          <!-- Section 4 -->
          <section id="section-4" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Documenting Transactions: Your First Line of Defense</h2>
            <div class="prose prose-lg">
              <p>Proper documentation can make or break your chargeback case. In the fast-paced world of restaurants and coffee shops, keeping track of transactions isn't just good practice-it's essential.</p>
              <p>Every transaction should generate a detailed receipt that includes the date, time, items purchased, amount, and payment method. Make sure your POS system stores digital copies automatically. If customers sign or tip, keep a copy of the signed receipt as well.</p>
              <p>Train your staff to note any special instructions, delivery confirmations, or unusual situations in the system. If a customer disputes an order for being wrong or missing, your staff's notes can support your case.</p>
              <p>For online or phone orders, store email confirmations or delivery app receipts. If you use delivery drivers, have them log delivery times and request signatures or photos of where the food was left.</p>
              <p>Surveillance footage can be especially helpful. If your cameras show a customer picking up their order, that's powerful evidence in a dispute. Keep video footage for at least 30 days if possible.</p>
              <p>Consistent documentation builds a strong foundation for responding to chargebacks. It also sends a message to card issuers that your business takes fraud prevention seriously.</p>
            </div>
          </section>

          <!-- Section 5 -->
          <section id="section-5" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Using Your POS System to Fight Chargebacks</h2>
            <div class="prose prose-lg">
              <p>Your POS system is more than just a cash register-it's your best defense against chargebacks. Most modern POS systems can collect detailed records of every transaction, including timestamps, itemized orders, employee logins, and payment method details.</p>
              <p>To leverage this, make sure your staff uses the POS consistently. Each order should include the customer's name (especially for takeout), the dining method (dine-in, pickup, delivery), and any special instructions. This creates a full picture of the transaction.</p>
              <p>For dine-in customers, capturing a digital signature for large or disputed transactions can be helpful. Tip amounts should always be included on receipts, and you should retain both merchant and customer copies, especially for card-present sales.</p>
              <p>Some systems even allow you to attach notes or photographs to transactions-like a photo of the food order or the pickup shelf. These details can make a big difference in a dispute.</p>
              <p>Additionally, keep your POS software updated to ensure it maintains PCI compliance and keeps sensitive customer data secure. If your system integrates with delivery apps or online ordering, make sure those transactions also sync properly for recordkeeping.</p>
              <p>In a chargeback scenario, exporting your POS records into a simple, organized PDF can help you present your evidence quickly and professionally. The better your system, the stronger your defense.</p>
            </div>
          </section>

          <!-- Remaining sections... -->
          <section id="section-6" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">When to Refund and When to Fight a Chargeback</h2>
            <div class="prose prose-lg">
              <p>As a coffee shop or restaurant owner, it's important to pick your battles. Not every chargeback is worth fighting, especially if the dispute amount is small or the customer truly had a poor experience.</p>
              <p>Start by reviewing the reason code. If it's due to fraud (like a stolen card), and you didn't follow proper verification steps, it may be easier to issue a refund and move on. However, if you have strong evidence the transaction was valid-signed receipts, camera footage, and detailed POS records-then it may be worth your time to challenge it.</p>
              <p>Consider the customer's history. Is this a regular guest or someone with repeated complaints? If it's the latter, defending the chargeback helps prevent repeat abuse.</p>
              <p>Also factor in your processor's chargeback fee. Sometimes, disputing a $4 coffee charge with a $25 fee just isn't worth it. But if the ticket was $100 for catering or a group order, defending your revenue makes more sense.</p>
              <p>In some cases, issuing a refund directly can help de-escalate the situation and avoid additional fees. Use your judgment-and always document your decision.</p>
              <p>Ultimately, knowing when to refund versus when to fight can save you time, money, and customer goodwill.</p>
            </div>
          </section>

          <section id="section-7" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Responding to Chargebacks for Delivery Orders</h2>
            <div class="prose prose-lg">
              <p>Delivery orders are particularly vulnerable to chargebacks because the customer isn't present during the transaction. But that doesn't mean you're defenseless.</p>
              <p>To protect your business, document every part of the delivery process. Use order confirmations, delivery app logs, and customer contact records. If your delivery staff snap a photo of the food drop-off or get a signature, save that as evidence.</p>
              <p>Include customer names and phone numbers in the POS. Match delivery timestamps with the POS receipt. If you use third-party services like Uber Eats or DoorDash, keep copies of the completed delivery status.</p>
              <p>If a chargeback occurs, gather these records and submit them quickly. Show that the order was placed, fulfilled, and delivered. Include GPS logs if available.</p>
              <p>You can also contact the delivery platform to help fight the dispute. Some platforms have their own chargeback procedures and may provide additional documentation.</p>
              <p>In the future, make your delivery terms clear at checkout-especially for no-contact delivery or policies about incorrect addresses. With the right system in place, you can reduce risk while continuing to offer great service.</p>
            </div>
          </section>

          <section id="section-8" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">How Staff Training Reduces Chargebacks</h2>
            <div class="prose prose-lg">
              <p>Well-trained staff are your frontline defense against chargebacks. Every employee-from baristas to servers to cashiers-should know how to handle transactions properly and spot red flags.</p>
              <p>Train your team to always offer receipts, check ID for large or suspicious purchases, and confirm names on mobile or phone orders. If a customer claims an item is missing, staff should document the complaint in the POS.</p>
              <p>For in-person orders, staff should ensure the correct card is used, especially if customers use mobile wallets. Always use chip or contactless payments when possible, since swiped transactions are less secure and harder to defend.</p>
              <p>Teach staff to note order modifications and customer complaints clearly. If a refund is issued, it should be recorded in the system, with a note as to why.</p>
              <p>Regularly reviewing chargeback cases during staff meetings can be helpful too. Let employees know what went wrong and how it could be prevented next time.</p>
              <p>Chargebacks are often caused by avoidable miscommunications or oversights. By equipping your team with the right knowledge and expectations, you minimize the chances of disputes and build a culture of accountability.</p>
            </div>
          </section>

          <section id="section-9" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Chargeback Policies: Communicating with Customers</h2>
            <div class="prose prose-lg">
              <p>Clear communication with your customers can stop a chargeback before it starts. Many disputes happen simply because customers don't recognize the charge or misunderstand a policy.</p>
              <p>Your receipt should clearly list your business name, address, and phone number-especially if your legal name is different from your store's name. That way, the charge on a customer's bank statement won't look unfamiliar.</p>
              <p>Display your refund and return policies prominently near the register, on your website, and on printed receipts. Make sure staff are familiar with these policies and can explain them confidently.</p>
              <p>For online orders, email a confirmation that includes what was ordered, pickup/delivery time, and contact info for any questions. This prevents confusion and encourages customers to reach out before disputing the charge.</p>
              <p>If a guest complains or has a bad experience, offer a resolution on the spot. A refund or replacement might cost a few dollars now but save you from fees and penalties later.</p>
              <p>By being proactive and approachable, you reduce frustration and increase the chance that customers will come to you first-not their bank.</p>
            </div>
          </section>

          <section id="section-10" class="content-section mb-16 scroll-reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Tracking and Analyzing Chargebacks to Improve Operations</h2>
            <div class="prose prose-lg">
              <p>Chargebacks aren't just a financial headache-they can also be a learning opportunity. Tracking and analyzing chargebacks can help you uncover patterns and improve your restaurant's operations.</p>
              <p>Start by keeping a log of all disputes. Note the date, amount, reason code, and outcome. Over time, you may see trends. Are disputes happening more with online orders? Certain staff members? Specific menu items?</p>
              <p>Once you identify a pattern, dig into the root cause. If many chargebacks cite order not received, maybe your delivery process needs refining. If customers claim unauthorized transaction, your card verification procedures might need work.</p>
              <p>Use this data in staff training and system updates. Maybe you'll change your refund policy, upgrade your POS, or start taking photos of delivery drop-offs.</p>
              <p>Your payment processor may offer reporting tools or alerts to help you monitor your chargeback ratio. Keeping this ratio low helps you avoid penalties or higher processing fees.</p>
              <p>By turning chargeback data into insights, you can take proactive steps to boost customer satisfaction, prevent fraud, and protect your bottom line.</p>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <section id="contact" class="cta-section bg-primary-600 py-16 text-white">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-6">Need Help Managing Chargebacks?</h2>
          <p class="text-xl mb-8">Our payment processing experts can help you implement systems to reduce chargebacks and protect your revenue.</p>
          <div class="cta-buttons">
            <a href="/contact" class="btn-white">Contact Us</a>
            <a href="/demo" class="btn-outline-white ml-4">Schedule a Demo</a>
          </div>
        </div>
      </div>
    </section>

    <AppFooter />
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import NavBar from './NavBar.vue';
import AppFooter from './AppFooter.vue';

onMounted(() => {
  // Scroll to section if URL has hash
  if (window.location.hash) {
    const id = window.location.hash.substring(1);
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
  // Initialize animation observer for scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  
  // Observe all elements with scroll-reveal class
  document.querySelectorAll('.scroll-reveal').forEach(element => {
    observer.observe(element);
  });
  
  // Add slide-in animations for hero section
  const slideElements = document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal, .card-reveal');
  slideElements.forEach(element => {
    element.classList.add('animate');
  });
});
</script>

<style scoped>
/* Add these font imports at the top of your style section */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Apply font families to elements */
h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, blockquote, li {
  font-family: 'Inter', system-ui, sans-serif;
}

/* Refine heading styles */
h1 {
  font-weight: 700;
  line-height: 1.1;
}

h2 {
  font-weight: 600;
  line-height: 1.2;
}

h3 {
  font-weight: 600;
  line-height: 1.3;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(to right, #ffffff, #f3f4f6);
  position: relative;
}

.hero-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('/img/pattern-dots.svg');
  background-size: 20px;
  opacity: 0.1;
  pointer-events: none;
}

/* Button Styles */
.btn-primary {
  display: inline-block;
  background-color: #973131;
  color: white;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-primary:hover {
  background-color: #7e2929;
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.btn-secondary {
  display: inline-block;
  background-color: transparent;
  color: #374151;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border: 2px solid #d1d5db;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-secondary:hover {
  border-color: #9ca3af;
  transform: translateY(-2px);
}

.btn-white {
  display: inline-block;
  background-color: white;
  color: #973131;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-white:hover {
  background-color: #f9fafb;
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.btn-outline-white {
  display: inline-block;
  background-color: transparent;
  color: white;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border: 2px solid white;
  border-radius: 0.375rem;
  transition: all 0.3s ease;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0.03em;
}

.btn-outline-white:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transform: translateY(-2px);
}

/* Table of Contents */
.toc-section {
  border-top: 1px solid #e5e7eb;
  border-bottom: 1px solid #e5e7eb;
}

.toc-item {
  text-decoration: none;
  color: #1f2937;
}

.toc-icon {
  flex-shrink: 0;
}

/* Content Sections */
.guide-content {
  color: #374151;
}

.content-section:not(:last-child) {
  border-bottom: 1px solid #e5e7eb;
  padding-bottom: 4rem;
}

/* CTA Section */
.cta-section {
  background-color: #973131;
  background-image: linear-gradient(135deg, #973131 0%, #7e2929 100%);
}

/* Add responsive typography */
@media (max-width: 768px) {
  .prose {
    font-size: 1rem;
  }
  
  .content-section h2 {
    font-size: 1.75rem;
  }
}

/* Override default prose styles */
.prose p {
  margin-bottom: 1.25rem;
  line-height: 1.6;
  font-weight: 400;
  font-family: 'Inter', system-ui, sans-serif;
}

.prose a {
  color: #973131;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s;
  font-family: 'Inter', system-ui, sans-serif;
}

.prose a:hover {
  color: #7e2929;
  text-decoration: underline;
}

.prose strong {
  color: #1f2937;
  font-weight: 600;
}

/* Add animation to sections */
.content-section {
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.content-section:hover {
  transform: translateY(-5px);
}

/* Base animations */
.scroll-reveal {
  transform: translateY(20px);
  opacity: 0;
  transition: all 0.6s ease-out;
}

.scroll-reveal.animate {
  opacity: 1 !important;
  transform: translateY(0);
}

/* Text animations */
.text-reveal {
  position: relative;
  overflow: hidden;
}

.text-reveal-content {
  transform: translateY(100%);
  transition: transform 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.text-reveal.animate .text-reveal-content {
  transform: translateY(0);
}

/* Slide animations */
.slide-in-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: all 0.8s ease-out;
}

.slide-in-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.8s ease-out;
}

.slide-in-left.animate,
.slide-in-right.animate {
  opacity: 1;
  transform: translateX(0);
}

/* Card animations */
.card-reveal {
  opacity: 0;
  transform: scale(0.9);
  transition: all 0.8s ease-out;
}

.card-reveal.animate {
  opacity: 1;
  transform: scale(1);
}

/* Delay utility classes */
.delay-100 {
  transition-delay: 0.1s;
}

.delay-200 {
  transition-delay: 0.2s;
}

.delay-300 {
  transition-delay: 0.3s;
}

.delay-400 {
  transition-delay: 0.4s;
}

.delay-500 {
  transition-delay: 0.5s;
}

/* Enhanced Animations from home.vue */
.animate-fade-in-slide-up {
  animation: fadeInSlideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  will-change: transform, opacity;
  backface-visibility: hidden;
}

.animation-delay-200 {
  animation-delay: 0.2s;
}

.animation-delay-300 {
  animation-delay: 0.3s;
}

.animation-delay-400 {
  animation-delay: 0.4s;
}

.animation-delay-600 {
  animation-delay: 0.6s;
}

@keyframes fadeInSlideUp {
  from {
    opacity: 0;
    transform: translateY(30px);
    filter: blur(5px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
}

/* Hover animations */
.hover-lift {
  transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), 
              box-shadow 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.hover-lift:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>
