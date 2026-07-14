@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Hero Banner -->
    <section class="mb-16">

        <div class="overflow-hidden rounded-2xl bg-[#9ADE6A]">

            <div class="grid lg:grid-cols-2 items-center">

                <!-- Left Content -->
                <div class="p-10 lg:p-16">

                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-green-900">
                        Organic Products
                    </p>

                    <h1 class="mt-4 text-5xl lg:text-6xl font-extrabold leading-tight text-green-900">
                        Up to 10%<br>
                        Off Voucher
                    </h1>

                    <p class="mt-6 max-w-md text-lg text-green-800">
                        Shop fresh fruits, vegetables, honey, seeds, and farming essentials delivered to your doorstep.
                    </p>

                    <a
                        href="#"
                        class="mt-8 inline-flex items-center rounded-lg bg-white px-8 py-3 font-semibold text-[#4A7C2F] shadow hover:bg-gray-100 transition">

                        Shop Now

                        <span class="ml-2">→</span>

                    </a>

                </div>

                <!-- Right Image -->
                <div class="flex justify-center p-10">

                    <img
                        src="{{ asset('images/banner-fruits.png') }}"
                        alt="Banner"
                        class="max-h-[420px] object-contain">

                </div>

            </div>

        </div>

    </section>

    <!-- Flash Sales -->
    <section class="mb-20">

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center mb-10">

            <div>

                <p class="text-[#4A7C2F] font-semibold uppercase tracking-widest">
                    Today's
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    Flash Sales
                </h2>

            </div>

            <!-- Countdown -->
            <div class="flex gap-6 mt-6 lg:mt-0">

                <div class="text-center">
                    <p class="text-xs uppercase text-gray-500">Days</p>
                    <h3 class="text-3xl font-bold">03</h3>
                </div>

                <div class="text-center">
                    <p class="text-xs uppercase text-gray-500">Hours</p>
                    <h3 class="text-3xl font-bold">23</h3>
                </div>

                <div class="text-center">
                    <p class="text-xs uppercase text-gray-500">Minutes</p>
                    <h3 class="text-3xl font-bold">19</h3>
                </div>

                <div class="text-center">
                    <p class="text-xs uppercase text-gray-500">Seconds</p>
                    <h3 class="text-3xl font-bold">56</h3>
                </div>

            </div>

        </div>

        <!-- Flash Sale Products -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Product 1 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <div class="relative">

                    <span class="absolute top-3 left-3 bg-red-500 text-white px-3 py-1 rounded text-sm">
                        -20%
                    </span>

                    <img
                        src="{{ asset('images/dragonfruit.png') }}"
                        class="w-full h-60 object-cover">

                </div>

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Dragon Fruit
                    </h3>

                    <div class="mt-2">

                        <span class="text-[#4A7C2F] text-xl font-bold">
                            ₱150
                        </span>

                        <span class="line-through text-gray-400 ml-2">
                            ₱180
                        </span>

                    </div>

                    <button
                        class="w-full mt-5 bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img
                    src="{{ asset('images/bee.png') }}"
                    class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Pure Honey
                    </h3>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱250
                    </span>

                    <button
                        class="w-full mt-5 bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img
                    src="{{ asset('images/cabbage.png') }}"
                    class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Fresh Cabbage
                    </h3>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱95
                    </span>

                    <button
                        class="w-full mt-5 bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img
                    src="{{ asset('images/mango.png') }}"
                    class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Sweet Mango
                    </h3>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱120
                    </span>

                    <button
                        class="w-full mt-5 bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg transition">

                        Add To Cart

                    </button>

                </div>

            </div>

        </div>

    </section>
        <!-- Browse By Category -->
    <section class="mt-20">

        <div class="flex items-center justify-between mb-10">

            <div>

                <p class="text-[#4A7C2F] font-semibold uppercase tracking-widest">
                    Categories
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    Browse By Category
                </h2>

            </div>

            <a href="#" class="text-[#4A7C2F] hover:underline font-semibold">
                View All
            </a>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">

            <!-- Fruits -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 text-center cursor-pointer">

                <div class="text-5xl mb-4">🍎</div>

                <h3 class="font-semibold">
                    Fruits
                </h3>

            </div>

            <!-- Vegetables -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 text-center cursor-pointer">

                <div class="text-5xl mb-4">🥬</div>

                <h3 class="font-semibold">
                    Vegetables
                </h3>

            </div>

            <!-- Seeds -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 text-center cursor-pointer">

                <div class="text-5xl mb-4">🌱</div>

                <h3 class="font-semibold">
                    Seeds
                </h3>

            </div>

            <!-- Fertilizers -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 text-center cursor-pointer">

                <div class="text-5xl mb-4">🌾</div>

                <h3 class="font-semibold">
                    Fertilizers
                </h3>

            </div>

            <!-- Honey -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 text-center cursor-pointer">

                <div class="text-5xl mb-4">🍯</div>

                <h3 class="font-semibold">
                    Honey
                </h3>

            </div>

            <!-- Farming Tools -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 text-center cursor-pointer">

                <div class="text-5xl mb-4">🚜</div>

                <h3 class="font-semibold">
                    Farming
                </h3>

            </div>

        </div>

    </section>


    <!-- Best Selling Products -->
    <section class="mt-24">

        <div class="flex justify-between items-center mb-10">

            <div>

                <p class="text-[#4A7C2F] font-semibold uppercase tracking-widest">
                    This Month
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    Best Selling Products
                </h2>

            </div>

            <button class="bg-[#4A7C2F] hover:bg-green-700 text-white px-6 py-3 rounded-lg transition">

                View All

            </button>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Product 1 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/dragonfruit.png') }}"
                     class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Dragon Fruit
                    </h3>

                    <p class="text-gray-500 text-sm mt-1">
                        Fresh Organic Fruit
                    </p>

                    <div class="flex items-center mt-4">

                        <span class="text-[#4A7C2F] font-bold text-xl">
                            ₱150
                        </span>

                        <span class="line-through text-gray-400 ml-3">
                            ₱180
                        </span>

                    </div>

                    <button class="mt-5 w-full bg-black text-white py-3 rounded-lg hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/bee.png') }}"
                     class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Pure Honey
                    </h3>

                    <p class="text-gray-500 text-sm mt-1">
                        Organic Honey
                    </p>

                    <div class="flex items-center mt-4">

                        <span class="text-[#4A7C2F] font-bold text-xl">
                            ₱250
                        </span>

                    </div>

                    <button class="mt-5 w-full bg-black text-white py-3 rounded-lg hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/cabbage.png') }}"
                     class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Fresh Cabbage
                    </h3>

                    <p class="text-gray-500 text-sm mt-1">
                        Fresh Vegetables
                    </p>

                    <div class="flex items-center mt-4">

                        <span class="text-[#4A7C2F] font-bold text-xl">
                            ₱95
                        </span>

                    </div>

                    <button class="mt-5 w-full bg-black text-white py-3 rounded-lg hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/mango.png') }}"
                     class="w-full h-60 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-lg">
                        Sweet Mango
                    </h3>

                    <p class="text-gray-500 text-sm mt-1">
                        Philippine Mango
                    </p>

                    <div class="flex items-center mt-4">

                        <span class="text-[#4A7C2F] font-bold text-xl">
                            ₱120
                        </span>

                    </div>

                    <button class="mt-5 w-full bg-black text-white py-3 rounded-lg hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

        </div>

    </section>
        <!-- Promotional Banner -->
    <section class="mt-24">

        <div class="bg-[#4A7C2F] rounded-2xl overflow-hidden">

            <div class="grid lg:grid-cols-2 items-center">

                <!-- Left Side -->
                <div class="p-12 text-white">

                    <span class="uppercase tracking-widest text-sm text-green-200">
                        Categories
                    </span>

                    <h2 class="text-5xl font-bold mt-4 leading-tight">
                        Enhance Your<br>
                        Farming<br>
                        Experience
                    </h2>

                    <p class="mt-6 text-green-100 max-w-md">
                        Discover premium farming products, organic fertilizers,
                        fresh produce, and agricultural essentials to help your
                        farm thrive.
                    </p>

                    <button
                        class="mt-8 bg-white text-[#4A7C2F] font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition">

                        Buy Now

                    </button>

                </div>

                <!-- Right Side -->
                <div class="flex justify-center p-10">

                    <img
                        src="{{ asset('images/banner-farmer.png') }}"
                        alt="Farmer Banner"
                        class="max-h-96 object-contain">

                </div>

            </div>

        </div>

    </section>


    <!-- Explore Our Products -->
    <section class="mt-24">

        <div class="flex justify-between items-center mb-10">

            <div>

                <p class="text-[#4A7C2F] font-semibold uppercase tracking-widest">
                    Our Products
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    Explore Our Products
                </h2>

            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Product 1 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/apple.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Fresh Apple
                    </h3>

                    <p class="text-gray-500 text-sm mt-1">
                        Sweet Organic Apples
                    </p>

                    <div class="mt-3 flex items-center">

                        <span class="text-[#4A7C2F] text-xl font-bold">
                            ₱180
                        </span>

                    </div>

                    <button
                        class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/banana.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Banana
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Fresh Banana
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱75
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/orange.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Orange
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Juicy Orange
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱130
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/grapes.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Grapes
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Seedless Grapes
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱220
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 5 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/tomato.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Tomato
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Fresh Tomatoes
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱60
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 6 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/cucumber.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Cucumber
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Organic Cucumber
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱80
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 7 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/carrot.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Carrot
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Fresh Carrots
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱95
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product 8 -->
            <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                <img src="{{ asset('images/lettuce.png') }}"
                     class="w-full h-56 object-cover">

                <div class="p-5">

                    <h3 class="font-bold">
                        Lettuce
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Green Lettuce
                    </p>

                    <span class="text-[#4A7C2F] text-xl font-bold">
                        ₱70
                    </span>

                    <button class="mt-5 w-full bg-black hover:bg-[#4A7C2F] text-white py-3 rounded-lg">

                        Add To Cart

                    </button>

                </div>

            </div>

        </div>

        <div class="text-center mt-12">

            <button
                class="bg-[#4A7C2F] hover:bg-green-700 text-white px-10 py-4 rounded-lg transition">

                View All Products

            </button>

        </div>

    </section>    <!-- Features -->
    <section class="py-24">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Free Delivery -->
            <div class="text-center">

                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-200">

                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-black text-white text-2xl">

                        🚚

                    </div>

                </div>

                <h3 class="mt-6 text-xl font-bold uppercase">

                    FREE AND FAST DELIVERY

                </h3>

                <p class="mt-2 text-gray-500">

                    Free delivery for all orders over ₱500.

                </p>

            </div>

            <!-- Customer Service -->
            <div class="text-center">

                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-200">

                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-black text-white text-2xl">

                        🎧

                    </div>

                </div>

                <h3 class="mt-6 text-xl font-bold uppercase">

                    24/7 CUSTOMER SERVICE

                </h3>

                <p class="mt-2 text-gray-500">

                    Friendly customer support available anytime.

                </p>

            </div>

            <!-- Money Back -->
            <div class="text-center">

                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-200">

                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-black text-white text-2xl">

                        💰

                    </div>

                </div>

                <h3 class="mt-6 text-xl font-bold uppercase">

                    MONEY BACK GUARANTEE

                </h3>

                <p class="mt-2 text-gray-500">

                    We return your money within 7 days if you're not satisfied.

                </p>

            </div>

        </div>

    </section>

</div>

@endsection