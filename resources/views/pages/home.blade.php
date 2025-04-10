@extends('layouts.frontend')

@section('title', 'Apparel Manufacturer in Bangladesh')

@section('content')
<!-- Hero Section -->
<section class="bg-gray-100 py-12 text-center "  style="background-image: url('{{ asset('storage/' . $banner->image) }}');"">
  
  <div class="max-w-4xl mx-auto px-4">
    <h1 class="text-2xl md:text-3xl font-semibold text-gray-800"> {{ $banner->title ?? 'Default Title' }}</h1>
    <p class="text-sm md:text-base mt-2"> {{ $banner->subtitle ?? '' }}</p>
    <div class="mt-4 flex justify-center space-x-4">
      <button class="bg-blue-500 text-white px-4 py-2 rounded text-sm">    @if($banner->button1_text && $banner->button1_url)
                <a href="{{ $banner->button1_url }}"
                   class="bg-blue-500 text-white px-4 py-2 rounded text-sm hover:bg-blue-600 transition">
                    {{ $banner->button1_text }}
                </a>
            @endif</button>
      <button class="bg-green-500 text-white px-4 py-2 rounded text-sm">    @if($banner->button2_text && $banner->button2_url)
                <a href="{{ $banner->button2_url }}"
                   class="bg-green-500 text-white px-4 py-2 rounded text-sm hover:bg-green-600 transition">
                    {{ $banner->button2_text }}
                </a>
            @endif</button>
    </div>
  </div>
</section>



<!-- Apparel We Manufacture -->
<section class="text-center py-12">
  <h2 class="text-xl font-semibold">Apparel <span class="text-red-600">That</span> <span class="text-blue-600">We</span> Manufacture</h2>
  <p class="text-sm max-w-3xl mx-auto mt-2 px-4">We offer a wide range of apparel including women’s wear, men’s wear, kids wear, sportswear, workwear, and lingerie.</p>
  <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto mt-8 px-4">
    @for($i = 1; $i <= 6; $i++)
      <div>
        <img src="{{ asset("assets/images/product{$i}.png") }}" alt="" class="w-full" />
        <p class="mt-2 text-sm">
          @switch($i)
            @case(1) New Collection @break
            @case(2) Women’s Wear @break
            @case(3) Men’s Wear @break
            @case(4) Kids’ Wear @break
            @case(5) Uniform @break
            @case(6) Nightwear @break
          @endswitch
        </p>
      </div>
    @endfor
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
<section class="text-center py-12">
  <h3 class="text-lg font-semibold">Our Customers</h3>
  <div class="grid grid-cols-3 md:grid-cols-6 gap-4 max-w-5xl mx-auto mt-6 px-4">
    @for($i = 1; $i <= 6; $i++)
      <img src="{{ asset("assets/images/logo{$i}.png") }}" alt="Customer Logo {{ $i }}" class="mx-auto" />
    @endfor
  </div>
</section>

<!-- B2B -->
<section class="bg-gray-100 py-12 text-center">
  <h3 class="text-lg font-semibold">Online B2B Web Platform</h3>
  <div class="flex justify-center items-center space-x-6 mt-6">
    <img src="{{ asset('assets/images/b2b1.png') }}" alt="" class="h-10" />
    <img src="{{ asset('assets/images/b2b2.png') }}" alt="" class="h-10" />
  </div>
</section>

<!-- Why Choose Us -->
<section class="py-12 px-4 max-w-5xl mx-auto">
  <h3 class="text-lg font-semibold text-center">Why do you choose <span class="text-red-600">Posh Garments</span></h3>
  <div class="mt-6 grid gap-6">
    @php
      $features = [
        'Skilled Workforce' => 'Our skilled team assures the best production standards...',
        'Accuracy & Transparency' => 'We ensure accurate information and transparent supply chain...',
        'Product Safety' => 'We follow international compliance for product safety...',
        'Occupational Health & Safety' => 'We ensure a safe workplace and proper health standards...',
        'Sustainability and Recycling' => 'We are committed to eco-friendly production...',
        'Worldwide Export' => 'Serving clients globally with consistent quality...'
      ];
    @endphp
    @foreach($features as $title => $desc)
      <div>
        <h4 class="font-semibold text-sm">{{ $title }}</h4>
        <p class="text-sm mt-1">{{ $desc }}</p>
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
      <img src="{{ asset('assets/images/factory.png') }}" alt="Factory" class="w-full rounded-lg" />
    </div>
  </div>
</section>

<!-- Clothing Manufacturer -->
<section class="py-12 px-4 max-w-5xl mx-auto text-center">
  <h3 class="text-lg font-semibold">Clothing <span class="text-red-600">Manufacturer</span> in Bangladesh</h3>
  <p class="text-sm mt-2">We deliver a wide range of clothing solutions tailored to customer needs...</p>
</section>
@endsection
