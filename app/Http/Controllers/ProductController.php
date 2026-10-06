<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::with(['category', 'brand', 'unit'])
            ->latest()
            ->paginate(15);

        return view('products.product-list', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::where('status', 1)
            ->orderBy('name')
            ->get();

        // আপাতত empty
        $brands = [];
        $units = [];

        // Colors
        $colors = Color::where('status', 1)
            ->orderBy('name')
            ->get();

        // Sizes
        $sizes = Size::where('status', 1)
            ->orderBy('name')
            ->get();

        return view('products.create', compact(
            'categories',
            'brands',
            'units',
            'colors',
            'sizes'
        ));
    }

    /**
     * Store a newly created product.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:150',
            'sku'            => 'required|string|max:100|unique:products,sku',
            'barcode'        => 'nullable|string|max:100|unique:products,barcode',

            'category_id'    => 'required|exists:categories,id',
            'brand_id'       => 'nullable|exists:brands,id',
            'unit_id'        => 'required|exists:units,id',

            'purchase_price' => 'required|numeric|min:0',
            'sale_price'     => 'required|numeric|min:0',
            'tax_rate'       => 'nullable|numeric|min:0|max:999.99',

            'opening_stock'  => 'required|numeric|min:0',
            'minimum_stock'  => 'nullable|numeric|min:0',

            'status'         => 'required|boolean',

            'note'           => 'nullable|string',
            'description'    => 'nullable|string',
        ]);

        $validated['stock'] = $validated['opening_stock'];

        Product::create($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        $product->load(['category', 'brand', 'unit']);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the product.
     */
    public function edit(Product $product)
    {
        $categories = Category::where('status', 1)
            ->orderBy('name')
            ->get();

        $brands = Brand::where('status', 1)
            ->orderBy('name')
            ->get();

        $units = Unit::where('status', 1)
            ->orderBy('name')
            ->get();

        return view('products.edit', compact(
            'product',
            'categories',
            'brands',
            'units'
        ));
    }

    /**
     * Update the specified product.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:150',

            'sku'            => 'required|string|max:100|unique:products,sku,' . $product->id,

            'barcode'        => 'nullable|string|max:100|unique:products,barcode,' . $product->id,

            'category_id'    => 'required|exists:categories,id',
            'brand_id'       => 'nullable|exists:brands,id',
            'unit_id'        => 'required|exists:units,id',

            'purchase_price' => 'required|numeric|min:0',
            'sale_price'     => 'required|numeric|min:0',
            'tax_rate'       => 'nullable|numeric|min:0|max:999.99',

            'opening_stock'  => 'required|numeric|min:0',
            'minimum_stock'  => 'nullable|numeric|min:0',

            'status'         => 'required|boolean',

            'note'           => 'nullable|string',
            'description'    => 'nullable|string',
        ]);

        /*
         * Current stock is NOT changed during normal product edit.
         * Stock should be changed through inventory transactions.
         */
        unset($validated['opening_stock']);

        $product->update($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}