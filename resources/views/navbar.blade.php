<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ReporTruzz!!!</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="template/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>


<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container px-4">
    <a class="navbar-brand font-weight-bolder col-8" href="/main">ReportTruzz</a>
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item font-weight-bolder">
        <a class="nav-link" href="/main">About</a>
      </li>
      <li class="nav-item font-weight-bolder">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item font-weight-bolder">
        <a class="nav-link" href="/googleMaps">Maps</a>
      </li>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
  </button>

        <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="dropdownMenuButton2">
          <form method="POST" action="{{ route('logout') }}"> @csrf <button type="submit" class="dropdown-item btn btn-primary">{{ __('Logout') }}</button>
          </form>
        </div>
      </li>
      </div>

    </ul>
  </div>
  </li></ul></div></div>
</nav> -->


            <nav class="navbar bg-city navbar-expand navbar-light bg-white topbar mb-2 fixed-top shadow ">

                      
                   
                         <div class="container px-flex">
                          <a class="navbar-brand font-weight-bolder col-flex" href="/main">ReportTruzz</a>
                        </div>         
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        

                        
                           
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item  no-arrow mx-1">
                            <a class="nav-link " href="/googleMaps"  role="button"  aria-haspopup="false" aria-expanded="false">
                                
                                
                                <!-- Map icons  -->
                                <div>
                               <div class="map-marker-frame">
                            <span class="fas fa-map-marker-alt fa-2x"></span>
                            </div>

                               <style>
                                
                                .fa-map-marker-alt {
                                color: #FEFB07; /* red */
                                font-size: 1.5rem; /* 1.5 times the font size of the parent element */
                                 position: relative;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                }
                                .map-marker-frame:hover {opacity: 1}

                                .map-marker-frame {
                                background: #8AE3E9;
                                width: 50px; /* adjust as needed */
                                height: 50px; /* adjust as needed */
                                border-radius: 50%; /* creates a circle */
                                overflow: hidden; /* hides parts of the icon that extend beyond the frame */
                                box-shadow: inset;
                                opacity: 0.6;
                                transition: 0.3s;
                                }



                        </style>
                                </div>
                               
                            </a>
                            
                        </li>


                             <!-- Nav Item - Alerts -->
                        <li class="nav-item  no-arrow mx-1">
                            <a class="nav-link " href="/home"  role="button"  aria-haspopup="false" aria-expanded="false">
                                
                                
                                <!-- Map icons  -->
                                <div>
                               <div class="edit-marker-frame">
                            <span class="fa fa-server fa-2x"></span>
                            </div>

                               <style>
                                
                                .fa-server {
                                color: #FEFB07; 
                                font-size: 1.5rem; /* 1.5 times the font size of the parent element */
                                 position: relative;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                }

                                .edit-marker-frame:hover {opacity: 1}

                                .edit-marker-frame {
                                background: #8AE3E9;
                                width: 50px; /* adjust as needed */
                                height: 50px; /* adjust as needed */
                                border-radius: 50%; /* creates a circle */
                                overflow: hidden; /* hides parts of the icon that extend beyond the frame */
                                  opacity: 0.6;
                                transition: 0.3s;

                                }



                        </style>
                                </div>
                               
                            </a>
                            
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow show">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                <span class="mr-2 d-none d-lg-inline font-weight-bolder text-dark medium">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="https://wallpapersmug.com/download/3840x2160/a2fccd/sunny-day-cityscape-buildings-toronto.jpg">
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in hide" aria-labelledby="userDropdown">
                                 <a class="dropdown-item" href="#">
                                    
                                    View Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    
                                    View Report Submitted
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="logout()">Logout</a>
                                    <script>
                                        function logout() {
                                         // add extra functionality or validation here
                                            // then submit the form
                                            document.getElementById('logout-form').submit();
                                                            }

                                                            

                                    </script>
                                   
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


                    
                         <style>
                            .bg-city{
                            background: url("https://wallpapersmug.com/download/3840x2160/a2fccd/sunny-day-cityscape-buildings-toronto.jpg");
                            background-position: 1% 63%;     
                            background-size: cover;
                            };
                        
                            .navbar.scrolled {
    position: fixed;
    top: -56px;
    transition: top 0.3s ease-in-out;
}

                        


                        </style>

                        <script>


                        </script>