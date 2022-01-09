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
  <div class="container-fluid p-0" is="mreport">
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="{{ Request::is('reports') ? 'active' : '' }}" href="reports"><i class="fas fa-arrow-left" style="color: #ffff;"></i></a>
        <p class="fw-bold m-0 p-0 report-tilte" style="color: #ffff;">MONTHLY VISITOR REPORT</p>
        <button onclick="printpage()"><i class="fas fa-print"></i> PRINT</button>
      </div>
    </nav>

    <div class="col-md-12 p-0">
      <div class="d-flex justify-content-center flex-column mar-report">
        <p class="text-center">Republic of the Philippines</p>
        <p class="text-center">Province of Sorsogon</p>
        <p class="text-center">Municipality of Irosin</p>
        <p class="text-center fw-bold">MUNICIPALITY HEALTH OFFICE</p>
        <p class="text-center fw-bold">MONTHLY ACCOMPLISHED REPORT OF BARANGAY HEALTH WORKERS</p>

        <div class="d-flex justify-content-center">
          <div class="purok-month">
            <p class="text-left fw-bold">Barangay: Macawayan</p>
          </div>
        </div>


        <form id="table-mar" class="d-flex justify-content-center">
          <table style="width: 90%" class="table table-bordered border-dark">

            <thead>
              <tr>
                <th style="width:30%">DATE</th>
                <th style="width:80%">NAME</th>
              </tr>
            </thead>

            <tbody>
              @if ($lastRecordDate)
                @foreach ($lastRecordDate as $lastRecordDate)
                <tr>
                  <th class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($lastRecordDate['created_at'])) }}</td>
                  <td class="text-center" >{{ $lastRecordDate->fname }} {{ $lastRecordDate->mname }} {{ $lastRecordDate->lname }}</td>
                </tr>
                @endforeach
              @endif
              
            </tbody>


          </table>
        </form>

        <div class="signature-by ms-5">

          <div class="d-flex flex-grid bhw-signature">
            <div class="submitted-by">
              <p class="submitted-worker">Submitted by:</p>
              <input type="text" class="sub-name" name="" value="">
              <p class="fw-bold worker-type">Barangay Health Worker</p>
            </div>
          </div>

          <div class="d-flex flex-grid noted-by ">
            <div class="noted-sign">
              <p class="submitted-worker">Noted by:</p>
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