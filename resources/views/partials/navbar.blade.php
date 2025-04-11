<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
        <div class="flex items-center space-x-2">
        @if (!empty($logo))
            <img src="{{ asset('storage/' . $logo) }}" alt="Logo" class="h-6" />
        @else
            <img src="{{ asset('assets/images/default-logo.png') }}" alt="" class="h-6" />
        @endif

            <span class="text-sm font-medium">G Garments</span>
        </div>
        <nav x-data="{ open: false }" class="relative">
            <div class="hidden md:flex space-x-6 text-sm">
                <a href="#" class="hover:text-blue-600">Home</a>
                <a href="#" class="hover:text-blue-600">About Us</a>
                <a href="#" class="hover:text-blue-600">Products</a>
                <a href="#" class="hover:text-blue-600">Sustainability</a>
                <a href="#" class="hover:text-blue-600">Career</a>
                <a href="#" class="hover:text-blue-600">Blog</a>
            </div>
            <button @click="open = !open" class="md:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div x-show="open" @click.away="open = false"
                class="absolute right-0 mt-2 bg-white border rounded-md shadow-md md:hidden flex flex-col text-sm p-4 space-y-2">
                <a href="#" class="hover:text-blue-600">Home</a>
                <a href="#" class="hover:text-blue-600">About Us</a>
                <a href="#" class="hover:text-blue-600">Products</a>
                <a href="#" class="hover:text-blue-600">Sustainability</a>
                <a href="#" class="hover:text-blue-600">Career</a>
                <a href="#" class="hover:text-blue-600">Blog</a>
            </div>
        </nav>
    </div>
</header>