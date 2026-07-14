<header class="w-full border-b border-gray-200 bg-white">

    {{-- Top Announcement Bar --}}
    <div class="bg-[#4A7C2F] text-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-2 text-sm">

            <div>
                Summer Sale For All Fruits And Vegetables! 🍋
            </div>

            <div>
                <select class="bg-transparent text-white outline-none">
                    <option class="text-black">English</option>
                    <option class="text-black">Filipino</option>
                </select>
            </div>

        </div>
    </div>

    {{-- Navigation --}}
    <div class="mx-auto flex max-w-7xl items-center justify-between px-8 py-5">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">

            <div
                class="flex h-12 w-12 items-center justify-center rounded-full bg-[#4A7C2F] text-2xl text-white">

                🌿

            </div>

            <div>

                <h1 class="text-2xl font-bold tracking-wide">
                    AMBATUGROW
                </h1>

                <p class="text-xs text-gray-500">
                    Fresh From Nature
                </p>

            </div>

        </a>

        {{-- Navigation Links --}}
        <nav class="hidden items-center gap-10 font-medium lg:flex">

            <a
                href="{{ route('home') }}"
                class="transition hover:text-[#4A7C2F]">

                Home

            </a>

            <a
                href="{{ route('contact') }}"
                class="transition hover:text-[#4A7C2F]">

                Contact

            </a>

            <a
                href="{{ route('about') }}"
                class="transition hover:text-[#4A7C2F]">

                About

            </a>

            <a
                href="{{ route('signup') }}"
                class="transition hover:text-[#4A7C2F]">

                Sign Up

            </a>

        </nav>

        {{-- Search + Icons --}}
        <div class="flex items-center gap-6">

            {{-- Search Box --}}
            <div
                class="hidden items-center rounded-lg bg-gray-100 px-4 py-2 lg:flex">

                <input
                    type="text"
                    placeholder="What are you looking for?"
                    class="w-56 bg-transparent text-sm outline-none">

                <button class="ml-3 text-lg">

                    🔍

                </button>

            </div>

            {{-- Wishlist --}}
            <a
                href="{{ route('wishlist') }}"
                class="relative text-2xl transition hover:scale-110">

                ♡

                <span
                    class="absolute -right-2 -top-2 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-xs text-white">

                    0

                </span>

            </a>

            {{-- Cart --}}
            <a
                href="{{ route('cart') }}"
                class="relative text-2xl transition hover:scale-110">

                🛒

                <span
                    class="absolute -right-2 -top-2 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-xs text-white">

                    2

                </span>

            </a>

            {{-- User --}}
            <a
                href="{{ route('profile') }}"
                class="text-2xl transition hover:text-[#4A7C2F]">

                👤

            </a>

        </div>

    </div>

</header>