@extends('layouts.app')

@section('page-title', 'Products')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"> Show All User Products </h6>
            <a href="{{ route('products.create') }}"> Add New products </a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Description </th>
                        <th scope="col"> Quantity </th>
                        <th scope="col"> Category </th>
                        <th scope="col"> User </th>
                        <th scope="col"> View </th>
                        <th scope="col"> Edit </th>
                        <th scope="col"> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->category_id}}</td>
                            <td>{{ $product->user_id }}</td>
                            <td><a href="{{route('products.show', $product->id)}}" class="btn btn-primary btn-sm" style="width: 74px;"> <i class="fa fa-home"></i> View </a></td>
                            <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-sm" style="width: 74px;"><i class="fa fa-code"></i> Edit </a></td>
                            <td>
                                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
            
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm" style="width: 77px;"> <i class="fa fa-trash"></i> Delete </button>
            
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->

   
@endsection