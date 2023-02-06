@extends('layout.public')

 @section('content')




<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

@foreach($markers as $marker)
<h3>Report Title: {{ $marker->title }}</h3>
@endforeach
<a href="{{ url('/main') }}" class="btn btn-primary">Back</a>
<p> </p>
<div class="card-columns">
    @foreach($markers as $marker)

        <div class="card">
            <div class="card-body">
                <h4><img src="{{ asset('public/storage/image/'.$marker->image) }}" width="300" height="300"></h4> 
                <h4 class="card-title">{{ $marker->title }}</h4>
                <p class="card-text">Category: {{ $marker->category?->name}}</p>
                <p class="card-text">Details: {{ $marker->description}}</p>
                <p class="card-text">Email: {{ $marker->user?->email}}</p>
                <p class="card-text">{{ date("j F Y", strtotime($marker->created_at)) }}</p>
                <style>
                    .green-box {
                        background-color: green;
                        color: white;
                        padding: 10px;
                        width:145px;
                        border-radius: 10px; /* Makes the corners rounded */
                    }

                    .yellow-box {
                        background-color: yellow;
                        color: black;
                        padding: 10px;
                        width:160px;
                        border-radius: 10px;
                    }

                    .red-box {
                        background-color: red;
                        color: white;
                        padding: 10px;
                        width:110px;
                        border-radius: 10px;
                    }
                </style>

                <p class="card-text
                {{ $marker->status === 'Resolved' ? 'green-box' : '' }}
                {{ $marker->status === 'In Progress' ? 'yellow-box' : '' }}
                {{ $marker->status === 'New' ? 'red-box' : '' }}">
                Status: {{ $marker->status}}
                </p>

                @if(Auth::id() == $marker->user_id)
                @can('admin')
                <p>
                    <a href="{{ url('editmarker/'.$marker->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('deletes/'.$marker->id) }}" class="btn btn-danger btn-sm">Delete</a>
                </p> 
                @endcan
    
            </div>
        </div>
        @endif
    @endforeach
</div>
@endsection