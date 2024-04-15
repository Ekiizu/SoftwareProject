

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
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
            <tr>

                <td>{{$order->quantity}}</td>
                <td>{{$order->total_cost}}</td>
                <td>{{$order->order_date}}</td>
                <td>{{$order->delivery_date}}</td>

                <td>
                    <a href="{{ route('products.edit', $order->id) }}" class="btn btn-success">Edit</a>
                    </td>
                <td>
                    <form action="{{ route('products.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete-colour" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>

                </td>
            </tr>

     @endforeach
 </tbody>
</div>
@endsection


