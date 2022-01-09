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
                <button onclick="printpage()"><i class="fas fa-print"></i> PRINT</button>
            </div>
        </nav>

        <div class="col-md-12 p-0">
            <div class="d-flex justify-content-center flex-column mar-report">
                <div class="civil-srvc ms-5">
                    <p class="fw-bold text-center">DAILY TIME RECORD</p>
                    <div class="d-flex flex-grid justify-content-center">
                        <input type="text" style="width: 300px ; border-left: 0px; border-top: 0px; border-right: 0px; text-align: center; " value="{{ Auth::user()->fname }} {{ Auth::user()->lname }}">
                    </div>
                    <p class="text-center" style="font-weight: 500">Name</p>
                    <p class="text-center"><b>Month of:</b> {{ $todayMonth }}</p>
                </div>
                    <b>Morning Record</b>
                    <table id="dtr" class="table table-responsive table-bordered mt-3">
                        <thead class="table-primary">
                          <tr>
                            <th>DATE</th>
                            <th>TIME IN </th>
                            <th>TIME OUT </th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($morningrecord)
                            @foreach ($morningrecord as $morningrecord)
                            <tr>
                              <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($morningrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                              <td>{{ $morningrecord->Arrival }}</td>
                              <td>{{ $morningrecord->Departure }}</td>
                            </tr>
                            @endforeach
                          @endif
                        </tbody>
                      </table>
                      <b>Afternoon Record</b>
                      <table id="dtr" class="table table-responsive table-bordered mt-3">
                        <thead class="table-primary">
                          <tr>
                            <th>DATE</th>
                            <th>TIME IN </th>
                            <th>TIME OUT </th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($afternoonrecord)
                            @foreach ($afternoonrecord as $afternoonrecord)
                            <tr>
                              <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($afternoonrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                              <td>{{ $afternoonrecord->Arrival }}</td>
                              <td>{{ $afternoonrecord->Departure }}</td>
                            </tr>
                            @endforeach
                          @endif
                        </tbody>
                      </table>

                      <b>Undertime Record</b>
                      <table id="dtr" class="table table-responsive table-bordered mt-3">
                        <thead class="table-primary">
                          <tr>
                            <th>DATE</th>
                            <th>HOUR/S </th>
                            <th>MINUTE/S </th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($undertimerecord)
                            @foreach ($undertimerecord as $undertimerecord)
                            <tr>
                              <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($undertimerecord->created_at)->format('d-m-Y') ?? '' }}</th>
                              <td>{{ $undertimerecord->Hour }}</td>
                              <td>{{ $undertimerecord->Minute }}</td>
                            </tr>
                            @endforeach
                          @endif
                        </tbody>
                      </table>
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