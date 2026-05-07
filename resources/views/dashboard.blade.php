<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                    Dashboard
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Welcome back 👋 Here's your business overview.
                </p>
            </div>

            <button
                onclick="showWelcomeAlert()"
                class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl shadow-lg transition duration-200"
            >
                Show Alert
            </button>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Total Revenue</p>
                            <h3 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">₹45,200</h3>
                        </div>

                        <div class="w-14 h-14 rounded-xl bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0-6v2m0 16v2m8-10h2M2 12H4m12.95 6.95l1.414 1.414M4.636 4.636L6.05 6.05m0 11.9l-1.414 1.414M17.95 6.05l1.414-1.414" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border border-gray-100 dark:border-gray-700">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Orders</p>
                    <h3 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">1,245</h3>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border border-gray-100 dark:border-gray-700">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Customers</p>
                    <h3 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">845</h3>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border border-gray-100 dark:border-gray-700">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Products</p>
                    <h3 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">230</h3>
                </div>
            </div>

            <!-- Charts & Activity -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                <!-- Sales Chart -->
                <div class="xl:col-span-2 bg-white dark:bg-gray-800 rounded-2xl shadow border border-gray-100 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                            Sales Analytics
                        </h3>

                        <span class="text-sm text-green-600 font-medium">
                            +12.5%
                        </span>
                    </div>

                    <canvas id="salesChart" height="100"></canvas>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
                        Recent Activity
                    </h3>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-3 h-3 rounded-full bg-green-500 mt-2"></div>
                            <div>
                                <p class="text-sm text-gray-800 dark:text-gray-200">
                                    New order received
                                </p>
                                <span class="text-xs text-gray-500">2 mins ago</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-3 h-3 rounded-full bg-blue-500 mt-2"></div>
                            <div>
                                <p class="text-sm text-gray-800 dark:text-gray-200">
                                    Vendor registered
                                </p>
                                <span class="text-xs text-gray-500">10 mins ago</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-3 h-3 rounded-full bg-yellow-500 mt-2"></div>
                            <div>
                                <p class="text-sm text-gray-800 dark:text-gray-200">
                                    Payment processed
                                </p>
                                <span class="text-xs text-gray-500">1 hour ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Table -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow border border-gray-100 dark:border-gray-700 p-6">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Recent Products
                    </h3>

                    <button class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm">
                        Add Product
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table id="productsTable" class="w-full text-sm text-left">
                        <thead>
                            <tr class="border-b dark:border-gray-700">
                                <th class="py-3">Product</th>
                                <th class="py-3">Category</th>
                                <th class="py-3">Price</th>
                                <th class="py-3">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="py-4">iPhone 15</td>
                                <td>Electronics</td>
                                <td>₹89,000</td>
                                <td>
                                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                        Active
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">MacBook Pro</td>
                                <td>Laptops</td>
                                <td>₹1,89,000</td>
                                <td>
                                    <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                        Pending
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">AirPods Pro</td>
                                <td>Accessories</td>
                                <td>₹24,000</td>
                                <td>
                                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                        Active
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('salesChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Revenue',
                        data: [1200, 1900, 3000, 5000, 4200, 6100],
                        borderWidth: 3,
                        tension: 0.4,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            new DataTable('#productsTable');
        });

        function showWelcomeAlert() {
            Swal.fire({
                title: 'Welcome Back!',
                text: 'Your dashboard is running successfully 🚀',
                icon: 'success',
                confirmButtonColor: '#4f46e5'
            });
        }
    </script>
</x-app-layout>