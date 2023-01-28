@extends('layout.public')  
@section('content') 


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
        
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <div class="card-body">

                    <div class="card mb-4">
                    @foreach($reports as $report)
                        <div class="card-body">
                            <div class="small text-muted">{{ $report->created_at }}</div>
                            <h2 class="card-title">{{ $report->title }}</h2>
                            <img src="{{ asset('public/storage/image/'.$report->image) }}" alt="">
                            <!-- <a class="btn btn-primary" href="/myvi">Read more →</a> -->
                        </div>
                        @endforeach
                    </div>
                    @foreach($reports as $report)
                        <div class="small text-muted">{{ $report->created_at }}</div>
                        
                        <img src="{{ asset('public/storage/image/'.$report->image) }}" alt="">
                     @endforeach
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
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<!-- @endsection -->
