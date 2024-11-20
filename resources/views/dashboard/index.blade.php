<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<x-layout>
<div class="min-h-screen bg-gray-100 p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Water Level Chart Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18M3 18h18M3 22h18"/>
                </svg>
                <h2 class="text-xl font-semibold text-gray-800">Water Level</h2>
            </div>
            <div class="relative">
                <canvas id="waterLevelChart"></canvas>
            </div>
        </div>

        <!-- Current Water Info Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Current Water Info</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Water Level</p>
                    <p id="water-level" class="font-medium text-gray-800">Loading...</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Incoming Rate</p>
                    <p id="incoming-rate" class="font-medium text-gray-800">...</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Outgoing Rate</p>
                    <p id="outgoing-rate" class="font-medium text-gray-800">...</p>
                </div>
            </div>
        </div>

        <!-- Water Lasting Time Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Water Lasting Time</h3>
            <div class="flex items-center justify-between">
                <p class="text-gray-600">Estimated Time</p>
                <p id="water-lasting-time" class="font-medium text-gray-800">Loading...</p>
            </div>
        </div>

        <!-- Overflow Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Overflow Status</h2>
                <div class="flex justify-between">
                    <p class="text-gray-600">Current Status</p>
                    <p class="text-red-500 font-bold">Empty</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Overflow Rate</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 uppercase">0%</span>
                            <span class="text-xs font-semibold inline-block py-1 uppercase">100%</span>
                        </div>
                        <div class="flex mb-2">
                            <div class="w-full bg-gray-300 rounded-full">
                                <div class="bg-red-500 text-xs font-medium text-center p-0.5 leading-none rounded-l-full" style="width: 10%;"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Stats Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Customer & Staff Stats</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">Total Customers</p>
                    <p class="font-medium text-gray-800">33</p>
                </div>
                <div>
                    <p class="text-gray-600">Total Staff</p>
                    <p class="font-medium text-gray-800">5</p>
                </div>
            </div>
        </div>

        <!-- Revenue Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Revenue</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Total Revenue</p>
                    <p class="font-medium text-gray-800">Rs 30,000</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Total Enquiries</p>
                    <p class="font-medium text-gray-800">23</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6 col-span-1 md:col-span-2">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Last Water Level Check</p>
                    <p class="font-medium text-gray-800">10 mins ago</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Last Enquiry</p>
                    <p class="font-medium text-gray-800">15 mins ago</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Last Revenue Update</p>
                    <p class="font-medium text-gray-800">1 hour ago</p>
                </div>
            </div>
        </div>
        
    </div>

</div>
<!-- Footer -->
<footer class="mt-4 bg-white p-4 rounded-2xl shadow-lg text-center text-gray-600">
    <p>&copy; 2024 Water Supply Management Board Dharan. All rights reserved.</p>
</footer>




    <!-- First JavaScript Portion: Initialize the Chart -->
    <script>
        // Placeholder for initial values
        let availableWater = 0;
        let emptySpace = 100;

        const ctx = document.getElementById('waterLevelChart').getContext('2d');
        const waterLevelChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Available Water', 'Empty Space'],
                datasets: [{
                    data: [availableWater, emptySpace],
                    backgroundColor: [
                        'rgba(0, 150, 199, 0.8)', // Water-like blue for available
                        'rgba(210, 235, 250, 0.6)' // Light blue-gray for empty space
                    ],
                    hoverBackgroundColor: [
                        'rgba(0, 128, 170, 0.9)', // Darker blue on hover
                        'rgba(200, 225, 240, 0.7)' // Lighter gray-blue on hover
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                return `${label}: ${value.toFixed(2)}%`; // Limit to two decimal places
                            }
                        }
                    }
                }
            }
        });
    </script>

    <script>
        
    </script>

</x-layout>