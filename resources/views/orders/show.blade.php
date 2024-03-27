@extends('layouts.app')

@section('content')
<div class="container mx-5 p-3">
    <h1>All Suppliers</h1>
    @if($supplier)
        <table class="table">
            <tbody>


                <tr>
                    <th>Quantity</th>
                    <td>{{$supplier->name}}</td>
                </tr>


            </tbody>
        </table>
    @else
        <p>Inventory not found.</p>
    @endif
</div>
@endsection
