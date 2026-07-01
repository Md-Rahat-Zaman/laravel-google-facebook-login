@extends('layouts.app_bootstrap');
@section('title','product list')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-item-center mb-4">
        <h3 class="mb-0">Product List</h3>
        <a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a>
    </div>

    <div class="card shadow">
        <div class="card-header">
            All products
        </div>
        <div class="">
            <table class="table table-bordered">
                <thead>
                    <th>SL</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Purchase Price</th>
                    <th>Sale Price</th>
                    <th>Stock</th>
                    <th>Note</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @php $i = 0; @endphp
                    @foreach($product as $value)
                    @php $i++; @endphp
                    <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $value->category }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->pprice }}</td>
                            <td>{{ $value->sprice }}</td>
                            <td>{{ $value->opening_stock }}</td>
                            <td>{{ $value->note }}</td>
                            <td>
                                <a href="{{ route('products.edit',$value->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('products.destroy', $value->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                    </tr>
                    
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection