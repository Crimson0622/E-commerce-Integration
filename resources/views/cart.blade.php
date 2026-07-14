@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    {{-- Breadcrumb --}}
    <div class="text-sm text-gray-500 mb-8">
        <a href="{{ route('cart') }}" class="hover:text-[#4A7C2F]">
            Home
        </a>

        <span class="mx-2">/</span>

        <span class="text-gray-800 font-semibold">
            Cart
        </span>
    </div>

    {{-- Cart Table --}}
    <div class="overflow-x-auto">

        <table class="w-full bg-white shadow rounded-lg overflow-hidden">

            <thead class="bg-gray-50">

                <tr class="text-left text-gray-600">

                    <th class="p-5 font-semibold">
                        Product
                    </th>

                    <th class="p-5 font-semibold">
                        Price
                    </th>

                    <th class="p-5 font-semibold">
                        Quantity
                    </th>

                    <th class="p-5 font-semibold">
                        Subtotal
                    </th>

                    <th class="p-5"></th>

                </tr>

            </thead>

            <tbody>

                {{-- Product 1 --}}
                <tr class="border-t">

                    <td class="p-5">

                        <div class="flex items-center gap-4">

                            <img
                                src="{{ asset('images/dragonfruit.png') }}"
                                alt="Dragon Fruit"
                                class="w-20 h-20 object-cover rounded">

                            <div>

                                <h3 class="font-semibold">
                                    Dragon Fruit
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Fresh Organic Fruit
                                </p>

                            </div>

                        </div>

                    </td>

                    <td class="p-5">

                        ₱150

                    </td>

                    <td class="p-5">

                        <input
                            type="number"
                            min="1"
                            value="2"
                            class="w-20 border rounded-lg p-2 text-center">

                    </td>

                    <td class="p-5 font-semibold">

                        ₱300

                    </td>

                    <td class="p-5">

                        <button
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">

                            Remove

                        </button>

                    </td>

                </tr>

                {{-- Product 2 --}}
                <tr class="border-t">

                    <td class="p-5">

                        <div class="flex items-center gap-4">

                            <img
                                src="{{ asset('images/bee.png') }}"
                                alt="Bee"
                                class="w-20 h-20 object-cover rounded">

                            <div>

                                <h3 class="font-semibold">

                                    Honey Bee

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Natural Honey

                                </p>

                            </div>

                        </div>

                    </td>

                    <td class="p-5">

                        ₱250

                    </td>

                    <td class="p-5">

                        <input
                            type="number"
                            min="1"
                            value="1"
                            class="w-20 border rounded-lg p-2 text-center">

                    </td>

                    <td class="p-5 font-semibold">

                        ₱250

                    </td>

                    <td class="p-5">

                        <button
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">

                            Remove

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

    {{-- Action Buttons --}}
    <div class="flex justify-between mt-8">

        <a
            href="{{ route('checkout') }}"
            class="border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-100 transition">

            Return To Shop

        </a>

        <button
            class="border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-100 transition">

            Update Cart

        </button>

    </div>
        {{-- Coupon & Cart Total --}}
    <div class="mt-12 flex flex-col gap-8 lg:flex-row lg:items-start lg:justify-between">

        <!-- Coupon -->
        <div class="flex w-full max-w-md gap-4">

            <input
                type="text"
                placeholder="Coupon Code"
                class="flex-1 rounded-md border border-gray-300 px-4 py-3 focus:border-[#4A7C2F] focus:outline-none">

            <button
                class="rounded-md bg-[#F59E0B] px-6 py-3 font-medium text-white transition hover:bg-[#d97706]">

                Apply Coupon

            </button>

        </div>

        <!-- Cart Total -->
        <div class="w-full max-w-sm rounded-md border-2 border-gray-800 p-6">

            <h2 class="mb-5 text-xl font-semibold">
                Cart Total
            </h2>

            <div class="flex justify-between border-b py-3">
                <span>Subtotal</span>
                <span>₱550</span>
            </div>

            <div class="flex justify-between border-b py-3">
                <span>Shipping</span>
                <span>Free</span>
            </div>

            <div class="flex justify-between py-3 font-semibold">
                <span>Total</span>
                <span>₱550</span>
            </div>

            <div class="mt-6 text-center">

                <a
                    href="{{ route('checkout') }}"
                    class="inline-block rounded-md bg-[#F59E0B] px-8 py-3 font-medium text-white transition hover:bg-[#d97706]">

                    Proceed to Checkout

                </a>

            </div>

        </div>

    </div>

</div>

@endsection
