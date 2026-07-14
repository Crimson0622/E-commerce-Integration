<footer class="bg-[#4A7C2F] text-white mt-20">

    <div class="max-w-7xl mx-auto px-8 py-14">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Brand -->
            <div>

                <h2 class="text-3xl font-bold mb-5">
                    AMBATUGROW
                </h2>

                <h3 class="font-semibold mb-2">
                    Subscribe
                </h3>

                <p class="text-sm text-gray-200 mb-5">
                    Get 10% off your first order.
                </p>

                <form class="flex">

                    <input
                        type="email"
                        placeholder="Enter your email"
                        class="w-full rounded-l-lg border border-white bg-transparent px-4 py-3 placeholder-gray-300 outline-none">

                    <button
                        class="rounded-r-lg border border-l-0 border-white px-5 hover:bg-white hover:text-[#4A7C2F] transition">

                        ➜

                    </button>

                </form>

            </div>

            <!-- Account -->
            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Account
                </h3>

                <ul class="space-y-3">

                    <li>
                        <a href="{{ route('profile') }}" class="hover:underline">
                            My Account
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('login') }}" class="hover:underline">
                            Login / Register
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('cart') }}" class="hover:underline">
                            Cart
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('wishlist') }}" class="hover:underline">
                            Wishlist
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('shop') }}" class="hover:underline">
                            Shop
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Quick Links -->
            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Quick Links
                </h3>

                <ul class="space-y-3">

                    <li>
                        <a href="#" class="hover:underline">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:underline">
                            Terms of Use
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:underline">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:underline">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact -->
            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Contact
                </h3>

                <div class="space-y-3 text-sm text-gray-200">

                    <p>
                        Ambatugrow Market
                    </p>

                    <p>
                        Manila, Philippines
                    </p>

                    <p>
                        support@ambatugrow.com
                    </p>

                    <p>
                        +63 912 345 6789
                    </p>

                </div>

                <div class="flex gap-4 mt-6 text-2xl">

                    <a href="#" class="hover:text-yellow-300 transition">
                        📘
                    </a>

                    <a href="#" class="hover:text-yellow-300 transition">
                        📷
                    </a>

                    <a href="#" class="hover:text-yellow-300 transition">
                        🐦
                    </a>

                    <a href="#" class="hover:text-yellow-300 transition">
                        ▶️
                    </a>

                </div>

            </div>

        </div>

        <!-- Bottom -->

        <div class="mt-12 border-t border-green-500 pt-6 text-center text-sm text-gray-300">

            © {{ date('Y') }} Ambatugrow. All Rights Reserved.

        </div>

    </div>

</footer>