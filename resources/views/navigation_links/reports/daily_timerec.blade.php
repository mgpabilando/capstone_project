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
                <p class="fw-bold m-0 p-0 report-tilte" style="color: #ffff;">DAILY TIME RECORD</p>
                <button onclick="printpage()"><i class="fas fa-print"></i> PRINT</button>
            </div>
        </nav>

        <div class="col-md-12 p-0">
            <div class="d-flex justify-content-center flex-column mar-report">
                <div class="civil-srvc ms-5">
                    <h5>CIVIL SERVICE FORM No.48</h5>
                    <p class="fw-bold text-center">DAILY TIME RECORD</p>
                    <div class="d-flex flex-grid justify-content-center">
                        <input type="text" style="width: 300px ; border-left: 0px; border-top: 0px; border-right: 0px; text-align: center; ">
                    </div>
                    <p class="fw-bold text-center">Name</p>
                    <p class="fst-italic m-0">For the month of </p>
                    <p class="fst-italic m-0">Officials hours for arrival Regular days</p>
                    <p class="fst-italic mt-0 mb-3">and departure Saturdays</p>
                    </>

                    <form id="table-mar" class="d-flex justify-content-center">
                        <table style="width: 90%" class="table table-bordered border-dark">

                            <thead>
                                <tr>
                                    <th style="width:20%; vertical-align: middle;" rowspan="2">DAY</th>
                                    <th colspan="2">AM</th>
                                    <th colspan="2">PM</th>
                                    <th colspan="2">UNDERTIME</th>
                                </tr>
                                <tr>
                                    <th>ARRIVAL</th>
                                    <th>DEPARTURE</th>
                                    <th>ARRIVAL</th>
                                    <th>DEPARTURE</th>
                                    <th>HOURS</th>
                                    <th>MINUTES</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>date</td>
                                    <td>date</td>
                                    <td>date</td>
                                    <td>date</td>
                                    <td>date</td>
                                    <td>date</td>
                                    <td>date</td>
                                </tr>
                            </tbody>

                            <tbody>
                            <tfoot>
                                <td style="text-align:center; font-weight: bold;" colspan="5">TOTAL</td>
                                <td>date</td>
                                <td>date</td>
                            </tfoot>
                            </tbody>
                        </table>
                    </form>
                    <div class="civil-srvc">
                        <p class="fst-italic">I certify on my honor that the above is a true and correct report of the hours of work performed, record of which was made daily at the time of arrival at and departure from office.</p>
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