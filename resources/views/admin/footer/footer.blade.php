<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<body>
    {{-- @include('admin.header.header') --}}
    <div style="background-color:#f0e8fd;height:100px;width:100%;margin: 0px 0px;">
     @yield('content1')  
    </div>
   
</body>
</html>