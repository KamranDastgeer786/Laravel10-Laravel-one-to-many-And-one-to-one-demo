@extends('layouts.app')
@section('page-title', 'Add Product')

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
                    
                    <h6 class="mb-4"> Add Product Details </h6>
                    <form action = "{{ route('productdetails.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Category</label>
                            <select class="form-control" id="category_id" name="category_id" required style="background-color: black">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Size </label>
                            <input type="text" class="form-control" id="size" name="size" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Weight</label>
                            <input type="number" class="form-control" name="weight" id="weight" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Extra Note </label>
                            <textarea class="form-control" name="extraNote" id="extraNote"  required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Form End -->

@endsection