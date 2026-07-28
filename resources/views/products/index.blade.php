<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</style>

</head>

<body>

<h1>🎮 SwiftMarket Gaming Store</h1>

@foreach($products as $product)

<a href="{{ route('products.show', $product) }}" style="text-decoration:none; color:white;">

<div class="product">

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

</div>

@endforeach

</body>
</html>