@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('inventory.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="container mx-5 p-3">
        <h3 class="text">New Inventory! </h3>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control @error('category') is-invalid @enderror">
                        <option value="Dairy" {{ old('category') == 'Dairy' ? 'selected' : '' }}>Dairy</option>
                        <option value="Meat" {{ old('category') == 'Meat' ? 'selected' : '' }}>Meat</option>
                        <option value="Fruit" {{ old('category') == 'Fruit' ? 'selected' : '' }}>Fruit</option>
                        <option value="Vegetable" {{ old('category') == 'Vegetable' ? 'selected' : '' }}>Vegetable</option>
                        <option value="Bread" {{ old('category') == 'Bread' ? 'selected' : '' }}>Bread</option>
                    </select>
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="expiration_date">Expiration Date</label>
                <input type="date" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}" required>
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

        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>

@endsection


