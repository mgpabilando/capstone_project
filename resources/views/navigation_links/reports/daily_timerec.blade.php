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
                <button onclick="printpage()"><i class="fas fa-print"></i> PRINT</button>
            </div>
        </nav>

        <div class="col-md-12 p-0">
            <div class="d-flex justify-content-center flex-column mar-report">
                <h4>CIVIL SERVICE FORM No.48</h4>
                <p>DAILY TIME RECORD</p>
                <p>Name</p>
                <p>For the month of </p>
                <p>Officials hours for arrival Regular days</p>
                <p>and departure Saturdays</p>

                <form id="table-mar" class="d-flex justify-content-center">
                    <table style="width: 90%" class="table table-bordered border-dark">

                        <thead>
                            <tr>
                                <th style="width:20%">AM</th>
                                <th style="width:80%">PM</th>
                            </tr>
                            <tr>
                                <th style="width:20%">DATE</th>
                                <th style="width:80%">NAME</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</td>
                                <td>data1</td>
                            </tr>
                        </tbody>


                    </table>
                </form>

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