<x-layout class="min-h-screen">
    <div class="">
        <div>
            <h1>hello</h1>

        </div>
    </div>
    <!-- Fixed Bottom Bar -->
    <div class="fixed bottom-0 w-full bg-white p-4 shadow-md">
        <button id="newBillButton" type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            New Bill
        </button>
        <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
            Refresh
        </button>
        <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            Export
        </button>
    </div>

    <!-- Modal -->
    <div id="newBillModal" class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center overflow-y-auto ">
        <div class="bg-white rounded-lg shadow-lg p-6 w-3/4 ">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-medium">New Water Bill</h2>
                <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <h1 class="mr-2">Bill No:</h1>
                    @if(!empty($no_of_bills))
                    <input type="number" name="bill_no" id="bill_no" placeholder="{{ $no_of_bills }}" value="{{ $no_of_bills }}" disabled class="border p-2">
                    @endif
                </div>

                <div class="flex items-center space-x-2">
                    <h1 class="mr-2">Date:</h1>
                    <input type="date" name="date" id="date" value="{{ $currentDate }}" disabled class="border p-2">
                </div>
            </div>
            <!-- customer -->
            <div class="">
                <form id="search-form" class="mt-2" action="{{ route('test-search') }}" method="GET">
                    <div class="flex items-center space-x-2">
                        <h1 class="mr-2">Customer Name:</h1>
                        <div class="relative">
                            <input
                                type="text"
                                id="search"
                                name="query"
                                autocomplete="off"
                                class=" px-2 py-1"
                                placeholder="meter id or phone" />
                        </div>
                    </div>

                </form>

                <div id="search-results" class="mt-4">

                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    // Handle input change for live search
                    $('#search').on('input', function() {
                        var query = $(this).val();

                        if (query.length > 0) {
                            $.ajax({
                                url: "{{ route('test-search') }}",
                                method: 'GET',
                                data: {
                                    query: query
                                },
                                success: function(response) {
                                    // Update the search results container
                                    $('#search-results').html(response.html);
                                },
                                error: function() {
                                    console.error('Error fetching search results.');
                                }
                            });
                        } else {
                            $('#search-results').empty();
                        }
                    });

                    // Handle row click to populate the input and modal form with full name and other details
                    $(document).on('click', '.customer-row', function() {
                        // Extract data from the clicked row
                        var firstName = $(this).data('first-name');
                        var lastName = $(this).data('last-name');
                        var meterId = $(this).data('meter-id');
                        var wardNo = $(this).data('ward-no');
                        var tole = $(this).data('tole');
                        var phoneNumber = $(this).data('phone-number');

                        // Set the search input with the full name (first + last name)
                        $('#search').val(firstName + ' ' + lastName);

                        // Populate the modal form fields
                        $('#customer_first_name').val(firstName);
                        $('#customer_last_name').val(lastName);
                        $('#meter_id').val(meterId);
                        $('#ward_no').val(wardNo);
                        $('#tole').val(tole);
                        $('#phone_number').val(phoneNumber);

                        // Optionally, clear the search results
                        $('#search-results').empty();
                    });
                });
            </script>

            <!-- enter the previous and current reading -->
            <div class="d-flex">
                <div class="mb-4">
                    <label for="previous_reading" class="block text-sm font-medium text-gray-700">Previous Reading</label>
                    <input type="number" id="previous_reading" name="previous_reading" class="mt-1 w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="reading_value" class="block text-sm font-medium text-gray-700">Current Reading</label>
                    <input type="number" id="reading_value" name="reading_value" class="mt-1 w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="calculated_value" class="block text-sm font-medium text-gray-700">Total Amount</label>
                    <input type="text" id="calculated_value" name="calculated_value" class="mt-1 w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>

            <script>
                // Function to handle the dynamic calculation
                function calculate() {
                    const previousReading = parseFloat(document.getElementById('previous_reading').value);
                    const currentReading = parseFloat(document.getElementById('reading_value').value);

                    if (!isNaN(previousReading) && !isNaN(currentReading)) {
                        // Calculate the difference and multiply by 30
                        const difference = currentReading - previousReading;
                        const calculatedValue = difference * 30;

                        // Display the result in the calculated_value input field
                        document.getElementById('calculated_value').value = calculatedValue;
                    } else {
                        // Clear the result if inputs are invalid
                        document.getElementById('calculated_value').value = '';
                    }
                }

                // Event listeners to trigger calculation dynamically
                document.getElementById('previous_reading').addEventListener('input', calculate);
                document.getElementById('reading_value').addEventListener('input', calculate);
            </script>


            <!-- Modal Body -->
            <form id="waterBillForm">
                <div>
                    <div class="mb-4">
                        <label for="customer_first_name" class="block text-sm font-medium text-gray-700">Customer First Name</label>
                        <input type="text" id="customer_first_name" name="customer_first_name" class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled required>
                    </div>
                    <div class="mb-4">
                        <label for="customer_last_name" class="block text-sm font-medium text-gray-700">Customer Last Name</label>
                        <input type="text" id="customer_last_name" name="customer_last_name" class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="meter_id" class="block text-sm font-medium text-gray-700">Meter Number</label>
                    <input type="text" id="meter_id" name="meter_id" class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled required>
                </div>
                <div class="mb-4">
                    <label for="ward_no" class="block text-sm font-medium text-gray-700">Ward No</label>
                    <input type="text" id="ward_no" name="ward_no" class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled required>
                </div>
                <div class="mb-4">
                    <label for="tole" class="block text-sm font-medium text-gray-700">Tole</label>
                    <input type="text" id="tole" name="tole" class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled required>
                </div>
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled required>
                </div>
                <div>
                    <h1>Amount per unit : Rs 30</h1>
                    <h1>Total amount: <span id="total_amount">Rs </span></h1>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal -->
    <script>
        // Modal Elements
        const newBillButton = document.getElementById('newBillButton');
        const newBillModal = document.getElementById('newBillModal');
        const closeModalButton = document.getElementById('closeModalButton');

        // Open Modal
        newBillButton.addEventListener('click', () => {
            newBillModal.classList.remove('hidden');
        });

        // Close Modal
        closeModalButton.addEventListener('click', () => {
            newBillModal.classList.add('hidden');
        });

        // Close Modal on Background Click
        newBillModal.addEventListener('click', (event) => {
            if (event.target === newBillModal) {
                newBillModal.classList.add('hidden');
            }
        });
    </script>

    <script>

    </script>


</x-layout>