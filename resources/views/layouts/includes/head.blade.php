    <title>BHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">

    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
    </script>

    <!---------------------------          STYLESHEET           ---------------------------->
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resident_profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bhw.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/manageaccounts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/health_consult.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/manageaccounts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/purok.css') }}">

    <link href="{{asset ('/js/FullcalendarV5/lib/main.css') }}" rel='stylesheet' />
    

    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
    <link rel="stylesheet" href="{{asset ('/FullCalendar/fullcalendar.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chart_style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('select2\dist\css\select2.css')}}"/>
    <!---------------------------          SCRIPTS           ---------------------------->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" charset="utf-8"></script>
    <script src="/js/FullcalendarV5/lib/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.10.1/locales-all.min.js,npm/fullcalendar@5.10.1/locales-all.min.js">
