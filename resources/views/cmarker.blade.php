@extends('layout.public')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 mx-auto my-5">

            <div class="card">
                <div class="card-header">
                    <h4>Create Marker</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('cmarker') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-5">
                            <label for="">Title</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        <div class="mb-5">
                            <label for="">Longitude</label>
                            <input type="text" name="longitude" required class="form-control">
                        </div>

                        <div class="mb-5">
                            <label for="">Latitude</label>
                            <input type="text" name="latitude" required class="form-control">
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <a href="{{ url('/googleMaps') }}" class="btn btn-primary">Back</a>

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