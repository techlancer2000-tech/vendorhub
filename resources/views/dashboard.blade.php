<x-dashboard-layout>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <!-- Card -->
        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:border-indigo-500/40 transition duration-300">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-gray-400">
                        Total Revenue
                    </p>

                    <h3 class="text-3xl font-black mt-3">
                        ₹45,200
                    </h3>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 text-2xl">
                    <i class="ri-money-rupee-circle-fill"></i>
                </div>
            </div>

            <div class="mt-6 text-green-400 text-sm font-medium">
                +12.5% this month
            </div>
        </div>

        <!-- Card -->
        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:border-indigo-500/40 transition duration-300">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-gray-400">
                        Orders
                    </p>

                    <h3 class="text-3xl font-black mt-3">
                        1,245
                    </h3>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-400 text-2xl">
                    <i class="ri-shopping-cart-2-fill"></i>
                </div>
            </div>

            <div class="mt-6 text-green-400 text-sm font-medium">
                +8.1% this month
            </div>
        </div>

        <!-- Card -->
        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:border-indigo-500/40 transition duration-300">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-gray-400">
                        Vendors
                    </p>

                    <h3 class="text-3xl font-black mt-3">
                        245
                    </h3>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-400 text-2xl">
                    <i class="ri-store-2-fill"></i>
                </div>
            </div>

            <div class="mt-6 text-green-400 text-sm font-medium">
                +20 new vendors
            </div>
        </div>

        <!-- Card -->
        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:border-indigo-500/40 transition duration-300">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-gray-400">
                        Customers
                    </p>

                    <h3 class="text-3xl font-black mt-3">
                        8,420
                    </h3>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 text-2xl">
                    <i class="ri-group-fill"></i>
                </div>
            </div>

            <div class="mt-6 text-green-400 text-sm font-medium">
                +18.4% this month
            </div>
        </div>
    </div>

    <!-- Charts & Activity -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">

        <!-- Chart -->
        <div class="xl:col-span-2 bg-gray-900 border border-gray-800 rounded-3xl p-8">

            <div class="flex items-center justify-between mb-8">

                <div>
                    <h3 class="text-2xl font-black">
                        Revenue Analytics
                    </h3>

                    <p class="text-gray-400 text-sm mt-2">
                        Monthly revenue overview
                    </p>
                </div>

                <button class="px-5 py-3 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-sm font-medium">
                    Export
                </button>
            </div>

            <canvas id="chart" height="120"></canvas>
        </div>

        <!-- Activity -->
        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8">

            <div class="flex items-center justify-between mb-8">

                <div>
                    <h3 class="text-2xl font-black">
                        Recent Activity
                    </h3>

                    <p class="text-gray-400 text-sm mt-2">
                        Latest platform actions
                    </p>
                </div>
            </div>

            <div class="space-y-5">

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 text-xl">
                        <i class="ri-user-add-fill"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold">
                            New Vendor Joined
                        </h4>

                        <p class="text-sm text-gray-400 mt-1">
                            TechWorld registered today.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-400 text-xl">
                        <i class="ri-shopping-bag-fill"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold">
                            New Order Received
                        </h4>

                        <p class="text-sm text-gray-400 mt-1">
                            Order #VH1023 completed.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-400 text-xl">
                        <i class="ri-bar-chart-fill"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold">
                            Sales Increased
                        </h4>

                        <p class="text-sm text-gray-400 mt-1">
                            Revenue increased by 18%.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const ctx = document.getElementById('chart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Revenue',
                        data: [1200, 1900, 3000, 5000, 4200, 6200],
                        tension: 0.4,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            labels: {
                                color: '#9ca3af'
                            }
                        }
                    },
                    scales: {
                        y: {
                            ticks: {
                                color: '#9ca3af'
                            },
                            grid: {
                                color: '#1f2937'
                            }
                        },
                        x: {
                            ticks: {
                                color: '#9ca3af'
                            },
                            grid: {
                                color: '#1f2937'
                            }
                        }
                    }
                }
            });
        });
    </script>

</x-dashboard-layout>
