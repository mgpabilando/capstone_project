@include('layouts.includes.head')
<div id="printcontent">
  <div class="container-fluid p-0" id="mreport">
    <nav class="navbar sticky-top navbar-dark bg-primary">
      <div class="container-fluid p-2">
        <a class="{{ Request::is('reports') ? 'active' : '' }}" href="reports"><i class="fas fa-arrow-left" style="color: #ffff;"></i></a>
        <p class="fw-bold m-0 p-0 report-tilte" style="color: #ffff;">MONTHLY ACCOMPLISHED REPORT</p>
        {{-- <button id="MARbtnPrint" type="button" class="btn btn-primary"><i class="fas fa-print"></i> PRINT</button> --}}
        <button onclick="printpage()"><i class="fas fa-print"></i> PRINT</button>
      </div>
    </nav>

    <div class="col-md-12 p-3">
      <div class="d-flex justify-content-center flex-column mar-report">
        <p class="text-center">Republic of the Philippines</p>
        <p class="text-center">Province of Sorsogon</p>
        <p class="text-center">Municipality of Irosin</p>
        <p class="text-center fw-bold">MUNICIPALITY HEALTH OFFICE</p>
        <p class="text-center fw-bold">MONTHLY ACCOMPLISHED REPORT OF BARANGAY HEALTH WORKERS</p>

        <div class="d-flex justify-content-center">
          <div class="purok-month">
            <p class="text-left fw-bold">Barangay: Macawayan</p>
            <p class="text-center"><b>Month of:</b> {{ $todayMonth }}</p>
          </div>
        </div>

        <table id="pregnant" class="display table table-bordered border-1 m-0 border-dark">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">Pregnants</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Height(cm)</th>
              <th class="text-center" scope="col">Weight(kg)</th>
              <th class="text-center" scope="col">Age</th>
              <th class="text-center" scope="col">Pregnancy Order</th>
              <th class="text-center" scope="col">LMP</th>
            </tr>
          </thead>
          <tbody>
            @if ($pregnants)
            @foreach ($pregnants as $pregpatient)
            <tr>
              <th class="text-center">{{ $pregpatient->id }}</th>
              <td class="text-center">{{ $pregpatient->name }}</td>
              <td class="text-center">{{ $pregpatient->height_cm }}</td>
              <td class="text-center">{{ $pregpatient->weight_kg }}</td>
              <td class="text-center">{{ $pregpatient->age }}</td>
              <td class="text-center">{{ $pregpatient->pregnancyorder }}</td>
              <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($pregpatient['lmp'])) }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>


        </table>

        <table id="deliveries" class="display table border-dark  border-1 table-bordered m-0" style="padding: 10px">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">Deliveries</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Age</th>
              <th class="text-center" scope="col">Delivered</th>
              <th class="text-center" scope="col">Outcome</th>
              <th class="text-center" scope="col">Place</th>
            </tr>
          </thead>
          <tbody>
            @if ($Deliveries)
            @foreach ($Deliveries as $deliveriesRec)
            <tr>
              <th class="text-center">{{ $deliveriesRec->id }}</th>
              <td class="text-center">{{ $deliveriesRec->name }}</td>
              <td class="text-center">{{ $deliveriesRec->age }}</td>
              <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($deliveriesRec['date_delivered'])) }}</td>
              <td class="text-center">{{ $deliveriesRec->outcome }}</td>
              <td class="text-center">{{ $deliveriesRec->place }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>

        <table id="epi" class="display table border-dark border-1 table-bordered m-0" style="padding: 10px">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">EPI</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Medicines Given</th>
              <th class="text-center" scope="col">Birthdate</th>

            </tr>
          </thead>
          <tbody>
            @if ($epi)
            @foreach ($epi as $epiRec)
            <tr>
              <th class="text-center">{{ $epiRec->id }}</th>
              <td class="text-center">{{ $epiRec->name }}</td>
              <td class="text-center">{{ $epiRec->meds_given }}</td>
              <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($epiRec['birthdate'])) }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>

        <table id="ntp" class="display table border-dark border-1 table-bordered m-0" style="padding: 10px">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">NTP</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Age</th>
            </tr>
          </thead>
          <tbody>
            @if ($ntp)
            @foreach ($ntp as $ntpRec)
            <tr>
              <th class="text-center">{{ $ntpRec->id }}</th>
              <td class="text-center">{{ $ntpRec->name }}</td>
              <td class="text-center">{{ $ntpRec->age }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>

        <table id="famplan" class="display table border-dark border-1 table-bordered m-0" style="padding: 10px">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">Family Planning</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Age</th>
              <th class="text-center" scope="col">Method Used</th>
            </tr>
          </thead>
          <tbody>
            @if ($familyplanning)
            @foreach ($familyplanning as $familyplanningRec)
            <tr>
              <th class="text-center">{{ $familyplanningRec->id }}</th>
              <td class="text-center">{{ $familyplanningRec->name }}</td>
              <td class="text-center">{{ $familyplanningRec->age }}</td>
              <td class="text-center">{{ $familyplanningRec->method_used }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>

        <table id="diarrheal" class="display table border-dark border-1 table-bordered m-0" style="padding: 10px">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">Control of Diarrheal Problems</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Age</th>
            </tr>
          </thead>
          <tbody>
            @if ($diarrheal)
            @foreach ($diarrheal as $diarrhealRec)
            <tr>
              <th class="text-center">{{ $diarrhealRec->id }}</th>
              <td class="text-center">{{ $diarrhealRec->name }}</td>
              <td class="text-center">{{ $diarrhealRec->age }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>

        <table id="other" class="dsiplay table border-dark border-1 table-bordered m-0" style="padding: 10px">
          <thead>
            <tr role="row">
              <th class="text-center" scope="col">Other Services Rendered</th>
              <th class="text-center" scope="col">Service Rendered</th>
            </tr>
          </thead>
          <tbody>
            @if ($other)
            @foreach ($other as $otherRec)
            <tr>
              <th class="text-center">{{ $otherRec->id }}</th>
              <td class="text-center">{{ $otherRec->service_rendered }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>


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
</div>

<script>
  function printpage() {
    window.print();
  }
</script>

<script>
  $(document).ready(function() {
    $('#deliveries').DataTable({
      searching: false,
      "paging": false,
      "ordering": false,
      "info": false,
      initComplete: function() {
        this.api().columns(0).every(function() {
          var column = this;
          var select = $('<select style="font-weight:800;"><option value="">Purok</option></select>')
            .appendTo($(column.footer()).empty())
            .on('change', function() {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
              );

              column
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();
            });

          column.data().unique().sort().each(function(d, j) {
            select.append('<option value="' + d + '">' + d + '</option>')
          });
        });
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#epi').DataTable({
      searching: false,
      "paging": false,
      "ordering": false,
      "info": false
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#ntp').DataTable({
      searching: false,
      "paging": false,
      "ordering": false,
      "info": false
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#diarrheal').DataTable({
      searching: false,
      "paging": false,
      "ordering": false,
      "info": false
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#famplan').DataTable({
      searching: false,
      "paging": false,
      "ordering": false,
      "info": false
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#other').DataTable({
      searching: false,
      "paging": false,
      "ordering": false,
      "info": false
    });
  });
</script>
