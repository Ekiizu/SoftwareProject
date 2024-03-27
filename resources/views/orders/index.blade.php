

@extends('layouts.app')

@section('content')
<div class = "container mx-5 p-3">
    <h1> Orders </h1><table class= "table">
        <thead>
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Total Cost</th>
                    <th>Order Date</th>
                    <th>Delivery Date</th>


                </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
            <tr>

                <td>{{$order->quantity}}</td>
                <td>{{$order->total_cost}}</td>
                <td>{{$order->order_date}}</td>
                <td>{{$order->delivery_date}}</td>


            </tr>

     @endforeach
 </tbody>
</div>
@endsection


