<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'unit_price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'expiration_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'confirm' => 'accepted',
        ]);

        // Update the product
        $product->update([
            'name' => $validatedData['name'],
            'category' => $validatedData['category'],
        ]);

        // Update the inventory
        $inventory = $product->inventory; // Assuming relationship exists
        $inventory->update([
            'quantity' => $validatedData['quantity'],
            'unit_price' => $validatedData['unit_price'],
            // 'expiration_date' => $validatedData['expiration_date'],
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->update(['image' => $imagePath]);
        }

        return redirect()->route('inventory.index')->with('success', 'Product updated successfully');
    }




    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
}
