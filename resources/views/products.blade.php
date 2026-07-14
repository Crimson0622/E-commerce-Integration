@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    {{-- Breadcrumb --}}
    <div class="text-sm text-gray-500 mb-10">
        <a href="{{ url('/') }}" class="hover:text-[#4A7C2F]">Home</a>
        <span class="mx-2">/</span>
        <span class="font-semibold text-gray-700">Dragon Fruit</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14">

        {{-- LEFT SIDE --}}
        <div class="flex gap-6">

            {{-- Thumbnails --}}
            <div class="flex flex-col gap-4">

                <img src="{{ asset('images/dragonfruit1.png') }}"
                    class="w-24 h-24 rounded-lg border object-cover cursor-pointer hover:border-[#4A7C2F]">

                <img src="{{ asset('images/dragonfruit2.png') }}"
                    class="w-24 h-24 rounded-lg border object-cover cursor-pointer hover:border-[#4A7C2F]">

                <img src="{{ asset('images/dragonfruit3.png') }}"
                    class="w-24 h-24 rounded-lg border object-cover cursor-pointer hover:border-[#4A7C2F]">

            </div>

            {{-- Main Image --}}
            <div class="flex-1 bg-gray-100 rounded-xl flex justify-center items-center p-10">

                <img
                    src="{{ asset('images/dragonfruit.png') }}"
                    class="max-h-[450px] object-contain">

            </div>

        </div>

        {{-- RIGHT SIDE --}}
        <div>

            <p class="text-sm uppercase tracking-widest text-gray-400">
                Organic Fresh Fruit
            </p>

            <h1 class="text-4xl font-bold mt-2">
                Dragon Fruit
            </h1>

            {{-- Rating --}}
            <div class="flex items-center mt-4 gap-3">

                <div class="text-yellow-400 text-lg">
                    ★★★★★
                </div>

                <span class="text-gray-500 text-sm">
                    (150 Reviews)
                </span>

                <span class="text-green-600 font-semibold">
                    In Stock
                </span>

            </div>

            {{-- Price --}}
            <div class="text-3xl font-bold mt-6 text-[#4A7C2F]">
                ₱150.00
            </div>

            <p class="mt-5 text-gray-600 leading-7">
                Sweet, juicy, and packed with nutrients.
                Dragon Fruit is rich in antioxidants,
                Vitamin C, fiber, and minerals.
                Freshly harvested from local farms.
            </p>

            <hr class="my-8">

            {{-- Quantity + Buttons --}}
            <div class="flex flex-wrap items-center gap-4">

                <div class="flex border rounded-lg overflow-hidden">

                    <button
                        class="px-4 py-3 bg-gray-100 hover:bg-gray-200">

                        -

                    </button>

                    <input
                        type="number"
                        value="1"
                        class="w-14 text-center outline-none">

                    <button
                        class="px-4 py-3 bg-[#F59E0B] text-white hover:bg-orange-600">

                        +

                    </button>

                </div>

                <a
                    href="{{ url('/checkout') }}"
                    class="bg-[#F59E0B] hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-semibold transition">

                    Buy Now

                </a>

                <button
                    class="border rounded-lg p-3 hover:bg-gray-100">

                    ♡

                </button>

            </div>

            {{-- Delivery --}}
            <div class="border rounded-xl mt-10">

                <div class="flex gap-4 p-5 border-b">

                    <div class="text-3xl">
                        🚚
                    </div>

                    <div>

                        <h3 class="font-semibold">
                            Free Delivery
                        </h3>

                        <p class="text-sm text-gray-500">
                            Free shipping for orders over ₱500.
                        </p>

                    </div>

                </div>

                <div class="flex gap-4 p-5">

                    <div class="text-3xl">
                        🔄
                    </div>

                    <div>

                        <h3 class="font-semibold">
                            Return Delivery
                        </h3>

                        <p class="text-sm text-gray-500">
                            Free 7-day returns for damaged items.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Related Products --}}
    <div class="mt-24">

        <div class="flex justify-between items-center mb-8">

            <h2 class="text-3xl font-bold">
                Related Products
            </h2>

            <a
                href="{{ url('/shop') }}"
                class="text-[#4A7C2F] font-semibold hover:underline">

                View All

            </a>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Product Card -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                <div class="relative bg-gray-100 p-6">

                    <button
                        class="absolute top-3 right-3 bg-white rounded-full p-2 shadow hover:bg-gray-100">

                        ♡

                    </button>

                    <img
                        src="{{ asset('images/pineapple.png') }}"
                        alt="Pineapple"
                        class="h-44 mx-auto object-contain">

                </div>

                <div class="p-5">

                    <h3 class="font-semibold">
                        Pineapple
                    </h3>

                    <p class="text-[#4A7C2F] font-bold mt-2">
                        ₱120
                    </p>

                    <div class="text-yellow-400 mt-2">
                        ★★★★★
                    </div>

                    <button
                        class="mt-4 w-full rounded-lg bg-black py-2 text-white hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product Card -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                <div class="relative bg-gray-100 p-6">

                    <button
                        class="absolute top-3 right-3 bg-white rounded-full p-2 shadow">

                        ♡

                    </button>

                    <img
                        src="{{ asset('images/grapes.png') }}"
                        alt="Grapes"
                        class="h-44 mx-auto object-contain">

                </div>

                <div class="p-5">

                    <h3 class="font-semibold">
                        Grapes
                    </h3>

                    <p class="text-[#4A7C2F] font-bold mt-2">
                        ₱180
                    </p>

                    <div class="text-yellow-400 mt-2">
                        ★★★★★
                    </div>

                    <button
                        class="mt-4 w-full rounded-lg bg-black py-2 text-white hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product Card -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                <div class="relative bg-gray-100 p-6">

                    <button
                        class="absolute top-3 right-3 bg-white rounded-full p-2 shadow">

                        ♡

                    </button>

                    <img
                        src="{{ asset('images/cacao.png') }}"
                        alt="Cacao"
                        class="h-44 mx-auto object-contain">

                </div>

                <div class="p-5">

                    <h3 class="font-semibold">
                        Cacao Beans
                    </h3>

                    <p class="text-[#4A7C2F] font-bold mt-2">
                        ₱210
                    </p>

                    <div class="text-yellow-400 mt-2">
                        ★★★★★
                    </div>

                    <button
                        class="mt-4 w-full rounded-lg bg-black py-2 text-white hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

            <!-- Product Card -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                <div class="relative bg-gray-100 p-6">

                    <button
                        class="absolute top-3 right-3 bg-white rounded-full p-2 shadow">

                        ♡

                    </button>

                    <img
                        src="{{ asset('images/banana.png') }}"
                        alt="Banana"
                        class="h-44 mx-auto object-contain">

                </div>

                <div class="p-5">

                    <h3 class="font-semibold">
                        Banana
                    </h3>

                    <p class="text-[#4A7C2F] font-bold mt-2">
                        ₱95
                    </p>

                    <div class="text-yellow-400 mt-2">
                        ★★★★★
                    </div>

                    <button
                        class="mt-4 w-full rounded-lg bg-black py-2 text-white hover:bg-[#4A7C2F] transition">

                        Add To Cart

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection