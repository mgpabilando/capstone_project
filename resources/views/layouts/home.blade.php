<!DOCTYPE html>
<html>
<head>
    @include('layouts.includes.head')
</head>
<body>
    <div class="wrapper">

    @include('layouts.includes.sidebar')
    
    @yield('content')
    
    </div>
    
    @include('layouts.includes.footer')

    @include('sweetalert::alert')

    @yield('scripts')
    





</body>
</html>

