@extends('layouts.frontend')

@section('title', 'Apparel Manufacturer in Bangladesh')

@section('content')
  <!-- Hero Section -->
  <section 
  class="relative w-full py-20 md:py-32 bg-no-repeat bg-right bg-contain"
  style="background-image: url('{{ asset('storage/' . $banner->image) }}');">

  <!-- Dark Overlay (won't block text selection now) -->
  <div class="absolute inset-0 bg-black opacity-30 z-0 pointer-events-none transition-all duration-300"></div>

  <!-- Foreground Content -->
  <div class="relative z-10 max-w-5xl mx-auto px-6 flex items-center justify-start h-full">
  <div class="w-full md:w-1/2 text-center md:text-left">
  <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
  {{ $banner->title ?? 'Apparel Manufacturer in Bangladesh' }}
  </h1>
  <p class="mt-4 text-lg md:text-xl text-gray-100 font-medium">
  {{ $banner->subtitle ?? '40 Years of Manufacturing Experience' }}
  </p>

  <div class="mt-8 flex flex-wrap justify-center md:justify-start gap-4">
  @if($banner->button1_text && $banner->button1_url)
  <a href="{{ $banner->button1_url }}"
   target="_blank"
   class="bg-blue-800 hover:bg-blue-900 text-white px-6 py-2 rounded font-medium text-sm transition">
  {{ $banner->button1_text }}
  </a>
  @endif

  @if($banner->button2_text && $banner->button2_url)
  <a href="{{ $banner->button2_url }}"
   target="_blank"
   class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded font-medium text-sm transition">
  {{ $banner->button2_text }}
  </a>
  @endif

  @if($banner->button3_text && $banner->button3_url)
  <a href="{{ $banner->button3_url }}"
   target="_blank"
   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-medium text-sm transition">
  {{ $banner->button3_text }}
  </a>
  @endif
  <a href="#"
   target="_blank"
   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-medium text-sm transition">
   Product
  </a>
  </div>
  </div>
  </div>
  </section>





  <!-- Apparel We Manufacture -->
  <section class="text-center py-12 px-4">
  <!-- Section Title -->
  <h2 class="text-2xl md:text-3xl font-bold text-blue-900">
  Apparel <span class="text-red-600">That We </span><span class="text-blue-900">Manufacture</span>
  </h2>
  <!-- Divider with icon -->
  <div class="flex items-center justify-center mt-4">
  <div class="w-24 h-px bg-gray-300"></div>
  <div class="mx-3">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-900" fill="currentColor" viewBox="0 0 24 24">
  <path d="M16.5 2.5L14 5H10L7.5 2.5 2 4.5l1 4 3-1v13h12v-13l3 1 1-4-5.5-2z" />
  </svg>
  </div>
  <div class="w-24 h-px bg-gray-300"></div>
  </div>

  <!-- Description from Screenshot -->
  <p class="text-sm max-w-4xl mx-auto mt-4 text-gray-700 leading-relaxed">
  Discover the vibrant realm of fashion at Posh Garments, a premier garment manufacturer in Bangladesh.
  Embracing the ever-changing trends, we lead the way in creating garments that span a rich palette of colors, diverse
  styles, and varied fabrications.
  </p>
  <p class="text-sm max-w-4xl mx-auto mt-4 text-gray-700 leading-relaxed">
  Our expertise spans a wide array of products. For women and girls, indulge in the artistry of our exquisite styling
  and comfortable
  <a href="#" class="text-blue-600 underline">tops</a>, <a href="#" class="text-blue-600 underline">dresses</a>,
  <a href="#" class="text-blue-600 underline">skirts</a>, <a href="#" class="text-blue-600 underline">jumpsuits</a>,
  loungewear, nightwear, and sleepwear.
  </p>
  <p class="text-sm max-w-4xl mx-auto mt-4 text-gray-700 leading-relaxed">
  Addressing the fashion demands of men and boys, our collection encompasses casual wear shirts, boxers, boxer shorts,
  swim shorts, and sleepwear.
  Beyond fashion, we pride ourselves on crafting specialized products, including hotel, school, and hospital uniforms,
  exported with distinction to numerous countries.
  </p>
  <p class="text-sm max-w-4xl mx-auto mt-4 text-gray-700 leading-relaxed">
  Stay in vogue and value craftsmanship at Posh Garments – your ultimate destination for versatile and fashionable
  apparel.
  </p>

  <!-- Product Grid -->
  <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto mt-12">
  @foreach ($products as $product)
  <div class="bg-white shadow-sm rounded overflow-hidden">
  <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full object-cover" />
  <p class="mt-2 text-sm text-blue-900 font-medium">{{ $product->category }}</p>
  </div>
  @endforeach
  </div>
  </section>


  <!-- About Section -->
  <section class="bg-gray-50 py-12">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4 items-center">
  <div>
  <h3 class="text-lg font-semibold">About Posh Garments</h3>
  <p class="text-sm mt-2">Posh Garments Ltd. is a leading garment manufacturer in Bangladesh. Our production facility is equipped with modern machinery and technology that enables us to manufacture a wide range of garments.</p>
  </div>
  <div>
  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/sample" title="About Video" allowfullscreen></iframe>
  </div>
  </div>
  </section>

  <!-- Customers -->
  <section class="text-center py-10">
  <!-- Heading -->
  <h2 class="text-xl md:text-2xl font-bold text-blue-900">
  Our <span class="text-red-600">Customers</span>
  </h2>

  <!-- Divider with icon -->
  <div class="flex items-center justify-center mt-2">
  <div class="w-20 h-px bg-gray-300"></div>
  <div class="mx-3 text-blue-900 text-xl">👕</div>
  <div class="w-20 h-px bg-gray-300"></div>
  </div>

  <!-- Customer Logos Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-4 max-w-5xl mx-auto mt-6 px-4">
  @foreach ($customers as $customer)
  <img src="{{ asset('storage/' . $customer->logo) }}" alt="{{ $customer->name }}"
  class="mx-auto shadow-sm border border-gray-200 rounded-md p-2 bg-white" />
  @endforeach
  </div>
  </section>


  <!-- B2B -->
  <section class="bg-gray-100 py-12 text-center">
  <!-- Section Title -->
  <h3 class="text-lg md:text-xl font-semibold text-gray-800">
  Online B2B Web Platform
  </h3>
  <!-- Divider with icon -->
  <div class="flex items-center justify-center mt-2">
  <div class="w-20 h-px bg-gray-300"></div>
  <div class="mx-3 text-blue-900 text-xl">👕</div>
  <div class="w-20 h-px bg-gray-300"></div>
  </div>
  <!-- Platform Logos Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 max-w-4xl mx-auto mt-6 px-4">
  @foreach ($platforms as $platform)
  <div>
  <img src="{{ asset('storage/' . $platform->logo) }}" alt="{{ $platform->name }}" class="h-10 mx-auto" />
  </div>
  @endforeach
  </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-12 px-4 bg-white">
  <!-- Section Header -->
  <div class="text-center max-w-4xl mx-auto">
  <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
    Why do you choose <span class="text-red-600">Posh Garments</span>
  </h2>
  </div>

  <!-- Intro Text + Image -->
  <div class="mt-8 max-w-6xl mx-auto flex flex-col md:flex-row items-start gap-6">
  <div class="md:w-1/2 text-gray-700 text-sm leading-relaxed space-y-4 j">
    <p>
    Posh Garments, an acclaimed apparel manufacturer, produces a diverse range of garments known for exceptional
    prices,
    innovative designs, and value addition—a crucial aspect of the fast fashion industry. Our management's
    foundation is built
    on professionalism, skill, expertise, and unwavering dedication.
    </p>
    <p>
    Our systems integrate Industrial Engineering, Enterprise Resource Planning (ERP), Standard Operating Procedure
    (SOP),
    Quality Management System (QMS), and HR Policy, ensuring efficiency. Timely shipments and product quality are
    paramount,
    forming the backbone of customer satisfaction.
    </p>
  </div>

  <div class="md:w-1/2">
    <img src="{{ asset('assets/images/factory.jpg') }}" alt="Factory" class="w-full rounded-lg" />
  </div>
  </div>

  <!-- Features List -->
  <div class="mt-10 max-w-6xl mx-auto space-y-6">
  @foreach($features as $feature)
  <div class="bg-white border border-gray-200 rounded shadow-sm p-6 flex items-start gap-4">
    <div class="text-blue-700 text-xl mt-1">
    <i class="{{ $feature->icon }}"></i>
    </div>
    <div>
    <h4 class="text-md md:text-lg font-semibold text-gray-800">
    {{ $feature->title }}
    </h4>
    <p class="mt-1 text-sm text-gray-700 leading-relaxed">
    {{ $feature->description }}
    </p>
    </div>
  </div>
  @endforeach
  </div>
  </section>


  <!-- Best Manufacturer -->
  <section class="bg-gray-50 py-12">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4 items-center">
  <div>
  <h3 class="text-lg font-semibold">One of the <span class="text-red-600">Best Manufacturers</span> in Bangladesh</h3>
  <p class="text-sm mt-2">Our experience and expertise set us apart...</p>
  </div>
  <div>
  <img src="{{ asset('assets/images/factory.jpg') }}" alt="Factory" class="w-full rounded-lg" />
  </div>
  </div>
  </section>

  <!-- Clothing Manufacturer -->
  <section class="py-12 px-4 max-w-5xl mx-auto text-center">
  <h3 class="text-lg font-semibold">Clothing <span class="text-red-600">Manufacturer</span> in Bangladesh</h3>
  <p class="text-sm mt-2">We deliver a wide range of clothing solutions tailored to customer needs...</p>
  </section>
@endsection
