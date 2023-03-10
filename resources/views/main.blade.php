<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>ReporTruzz</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="TemplateGP/assets/img/favicon.png" rel="icon" />
        <link
            href="TemplateGP/assets/img/apple-touch-icon.png"
            rel="apple-touch-icon"
        />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link href="TemplateGP/assets/vendor/aos/aos.css" rel="stylesheet" />
        <link
            href="TemplateGP/assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="TemplateGP/assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link
            href="TemplateGP/assets/vendor/boxicons/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link
            href="TemplateGP/assets/vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet"
        />
        <link
            href="TemplateGP/assets/vendor/remixicon/remixicon.css"
            rel="stylesheet"
        />
        <link
            href="TemplateGP/assets/vendor/swiper/swiper-bundle.min.css"
            rel="stylesheet"
        />

        <!-- Template Main CSS File -->
        <link href="TemplateGP/assets/css/style.css" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: Gp - v4.10.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div
                class="container d-flex align-items-center justify-content-lg-between"
            >
                <h1 class="logo me-auto me-lg-0">
                    <a href="/main">ReporTruzz<span>.</span></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="TemplateGP/assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li>
                            <a class="nav-link scrollto active" href="#hero"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#services"
                                >Features</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#features"
                                >How To Use</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#team">Team</a>
                        </li>
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
                </nav>
                <!-- .navbar -->

                <a href="/googleMaps" class="get-started-btn scrollto"
                    >Map</a
                >
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section
            id="hero"
            class="d-flex align-items-center justify-content-center"
        >
            <div class="container" data-aos="fade-up">
                <div
                    class="row justify-content-center"
                    data-aos="fade-up"
                    data-aos-delay="150"
                >
                    <div class="col-xl-6 col-lg-8 text center">
                    <h1>ReporTruzz</h1>
                    <h1 class="text-center"><span class="inline-block">Report & Resolve</span>.
                    </h1>
                    <!-- <h1 class="text-nowrap">Report, Repair & Resolve.</h1> -->
                        <h2>Improving Road Safety and Efficiency through Community-Driven Reporting</h2>
                    </div>
                </div>

                <div
                    class="row gy-4 mt-5 justify-content-center"
                    data-aos="zoom-in"
                    data-aos-delay="250"
                >
                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-check-line"></i>
                            <h3><a href="/main">About</a></h3>
                        </div>
                    </div>
                    <div class="btn col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line"></i>
                            <h3><a href="/home">Dashboard</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-map-pin-line"></i>
                            <h3><a href="/googleMaps">Maps</a></h3>
                        </div>
                    </div>
                    @can('admin')
                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line"></i>
                            <h3><a href="/adminMain">Admin</a></h3>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div
                            class="col-lg-6 order-1 order-lg-2"
                            data-aos="fade-left"
                            data-aos-delay="100"
                        >
                            <img
                                src="TemplateGP/assets/img/jalan.jpg"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                        <div
                            class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content"
                            data-aos="fade-right"
                            data-aos-delay="100"
                        >
                            <h3>
                                What is ReporTruzz
                            </h3>
                            <p class="fst-italic center-align">
                            ReporTruzz is a revolutionary platform that empowers communities to actively participate in maintaining 
                            their local infrastructure by reporting and resolving issues in a timely manner.
                            </p>
                            <ul>
                                <li>
                                    <i class="ri-check-double-line"></i> Encourage local communities to take an active role in 
                                    maintaining their infrastructure
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i> Continuously gather feedback and implement 
                                    improvements to the system for optimal performance.
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i> Partner with local authorities to establish a strong and 
                                    efficient collaboration in order to effectively address and resolve reported 
                                    infrastructure issues in a timely manner, ensuring the 
                                    safety and well-being of the community.
                                </li>
                            </ul>
                            <p>
                            Our goal is to create a safer and more efficient road infrastructure 
                            through community reporting and collaboration with local 
                            authorities, ultimately leading to an improved quality of life for everybody.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>REPORTRUZZ</h2>
                        <p>Check our Application</p>
                    </div>

                    <div class="row">
                        <div
                            class="col-lg-4 col-md-6 d-flex align-items-stretch"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                        >
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="bx bx-file"></i>
                                </div>
                                <h4><a href="/home">Report Dashboard</a></h4>
                                <p>
                                    Report Dashboard will show every report submitted by the user
                                </p>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
                            data-aos="zoom-in"
                            data-aos-delay="200"
                        >
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h4><a href="/googleMaps">Maps</a></h4>
                                <p>
                                    The report location will be marked on maps by a marker
                                </p>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
                            data-aos="zoom-in"
                            data-aos-delay="300"
                        >
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="bx bx-tachometer"></i>
                                </div>
                                <h4><a href="/cmarker">Create Report</a></h4>
                                <p>
                                User can create report on damage road infrastructure in create report page
                                </p>
                            </div>
                        </div>
                        <P> </P>
                        <p> </P>
      
                
            </section>
             <!-- ======= Features Section ======= -->
             <section id="features" class="features">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div
                            class="image col-lg-6"
                            style="
                                background-image: url('TemplateGP/assets/img/features.jpg');
                            "
                            data-aos="fade-right"
                        ></div>
                        <div
                            class="col-lg-6"
                            data-aos="fade-left"
                            data-aos-delay="100"
                        >
                            <div
                                class="icon-box mt-5 mt-lg-0"
                                data-aos="zoom-in"
                                data-aos-delay="150"
                            >
                                <h1> How To Use ReporTruzz</h1>
                            </div>
                            <div
                                class="icon-box mt-5"
                                data-aos="zoom-in"
                                data-aos-delay="150"
                            >
                                <i class="bx bx-cube-alt"></i>
                                <h4>Report Dashboard</h4>
                                <p>
                                    Report Dashboard enables users to view, edit, and delete reports while keeping track of the report status.
                                </p>
                            </div>
                            <div
                                class="icon-box mt-5"
                                data-aos="zoom-in"
                                data-aos-delay="150"
                            >
                                <i class="ri-map-pin-line"></i>
                                <h4>Maps</h4>
                                <p>
                                Maps will display the location of the report as a marker, 
                                clearly indicating its location to users who access the map.
                                </p>
                            </div>
                            <div
                                class="icon-box mt-5"
                                data-aos="zoom-in"
                                data-aos-delay="150"
                            >
                                <i class="bx bx-receipt"></i>
                                <h4>Create Report</h4>
                                <p>
                                Users can upload photos to alert others about 
                                faulty infrastructure such as road damage and active vandalism.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Check our Team</p>
                    </div>

                    <div class="row">
                        <div
                            class="col-lg-3 col-md-6 d-flex align-items-stretch"
                        >
                            <div
                                class="member"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <div class="member-img">
                                    <img
                                        text-align: center;
                                        src="TemplateGP/assets/img/team/syed.jpeg"
                                        class="img-fluid"
                                        alt=""
                                        style="width:400px; height:330px;"
                                    />
                                    <div class="social">
                                        <a href=""
                                            ><i class="bi bi-twitter"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-facebook"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-instagram"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-linkedin"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Syed Muhammad Haikal Bin Syed Husni</h4>
                                    <span>Team Members</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-3 col-md-6 d-flex align-items-stretch"
                        >
                            <div
                                class="member"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <div class="member-img">
                                    <img
                                    text-align: center;
                                        src="TemplateGP/assets/img/team/berat.jpg"
                                        class="img-fluid"
                                        alt=""
                                        style="width:400px; height:330px;"
                                    />
                                    <div class="social">
                                        <a href=""
                                            ><i class="bi bi-twitter"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-facebook"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-instagram"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-linkedin"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Wan Muhammad Hazim Aufa Bin Wan Suhaimi</h4>
                                    <span>Team Members</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-3 col-md-6 d-flex align-items-stretch"
                        >
                            <div
                                class="member"
                                data-aos="fade-up"
                                data-aos-delay="300"
                            >
                                <div class="member-img">
                                <img

                                    text-align: center;
                                    src="TemplateGP/assets/img/team/syaqir.jpeg"
                                    class="img-fluid"
                                    alt=""
                                    style="width:400px; height:330px;"
                                    />
                                    <div class="social">
                                        <a href=""
                                            ><i class="bi bi-twitter"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-facebook"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-instagram"></i
                                        ></a>
                                        <a href=""
                                            ><i class="bi bi-linkedin"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Muhammad Syaqir Bin Zahir</h4>
                                    <span>Team Members</span>
                                </div>
                            </div>
                        </div>
            </section>
            <!-- End Team Section -->
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>REPORTRUZZ<span>.</span></h3>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"
                                        ><i class="bx bxl-twitter"></i
                                    ></a>
                                    <a href="#" class="facebook"
                                        ><i class="bx bxl-facebook"></i
                                    ></a>
                                    <a href="#" class="instagram"
                                        ><i class="bx bxl-instagram"></i
                                    ></a>
                                    <a href="#" class="google-plus"
                                        ><i class="bx bxl-skype"></i
                                    ></a>
                                    <a href="#" class="linkedin"
                                        ><i class="bx bxl-linkedin"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Gp</span></strong
                    >. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a
            href="#"
            class="back-to-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short"></i
        ></a>

        <!-- Vendor JS Files -->
        <script src="TemplateGP/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="TemplateGP/assets/vendor/aos/aos.js"></script>
        <script src="TemplateGP/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="TemplateGP/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="TemplateGP/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="TemplateGP/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="TemplateGP/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="TemplateGP/assets/js/main.js"></script>
    </body>
</html>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>