@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-8">
        <a href="{{ url('/') }}" class="hover:text-[#4A7C2F]">Home</a>

        <span class="mx-2">/</span>

        <span class="font-semibold text-gray-700">
            Admin Dashboard
        </span>

        <span class="mx-2">/</span>

        <span class="font-semibold text-[#4A7C2F]">
                Orders
        </span>
    </div>

    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-3xl font-bold">
                Order Management
            </h1>

            <p class="text-gray-500">
                Manage all customer orders.
            </p>
        </div>

        <button
            class="bg-[#F59E0B] hover:bg-orange-600 text-white px-6 py-3 rounded-lg">

            Export CSV

        </button>

    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500">Total Orders</p>
            <h2 class="text-4xl font-bold mt-2">245</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500">Pending</p>
            <h2 class="text-4xl font-bold text-yellow-500 mt-2">18</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500">Delivered</p>
            <h2 class="text-4xl font-bold text-green-600 mt-2">197</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500">Cancelled</p>
            <h2 class="text-4xl font-bold text-red-500 mt-2">30</h2>
        </div>

    </div>

    <!-- Search & Filters -->
    <div class="flex flex-col lg:flex-row gap-4 justify-between mb-8">

        <input
            type="text"
            placeholder="Search customer..."
            class="w-full lg:w-96 border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-[#4A7C2F]">

        <div class="flex gap-3 flex-wrap">

            <select class="border rounded-lg px-4 py-3">
                <option>All Status</option>
                <option>Pending</option>
                <option>Processing</option>
                <option>Shipped</option>
                <option>Delivered</option>
                <option>Cancelled</option>
            </select>

            <select class="border rounded-lg px-4 py-3">
                <option>All Payments</option>
                <option>Cash</option>
                <option>GCash</option>
                <option>Card</option>
            </select>

            <button
                class="bg-[#F59E0B] hover:bg-orange-600 text-white px-6 rounded-lg">

                Apply Filter

            </button>

        </div>

    </div>

    <!-- Orders Table -->
    <div class="overflow-x-auto bg-white rounded-xl shadow">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr class="text-left text-gray-600">

                    <th class="p-4">ID</th>
                    <th class="p-4">Customer</th>
                    <th class="p-4">Address</th>
                    <th class="p-4">Time</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Payment</th>
                    <th class="p-4">Date</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Update</th>
                    <th class="p-4 text-center">Action</th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">2367</td>
                    <td class="p-4">Juan Dela Cruz</td>
                    <td class="p-4">Digos City</td>
                    <td class="p-4">09:00 AM</td>
                    <td class="p-4">₱550</td>
                    <td class="p-4">GCash</td>
                    <td class="p-4">07/01/26</td>

                    <td class="p-4">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                            Delivered
                        </span>
                    </td>

                    <td class="p-4">

                        <select class="border rounded px-2 py-1">

                            <option>Delivered</option>
                            <option>Processing</option>
                            <option>Shipped</option>
                            <option>Cancelled</option>

                        </select>

                    </td>

                    <td class="p-4">

                        <div class="flex gap-2 justify-center">

                            <button class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">
                                View
                            </button>

                            <button class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">
                                Delete
                            </button>

                        </div>

                    </td>

                </tr>

                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">2368</td>
                    <td class="p-4">Maria Santos</td>
                    <td class="p-4">Davao City</td>
                    <td class="p-4">10:30 AM</td>
                    <td class="p-4">₱325</td>
                    <td class="p-4">Cash</td>
                    <td class="p-4">07/02/26</td>

                    <td class="p-4">

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">

                            Processing

                        </span>

                    </td>

                    <td class="p-4">

                        <select class="border rounded px-2 py-1">

                            <option>Processing</option>
                            <option>Delivered</option>
                            <option>Shipped</option>
                            <option>Cancelled</option>

                        </select>

                    </td>

                    <td class="p-4">

                        <div class="flex gap-2 justify-center">

                            <button class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">
                                View
                            </button>

                            <button class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">
                                Delete
                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection