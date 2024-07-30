<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'expiration_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'confirm' => 'accepted',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Create new inventory record
        Inventory::create($validatedData);

        return redirect()->route('inventory.index')->with('success', 'Inventory added successfully');
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
