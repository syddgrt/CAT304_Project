@extends('layout.private')
@include('navbar')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmb+SdPTAMbQEq3Yg5ijJ1rGkJcGpLlZS8gZAzA==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 mx-auto my-5">

            <div class="card">
                <div class="card-header">
                    <h4>Create Report</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('cmarker') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" required class="form-control">
                                @foreach($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Status</label>
                            <input disabled="disabled" type="text" name="status" value ="Active" required class="form-control">
                        </div>
                          <div class="mb-3">
                            
                           <input type="hidden" name="user_id" value="{{ $current_user_id }}">

                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" required class="course form-control">
                            <p> </P>
                        <div class="mb-6" id="map" style="height: 400px"></div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                            // Initialize the map
                            var map = map = L.map('map', {
                                    center: {
                                        lat: 5.425300,
                                        lng: 100.312386,
                                    },
                                    zoom: 15
                                });

                            // Add the basemap
                            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);
                           
                            const geocoders = L.Control.Geocoder.nominatim();
                            var geocoder = L.Control.geocoder({defaultMarkGeocode: false}).addTo(map);
                            geocoder.on('markgeocode', function(e) {
                                var latitude = e.geocode.center.lat;
                                var longitude = e.geocode.center.lng;
                                var marker = L.marker([latitude, longitude], {offsetTop: -20, offsetLeft: 10, draggable: true }).addTo(map);
                                marker.bindPopup(e.geocode.name).openPopup();
                                var latlng = marker.getLatLng();
                                marker.setLatLng([latlng.lat, latlng.lng]).update();

                         

                            //     marker.on('dragend', function(e) {
                            //     var latlng = marker.getLatLng();
                                
                            //     document.querySelector('input[name=longitude]').value = latlng.lng;
                            //     document.querySelector('input[name=latitude]').value = latlng.lat;
                            // });

                                                    marker.on('dragend', function(e) {
                            var latlng = marker.getLatLng();
                            document.querySelector('input[name=longitude]').value = latlng.lng;
                            document.querySelector('input[name=latitude]').value = latlng.lat;
                            // update the address in the popup
                            geocoders.reverse(latlng, map.options.crs.scale(map.getZoom()), function(results) {
                                var r = results[0];
                                if (r) {
                                    // update the content of the popup
                                    marker.bindPopup(r.name).openPopup();
                                }
                            });
                        });

                                document.querySelector('input[name=longitude]').value = latlng.lng;
                                document.querySelector('input[name=latitude]').value = latlng.lat;
                            });

                           

                

                            // Create a marker
                            // var marker = L.marker([5.425300, 100.312386], {offsetTop: -20, offsetLeft: 10}).addTo(map);


                            
                            // var latlng = marker.getLatLng();
                            // document.querySelector('input[name=longitude]').value = latlng.lng;
                            // document.querySelector('input[name=latitude]').value  = latlng.lat;


                            
   

     

                        });
                        
                        </script>
                        <div class="mb-5">
                           
                            <input type="hidden" name="longitude" value="">
                        </div>

                        <div class="mb-5">
                            
                            <input type="hidden" name="latitude" value="">
                        </div> 
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ url('/googleMaps') }}" class="btn btn-primary">Back</a>
                        </div>
                        

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>



@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@endsection