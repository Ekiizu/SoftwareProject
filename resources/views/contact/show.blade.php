@extends('layouts.app')

@section('content')
<div class="container mx-5 p-3">
    <h1>View Inventory</h1>
    @if($inventory)
        <table class="table">
            <tbody>

                <tr>
                    <th>ID</th>
                    <td>{{$inventory->id}}</td>
                </tr>


                <tr>
                    <th>Quantity</th>
                    <td>{{$inventory->quantity}}</td>
                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{{$inventory->created_at}}</td>
                </tr>

               
                <tr>
                    <th>Expiry Date</th>
                    <td>{{$inventory->expiry_date}}</td>
                </tr>

                <tr>
                    <th>Last Updated</th>
                    <td>{{$inventory->updated_at}}</td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-danger" type="submit">Delete</button>
    @else
        <p>Inventory not found.</p>
    @endif
</div>
@endsection
