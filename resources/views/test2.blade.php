<x-layout>
    <div class="m-4 p-4">
        <div class="flex justify-between items-center">
            <div>
                <h1>Schedule</h1>
            </div>
            <div class="relative">
                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                    </svg>
                </button>
                <ul id="dropdownMenu" class="hidden absolute right-0 mt-2 py-2 text-sm text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-lg w-fit shadow-lg">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="g8xck_hLZnz5bWCmx2Dw">
        <div class="_9igzqn_6D3Qq5Hcwkfk d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl">
            Add another group
        </div>
        <form action="{{ route('routine.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Hidden file input -->
            <input type="file" id="fileInput" class="hidden" />
            <!-- Button that triggers the file input -->
            <button type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU t6gkcSf0Bt4MLItXvDJ_ UjxN_6aH_Opce1DX_DRr b9aD6g2qw84oyZNsMO8j TJ_bn80yrAmQvhz_svJe yM_AorRf2jSON3pDsdrz PeR2JZ9BZHYIH8Ea3F36 b0rXX23llDSn6PZwxAyx qUWbS_LTZujDB4XCd11V olKvC3XA85ljIesOcoAC mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n bBg1_YEFygzKJ0ohRbqk _JnjhZbEHpDJUKJAU8Cw GwrS3sperojCMeXaLYBO iIDqXVKz6wdYnAVfRsN2 dMTOiA3mf3FTjlHu6DqW"
                onclick="document.getElementById('fileInput').click();">
                <svg class="hlT3pgfpx11BUFMWNdhc Mln3CkDzLcoVQAC3Uqsd" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </form>
    </div>


    <script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</x-layout>