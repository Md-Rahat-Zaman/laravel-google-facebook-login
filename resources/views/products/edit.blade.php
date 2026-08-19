@extends('layouts.app_bootstrap')

@section('title', 'Edit Product')

@section('content')

<div class="container-fluid form-create-page">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center form-page-header">

        <div>
            <h3>Edit Product</h3>
            <p>Update Product</p>
        </div>

        <a href="{{ route('products.index') }}"
           class="btn btn-outline-secondary form-back-btn">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>

    </div>


    {{-- Form Card --}}
    <div class="card form-card">

        {{-- Card Header --}}
        <div class="form-header">

            <h5>
                <i class="bi bi-pencil-square me-2"></i>
                Edit Product
            </h5>

            <p>
                Update the product details below
            </p>

        </div>


        {{-- Form Body --}}
        <div class="form-body">

            <form method="POST"
                  action="{{ route('products.update', $product) }}">

                @csrf
                @method('PUT')

                <div class="row g-4">

                    {{-- Product Name --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>
                                Product Name <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name', $product->name) }}"
                                required
                            >

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>


                    {{-- Purchase Price --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>
                                Purchase Price <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                min="0"
                                class="form-control @error('pprice') is-invalid @enderror"
                                name="pprice"
                                value="{{ old('pprice', $product->pprice) }}"
                                required
                            >

                            @error('pprice')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>


                    {{-- Sale Price --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>
                                Sale Price <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                min="0"
                                class="form-control @error('sprice') is-invalid @enderror"
                                name="sprice"
                                value="{{ old('sprice', $product->sprice) }}"
                            >

                            @error('sprice')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>


                    {{-- Category --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>Category</label>

                            <input
                                type="text"
                                class="form-control @error('category') is-invalid @enderror"
                                name="category"
                                value="{{ old('category', $product->category) }}"
                            >

                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>


                    {{-- Note --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>Note</label>

                            <textarea
                                class="form-control @error('note') is-invalid @enderror"
                                name="note"
                                rows="3"
                            >{{ old('note', $product->note) }}</textarea>

                            @error('note')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>


                    {{-- Description --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>Description</label>

                            <textarea
                                class="form-control @error('description') is-invalid @enderror"
                                name="description"
                                rows="3"
                            >{{ old('description', $product->description) }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>


                    {{-- Opening Stock --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-field">

                            <label>Opening Stock</label>

                            <input
                                type="number"
                                min="0"
                                step="0.01"
                                class="form-control @error('opening_stock') is-invalid @enderror"
                                name="opening_stock"
                                value="{{ old('opening_stock', $product->opening_stock) }}"
                            >

                            @error('opening_stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                </div>


                @include('components.form.submit-buttons', [
                    'backUrl' => route('products.index'),
                    'buttonText' => 'Update Product'
                ])

            </form>

        </div>

    </div>

</div>

@endsection