@include('navbar')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Gp Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="TemplateGP/assets//img/favicon.png" rel="icon">
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

<body>

 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="font-weight: bolder;">Report Dashboard</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

        <section class="inner-page">
        <div class="container">
            <div class="row">
            @foreach($markers as $marker)
                <div class="col-md-4">
                <div class="card">
                    <style>
                        .row{--bs-gutter-y: 2.0rem;}
                    </style>
                    <div class="card-body">
                    <h4><img src="{{ asset('public/storage/image/'.$marker->image) }}" width="300" height="300"></h4> 
                    <h4 class="card-title"><b>{{ $marker->title }}</b></h4>
                    <p class="card-text">Category: {{ $marker->category?->name}}</p>
                    <p class="card-text">Details: {{ $marker->description}}</p>
                    <p class="card-text">Email: {{ $marker->user?->email}}</p>
                    <p class="card-text">{{ date('j F Y', strtotime($marker->created_at)) }}</p>
                    @if(Auth::id() == $marker->user_id)
                    <p>
                        <a href="{{ url('editmarker/'.$marker->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ url('deletes/'.$marker->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </p> 
                    @endif
                    
                    @can('admin')
                    <p>
                        <a href="{{ url('editmarker/'.$marker->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ url('deletes/'.$marker->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </p> 
                    @endcan
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Gp<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="TemplateGP/assets//vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="TemplateGP/assets//vendor/aos/aos.js"></script>
  <script src="TemplateGP/assets//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="TemplateGP/assets//vendor/glightbox/js/glightbox.min.js"></script>
  <script src="TemplateGP/assets//vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="TemplateGP/assets//vendor/swiper/swiper-bundle.min.js"></script>
  <script src="TemplateGP/assets//vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="TemplateGP/assets//js/main.js"></script>

</body>

</html>