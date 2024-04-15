
@extends('layouts.app')

@section('content')
<div class="container mx-5 p-3">
    <h1>Products</h1>

    @if ($products->isEmpty())
        <p>No products found.</p>
    @else
        <table class="table">




            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Unit Price</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        
                        <td>{{ $product->unit_price }}</td>
                        <td>Dairy</td>

                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                            </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-colour" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>

                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('inventory.create') }}" class="btn custom-colour mb-2 ">Add Inventory</a>
    @endif
</div>
@endsection


