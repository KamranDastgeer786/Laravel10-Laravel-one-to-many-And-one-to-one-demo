@extends('layouts.app')

@section('page-title', 'User')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"> Show All User </h6>
            <a href="{{ route('user.create') }}"> Create New User </a>
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
                        <th scope="col"> View </th>
                        <th scope="col"> Edit </th>
                        <th scope="col"> Delete </th>
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
                            <td><a href="{{route('user.show', $user->id)}}" class="btn btn-primary btn-sm" style="width: 74px;"><i class="fa fa-home"></i> View </a></td>
                            <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm" style="width: 74px;"><i class="fa fa-code"></i> Edit </a></td>
                            <td>
                                <form action="{{route('user.destroy', $user->id)}}" method="POST">
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