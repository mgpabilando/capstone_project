    <title>BHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-ui-1.13.0.custom\jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resident_profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bhw.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/manageaccounts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/health_consult.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/manageaccounts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/purok.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css')}}">
    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    {{-- <link href="{{ asset ('fullcalendar/lib/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('fullcalendar/lib/main.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="/FullCalendar/fullcalendar.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js" charset="utf-8"></script>
    <link href="{{ asset('css/chart_style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/MARprint.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/MVRprint.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/medrequestPrint.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/print.js') }}" charset="utf-8"></script>
