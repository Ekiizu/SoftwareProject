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
        $request->validate([

        'inventory_name' => 'required'

        ]);


        Inventory::create([
            'quantity' => "Test Quantity",
            'created_at' => now(),
            'expiry_date' => "soon",
            'updated_at' => now(),
        ]);

        return to_route('inventory.index');

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
