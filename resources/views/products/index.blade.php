<x-app-layout>

<title>SwiftMarket Products</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #111;
        color: white;
        padding: 40px;
    }

    .product {
        background: #222;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
    }

    .product img {
        border-radius: 10px;
        margin-top: 15px;
    }

    .product h2 a {
    color: #00ff88;
    text-decoration: none;
}

   .product h2 a:hover {
    color: white;
}

    h1 {
        color: #00ff88;
    }

    .price {
        color: #00ff88;
        font-weight: bold;
    }

    .category {
        color: #aaa;
    }

    button {
        background: #00ff88;
        color: #111;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    button:hover {
        background: #00cc66;
    }
</style>


<div class="mb-6">
   <h1 class="text-4xl font-bold tracking-tight">
    <span class="text-white">Swift</span><span class="text-green-400">Market</span>
</h1>

<p class="text-gray-400 mt-2">
    Premium gaming peripherals and accessories
</p>

</div>


<!-- CATEGORY FILTER -->

<div class="flex gap-3 mb-6">

    <a href="{{ route('products.index') }}"
       class="bg-zinc-800 text-white px-4 py-2 rounded-lg hover:bg-green-500 hover:text-black">
        All
    </a>


    @foreach($categories as $category)

        <a href="{{ route('products.index', ['category' => $category->id]) }}"
           class="bg-zinc-800 text-white px-4 py-2 rounded-lg hover:bg-green-500 hover:text-black">

            {{ $category->name }}

        </a>

    @endforeach

</div>



<!-- PRODUCTS -->
 
@foreach($products as $product)

<div class="product">


    @if($product->image)

    <a href="{{ route('products.show', $product) }}">

        <img 
            src="{{ asset('images/products/' . basename($product->image->image)) }}"
            alt="{{ $product->name }}"
            width="200"
        >
    </a>
    @endif



   <h2>
    <a href="{{ route('products.show', $product) }}">
        {{ $product->name }}
    </a>
</h2>



    <p class="category">
        Category: {{ $product->category->name }}
    </p>



    <p>
        {{ $product->description }}
    </p>



    <p class="price">
        ${{ $product->price }}
    </p>



    <p>
        Stock: {{ $product->stock }}
    </p>



    <form action="{{ route('cart.add', $product->id) }}" method="POST">

        @csrf

        <button type="submit">
            Add to Cart 🛒
        </button>

    </form>


</div>


@endforeach


</x-app-layout>