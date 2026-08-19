@extends('layouts.app_bootstrap')

@section('title','Product List')

@section('content')

<div class="container-fluid product-list-page">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center product-list-header">

        <h3>Product List</h3>

        <a href="{{ route('products.create') }}"
           class="btn btn-primary product-add-btn">
            <i class="bi bi-plus-lg me-1"></i>
            Add Product
        </a>

    </div>


    {{-- Card --}}
    <div class="card product-list-card">

        <div class="product-list-card-header">
            <i class="bi bi-box-seam me-2"></i>
            All Products
        </div>


        {{-- Messages --}}
        @if (session('status'))
            <div class="alert alert-success product-list-alert">
                {{ session('status') }}
            </div>
        @endif


        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show product-list-alert"
                 role="alert">

                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>
        @endif


        {{-- Table --}}
        <div class="product-table-wrapper">

            <table class="table table-bordered product-table">

                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                        <th>Stock</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>

                    @foreach($product as $key => $value)

                        <tr>

                            <td>
                                {{ $key + 1 }}
                            </td>

                            <td>
                                <span class="product-category">
                                    {{ $value->category }}
                                </span>
                            </td>

                            <td>
                                <span class="product-name">
                                    {{ $value->name }}
                                </span>
                            </td>

                            <td>
                                <span class="product-price">
                                    {{ $value->pprice }}
                                </span>
                            </td>

                            <td>
                                <span class="product-price">
                                    {{ $value->sprice }}
                                </span>
                            </td>

                            <td>
                                <span class="product-stock">
                                    {{ $value->opening_stock }}
                                </span>
                            </td>

                            <td>
                                <span class="product-note">
                                    {{ $value->note }}
                                </span>
                            </td>


                            {{-- Action --}}
                            <td>

                                <div class="dropdown">

                                    <button
                                        class="btn btn-success btn-sm dropdown-toggle product-action-btn"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">

                                        Action

                                    </button>


                                    <ul class="dropdown-menu product-action-menu">

                                        <li>

                                            <a class="dropdown-item"
                                               href="{{ route('products.edit', $value->id) }}">

                                                <i class="bi bi-pencil me-2"></i>
                                                Edit

                                            </a>

                                        </li>


                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>


                                        <li>

                                            <form
                                                action="{{ route('products.destroy', $value->id) }}"
                                                method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="dropdown-item delete-item">

                                                    <i class="bi bi-trash me-2"></i>
                                                    Delete

                                                </button>

                                            </form>

                                        </li>

                                    </ul>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection