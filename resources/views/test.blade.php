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
    <div id="newBillModal" class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center">
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
            <div>
                <form id="search-form" class="max-w-md mx-auto " action="{{ route('test-search') }}" method="GET">
                    <label for="">Customer Name</label>
                    <div class="relative">
                        <input type="text" id="search" name="query" autocomplete="off" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="customer name or phone" />
                    </div>
                </form>

                <div id="search-results" class="mt-4">
                    <!-- START SEARCH RESULTS -->
                    @if(isset($customers))
                    @if($customers->isNotEmpty())
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">customer first name</th>
                                    <th scope="col" class="px-6 py-3">meter id</th>
                                    <th scope="col" class="px-6 py-3">tole</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 t-row hover:bg-gray-100 cursor-pointer customer-row"
                                    id="customer-{{ $customer->id }}">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $customer->customer_first_name }}
                                    </th>
                                    <td class="px-6 py-4">{{ $customer->meter_id }}</td>
                                    <td class="px-6 py-4">{{ $customer->tole }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>No customers found.</p>
                    @endif
                    @endif
                    <!-- END SEARCH RESULTS -->
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

                    // Handle row click to populate the input with both first and last names
                    $(document).on('click', '.customer-row', function() {
                        // Extract the customer's first and last name from the clicked row
                        var firstName = $(this).find('th').text(); // Assuming the first name is in the first <th> cell
                        var lastName = $(this).find('td').eq(1).text(); // Assuming the last name is in the second <td> cell (you can adjust this based on your layout)

                        // Set the search input with the full name (first + last name)
                        $('#search').val(firstName + ' ' + lastName);

                        // Optionally, clear the search results
                        $('#search-results').empty();
                    });
                });
            </script>




            <!-- Modal Body -->
            <form id="waterBillForm">
                <div class="mb-4">
                    <label for="customer_first_name" class="block text-sm font-medium text-gray-700">Customer First Name</label>
                    <input type="text" id="customer_first_name" name="customer_first_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="customer_last_name" class="block text-sm font-medium text-gray-700">Customer Last Name</label>
                    <input type="text" id="customer_last_name" name="customer_last_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="meter_id" class="block text-sm font-medium text-gray-700">Meter Number</label>
                    <input type="text" id="meter_id" name="meter_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="ward_no" class="block text-sm font-medium text-gray-700">Ward No</label>
                    <input type="text" id="ward_no" name="ward_no" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="tole" class="block text-sm font-medium text-gray-700">Tole</label>
                    <input type="text" id="tole" name="tole" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

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




</x-layout>