<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<x-layout>
  <div>
    <canvas id="waterLevelChart"></canvas>
  </div>

  <script>
        const availableWater = 60; // Available water in percentage
        const emptySpace = 100 - availableWater; // Remaining space

        const ctx = document.getElementById('waterLevelChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Available Water', 'Empty Space'],
                datasets: [{
                    data: [availableWater, emptySpace],
                    backgroundColor: [
                        'rgba(0, 150, 199, 0.8)',  // Water-like blue for available
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
                                return `${label}: ${value}%`;
                            }
                        }
                    }
                }
            }
        });
    </script>


</x-layout>