<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BHMS</title>
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}

    {{-- <script language="JavaScript" type="text/javascript" src="{{ asset ('js/app.js') }}" defer></script>  --}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('css/LoginandRegister.css') }}">
    <link rel="icon" href="images/macawayan logo.png">
    
    <style>
        body{
            background-image: url(images/bmhms-background.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    @yield('content')
    

 <!-- Scripts -->
 <script language="JavaScript" type="text/javascript" src="{{ asset ('/js/bootstrap.js') }}"></script>

 @yield('scripts')

</body>
</html>
