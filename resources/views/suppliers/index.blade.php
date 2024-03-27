

@extends('layouts.app')

@section('content')
<div class = "container">
    <h1> Suppliers </h1><table class= "table">
        <thead>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact Information</th>
                    <th>Address</th>


                </tr>
            </thead>
            <tbody>
            @foreach ($suppliers as $supply)
            <tr>

                <td>{{$supply->name}}</td>
                <td>{{$supply->contact_info}}</td>
                <td>{{$supply->address}}</td>


            </tr>

     @endforeach
 </tbody>
</div>
@endsection


