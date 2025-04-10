<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
         
        @endif
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        </head>
    </head>
    <body >
<!-- Navbar -->
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
        <div class="flex items-center space-x-2">
            <img src="logo.png" alt="Logo" class="h-6" />
            <span class="text-sm font-medium">Posh Garments</span>
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

<!-- Hero Section -->
<section class="bg-gray-100 py-12 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-2xl md:text-3xl font-semibold text-gray-800">Apparel Manufacturer in Bangladesh</h1>
        <p class="text-sm md:text-base mt-2">40 Years of Manufacturing Experience</p>
        <div class="mt-4 flex justify-center space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded text-sm">Get in Touch</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded text-sm">Manufacturing Strength</button>
        </div>
    </div>
</section>

<!-- Section: Apparel We Manufacture -->
<section class="text-center py-12">
    <h2 class="text-xl font-semibold">Apparel <span class="text-red-600">That</span> <span
            class="text-blue-600">We</span> Manufacture</h2>
    <p class="text-sm max-w-3xl mx-auto mt-2 px-4">We offer a wide range of apparel including women’s wear, men’s wear,
        kids wear, sportswear, workwear, and lingerie.</p>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto mt-8 px-4">
        <div><img src="product1.png" alt="" class="w-full" />
            <p class="mt-2 text-sm">New Collection</p>
        </div>
        <div><img src="product2.png" alt="" class="w-full" />
            <p class="mt-2 text-sm">Women’s Wear</p>
        </div>
        <div><img src="product3.png" alt="" class="w-full" />
            <p class="mt-2 text-sm">Men’s Wear</p>
        </div>
        <div><img src="product4.png" alt="" class="w-full" />
            <p class="mt-2 text-sm">Kids’ Wear</p>
        </div>
        <div><img src="product5.png" alt="" class="w-full" />
            <p class="mt-2 text-sm">Uniform</p>
        </div>
        <div><img src="product6.png" alt="" class="w-full" />
            <p class="mt-2 text-sm">Nightwear</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4 items-center">
        <div>
            <h3 class="text-lg font-semibold">About Posh Garments</h3>
            <p class="text-sm mt-2">Posh Garments Ltd. is a leading garment manufacturer in Bangladesh. Our production
                facility is equipped with modern machinery and technology that enables us to manufacture a wide range of
                garments.</p>
        </div>
        <div>
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/sample" title="About Video"
                allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- Customers -->
<section class="text-center py-12">
    <h3 class="text-lg font-semibold">Our Customers</h3>
    <div class="grid grid-cols-3 md:grid-cols-6 gap-4 max-w-5xl mx-auto mt-6 px-4">
        <img src="logo1.png" alt="Customer" class="mx-auto" />
        <img src="logo2.png" alt="Customer" class="mx-auto" />
        <img src="logo3.png" alt="Customer" class="mx-auto" />
        <img src="logo4.png" alt="Customer" class="mx-auto" />
        <img src="logo5.png" alt="Customer" class="mx-auto" />
        <img src="logo6.png" alt="Customer" class="mx-auto" />
    </div>
</section>

<!-- B2B Platform -->
<section class="bg-gray-100 py-12 text-center">
    <h3 class="text-lg font-semibold">Online B2B Web Platform</h3>
    <div class="flex justify-center items-center space-x-6 mt-6">
        <img src="b2b1.png" alt="" class="h-10" />
        <img src="b2b2.png" alt="" class="h-10" />
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-12 px-4 max-w-5xl mx-auto">
    <h3 class="text-lg font-semibold text-center">Why do you choose <span class="text-red-600">Posh Garments</span></h3>
    <div class="mt-6 grid gap-6">
        <div>
            <h4 class="font-semibold text-sm">Skilled Workforce</h4>
            <p class="text-sm mt-1">Our skilled team assures the best production standards...</p>
        </div>
        <div>
            <h4 class="font-semibold text-sm">Accuracy & Transparency</h4>
            <p class="text-sm mt-1">We ensure accurate information and transparent supply chain...</p>
        </div>
        <div>
            <h4 class="font-semibold text-sm">Product Safety</h4>
            <p class="text-sm mt-1">We follow international compliance for product safety...</p>
        </div>
        <div>
            <h4 class="font-semibold text-sm">Occupational Health & Safety</h4>
            <p class="text-sm mt-1">We ensure a safe workplace and proper health standards...</p>
        </div>
        <div>
            <h4 class="font-semibold text-sm">Sustainability and Recycling</h4>
            <p class="text-sm mt-1">We are committed to eco-friendly production...</p>
        </div>
        <div>
            <h4 class="font-semibold text-sm">Worldwide Export</h4>
            <p class="text-sm mt-1">Serving clients globally with consistent quality...</p>
        </div>
    </div>
</section>

<!-- Best Manufacturer Section -->
<section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4 items-center">
        <div>
            <h3 class="text-lg font-semibold">One of the <span class="text-red-600">Best Manufacturers</span> in
                Bangladesh</h3>
            <p class="text-sm mt-2">Our experience and expertise set us apart...</p>
        </div>
        <div>
            <img src="factory.png" alt="Factory" class="w-full rounded-lg" />
        </div>
    </div>
</section>

<!-- Clothing Manufacturer Section -->
<section class="py-12 px-4 max-w-5xl mx-auto text-center">
    <h3 class="text-lg font-semibold">Clothing <span class="text-red-600">Manufacturer</span> in Bangladesh</h3>
    <p class="text-sm mt-2">We deliver a wide range of clothing solutions tailored to customer needs...</p>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white text-sm py-6">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <h4 class="font-semibold mb-2">About Us</h4>
            <ul class="space-y-1">
                <li><a href="#" class="hover:underline">Company Profile</a></li>
                <li><a href="#" class="hover:underline">Our Team</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Manufacturing</h4>
            <ul class="space-y-1">
                <li><a href="#" class="hover:underline">Our Products</a></li>
                <li><a href="#" class="hover:underline">Production Strength</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Contact Info</h4>
            <ul class="space-y-1">
                <li>info@poshgarments.com</li>
                <li>+880 2 9871234</li>
            </ul>
        </div>
    </div>
    <div class="mt-4 text-center text-xs">© Posh Garments Ltd. All rights reserved.</div>
</footer>
    </body>
</html>
