<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reports.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>BHMS</title>
</head>

<body>
    <div class="container-fluid p-0" id="mreport">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="{{ Request::is('reports') ? 'active' : '' }}" href="reports"><i class="fas fa-arrow-left" style="color: #ffff;"></i></a>
                <p class="fw-bold m-0 p-0 report-tilte" style="color: #ffff;">DAILY TIME RECORD</p>
                {{-- <button id="MARbtnPrint" type="button" class="btn btn-primary"><i class="fas fa-print"></i> PRINT</button> --}}
                <button onclick="printpage()"><i class="fas fa-print"></i> PRINT</button>
            </div>
        </nav>

        <div class="col-md-12 p-0">
            <div class="d-flex justify-content-center flex-column mar-report">
                <p class="text-center">Republic of the Philippines</p>
                <p class="text-center">Province of Sorsogon</p>
                <p class="text-center">Municipality of Irosin</p>
                <p class="text-center fw-bold">MUNICIPALITY HEALTH OFFICE</p>
                <p class="text-center fw-bold">DAILY TIME RECORD</p>

                <div class="justify-content-center mt-4 d-flex">
                    <input type="text" style="border-left: 0px; border-right: 0px; border-top: 0px; width: 25%; text-align:center;" 
                    value="{{ Auth::user()->fname }} {{ Auth::user()->lname }}">
                </div>
                    <p class="fw-bold text-center">NAME</p>

                <form id="table-mar" class="d-flex justify-content-center mt-4">

                    <table id="DTR" class="table table-bordered table-hover" style="width: 95%;">
                        <thead>
                            <tr role="row">
                                <th  class="text-center" scope="col">Date</th>
                                <th  class="text-center" scope="col">Arrival</th>
                                <th  class="text-center" scope="col">Departure</th>
                                <th  class="text-center" scope="col">Interval</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($morning as $morningrecord )
                                <tr data-morning_id="{{ $morningrecord->id }}">
                                <th class="text-center" style="text-transform: uppercase;">{{Carbon\Carbon::parse($morningrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                                <td class="text-center">{{ Carbon\Carbon::parse($morningrecord->Arrival)->format('g:i:s A')}}</td>
                                <td class="text-center">{{ Carbon\Carbon::parse($morningrecord->Departure)->format('g:i:s A')}}</td>
                                <td class="text-center">{{ gmdate("H:i:s", $morningrecord->total_time) }}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>

                <div class="signature-by ms-5">

                    <div class="d-flex justify-content-end bhw-signature">
                        <div class="submitted-by me-5">
                            <input type="text" name="med" id="med"  >
                            <p class="fw-bold text-center worker-type">Signature Over Printed Name</p>
                        </div>
                    </div>


            </div>
        </div>
    </div>


    <script>
        function printpage() {
            window.print();
        }
    </script>

    @section('scripts')
    <script>
        $('#DTR').DataTable
        ({
            "columnDefs": [
                {
                    "targets": [ 1 ],
                    "visible": false,
                    "searchable": false
                }
            ],

            "order": [1, 'desc']

            
        });
    </script>
    @endsection

</body>

</html>



