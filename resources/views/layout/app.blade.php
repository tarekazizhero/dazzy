<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> 
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}"> 


</head>
<body>
    @include('layout.menubar')


    @yield('content')



    @include('layout.footer')
<script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
<script src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{URL::asset('js/popper.min.js')}}"></script>
</body>
</html>  