<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $products = Product::all();

    if(request('search')) {

        $products = Product::where('name', 'like', '%' . request('search') . '%')
            ->get();

    }

         return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('products.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'price' => 'required',
        'image' => 'image|nullable'
    ]);

    $imagePath = null;

    if($request->hasFile('image')){
        $imagePath = $request->file('image')->store('products', 'public');
    }

    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $imagePath
    ]);

    return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
   public function show(Product $product)
{
    return view('products.show', [
        'product' => $product->load(['image', 'category'])
    ]);
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
{
    $search = $request->search;

    $products = Product::where('name', 'like', '%' . $search . '%')
        ->orWhere('description', 'like', '%' . $search . '%')
        ->get();

    return view('products.index', compact('products'));
}
}
