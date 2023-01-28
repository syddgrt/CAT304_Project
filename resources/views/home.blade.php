@extends('layout.public')
<<<<<<< HEAD

=======
@include('navbar')
>>>>>>> d24f44f02ff6249993d460eb23356b0e444e5862
@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<h3>Dashboard Report</h3>
<p> </p>
@if (session('status'))
        <div>{{ session('status') }}</div>
    @endif


<div class="card-columns">
    @foreach($markers as $marker)
    
    <div class="card">
        <div class="card-body">
            <h4><img src="{{ asset('public/storage/image/'.$marker->image) }}" width="300" height="300"></h4> 
            <p class="card-text">{{ date('j F Y', strtotime($marker->created_at)) }}</p>
            <h4 class="card-title">{{ $marker->title }}</h4>
            <p class="card-text">Category: {{ $marker->category?->name}}</p>
            <p class="card-text">Details: {{ $marker->description}}</p>
            <p class="card-text">Email: {{ $marker->user?->email}}</p>
            @if(Auth::id() == $marker->user_id)

             <p>
                <a href="{{ url('editmarker/'.$marker->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ url('deletes/'.$marker->id) }}" class="btn btn-danger btn-sm">Delete</a>

         
           </p> 
           @endif
            
        </div>
    </div>
    @endforeach
   
 
</div>


@endsection