@extends('template.layouts.master')

@section('title', 'Location')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Edit Location</h5>
        </div>
        <div class="ibox-content">
            <form class="form-horizontal" method="POST" action="/locations">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name" class="col-md-2 col-md-offset-2 control-label">Latitude</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="latitude" value="{{ $location->latitude }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-2 col-md-offset-2 control-label" >Longitude</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="longitude" value="{{ $location->longitude }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            @if($location->latitude && $location->longitude)
                <div id="map"></div>
            @endif
        </div>
    </div>


@endsection
@section('custom_css')
    <style>
       #map {
        height: 300px;
        width: 100%;
       }
    </style>
@endsection
@section('custom_js')
    <script>
      function initMap() {
        var uluru = {lat: {{ $location->latitude }}, lng: {{ $location->longitude }}};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY')}}&callback=initMap">
    </script>
@endsection