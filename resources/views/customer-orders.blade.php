@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    {{-- Breadcrumb --}}
    <div class="text-sm text-gray-500 mb-8">
        <a href="{{ url('/') }}" class="hover:text-[#4A7C2F]">Home</a>
        <span class="mx-2">/</span>
        <span class="font-semibold text-gray-700">
            My Orders
        </span>
    </div>

    {{-- Title --}}
    <div class="flex justify-between items-center mb-8">

        <div>

            <h1 class="text-3xl font-bold">
                Order Lists
            </h1>

            <p class="text-gray-500 mt-1">
                View and track your recent purchases.
            </p>

        </div>

    </div>

    {{-- Search + Buttons --}}
    <div class="flex flex-col lg:flex-row lg:justify-between gap-4 mb-8">

        <input
            type="text"
            placeholder="Search Order..."
            class="w-full lg:w-96 border rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#4A7C2F] outline-none">

        <div class="flex gap-3">

            <button
                class="border border-green-500 text-green-600 px-5 py-2 rounded-lg hover:bg-green-50">

                Export

            </button>

            <button
                class="bg-[#F59E0B] text-white px-5 py-2 rounded-lg hover:bg-orange-600">

                Filter

            </button>

        </div>

    </div>

    {{-- Orders Table --}}
    <div class="overflow-x-auto bg-white rounded-xl shadow">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr class="text-gray-600 text-left">

                    <th class="p-4">
                        #
                    </th>

                    <th class="p-4">
                        Order ID
                    </th>

                    <th class="p-4">
                        Product
                    </th>

                    <th class="p-4">
                        Quantity
                    </th>

                    <th class="p-4">
                        Total
                    </th>

                    <th class="p-4">
                        Payment
                    </th>

                    <th class="p-4">
                        Date
                    </th>

                    <th class="p-4">
                        Status
                    </th>

                    <th class="p-4 text-center">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

                {{-- Example Row --}}
                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">
                        1
                    </td>

                    <td class="p-4 font-semibold">
                        ORD-1001
                    </td>

                    <td class="p-4">
                        Dragon Fruit
                    </td>

                    <td class="p-4">
                        2
                    </td>

                    <td class="p-4">
                        ₱300
                    </td>

                    <td class="p-4">
                        GCash
                    </td>

                    <td class="p-4">
                        Jul 1, 2026
                    </td>

                    <td class="p-4">

                        <span
                            class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm">

                            Delivered

                        </span>

                    </td>

                    <td class="p-4 text-center">

                        <a
                            href="{{ url('/orders/1') }}"
                            class="text-[#4A7C2F] font-semibold hover:underline">

                            View

                        </a>

                    </td>

                </tr>

                {{-- Example Row --}}
                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">
                        2
                    </td>

                    <td class="p-4 font-semibold">
                        ORD-1002
                    </td>

                    <td class="p-4">
                        Honey Bee
                    </td>

                    <td class="p-4">
                        1
                    </td>

                    <td class="p-4">
                        ₱250
                    </td>

                    <td class="p-4">
                        Cash
                    </td>

                    <td class="p-4">
                        Jul 2, 2026
                    </td>

                    <td class="p-4">

                        <span
                            class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-sm">

                            Processing

                        </span>

                    </td>

                    <td class="p-4 text-center">

                        <a
                            href="{{ url('/orders/2') }}"
                            class="text-[#4A7C2F] font-semibold hover:underline">

                            View

                        </a>

                    </td>

                </tr>

                {{-- Example Row --}}
                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">
                        3
                    </td>

                    <td class="p-4 font-semibold">
                        ORD-1003
                    </td>

                    <td class="p-4">
                        Banana
                    </td>

                    <td class="p-4">
                        5
                    </td>

                    <td class="p-4">
                        ₱475
                    </td>

                    <td class="p-4">
                        Card
                    </td>

                    <td class="p-4">
                        Jul 4, 2026
                    </td>

                    <td class="p-4">

                        <span
                            class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-sm">

                            Shipped

                        </span>

                    </td>

                    <td class="p-4 text-center">

                        <a
                            href="{{ url('/orders/3') }}"
                            class="text-[#4A7C2F] font-semibold hover:underline">

                            View

                        </a>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection