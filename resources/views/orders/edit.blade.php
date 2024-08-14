@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('orders.update', $order->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="container mx-5 p-3">
                        <h3 class="text">Edit an Order</h3>
                        <h2 style="color: rgb(74, 118, 45)">── .✦</h2>

                        <div class="form-row">
                            <!-- Quantity Field -->
                            <div class="col-md-4 mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $order->quantity) }}" required>
                                @error('quantity')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Total Cost Field -->
                            <div class="col-md-4 mb-3">
                                <label for="total_cost">Total Cost</label>
                                <input type="text" class="form-control @error('total_cost') is-invalid @enderror" id="total_cost" name="total_cost" value="{{ old('total_cost', $order->total_cost) }}" required>
                                @error('total_cost')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- Order Date Field -->
                            <div class="col-md-6 mb-3">
                                <label for="order_date">Order Date</label>
                                <input type="date" class="form-control @error('order_date') is-invalid @enderror" id="order_date" name="order_date" value="{{ old('order_date', $order->order_date) }}" required>
                                @error('order_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Delivery Date Field -->
                            <div class="col-md-6 mb-3">
                                <label for="delivery_date">Delivery Date</label>
                                <input type="date" class="form-control @error('delivery_date') is-invalid @enderror" id="delivery_date" name="delivery_date" value="{{ old('delivery_date', $order->delivery_date) }}" required>
                                @error('delivery_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirmation Checkbox -->
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input @error('confirm') is-invalid @enderror" type="checkbox" value="1" id="confirm" name="confirm" required>
                                <label class="form-check-label" for="confirm">
                                    Is this all correct?
                                </label>

                                @error('confirm')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
