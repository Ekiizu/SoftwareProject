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
                <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="container mx-5 p-3">
                        <h3 class="text">Edit Inventory! </h3>
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer01">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationServer01" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                              <div class="col-md-4 mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="validationServer02"  required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>

                            </div>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationServer03">Price</label>
                                <input type="text" class="form-control" id="validationServer03" required>
                                <div class="invalid-feedback">
                                  Please enter a price
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Category</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Dairy</option>
                                      <option>Meat</option>
                                      <option>Fruit</option>
                                      <option>Vegetable</option>
                                      <option>Bread</option>
                                    </select>
                                  </div>
                              </div>



                              <div class="col-md-3 mb-3">
                                <label for="validationServer05">Created At</label>
                                <input type="text" class="form-control" id="validationServer05"  required>
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationServer05">Last Updated</label>
                                <input type="text" class="form-control" id="validationServer05"  required>
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationServer05">Expiration Date</label>
                                <input type="text" class="form-control" id="validationServer05"  required>
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                            </div>


                            <div class="col-md-3 mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFile">
                                  <label class="custom-file-label" for="customFile">Please Submit an Image</label>
                                </div>
                                  </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input is-valid" type="checkbox" value="" id="invalidCheck3" required>
                                <label class="form-check-label" for="invalidCheck3">
                                  Is this all correct?
                                </label>
                                <div class="invalid-feedback">
                                  You must agree before submitting.
                                </div>
                              </div>

                            </form>

                        <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
