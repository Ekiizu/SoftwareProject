

@extends('layouts.app')

@section('content')
<div class = "container mx-5 p-3">
    <h1> All Inventory </h1><table class= "table">
        <thead>
            <thead>
                <a href="{{ route('inventory.create') }}" class="btn btn-success mb-2">Add Inventory</a>


                <tr>
                    <th>ID</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Expiry Date</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($inventories as $inventory)
            <tr>
                <td>{{$inventory->product_id}}</td>
                <td>{{$inventory->quantity}}</td>
                <td>{{$inventory->created_at}}</td>
                <td>{{$inventory->updated_at}}</td>
                <td>{{$inventory->expiry_date}}</td>

            </tr>

     @endforeach
 </tbody>
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


