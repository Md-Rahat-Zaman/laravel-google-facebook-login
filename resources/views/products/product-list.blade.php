@extends('layouts.app_bootstrap')

@section('title', 'Products')

@section('content')

<div class="module-page">

    <div class="container">

        {{-- =====================================================
             Page Header
        ====================================================== --}}
        <div class="module-header">

            <div class="module-header-row">

                <div>

                    <h3 class="module-title">
                        Products
                    </h3>

                    <p class="module-subtitle">
                        Manage your products
                    </p>

                </div>


                <div class="module-header-actions">

                    <a href="{{ route('products.create') }}"
                       class="btn btn-primary module-btn">

                        <i class="bi bi-plus-lg"></i>

                        Add Product

                    </a>

                </div>

            </div>

        </div>


        {{-- =====================================================
             Summary
        ====================================================== --}}
        <div class="module-summary">

            <div class="module-summary-box">

                <div class="module-summary-icon">

                    <i class="bi bi-box-seam"></i>

                </div>


                <div>

                    <span class="module-summary-label">
                        Total Products
                    </span>

                    <span class="module-summary-value">
                        {{ $products->total() }}
                    </span>

                </div>

            </div>

        </div>


        {{-- =====================================================
             Main Card
        ====================================================== --}}
        <div class="module-card">


            {{-- =================================================
                 Card Header
            ================================================== --}}
            <div class="module-card-header">

                <h5 class="module-card-title">
                    Product List
                </h5>

                <span class="module-card-count">
                    {{ $products->total() }} Products
                </span>

            </div>


            {{-- =================================================
                 Basic Toolbar
            ================================================== --}}
            <div class="module-toolbar">


                {{-- Search --}}
                <div class="module-search">

                    <i class="bi bi-search module-search-icon"></i>

                    <input
                        type="text"
                        class="module-search-input"
                        placeholder="Search products..."
                    >

                </div>


                {{-- Basic Filters --}}
                <div class="module-filters">


                    {{-- Status --}}
                    <select class="module-filter">

                        <option value="">
                            All Status
                        </option>

                        <option value="1">
                            Active
                        </option>

                        <option value="0">
                            Inactive
                        </option>

                    </select>


                    {{-- Sort --}}
                    <select class="module-filter">

                        <option value="">
                            Sort By
                        </option>

                        <option value="latest">
                            Latest
                        </option>

                        <option value="oldest">
                            Oldest
                        </option>

                        <option value="name">
                            Name
                        </option>

                    </select>


                    {{-- Reset --}}
                    <button
                        type="button"
                        class="module-reset-btn"
                    >

                        <i class="bi bi-arrow-clockwise"></i>

                        Reset

                    </button>

                </div>

            </div>


            {{-- =================================================
                 Advanced Filter
            ================================================== --}}
            <div class="advanced-filter">


                {{-- =================================================
                     Advanced Filter Header
                ================================================== --}}
                <div class="advanced-filter-header">


                    <div class="advanced-filter-heading">

                        <div class="advanced-filter-icon">

                            <i class="bi bi-funnel"></i>

                        </div>


                        <div>

                            <h6 class="advanced-filter-title">
                                Advanced Filter
                            </h6>

                            <p class="advanced-filter-subtitle">
                                Filter products using multiple conditions
                            </p>

                        </div>

                    </div>


                    {{-- Toggle --}}
                    <button
                        type="button"
                        class="advanced-filter-toggle"
                    >

                        <i class="bi bi-sliders"></i>

                        <span>
                            Advanced Filter
                        </span>

                        <i class="bi bi-chevron-down advanced-filter-chevron"></i>

                    </button>

                </div>


                {{-- =================================================
                     Advanced Filter Body
                ================================================== --}}
                <div class="advanced-filter-body">


                    {{-- =================================================
                         Filter Rows Container
                    ================================================== --}}
                    <div class="advanced-filter-rows">


                        {{-- =================================================
                             Filter Row
                        ================================================== --}}
                        <div class="advanced-filter-row">


                            {{-- Column --}}
                            <div class="filter-field">

                                <label>
                                    Column
                                </label>

                                <select
                                    class="advanced-filter-control filter-column "
                                >

                                    <option value="">
                                        Select Column
                                    </option>

                                    <option value="name">
                                        Product Name
                                    </option>

                                    <option value="sku">
                                        SKU
                                    </option>

                                    <option value="sale_price">
                                        Price
                                    </option>

                                    <option value="stock">
                                        Stock
                                    </option>

                                    <option value="status">
                                        Status
                                    </option>

                                </select>

                            </div>


                            {{-- Condition --}}
                            <div class="filter-field">

                                <label>
                                    Condition
                                </label>

                                <select
                                    class="advanced-filter-control filter-condition"
                                >

                                    <option value="">
                                        Select Condition
                                    </option>

                                    <option value="=">
                                        Equals
                                    </option>

                                    <option value="!=">
                                        Not Equals
                                    </option>

                                    <option value="contains">
                                        Contains
                                    </option>

                                    <option value="starts_with">
                                        Starts With
                                    </option>

                                    <option value="ends_with">
                                        Ends With
                                    </option>

                                    <option value=">">
                                        Greater Than
                                    </option>

                                    <option value=">=">
                                        Greater Than or Equal
                                    </option>

                                    <option value="<">
                                        Less Than
                                    </option>

                                    <option value="<=">
                                        Less Than or Equal
                                    </option>

                                </select>

                            </div>


                            {{-- Value --}}
                            <div class="filter-field filter-value-field">

                                <label>
                                    Value
                                </label>

                                <input
                                    type="text"
                                    class="advanced-filter-control filter-value"
                                    placeholder="Enter value..."
                                >

                            </div>


                            {{-- Logic --}}
                            <div class="filter-field filter-logic-field">

                                <label>
                                    Logic
                                </label>

                                <select
                                    class="advanced-filter-control filter-logic"
                                >

                                    <option value="and">
                                        AND
                                    </option>

                                    <option value="or">
                                        OR
                                    </option>

                                </select>

                            </div>


                            {{-- Remove --}}
                            <div class="filter-remove">

                                <button
                                    type="button"
                                    class="filter-remove-btn"
                                    title="Remove filter"
                                >

                                    <i class="bi bi-trash"></i>

                                </button>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         Advanced Filter Footer
                    ================================================== --}}
                    <div class="advanced-filter-footer">


                        {{-- Add Filter --}}
                        <button
                            type="button"
                            class="add-filter-btn"
                        >

                            <i class="bi bi-plus-lg"></i>

                            <span>
                                Add Filter
                            </span>

                        </button>


                        {{-- Actions --}}
                        <div class="advanced-filter-actions">


                            {{-- Clear --}}
                            <button
                                type="button"
                                class="filter-clear-btn"
                            >

                                <i class="bi bi-arrow-counterclockwise"></i>

                                <span>
                                    Clear
                                </span>

                            </button>


                            {{-- Apply --}}
                            <button
                                type="button"
                                class="filter-apply-btn"
                            >

                                <i class="bi bi-funnel-fill"></i>

                                <span>
                                    Apply Filters
                                </span>

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                 Product Table
            ====================================================== --}}
            <div class="module-table-wrapper">

                <table class="module-table">

                    <thead>
                        <tr>

                            <th width="40">#</th>

                            <th>Product</th>

                            <th>SKU</th>

                            <th>Category</th>

                            <th>Sale Price</th>

                            <th>Stock</th>

                            <th>Status</th>

                            <th class="text-end">Action</th>

                        </tr>
                    </thead>


                    <tbody>

                        @forelse($products as $key => $product)

                            <tr>

                                {{-- Serial --}}
                                <td class="module-serial">
                                    {{ $products->firstItem() + $key }}
                                </td>


                                {{-- Product --}}
                                <td>
                                    <span class="module-name">
                                        {{ $product->name }}
                                    </span>
                                </td>


                                {{-- SKU --}}
                                <td>
                                    <span class="module-secondary">
                                        {{ $product->sku ?? '-' }}
                                    </span>
                                </td>


                                {{-- Category --}}
                                <td>
                                    <span class="module-secondary">
                                        {{ $product->category->name ?? '-' }}
                                    </span>
                                </td>


                                {{-- Sale Price --}}
                                <td>
                                    {{ number_format($product->sale_price, 2) }}
                                </td>


                                {{-- Stock --}}
                                <td>

                                    @if($product->stock <= 0)

                                        <span class="module-stock out">
                                            Out of Stock
                                        </span>

                                    @elseif($product->stock <= $product->minimum_stock)

                                        <span class="module-stock low">
                                            {{ $product->stock }}
                                        </span>

                                    @else

                                        <span class="module-stock">
                                            {{ $product->stock }}
                                        </span>

                                    @endif

                                </td>


                                {{-- Status --}}
                                <td>

                                    @if($product->status)

                                        <span class="module-badge module-badge-success">
                                            Active
                                        </span>

                                    @else

                                        <span class="module-badge module-badge-danger">
                                            Inactive
                                        </span>

                                    @endif

                                </td>


                                {{-- Action --}}
                                <td>

                                    <div class="module-action">

                                        <div class="dropdown">

                                            <button
                                                class="btn btn-light module-action-btn dropdown-toggle"
                                                type="button"
                                                data-bs-toggle="dropdown"
                                            >
                                                <i class="bi bi-three-dots"></i>
                                                Action
                                            </button>


                                            <ul class="dropdown-menu dropdown-menu-end module-action-menu">

                                                {{-- View --}}
                                                <li>
                                                    <a
                                                        href="{{ route('products.show', $product->id) }}"
                                                        class="dropdown-item"
                                                    >
                                                        <i class="bi bi-eye"></i>
                                                        View
                                                    </a>
                                                </li>


                                                {{-- Edit --}}
                                                <li>
                                                    <a
                                                        href="{{ route('products.edit', $product->id) }}"
                                                        class="dropdown-item"
                                                    >
                                                        <i class="bi bi-pencil"></i>
                                                        Edit
                                                    </a>
                                                </li>


                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>


                                                {{-- Delete --}}
                                                <li>

                                                    <form
                                                        action="{{ route('products.destroy', $product->id) }}"
                                                        method="POST"
                                                    >

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            class="dropdown-item delete-item"
                                                        >
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>

                                                    </form>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="8">

                                    <div class="module-empty">

                                        <div class="module-empty-icon">
                                            <i class="bi bi-box-seam"></i>
                                        </div>

                                        <div class="module-empty-title">
                                            No Products Found
                                        </div>

                                        <p class="module-empty-text">
                                            No products are available right now.
                                        </p>
                                            <a href="{{ route('products.create') }}"
                                        class="btn btn-primary module-btn">

                                            <i class="bi bi-plus-lg"></i>

                                            Add Product

                                        </a>    
                                    </div>
                                        

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            {{-- =====================================================
                 Pagination
            ====================================================== --}}
            @if($products->hasPages())

                <div class="module-pagination">


                    {{-- Pagination Info --}}
                    <div class="module-pagination-info">

                        Showing

                        {{ $products->firstItem() ?? 0 }}

                        to

                        {{ $products->lastItem() ?? 0 }}

                        of

                        {{ $products->total() }}

                    </div>


                    {{-- Pagination --}}
                    <div>

                        {{ $products->links() }}

                    </div>

                </div>

            @endif


        </div>

    </div>

</div>

@endsection