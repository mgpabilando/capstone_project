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
        <p class="fw-bold m-0 p-0 report-tilte" style="color: #ffff;">MONTHLY ACCOMPLISHED REPORT</p>
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
        <p class="text-center fw-bold">MONTHLY ACCOMPLISHED REPORT OF BARANGAY HEALTH WORKERS</p>

        <div class="d-flex justify-content-center">
          <div class="purok-month">
            <p class="text-left fw-bold">Barangay: Macawayan</p>
            <p class="text-left fw-bold">Purok :</p>
            <p class="text-left fw-bold">Month Of: </p>
          </div>
        </div>


        <form id="table-mar" class="d-flex justify-content-center">
          <table style="width: 95%;" class="table table-bordered border-dark">
            <thead>
              <tr>
                <th colspan="7">MATERNAL AND CHILD HEALTH</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th style="width:9%">PREGNANT</th>
                <th style="width:20%">NAME</th>
                <th style="width:10%">AGE</th>
                <th style="width:10" colspan="2">IKA-PIRA NA BATA</th>
                <th colspan="2">LMP</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">1</td>
                <td>data1</td>
                <td>data2</td>
                <td colspan="2">data3</2td>
                <td colspan="2">data4</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th>DELIVERIES</th>
                <th>NAME</th>
                <th>AGE</th>
                <th style="width:10%">DELIVERED</th>
                <th style="width:10%">OUTCOME</th>
                <th>PLACE</th>
                <th style="width:10%">TIME</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">1</td>
                <td>data1</td>
                <td>data2</td>
                <td>data3</td>
                <td>data4</td>
                <td>data5</td>
                <td>data6</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th>EPI</th>
                <th>NAME</th>
                <th>BIRTHDATE</th>
                <th colspan="2">MEDS. GIVEN</th>
                <th colspan="2">DATE</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">1</td>
                <td>data1</td>
                <td>data1</td>
                <td colspan="2">data1</td>
                <td colspan="2">data1</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th>NTP</th>
                <th colspan="6">NAME</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">1</td>
                <td colspan="6">data1</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th colspan="2">FAMILY PLANNING</th>
                <th colspan="2">NAME</th>
                <th colspan="2">METHOD USE</th>
                <th>AGE</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th colspan="2" scope="row">1</td>
                <td colspan="2">data1</td>
                <td colspan="2">data1</td>
                <td>data1</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th colspan="3">CONTROL OF DIARRHEAL DISEASES</th>
                <th colspan="4">NAME</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row" colspan="2">1</td>
                <td colspan="6">data1</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th colspan="7">OTHER SERVICES RENDERED</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td colspan="7">1</td>
              </tr>
            </tbody>


          </table>
        </form>

        <div class="signature-by ms-4">

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