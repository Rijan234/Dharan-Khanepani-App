<x-layout>
    <!-- Modal body -->
    <form action="{{ route('schedule.update', $schedule->id) }}" class="p-4 md:p-5" method="post">
        @csrf
        @method('put')
        <div class="grid gap-4 mb-4 grid-cols-2">


            <div class="_P4crYcwEj3d10LO5o8N DlUdveMmz1SkMYd217vD">
                <label for="ward-no" class="_Vb9igHms0hI1PQcvp_S TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Ward No</label>
                <select id="edit-ward-no" disabled name="ward_no" class="jtAJHOc7mn7b4IKRO59D vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5 form-select" readonly>
                    <option value="" disabled>Select Ward No</option>
                    <option value="Ward-7" {{ $schedule->ward_no == 'Ward-7' ? 'selected' : '' }}>Ward 7</option>
                    <option value="Ward-8" {{ $schedule->ward_no == 'Ward-8' ? 'selected' : '' }}>Ward 8</option>
                    <option value="Ward-15" {{ $schedule->ward_no == 'Ward-15' ? 'selected' : '' }}>Ward 15</option>
                </select>
            </div>
            <div class="_P4crYcwEj3d10LO5o8N DlUdveMmz1SkMYd217vD">
                <label for="tole-name" class="_Vb9igHms0hI1PQcvp_S TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Ward No</label>
                <select name="tole" id="tole-name" class="fzhbbDQ686T8arwvi_bJ jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5">
                <option value="" disabled>Select Tole</option>
                    @php
                        $toleData = [
                            'Ward-7' => ['Tole 7A', 'Tole 7B', 'Tole 7C'],
                            'Ward-8' => ['Tole 8A', 'Tole 8B'],
                            'Ward-15' => ['Tole 15A', 'Tole 15B', 'Tole 15C'],
                        ];
                        $currentWardToles = $toleData[$schedule->ward] ?? [];
                    @endphp

                    @foreach ($currentWardToles as $tole)
                        <option value="{{ $tole }}" {{ $schedule->tole == $tole ? 'selected' : '' }} disabled>{{ $tole }}</option>
                    @endforeach


                </select>
            </div>

            <script>
                // Data: Mapping of Wards to their respective Tole names
                const toleData = {
                    "Ward-7": ["Tole 7A", "Tole 7B", "Tole 7C"],
                    "Ward-8": ["Tole 8A", "Tole 8B"],
                    "Ward-15": ["Tole 15A", "Tole 15B", "Tole 15C"]
                };

                // Elements
                const wardSelect = document.getElementById('ward-no');
                const toleSelect = document.getElementById('tole-name');

                // Function to populate Tole options based on selected Ward
                wardSelect.addEventListener('change', function() {
                    const selectedWard = this.value;

                    // Clear existing tole options
                    toleSelect.innerHTML = '<option value="" disabled selected>Select Tole</option>';

                    // Populate new options for the selected ward
                    if (toleData[selectedWard]) {
                        toleData[selectedWard].forEach(tole => {
                            const option = document.createElement('option');
                            option.value = tole;
                            option.textContent = tole;
                            toleSelect.appendChild(option);
                        });
                    }
                });
            </script>
            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From</label>
                <input type="text" name="from" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" value="{{ $schedule->from }}" required="">
            </div>
            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To</label>
                <input type="text" name="to" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" value="{{ $schedule->to }}" required="">
            </div>
        </div>

        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Update
        </button>
    </form>
</x-layout>