@if(isset($customers) && $customers->isNotEmpty())
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Customer Name</th>
                <th scope="col" class="px-6 py-3">Meter ID</th>
                <th scope="col" class="px-6 py-3">Tole</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 t-row hover:bg-gray-100 cursor-pointer customer-row" data-first-name="{{ $customer->customer_first_name }}" data-last-name="{{ $customer->customer_last_name }}">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="#">{{ $customer->customer_first_name }} {{ $customer->customer_last_name }}</a>
                </td>
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
