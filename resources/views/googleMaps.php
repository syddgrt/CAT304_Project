<!DOCTYPE html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google</title>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Advm7EKTGcSxdYsa2YtsLfOFDddg3UU&callback=initMap">
</script>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style>
</head>
    
<body>
    <div class="container mt-5">
        <h2>ReporTruzz map</h2>
        <div id="map"></div>
    </div>
  
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
  
</body>
</html>