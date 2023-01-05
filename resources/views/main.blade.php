@extends('layout.public') 
@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ReporTruzz</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="/main">ReportTruzz</a>
                <a class="navbar-brand">{{ Auth::user()->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/main">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/googleMaps">Maps</a></li>

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
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">ReportTruzz</h1>
                <p class="lead">Report teruih pa bozz</p>
            </div>
        </header>
        <!-- About section-->
        <section class = "bg-light" id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>What is ReportTruzz</h2>
                        <p class="lead"></p>
                        <ul>
                            <li>ReportTruzz is a system that aims to improve the overall quality of life of the society by promoting top tier infrastructure maintenance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>How ReportTruzz works</h2>
                        <p class="lead">Power to the people!</p>
                        <ul>
                        <li>ReportTruzz works by implementing top-tier collaboration features</li>
                        <li>Users of the app can upload photos and images that shows of present infrastructure problems</li>
                        <li>Other users can then comment, update on the situation etc</li>
                        
                        
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <!-- <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contact us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>


</html>



@endsection