<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Parking</title>
</head>
<body>
    <link rel="shortcut icon" href="img/favicon.png">

    {{-- <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"> --}}
    
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/bootstrap-datepicker/jquery.mobile.datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/bootstrap-datepicker/jquery.mobile.datepicker.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/elagent-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/themfiy/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/simple-line-icon/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/animation/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/calender/dcalendar.picker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/vendors/magnify-popup/magnific-popup.css')}}">

    <!-- Bootstrap CSS -->
    
{{-- <script src="{{asset('assets/dist/js/adminkit.js')}}"></script> --}}
    <link rel="stylesheet" href="{{asset('assets/usercss/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/usercss/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">


 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
<link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

{{-- <script src="{{asset('assets/usercss/dist/js/adminkit.js')}}"></script> --}}


<script src="{{asset('assets/usercss/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/usercss/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/usercss/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/usercss/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/usercss/vendors/calender/dcalendar.picker.js')}}"></script>
<script src="{{asset('assets/usercss/vendors/bootstrap-datepicker/datepicker.js')}}"></script>
<script src="{{asset('assets/usercss/js/wow.min.js')}}"></script>
<script src="{{asset('assets/usercss/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/usercss/js/smoothscroll.js')}}"></script>
<!-- contact js -->
<script src="{{asset('assets/usercss/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/usercss/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/usercss/js/contact.js')}}"></script>
<script src="{{asset('assets/usercss/js/custom.js')}}"></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="openmap.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>



    @include('user.header.header')

    {{-- <div>
        <div style="background-color:#aee7ae;height:500px;width:100%;margin: -41px 0px;">
            @yield('content')
        </div>
    </div> --}}
     {{-- <div style="background-color:#aee7ae;height:500px;width:100%;margin: -41px 0px;">
        @yield('content1')
    </div>  --}}
    @include('user.footer.footer')
    {{-- <div style="background-color:#aee7ae;height:500px;width:100%;margin: -41px 0px;">
        @yield('content1')
    </div> --}}
 
</body>
</html>