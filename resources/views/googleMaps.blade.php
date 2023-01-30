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
    <!-- <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Advm7EKTGcSxdYsa2YtsLfOFDddg3UU&callback=initMap">
</script>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style> -->
    </head>

    <head>
    
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        .text-center {
            text-align: center;
        }
        #map {
            width: '100%';
            height: 400px;
        }
    </style>
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.9.3/dist/leaflet.css' crossorigin='' />
</head>





    <body id="page-top">
        <!-- Navigation-->
        @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
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
                        <h2>ReportTruzz</h2>
                        <p class="lead"></p>
                        <ul>
                            <li>ReporTruzz maps are implemented by using the famous and trusted Google Maps API by Google, designed and custom-coded to fit the requirements of software</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
           <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 5.297208092351888 , lng: 100.25642446854533 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
          });
        }
  
        window.initMap = initMap;
    </script>
            
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

        <div class="container-fluid">
        <h2>ReporTruzz map</h2>
        <div id="map"></div>
        <h1 class='text-center'>Laravel Leaflet Maps</h1>
        <h2><a href="{{ url('/cmarker') }}" class="btn btn-primary">Create Marker</a></h2>
    <div id='map'></div>

    <script src='https://unpkg.com/leaflet@1.9.3/dist/leaflet.js' crossorigin=''></script>
    <script src='https://unpkg.com/leaflet-control-geocoder@2.4.0/dist/Control.Geocoder.js'></script>

    <script>
        const geocoder = L.Control.Geocoder.nominatim();
        let map, markers = [];
        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            
            map = L.map('map', {
                center: {
                    lat: 5.425300,
                    lng: 100.312386,
                },
                zoom: 15
            });
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);
    
            map.on('click', mapClicked);
            initMarkers();
<<<<<<< HEAD
        
            
        
=======
            //create a custom marker when click (Still tak simpan marker tu)
            map.on('click', function(e) {
            var marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
            marker.bindPopup("<form id='marker-form'>" +
            "<input type='text' id='marker-input' placeholder='Enter information'>" +
            "<input type='button' value='Save' onclick='saveMarkerInfo()'>" +
            "</form>").openPopup();
            });
>>>>>>> origin/Outsource304
        }
        initMap();
     
        /* --------------------------- Initialize Markers --------------------------- */
        function saveMarkerInfo() {
             var form = document.getElementById("marker-form");
             var input = document.getElementById("marker-input");
             var info = input.value;
             form.innerHTML = "Saved info: " + info;
        }   
        
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
            for (let index = 0; index < initialMarkers.length; index++) {
                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<center><b>Foodbank #${data.position.id}</b></center>`);
                map.panTo(data.position);
                markers.push(marker)
                
            }
        }
 
        function generateMarker(data, index) {
            return L.marker([data.position.lat, data.position.lng], {
                    draggable: data.draggable,
        
                }) .on('click', function(e) {
                    console.log('marker clicked');
                 
                    location.href = '/marker/'+data.position.id;
                })

                
                .on('mouseover', (event) => markerHovered(event, index))
                .on('mouseout', (event) => markerOut(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
             
                
        }
        /* ------------------------- Handle Map Click Event ------------------------- */
        function mapClicked($event) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
       
     
        }



        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerHovered($event, index) {
    $event.target.openPopup();
}
        /* ------------------------ Hovered Marker Click Event ----------------------- */
        function markerOut($event, index) {
        $event.target.closePopup();
        }
        /* ----------------------- Handle Marker DragEnd Event ---------------------- */
        function markerDragEnd($event, index) {
            console.log(map);
            console.log($event.target.getLatLng());
        }
        /* ----------------------- Handle Marker reverse geocoding ---------------------- */
        function reverseGeo($event) {
        geocoder.reverse([$event.latlng.lat, $event.latlng.lng], map.options.crs.scale(map.getZoom()), function(results) {
        const locationName = results[0].name;
        const marker = L.marker($event.latlng).addTo(map);
        marker.bindPopup(locationName);
    });
        }


   
    </script>
    </div>
   
   
    </body>
</html>

@endsection