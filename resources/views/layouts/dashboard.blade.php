<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VendorHub') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Remix Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>

<body class="bg-gray-950 text-white antialiased">

<div class="flex min-h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="hidden lg:flex lg:flex-col w-72 bg-gray-900 border-r border-gray-800 fixed inset-y-0 z-50">

        <!-- Logo -->
        <div class="h-20 flex items-center px-8 border-b border-gray-800">

            <a href="#" class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-2xl bg-indigo-600 flex items-center justify-center text-2xl font-black shadow-lg shadow-indigo-500/30">
                    V
                </div>

                <div>
                    <h1 class="text-xl font-black tracking-tight">
                        VendorHub
                    </h1>

                    <p class="text-xs text-gray-400">
                        Multi Vendor SaaS
                    </p>
                </div>

            </a>
        </div>

        <!-- Navigation -->
        <div class="flex-1 overflow-y-auto py-8 px-5">

            <div class="space-y-2">

                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300
                   {{ request()->routeIs('dashboard')
                        ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-500/20'
                        : 'text-gray-400 hover:bg-gray-800 hover:text-white' }}">

                    <i class="ri-dashboard-fill text-xl"></i>

                    <span class="font-medium">
                        Dashboard
                    </span>
                </a>

                <!-- Products -->
                <a href="#"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300 text-gray-400 hover:bg-gray-800 hover:text-white">

                    <i class="ri-shopping-bag-3-fill text-xl"></i>

                    <span class="font-medium">
                        Products
                    </span>
                </a>

                <!-- Orders -->
                <a href="#"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300 text-gray-400 hover:bg-gray-800 hover:text-white">

                    <i class="ri-file-list-3-fill text-xl"></i>

                    <span class="font-medium">
                        Orders
                    </span>
                </a>

                <!-- Vendors -->
                <a href="#"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300 text-gray-400 hover:bg-gray-800 hover:text-white">

                    <i class="ri-store-2-fill text-xl"></i>

                    <span class="font-medium">
                        Vendors
                    </span>
                </a>

                <!-- Customers -->
                <a href="#"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300 text-gray-400 hover:bg-gray-800 hover:text-white">

                    <i class="ri-group-fill text-xl"></i>

                    <span class="font-medium">
                        {{ auth()->user()->getRoleNames()->first() ?? 'User' }}
                    </span>
                </a>

                <!-- Analytics -->
                <a href="#"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300 text-gray-400 hover:bg-gray-800 hover:text-white">

                    <i class="ri-bar-chart-box-fill text-xl"></i>

                    <span class="font-medium">
                        Analytics
                    </span>
                </a>

                <!-- Settings -->
                <a href="#"
                   class="group flex items-center gap-4 px-5 py-4 rounded-2xl transition-all duration-300 text-gray-400 hover:bg-gray-800 hover:text-white">

                    <i class="ri-settings-3-fill text-xl"></i>

                    <span class="font-medium">
                        Settings
                    </span>
                </a>

            </div>
        </div>

        <!-- User -->
        <div class="p-5 border-t border-gray-800">

            <div class="flex items-center gap-4 bg-gray-800 rounded-2xl p-4">

                <div class="w-12 h-12 rounded-full bg-indigo-600 flex items-center justify-center font-bold text-lg">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="flex-1 min-w-0">
                    <h4 class="font-semibold truncate">
                        {{ auth()->user()->name }}
                    </h4>

                    <p class="text-sm text-gray-400 truncate">
                        {{ auth()->user()->email }}
                    </p>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="text-gray-400 hover:text-red-400 transition">
                        <i class="ri-logout-box-r-line text-xl"></i>
                    </button>
                </form>

            </div>
        </div>
    </aside>

    <!-- Main -->
    <div class="flex-1 lg:ml-72">

        <!-- Topbar -->
        <header class="sticky top-0 z-40 h-20 bg-gray-950/80 backdrop-blur-xl border-b border-gray-800 px-6 lg:px-10 flex items-center justify-between">

            <!-- Left -->
            <div>
                <h2 class="text-2xl font-black tracking-tight">
                    Dashboard
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    Welcome back, {{ auth()->user()->name }} 👋
                </p>
            </div>

            <!-- Right -->
            <div class="flex items-center gap-4">

                <!-- Search -->
                <div class="hidden md:flex items-center gap-3 bg-gray-900 border border-gray-800 rounded-2xl px-4 py-3 min-w-[280px]">

                    <i class="ri-search-line text-gray-500"></i>

                    <input
                        type="text"
                        placeholder="Search..."
                        class="bg-transparent border-none outline-none w-full text-sm placeholder-gray-500"
                    >
                </div>

                <!-- Notification -->
                <button class="w-12 h-12 rounded-2xl bg-gray-900 border border-gray-800 flex items-center justify-center hover:border-indigo-500 transition">
                    <i class="ri-notification-3-fill text-lg"></i>
                </button>

                <!-- Profile -->
                <div
                    x-data="{ open: false }"
                    class="relative"
                >

                    <!-- Trigger -->
                    <button
                        @click="open = !open"
                        class="flex items-center gap-3 rounded-2xl px-3 py-2 hover:border-indigo-500 transition-all duration-300"
                    >

                        <!-- Avatar -->
                        <div class="w-12 h-12 rounded-2xl bg-indigo-600 flex items-center justify-center font-bold text-lg shadow-lg shadow-indigo-500/20">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <!-- Info -->
                        <div class="hidden md:block text-left">
                            <h4 class="text-sm font-semibold text-white leading-none">
                                {{ auth()->user()->name }}
                            </h4>

                            <p class="text-xs text-gray-400 mt-1">
                                {{ auth()->user()->getRoleNames()->first() ?? 'User' }}
                            </p>
                        </div>

                        <!-- Arrow -->
                        <i
                            class="ri-arrow-down-s-line text-gray-400 transition duration-300"
                            :class="{ 'rotate-180': open }"
                        ></i>

                    </button>

                    <!-- Dropdown -->
                    <div
                        x-show="open"
                        @click.away="open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-4 w-80 rounded-3xl border border-gray-800 bg-gray-900 backdrop-blur-2xl shadow-2xl overflow-hidden z-50"
                        style="display: none;"
                    >

                        <!-- Top -->
                        <div class="p-6 border-b border-gray-800">

                            <div class="flex items-center gap-4">

                                <!-- Avatar -->
                                <div class="w-16 h-16 rounded-3xl bg-indigo-600 flex items-center justify-center text-2xl font-black shadow-xl shadow-indigo-500/20">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                </div>

                                <!-- User Info -->
                                <div class="flex-1 min-w-0">

                                    <h3 class="text-lg font-bold text-white truncate">
                                        {{ auth()->user()->name }}
                                    </h3>

                                    <p class="text-sm text-gray-400 truncate mt-1">
                                        {{ auth()->user()->email }}
                                    </p>

                                    <div class="mt-3 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-medium">
                                        <span class="w-2 h-2 rounded-full bg-green-400"></span>

                                        {{ auth()->user()->getRoleNames()->first() ?? 'User' }}
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Menu -->
                        <div class="p-3 space-y-1">

                            <!-- Profile -->
                            <a
                                href="#"
                                class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-gray-800 transition group"
                            >

                                <div class="w-11 h-11 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 text-xl group-hover:bg-indigo-500/20 transition">
                                    <i class="ri-user-3-fill"></i>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-white">
                                        Profile
                                    </h4>

                                    <p class="text-sm text-gray-400">
                                        Manage your account
                                    </p>
                                </div>

                            </a>

                            <!-- Settings -->
                            <a
                                href="#"
                                class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-gray-800 transition group"
                            >

                                <div class="w-11 h-11 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-400 text-xl group-hover:bg-purple-500/20 transition">
                                    <i class="ri-settings-4-fill"></i>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-white">
                                        Settings
                                    </h4>

                                    <p class="text-sm text-gray-400">
                                        Preferences & security
                                    </p>
                                </div>

                            </a>

                        </div>

                        <!-- Footer -->
                        <div class="p-3 border-t border-gray-800">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button
                                    type="submit"
                                    class="w-full flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-red-500/10 transition group"
                                >

                                    <div class="w-11 h-11 rounded-2xl bg-red-500/10 flex items-center justify-center text-red-400 text-xl group-hover:bg-red-500/20 transition">
                                        <i class="ri-logout-box-r-fill"></i>
                                    </div>

                                    <div class="text-left">
                                        <h4 class="font-semibold text-white">
                                            Logout
                                        </h4>

                                        <p class="text-sm text-gray-400">
                                            Sign out from account
                                        </p>
                                    </div>

                                </button>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="p-6 lg:p-10">
            {{ $slot }}
        </main>
    </div>
</div>

</body>
</html>
