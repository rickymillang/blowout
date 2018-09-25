@extends('template.layouts.master')

@section('title', 'Profile')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="widget lazur-bg p-xl text-center text-uppercase">
                <img alt="image" class="img-circle" style="max-width:64px;" src="{{ asset(auth()->user()->avatar) }}" />
                <h1>
                    {{ $user->name }}
                </h1>
                <ul class="list-unstyled m-t-md">
                    <li>
                        <span class="fa fa-envelope fa-2x m-r-xs"></span>
                        <h3>Email:</h3>
                        <h4>{{ $user->email }}</h4>
                    </li>

                </ul>
                <a href="/profile/edit" class="btn btn-sm btn-success">Edit Profile</a>
            </div>
        </div>
        @if (auth()->user()->hasRole('establishment.admin'))
            <div class="col-lg-12">
                @if(auth()->user()->establishment->latitude && auth()->user()->establishment->longitude)
                    <input id="pac-input" class="form-control" type="text" placeholder="Search Box">
                    <div id="map"></div>
                @endif
            </div>
        @endif
    </div>
@endsection
@if(auth()->user()->hasRole('establishment.admin'))
    @section('custom_css')
        <style>
           #map {
            height: 300px;
            width: 100%;
           }

           #infowindow-content .title {
            font-weight: bold;
          }

          #infowindow-content {
            display: none;
          }

          #map #infowindow-content {
            display: inline;
          }

          .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
          }

          #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
          }

          .pac-controls {
            display: inline-block;
            padding: 5px 11px;
          }

          .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
          }

          #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
          }

          #pac-input:focus {
            border-color: #4d90fe;
          }

          #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
          }
          #target {
            width: 345px;
          }
        </style>
    @endsection
    @section('custom_js')
        <script>
          function initMap() {
            var uluru = {lat: {{ auth()->user()->establishment->latitude }}, lng: {{ auth()->user()->establishment->longitude }}};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
              searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
              var places = searchBox.getPlaces();

              if (places.length == 0) {
                return;
              }

              // Clear out the old markers.
              markers.forEach(function(marker) {
                marker.setMap(null);
              });
              markers = [];

              // For each place, get the icon, name and location.
              var bounds = new google.maps.LatLngBounds();
              places.forEach(function(place) {
                if (!place.geometry) {
                  console.log("Returned place contains no geometry");
                  return;
                }
                var icon = {
                  url: place.icon,
                  size: new google.maps.Size(71, 71),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(17, 34),
                  scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                  map: map,
                  icon: icon,
                  title: place.name,
                  position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                  // Only geocodes have viewport.
                  bounds.union(place.geometry.viewport);
                } else {
                  bounds.extend(place.geometry.location);
                }
              });
              map.fitBounds(bounds);
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY')}}&libraries=places&callback=initMap">
        </script>
    @endsection
@endif