@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-8 py-10">

    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-10">
        <a href="{{ url('/') }}" class="hover:text-[#4A7C2F]">Account</a>
        <span class="mx-2">/</span>

        <a href="{{ url('/account') }}" class="hover:text-[#4A7C2F]">My Account</a>
        <span class="mx-2">/</span>

        <a href="{{ url('/product') }}" class="hover:text-[#4A7C2F]">Product</a>
        <span class="mx-2">/</span>

        <a href="{{ url('/cart') }}" class="hover:text-[#4A7C2F]">View Cart</a>
        <span class="mx-2">/</span>

        <span class="font-semibold text-gray-800">
            CheckOut
        </span>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">

        <!-- Billing Form -->
        <div>

            <h1 class="text-4xl font-bold mb-10">
                Billing Details
            </h1>

            <form class="space-y-5">

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        First Name*
                    </label>

                    <input
                        type="text"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none focus:ring-2 focus:ring-[#4A7C2F]">

                </div>

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        Last Name*
                    </label>

                    <input
                        type="text"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none focus:ring-2 focus:ring-[#4A7C2F]">

                </div>

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        Street Address*
                    </label>

                    <input
                        type="text"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none focus:ring-2 focus:ring-[#4A7C2F]">

                </div>

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        Apartment, Floor, etc. (optional)
                    </label>

                    <input
                        type="text"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none">

                </div>

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        Town / City*
                    </label>

                    <input
                        type="text"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none">

                </div>

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        Phone Number*
                    </label>

                    <input
                        type="text"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none">

                </div>

                <div>

                    <label class="block text-sm text-gray-500 mb-2">
                        Email Address*
                    </label>

                    <input
                        type="email"
                        class="w-full bg-gray-100 rounded px-4 py-3 outline-none">

                </div>

                <label class="flex items-center gap-3 mt-5">

                    <input
                        type="checkbox"
                        class="accent-[#F59E0B]">

                    <span class="text-sm text-gray-600">
                        Save this information for faster check-out next time
                    </span>

                </label>

            </form>

        </div>

        <!-- Order Summary -->
        <div>

            <div class="space-y-6">

                <!-- Product -->
                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-4">

                        <img
                            src="{{ asset('images/bee.png') }}"
                            class="w-16 h-16 object-cover rounded">

                        <span class="font-medium">
                            Bee
                        </span>

                    </div>

                    <span>
                        $10
                    </span>

                </div>

                <!-- Product -->
                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-4">

                        <img
                            src="{{ asset('images/dragonfruit.png') }}"
                            class="w-16 h-16 object-cover rounded">

                        <span class="font-medium">
                            Dragon Fruit
                        </span>

                    </div>

                    <span>
                        $15
                    </span>

                </div>

                <hr>

                <div class="flex justify-between">

                    <span>
                        Subtotal
                    </span>

                    <span>
                        $25
                    </span>

                </div>

                <div class="flex justify-between">

                    <span>
                        Shipping
                    </span>

                    <span>
                        Free
                    </span>

                </div>

                <hr>

                <div class="flex justify-between font-semibold text-lg">

                    <span>
                        Total
                    </span>

                    <span>
                        $25
                    </span>

                </div>

                <!-- Payment -->
                <div class="space-y-4 mt-8">

                    <label class="flex items-center justify-between">

                        <div class="flex items-center gap-3">

                            <input
                                type="radio"
                                name="payment"
                                checked>

                            <span>
                                Online Payment
                            </span>

                        </div>

                        <span class="text-2xl">
                            💳
                        </span>

                    </label>

                    <label class="flex items-center gap-3">

                        <input
                            type="radio"
                            name="payment">

                        <span>
                            Cash on Delivery
                        </span>

                    </label>

                </div>

                <!-- Coupon -->
                <div class="flex gap-4 mt-8">

                    <input
                        type="text"
                        placeholder="Coupon Code"
                        class="flex-1 border rounded px-4 py-3 outline-none">

                    <button
                        class="bg-orange-500 hover:bg-orange-600 text-white px-8 rounded">

                        Apply Coupon

                    </button>

                </div>

            <button
                   type="button"
                   onclick="openOrderModal()"
                   class="mt-8 bg-orange-500 hover:bg-orange-600 text-white px-10 py-4 rounded transition">

                   Place Order

            </button>

            </div>

        </div>

    </div>

</div>

<!-- Order Success Modal -->
<div
    id="orderModal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">

    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-xl p-10 relative">

        <!-- Close Button -->
        <button
            onclick="closeOrderModal()"
            class="absolute top-5 right-5 text-2xl text-gray-400 hover:text-red-500">

            ✕

        </button>

        <div class="border border-gray-300 p-8 text-center">

            <h2 class="text-xl font-bold mb-6">
                ✔ Order Confirmed!
            </h2>

            <p class="font-semibold">
                Thank you for your purchase.
            </p>

            <p class="text-gray-600 mb-6">
                Your order has been successfully placed
                <br>
                and is now being processed.
            </p>

            <hr class="my-6">

            <div class="space-y-2">

                <p>
                    <strong>Order Number:</strong>
                    ORD-2026-10482
                </p>

                <p>
                    <strong>Estimated Delivery:</strong>
                    July 4 – July 7
                </p>

                <p>
                    <strong>Payment Method:</strong>
                    Cash on Delivery
                </p>

            </div>

            <hr class="my-6">

            <p class="text-gray-600">
                Thank you for choosing
                <strong>Ambatugrow.</strong>
            </p>

            <p class="text-gray-600 mb-8">
                We hope you enjoy your purchase!
            </p>

            <div class="flex justify-center gap-6">

                <a
                    href="{{ url('/orders') }}"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded">

                    Track My Order

                </a>

                <a
                    href="{{ url('/') }}"
                    class="bg-[#4A7C2F] hover:bg-[#3b6227] text-white px-6 py-3 rounded">

                    Continue Shopping

                </a>

            </div>

        </div>

    </div>

</div>

<script>

function openOrderModal(){

    document
        .getElementById('orderModal')
        .classList.remove('hidden');

    document
        .getElementById('orderModal')
        .classList.add('flex');

}

function closeOrderModal(){

    document
        .getElementById('orderModal')
        .classList.remove('flex');

    document
        .getElementById('orderModal')
        .classList.add('hidden');

}

</script>
@endsection