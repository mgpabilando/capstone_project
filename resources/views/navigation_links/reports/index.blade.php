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
                    <input type="text" style="border-left: 0px; border-right: 0px; border-top: 0px; width: 25%;">
                </div>
                    <p class="fw-bold text-center">NAME</p>

                <form id="table-mar" class="d-flex justify-content-center mt-4">

                    <table id="DTR-datatable" class="table table-bordered table-hover" style="width: 95%;">
                        <thead>
                            <tr role="row">
                                <th  scope="col">Date</th>
                                <th  scope="col">Arrival</th>
                                <th  scope="col">Departure</th>
                                <th  scope="col">Interval</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-morning-id="">
                              <th  style="text-transform: uppercase;"> </th>
                              <td> </td>
                              <td > </td>
                              <td > </td>
                            </tr>
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

</body>

</html>



