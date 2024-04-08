@extends('layouts.app')




@section('content')

<!-- Side navigation -->
<div class="sidenav">
    <a href="{{ route('inventory.index') }}">Inventory</a>
    <a href="{{ route('suppliers.index') }}">Suppliers</a>
    <a href="{{ route('orders.index') }}">Orders</a>
    <a href="#">Contact</a>
</div>

<div class="container mx-6 p-4">
    <div class="row justify-content-right">

        <!-- Page content -->
        <div class="main">
            <h3>Dashboard</h3>

            <div class="row g-2 mt-2">
            <!-- Inventory Cards -->
                <div class="col-md-6">
                    @foreach ($inventories as $inventory)
                        <a href="{{ route('inventory.show', ['inventory' => $inventory->id]) }}" class="text-decoration-none">
                            <div class="card border-info mb-3">
                                <div class="card-header bg-success text-white">
                                    Recent Inventory
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <strong>ID:</strong> {{$inventory->id}} <br>
                                        <strong>Quantity:</strong> {{$inventory->quantity}} <br>
                                        <strong>Created At:</strong> {{$inventory->created_at->format('Y-m-d H:i:s')}} <br>
                                        <strong>Updated At:</strong> {{$inventory->updated_at->format('Y-m-d H:i:s')}} <br>
                                        <strong>Expiry Date:</strong> {{$inventory->expiry_date}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <!-- Supplier Cards -->
                <div class="col-md-4">
                    @foreach ($orders as $order)
                    <div class="card border-info mb-3">
                        <div class="card-header bg-success text-white">
                            Upcoming Deliveries
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Quantity:</strong> {{$order->quantity}}<br>
                                <strong>Cost:</strong><td> {{$order->total_cost}}<br>
                                <strong>Order Date:</strong><td> {{$order->order_date}}<br>
                                <strong>Delivery Date:</strong><td> {{$order->delivery_date}}<br>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>




              <!-- Page content 2 -->
              <div class="main">
                <h3>Products Expiry Date </h3>

                <div class="row g-2 mt-2">

                    <!-- Inventory Cards -->
                    <div class="col-md-10">
                        @foreach ($inventories as $inventory)
                        <div class="card border-info mb-2">
                            {{-- <a href="{{ route('inventory.show', ['inventory' => $inventory->id]) }}" class="text-decoration-none"> --}}
                            <div class="card-header bg-success text-white">
                                Recent Inventory
                            </div>

                            <div class="card-body">


                                <p class="card-text">

                                    <strong>ID:</strong> {{$inventory->id}} <br>
                                    <strong>Quantity:</strong> {{$inventory->quantity}} <br>
                                    <strong>Created At:</strong> {{$inventory->created_at->format('Y-m-d H:i:s')}} <br>
                                    <strong>Updated At:</strong> {{$inventory->updated_at->format('Y-m-d H:i:s')}} <br>
                                    <strong>Expiry Date:</strong> {{$inventory->expiry_date}}
                                </p>
                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>

            </div>

    </div>
</div>

@endsection
