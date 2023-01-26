@extends('layout.public')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>




<a href="{{ url('/googleMaps') }}" class="btn btn-primary" >Back</a>
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <h1>Manage Marker</h1>

            <a href="{{ url('/cmarker') }}" class="btn btn-success" style="float: right; margin-bottom: 20px;">Create Marker</a>
        


            <table class="table table-bordered">

                <thead>

                    <th width="80px">Id</th>

                    <th>Title</th>
                    <th width="120px">latitude</th>
                    <th width="120px">longitude</th>

                    <th width="150px">Action</th>

                </thead>

                <tbody>

                @foreach($markering as $post)

                <tr>

                    <td>{{ $post->id }}</td>

                    <td>{{ $post->title }}</td>
                    <td>{{ $post->latitude }}</td>
                    <td>{{ $post->longitude }}</td>

                    <td>

                    <a href="{{ url('editmarker/'.$post->id) }}" class="btn btn-primary btn-sm" >Edit Marker</a>  
                    <h2></h2>
                    <a href="{{ url('delete/'.$post->id) }}" class="btn btn-danger btn-sm" >Delete</a> 
                       
                        
                    </td>
    
                </tr>

                @endforeach

                </tbody>

   

            </table>

        </div>

    </div>

</div>

</style> 
@if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
@endif


@endsection
