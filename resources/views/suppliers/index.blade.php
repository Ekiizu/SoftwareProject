

@extends('layouts.app')

@section('content')
<div class = "container mx-5 p-3">
    <h1> Suppliers </h1><table class= "table">
        <thead>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact Information</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
            @foreach ($suppliers as $supply)
            <tr>

                <td>{{$supply->name}}</td>
                <td>{{$supply->contact_info}}</td>
                <td>{{$supply->address}}</td>


                <td>
                    <a href="{{ route('products.edit', $supply->id) }}" class="btn btn-success">Edit</a>
                    </td>
                <td>
                    <form action="{{ route('products.destroy', $supply->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete-colour" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>


            </tr>

     @endforeach
 </tbody>
</div>
@endsection


