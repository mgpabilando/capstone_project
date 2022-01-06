<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reports.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>BHMS</title>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="{{ Request::is('reports') ? 'active' : '' }}" href="reports"><i class="fas fa-arrow-left" style="color: #ffff;"></i></a>
                <p class="fw-bold m-0 p-0 report-tilte" style="color: #ffff;">MEDICINE REQUEST FORM</p>
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
                <p class="text-center fw-bold">MEDICINE REQUEST FORM</p>

                <form id="table-mar" class="d-flex justify-content-center mt-4">
                    <table style="width: 80%;" class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th style="width: 20%">QUANTITY</th>
                                <th style="width: 80%">MEDICINE NAME</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($medreq)
                                @foreach ($medreq as $medreq)
                                <tr>
                                    <td class="text-center">{{ $medreq->med_quantity }}</td>
                                    <td class="text-center">{{ $medreq->medicine_name }}</td>
                                </tr> 
                                @endforeach
                            @endif
                            
                        </tbody>
                    </table>
                </form>

                <div class="signature-by ms-4">

                    <div class="d-flex flex-grid bhw-signature">
                        <div class="submitted-by">
                            <input type="text" name="med" id="med" value="{{ Carbon\Carbon::now()->format('M-d-Y') }}">
                            <hr style="margin: 0">
                            <p class="fw-bold worker-type">Date Requested</p>
                        </div>
                    </div>

                    <div class="d-flex flex-grid noted-by ">
                        <div class="noted-sign">
                            <p class="submitted-worker">Requested by:</p>
                            <input type="text" class="sub-name" name="" value="">
                            <p class="fw-bold worker-type">DOH NDP Nurse - II</p>
                        </div>

                        <div class="noted-sign-cap">
                            <p class="submitted-worker">Noted by:</p>
                            <input type="text" class="sub-name me-5" name="" value="">
                            <p class="fw-bold worker-type">Barangay Captain</p>
                        </div>
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

</body>

</html>