@extends('layouts.app')

@section('page-title', 'Category Details')

@section('content')

<!-- Recent Sales Start  -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"> Category Details </h6>
            <a href="{{ route('category.index') }}"> Back </a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Created_at </th>
                        <th scope="col"> updated_at </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $Category)
                        <tr>
                            <td> {{ $Category->id }} </td>
                            <td> {{ $Category->title }} </td>
                            <td> {{ $Category->created_at }} </td>
                            <td> {{ $Category->updated_at }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->

   
@endsection