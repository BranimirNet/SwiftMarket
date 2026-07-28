<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h1 class="text-3xl font-bold">
                        {{ $product->name }}
                    </h1>

                    <p class="mt-4">
                        {{ $product->description }}
                    </p>

                    <p class="mt-4 font-bold">
                        Price: ${{ $product->price }}
                    </p>

                    <p>
                        Stock: {{ $product->stock }}
                    </p>

                    <a href="{{ route('products.index') }}">
                        ← Back to products
                    </a>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>