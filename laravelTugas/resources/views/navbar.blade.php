<nav class="flex justify-center bg-transparent backdrop-blur-sm p-4 shadow-md">
    <ul class=" flex items-center justify-between my-2">
        <li class="relative">
            <!-- Master Data Dropdown Button -->
            <button onclick="toggleDropdown()" class="mx-1 text-l font-semibold rounded-md hover:bg-blue-900 hover:text-white p-1 hover:font-bold focus:outline-none">
                Master data
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="absolute mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Master Organizer Event</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Master Category Event</a>
                <a href="/masterEvent" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Master Event</a>
            </div>
        </li>
        <li>
            <a href="/" class=" mx-1 text-l font-semibold rounded-md hover:bg-blue-900 hover:text-white p-1 hover:font-bold">Event</a>
        </li>
    </ul>
</nav>

<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
    }

    // Optional: Close dropdown when clicking outside of it
    window.onclick = function(event) {
        var dropdownMenu = document.getElementById('dropdownMenu');
        if (!event.target.matches('button')) {
            if (!dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.add('hidden');
            }
        }
    }
</script>
