

@extends('layouts.app')

@section('content')
<div class = "container mx-5 p-3">
    <h1> Product </h1><table class= "table">
        <thead>
            @if ($products->isEmpty())
            <p>No products found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Unit Price</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->unit_price }}</td>
                            {{-- <td>{{ $product->inventory->name }}</td> <!-- Assuming 'inventory' is the relationship name --> --}}
                            <td>
                                {{-- <a href="{{ route('product.show', $product->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a> --}}
                                <!-- Add more actions (e.g., delete) as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection



{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('inventory.create') }}" class="btn-link btn-lg mb-2">Add a Book</a>
            @forelse ($inventories as $inventory)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('inventory.show', $inventory) }}">{{$inventory->quantity}}</a>
                    </h2>
                    <p class="mt-2">
                        {{ $inventory->quantity }}
                        {{$inventory->description}}
                        @if ($inventory->inventory_image)
                        <img src="{{ $inventory->inventory_image }}"
                        alt="{{ $inventory->title }}" width="100">
                    @else
                        No Image
                    @endif
                    </p>

                </div>
            @empty
            <p>No books</p>
            @endforelse

        </div>
    </div>
</x-app-layout> --}}


