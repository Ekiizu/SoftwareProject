<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Inventory;

class ProductController extends Controller
{


    public function productsByInventory($inventory_id)
    {
        $inventory = Inventory::findOrFail($inventory_id);
        $products = $inventory->products; // Assuming 'products' is the relationship defined in Inventory model

        return view('products.index', compact('products', 'inventory'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
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
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'id' => 'required|string|max:255',
            'name' => 'required|integer',
            'unit_price' => 'required|numeric',

        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }




    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
}
