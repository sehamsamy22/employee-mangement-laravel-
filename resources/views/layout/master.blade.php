<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employe Mangement System</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script  src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyCdeNxZ2hBXCs0ujPF6svcQfJ3fBZRZ_nc
&callback=initMap"
type="text/javascript"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdeNxZ2hBXCs0ujPF6svcQfJ3fBZRZ_nc&libraries=places"></script>

    <style>
    .image{
      width: 40px;
      height: 40px;
    }
    #map-canvas{
      width: 350px;
      height: 250px;
    }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
