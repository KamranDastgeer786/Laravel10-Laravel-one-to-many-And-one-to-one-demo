@extends('layouts.app')

@section('page-title', 'User Details')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"> User Details </h6>
            <a href="{{ route('user.index') }}"> Back </a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Phone No. </th>
                        <th scope="col"> City </th>
                        <th scope="col"> Country </th>
                        <th scope="col"> code </th>
                        <th scope="col"> Created_at </th>
                        <th scope="col"> updated_at </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phoneNumber }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->country }}</td>
                            <td>{{ $user->postalCode }}</td>
                            <td>{{$user->created_at}} </td>
                            <td>{{$user->updated_at}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->

   
@endsection