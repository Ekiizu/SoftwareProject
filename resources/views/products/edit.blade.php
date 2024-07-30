@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="container mx-5 p-3">
                        <h3 class="text">Edit a Product</h3>
                        <h2 style="color: rgb(74, 118, 45)">── .✦</h2>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $product->inventory->quantity ?? '') }}" required>
                                @error('quantity')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="price">Unit Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="unit_price" value="{{ old('unit_price', $product->inventory->unit_price ?? '') }}" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="category">Category</label>
                                <select id="category" name="category" class="form-control @error('category') is-invalid @enderror">
                                    <option value="Dairy" {{ old('category', $product->category) == 'Dairy' ? 'selected' : '' }}>Dairy</option>
                                    <option value="Meat" {{ old('category', $product->category) == 'Meat' ? 'selected' : '' }}>Meat</option>
                                    <option value="Fruit" {{ old('category', $product->category) == 'Fruit' ? 'selected' : '' }}>Fruit</option>
                                    <option value="Vegetable" {{ old('category', $product->category) == 'Vegetable' ? 'selected' : '' }}>Vegetable</option>
                                    <option value="Bread" {{ old('category', $product->category) == 'Bread' ? 'selected' : '' }}>Bread</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="expiration_date">Expiration Date</label>
                                <input type="date" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date" name="expiration_date" value="{{ old('expiration_date', $product->inventory->expiration_date ?? '') }}" required>
                                @error('expiration_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-md-3 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Please Submit an Image</label>
                            </div>
                        </div> --}}

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

                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

