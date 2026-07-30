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


<h1>
    SwiftMarket Products
</h1>


@foreach($products as $product)

<div class="product">


    @if($product->image)

        <img 
            src="{{ asset('storage/' . $product->image->image) }}" 
            alt="{{ $product->name }}"
            width="200"
        >

    @endif



    <h2>
        {{ $product->name }}
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