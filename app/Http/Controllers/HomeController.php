<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use App\Models\Supplier;
use App\Models\Order;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inventories = Inventory::all();
        $suppliers = Supplier::all(); // Retrieve all suppliers
        $orders = Order::all(); // Retrieve all suppliers

        return view('welcome', [
            'inventories' => $inventories,
            'suppliers' => $suppliers, // Pass suppliers to the view
            'orders' => $orders, // Pass suppliers to the view
        ]);
    }
}
