<x-layout>
    <div class="g8xck_hLZnz5bWCmx2Dw">
        <div class="_9igzqn_6D3Qq5Hcwkfk d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl">
            <h1 class="text-center text-xl font-normal text-gray-900 dark:text-white">This is the schedule routine followed by the Dharan Water Supply Management.</h1>
        </div>
        <div class="d-flex align-items-start" style="flex-wrap: nowrap;">
    @if($photo)
    <div class="w-300 mr-3">
        <img src="{{ asset($photo->routine_photo) }}" alt="Routine Photo" width="400" class="cursor-pointer" onclick="openModal('{{ asset($photo->routine_photo) }}')">
    </div>
    <p>Click to zoom</p>
    @endif
    <div class="w-1/3 ms-2">
        <form id="photoForm" action="{{ route('routine.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Hidden file input -->
            <input type="file" id="fileInput" name="routine_photo" class="hidden" onchange="submitForm()" />

            <!-- Button that triggers the file input -->
            <button type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU t6gkcSf0Bt4MLItXvDJ_ UjxN_6aH_Opce1DX_DRr b9aD6g2qw84oyZNsMO8j TJ_bn80yrAmQvhz_svJe yM_AorRf2jSON3pDsdrz PeR2JZ9BZHYIH8Ea3F36 b0rXX23llDSn6PZwxAyx qUWbS_LTZujDB4XCd11V olKvC3XA85ljIesOcoAC mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n bBg1_YEFygzKJ0ohRbqk _JnjhZbEHpDJUKJAU8Cw GwrS3sperojCMeXaLYBO iIDqXVKz6wdYnAVfRsN2 dMTOiA3mf3FTjlHu6DqW"
                onclick="document.getElementById('fileInput').click();">
                <svg class="hlT3pgfpx11BUFMWNdhc Mln3CkDzLcoVQAC3Uqsd" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="file-input-text">Choose if you want to select new routine</span>
            </button>
        </form>
    </div>
</div>

    </div>


    <!-- Modal for viewing full image -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50 ">
        <div class="relative flex justify-center items-center">
            <img id="modalImage" class="max-w-full max-h-screen object-contain" src="" alt="Full Image">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl font-bold">&times;</button>
        </div>
    </div>

    <div class="p-2">
        <h1 class="text-center text-4xl font-normal text-gray-900 dark:text-white"> Daily Water Schedule </h1>


        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Add Schedule
        </button>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New Schedule
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('schedule.store') }}" class="p-4 md:p-5" method="post">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">


                            <div class="_P4crYcwEj3d10LO5o8N DlUdveMmz1SkMYd217vD">
                                <label for="ward-no" class="_Vb9igHms0hI1PQcvp_S TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Ward No</label>
                                <select name="ward" id="ward-no" class="fzhbbDQ686T8arwvi_bJ jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5">
                                    <option value="" disabled selected>Select Ward No</option>
                                    <option value="Ward-7">Ward 7</option>
                                    <option value="Ward-8">Ward 8</option>
                                    <option value="Ward-15">Ward 15</option>
                                </select>
                            </div>
                            <div class="_P4crYcwEj3d10LO5o8N DlUdveMmz1SkMYd217vD">
                                <label for="tole-name" class="_Vb9igHms0hI1PQcvp_S TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Ward No</label>
                                <select name="tole" id="tole-name" class="fzhbbDQ686T8arwvi_bJ jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5">
                                    <option value="" disabled selected>Select Tole </option>


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
                                <input type="text" name="from" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To</label>
                                <input type="text" name="to" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                        </div>

                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Add
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-4">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Tole</th>
                        <th class="border border-gray-300 px-4 py-2">Ward</th>
                        <th class="border border-gray-300 px-4 py-2">From</th>
                        <th class="border border-gray-300 px-4 py-2">To</th>
                        <th class="border border-gray-300 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schedules as $schedule)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">{{ $schedule->tole }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $schedule->ward }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $schedule->from }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $schedule->to }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-blue-500 cursor-pointer hover:underline"><a href="{{ route('schedule.edit', $schedule->id ) }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

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


    <script>
        // Function to open the modal with the image
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        // Function to automatically submit the form after a file is selected
        function submitForm() {
            const fileInput = document.getElementById('fileInput');
            if (fileInput.files.length > 0) {
                document.getElementById('photoForm').submit();
            }
        }

        // Dropdown toggle
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown if clicked outside
        document.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</x-layout>