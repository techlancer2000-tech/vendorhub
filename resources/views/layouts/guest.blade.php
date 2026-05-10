<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VendorHub') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-950 text-white">

<div class="min-h-screen flex">

    <!-- LEFT SIDE -->
    <div class="hidden lg:flex w-1/2 relative overflow-hidden border-r border-gray-900">

        <!-- Background Glow -->
        <div class="absolute inset-0">

            <div class="absolute top-20 left-20 w-72 h-72 bg-indigo-500/20 rounded-full blur-3xl"></div>

            <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>

        </div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col justify-between p-14 w-full">

            <!-- Logo -->
            <div class="flex items-center gap-4">

                <a href="/" class="flex items-center gap-4">

                    <div class="w-14 h-14 rounded-2xl bg-indigo-600 flex items-center justify-center text-2xl font-black shadow-xl shadow-indigo-500/30">
                        V
                    </div>

                    <div>
                        <h1 class="text-3xl font-black tracking-tight">
                            VendorHub
                        </h1>

                        <p class="text-sm text-gray-400">
                            Multi Vendor SaaS Platform
                        </p>
                    </div>

                </a>

            </div>

            <!-- Hero -->
            <div class="max-w-xl">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-sm mb-8">
                    🚀 Modern Marketplace Solution
                </div>

                <h2 class="text-5xl font-black leading-tight tracking-tight">

                    Build &
                    Scale Your

                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">
                            Vendor Marketplace
                        </span>

                    Faster.

                </h2>

                <p class="mt-8 text-lg text-gray-400 leading-relaxed">
                    VendorHub helps businesses manage vendors, products,
                    subscriptions, analytics, and customers through a modern
                    scalable SaaS platform.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 mt-14">

                    <div>
                        <h3 class="text-3xl font-black">10K+</h3>
                        <p class="text-gray-400 text-sm mt-2">
                            Active Vendors
                        </p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-black">₹2Cr+</h3>
                        <p class="text-gray-400 text-sm mt-2">
                            Transactions
                        </p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-black">99.9%</h3>
                        <p class="text-gray-400 text-sm mt-2">
                            Uptime
                        </p>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-between text-sm text-gray-500">

                <p>
                    © {{ date('Y') }} VendorHub
                </p>

                <div class="flex items-center gap-5">
                    <a href="#" class="hover:text-white transition">
                        Privacy
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Terms
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="flex w-full lg:w-1/2 items-center justify-center px-6 py-10 overflow-y-auto">

        <div class="w-full max-w-md">

            <!-- Mobile Logo -->
            <div class="lg:hidden flex justify-center mb-10">

                <a href="/" class="flex items-center gap-3">

                    <div class="w-12 h-12 rounded-2xl bg-indigo-600 flex items-center justify-center text-xl font-black">
                        V
                    </div>

                    <div>
                        <h1 class="text-2xl font-black">
                            VendorHub
                        </h1>

                        <p class="text-xs text-gray-400">
                            Multi Vendor SaaS
                        </p>
                    </div>

                </a>

            </div>

            <!-- Auth Card -->
            <div class="bg-gray-900/80 backdrop-blur-xl border border-gray-800 rounded-3xl shadow-2xl shadow-black/40 p-8">

                {{ $slot }}

            </div>
        </div>
    </div>
</div>

</body>
</html>
