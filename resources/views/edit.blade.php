@extends('layout.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4> EDIT Food Form</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/'.$student->location_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Food Name</label>
                            <input type="text" name="food_name" value="{{$student->food_name}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" value="{{$student->category_id}}" required class="form-control">
                                @foreach($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Best Before</label>
                            <input type="date" name="best_before" value="{{$student->best_before}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="food_description" value="{{$student->food_description}}" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="user_email" value="{{$student->user_email}}" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" class="course form-control">
                            <img src="{{ asset('public/storage/image/'.$student->image) }}" width="70" height="70">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection