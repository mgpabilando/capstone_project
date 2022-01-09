    <title>BHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset ('images\macawayan logo.png') }}">
    <!---------------------------          STYLESHEET           ---------------------------->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reports.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/resident_profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bhw.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/manageaccounts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/health_consult.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/manageaccounts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/purok.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chart_style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="{{asset('select2/dist/css/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('js/ijaboCropTool-master/ijaboCropTool.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/reports.css') }}"> --}}

    <!---------------------------          SCRIPTS           ---------------------------->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.10.1/locales-all.min.js,npm/fullcalendar@5.10.1/locales-all.min.js"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script> --}}
