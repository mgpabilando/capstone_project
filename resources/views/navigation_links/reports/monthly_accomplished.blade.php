@include('layouts.includes.head')
<div id="printcontent">
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
  
          <div class="table-responsive mb-3">
            <table id="" class="display table table-bordered table-striped table-hover">
                  <thead>
                      <tr role="row">
                          <th class="text-center" scope="col">Patient_ID</th>
                          <th class="text-center" scope="col">Resident_ID</th>
                          <th class="text-center" scope="col">Name</th>
                          <th class="text-center" scope="col">Height(cm)</th>
                          <th class="text-center" scope="col">Weight(kg)</th>
                          <th class="text-center" scope="col">Age</th>
                          <th class="text-center" scope="col">Pregnancy Order</th>
                          <th class="text-center" scope="col">Last Menstrual Period</th>
                          <th class="text-center" scope="col">Date Added</th>
                          <th class="text-center" scope="col">Date Updated</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if ($pregnants)
                      @foreach ($pregnants as $pregpatient)
                      <tr>
                        <th class="text-center">{{ $pregpatient->id }}</th>
                        <td class="text-center">{{ $pregpatient->resident_id }}</td>
                        <td class="text-center">{{ $pregpatient->name }}</td>
                        <td class="text-center">{{ $pregpatient->height_cm }}</td>
                        <td class="text-center">{{ $pregpatient->weight_kg }}</td>
                        <td class="text-center">{{ $pregpatient->age }}</td>
                        <td class="text-center">{{ $pregpatient->pregnancyorder }}</td>
                        <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($pregpatient['lmp'])) }}</td>
                        <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($pregpatient['created_at'])) }}</td>
                        <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($pregpatient['updated_at'])) }}</td>
                      </tr>
                      @endforeach
                    @endif
                  </tbody>
            </table>
          </div>
      
          <div class="table-responsive mb-3">
            <table id="" class="display table table-bordered table-striped table-hover" style="padding: 10px">
                <thead>
                    <tr role="row">
                        <th class="text-center" scope="col">Patient_ID</th>
                        <th class="text-center" scope="col">Resident_ID</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Age</th>
                        <th class="text-center" scope="col">Date Delivered</th>
                        <th class="text-center" scope="col">Outcome</th>
                        <th class="text-center" scope="col">Place</th>
                        <th class="text-center" scope="col">Date Added</th>
                        <th class="text-center" scope="col">Date Updated</th>
                    </tr>
                </thead>
                <tbody>
                  @if ($Deliveries)
                    @foreach ($Deliveries as $deliveriesRec)
                    <tr>
                      <th class="text-center">{{ $deliveriesRec->id }}</th>
                      <td class="text-center">{{ $deliveriesRec->resident_id }}</td>
                      <td class="text-center">{{ $deliveriesRec->name }}</td>
                      <td class="text-center">{{ $deliveriesRec->age }}</td>
                      <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($deliveriesRec['date_delivered'])) }}</td>
                      <td class="text-center">{{ $deliveriesRec->outcome }}</td>
                      <td class="text-center">{{ $deliveriesRec->place }}</td>
                      <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($deliveriesRec['created_at'])) }}</td>
                      <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($deliveriesRec['updated_at'])) }}</td>
                    
                    </tr>
                    @endforeach
                  @endif                        
                </tbody>
            </table>
          </div>
  
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
@include('layouts.includes.footer')


