<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
{
    $cart = session()->get('cart', []);

    return view('cart.index', compact('cart'));
}

    public function add($id)
{
    $product = Product::findOrFail($id);

    $cart = session()->get('cart', []);

    $cart[$id] = [
        "name" => $product->name,
        "price" => $product->price,
        "quantity" => 1,
        "image" => $product->image ? $product->image->image : null,
    ];

    session()->put('cart', $cart);


    return redirect()->back();
}

public function remove($id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {

        unset($cart[$id]);

        session()->put('cart', $cart);
    }

    return redirect()->route('cart.index');
}

public function increase($id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
    }

    session()->put('cart', $cart);

    return redirect()->back();
}

public function decrease($id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {

        if($cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        } else {
            unset($cart[$id]);
        }
    }

    session()->put('cart', $cart);

    return redirect()->back();
}
}
