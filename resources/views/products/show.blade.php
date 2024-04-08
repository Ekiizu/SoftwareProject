@extends('layouts.app')

@section('content')
<div class="container mx-5 p-3">
    <h1>View Inventory</h1>
    @if($product)
        <table class="table">
            <tbody>

                <tr>
                    <th>ID</th>
                    <td>{{$product->product_id}}</td>
                </tr>


                <tr>
                    <th>Quantity</th>
                    <td>{{$product->quantity}}</td>
                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{{$product->created_at}}</td>
                </tr>

                <!-- Assuming you mistakenly repeated the quantity row, I've replaced it with 'Updated At' -->
                <tr>
                    <th>Expiry Date</th>
                    <td>{{$product->expiry_date}}</td>
                </tr>

                <tr>
                    <th>Last Updated</th>
                    <td>{{$product->updated_at}}</td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-danger" type="submit">Delete</button>
    @else
        <p>Inventory not found.</p>
    @endif
</div>
@endsection
