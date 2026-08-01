<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $search = request('search');

    $products = Product::with(['category', 'image'])
        ->when($search, function ($query) use ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            });
        })
        ->get();

    $categories = Category::all();

    return view('products.index', compact('products', 'categories'));
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

    $products = Product::with(['category', 'image'])
        ->where('name', 'like', '%' . $search . '%')
        ->orWhere('description', 'like', '%' . $search . '%')
        ->get();

    $categories = Category::all();

    return view('products.index', compact('products', 'categories'));
}

public function category(Category $category)
{
    $products = Product::where('category_id', $category->id)
        ->with(['category', 'image'])
        ->get();

    $categories = Category::all();

    return view('products.index', compact(
        'products',
        'categories',
        'category'
    ));
}
}
