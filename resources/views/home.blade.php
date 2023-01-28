@extends('layout.public')
<<<<<<< HEAD
 @section('content')
@include('navbar')

<!DOCTYPE html>  
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ReportTruzz - Home</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
       <!-- Navigation-->

       @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

        
        
        <!-- Page content-->
        <div class="container-fluid">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="https://ibb.co/7SJ3Jst"><img class="card-img-top" src="https://i.ibb.co/51WQWbh/myvi.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2022</div>
                            <h2 class="card-title">Myvi King of The Fucking Road Malaysia</h2>
                            <a class="btn btn-primary" href="/myvi">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href=https://ibb.co/T2XQD5x><img class="card-img-top" src="https://i.ibb.co/2h2z0B1/Whats-App-Image-2023-01-05-at-11-14-56-PM.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 23, 2022</div>
                                    <h2 class="card-title h4">House Break in</h2>
                                    <p class="card-text">Two Burglar try enter a home at Bayu Tiara Apartments</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="https://ibb.co/bdtsTtp"><img class="card-img-top"  src="https://i.ibb.co/ry9xY9n/IMG-9550.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">March 12, 2022</div>
                                    <h2 class="card-title h4">Stray dogs lurking near Ivory Apartment  </h2>
                                    <p class="card-text">Requesting help from any NGO or government organizations as the matter causing terror to our childrens</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="https://ibb.co/k4z6PXS"><img class="card-img-top"   src="https://i.ibb.co/VgbpkTq/Whats-App-Image-2023-01-06-at-1-32-09-AM.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">May 7, 2022</div>
                                    <h2 class="card-title h4">Broken car causing rat infestation</h2>
                                    <p class="card-text">This broken car have been here almost 3 years. This lead to the increasing 
                                        number of rats and destroying the beauty of our surrounding </p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="https://ibb.co/28TRDYT"><img class="card-img-top"  src="https://i.ibb.co/f8sZhGs/Whats-App-Image-2023-01-06-at-1-32-32-AM.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">August 19, 2022</div>
                                    <h2 class="card-title h4">Abandoned Ferry ruined scenery</h2>
                                    <p class="card-text">An old ferry is ruining the view at Queensbay Beach. Really hoping that appropriate authorities will
                                        take action immediately.
                                    </p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header bg-gradient-light ">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header bg-gradient-light">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Potholes</a></li>
                                        <li><a href="#!">Lifts</a></li>
                                        <li><a href="#!">Escalators</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Abandoned cars</a></li>
                                        <li><a href="#!">Accident</a></li>
                                        <li><a href="#!">Others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header bg-gradient-light">Announcement</div>
                        <div class="card-body">No recent announcement!</div>
                    </div>
                </div>
            </div>
=======

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

        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand font-weight-bolder col-8" href="/main">ReportTruzz</a>
                <a class="navbar-brand">{{ Auth::user()->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item font-weight-bolder"><a class="nav-link" href="/main">About</a></li>
                        <li class="nav-item font-weight-bolder"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item font-weight-bolder"><a class="nav-link" href="/googleMaps">Maps</a></li>

                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">
                            {{ __('Logout') }}
                        </button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
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
            
>>>>>>> ad5d0b7945b2ea87ddca681c3b02923b6b131c6c
        </div>
    </div>
    @endforeach
   
 
</div>


@endsection
