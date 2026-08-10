
@extends('layouts.app_bootstrap')

@section('title', 'Dashboard')

@section('content')

{{-- =========================================================
    DASHBOARD HEADER
========================================================== --}}
<div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

        <div class="col">

            <div class="page-pretitle">
                Inventory Management
            </div>

            <h2 class="page-title">
                Dashboard
            </h2>

            <div class="text-secondary mt-1">
                Welcome back! Here's what's happening with your business.
            </div>

        </div>

        <div class="col-auto ms-auto">

            <div class="btn-list">

                <a href="{{ route('products.create') }}"
                   class="btn btn-primary">

                    <i class="bi bi-plus-lg me-1"></i>

                    Add Product

                </a>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    OVERVIEW
========================================================== --}}


{{-- =========================================================
    SALES / PURCHASE / INVENTORY
========================================================== --}}
<div class="row row-cards mb-4">


    {{-- Sales --}}
    <div class="col-md-6 col-xl-4">

        <div class="card h-100">

            <div class="card-body">

                {{-- Header --}}
                <div class="d-flex align-items-center mb-4">

                    <span class="avatar bg-green-lt me-3">

                        <i class="bi bi-cart-check fs-3"></i>

                    </span>

                    <div class="flex-fill">

                        <div class="fw-semibold fs-3">
                            Sales
                        </div>

                        <div class="text-secondary small">
                            Sales overview
                        </div>

                    </div>

                    <a href="#"
                       class="text-success text-decoration-none small fw-medium">

                        View →

                    </a>

                </div>


                {{-- Statistics --}}
                <div class="row">

                    <div class="col-6 border-end">

                        <div class="text-secondary small mb-1">
                            Today
                        </div>

                        <div class="h2 text-success mb-0">
                            ৳ 5,500
                        </div>

                    </div>


                    <div class="col-6 ps-4">

                        <div class="text-secondary small mb-1">
                            This Month
                        </div>

                        <div class="h2 mb-0">
                            ৳ 50,000
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Purchases --}}
    <div class="col-md-6 col-xl-4">

        <div class="card h-100">

            <div class="card-body">

                {{-- Header --}}
                <div class="d-flex align-items-center mb-4">

                    <span class="avatar bg-blue-lt me-3">

                        <i class="bi bi-cart-plus fs-3"></i>

                    </span>

                    <div class="flex-fill">

                        <div class="fw-semibold fs-3">
                            Purchases
                        </div>

                        <div class="text-secondary small">
                            Purchase overview
                        </div>

                    </div>

                    <a href="#"
                       class="text-primary text-decoration-none small fw-medium">

                        View →

                    </a>

                </div>


                {{-- Statistics --}}
                <div class="row">

                    <div class="col-6 border-end">

                        <div class="text-secondary small mb-1">
                            Today
                        </div>

                        <div class="h2 text-primary mb-0">
                            ৳ 3,200
                        </div>

                    </div>


                    <div class="col-6 ps-4">

                        <div class="text-secondary small mb-1">
                            This Month
                        </div>

                        <div class="h2 mb-0">
                            ৳ 32,500
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Inventory --}}
    <div class="col-md-12 col-xl-4">

        <div class="card h-100">

            <div class="card-body">

                {{-- Header --}}
                <div class="d-flex align-items-center mb-4">

                    <span class="avatar bg-warning-lt me-3">

                        <i class="bi bi-boxes fs-3"></i>

                    </span>

                    <div class="flex-fill">

                        <div class="fw-semibold fs-3">
                            Inventory
                        </div>

                        <div class="text-secondary small">
                            Stock overview
                        </div>

                    </div>

                    <a href="#"
                       class="text-warning text-decoration-none small fw-medium">

                        View →

                    </a>

                </div>


                {{-- Stock Statistics --}}
                <div class="row">

                    <div class="col-4 text-center border-end">

                        <div class="text-secondary small mb-1">
                            In Stock
                        </div>

                        <div class="h2 text-success mb-0">
                            95
                        </div>

                    </div>


                    <div class="col-4 text-center border-end">

                        <div class="text-secondary small mb-1">
                            Low Stock
                        </div>

                        <div class="h2 text-warning mb-0">
                            18
                        </div>

                    </div>


                    <div class="col-4 text-center">

                        <div class="text-secondary small mb-1">
                            Out
                        </div>

                        <div class="h2 text-danger mb-0">
                            7
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    FINANCIAL SUMMARY
========================================================== --}}
<div class="row row-cards mb-4">


    {{-- Accounts Receivable --}}
    <div class="col-md-4">

        <div class="card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <span class="avatar bg-green-lt me-3">

                        <i class="bi bi-cash-stack fs-3"></i>

                    </span>

                    <div>

                        <div class="text-secondary">
                            Accounts Receivable
                        </div>

                        <div class="h2 mb-0">
                            ৳ 24,500
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Accounts Payable --}}
    <div class="col-md-4">

        <div class="card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <span class="avatar bg-orange-lt me-3">

                        <i class="bi bi-credit-card fs-3"></i>

                    </span>

                    <div>

                        <div class="text-secondary">
                            Accounts Payable
                        </div>

                        <div class="h2 mb-0">
                            ৳ 15,800
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Expenses --}}
    <div class="col-md-4">

        <div class="card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <span class="avatar bg-red-lt me-3">

                        <i class="bi bi-wallet2 fs-3"></i>

                    </span>

                    <div>

                        <div class="text-secondary">
                            This Month Expenses
                        </div>

                        <div class="h2 mb-0">
                            ৳ 8,500
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    BUSINESS PERFORMANCE
========================================================== --}}
<div class="row row-cards mb-4">


    {{-- Section Header --}}
    <div class="col-12">

        <div class="page-pretitle mb-1">
            BUSINESS PERFORMANCE
        </div>

        <h3 class="mb-3">
            Financial Overview
        </h3>

    </div>


    {{-- Gross Profit --}}
    <div class="col-md-4">

        <div class="card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <span class="avatar bg-green-lt me-3">

                        <i class="bi bi-graph-up-arrow fs-3"></i>

                    </span>

                    <div class="flex-fill">

                        <div class="text-secondary">
                            Gross Profit
                        </div>

                        <div class="h2 mb-1">
                            ৳ 17,500
                        </div>

                        <div class="text-success small">

                            <i class="bi bi-arrow-up"></i>

                            12.5% from last month

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Total Sales --}}
    <div class="col-md-4">

        <div class="card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <span class="avatar bg-blue-lt me-3">

                        <i class="bi bi-bar-chart-line fs-3"></i>

                    </span>

                    <div class="flex-fill">

                        <div class="text-secondary">
                            Total Sales
                        </div>

                        <div class="h2 mb-1">
                            ৳ 50,000
                        </div>

                        <div class="text-success small">

                            <i class="bi bi-arrow-up"></i>

                            8.4% from last month

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Net Profit --}}
    <div class="col-md-4">

        <div class="card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <span class="avatar bg-purple-lt me-3">

                        <i class="bi bi-currency-dollar fs-3"></i>

                    </span>

                    <div class="flex-fill">

                        <div class="text-secondary">
                            Net Profit
                        </div>

                        <div class="h2 mb-1">
                            ৳ 9,000
                        </div>

                        <div class="text-success small">

                            <i class="bi bi-arrow-up"></i>

                            10.2% from last month

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    RECENT ACTIVITY
========================================================== --}}
<div class="row row-cards mb-4">


    {{-- Recent Sales --}}
    <div class="col-lg-8">

        <div class="card h-100">

            <div class="card-header">

                <h3 class="card-title">
                    Recent Sales
                </h3>

                <div class="card-actions">

                    <a href="#"
                       class="text-primary text-decoration-none small fw-medium">

                        View All →

                    </a>

                </div>

            </div>


            <div class="table-responsive">

                <table class="table table-vcenter card-table">

                    <thead>

                        <tr>

                            <th>Invoice</th>

                            <th>Customer</th>

                            <th>Date</th>

                            <th>Status</th>

                            <th class="text-end">
                                Amount
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                <strong>#INV-1001</strong>
                            </td>

                            <td>
                                Rahim
                            </td>

                            <td>
                                10 Aug 2026
                            </td>

                            <td>

                                <span class="badge bg-green-lt">
                                    Paid
                                </span>

                            </td>

                            <td class="text-end">
                                ৳ 4,500
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <strong>#INV-1002</strong>
                            </td>

                            <td>
                                Karim
                            </td>

                            <td>
                                10 Aug 2026
                            </td>

                            <td>

                                <span class="badge bg-yellow-lt">
                                    Due
                                </span>

                            </td>

                            <td class="text-end">
                                ৳ 2,800
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <strong>#INV-1003</strong>
                            </td>

                            <td>
                                Hasan
                            </td>

                            <td>
                                09 Aug 2026
                            </td>

                            <td>

                                <span class="badge bg-green-lt">
                                    Paid
                                </span>

                            </td>

                            <td class="text-end">
                                ৳ 6,200
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <strong>#INV-1004</strong>
                            </td>

                            <td>
                                Sakib
                            </td>

                            <td>
                                09 Aug 2026
                            </td>

                            <td>

                                <span class="badge bg-red-lt">
                                    Partial
                                </span>

                            </td>

                            <td class="text-end">
                                ৳ 3,100
                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>

        </div>

    </div>


    {{-- Low Stock --}}
    <div class="col-lg-4">

        <div class="card h-100">

            <div class="card-header">

                <h3 class="card-title">

                    <i class="bi bi-exclamation-triangle text-warning me-2"></i>

                    Low Stock

                </h3>

                <div class="card-actions">

                    <a href="#"
                       class="text-warning text-decoration-none small fw-medium">

                        View All →

                    </a>

                </div>

            </div>


            <div class="list-group list-group-flush">


                {{-- Product 1 --}}
                <div class="list-group-item">

                    <div class="row align-items-center">

                        <div class="col-auto">

                            <span class="avatar bg-blue-lt">
                                P
                            </span>

                        </div>

                        <div class="col">

                            <div class="fw-medium">
                                Paracetamol
                            </div>

                            <div class="text-secondary small">
                                Medicine
                            </div>

                        </div>

                        <div class="col-auto">

                            <span class="badge bg-yellow-lt">
                                5 left
                            </span>

                        </div>

                    </div>

                </div>


                {{-- Product 2 --}}
                <div class="list-group-item">

                    <div class="row align-items-center">

                        <div class="col-auto">

                            <span class="avatar bg-purple-lt">
                                O
                            </span>

                        </div>

                        <div class="col">

                            <div class="fw-medium">
                                Oil
                            </div>

                            <div class="text-secondary small">
                                Grocery
                            </div>

                        </div>

                        <div class="col-auto">

                            <span class="badge bg-red-lt">
                                2 left
                            </span>

                        </div>

                    </div>

                </div>


                {{-- Product 3 --}}
                <div class="list-group-item">

                    <div class="row align-items-center">

                        <div class="col-auto">

                            <span class="avatar bg-green-lt">
                                R
                            </span>

                        </div>

                        <div class="col">

                            <div class="fw-medium">
                                Rice
                            </div>

                            <div class="text-secondary small">
                                Grocery
                            </div>

                        </div>

                        <div class="col-auto">

                            <span class="badge bg-yellow-lt">
                                7 left
                            </span>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    QUICK ACTIONS
========================================================== --}}
<div class="row row-cards mb-4">

    <div class="col-12">

        <div class="card">

            <div class="card-header">

                <h3 class="card-title">
                    Quick Actions
                </h3>

            </div>


            <div class="card-body">

                <div class="row g-3">


                    {{-- Add Product --}}
                    <div class="col-sm-6 col-lg-3">

                        <a href="{{ route('products.create') }}"
                           class="btn btn-outline-primary w-100 py-3">

                            <i class="bi bi-box-seam fs-2 d-block mb-1"></i>

                            Add Product

                        </a>

                    </div>


                    {{-- New Sale --}}
                    <div class="col-sm-6 col-lg-3">

                        <a href="#"
                           class="btn btn-outline-success w-100 py-3">

                            <i class="bi bi-cart-check fs-2 d-block mb-1"></i>

                            New Sale

                        </a>

                    </div>


                    {{-- New Purchase --}}
                    <div class="col-sm-6 col-lg-3">

                        <a href="#"
                           class="btn btn-outline-info w-100 py-3">

                            <i class="bi bi-cart-plus fs-2 d-block mb-1"></i>

                            New Purchase

                        </a>

                    </div>


                    {{-- Stock Adjustment --}}
                    <div class="col-sm-6 col-lg-3">

                        <a href="#"
                           class="btn btn-outline-warning w-100 py-3">

                            <i class="bi bi-arrow-left-right fs-2 d-block mb-1"></i>

                            Stock Adjustment

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</div>

@endsection