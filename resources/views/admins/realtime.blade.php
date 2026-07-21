@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-8">

    <!-- Breadcrumb -->
    <div class="flex items-center justify-between mb-8">

        <div class="text-sm text-gray-500">

            <a href="{{ route('home') }}" class="hover:text-[#4A7C2F]">
                Home
            </a>

            <span class="mx-2">/</span>

            <span class="font-semibold text-gray-700">
                Admin Dashboard
            </span>

            <span class="mx-2">/</span>

            <span class="font-semibold text-[#4A7C2F]">
                Real-Time Monitoring
            </span>

        </div>

        <div class="flex items-center gap-3">

            <span class="h-3 w-3 rounded-full bg-green-500 animate-pulse"></span>

            <span class="font-semibold text-green-600">

                LIVE

            </span>

            <span class="text-sm text-gray-500">

                Refresh every 5 sec

            </span>

        </div>

    </div>

    <!-- Title -->

    <div class="mb-10">

        <h1 class="text-4xl font-bold text-gray-800">

            Real-Time Dashboard

        </h1>

        <p class="mt-2 text-gray-500">

            Monitor orders, customers, inventory,
            warehouses and website activity in real time.

        </p>

    </div>

    <!-- Statistics -->

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-6 gap-6 mb-10">

        <!-- Orders Today -->

        <div class="bg-white rounded-xl border shadow p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">

                        Orders Today

                    </p>

                    <h2 class="text-3xl font-bold mt-2">

                        248

                    </h2>

                </div>

                <span class="text-4xl">

                    🛒

                </span>

            </div>

        </div>

        <!-- Revenue -->

        <div class="bg-white rounded-xl border shadow p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">

                        Revenue Today

                    </p>

                    <h2 class="text-2xl font-bold text-[#4A7C2F] mt-2">

                        ₱54,200

                    </h2>

                </div>

                <span class="text-4xl">

                    💰

                </span>

            </div>

        </div>

        <!-- Active Customers -->

        <div class="bg-white rounded-xl border shadow p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">

                        Active Users

                    </p>

                    <h2 class="text-3xl font-bold text-blue-600 mt-2">

                        95

                    </h2>

                </div>

                <span class="text-4xl">

                    👥

                </span>

            </div>

        </div>

        <!-- Pending Orders -->

        <div class="bg-white rounded-xl border shadow p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">

                        Pending Orders

                    </p>

                    <h2 class="text-3xl font-bold text-yellow-500 mt-2">

                        18

                    </h2>

                </div>

                <span class="text-4xl">

                    📦

                </span>

            </div>

        </div>

        <!-- Low Stock -->

        <div class="bg-white rounded-xl border shadow p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">

                        Low Stock

                    </p>

                    <h2 class="text-3xl font-bold text-red-500 mt-2">

                        12

                    </h2>

                </div>

                <span class="text-4xl">

                    ⚠️

                </span>

            </div>

        </div>

        <!-- Online Products -->

        <div class="bg-white rounded-xl border shadow p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">

                        Products Online

                    </p>

                    <h2 class="text-3xl font-bold text-green-600 mt-2">

                        1,250

                    </h2>

                </div>

                <span class="text-4xl">

                    🌿

                </span>

            </div>

        </div>

    </div>

    <!-- Quick Access -->

    <div class="bg-white rounded-xl border shadow p-6 mb-8">

        <h2 class="text-2xl font-bold mb-6">

            Quick Access

        </h2>

        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-5">

            <a href="{{ route('admins.inventory') }}"
               class="rounded-xl bg-green-600 hover:bg-green-700 text-white text-center py-5 transition">

                📦
                <div class="mt-2 font-semibold">
                    Inventory
                </div>

            </a>

            <a href="{{ route('products') }}"
               class="rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-center py-5 transition">

                🌿
                <div class="mt-2 font-semibold">
                    Products
                </div>

            </a>

            <a href="{{ route('admins.orders') }}"
               class="rounded-xl bg-yellow-500 hover:bg-yellow-600 text-white text-center py-5 transition">

                🛒
                <div class="mt-2 font-semibold">
                    Orders
                </div>

            </a>

            <a href="{{ route('admins.realtime') }}"
               class="rounded-xl bg-purple-600 hover:bg-purple-700 text-white text-center py-5 transition">

                📡
                <div class="mt-2 font-semibold">
                    Real-Time
                </div>

            </a>

            <a href="#"
               class="rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-center py-5 transition">

                👥
                <div class="mt-2 font-semibold">
                    Customers
                </div>

            </a>

            <a href="#"
               class="rounded-xl bg-red-500 hover:bg-red-600 text-white text-center py-5 transition">

                📊
                <div class="mt-2 font-semibold">
                    Reports
                </div>

            </a>

        </div>

    </div>

    <!-- Dashboard Content -->

    <div class="grid grid-cols-12 gap-6">

        <!-- Left Side -->

        <div class="col-span-12 lg:col-span-8">
                        <!-- Live Sales -->
            <div class="bg-white rounded-xl border shadow mb-6">

                <div class="flex items-center justify-between px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Live Sales Overview

                    </h2>

                    <span class="text-sm text-green-600 font-semibold">

                        ● Updating...

                    </span>

                </div>

                <div class="p-6">

                    <!-- Chart Placeholder -->

                    <div class="relative h-80 rounded-lg border bg-gray-50">

                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 700 300">

                            <!-- Grid -->

                            <g stroke="#E5E7EB" stroke-width="1">

                                <line x1="50" y1="30" x2="50" y2="250"/>
                                <line x1="150" y1="30" x2="150" y2="250"/>
                                <line x1="250" y1="30" x2="250" y2="250"/>
                                <line x1="350" y1="30" x2="350" y2="250"/>
                                <line x1="450" y1="30" x2="450" y2="250"/>
                                <line x1="550" y1="30" x2="550" y2="250"/>
                                <line x1="650" y1="30" x2="650" y2="250"/>

                                <line x1="40" y1="50" x2="670" y2="50"/>
                                <line x1="40" y1="100" x2="670" y2="100"/>
                                <line x1="40" y1="150" x2="670" y2="150"/>
                                <line x1="40" y1="200" x2="670" y2="200"/>
                            </g>

                            <!-- Sales Line -->

                            <polyline

                                fill="none"

                                stroke="#16A34A"

                                stroke-width="4"

                                points="50,200 130,180 210,140 290,160 370,110 450,90 530,120 610,80 660,60"/>

                        </svg>

                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 font-medium">

                            Live Sales Trend

                        </div>

                    </div>

                </div>

            </div>

            <!-- Bottom Cards -->

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

                <!-- Live Orders -->

                <div class="bg-white rounded-xl border shadow">

                    <div class="px-6 py-4 border-b">

                        <h2 class="text-xl font-bold">

                            Live Orders

                        </h2>

                    </div>

                    <div class="divide-y">

                        <div class="flex items-center justify-between p-5">

                            <div>

                                <h3 class="font-semibold">

                                    Order #1021

                                </h3>

                                <p class="text-sm text-gray-500">

                                    John Cruz

                                </p>

                            </div>

                            <div class="text-right">

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">

                                    Completed

                                </span>

                                <p class="text-sm mt-2">

                                    ₱450

                                </p>

                            </div>

                        </div>

                        <div class="flex items-center justify-between p-5">

                            <div>

                                <h3 class="font-semibold">

                                    Order #1022

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Maria Santos

                                </p>

                            </div>

                            <div class="text-right">

                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">

                                    Preparing

                                </span>

                                <p class="text-sm mt-2">

                                    ₱980

                                </p>

                            </div>

                        </div>

                        <div class="flex items-center justify-between p-5">

                            <div>

                                <h3 class="font-semibold">

                                    Order #1023

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Paul Reyes

                                </p>

                            </div>

                            <div class="text-right">

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">

                                    Cancelled

                                </span>

                                <p class="text-sm mt-2">

                                    ₱320

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Live Inventory -->

                <div class="bg-white rounded-xl border shadow">

                    <div class="px-6 py-4 border-b">

                        <h2 class="text-xl font-bold">

                            Live Inventory Updates

                        </h2>

                    </div>

                    <div class="divide-y">

                        <div class="flex justify-between items-center p-5">

                            <div>

                                <h3 class="font-semibold">

                                    Dragon Fruit

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Updated 2 sec ago

                                </p>

                            </div>

                            <span class="font-bold text-green-600">

                                125 → 124

                            </span>

                        </div>

                        <div class="flex justify-between items-center p-5">

                            <div>

                                <h3 class="font-semibold">

                                    Honey

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Updated 5 sec ago

                                </p>

                            </div>

                            <span class="font-bold text-green-600">

                                89 → 88

                            </span>

                        </div>

                        <div class="flex justify-between items-center p-5">

                            <div>

                                <h3 class="font-semibold">

                                    Tomato Seeds

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Updated 7 sec ago

                                </p>

                            </div>

                            <span class="font-bold text-red-500">

                                10 → 9

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Right Sidebar -->

        <div class="col-span-12 lg:col-span-4 space-y-6">
                        <!-- Active Customers -->
            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b flex justify-between items-center">

                    <h2 class="text-xl font-bold">
                        Active Customers
                    </h2>

                    <span class="text-green-600 font-semibold animate-pulse">
                        ● Online
                    </span>

                </div>

                <div class="p-6 space-y-5">

                    <div class="flex justify-between items-center">

                        <div>

                            <h4 class="font-semibold">
                                Currently Browsing
                            </h4>

                            <p class="text-sm text-gray-500">
                                Users on website
                            </p>

                        </div>

                        <span class="text-3xl font-bold text-[#4A7C2F]">
                            95
                        </span>

                    </div>

                    <hr>

                    <div>

                        <h4 class="font-semibold mb-3">
                            Top Pages
                        </h4>

                        <div class="space-y-3">

                            <div class="flex justify-between">

                                <span>Home</span>

                                <span class="font-semibold">
                                    54 Users
                                </span>

                            </div>

                            <div class="flex justify-between">

                                <span>Products</span>

                                <span class="font-semibold">
                                    28 Users
                                </span>

                            </div>

                            <div class="flex justify-between">

                                <span>Checkout</span>

                                <span class="font-semibold">
                                    13 Users
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Website Traffic -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Website Traffic

                    </h2>

                </div>

                <div class="p-6 space-y-5">

                    <div class="flex justify-between">

                        <span>Visitors Today</span>

                        <span class="font-bold">
                            1,280
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Visitors Online</span>

                        <span class="font-bold text-green-600">
                            95
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Bounce Rate</span>

                        <span class="font-bold">
                            14%
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Average Session</span>

                        <span class="font-bold">
                            6 mins
                        </span>

                    </div>

                </div>

            </div>

            <!-- Warehouse Monitor -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Warehouse Monitor

                    </h2>

                </div>

                <div class="p-6 space-y-6">

                    <div>

                        <div class="flex justify-between mb-2">

                            <span>Warehouse A</span>

                            <span class="font-semibold">

                                92%

                            </span>

                        </div>

                        <div class="w-full h-3 bg-gray-200 rounded-full">

                            <div class="w-[92%] h-3 bg-green-500 rounded-full"></div>

                        </div>

                    </div>

                    <div>

                        <div class="flex justify-between mb-2">

                            <span>Warehouse B</span>

                            <span class="font-semibold">

                                78%

                            </span>

                        </div>

                        <div class="w-full h-3 bg-gray-200 rounded-full">

                            <div class="w-[78%] h-3 bg-yellow-500 rounded-full"></div>

                        </div>

                    </div>

                    <div>

                        <div class="flex justify-between mb-2">

                            <span>Warehouse C</span>

                            <span class="font-semibold">

                                61%

                            </span>

                        </div>

                        <div class="w-full h-3 bg-gray-200 rounded-full">

                            <div class="w-[61%] h-3 bg-red-500 rounded-full"></div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Farm Monitoring -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Farm Monitoring

                    </h2>

                </div>

                <div class="p-6 grid grid-cols-2 gap-5">

                    <div class="rounded-lg bg-green-50 p-4 text-center">

                        <p class="text-gray-500">

                            Humidity

                        </p>

                        <h3 class="text-3xl font-bold text-green-600 mt-2">

                            78%

                        </h3>

                    </div>

                    <div class="rounded-lg bg-orange-50 p-4 text-center">

                        <p class="text-gray-500">

                            Temperature

                        </p>

                        <h3 class="text-3xl font-bold text-orange-500 mt-2">

                            29°C

                        </h3>

                    </div>

                    <div class="rounded-lg bg-blue-50 p-4 text-center">

                        <p class="text-gray-500">

                            Soil Moisture

                        </p>

                        <h3 class="text-3xl font-bold text-blue-600 mt-2">

                            61%

                        </h3>

                    </div>

                    <div class="rounded-lg bg-gray-100 p-4 text-center">

                        <p class="text-gray-500">

                            Rain Forecast

                        </p>

                        <h3 class="text-xl font-bold mt-2">

                            None

                        </h3>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Live Delivery Tracking -->

    <div class="mt-8 bg-white rounded-xl border shadow">

        <div class="px-6 py-4 border-b flex justify-between items-center">

            <h2 class="text-2xl font-bold">

                Live Delivery Tracking

            </h2>

            <span class="text-sm text-gray-500">

                GPS Monitoring

            </span>

        </div>

        <div class="p-8">

            <div class="h-[420px] rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center">

                <div class="text-center">

                    <div class="text-7xl mb-4">

                        🗺️

                    </div>

                    <h3 class="text-2xl font-bold text-gray-700">

                        Live Delivery Map

                    </h3>

                    <p class="text-gray-500 mt-3">

                        Google Maps / Leaflet Integration Placeholder

                    </p>

                </div>

            </div>

        </div>

    </div>
        <!-- Bottom Dashboard -->

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">

        <!-- System Notifications -->

        <div class="bg-white rounded-xl shadow border">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    System Notifications

                </h2>

            </div>

            <div class="p-6 space-y-4">

                <div class="flex gap-3">

                    <span>🛒</span>

                    <div>

                        <p class="font-semibold">

                            New Order Received

                        </p>

                        <p class="text-sm text-gray-500">

                            Order #1024 • 2 sec ago

                        </p>

                    </div>

                </div>

                <div class="flex gap-3">

                    <span>📦</span>

                    <div>

                        <p class="font-semibold">

                            Inventory Updated

                        </p>

                        <p class="text-sm text-gray-500">

                            Dragon Fruit Stock Changed

                        </p>

                    </div>

                </div>

                <div class="flex gap-3">

                    <span>⚠️</span>

                    <div>

                        <p class="font-semibold text-red-500">

                            Low Stock Alert

                        </p>

                        <p class="text-sm text-gray-500">

                            Tomato Seeds Remaining: 9

                        </p>

                    </div>

                </div>

                <div class="flex gap-3">

                    <span>🔄</span>

                    <div>

                        <p class="font-semibold">

                            Warehouse Sync Complete

                        </p>

                        <p class="text-sm text-gray-500">

                            All warehouses synchronized

                        </p>

                    </div>

                </div>

                <div class="flex gap-3">

                    <span>💾</span>

                    <div>

                        <p class="font-semibold">

                            Database Backup

                        </p>

                        <p class="text-sm text-gray-500">

                            Completed successfully

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Recent Customer Activity -->

        <div class="bg-white rounded-xl shadow border">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Recent Customer Activity

                </h2>

            </div>

            <div class="divide-y">

                <div class="p-5">

                    <p class="font-semibold">

                        Maria Santos

                    </p>

                    <p class="text-sm text-gray-500">

                        Viewed Honey Product

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold">

                        John Cruz

                    </p>

                    <p class="text-sm text-gray-500">

                        Added Dragon Fruit to Cart

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold">

                        Paul Reyes

                    </p>

                    <p class="text-sm text-gray-500">

                        Completed Checkout

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold">

                        Anna Garcia

                    </p>

                    <p class="text-sm text-gray-500">

                        Created New Account

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold">

                        Mark Flores

                    </p>

                    <p class="text-sm text-gray-500">

                        Added Tomato Seeds to Wishlist

                    </p>

                </div>

            </div>

        </div>

        <!-- System Status -->

        <div class="bg-white rounded-xl shadow border">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    System Status

                </h2>

            </div>

            <div class="p-6 space-y-6">

                <div class="flex justify-between">

                    <span>

                        Database

                    </span>

                    <span class="font-semibold text-green-600">

                        Connected

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        API

                    </span>

                    <span class="font-semibold text-green-600">

                        Online

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        Server

                    </span>

                    <span class="font-semibold text-green-600">

                        Healthy

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        Storage

                    </span>

                    <span class="font-semibold text-yellow-500">

                        72%

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        CPU Usage

                    </span>

                    <span class="font-semibold">

                        31%

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        Memory Usage

                    </span>

                    <span class="font-semibold">

                        48%

                    </span>

                </div>

            </div>

        </div>

    </div>

    <!-- Top Selling Products -->

    <div class="bg-white rounded-xl border shadow mt-8">

        <div class="px-6 py-4 border-b">

            <h2 class="text-2xl font-bold">

                Top Selling Products Today

            </h2>

        </div>

        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="bg-[#EAF6E4]">

                    <tr>

                        <th class="text-left px-6 py-4">Product</th>

                        <th class="text-center px-6 py-4">Units Sold</th>

                        <th class="text-center px-6 py-4">Revenue</th>

                        <th class="text-center px-6 py-4">Trend</th>

                    </tr>

                </thead>

                <tbody class="divide-y">

                    <tr>

                        <td class="px-6 py-4 font-semibold">

                            Dragon Fruit

                        </td>

                        <td class="text-center">

                            132

                        </td>

                        <td class="text-center">

                            ₱19,800

                        </td>

                        <td class="text-center text-green-600">

                            ▲ 18%

                        </td>

                    </tr>

                    <tr>

                        <td class="px-6 py-4 font-semibold">

                            Honey

                        </td>

                        <td class="text-center">

                            91

                        </td>

                        <td class="text-center">

                            ₱22,750

                        </td>

                        <td class="text-center text-green-600">

                            ▲ 11%

                        </td>

                    </tr>

                    <tr>

                        <td class="px-6 py-4 font-semibold">

                            Tomato Seeds

                        </td>

                        <td class="text-center">

                            74

                        </td>

                        <td class="text-center">

                            ₱5,920

                        </td>

                        <td class="text-center text-red-500">

                            ▼ 3%

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection