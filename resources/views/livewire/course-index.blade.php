<div>
    <div class="bg-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg shadow h-12 px-4 rounded-lg text-gray-700 mr-4">
                <i class="far fa-file-alt text-xs mr-4"></i>
                Todos los cursos
            </button>

            
            <!-- Dropdown categorias-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg shadow" x-on:click="open = !open">
                    Categoria
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
 
            <!-- Dropdown niveles-->
            <div class="relative" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg shadow" x-on:click="open = !open">
                    Niveles
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div>

    </div>
</div>
