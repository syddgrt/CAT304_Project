@extends('layout.private')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Food Form</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('image/'.$location->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Food Name</label>
                            <input type="text" name="food_name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" required class="form-control">
                                @foreach($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                        <input type="hidden" name="location_id" value="{{ $location->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Best Before</label>
                            <input type="date" name="best_before" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="food_description" required class="form-control">
                        </div>

                        <div class="mb-3">
                            
                            <input type="hidden" name="email"  value="{{ $user->email }}" required class="form-control">
                        </div>

                          <div class="mb-3">
                            
                            <input type="hidden" name="user_id" value="{{ $user->id }}" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" required class="course form-control">
                            
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ url('/marker/'.$location->id) }}" class="btn btn-primary">Back</a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@endsection