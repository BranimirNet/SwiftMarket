<style>

body {
    background:#111;
    color:white;
    font-family:Arial;
}

.cart-container {
    max-width:1000px;
    margin:auto;
}

.cart-item {
    display:flex;
    align-items:center;
    background:#1c1c1c;
    padding:20px;
    margin-bottom:15px;
    border-radius:12px;
    border:1px solid #333;
}

.cart-item img {
    width:100px;
    height:100px;
    object-fit:cover;
    border-radius:10px;
    margin-right:30px;
}

.product-name {
    flex:1;
    font-size:20px;
}

.price {
    color:#00ff88;
    font-weight:bold;
    width:150px;
}

.quantity {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 10px;
}

.remove {
    color:#ff4444;
    font-size:25px;
}

.total {
    margin-top:30px;
    text-align:right;
    font-size:25px;
    color:#00ff88;
}

.quantity button {
    background: #00ff88;
    color: #111;
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}

.quantity span {
    font-size: 18px;
    font-weight: bold;
}

.back-button {
    display: inline-block;
    margin-top: 20px;
    background: #00ff88;
    color: #111;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
}

.back-button:hover {
    background: #00cc66;
}
.remove {
    background: transparent;
    color: #797777;
    border: 2px solid #686868;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.remove:hover {
    background: #ff4444;
    color: white;
    transform: scale(1.1);
}

</style>


<div class="cart-container">

<h1>🛒 SwiftMarket Cart</h1>


@if(count($cart) > 0)

@php
    $total = 0;
@endphp


<div class="cart-container">

@foreach($cart as $id => $product)

@php
    $subtotal = $product['price'] * $product['quantity'];
    $total += $subtotal;
@endphp


<div class="cart-item">

    @if($product['image'])
        <img src="{{ asset('storage/' . $product['image']) }}" 
             width="120" 
             alt="{{ $product['name'] }}">
    @endif


    <div class="product-info">

        <h3>
            {{ $product['name'] }}
        </h3>


        <p>
            Price: ${{ $product['price'] }}
        </p>


        <p>
            Subtotal: ${{ $subtotal }}
        </p>


        <div class="quantity">

    <form action="{{ route('cart.decrease', $id) }}" method="POST">
        @csrf
        <button type="submit">−</button>
    </form>


    <span>
        {{ $product['quantity'] }}
    </span>


    <form action="{{ route('cart.increase', $id) }}" method="POST">
        @csrf
        <button type="submit">+</button>
    </form>

</div>


    </div>



    <div class="remove-product">

        <form action="{{ route('cart.remove', $id) }}" method="POST">

            @csrf
            @method('DELETE')


            <button class="remove" type="submit">
                ✕
            </button>


        </form>


    </div>


</div>


@endforeach


<h2>
    Total: ${{ $total }}
</h2>

<a href="{{ route('products.index') }}" class="back-button">
    ← Continue Shopping
</a>


</div>


@else

<h2>
    Your cart is empty
</h2>

@endif