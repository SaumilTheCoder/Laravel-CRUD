<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
<!-- v4.0.0 -->
<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="logo/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->

<link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/simple-lineicon/simple-line-icons.css')}}">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
{{-- <script src="dist/bootstrap/js/bootstrap.min.js"></script> 


<script src="dist/js/jquery.min.js"></script>  --}}
<link rel="stylesheet" href="{{asset('assets/css/simple-lineicon/simple-line-icons.css')}}">
<script src="{{asset('assets/dist/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/dist/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- v4.0.0-alpha.6 --> 
{{-- <script src="dist/bootstrap/js/bootstrap.min.js"></script>  --}}

<!-- template --> 
{{-- <script src="dist/js/adminkit.js"></script>  --}}
<script src="{{asset('assets/dist/js/adminkit.js')}}"></script>

<!-- Morris JavaScript --> 
{{-- <script src="dist/plugins/raphael/raphael-min.js"></script>  --}}
<script src="{{asset('assets/dist/plugins/raphael/raphael-min.js')}}"></script>
{{-- <script src="dist/plugins/morris/morris.js"></script>  --}}
<script src="{{asset('assets/dist/plugins/morris/morris.js')}}"></script>
{{-- <script src="dist/plugins/functions/dashboard1.js"></script>  --}}
<script src="{{asset('assets/dist/plugins/functions/dashboard1.js')}}"></script>
<!-- Chart Peity JavaScript --> 
{{-- <script src="dist/plugins/peity/jquery.peity.min.js"></script>  --}}
<script src="{{asset('assets/dist/plugins/peity/jquery.peity.min.js')}}"></script>
{{-- <script src="dist/plugins/functions/jquery.peity.init.js"></script> --}}
<script src="{{asset('assets/dist/plugins/functions/jquery.peity.init.js')}}"></script>

</head>
<body>
    {{-- @include('admin.header.header') --}}
    <div>
    <img src="{{asset('assets/img/carbanner2 (4).jpg')}}" style="margin: -41px 1px;">
    <div >
        @yield('content')
    </div>
    </div>
    {{-- @include('admin.footer.footer') --}}
    {{-- <div>
        <img src="{{asset('assets/img/carbanner2 (4).jpg')}}">
    </div> --}}
    
    {{-- <div style="background-color:f0e8fd;height:100px;width:100%;margin: -41px 0px;">
        @yield('content1')  
       </div> --}}

</body>
</html>