<a
    href="{{ route('category.show', $category->id) }}"
    class="group flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition duration-300 hover:border-[#4A7C2F] hover:shadow-lg">

    <div class="mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-gray-100">

        @if($category->icon)

            <img
                src="{{ asset('storage/' . $category->icon) }}"
                alt="{{ $category->name }}"
                class="h-12 w-12 object-contain">

        @else

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-10 w-10 text-gray-400"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 7h18M5 7l2 12h10l2-12M10 11v6M14 11v6"/>

            </svg>

        @endif

    </div>

    <h3
        class="text-center text-lg font-semibold text-gray-800 transition group-hover:text-[#4A7C2F]">

        {{ $category->name }}

    </h3>

</a>