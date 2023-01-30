@extends('layout.private') 
@include('navbar')
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
</script> -->
    <style type="text/css">
        .bg-gradient-primary {
    background-color: #4e73df;
    background-image: linear-gradient(180deg,#5c86fe 10%,#ffffff 100%);
    background-size: cover;
}
    </style> 
    </head>
    

    <head>
    
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        .text-center {
            text-align: center;
        }
        #map {
            
             position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            z-index: 1;
            }
            .create-btn{
                 position: fixed;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
        font-size: 20px;
        padding: 10px 20px;
        background: #00FF7F;
        
            }
            .leaflet-control-zoom1 {
         display: none;
            }
                .leaflet-control-zoom {
            /* styles */
                position: absolute;
                bottom: 10px;
                left: 10px;
                }
        
    </style>
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.9.3/dist/leaflet.css' crossorigin='' />
</head>





    <body id="page-top">
        <!-- Navigation-->
        @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

       
        <!-- Header-->
        <!-- <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">ReportTruzz</h1>
                <p class="lead">Report teruih pa bozz</p>
            </div>
        </header> -->
        <!-- About section-->
        <!-- <section class = "bg-light" id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>ReportTruzz</h2>
                        <p class="lead"></p>
                        <ul>
                            <li></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section> -->
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

        <div class="container-flex mt-xl-5 ">
        
        <!-- <div id='map' style='height: 95vh; width: 100%;'></div> -->
        
        <div id="map" style="width: 100%; height: 100%;"></div>
        <h2><a href="{{ url('/cmarker') }}" class="btn create-btn btn-success">Create Report</a></h2>
 







   <script src='https://unpkg.com/leaflet@1.9.3/dist/leaflet.js' crossorigin=''></script>
    <script src='https://unpkg.com/leaflet-control-geocoder@2.4.0/dist/Control.Geocoder.js'></script>
      <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.68.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
      <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.68.0/dist/L.Control.Locate.min.js" integrity="sha512-rZ+NofGpwYJ5L5FZp5X9Bf0R6RjA2J7E/1cq3mY5Y+GJ5P5vZB9X5BnRfDnj5QEi5khec3qIo5YiM8EjxMb9cg==" crossorigin=""></script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>


    <script>
        const geocoder = L.Control.Geocoder.nominatim();
        let map, markers = [];
       
        /* ----------------------------- Initialize Map ----------------------------- */
        if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var userLatLng = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
        map = L.map('map', {
            center: userLatLng, zoomControl : false,
            zoom: 15
        });
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        }).addTo(map);

 // add the custom zoom control to the bottom left corner
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(map);
        

        map.on('click', mapClicked);
        initMarkers();

        var locateControl = L.control.locate({
            locate: true,
            position: 'bottomright',
            drawCircle: true,
            follow: true,
            setView: true,
            keepCurrentZoomLevel: true,
            markerStyle: {
                weight: 1,
                opacity: 1,
                fillOpacity: 0.8
            },
            circleStyle: {
                weight: 1,
                clickable: false
            },
            icon: 'fa fa-location-arrow',
            metric: false,
            strings: {
                title: "Show me where I am",
                popup: "You are Here",
                outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
            },
            locateOptions: {
                maxZoom: 18,
                watch: true,
                enableHighAccuracy: true,
                maximumAge: 10000,
            }

        }).addTo(map);
        var searchControl = L.Control.geocoder({
        defaultMarkGeocode: false,  position: 'bottomright',   
    }).addTo(map);
    searchControl.on('markgeocode', function(e) {
                                var lat= e.geocode.center.lat;
                                var lng = e.geocode.center.lng;
        map.setView([lat, lng], map.getZoom(10))});

    
   

    });
} else {
    // browser doesn't support geolocation
    var defaultLatLng = {
        lat: 5.425300,
        lng: 100.312386
    };
    map = L.map('map', {
        center: defaultLatLng,
        zoom: 15
    });
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    map.on('click', mapClicked);
    initMarkers();
}




   

       
       
    

     
        /* --------------------------- Initialize Markers --------------------------- */
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
            for (let index = 0; index < initialMarkers.length; index++) {
                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<center><b>Report #${data.position.id}</b><br>${data.position.tit}</center>`);
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