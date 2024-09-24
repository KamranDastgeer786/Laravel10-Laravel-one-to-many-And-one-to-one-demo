@extends('layouts.app')

@section('page-title', 'Category')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"> Show All Category </h6>
            <a href="{{ route('category.create') }}"> Add Category </a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Created_at </th>
                        <th scope="col"> updated_at </th>
                        <th scope="col"> View </th>
                        <th scope="col"> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $Category)
                        <tr>
                            <td>{{ $Category->id }}</td>
                            <td>{{ $Category->title }}</td>
                            <td>{{ $Category->created_at }} </td>
                            <td>{{ $Category->updated_at }} </td>
                            
                            <td><a href="#" class="btn btn-primary btn-sm" style="width: 74px;"><i class="fa fa-home"></i> View </a></td>
                            <td>
                                <form action="{{route('category.destroy', $Category->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
            
                                    <button type="submit" class="btn btn-danger btn-sm" style="width: 77px;"><i class="fa fa-trash"></i> Delete </button>
            
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