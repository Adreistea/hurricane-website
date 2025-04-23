<template>
    <MainLayout>
      <!-- Hero Section -->
      <section class="hero-section bg-gradient-to-r from-red-900 to-red-700 text-white py-20">
        <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 slide-in-left">
              Dual Pricing: A Game-Changer for Small Businesses
            </h1>
            <p class="text-xl md:text-2xl opacity-90 slide-in-right">
              Eliminate credit card fees and boost your bottom line with transparent pricing
            </p>
          </div>
        </div>
      </section>
  
      <!-- Floating Suggestion Box -->
      <div class="suggestion-box">
        <span class="text-xs text-red-600 font-semibold uppercase tracking-wide block mb-1">Suggested Reading</span>
        <h4 class="text-lg font-bold text-red-700 mb-1">Boost Your Dealership's Profits with Hurricane Payments</h4>
        <p class="text-sm text-red-600 mb-2">See how dual pricing helps auto dealers eliminate transaction fees and grow their bottom line — without raising prices.</p>
        <router-link to="/dual-pricing-dealership" class="text-red-700 hover:text-red-800 font-medium">Read Article →</router-link>
      </div>
  
      <!-- Main Content -->
      <article class="py-16">
        <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto">
            <!-- Introduction -->
            <div class="prose prose-lg mx-auto mb-12">
              <p class="lead-paragraph">
                In today's increasingly digital and fee-heavy financial world, small businesses are looking for new ways to protect their profits and reduce overhead. One solution that's rapidly gaining popularity is dual pricing—a transparent, consumer-friendly pricing strategy that helps merchants offset the rising costs of credit card processing. But what exactly is dual pricing, how does it work, and what are the real benefits for business owners?
              </p>
              <p>
                This article breaks down the mechanics of dual pricing, highlights the legal framework that supports it, and outlines why more merchants are adopting this innovative model to take control of their bottom line.
              </p>
            </div>
  
            <!-- What Is Dual Pricing Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">What Is Dual Pricing?</h2>
              <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="grid md:grid-cols-2 gap-8">
                  <div class="price-card">
                    <div class="text-center p-6 rounded-lg bg-gradient-to-br from-green-50 to-green-100">
                      <h3 class="text-xl font-bold text-green-800 mb-4">Cash Price</h3>
                      <p class="text-gray-700">A lower price for customers who pay with cash</p>
                    </div>
                  </div>
                  <div class="price-card">
                    <div class="text-center p-6 rounded-lg bg-gradient-to-br from-blue-50 to-blue-100">
                      <h3 class="text-xl font-bold text-blue-800 mb-4">Card Price</h3>
                      <p class="text-gray-700">A slightly higher price for customers who pay with credit or debit cards</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-gray-700">
                <p class="mb-4">
                  Dual pricing, also referred to as cash discounting, is a pricing strategy where businesses display two prices for every product or service. The goal is to pass along the cost of credit card processing to the card-using customer, rather than the merchant absorbing that cost. This gives customers the freedom to choose how they want to pay—while helping merchants recoup fees that can eat away at their margins.
                </p>
                <p>
                  It's important to distinguish dual pricing from credit card surcharging. While both pass costs to the cardholder, surcharging adds a fee on top of the listed price. Dual pricing, by contrast, simply offers two separate prices upfront—making it more compliant with card brand rules and less confusing to consumers.
                </p>
              </div>
            </section>
  
            <!-- How It Works Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">How Dual Pricing Works</h2>
              <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="example-pricing mb-8">
                  <h3 class="text-xl font-bold mb-4">Example Pricing Structure:</h3>
                  <div class="grid md:grid-cols-2 gap-4">
                    <div class="price-example p-4 bg-gray-50 rounded-lg">
                      <p class="text-lg font-semibold">Coffee (Cash Price)</p>
                      <p class="text-3xl font-bold text-green-600">$5.00</p>
                    </div>
                    <div class="price-example p-4 bg-gray-50 rounded-lg">
                      <p class="text-lg font-semibold">Coffee (Card Price)</p>
                      <p class="text-3xl font-bold text-blue-600">$5.25</p>
                    </div>
                  </div>
                </div>
                <div class="text-gray-700">
                  <p class="mb-4">
                    Let's break down a practical example. A coffee shop sells a latte that costs $5.00 if paid in cash. If a customer chooses to pay with a card, the card price might be $5.25, reflecting the typical processing fee of around 3–4%.
                  </p>
                  <p class="mb-4">
                    The business signs are updated to clearly disclose the dual pricing model:
                  </p>
                  <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <p class="mb-2"><strong>Cash Price:</strong> $5.00</p>
                    <p><strong>Card Price:</strong> $5.25</p>
                  </div>
                  <p class="mb-4">
                    When the customer pays, the point-of-sale (POS) system automatically applies the correct price depending on the payment method. If cash is selected, no extra charges are added. If a card is used, the system switches to the card price, which includes the cost of processing.
                  </p>
                  <p>
                    This seamless process happens behind the scenes, and the customer receives a receipt showing the final price based on their payment choice.
                  </p>
                </div>
              </div>
            </section>
  
            <!-- Legal Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">Why Dual Pricing Is Legal</h2>
              <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-gray-700">
                  <p class="mb-4">
                    Thanks to regulatory changes and clarifications over the past decade, dual pricing is legal in all 50 states when implemented correctly. Businesses must meet certain disclosure requirements to ensure customers are aware of the pricing structure before making a purchase.
                  </p>
                  <p class="mb-4">
                    Major card brands like Visa and Mastercard have specific guidelines about transparency and signage. The cash price must be the advertised price, and the card price must be clearly posted before checkout. When done properly, dual pricing is fully compliant and protected by consumer law.
                  </p>
                  <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500 mb-4">
                    <h4 class="text-lg font-bold text-blue-800 mb-2">Did You Know?</h4>
                    <p class="text-gray-700">
                      Many business owners mistakenly believe they're not allowed to offer discounts for cash. In fact, the Durbin Amendment (part of the Dodd-Frank Act of 2010) specifically permits merchants to offer discounts for non-card payments. This gives merchants more flexibility in how they manage payment acceptance.
                    </p>
                  </div>
                </div>
              </div>
            </section>
  
            <!-- Benefits Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">Benefits of Dual Pricing for Merchants</h2>
              
              <!-- Benefits Cards -->
              <div class="grid md:grid-cols-2 gap-8 mb-10">
                <div class="benefit-card bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                  <div class="icon-wrapper mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold mb-2">1. Eliminates Credit Card Processing Fees</h3>
                  <p class="text-gray-600">Stop losing 2.5% to 4% of every card transaction to processing fees.</p>
                  <div class="mt-4">
                    <button @click="toggleDetail('fees')" class="text-red-600 font-medium flex items-center">
                      Read more
                      <svg class="w-4 h-4 ml-1" :class="{'rotate-180': expandedDetail === 'fees'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    <div v-if="expandedDetail === 'fees'" class="mt-3 text-gray-700 text-sm bg-gray-50 p-4 rounded-lg">
                      <p class="mb-2">
                        The most immediate benefit is financial. Credit card processing fees can take a big bite out of profits—anywhere from 2.5% to 4% per transaction. With dual pricing, merchants shift that burden to the customer who chooses the convenience of using a card. This means more money stays in the business.
                      </p>
                      <p>
                        Over time, especially in high-volume environments like coffee shops, restaurants, or convenience stores, this can translate into thousands of dollars in savings per year.
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="benefit-card bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                  <div class="icon-wrapper mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold mb-2">2. Increases Profit Margins</h3>
                  <p class="text-gray-600">Maintain competitive pricing while improving your bottom line.</p>
                  <div class="mt-4">
                    <button @click="toggleDetail('margins')" class="text-red-600 font-medium flex items-center">
                      Read more
                      <svg class="w-4 h-4 ml-1" :class="{'rotate-180': expandedDetail === 'margins'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    <div v-if="expandedDetail === 'margins'" class="mt-3 text-gray-700 text-sm bg-gray-50 p-4 rounded-lg">
                      <p class="mb-2">
                        Without the weight of processing fees, every sale becomes more profitable. This is especially critical for businesses operating on thin margins or facing inflation-driven cost increases. Dual pricing helps restore profitability without raising overall prices across the board.
                      </p>
                      <p>
                        By offering a discount for cash rather than marking up all prices to cover card fees, businesses can stay competitive and fair in their pricing model.
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="benefit-card bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                  <div class="icon-wrapper mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold mb-2">3. Supports Card Payments</h3>
                  <p class="text-gray-600">Continue accepting cards while offsetting their processing costs.</p>
                  <div class="mt-4">
                    <button @click="toggleDetail('cards')" class="text-red-600 font-medium flex items-center">
                      Read more
                      <svg class="w-4 h-4 ml-1" :class="{'rotate-180': expandedDetail === 'cards'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    <div v-if="expandedDetail === 'cards'" class="mt-3 text-gray-700 text-sm bg-gray-50 p-4 rounded-lg">
                      <p class="mb-2">
                        In today's economy, most consumers prefer the convenience and security of paying with cards. Whether it's credit, debit, or digital wallets like Apple Pay, card-based transactions have become the standard—especially in industries like restaurants, retail, and service-based businesses.
                      </p>
                      <p class="mb-2">
                        Dual pricing doesn't discourage card use—it simply creates a fair and transparent structure that accounts for the real cost of processing those payments. Instead of raising prices across the board to cover card fees, merchants display two prices: a cash price and a card price.
                      </p>
                      <p class="mb-2">
                        The card price includes the processing fee, but it's not a hidden surcharge tacked on at checkout—it's disclosed upfront as part of the listed pricing. This builds trust with cardholders and avoids the frustration of unexpected fees.
                      </p>
                      <p>
                        For card-heavy industries, this makes dual pricing an ideal solution: it allows for the continued use of modern payment methods without sacrificing profitability.
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="benefit-card bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                  <div class="icon-wrapper mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold mb-2">4. Customer Transparency</h3>
                  <p class="text-gray-600">Clear pricing builds trust with your customers.</p>
                  <div class="mt-4">
                    <button @click="toggleDetail('transparency')" class="text-red-600 font-medium flex items-center">
                      Read more
                      <svg class="w-4 h-4 ml-1" :class="{'rotate-180': expandedDetail === 'transparency'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    <div v-if="expandedDetail === 'transparency'" class="mt-3 text-gray-700 text-sm bg-gray-50 p-4 rounded-lg">
                      <p class="mb-2">
                        One of the key advantages of dual pricing over surcharging is its simplicity. Customers see both prices upfront and can make an informed decision. There's no surprise fee added at the register or extra percentage tacked onto the receipt.
                      </p>
                      <p>
                        This transparency builds trust. Rather than hiding fees or sneaking in surcharges, dual pricing gives customers control over their costs—and clearly shows that the merchant isn't profiting from card fees, just covering them.
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="benefit-card bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                  <div class="icon-wrapper mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold mb-2">5. Legal Compliance</h3>
                  <p class="text-gray-600">Fully compliant with state laws and card brand regulations.</p>
                  <div class="mt-4">
                    <button @click="toggleDetail('legal')" class="text-red-600 font-medium flex items-center">
                      Read more
                      <svg class="w-4 h-4 ml-1" :class="{'rotate-180': expandedDetail === 'legal'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    <div v-if="expandedDetail === 'legal'" class="mt-3 text-gray-700 text-sm bg-gray-50 p-4 rounded-lg">
                      <p>
                        Unlike credit card surcharging, which is banned or heavily restricted in several U.S. states, dual pricing is permitted nationwide when structured as a cash discount. It's an ideal solution for merchants who want to avoid legal gray areas and potential fines while still protecting their margins.
                      </p>
                      <p class="mt-2">
                        Merchants must ensure their signage is clear and that their POS system is set up to handle the pricing logic correctly. Most modern POS providers offer built-in dual pricing support with automatic toggling between cash and card prices.
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="benefit-card bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                  <div class="icon-wrapper mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold mb-2">6. Easy Implementation</h3>
                  <p class="text-gray-600">Fast setup with the right partner.</p>
                  <div class="mt-4">
                    <button @click="toggleDetail('implementation')" class="text-red-600 font-medium flex items-center">
                      Read more
                      <svg class="w-4 h-4 ml-1" :class="{'rotate-180': expandedDetail === 'implementation'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    <div v-if="expandedDetail === 'implementation'" class="mt-3 text-gray-700 text-sm bg-gray-50 p-4 rounded-lg">
                      <p>
                        Thanks to the growing popularity of this model, many merchant services providers now offer turnkey dual pricing programs. These include compliant signage, hardware bundles, training for staff, and ready-to-use POS software that supports automatic switching between pricing modes.
                      </p>
                      <p class="mt-2">
                        When businesses partner with a provider that specializes in dual pricing, setup is fast and straightforward—with little to no disruption to operations.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Customer Impact -->
              <div class="bg-white rounded-xl shadow-lg p-8 mt-10 scroll-reveal">
                <h3 class="text-2xl font-bold mb-4">How Dual Pricing Affects Customers</h3>
                <div class="text-gray-700">
                  <p class="mb-4">
                    Some merchants worry that dual pricing may frustrate or drive away card-paying customers. However, studies show that when the pricing is transparent, most consumers accept the small card premium—especially when they understand the reason behind it.
                  </p>
                  <p class="mb-4">
                    In fact, many customers prefer the honesty of dual pricing over inflated menu prices that hide the cost of card processing. It reflects a growing trend toward economic transparency and gives people more agency in how they spend.
                  </p>
                  <p>
                    Moreover, dual pricing offers a subtle nudge toward cash usage without penalizing card users. It doesn't punish anyone—it just makes the cost of convenience clear.
                  </p>
                </div>
              </div>
            </section>
  
            <!-- Comparison Table -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">Dual Pricing vs. Surcharging: What's the Difference?</h2>
              <div class="overflow-hidden bg-white shadow-lg rounded-xl">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feature</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dual Pricing</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Credit Card Surcharge</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">Legal in All States?</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          ✅ Yes
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                          ❌ No (restricted in some)
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">Transparent to Buyer?</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          ✅ Two clear prices
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                          ⚠ Fee added at checkout
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">POS Integration</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          ✅ Seamless switching
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                          ⚠ May require manual setup
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">Customer-Friendly?</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          ✅ High (no surprise charges)
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                          ⚠ Lower (feels like a penalty)
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">Compliance Risk</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          ✅ Low
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                          ⚠ Medium-High (state restrictions)
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
  
            <!-- Ideal Industries Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">Ideal Industries for Dual Pricing</h2>
              <p class="text-gray-700 mb-6">Dual pricing is especially effective for businesses with high transaction volumes, tight margins, and high card usage:</p>
              <p class="text-gray-700 mb-6">These industries often face high transaction volumes, tight margins, and high card usage. Dual pricing offers them a way to thrive without raising menu prices across the board.</p>
              <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Restaurants & Cafes
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Retail Shops
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Gas Stations & C-Stores
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Barbers & Salons
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Auto Repair & Service
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Laundromats
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Mobile or Pop-Up Vendors
                  </span>
                </div>
                <div class="industry-tag">
                  <span class="inline-block bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-semibold">
                    Service Businesses
                  </span>
                </div>
              </div>
            </section>

            <!-- Conclusion Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">A Smart Move for Modern Merchants</h2>
              <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-gray-700">
                  <p class="mb-4">
                    Dual pricing isn't just a workaround for high processing fees—it's a strategic business decision that puts power back in the hands of merchants and consumers. By offering two price options, businesses create a more transparent and sustainable financial model that benefits everyone involved.
                  </p>
                  <p>
                    In a time where every dollar counts, and inflation continues to squeeze small business profits, dual pricing is a proven, legal, and effective way to stop losing money on card fees and start growing your bottom line.
                  </p>
                </div>
              </div>
            </section>

            <!-- FAQ Section -->
            <section class="mb-16 scroll-reveal">
              <h2 class="text-3xl font-bold mb-6 text-gray-900">Frequently Asked Questions</h2>
              <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Is dual pricing the same as surcharging?</h3>
                  <p class="text-gray-700">No. While both approaches shift credit card processing costs to the cardholder, surcharging adds a fee at checkout to a single advertised price. Dual pricing displays two separate prices upfront (cash and card), making it more transparent and legally compliant in all states.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                  <h3 class="text-xl font-bold mb-2 text-gray-800">Will I lose customers who prefer to pay with cards?</h3>
                  <p class="text-gray-700">Studies show that when the pricing structure is clearly communicated, most customers understand and accept the small difference. The transparent approach actually builds trust rather than frustration. Most customers will continue to pay with cards for the convenience.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                  <h3 class="text-xl font-bold mb-2 text-gray-800">How much can I save with dual pricing?</h3>
                  <p class="text-gray-700">Businesses typically save 2.5%-4% on every card transaction. For a business processing $500,000 in annual card sales, that could mean $12,500-$20,000 in savings each year that goes directly to your bottom line.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                  <h3 class="text-xl font-bold mb-2 text-gray-800">How do I implement dual pricing in my business?</h3>
                  <p class="text-gray-700">The right payment processor will provide everything you need: compliant signage, POS system setup, staff training materials, and ongoing support. Implementation is typically quick and straightforward with minimal disruption to your operations.</p>
                </div>
              </div>
            </section>

            <!-- CTA Section -->
            <section class="text-center py-16 bg-gradient-to-r from-red-900 to-red-700 text-white rounded-2xl scroll-reveal">
              <div class="max-w-3xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Interested in Adding Dual Pricing to Your Business?</h2>
                <p class="text-xl mb-8 opacity-90">
                  If you're a business owner looking to eliminate credit card fees, increase profits, and maintain customer satisfaction, it's time to consider dual pricing. With the right merchant services partner, the switch is easy—and the savings are real.
                </p>
                <div class="space-y-4 md:space-y-0 md:space-x-4 flex flex-col md:flex-row justify-center">
                  <a href="tel:1-888-440-0936" class="inline-block bg-white text-red-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Call 1-888-440-0936
                  </a>
                  <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Thomas@hurricanepayments.com" target="_blank" class="inline-block bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-900 transition-colors">
                    Email: Thomas@hurricanepayments.com
                  </a>
                </div>
                <p class="mt-8 text-white opacity-80 font-medium">
                  Your Success Is Our Full-Time Job
                </p>
              </div>
            </section>
          </div>
        </div>
      </article>
    </MainLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import MainLayout from './MainLayout.vue';

// State for expandable sections
const expandedDetail = ref(null);

// Toggle function for expandable content
const toggleDetail = (section) => {
  if (expandedDetail.value === section) {
    expandedDetail.value = null;
  } else {
    expandedDetail.value = section;
  }
};

onMounted(() => {
  // Initialize scroll reveal animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.scroll-reveal').forEach(element => {
    observer.observe(element);
  });
});
</script>

<style scoped>
/* Add these font imports at the top of your style section */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap');

/* Typography */
h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -0.02em;
}

p, a, span, li {
  font-family: 'Inter', system-ui, sans-serif;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(135deg, #973131 0%, #b64848 100%);
  position: relative;
  overflow: hidden;
}

.hero-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

/* Lead Paragraph */
.lead-paragraph {
  font-size: 1.25rem;
  line-height: 1.8;
  color: #374151;
  margin-bottom: 2rem;
}

/* Cards and Sections */
.benefit-card {
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  height: auto; /* Adjust height automatically based on content */
}

.benefit-card:hover {
  transform: translateY(-5px);
}

.industry-tag span {
  transition: all 0.3s ease;
  cursor: default;
}

.industry-tag span:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Floating Suggestion Box */
.suggestion-box {
  position: fixed;
  top: 500px; /* Position it much lower on the page */
  right: 20px;
  width: 280px;
  z-index: 10;
  transition: all 0.3s ease;
  background-color: rgba(255, 255, 255, 0.7);
  padding: 10px;
  border-radius: 8px;
}

.suggestion-box span, 
.suggestion-box h4, 
.suggestion-box p, 
.suggestion-box a {
  text-shadow: 0px 0px 3px rgba(255, 255, 255, 0.9);
}

/* Responsive styles for suggestion box */
@media (max-width: 768px) {
  .suggestion-box {
    top: auto;
    bottom: 20px;
    right: 10px;
    left: 10px;
    width: auto;
    border-radius: 8px;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
}

/* Animations */
.scroll-reveal {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease-out;
}

.scroll-reveal.animate {
  opacity: 1;
  transform: translateY(0);
}

.slide-in-left {
  animation: slideInLeft 0.8s ease forwards;
}

.slide-in-right {
  animation: slideInRight 0.8s ease forwards;
  animation-delay: 0.2s;
}

@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Make sure expanding content doesn't affect other cards */
.grid {
  align-items: start; /* This will prevent cards from stretching to match tallest card */
}
</style>
