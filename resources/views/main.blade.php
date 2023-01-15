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

        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google</title>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Advm7EKTGcSxdYsa2YtsLfOFDddg3UU&callback=initMap">
</script>
    <style type="text/css">
        #map {
          height: 470px;
        }
    </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

        @include('navbar')

        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
          <div class="container px-4 text-center">
              <h1 class="fw-bolder">ReporTruzz</h1>
          <p class="lead">Report teruih pa bozz</p>
         </div>
        </header>
        
        <!-- About section-->
        <section class = "bg-light" id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>What is ReporTruzz</h2>
                        <p class="lead"></p>
                        <ul>
                            <li>ReporTruzz is a system that aims to improve the overall quality of life of the society by promoting top tier infrastructure maintenance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
     
        <div id="map">
            <!-- Services section-->
            <section class="bg-light" id="services">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>How ReporTruzz works</h2>
                            <p class="lead">Power to the people!</p>
                            <ul>
                            <li>ReporTruzz works by implementing top-tier collaboration features</li>
                            <li>Users of the app can upload photos and images that shows of present infrastructure problems</li>
                            <li>Other users can then comment, update on the situation etc</li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Vision section-->
            <section class="bg-light" id="services">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>ReporTruzz Vision and Mission</h2>
                            <p class="lead">ReporTruzz Vision</p>
                            <ul>
                                <li>To enable the greatest infrastructural presence not only in Malaysia but all over the globe</li>
                            </ul>
                            <p class="lead">ReporTruzz Mission</p>
                            <ul>
                            <li>To make sure every person who is part of the community and society are able to gain access <br> to good infrastructure to overall improve the Quality of Life</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </section>
         </div>

       <!-- Bootstrap core JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
  
   
    </body>
</html>




@endsection