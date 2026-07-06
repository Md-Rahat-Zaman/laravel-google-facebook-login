@extends('layouts.app_bootstrap');
@section('title','Create Product')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-0 align-items-center">
        <h3>Create Product</h3>
        <a href="{{route('products.index')}}" class="btn btn-success">back</a>
    </div>
    <div class="card shadow mt-4">
        <div class="card-header">
                <h3>Create product</h3>
        </div>
        <div class="card-body">
                <form method="POST" action="{{ route('products.store') }}" >
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-4 col-sm-4 col-4">
                            <x-form.label required>Product Name</x-form.label>
                            <input class="form-control" name="name" placeholder="Product Name" value="{{ old('name') }}">
                        </div>
                        
                        <div class="col-md-4 col-sm-4 col-4">
                            <label class="g-1">Purchase Price</label>
                            <input class="form-control" name="pprice" placeholder="Purchase Price" value="{{ old('pprice') }}">
                        </div>

                        <div class="col-md-4 col-sm-4 col-4">
                            <label class="g-1">Sale Price</label>
                            <input class="form-control" name="sprice" placeholder="Sale Price" value="{{ old('sprice') }}">
                        </div>

                        

                        <div class="col-md-4 col-sm-4 col-4">
                            <label class="g-1">Category</label>
                            <input class="form-control" name="category" placeholder="Category" value="{{ old('category') }}">
                        </div>

                        <div class="col-md-4 col-sm-4 col-4">
                            <label class="g-1">Note</label>
                            <input class="form-control" name="note" placeholder="Note" value="{{ old('note') }}">
                        </div>

                        <div class="col-md-4 col-sm-4 col-4">
                            <label class="g-1">Description</label>
                            <input class="form-control" name="description" placeholder="Description" value="{{ old('description') }}">
                        </div>

                        <div class="col-md-4 col-sm-4 col-4">
                            <label class="g-1">Opening Stock</label>
                            <input class="form-control" name="opening_stock" placeholder="Opening Stock" value="{{ old('opening_stock') }}">
                        </div>
                        
                    </div>
                    <div class="text-center mt-2">
                             <button type="submit" class="btn btn-success ">Submit</button>
                    </div>
                    
                    
                </form>
        </div>
    </div>

</div>
@endsection