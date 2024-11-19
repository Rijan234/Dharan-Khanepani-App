<x-layout class="min-h-screen">
    <div class="">
        <div style="display: flex; justify-content: space-between; align-items: center; background-color: #33aaf3; padding: 10px 20px; border-radius: 8px; margin: 20px;">
            <h1 style="margin: 0; color: white;">Current User: {{ Auth::user()->name }}</h1>
            <h1 style="margin: 0; color: white;">Date: {{ $currentDate }}</h1>
        </div>

        <div>

            <div class="w-[100%] mx-auto overflow-x-auto bg-white shadow-lg border border-gray-200">
                <table class="min-w-[1500px] table-auto border-collapse export-table">
                    <thead class="bg-blue-100 text-blue-700 text-sm font-semibold">
                        <tr>
                            <th class="border border-gray-200 px-6 py-4 text-left">ID</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Customer ID</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Bill No</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Meter ID</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Reading Date</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Reading Value</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Previous Reading</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Total Amount</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Created At</th>
                            <th class="border border-gray-200 px-6 py-4 text-left">Paid At</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700">
                        @forelse ($bills as $bill)
                        <tr class="odd:bg-white even:bg-blue-50 hover:bg-blue-100">
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->id }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->customer_id }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->bill_no }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->meter_id }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->reading_date }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->reading_value }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->previous_reading }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->total_amount }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->created_at }}</td>
                            <td class="border border-gray-200 px-6 py-4">{{ $bill->updated_at }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="border border-gray-200 px-6 py-4 text-center text-gray-500">
                                No billing records found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

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
        <a href="{{ route('billing.index') }}">
            <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                Refresh
            </button>
        </a>
        <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2 export-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            Export
        </button>
    </div>


    <!-- Modal -->
    <div id="newBillModal" class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center overflow-y-auto">
        <div class="bg-white mt-16 rounded-lg shadow-lg p-8 w-3/4 md:w-2/3 lg:w-1/2">
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <!-- Modal Header -->

            <div class="flex justify-between items-center mb-6 border-b pb-4">
                <h2 class="text-xl font-semibold text-gray-800">New Water Bill</h2>
                <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>


            <form id="search-form" class="mt-2" action="{{ route('test-search') }}" method="GET">
                <div class="flex items-center space-x-2">
                    <h1 class="mr-2 text-sm font-medium text-gray-700">Customer Name:</h1>
                    <input type="text" id="search" name="query" autocomplete="off" class="px-3 py-2 border rounded-md shadow-sm text-gray-700" placeholder="Meter ID or Phone Number" />
                </div>
            </form>
            <br />
            <hr>
            <div id="search-results" class="mt-4"></div>


            <form action="{{ route('billing.store') }}" method="post">
                @csrf
                <!-- Bill Info -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-sm font-medium text-gray-700">Bill No:</h1>
                        @if(!empty($no_of_bills))
                        <input type="number" name="bill_no" id="bill_no" placeholder="{{ $no_of_bills }}" value="{{ $no_of_bills }}" readonly class="border p-2 rounded-md text-gray-700">
                        @endif
                    </div>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-sm font-medium text-gray-700">Date:</h1>
                        <input type="date" name="reading_date" id="date" value="{{ $currentDate }}" readonly class="border p-2 rounded-md text-gray-700">
                    </div>
                </div>


                <!-- Customer Info -->
                <div class="border-t pt-6">

                    <h3 class="text-lg font-medium text-gray-800">Customer Information</h3>
                    <!-- Populate customer data -->
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="customer_first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="customer_first_name" name="customer_first_name" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly required>
                        </div>
                        <div>
                            <label for="customer_last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="customer_last_name" name="customer_last_name" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="meter_id" class="block text-sm font-medium text-gray-700">Meter Number</label>
                            <input type="text" id="meter_id" name="meter_id" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required readonly>
                        </div>
                        <div>
                            <label for="ward_no" class="block text-sm font-medium text-gray-700">Ward No</label>
                            <input type="text" id="ward_no" name="ward_no" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="tole" class="block text-sm font-medium text-gray-700">Tole</label>
                            <input type="text" id="tole" name="tole" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly required>
                        </div>
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly required>
                        </div>
                        <input type="text" name="customer_id" id="customer_id" value="" hidden>
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
                        <input type="text" id="calculated_value" name="total_amount" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" readonly>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-6">
                    <button type="submit"  class="px-6 py-3 bg-indigo-600 text-white text-sm font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                        Save 
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
                var customerId = $(this).data('customer-id');

                // Set the search input with the full name (first + last name)
                $('#search').val(firstName + ' ' + lastName);

                // Populate the modal form fields
                $('#customer_first_name').val(firstName);
                $('#customer_last_name').val(lastName);
                $('#meter_id').val(meterId);
                $('#ward_no').val(wardNo);
                $('#tole').val(tole);
                $('#phone_number').val(phoneNumber);
                $('#customer_id').val(customerId);

                // Optionally, clear the search results
                $('#search-results').empty();
            });
        });
    </script>
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
    <script>
        document.querySelector('.export-btn').addEventListener('click', function() {
            const table = document.querySelector('.export-table');
            let csv = [];

            // Get table headers and create the CSV header row
            const headers = [];
            table.querySelectorAll('thead th').forEach(function(header) {
                headers.push(header.textContent.trim());
            });
            csv.push(headers.join(',')); // Join headers with commas

            // Get table rows and process each row's data
            table.querySelectorAll('tbody tr').forEach(function(row) {
                const rowData = [];
                row.querySelectorAll('td').forEach(function(cell, index) {
                    let cellText = cell.textContent.trim();

                    // Handle date columns explicitly (Reading Date, Created At, Paid At)
                    if (index === 4 || index === 8 || index === 9) { // 4 is Reading Date, 8 is Created At, 9 is Paid At
                        const date = new Date(cellText);
                        if (!isNaN(date.getTime())) {
                            // Format date as YYYY-MM-DD for consistency in CSV
                            cellText = date.toISOString().split('T')[0]; // Using ISO format (YYYY-MM-DD)
                        } else {
                            cellText = ''; // If the date is invalid, leave it empty
                        }
                    }

                    rowData.push(cellText);
                });
                csv.push(rowData.join(',')); // Join row data with commas
            });

            // Create CSV Blob and trigger download
            const blob = new Blob([csv.join('\n')], {
                type: 'text/csv;charset=utf-8;'
            });
            const link = document.createElement('a');
            if (link.download !== undefined) { // feature detection for browsers
                const url = URL.createObjectURL(blob);
                link.setAttribute('href', url);
                link.setAttribute('download', 'table_data.csv');
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        });
    </script>

</x-layout>