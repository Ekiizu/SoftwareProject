


@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center text-white">
                    <h3>Contact Us</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter you email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn custom-colour">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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


