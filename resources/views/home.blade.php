@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Hero Banner -->
    <section class="mb-16">

        <div class="rounded-2xl bg-[#9ADE6A] overflow-hidden">

            <div class="grid lg:grid-cols-2 items-center">

                <div class="p-10">

                    <span class="uppercase tracking-widest text-sm text-green-900 font-semibold">
                        Organic Fruits
                    </span>

                    <h1 class="text-5xl font-bold text-green-900 mt-4 leading-tight">
                        Up to 10%<br>
                        Off Voucher
                    </h1>

                    <a href="{{ url('/shop') }}"
                       class="inline-flex mt-8 bg-white text-[#4A7C2F] font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition">

                        Shop Now

                    </a>

                </div>

                <div class="flex justify-center p-8">

                    <img
                        src="{{ asset('images/banner-fruits.png') }}"
                        alt="Banner"
                        class="max-h-96 object-contain">

                </div>

            </div>

        </div>

    </section>

    <!-- Flash Sales -->
    <section class="mb-16">

        <div class="flex justify-between items-center mb-8">

            <div>

                <p class="text-orange-500 font-semibold uppercase tracking-widest">
                    Today's
                </p>

                <h2 class="text-3xl font-bold">
                    Flash Sales
                </h2>

            </div>

            <!-- Countdown -->
            <div class="flex gap-6 text-center">

                <div>
                    <p class="text-xs text-gray-500">Days</p>
                    <h3 class="text-2xl font-bold">03</h3>
                </div>

                <div>
                    <p class="text-xs text-gray-500">Hours</p>
                    <h3 class="text-2xl font-bold">18</h3>
                </div>

                <div>
                    <p class="text-xs text-gray-500">Minutes</p>
                    <h3 class="text-2xl font-bold">45</h3>
                </div>

                <div>
                    <p class="text-xs text-gray-500">Seconds</p>
                    <h3 class="text-2xl font-bold">09</h3>
                </div>

            </div>

        </div>

        <!-- Products -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach($flashSales as $product)

                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <div class="relative bg-gray-100">

                        @if($product->discount)

                            <span class="absolute left-3 top-3 bg-red-500 text-white text-xs px-2 py-1 rounded">

                                -{{ $product->discount }}%

                            </span>

                        @endif

                        <button
                            class="absolute right-3 top-3 bg-white rounded-full w-9 h-9 shadow">

                            ♡

                        </button>

                        <img
                            src="{{ asset('storage/'.$product->image) }}"
                            class="w-full h-56 object-contain p-6">

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold">
                            {{ $product->name }}
                        </h3>

                        <div class="mt-2 flex gap-3">

                            <span class="font-bold text-[#4A7C2F]">
                                ₱{{ number_format($product->price,2) }}
                            </span>

                            @if($product->old_price)

                                <span class="text-gray-400 line-through">
                                    ₱{{ number_format($product->old_price,2) }}
                                </span>

                            @endif

                        </div>

                        <div class="mt-3 text-yellow-400">
                            ★★★★★
                        </div>

                        <div class="mt-5 flex gap-2">

                            <a
                                href="{{ route('product.show',$product->id) }}"
                                class="flex-1 bg-[#4A7C2F] hover:bg-green-700 text-white text-center py-3 rounded-lg transition">

                                View

                            </a>

                            <form
                                action="{{ route('cart.add',$product->id) }}"
                                method="POST"
                                class="flex-1">

                                @csrf

                                <button
                                    type="submit"
                                    class="w-full bg-black hover:bg-gray-800 text-white py-3 rounded-lg transition">

                                    Add To Cart

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </section>
            <!-- Browse By Category -->
    <section class="mb-20">

        <div class="flex justify-between items-center mb-8">

            <div>

                <p class="text-orange-500 font-semibold uppercase tracking-widest">
                    Categories
                </p>

                <h2 class="text-3xl font-bold">
                    Browse By Category
                </h2>

            </div>

            <a
                href="{{ url('/categories') }}"
                class="text-[#4A7C2F] font-semibold hover:underline">

                View All

            </a>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">

            @foreach($categories as $category)

                <a
                    href="{{ route('category.show',$category->id) }}"
                    class="group bg-white rounded-xl border hover:border-[#4A7C2F] hover:shadow-lg transition p-6 flex flex-col items-center">

                    <img
                        src="{{ asset('storage/'.$category->icon) }}"
                        alt="{{ $category->name }}"
                        class="w-16 h-16 object-contain mb-4">

                    <h3 class="font-semibold text-center group-hover:text-[#4A7C2F]">

                        {{ $category->name }}

                    </h3>

                </a>

            @endforeach

        </div>

    </section>

    <!-- Best Selling Products -->
    <section class="mb-20">

        <div class="flex justify-between items-center mb-8">

            <div>

                <p class="text-orange-500 font-semibold uppercase tracking-widest">
                    This Month
                </p>

                <h2 class="text-3xl font-bold">
                    Best Selling Products
                </h2>

            </div>

            <a
                href="{{ url('/products') }}"
                class="bg-[#F59E0B] hover:bg-orange-600 text-white px-6 py-3 rounded-lg">

                View All

            </a>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach($bestSelling as $product)

                <div
                    class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                    <div class="relative bg-gray-100">

                        <button
                            class="absolute top-3 right-3 bg-white rounded-full w-9 h-9 shadow">

                            ♡

                        </button>

                        <img
                            src="{{ asset('storage/'.$product->image) }}"
                            alt="{{ $product->name }}"
                            class="w-full h-56 object-contain p-6">

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold">

                            {{ $product->name }}

                        </h3>

                        <div class="flex items-center gap-3 mt-2">

                            <span
                                class="font-bold text-[#4A7C2F]">

                                ₱{{ number_format($product->price,2) }}

                            </span>

                            @if($product->old_price)

                                <span
                                    class="line-through text-gray-400">

                                    ₱{{ number_format($product->old_price,2) }}

                                </span>

                            @endif

                        </div>

                        <div class="mt-3 flex">

                            @for($i=1;$i<=5;$i++)

                                <span class="text-yellow-400">★</span>

                            @endfor

                        </div>

                        <button
                            class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg transition">

                            Add To Cart

                        </button>

                    </div>

                </div>

            @endforeach

        </div>

    </section>
            <!-- Promotional Banner -->
    <section class="mb-20">

        <div class="rounded-2xl bg-[#9ADE6A] overflow-hidden">

            <div class="grid lg:grid-cols-2 items-center">

                <div class="p-12">

                    <p class="uppercase tracking-widest text-green-900 font-semibold">
                        Categories
                    </p>

                    <h2 class="text-5xl font-bold text-green-900 mt-4 leading-tight">

                        Enhance Your<br>
                        Farming<br>
                        Experience

                    </h2>

                    <a
                        href="{{ route('shop') }}"
                        class="inline-flex mt-8 bg-white text-[#4A7C2F] font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition">

                        Buy Now

                    </a>

                </div>

                <div class="flex justify-center p-10">

                    <img
                        src="{{ asset('images/farmer-banner.png') }}"
                        alt="Promotion"
                        class="max-h-96 object-contain">

                </div>

            </div>

        </div>

    </section>

    <!-- Explore Our Products -->
    <section class="mb-20">

        <div class="flex justify-between items-center mb-8">

            <div>

                <p class="text-orange-500 font-semibold uppercase tracking-widest">

                    Our Products

                </p>

                <h2 class="text-3xl font-bold">

                    Explore Our Products

                </h2>

            </div>

            <a
                href="{{ route('shop') }}"
                class="bg-[#F59E0B] hover:bg-orange-600 text-white px-6 py-3 rounded-lg">

                View All

            </a>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach($featuredProducts as $product)

                <div
                    class="group bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                    <div class="relative bg-gray-100">

                        @if($product->stock <= 10)

                            <span
                                class="absolute left-3 top-3 bg-green-500 text-white text-xs px-2 py-1 rounded">

                                Limited

                            </span>

                        @endif

                        <button
                            class="absolute right-3 top-3 bg-white rounded-full w-9 h-9 shadow">

                            ♡

                        </button>

                        <img
                            src="{{ asset('storage/'.$product->image) }}"
                            alt="{{ $product->name }}"
                            class="w-full h-56 object-contain p-6 group-hover:scale-105 transition">

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold">

                            {{ $product->name }}

                        </h3>

                        <div class="mt-2 flex gap-3 items-center">

                            <span class="font-bold text-[#4A7C2F]">

                                ₱{{ number_format($product->price,2) }}

                            </span>

                            @if($product->old_price)

                                <span class="line-through text-gray-400">

                                    ₱{{ number_format($product->old_price,2) }}

                                </span>

                            @endif

                        </div>

                        <div class="mt-3 flex text-yellow-400">

                            @for($i = 1; $i <= 5; $i++)

                                ★

                            @endfor

                        </div>

                        <div class="mt-5 flex gap-2">

                            <a
                                href="{{ route('product.show',$product->id) }}"
                                class="flex-1 bg-[#4A7C2F] hover:bg-green-700 text-white text-center py-3 rounded-lg transition">

                                View

                            </a>

                            <form
                                action="{{ route('cart.add',$product->id) }}"
                                method="POST"
                                class="flex-1">

                                @csrf

                                <button
                                    type="submit"
                                    class="w-full bg-black hover:bg-gray-800 text-white py-3 rounded-lg transition">

                                    Add To Cart

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </section>
            <!-- Features -->
    <section class="py-20">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">

            <!-- Free Delivery -->
            <div class="flex flex-col items-center">

                <div class="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center mb-5">

                    <div class="w-14 h-14 rounded-full bg-black text-white flex items-center justify-center text-2xl">
                        🚚
                    </div>

                </div>

                <h3 class="text-xl font-bold uppercase">
                    FREE AND FAST DELIVERY
                </h3>

                <p class="text-gray-500 mt-2">
                    Free delivery for all orders over ₱500.
                </p>

            </div>

            <!-- Customer Service -->
            <div class="flex flex-col items-center">

                <div class="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center mb-5">

                    <div class="w-14 h-14 rounded-full bg-black text-white flex items-center justify-center text-2xl">
                        🎧
                    </div>

                </div>

                <h3 class="text-xl font-bold uppercase">
                    24/7 CUSTOMER SERVICE
                </h3>

                <p class="text-gray-500 mt-2">
                    Friendly customer support available anytime.
                </p>

            </div>

            <!-- Money Back -->
            <div class="flex flex-col items-center">

                <div class="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center mb-5">

                    <div class="w-14 h-14 rounded-full bg-black text-white flex items-center justify-center text-2xl">
                        💰
                    </div>

                </div>

                <h3 class="text-xl font-bold uppercase">
                    MONEY BACK GUARANTEE
                </h3>

                <p class="text-gray-500 mt-2">
                    7-day money-back guarantee on eligible products.
                </p>

            </div>

        </div>

    </section>

</div>

@endsection