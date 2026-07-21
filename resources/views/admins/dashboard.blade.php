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

            <span class="font-semibold text-[#4A7C2F]">

                Admin Dashboard

            </span>

        </div>

        <div class="flex items-center gap-3">

            <span class="h-3 w-3 rounded-full bg-green-500 animate-pulse"></span>

            <span class="font-semibold text-green-600">

                System Online

            </span>

        </div>

    </div>

    <!-- Welcome -->

    <div class="rounded-2xl bg-gradient-to-r from-[#4A7C2F] to-[#6BAA3B] p-8 text-white shadow-lg mb-8">

        <h1 class="text-4xl font-bold">

            Welcome, Administrator 👋

        </h1>

        <p class="mt-3 text-green-100">

            Manage your products, customers, inventory, warehouse,
            orders and monitor your farm in one place.

        </p>

    </div>

    <!-- Statistics -->

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <!-- Card -->

        <div class="bg-white rounded-xl border shadow p-6">

            <p class="text-gray-500">

                Total Products

            </p>

            <h2 class="text-4xl font-bold text-[#4A7C2F] mt-2">

                1,250

            </h2>

            <p class="text-sm text-green-600 mt-2">

                ▲ +18 this week

            </p>

        </div>

        <div class="bg-white rounded-xl border shadow p-6">

            <p class="text-gray-500">

                Orders Today

            </p>

            <h2 class="text-4xl font-bold text-blue-600 mt-2">

                248

            </h2>

            <p class="text-sm text-blue-500 mt-2">

                24 Pending

            </p>

        </div>

        <div class="bg-white rounded-xl border shadow p-6">

            <p class="text-gray-500">

                Customers

            </p>

            <h2 class="text-4xl font-bold text-purple-600 mt-2">

                2,843

            </h2>

            <p class="text-sm text-purple-500 mt-2">

                +92 this month

            </p>

        </div>

        <div class="bg-white rounded-xl border shadow p-6">

            <p class="text-gray-500">

                Revenue

            </p>

            <h2 class="text-4xl font-bold text-yellow-500 mt-2">

                ₱542K

            </h2>

            <p class="text-sm text-yellow-500 mt-2">

                This Month

            </p>

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

    <!-- Main Dashboard -->

    <div class="grid grid-cols-12 gap-6">

        <!-- Left Content -->

        <div class="col-span-12 lg:col-span-8">
                        <!-- Sales Analytics -->

            <div class="bg-white rounded-xl border shadow mb-6">

                <div class="flex items-center justify-between px-6 py-4 border-b">

                    <h2 class="text-2xl font-bold">

                        Sales Analytics

                    </h2>

                    <select class="border rounded-lg px-4 py-2">

                        <option>This Week</option>
                        <option>This Month</option>
                        <option>This Year</option>

                    </select>

                </div>

                <div class="p-8">

                    <div class="h-80 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center">

                        <div class="text-center">

                            <div class="text-6xl mb-4">

                                📈

                            </div>

                            <h3 class="text-2xl font-bold">

                                Sales Performance Chart

                            </h3>

                            <p class="text-gray-500 mt-3">

                                Monthly Revenue & Orders

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Recent Orders -->

            <div class="bg-white rounded-xl border shadow">

                <div class="flex justify-between items-center px-6 py-4 border-b">

                    <h2 class="text-2xl font-bold">

                        Recent Orders

                    </h2>

                    <a href="{{ route('admins.orders') }}"
                       class="text-[#4A7C2F] hover:underline">

                        View All

                    </a>

                </div>

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-[#EAF6E4]">

                            <tr>

                                <th class="text-left px-6 py-4">
                                    Order ID
                                </th>

                                <th class="text-left px-6 py-4">
                                    Customer
                                </th>

                                <th class="text-center px-6 py-4">
                                    Amount
                                </th>

                                <th class="text-center px-6 py-4">
                                    Status
                                </th>

                                <th class="text-center px-6 py-4">
                                    Date
                                </th>

                            </tr>

                        </thead>

                        <tbody class="divide-y">

                            <tr>

                                <td class="px-6 py-4 font-semibold">

                                    #1025

                                </td>

                                <td class="px-6 py-4">

                                    John Cruz

                                </td>

                                <td class="text-center">

                                    ₱1,250

                                </td>

                                <td class="text-center">

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">

                                        Completed

                                    </span>

                                </td>

                                <td class="text-center">

                                    Today

                                </td>

                            </tr>

                            <tr>

                                <td class="px-6 py-4 font-semibold">

                                    #1024

                                </td>

                                <td class="px-6 py-4">

                                    Maria Santos

                                </td>

                                <td class="text-center">

                                    ₱920

                                </td>

                                <td class="text-center">

                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">

                                        Processing

                                    </span>

                                </td>

                                <td class="text-center">

                                    Today

                                </td>

                            </tr>

                            <tr>

                                <td class="px-6 py-4 font-semibold">

                                    #1023

                                </td>

                                <td class="px-6 py-4">

                                    Paul Reyes

                                </td>

                                <td class="text-center">

                                    ₱480

                                </td>

                                <td class="text-center">

                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">

                                        Shipped

                                    </span>

                                </td>

                                <td class="text-center">

                                    Yesterday

                                </td>

                            </tr>

                            <tr>

                                <td class="px-6 py-4 font-semibold">

                                    #1022

                                </td>

                                <td class="px-6 py-4">

                                    Anna Garcia

                                </td>

                                <td class="text-center">

                                    ₱650

                                </td>

                                <td class="text-center">

                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">

                                        Cancelled

                                    </span>

                                </td>

                                <td class="text-center">

                                    Yesterday

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- Right Sidebar -->

        <div class="col-span-12 lg:col-span-4 space-y-6">

            <!-- Inventory Summary -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Inventory Summary

                    </h2>

                </div>

                <div class="p-6 space-y-5">

                    <div class="flex justify-between">

                        <span>Total Products</span>

                        <span class="font-bold">

                            1,250

                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>In Stock</span>

                        <span class="font-bold text-green-600">

                            1,118

                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Low Stock</span>

                        <span class="font-bold text-yellow-500">

                            32

                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span>Out of Stock</span>

                        <span class="font-bold text-red-500">

                            18

                        </span>

                    </div>

                </div>

            </div>

            <!-- Revenue -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Monthly Revenue

                    </h2>

                </div>

                <div class="p-8">

                    <div class="h-56 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">

                        💰 Revenue Graph

                    </div>

                </div>

            </div>

            <!-- Recent Activity -->

            <div class="bg-white rounded-xl border shadow">

                <div class="px-6 py-4 border-b">

                    <h2 class="text-xl font-bold">

                        Recent Activity

                    </h2>

                </div>

                <div class="p-6 space-y-4">

                    <div class="flex gap-3">
                        <span>📦</span>
                        <p>New product added.</p>
                    </div>

                    <div class="flex gap-3">
                        <span>🛒</span>
                        <p>Order #1025 completed.</p>
                    </div>

                    <div class="flex gap-3">
                        <span>👤</span>
                        <p>New customer registered.</p>
                    </div>

                    <div class="flex gap-3">
                        <span>⚠️</span>
                        <p>Tomato Seeds reached low stock.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>
        <!-- Additional Analytics -->

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">

        <!-- Top Selling Products -->

        <div class="bg-white rounded-xl border shadow">

            <div class="flex items-center justify-between px-6 py-4 border-b">

                <h2 class="text-2xl font-bold">

                    Top Selling Products

                </h2>

                <span class="text-sm text-gray-500">

                    This Month

                </span>

            </div>

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <thead class="bg-[#EAF6E4]">

                        <tr>

                            <th class="text-left px-6 py-4">
                                Product
                            </th>

                            <th class="text-center px-6 py-4">
                                Sold
                            </th>

                            <th class="text-center px-6 py-4">
                                Revenue
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y">

                        <tr>

                            <td class="px-6 py-4 font-semibold">

                                Dragon Fruit

                            </td>

                            <td class="text-center">

                                245

                            </td>

                            <td class="text-center">

                                ₱36,750

                            </td>

                        </tr>

                        <tr>

                            <td class="px-6 py-4 font-semibold">

                                Honey

                            </td>

                            <td class="text-center">

                                182

                            </td>

                            <td class="text-center">

                                ₱45,500

                            </td>

                        </tr>

                        <tr>

                            <td class="px-6 py-4 font-semibold">

                                Tomato Seeds

                            </td>

                            <td class="text-center">

                                146

                            </td>

                            <td class="text-center">

                                ₱11,680

                            </td>

                        </tr>

                        <tr>

                            <td class="px-6 py-4 font-semibold">

                                Organic Fertilizer

                            </td>

                            <td class="text-center">

                                98

                            </td>

                            <td class="text-center">

                                ₱44,100

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- Sales by Category -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-2xl font-bold">

                    Sales by Category

                </h2>

            </div>

            <div class="p-8">

                <div class="h-72 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">

                    🥧 Pie Chart Placeholder

                </div>

            </div>

        </div>

    </div>

    <!-- Bottom Dashboard -->

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

        <!-- Customer Growth -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Customer Growth

                </h2>

            </div>

            <div class="p-6 space-y-5">

                <div class="flex justify-between">

                    <span>New Today</span>

                    <span class="font-bold text-green-600">

                        +24

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>This Week</span>

                    <span class="font-bold">

                        +96

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>This Month</span>

                    <span class="font-bold">

                        +352

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>Total Customers</span>

                    <span class="font-bold text-blue-600">

                        2,843

                    </span>

                </div>

            </div>

        </div>

        <!-- Warehouse Overview -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Warehouse Overview

                </h2>

            </div>

            <div class="p-6 space-y-6">

                <div>

                    <div class="flex justify-between mb-2">

                        <span>Warehouse A</span>

                        <span class="font-semibold">

                            90%

                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="w-[90%] h-3 rounded-full bg-green-500"></div>

                    </div>

                </div>

                <div>

                    <div class="flex justify-between mb-2">

                        <span>Warehouse B</span>

                        <span class="font-semibold">

                            76%

                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="w-[76%] h-3 rounded-full bg-yellow-500"></div>

                    </div>

                </div>

                <div>

                    <div class="flex justify-between mb-2">

                        <span>Warehouse C</span>

                        <span class="font-semibold">

                            63%

                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="w-[63%] h-3 rounded-full bg-red-500"></div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Low Stock Alerts -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Low Stock Alerts

                </h2>

            </div>

            <div class="p-6 space-y-4">

                <div class="flex justify-between">

                    <span>Tomato Seeds</span>

                    <span class="text-yellow-500 font-bold">

                        9 pcs

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>Organic Fertilizer</span>

                    <span class="text-red-500 font-bold">

                        0 pcs

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>Dragon Fruit</span>

                    <span class="text-yellow-500 font-bold">

                        15 pcs

                    </span>

                </div>

                <div class="mt-4">

                    <button class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg transition">

                        Restock Inventory

                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- System Health -->

    <div class="bg-white rounded-xl border shadow mt-8">

        <div class="px-6 py-4 border-b">

            <h2 class="text-2xl font-bold">

                System Health Monitoring

            </h2>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6">

            <div class="text-center">

                <div class="text-5xl mb-3">

                    💾

                </div>

                <p class="text-gray-500">

                    Database

                </p>

                <h3 class="font-bold text-green-600 mt-2">

                    Connected

                </h3>

            </div>

            <div class="text-center">

                <div class="text-5xl mb-3">

                    🌐

                </div>

                <p class="text-gray-500">

                    Server

                </p>

                <h3 class="font-bold text-green-600 mt-2">

                    Healthy

                </h3>

            </div>

            <div class="text-center">

                <div class="text-5xl mb-3">

                    ⚙️

                </div>

                <p class="text-gray-500">

                    API

                </p>

                <h3 class="font-bold text-green-600 mt-2">

                    Online

                </h3>

            </div>

            <div class="text-center">

                <div class="text-5xl mb-3">

                    ☁️

                </div>

                <p class="text-gray-500">

                    Storage

                </p>

                <h3 class="font-bold text-yellow-500 mt-2">

                    72%

                </h3>

            </div>

        </div>

    </div>
        <!-- Bottom Section -->

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

        <!-- Upcoming Tasks -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Upcoming Tasks

                </h2>

            </div>

            <div class="p-6 space-y-5">

                <div class="flex items-start gap-3">

                    <span class="text-xl">📦</span>

                    <div>

                        <h3 class="font-semibold">

                            Restock Warehouse A

                        </h3>

                        <p class="text-sm text-gray-500">

                            Tomorrow • 8:00 AM

                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-3">

                    <span class="text-xl">🚚</span>

                    <div>

                        <h3 class="font-semibold">

                            Delivery Schedule

                        </h3>

                        <p class="text-sm text-gray-500">

                            Tomorrow • 10:00 AM

                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-3">

                    <span class="text-xl">🧹</span>

                    <div>

                        <h3 class="font-semibold">

                            Inventory Audit

                        </h3>

                        <p class="text-sm text-gray-500">

                            Friday • 9:00 AM

                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-3">

                    <span class="text-xl">💾</span>

                    <div>

                        <h3 class="font-semibold">

                            Database Backup

                        </h3>

                        <p class="text-sm text-gray-500">

                            Daily • 12:00 AM

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Notifications -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Notifications

                </h2>

            </div>

            <div class="divide-y">

                <div class="p-5">

                    <p class="font-semibold">

                        New Customer Registered

                    </p>

                    <p class="text-sm text-gray-500">

                        5 minutes ago

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold">

                        Order #1028 Completed

                    </p>

                    <p class="text-sm text-gray-500">

                        10 minutes ago

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold text-yellow-600">

                        Honey Inventory Low

                    </p>

                    <p class="text-sm text-gray-500">

                        Remaining stock: 18

                    </p>

                </div>

                <div class="p-5">

                    <p class="font-semibold">

                        Weekly Report Generated

                    </p>

                    <p class="text-sm text-gray-500">

                        Ready to download

                    </p>

                </div>

            </div>

        </div>

        <!-- Recent Admin Logs -->

        <div class="bg-white rounded-xl border shadow">

            <div class="px-6 py-4 border-b">

                <h2 class="text-xl font-bold">

                    Recent Admin Logs

                </h2>

            </div>

            <div class="p-6 space-y-4">

                <div class="flex justify-between">

                    <span>

                        Product Updated

                    </span>

                    <span class="text-gray-500">

                        2 min

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        Inventory Edited

                    </span>

                    <span class="text-gray-500">

                        9 min

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        User Login

                    </span>

                    <span class="text-gray-500">

                        15 min

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        Warehouse Updated

                    </span>

                    <span class="text-gray-500">

                        28 min

                    </span>

                </div>

                <div class="flex justify-between">

                    <span>

                        Product Deleted

                    </span>

                    <span class="text-gray-500">

                        1 hour

                    </span>

                </div>

            </div>

        </div>

    </div>

    <!-- Performance Summary -->

    <div class="bg-gradient-to-r from-[#4A7C2F] to-[#6BAA3B] rounded-2xl shadow-lg mt-8 p-8 text-white">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <div>

                <h3 class="text-lg font-semibold">

                    Orders Completed

                </h3>

                <p class="text-4xl font-bold mt-3">

                    2,184

                </p>

            </div>

            <div>

                <h3 class="text-lg font-semibold">

                    Customer Satisfaction

                </h3>

                <p class="text-4xl font-bold mt-3">

                    98%

                </p>

            </div>

            <div>

                <h3 class="text-lg font-semibold">

                    Monthly Revenue

                </h3>

                <p class="text-4xl font-bold mt-3">

                    ₱542K

                </p>

            </div>

            <div>

                <h3 class="text-lg font-semibold">

                    Inventory Accuracy

                </h3>

                <p class="text-4xl font-bold mt-3">

                    99.4%

                </p>

            </div>

        </div>

    </div>

</div>

@endsection