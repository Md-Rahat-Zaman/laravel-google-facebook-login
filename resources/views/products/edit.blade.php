@extends('layouts.app_bootstrap');
@section('title','Edit Product')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-0 align-items-center">
        <h3>Edit Product</h3>
        <a href="{{route('products.index')}}" class="btn btn-secondary">back</a>
    </div>
    <div class="card shadow mt-4">
        <div class="card-header">
                <h5 class="mb-0">Edit Product</h5>
        </div>
        <div class="card-body">
                <form method="POST" action="{{ route('products.update',$product) }}" >
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Product Name</label>
                            <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            name="name" required 
                            value="{{ old('name', $product->name) }}"
                            >
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Purchase Price</label>
                            <input 
                            type="number" 
                            step="0.01"
                            min="0"
                            class="form-control @error('pprice') is-invalid @enderror" 
                            name="pprice" 
                            required 
                            value="{{ old('pprice',$product->pprice) }}"
                            >
                            @error('pprice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            
                            @enderror
                        </div>
                        
                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Sale Price</label>
                            <input 
                            type="number" 
                            step="0.01"
                            min="0"
                            class="form-control @error('sprice') is-invalid @enderror" 
                            name="sprice" 
                            value="{{  old('sprice',$product->sprice) }}"
                            >
                            @error('sprice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            
                            @enderror
                        </div>

                       

                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Category</label>
                            <input 
                            type="text" 
                            class="form-control @error('category') is-invalid @enderror" 
                            name="category" 
                            value="{{ old('category',$product->category) }}"
                            >
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                       
                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Note</label>
                            <textarea 
                            class="form-control @error('note') is-invalid @enderror" 
                            name="note" 
                            rows="3">{{  old('note',$product->note) }}</textarea>
                            @error('note')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                       
                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Description</label>
                            <textarea 
                            class="form-control @error('description') is-invalid @enderror"
                            name="description" 
                            rows="3">{{  old('description',$product->description) }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="col-lg-4 col-sm-6 col-12">
                            <label class="form-label">Opening Stock</label>
                            <input 
                            type="number"
                            class="form-control @error('opening_stock') is-invalid @enderror" 
                            name="opening_stock" 
                            min="0"
                            value="{{  old('opening_stock',$product->opening_stock) }}">
                            @error('opening_stock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center mt-2">
                             <button type="submit" class="btn btn-success ">Update Product</button>
                    </div>
                    
                    
                </form>
        </div>
    </div>

</div>
@endsection