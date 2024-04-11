<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventory.index', compact('inventories'));
    }

 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
       // Validation passed, create and store inventory record
       $inventory = new Inventory();
       $inventory->name = $request->input('name');
       $inventory->quantity = $request->input('quantity');
       $inventory->price = $request->input('price');
       $inventory->category = $request->input('category');
       $inventory->created_at = $request->input('created_at');
       $inventory->last_updated = $request->input('last_updated');
       $inventory->expiration_date = $request->input('expiration_date');

       // Handle file upload (image)
       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('images');
           $inventory->image_path = $imagePath;
       }

       $inventory->save();

       // Redirect to a success page or back to the form with a success message
       return redirect()->route('inventory.index')->with('success', 'Inventory item created successfully!');
    }


    // public function show(Inventory $inventory)
    // {
    //     return view('inventory.show')->with('inventory', $inventory);

    // }

    public function show($id)
    {

        $inventory = Inventory::find($id);
        return view('inventory.show', ['inventory' => $inventory]);

    }


// public function show()
// {
//     $inventory = Inventory::all(); // Example: fetching the first inventory item
//     return view('inventory.show', compact('inventory'));
// }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
