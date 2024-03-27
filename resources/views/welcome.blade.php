@extends('layouts.app')

@section('content')

<!-- Side navigation -->
<div class="sidenav">
    <a href="{{ route('inventory.index') }}">Inventory</a>
    <a href="{{ route('suppliers.index') }}">Suppliers</a>
    <a href="{{ route('orders.index') }}">Orders</a>
    <a href="#">Contact</a>
</div>


    <div class="container mx-5 p-3">
        <div class="row justify-content-center">
            <div>



  <!-- Page content -->


                <div class="main">
                    <h3>Dashboard</h3>


                    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                        @foreach ($inventories as $inventory)
                        <div class="col">
                            <a href="{{ route('inventory.show', ['inventory' => $inventory->id]) }}" class="text-decoration-none">
                                <div class="card border-info">
                                    <div class="card-header bg-success text-white">
                                        Recent Inventory
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>ID:</strong> {{$inventory->product_id}} <br>
                                            <strong>Quantity:</strong> {{$inventory->quantity}} <br>
                                            <strong>Created At:</strong> {{$inventory->created_at->format('Y-m-d H:i:s')}} <br>
                                            <strong>Updated At:</strong> {{$inventory->updated_at->format('Y-m-d H:i:s')}} <br>
                                            <strong>Expiry Date:</strong> {{$inventory->expiry_date}}
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
