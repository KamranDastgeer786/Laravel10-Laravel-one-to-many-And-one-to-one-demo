@extends('layouts.app')
@section('page-title', 'Add User')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <h6 class="mb-4"> Add New User </h6>
                    <form action = "{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone number</label>
                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" id="country">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Postal code</label>
                            <input type="text" class="form-control" name="postalCode" id="postalCode">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Form End -->

@endsection