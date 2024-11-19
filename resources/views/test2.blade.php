<!-- Modal -->
<div id="newBillModal" class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center overflow-y-auto">
    <div class="bg-white rounded-lg shadow-lg p-8 w-3/4 md:w-2/3 lg:w-1/2">
        <!-- Modal Header -->
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h2 class="text-xl font-semibold text-gray-800">New Water Bill</h2>
            <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Bill Info -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="flex items-center space-x-2">
                <h1 class="text-sm font-medium text-gray-700">Bill No:</h1>
                @if(!empty($no_of_bills))
                <input type="number" name="bill_no" id="bill_no" placeholder="{{ $no_of_bills }}" value="{{ $no_of_bills }}" disabled class="border p-2 rounded-md text-gray-700">
                @endif
            </div>
            <div class="flex items-center space-x-2">
                <h1 class="text-sm font-medium text-gray-700">Date:</h1>
                <input type="date" name="date" id="date" value="{{ $currentDate }}" disabled class="border p-2 rounded-md text-gray-700">
            </div>
        </div>

        <!-- Customer Info -->
        <div class="border-t pt-6">
            <h3 class="text-lg font-medium text-gray-800">Customer Information</h3>
            <form id="search-form" class="mt-4" action="{{ route('test-search') }}" method="GET">
                <div class="flex items-center space-x-2">
                    <h1 class="mr-2 text-sm font-medium text-gray-700">Customer Name:</h1>
                    <input type="text" id="search" name="query" autocomplete="off" class="px-3 py-2 border rounded-md shadow-sm text-gray-700" placeholder="Meter ID or Phone Number" />
                </div>
            </form>
            <div id="search-results" class="mt-4"></div>

            <!-- Populate customer data -->
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label for="customer_first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="customer_first_name" name="customer_first_name" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" disabled required>
                </div>
                <div>
                    <label for="customer_last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="customer_last_name" name="customer_last_name" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" disabled required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label for="meter_id" class="block text-sm font-medium text-gray-700">Meter Number</label>
                    <input type="text" id="meter_id" name="meter_id" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" disabled required>
                </div>
                <div>
                    <label for="ward_no" class="block text-sm font-medium text-gray-700">Ward No</label>
                    <input type="text" id="ward_no" name="ward_no" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" disabled required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label for="tole" class="block text-sm font-medium text-gray-700">Tole</label>
                    <input type="text" id="tole" name="tole" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" disabled required>
                </div>
                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" disabled required>
                </div>
            </div>
        </div>

        <!-- Reading Info -->
        <div class="border-t pt-6 mt-6">
            <h3 class="text-lg font-medium text-gray-800">Reading Information</h3>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label for="previous_reading" class="block text-sm font-medium text-gray-700">Previous Reading</label>
                    <input type="number" id="previous_reading" name="previous_reading" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label for="reading_value" class="block text-sm font-medium text-gray-700">Current Reading</label>
                    <input type="number" id="reading_value" name="reading_value" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
            </div>
            <div class="mt-4">
                <label for="calculated_value" class="block text-sm font-medium text-gray-700">Total Amount</label>
                <input type="text" id="calculated_value" name="calculated_value" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly>
            </div>
        </div>

        <!-- Amount Calculation Script -->
        <script>
            function calculate() {
                const previousReading = parseFloat(document.getElementById('previous_reading').value);
                const currentReading = parseFloat(document.getElementById('reading_value').value);

                if (!isNaN(previousReading) && !isNaN(currentReading)) {
                    const difference = currentReading - previousReading;
                    const calculatedValue = difference * 30;
                    document.getElementById('calculated_value').value = `Rs ${calculatedValue}`;
                } else {
                    document.getElementById('calculated_value').value = '';
                }
            }

            document.getElementById('previous_reading').addEventListener('input', calculate);
            document.getElementById('reading_value').addEventListener('input', calculate);
        </script>

        <!-- Submit Button -->
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white text-sm font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                Submit Bill
            </button>
        </div>
    </div>
</div>

