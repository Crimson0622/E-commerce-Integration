<section class="mb-16">

    <div class="overflow-hidden rounded-2xl bg-[#9ADE6A]">

        <div class="grid items-center lg:grid-cols-2">

            <!-- Left Content -->
            <div class="p-10 lg:p-16">

                @if(isset($subtitle))
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-green-900">
                        {{ $subtitle }}
                    </p>
                @endif

                <h1 class="mt-4 text-4xl font-extrabold leading-tight text-green-900 lg:text-6xl">

                    {{ $title }}

                </h1>

                @if(isset($description))
                    <p class="mt-6 max-w-md text-lg text-green-800">
                        {{ $description }}
                    </p>
                @endif

                <a
                    href="{{ $buttonLink }}"
                    class="mt-8 inline-flex items-center rounded-lg bg-white px-8 py-3 font-semibold text-[#4A7C2F] shadow transition hover:bg-gray-100">

                    {{ $buttonText }}

                    <span class="ml-2">
                        →
                    </span>

                </a>

            </div>

            <!-- Right Image -->
            <div class="flex justify-center p-8 lg:p-12">

                <img
                    src="{{ asset($image) }}"
                    alt="{{ $title }}"
                    class="max-h-[420px] w-full object-contain">

            </div>

        </div>

    </div>

</section>