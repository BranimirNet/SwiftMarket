<x-app-layout>

<div class="py-12 bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white shadow-lg rounded-xl overflow-hidden">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">


                <!-- Product Image -->
                <div class="flex items-center justify-center bg-gray-200 rounded-xl h-96">

                    @if($product->image)

                       <img
src="{{ asset('storage/' . $product->image->image) }}"
alt="{{ $product->name }}"
class="h-full object-contain">

                    @else

                        <div class="text-gray-500 text-6xl">
                            🎮
                        </div>

                    @endif

                </div>



                <!-- Product Information -->
                <div>


                    <h1 class="text-4xl font-bold text-gray-900">
                        {{ $product->name }}
                    </h1>


                    <p class="mt-4 text-gray-600 text-lg">
                        {{ $product->description }}
                    </p>



                    <div class="mt-6">

                        <span class="text-sm text-gray-500">
                            Category
                        </span>

                        <p class="font-semibold">
                            {{ $product->category->name }}
                        </p>

                    </div>



                    <div class="mt-6">

                        <span class="text-sm text-gray-500">
                            Price
                        </span>

                        <p class="text-3xl font-bold text-green-600">
                            ${{ $product->price }}
                        </p>

                    </div>



                    <div class="mt-6">

                        @if($product->stock > 0)

                            <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-full">
                                In Stock ({{ $product->stock }})
                            </span>

                        @else

                            <span class="inline-block bg-red-100 text-red-700 px-4 py-2 rounded-full">
                                Out of Stock
                            </span>

                        @endif

                    </div>



                    <form action="{{ route('cart.add', $product->id) }}" method="POST">

    @csrf

    <button 
        class="mt-8 bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition">

        🛒 Add to Cart

    </button>

</form>



                </div>


            </div>


        </div>


    </div>

</div>


</x-app-layout>