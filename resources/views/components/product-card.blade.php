<div class="group overflow-hidden rounded-xl bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

    <!-- Product Image -->
    <div class="relative bg-gray-100">

        @if(!empty($product->discount))
            <span class="absolute left-3 top-3 rounded bg-red-500 px-2 py-1 text-xs font-semibold text-white">
                -{{ $product->discount }}%
            </span>
        @endif

        <!-- Wishlist -->
        <button
            class="absolute right-3 top-3 flex h-9 w-9 items-center justify-center rounded-full bg-white shadow transition hover:bg-gray-100">

            ♡

        </button>

        <a href="{{ route('product.show', $product->id) }}">

            <img
                src="{{ asset('storage/' . $product->image) }}"
                alt="{{ $product->name }}"
                class="h-60 w-full object-contain p-6 transition duration-300 group-hover:scale-105">

        </a>

    </div>

    <!-- Product Details -->
    <div class="p-5">

        <a
            href="{{ route('product.show', $product->id) }}"
            class="text-lg font-semibold text-gray-800 transition hover:text-[#4A7C2F]">

            {{ $product->name }}

        </a>

        <div class="mt-2 flex items-center gap-3">

            <span class="text-lg font-bold text-[#4A7C2F]">

                ₱{{ number_format($product->price,2) }}

            </span>

            @if(!empty($product->old_price))

                <span class="text-gray-400 line-through">

                    ₱{{ number_format($product->old_price,2) }}

                </span>

            @endif

        </div>

        <!-- Rating -->
        <div class="mt-3 flex items-center gap-2">

            <div class="text-yellow-400">

                ★★★★★

            </div>

            <span class="text-sm text-gray-500">

                ({{ $product->reviews_count ?? 0 }})

            </span>

        </div>

        <!-- Stock -->
        <div class="mt-3">

            @if($product->stock > 10)

                <span class="font-medium text-green-600">

                    In Stock

                </span>

            @elseif($product->stock > 0)

                <span class="font-medium text-orange-500">

                    Only {{ $product->stock }} left

                </span>

            @else

                <span class="font-medium text-red-500">

                    Out of Stock

                </span>

            @endif

        </div>

        <!-- Buttons -->
        <div class="mt-5 flex gap-2">

            <a
                href="{{ route('product.show', $product->id) }}"
                class="flex-1 rounded-lg border border-[#4A7C2F] py-3 text-center font-semibold text-[#4A7C2F] transition hover:bg-[#4A7C2F] hover:text-white">

                View

            </a>

            <form
                action="{{ route('cart.add', $product->id) }}"
                method="POST"
                class="flex-1">

                @csrf

                <button
                    type="submit"
                    class="w-full rounded-lg bg-[#F59E0B] py-3 font-semibold text-white transition hover:bg-orange-600 disabled:cursor-not-allowed disabled:bg-gray-400"
                    {{ $product->stock == 0 ? 'disabled' : '' }}>

                    Add to Cart

                </button>

            </form>

        </div>

    </div>

</div>