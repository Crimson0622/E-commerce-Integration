@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-8">

    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-8">

        <a href="{{ route('home') }}" class="hover:text-[#4A7C2F]">
            Home
        </a>


        <span class="mx-2">/</span>

        <span class="font-semibold text-gray-700">
            Admin Dashboard
        </span>

        <span class="mx-2">/</span>

        <span class="font-semibold text-[#4A7C2F]">
                Inventory
        </span>

    </div>

    <!-- Dashboard Statistics -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <!-- In Stock -->
        <div class="bg-white rounded-xl shadow border p-5">

            <div class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-2xl">
                    ✅
                </div>

                <div>

                    <p class="text-gray-500 text-sm">
                        In Stock
                    </p>

                    <h2 class="text-3xl font-bold text-[#4A7C2F]">
                        845
                    </h2>

                </div>

            </div>

        </div>

        <!-- Low Stock -->

        <div class="bg-white rounded-xl shadow border p-5">

            <div class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-2xl">
                    ⚠️
                </div>

                <div>

                    <p class="text-gray-500 text-sm">
                        Low Stock Alerts
                    </p>

                    <h2 class="text-3xl font-bold text-yellow-500">
                        32
                    </h2>

                </div>

            </div>

        </div>

        <!-- Out of Stock -->

        <div class="bg-white rounded-xl shadow border p-5">

            <div class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-2xl">
                    ❌
                </div>

                <div>

                    <p class="text-gray-500 text-sm">
                        Out of Stock
                    </p>

                    <h2 class="text-3xl font-bold text-red-500">
                        8
                    </h2>

                </div>

            </div>

        </div>

        <!-- Total Products -->

        <div class="bg-white rounded-xl shadow border p-5">

            <div class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-2xl">
                    📦
                </div>

                <div>

                    <p class="text-gray-500 text-sm">
                        Total Products
                    </p>

                    <h2 class="text-3xl font-bold text-orange-500">
                        1,250
                    </h2>

                </div>

            </div>

        </div>

    </div>

        <!-- Main Layout -->
    <div class="grid grid-cols-12 gap-6">

        <!-- Left Sidebar -->
        <aside class="col-span-12 lg:col-span-2">

            <div class="space-y-4">

                <button
                    class="w-full bg-[#4A7C2F] hover:bg-green-700 text-white py-3 rounded-lg font-semibold">

                    Add Product

                </button>

                <button
                    class="w-full bg-[#4A7C2F] hover:bg-green-700 text-white py-3 rounded-lg font-semibold">

                    Import Inventory

                </button>

                <button
                    class="w-full bg-[#4A7C2F] hover:bg-green-700 text-white py-3 rounded-lg font-semibold">

                    Set Low Stock Alert

                </button>

                <button
                    class="w-full bg-[#4A7C2F] hover:bg-green-700 text-white py-3 rounded-lg font-semibold">

                    Sync Channels

                </button>

            </div>

           
            <!-- Tree Illustration -->

            <div class="mt-10">

                <img
                    src="{{ asset('images/tree.png') }}"
                    alt="Tree"
                    class="mx-auto w-full">

            </div>

        </aside>

        <!-- Main Content -->
        <div class="col-span-12 lg:col-span-7">

            <!-- Real-Time Stock Levels -->

            <div class="bg-white rounded-xl shadow border">

                <div class="flex justify-between items-center px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Real-Time Stock Levels

                    </h2>

                    <span class="text-sm text-gray-500">

                        Last Sync:
                        <span class="font-semibold text-[#4A7C2F]">
                            Just Now
                        </span>

                    </span>

                </div>

                <!-- Filters -->

                <div class="flex flex-wrap gap-3 px-6 py-4">

    <button>Online Store</button>

    <button>Marketplace</button>

    <button>Retail Store</button>

    <button>Warehouse A</button>

</div>  

                                <!-- Inventory Table -->
                <div class="overflow-x-auto">

                    <table class="min-w-full text-sm">

                        <thead class="bg-[#EAF6E4] text-gray-700">

                            <tr>

                                <th class="px-6 py-3 text-left">Product</th>
                                <th class="px-6 py-3 text-center">SKU</th>
                                <th class="px-6 py-3 text-center">Online Store</th>
                                <th class="px-6 py-3 text-center">Marketplace</th>
                                <th class="px-6 py-3 text-center">Retail Store</th>
                                <th class="px-6 py-3 text-center">Warehouse A</th>

                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-200">

                            <!-- Product 1 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 font-medium">

                                    Mango

                                </td>

                                <td class="px-6 py-4 text-center">

                                    FR001

                                </td>

                                <td class="px-6 py-4 text-center text-green-600 font-semibold">

                                    65

                                </td>

                                <td class="px-6 py-4 text-center">

                                    20

                                </td>

                                <td class="px-6 py-4 text-center">

                                    15

                                </td>

                                <td class="px-6 py-4 text-center">

                                    40

                                </td>

                            </tr>

                            <!-- Product 2 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 font-medium">

                                    Honey

                                </td>

                                <td class="px-6 py-4 text-center">

                                    HN015

                                </td>

                                <td class="px-6 py-4 text-center text-green-600 font-semibold">

                                    110

                                </td>

                                <td class="px-6 py-4 text-center">

                                    60

                                </td>

                                <td class="px-6 py-4 text-center">

                                    20

                                </td>

                                <td class="px-6 py-4 text-center">

                                    30

                                </td>

                            </tr>

                            <!-- Product 3 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 font-medium">

                                    Dragon Fruit

                                </td>

                                <td class="px-6 py-4 text-center">

                                    DF024

                                </td>

                                <td class="px-6 py-4 text-center text-red-500 font-semibold">

                                    Low Stock

                                </td>

                                <td class="px-6 py-4 text-center">

                                    2

                                </td>

                                <td class="px-6 py-4 text-center">

                                    5

                                </td>

                                <td class="px-6 py-4 text-center">

                                    13

                                </td>

                            </tr>

                            <!-- Product 4 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 font-medium">

                                    Cabbage

                                </td>

                                <td class="px-6 py-4 text-center">

                                    CB016

                                </td>

                                <td class="px-6 py-4 text-center text-red-600 font-semibold">

                                    0

                                </td>

                                <td class="px-6 py-4 text-center text-red-600 font-semibold">

                                    0

                                </td>

                                <td class="px-6 py-4 text-center">

                                    2

                                </td>

                                <td class="px-6 py-4 text-center">

                                    8

                                </td>

                            </tr>

                            <!-- Product 5 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 font-medium">

                                    Banana

                                </td>

                                <td class="px-6 py-4 text-center">

                                    BN020

                                </td>

                                <td class="px-6 py-4 text-center text-green-600 font-semibold">

                                    85

                                </td>

                                <td class="px-6 py-4 text-center">

                                    31

                                </td>

                                <td class="px-6 py-4 text-center">

                                    14

                                </td>

                                <td class="px-6 py-4 text-center">

                                    25

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- Right Sidebar -->
        <aside class="col-span-12 lg:col-span-3 space-y-6">

            <!-- Stock Alerts -->
            <div class="bg-white rounded-xl border shadow">

                <div class="px-5 py-4 border-b">

                    <h3 class="font-bold text-lg">

                        Stock Alerts

                    </h3>

                </div>

                <div class="p-5 space-y-4">

                    <div class="flex justify-between">

                        <span>Low Stock</span>

                        <span class="font-bold text-yellow-500">

                            32

                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Out of Stock</span>

                        <span class="font-bold text-red-500">

                            8

                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Need Restocking</span>

                        <span class="font-bold text-[#4A7C2F]">

                            15

                        </span>

                    </div>

                </div>

            </div>

            <!-- Sync Panel -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-5 py-4 border-b">

                    <h3 class="font-bold">

                        Multi-Channel Sync

                    </h3>

                </div>

                <div class="p-5">

                    <button class="w-full bg-[#4A7C2F] text-white py-3 rounded-lg hover:bg-green-700">

                        Sync Inventory

                    </button>

                    <button class="mt-3 w-full border border-[#4A7C2F] text-[#4A7C2F] py-3 rounded-lg hover:bg-green-50">

                        Refresh Status

                    </button>

                </div>

            </div>

        </aside>

    </div>
        <!-- Charts Section -->
    <div class="grid grid-cols-12 gap-6 mt-8">

        <!-- Empty space under sidebar -->
        <div class="hidden lg:block lg:col-span-2"></div>

        <!-- Charts -->
        <div class="col-span-12 lg:col-span-7 space-y-6">

            <!-- Inventory Status -->
            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">
                        Inventory Status
                    </h2>

                </div>

                <div class="p-6">

                    <!-- Chart Placeholder -->
                    <div class="relative h-72 rounded-lg border bg-gray-50">

                        <svg class="absolute inset-0 h-full w-full" viewBox="0 0 700 250">

                            <!-- Grid -->
                            <g stroke="#E5E7EB" stroke-width="1">

                                <line x1="50" y1="30" x2="50" y2="220"/>
                                <line x1="150" y1="30" x2="150" y2="220"/>
                                <line x1="250" y1="30" x2="250" y2="220"/>
                                <line x1="350" y1="30" x2="350" y2="220"/>
                                <line x1="450" y1="30" x2="450" y2="220"/>
                                <line x1="550" y1="30" x2="550" y2="220"/>
                                <line x1="650" y1="30" x2="650" y2="220"/>

                                <line x1="30" y1="50" x2="670" y2="50"/>
                                <line x1="30" y1="100" x2="670" y2="100"/>
                                <line x1="30" y1="150" x2="670" y2="150"/>
                                <line x1="30" y1="200" x2="670" y2="200"/>

                            </g>

                            <!-- Orange line -->
                            <polyline
                                fill="none"
                                stroke="#F59E0B"
                                stroke-width="3"
                                points="40,170 120,140 200,160 280,90 360,180 440,80 520,120 600,100 660,70" />

                            <!-- Green line -->
                            <polyline
                                fill="none"
                                stroke="#22C55E"
                                stroke-width="3"
                                points="40,120 120,130 200,110 280,150 360,95 440,130 520,115 600,140 660,130" />

                        </svg>

                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 font-medium">

                            Inventory Trend Preview

                        </div>

                    </div>

                </div>

            </div>

            <!-- Warehouse Distribution -->
            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Warehouse Distribution

                    </h2>

                </div>

                <div class="flex flex-col lg:flex-row items-center justify-between p-8 gap-8">

                    <!-- Legend -->
                    <div class="space-y-4">

                        <div class="flex items-center gap-3">

                            <span class="h-4 w-4 rounded bg-green-500"></span>

                            <span>In Stock (50%)</span>

                        </div>

                        <div class="flex items-center gap-3">

                            <span class="h-4 w-4 rounded bg-yellow-500"></span>

                            <span>Low Stock (30%)</span>

                        </div>

                        <div class="flex items-center gap-3">

                            <span class="h-4 w-4 rounded bg-red-500"></span>

                            <span>Out of Stock (20%)</span>

                        </div>

                    </div>

                    <!-- Pie Chart Placeholder -->
                    <div class="flex h-56 w-56 items-center justify-center rounded-full border-8 border-green-500 relative">

                        <div class="absolute h-40 w-40 rounded-full border-[35px] border-yellow-500 border-t-red-500 border-r-green-500 border-b-yellow-500"></div>

                        <div class="z-10 rounded-full bg-white px-4 py-2 font-bold">

                            1,250

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Decorative Image -->
        <div class="hidden lg:flex lg:col-span-3 items-end justify-center">

            <img
                src="{{ asset('images/tree.png') }}"
                alt="Tree"
                class="w-48">

        </div>

    </div>

</div>

@endsection