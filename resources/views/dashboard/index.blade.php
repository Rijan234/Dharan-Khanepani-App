<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<x-layout>
    <div class="grid grid-cols-3 gap-4 m-4 p-2">

        <!-- water level -->
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div>
                <h1>Water Level</h1>
            </div>
            <div>
                <canvas id="waterLevelChart"></canvas>
            </div>
        </div>
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3>Current Water Level:</h3>
            <p id="water-level">Loading ...</p>
            <h3>Incoming water rate</h3>
            <p id="incoming-rate">...</p>
            <h3>Outgoing water rate</h3>
            <p id="outgoing-rate">...</p>
        </div>
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3>Water will last upto:</h3>
            <p id="water-lasting-time">Loading ...</p>
        </div>
    </div>

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



</x-layout>