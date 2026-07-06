<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('products.product-list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required | string | max:255',
            'sprice' => 'required | numeric | min:0',
            'pprice' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'note' => 'nullable|string',
            'description' => 'nullable|string',
            'opening_stock' => 'required|numeric|min:0',
            'status' =>'nullable'
            
        ]);
        Product::create($request->all());
        return redirect('products')->with('success','Product Create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $product = Product::findOrFail($product->id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name' => 'required | string | max:255',
            'sprice' => 'required | numeric | min:0',
            'pprice' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'note' => 'nullable|string',
            'description' => 'nullable|string',
            'opening_stock' => 'required|numeric|min:0',
            'status' =>'nullable'
            
        ]);
        // $product->update($request->all()); // form theke ja asbe sob update korbe
        $product->name = $request->name;
        $product->sprice = $request->sprice;
        $product->pprice = $request->pprice;
        $product->category = $request->category;
        $product->note = $request->note;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with("success", "Product Update Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Product $product)
{
    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');
}
}
