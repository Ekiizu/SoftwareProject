<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
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
    public function store(StoreSupplierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $supplier = Supplier::find($id);
        return view('suppliers.show', ['supplier' => $supplier]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $supplier->update($validatedData);

        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Supplier $supplier)
    public function destroy($id)
    {
        // Find the supplier by id
        $supplier = Supplier::findOrFail($id);

        // Delete the supplier
        $supplier->delete();

        // Redirect or return a response
        return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully');
    }
}
