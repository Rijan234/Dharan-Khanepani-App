<x-layout>
    <div class="g8xck_hLZnz5bWCmx2Dw">
        <div class="_9igzqn_6D3Qq5Hcwkfk d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl">
            This is the schedule routine followed by the Dharan Water Supply Management.
        </div>
        @if($photo)
        <div class="w-20 m-4">
    <img src="{{ asset($photo->routine_photo) }}" alt="Routine Photo" class="cursor-pointer" onclick="openModal('{{ asset($photo->routine_photo) }}')">
</div>

        @endif
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
    

    <!-- Modal for viewing full image -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="relative flex justify-center items-center">
            <img id="modalImage" class="max-w-full max-h-screen object-contain" src="" alt="Full Image">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl font-bold">&times;</button>
        </div>
    </div>

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