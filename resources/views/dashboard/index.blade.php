@extends('layouts.app_bootstrap')

@section('title', 'Dashboard')

@section('content')

<div class="row g-3">

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Products</h5>
                <h3>120</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Categories</h5>
                <h3>10</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Sales</h5>
                <h3>৳ 50,000</h3>
            </div>
        </div>
    </div>

</div>

@endsection