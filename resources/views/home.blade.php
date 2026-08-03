<x-app-layout>

<div class="bg-zinc-900 text-white">

    <!-- Hero Section -->
    <section class="py-20 text-center">

        <h1 class="text-5xl font-bold mb-6">
            Welcome to <span class="text-green-400">SwiftMarket</span>
        </h1>

        <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-8">
            Your ultimate destination for premium gaming equipment.
            Find gaming mouse, keyboards, headsets and more.
        </p>

        <a href="{{ route('products.index') }}"
           class="bg-green-500 hover:bg-green-600 text-black font-bold px-8 py-3 rounded-lg">
            Shop Now
        </a>

    </section>


    <!-- Features -->
    <section class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-6 pb-16">

        <div class="bg-zinc-800 p-6 rounded-xl text-center">
            <h3 class="text-xl font-bold text-green-400">
                Quality Products
            </h3>
            <p class="text-gray-400 mt-2">
                Carefully selected gaming gear.
            </p>
        </div>


        <div class="bg-zinc-800 p-6 rounded-xl text-center">
            <h3 class="text-xl font-bold text-green-400">
                Fast Delivery
            </h3>
            <p class="text-gray-400 mt-2">
                Quick and reliable shipping.
            </p>
        </div>


        <div class="bg-zinc-800 p-6 rounded-xl text-center">
            <h3 class="text-xl font-bold text-green-400">
                Secure Shopping
            </h3>
            <p class="text-gray-400 mt-2">
                Safe and simple experience.
            </p>
        </div>

    </section>


    <!-- Latest Products -->
    <section class="max-w-6xl mx-auto px-6 pb-20">

        <h2 class="text-3xl font-bold mb-8">
            Featured Products
        </h2>


        <div class="grid md:grid-cols-4 gap-6">

            @foreach($products as $product)

            <div class="bg-zinc-800 rounded-xl p-4">

                @if($product->image)
                    <img 
                    src="{{ asset('storage/' . $product->image->image) }}"
                    class="w-full h-48 object-cover rounded-lg">
                @endif


                <h3 class="font-bold mt-4">
                    {{ $product->name }}
                </h3>


                <p class="text-green-400 mt-2">
                    {{ $product->price }} €
                </p>


                <a href="{{ route('products.show', $product->id) }}"
                   class="text-sm text-gray-300 hover:text-green-400">
                    View Product →
                </a>

            </div>

            @endforeach

        </div>

    </section>


</div>

</x-app-layout>