@extends('layouts.app')




@section('content')

<!-- Side navigation -->
<div class="sidenav">
    <a href="{{ route('inventory.index') }}">Inventory</a>
    <a href="{{ route('suppliers.index') }}">Suppliers</a>
    <a href="{{ route('orders.index') }}">Orders</a>
    <a href="{{ route('contact.index') }}">Contact</a>
</div>

<div class="container mx-6 p-4">
    <div class="row justify-content-right">

        <!-- Page content -->
        <div class="main">


            <div class="container">
                <h4 style="color: rgb(33, 185, 223);">Welcome back!</h4>
                <h2 style="color: rgb(33, 185, 223)">── .✦</h2>

                <h5>Dashboard</h5>
                <div class="row g-2 mt-2">
                    <!-- Inventory Summary Card -->
                    <div class="col-md-4">
                        @php
                            // Sort inventories by expiry_date ascending
                            $sortedInventories = $inventories->sortBy('expiry_date');

                            // Calculate the number of items low in stock (e.g., quantity less than a threshold)
                            $lowStockCount = $sortedInventories->where('quantity', '<', 10)->count();

                            // Calculate the number of items near expiry (e.g., expiry_date within the next 7 days)
                            $nearExpiryCount = $sortedInventories->where('expiry_date', '>=', now()->toDateString())
                                                                 ->where('expiry_date', '<=', now()->addDays(7)->toDateString())
                                                                 ->count();
                        @endphp

                        <div class="card border-success mb-2"style="height: 166px;">
                            <div class="card-header bg-success text-white">
                                Inventory Summary
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <strong>Total Items:</strong> {{ $sortedInventories->count() }} <br>
                                    <strong>Items Low in Stock:</strong> {{ $lowStockCount }} <br>
                                    <strong>Items Near Expiry:</strong> {{ $nearExpiryCount }} <br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Supplier Cards -->
                    <div class="col-md-6"> {{-- Adjusted the column width to 6 for larger screens --}}
                        @php
                            // filter and get the next upcoming delivery based on delivery_date
                            $nextDelivery = $orders->sortBy('delivery_date')->first();
                        @endphp

                        @if ($nextDelivery)
                            <div class="card border-success mb-4">
                                <div class="card-header bg-success text-white">
                                    Next Upcoming Delivery
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <strong>Quantity:</strong> {{ $nextDelivery->quantity }}<br>
                                        <strong>Cost:</strong> {{ $nextDelivery->total_cost }}<br>
                                        <strong>Order Date:</strong> {{ $nextDelivery->order_date }}<br>
                                        <strong>Delivery Date:</strong> {{ $nextDelivery->delivery_date }}<br>
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="card border-danger mb-3">
                                <div class="card-header bg-danger text-white">
                                    No Upcoming Deliveries
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        There are no upcoming deliveries.
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>





              <!-- Page content 2 -->
              <div class="container">
                <h5>Products Expiry Date </h5>

                <div class="row g-2 mt-2">
                    <!-- Inventory Cards -->
                    <div class="col-md-10">
                        @php
                            // Sort inventories by quantity (ascending) and then by expiry_date (ascending)
                            $sortedInventories = $inventories->sortBy(function ($inventory) {
                                return [$inventory->quantity, $inventory->expiry_date];
                            });

                            // Take the first 3 inventory items (lowest quantity and earliest expiry date)
                            $limitedInventories = $sortedInventories->take(3);
                        @endphp

                        @foreach ($limitedInventories as $inventory)
                            <div class="card border-sucess mb-2">
                                {{-- <a href="{{ route('inventory.show', ['inventory' => $inventory->id]) }}" class="text-decoration-none"> --}}
                                <div class="card-header bg-success text-white">
                                    Recent Inventory
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <strong>ID:</strong> {{$inventory->id}} <br>
                                        <strong><span style="color: rgb(33, 185, 223);">Quantity:</span></strong> {{$inventory->quantity}} <br>
                                        <strong>Created At:</strong> {{$inventory->created_at->format('Y-m-d H:i:s')}} <br>
                                        <strong>Updated At:</strong> {{$inventory->updated_at->format('Y-m-d H:i:s')}} <br>
                                        <strong><span style="color: rgb(33, 185, 223);">Expiry Date:</span></strong> {{$inventory->expiry_date}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


@endsection
