<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BHMS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-341.min.js"></script>  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome/css/all.css">

    <!-- Styles -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/LoginandRegister.css">
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
    @yield('scripts')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-341.min.js"></script>  


</body>
</html>
