@extends('layouts.app')
@section('page-title', 'Add Category')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4" style="margin-top: 178px">
        <div class="row g-4" style="display: ruby-text;">
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
                    
                    <h6 class="mb-4"> Add New Category </h6>
                    <form action = "{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Form End -->

@endsection