@extends('layout.public')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<h3>Your Foods</h3>

<a class="btn btn-dark mb-3" href="{{ url('/image/'.$student->id)}}">Add Food</a>
<a href="{{ url('/googleMaps') }}" class="btn btn-primary">Back</a>
<div class="card-columns">
    @foreach($foods as $food)
    
    <div class="card">
    <!-- <img src="{{ asset('storage/image/'.$food->image) }}" alt="image"> -->
        <div class="card-body">
        <h4><img src="{{ asset('public/storage/image/'.$food->image) }}" width="300" height="300"></h4> 
        
            <h4 class="card-title">{{ $food->food_name }}</h4>
            <!-- <p class="card-text">{{ $food->food_description }}</p> -->
            <p class="card-text">Category: {{ $food->category?->name}}</p>
        
            <!-- <p class="card-text">Best Before: {{ $food->best_before }}</p>
            <p class="card-text">User email: {{ $food->user_email }}</p> -->

             <p>
                <a href="{{ url('edit/'.$food->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ url('delete/'.$food->id) }}" class="btn btn-danger btn-sm">Delete</a>

        
           </p> 
            
        </div>
    </div>
    @endforeach
   
 
</div>


@endsection
