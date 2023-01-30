<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ReporTruzz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="TemplateGP/assets/img/favicon.png" rel="icon">
  <link href="TemplateGP/assets//img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="TemplateGP/assets//vendor/aos/aos.css" rel="stylesheet">
  <link href="TemplateGP/assets//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="TemplateGP/assets//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="TemplateGP/assets//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="TemplateGP/assets//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="TemplateGP/assets//vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="TemplateGP/assets//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="TemplateGP/assets//css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.10.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

                         <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/main">ReporTruzz<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="TemplateGP/assets//img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        
    
          <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>         
              <li><a href="/yourReport">Your Report</a> </li>   
              @can('admin')
              <li><a href="/adminMain">Admin Page</a> </li>   
              @endcan       
                <li><a href="#" onclick="logout()">Logout</a>

                                    <script>
                                        function logout() {
                                         // add extra functionality or validation here
                                            // then submit the form
                                            document.getElementById('logout-form').submit();
                                                            }

                                                            

                                    </script>
                                   
                                </li>
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
                                                           
      <a href="/googleMaps" class="get-started-btn scrollto">Map</a>
      

    </div>
  </header><!-- End Header -->

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
