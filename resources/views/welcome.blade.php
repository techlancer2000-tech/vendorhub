<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendorHub - Multi Vendor SaaS Platform</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-white antialiased">

<!-- Navbar -->
<header class="sticky top-0 z-50 backdrop-blur-lg bg-gray-950/80 border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <a href="#" class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-2xl bg-indigo-600 flex items-center justify-center text-lg font-bold shadow-lg shadow-indigo-500/30">
                V
            </div>

            <div>
                <h1 class="text-xl font-bold tracking-wide">VendorHub</h1>
                <p class="text-xs text-gray-400">Multi Vendor SaaS</p>
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-8 text-sm text-gray-300">
            <a href="#features" class="hover:text-white transition">Features</a>
            <a href="#pricing" class="hover:text-white transition">Pricing</a>
            <a href="#dashboard" class="hover:text-white transition">Dashboard</a>
            <a href="#faq" class="hover:text-white transition">FAQ</a>
        </nav>

        <div class="flex items-center gap-4">
            <a href="{{ route('login') }}"
               class="text-sm text-gray-300 hover:text-white transition">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/30 text-sm font-medium">
                Get Started
            </a>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="relative overflow-hidden">

    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-72 h-72 bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 pt-24 pb-32 grid lg:grid-cols-2 gap-16 items-center">

        <div>
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-sm mb-8">
                🚀 Build Your Marketplace Faster
            </div>

            <h1 class="text-5xl lg:text-7xl font-black leading-tight tracking-tight">
                Scale Your
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">
                        Multi Vendor
                    </span>
                Business.
            </h1>

            <p class="mt-8 text-lg text-gray-400 leading-relaxed max-w-xl">
                VendorHub helps vendors manage products, orders, analytics, and customers with a modern SaaS experience built for growth.
            </p>

            <div class="mt-10 flex flex-wrap items-center gap-5">
                <a href="{{ route('register') }}"
                   class="px-7 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition shadow-xl shadow-indigo-500/30 font-semibold">
                    Start Free Trial
                </a>

                <a href="#dashboard"
                   class="px-7 py-4 rounded-2xl border border-gray-700 hover:border-gray-500 transition text-gray-300 hover:text-white">
                    View Dashboard
                </a>
            </div>

            <div class="mt-14 grid grid-cols-3 gap-8 max-w-lg">
                <div>
                    <h3 class="text-3xl font-bold">10K+</h3>
                    <p class="text-gray-400 text-sm mt-1">Active Vendors</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">₹2Cr+</h3>
                    <p class="text-gray-400 text-sm mt-1">Transactions</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">99.9%</h3>
                    <p class="text-gray-400 text-sm mt-1">Uptime</p>
                </div>
            </div>
        </div>

        <!-- Dashboard Preview -->
        <div id="dashboard" class="relative">

            <div class="absolute -top-8 -right-8 w-40 h-40 bg-indigo-500/30 blur-3xl rounded-full"></div>

            <div class="relative bg-gray-900 border border-gray-800 rounded-3xl shadow-2xl overflow-hidden">

                <div class="flex items-center gap-2 px-6 py-4 border-b border-gray-800 bg-gray-950">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>

                <div class="p-8 space-y-6">

                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-gray-800 rounded-2xl p-5">
                            <p class="text-gray-400 text-sm">Revenue</p>
                            <h3 class="text-2xl font-bold mt-2">₹45K</h3>
                        </div>

                        <div class="bg-gray-800 rounded-2xl p-5">
                            <p class="text-gray-400 text-sm">Orders</p>
                            <h3 class="text-2xl font-bold mt-2">1,245</h3>
                        </div>

                        <div class="bg-gray-800 rounded-2xl p-5">
                            <p class="text-gray-400 text-sm">Users</p>
                            <h3 class="text-2xl font-bold mt-2">845</h3>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-2xl p-6">
                        <div class="flex items-end gap-3 h-44">
                            <div class="w-full bg-indigo-500 rounded-t-xl h-20"></div>
                            <div class="w-full bg-indigo-400 rounded-t-xl h-28"></div>
                            <div class="w-full bg-indigo-600 rounded-t-xl h-36"></div>
                            <div class="w-full bg-purple-500 rounded-t-xl h-24"></div>
                            <div class="w-full bg-indigo-300 rounded-t-xl h-40"></div>
                            <div class="w-full bg-indigo-500 rounded-t-xl h-32"></div>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-2xl p-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-semibold">Recent Orders</h4>
                                <p class="text-sm text-gray-400">Latest customer purchases</p>
                            </div>

                            <span class="text-green-400 text-sm">+12%</span>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between bg-gray-900 rounded-xl p-4">
                                <div>
                                    <h5 class="font-medium">MacBook Pro</h5>
                                    <p class="text-sm text-gray-400">Electronics</p>
                                </div>

                                <span class="text-indigo-400 font-semibold">₹1,89,000</span>
                            </div>

                            <div class="flex items-center justify-between bg-gray-900 rounded-xl p-4">
                                <div>
                                    <h5 class="font-medium">iPhone 15</h5>
                                    <p class="text-sm text-gray-400">Mobiles</p>
                                </div>

                                <span class="text-indigo-400 font-semibold">₹89,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section id="features" class="py-28 border-t border-gray-900">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-4xl lg:text-5xl font-black tracking-tight">
                Everything You Need
                <span class="text-indigo-400">In One Platform</span>
            </h2>

            <p class="mt-6 text-gray-400 text-lg">
                Built for modern businesses that need scalability, performance, and simplicity.
            </p>
        </div>

        <div class="mt-20 grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-indigo-500/40 transition">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-2xl mb-6">
                    📦
                </div>

                <h3 class="text-2xl font-bold">Product Management</h3>
                <p class="mt-4 text-gray-400 leading-relaxed">
                    Easily manage products, inventory, categories, and pricing from one dashboard.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-indigo-500/40 transition">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-2xl mb-6">
                    📈
                </div>

                <h3 class="text-2xl font-bold">Advanced Analytics</h3>
                <p class="mt-4 text-gray-400 leading-relaxed">
                    Monitor sales, revenue, customer activity, and vendor performance in real time.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-indigo-500/40 transition">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-2xl mb-6">
                    🔐
                </div>

                <h3 class="text-2xl font-bold">Roles & Permissions</h3>
                <p class="mt-4 text-gray-400 leading-relaxed">
                    Secure role-based access for super admins, admins, vendors, and customers.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-indigo-500/40 transition">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-2xl mb-6">
                    ⚡
                </div>

                <h3 class="text-2xl font-bold">Fast Performance</h3>
                <p class="mt-4 text-gray-400 leading-relaxed">
                    Optimized Laravel architecture powered by queues, caching, and scalable APIs.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-indigo-500/40 transition">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-2xl mb-6">
                    💳
                </div>

                <h3 class="text-2xl font-bold">Subscription System</h3>
                <p class="mt-4 text-gray-400 leading-relaxed">
                    Monetize your platform with recurring subscription plans and premium features.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-indigo-500/40 transition">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-2xl mb-6">
                    🌎
                </div>

                <h3 class="text-2xl font-bold">Multi Vendor Support</h3>
                <p class="mt-4 text-gray-400 leading-relaxed">
                    Allow multiple vendors to run stores independently under one platform.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section id="pricing" class="py-28 border-t border-gray-900 bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-4xl lg:text-5xl font-black tracking-tight">
                Flexible Pricing
            </h2>

            <p class="mt-6 text-gray-400 text-lg">
                Choose the perfect plan for your marketplace business.
            </p>
        </div>

        <div class="mt-20 grid lg:grid-cols-3 gap-8">

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-10">
                <h3 class="text-2xl font-bold">Starter</h3>
                <p class="text-gray-400 mt-3">Perfect for small vendors</p>

                <div class="mt-8">
                    <span class="text-5xl font-black">₹0</span>
                    <span class="text-gray-400">/month</span>
                </div>

                <ul class="mt-10 space-y-4 text-gray-300">
                    <li>✔ 10 Products</li>
                    <li>✔ Basic Analytics</li>
                    <li>✔ Email Support</li>
                </ul>

                <button class="mt-10 w-full py-4 rounded-2xl border border-gray-700 hover:border-gray-500 transition">
                    Get Started
                </button>
            </div>

            <div class="relative bg-indigo-600 rounded-3xl p-10 shadow-2xl shadow-indigo-500/30 scale-105">

                <div class="absolute top-5 right-5 bg-white/20 px-4 py-1 rounded-full text-sm">
                    Popular
                </div>

                <h3 class="text-2xl font-bold">Professional</h3>
                <p class="text-indigo-100 mt-3">Best for growing businesses</p>

                <div class="mt-8">
                    <span class="text-5xl font-black">₹999</span>
                    <span class="text-indigo-100">/month</span>
                </div>

                <ul class="mt-10 space-y-4 text-indigo-50">
                    <li>✔ Unlimited Products</li>
                    <li>✔ Advanced Analytics</li>
                    <li>✔ Vendor Management</li>
                    <li>✔ Priority Support</li>
                </ul>

                <button class="mt-10 w-full py-4 rounded-2xl bg-white text-indigo-700 font-semibold hover:bg-gray-100 transition">
                    Start Free Trial
                </button>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-3xl p-10">
                <h3 class="text-2xl font-bold">Enterprise</h3>
                <p class="text-gray-400 mt-3">For large scale marketplaces</p>

                <div class="mt-8">
                    <span class="text-5xl font-black">Custom</span>
                </div>

                <ul class="mt-10 space-y-4 text-gray-300">
                    <li>✔ Dedicated Infrastructure</li>
                    <li>✔ API Access</li>
                    <li>✔ SLA Support</li>
                    <li>✔ Custom Integrations</li>
                </ul>

                <button class="mt-10 w-full py-4 rounded-2xl border border-gray-700 hover:border-gray-500 transition">
                    Contact Sales
                </button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-28 border-t border-gray-900">
    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center">
            <h2 class="text-4xl lg:text-5xl font-black tracking-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="mt-16 space-y-6">

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                <h3 class="text-xl font-semibold">Can I create multiple vendor stores?</h3>
                <p class="mt-3 text-gray-400 leading-relaxed">
                    Yes, VendorHub supports complete multi-vendor architecture.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                <h3 class="text-xl font-semibold">Does VendorHub support subscriptions?</h3>
                <p class="mt-3 text-gray-400 leading-relaxed">
                    Absolutely. Subscription billing support can be integrated with Stripe.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                <h3 class="text-xl font-semibold">Is the platform mobile responsive?</h3>
                <p class="mt-3 text-gray-400 leading-relaxed">
                    Yes. VendorHub is fully responsive and optimized for all devices.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-28 border-t border-gray-900">
    <div class="max-w-5xl mx-auto px-6 text-center">

        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-[2rem] p-16 shadow-2xl shadow-indigo-500/20">
            <h2 class="text-4xl lg:text-6xl font-black tracking-tight leading-tight">
                Ready To Build
                Your Marketplace?
            </h2>

            <p class="mt-6 text-lg text-indigo-100 max-w-2xl mx-auto leading-relaxed">
                Launch your scalable multi-vendor SaaS platform with VendorHub today.
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-5">
                <a href="{{ route('register') }}"
                   class="px-8 py-4 rounded-2xl bg-white text-indigo-700 font-semibold hover:bg-gray-100 transition">
                    Start Free Trial
                </a>

                <a href="{{ route('login') }}"
                   class="px-8 py-4 rounded-2xl border border-white/30 hover:border-white transition text-white">
                    Login Dashboard
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="border-t border-gray-900 py-10">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">

        <div>
            <h3 class="text-xl font-bold">VendorHub</h3>
            <p class="text-gray-500 text-sm mt-2">
                Modern Multi Vendor SaaS Platform.
            </p>
        </div>

        <div class="flex items-center gap-6 text-sm text-gray-500">
            <a href="#" class="hover:text-white transition">Privacy</a>
            <a href="#" class="hover:text-white transition">Terms</a>
            <a href="#" class="hover:text-white transition">Support</a>
        </div>
    </div>
</footer>

</body>
</html>
