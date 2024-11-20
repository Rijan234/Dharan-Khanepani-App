<x-layout>



    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 p-6 bg-gray-50 rounded-lg shadow">
        <!-- Incoming Rate Card -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-xl font-semibold text-gray-800 mb-4">Incoming Rate</h1>
            @if(isset($rate->incoming_rate))
            <h4 class="text-2xl text-gray-700 font-bold mb-4">{{ $rate->incoming_rate }}</h4>
            @else
            <h4 class="text-2xl text-gray-400 italic mb-4">Not available</h4>
            @endif
            <a href="#" class="editToggle" data-target="incomingRate">Edit</a>

            <div class="incomingRate rateForm" style="display: none;">
                <form action="{{ route('statistics.update', $rate->id) }}" method="post">
                    @csrf
                    @method('put')
                    <h1>Incoming Rate</h1>
                    <input type="text" name="incoming_rate" id="" value="{{ $rate->incoming_rate }}">
                    <button class="submit">Update</button>
                </form>
            </div>
        </div>

        <!-- Outgoing Rate Card -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-xl font-semibold text-gray-800 mb-4">Outgoing Rate</h1>
            @if(isset($rate->outgoing_rate))
            <h4 class="text-2xl text-gray-700 font-bold mb-4">{{ $rate->outgoing_rate }}</h4>
            @else
            <h4 class="text-2xl text-gray-400 italic mb-4">Not available</h4>
            @endif
            <a href="#" class="editToggle" data-target="outgoingRate">Edit</a>

            <div class="outgoingRate rateForm" style="display: none;">
                <form action="{{ route('statistics.update', $rate->id) }}" method="post">
                    @csrf
                    @method('put')
                    <h1>Outgoing Rate</h1>
                    <input type="text" name="outgoing_rate" id="" value="{{ $rate->outgoing_rate }}">
                    <button class="submit">Update</button>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const editLinks = document.querySelectorAll(".editToggle");

                editLinks.forEach(link => {
                    link.addEventListener("click", function(event) {
                        event.preventDefault(); // Prevent default anchor behavior

                        const targetClass = this.getAttribute("data-target");
                        const targetDiv = document.querySelector(`.${targetClass}`);

                        if (targetDiv.style.display === "none") {
                            targetDiv.style.display = "block";
                        } else {
                            targetDiv.style.display = "none";
                        }
                    });
                });
            });
        </script>

    </div>

    @if (session('success'))
        @php
            // Determine message type and assign corresponding colors
            $message = session('success');
            $bgColor = '';
            $borderColor = '';
            $textColor = '';
            $heading = '';

            if (str_contains($message, 'created')) {
            $bgColor = 'bg-green-100';
            $borderColor = 'border-green-400';
            $textColor = 'text-green-700';
            $heading = 'Created!';
            } elseif (str_contains($message, 'updated')) {
            $bgColor = 'bg-blue-100';
            $borderColor = 'border-blue-400';
            $textColor = 'text-blue-700';
            $heading = 'Updated!';
            } elseif (str_contains($message, 'deleted')) {
            $bgColor = 'bg-red-100';
            $borderColor = 'border-red-400';
            $textColor = 'text-red-700';
            $heading = 'Deleted!';
            }
        @endphp

        <div
            id="success-message"
            class="fixed bottom-0 right-0 m-4 {{ $bgColor }} {{ $borderColor }} {{ $textColor }} px-4 py-3 rounded shadow-lg"
            role="alert">
            <strong class="font-bold">{{ $heading }}</strong>
            <span class="block sm:inline">{{ $message }}</span>
        </div>

        <script>
            // Auto-dismiss the message after 3 seconds
            setTimeout(() => {
                const message = document.getElementById('success-message');
                if (message) {
                    message.style.transition = "opacity 0.5s ease-out";
                    message.style.opacity = "0";
                    setTimeout(() => message.remove(), 500); // Remove after fade-out
                }
            }, 3000);
        </script>
    @endif

    <div class="container">
        <h1>Customer Statistics</h1>

        <!-- First chart: Ward-wise Data -->
        <h3>Ward-wise Customer Count</h3>
        <canvas id="wardChart" width="400" height="200"></canvas>

        <!-- Second chart: Tole-wise Data under each Ward -->
        <h3>Tole-wise Customer Count (Under each Ward)</h3>
        <canvas id="toleChart" width="400" height="200"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Fetch data from the backend using AJAX
        $.getJSON('/data', function(data) {

            // First Chart: Ward-wise Customer Count
            var wardCtx = document.getElementById('wardChart').getContext('2d');
            var wardChart = new Chart(wardCtx, {
                type: 'bar',
                data: {
                    labels: ['Ward-7', 'Ward-8', 'Ward-15'],
                    datasets: [{
                        label: 'Customer Count (Ward-wise)',
                        data: [data.ward7, data.ward8, data.ward15],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Second Chart: Tole-wise Customer Count under each Ward
            var toleCtx = document.getElementById('toleChart').getContext('2d');
            var toleChart = new Chart(toleCtx, {
                type: 'bar',
                data: {
                    labels: ['Tole 7A', 'Tole 7B', 'Tole 7C', 'Tole 8A', 'Tole 8B', 'Tole 15A', 'Tole 15B', 'Tole 15C'],
                    datasets: [{
                        label: 'Customer Count (Tole-wise)',
                        data: [
                            data.tole7A, data.tole7B, data.tole7C,
                            data.tole8A, data.tole8B, data.tole15A,
                            data.tole15B, data.tole15C
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

</x-layout>