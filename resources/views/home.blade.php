<x-app-layout>

<div class="relative bg-zinc-900 text-white overflow-hidden">

    <!-- Global Background -->
    <div class="absolute inset-0 pointer-events-none">

        <!-- Top Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
                    w-[900px] h-[900px]
                    bg-green-500/20 blur-[180px] rounded-full">
        </div>

        <!-- Bottom Right Glow -->
        <div class="absolute bottom-0 right-0
                    w-[700px] h-[700px]
                    bg-emerald-400/10 blur-[180px] rounded-full">
        </div>

    </div>

    <!-- Page Content -->
    <div class="relative z-10">

        <!-- Hero Section -->
        <section class="py-24">

            <div class="max-w-7xl mx-auto px-6">

                <div class="grid lg:grid-cols-2 items-center gap-16">

                    <!-- LEFT -->

                    <div>

                        <span class="font-bold tracking-widest uppercase text-2xl">
                        <span class="text-white">Swift</span>
                        <span class="text-green-400">Market
                            
                        </span>
                        </span>

                        <h1 class="text-6xl font-extrabold mt-4 leading-tight">

                            Premium Gaming Gear

                            <span class="text-green-400">
                                Built for Performance.
                            </span>

                        </h1>

                        <p class="mt-6 text-gray-400 text-lg max-w-xl">

                            Discover premium gaming peripherals,
                            keyboards, mouse, headsets and accessories
                            from the world's leading brands.

                        </p>

                        <div class="mt-10 flex gap-4">

                            <a href="{{ route('products.index') }}"
                               class="bg-green-500 hover:bg-green-600
                                      text-black px-8 py-3 rounded-lg font-bold">

                                Shop Now

                            </a>

                            <a href="{{ route('products.index') }}"
                               class="border border-zinc-600
                                      hover:border-green-400
                                      px-8 py-3 rounded-lg">

                                Browse Products

                            </a>

                        </div>

                    </div>

                    <!-- RIGHT -->

                    <div class="flex justify-center">

                        <img
                            src="{{ asset('images/hero/gaming-setup.png') }}"
                            class="max-w-xl drop-shadow-[0_0_60px_rgba(34,197,94,.4)]">

                    </div>

                </div>

            </div>

        </section>


        <!-- Features -->
        <section class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-6 pb-16">

            <div class="bg-zinc-800/70 backdrop-blur-md border border-zinc-700 p-6 rounded-xl text-center">
                <h3 class="text-xl font-bold text-green-400">
                    Quality Products
                </h3>
                <p class="text-gray-400 mt-2">
                    Carefully selected gaming gear.
                </p>
            </div>

            <div class="bg-zinc-800/70 backdrop-blur-md border border-zinc-700 p-6 rounded-xl text-center">
                <h3 class="text-xl font-bold text-green-400">
                    Fast Delivery
                </h3>
                <p class="text-gray-400 mt-2">
                    Quick and reliable shipping.
                </p>
            </div>

            <div class="bg-zinc-800/70 backdrop-blur-md border border-zinc-700 p-6 rounded-xl text-center">
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

                <div class="bg-zinc-800/70 backdrop-blur-md border border-zinc-700 rounded-xl p-4 transition duration-300 hover:border-green-500 hover:-translate-y-1">

                    @if($product->image)

                    <img
                        src="{{ asset('images/products/' . basename($product->image->image)) }}"
                        alt="{{ $product->name }}"
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

</div>

</x-app-layout>