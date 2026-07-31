<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            About SwiftMarket
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg p-8">

                <h1 class="text-4xl font-bold text-green-400 mb-6">
                    About SwiftMarket
                </h1>


                <p class="text-gray-300 text-lg leading-relaxed mb-6">

                    SwiftMarket was built as a learning project with one goal:
                    to create a clean, fast and user-friendly online store
                    while following best coding practices.

                </p>


                <p class="text-gray-300 text-lg leading-relaxed">

                    The project continues to evolve with new features and improvements.

                </p>

                <a href="{{ route('products.index') }}"
               class="inline-block mt-8 px-6 py-3 bg-green-500 text-black font-bold rounded-lg hover:bg-green-400 transition">

                ← Back to Products

                </a>


            </div>

        </div>
        

    </div>

</x-app-layout>