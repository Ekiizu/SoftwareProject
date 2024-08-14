@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Suppliers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                      @method('PUT')
                    @csrf

                    <div class="container mx-5 p-3">
                        <h3 class="text">Edit a Suppliers Information</h3>
                        <h2 style="color: rgb(74, 118, 45)">── .✦</h2>

                        <!-- Name Field -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $supplier->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Contact Information Field -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="contact_info">Contact Info</label>
                                <input type="text" class="form-control @error('contact_info') is-invalid @enderror" id="contact_info" name="contact_info" value="{{ old('contact_info', $supplier->contact_info) }}" required>
                                @error('contact_info')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $supplier->address) }}" required>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Optional Additional Fields -->
                        {{-- Add more fields here if necessary --}}

                        <!-- Confirmation Checkbox -->
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input @error('confirm') is-invalid @enderror" type="checkbox" value="1" id="confirm" name="confirm" required>
                                <label class="form-check-label" for="confirm">
                                    Is this all correct?
                                </label>
                                @error('confirm')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
