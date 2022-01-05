<div class="modal fade dtr" id="AFTERNOON" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>AFTERNOON DAILY RECORD</h2>
      </div>
      <div class="modal-body">
        <div class="dtr">
          <div class="tab-content" id="myTabContent">
            <nav>
              <div class="nav nav-pills" id="nav-tab" role="tablist">
                <button class="nav-link active col-md-6" id="nav-in-pm-tab" data-bs-toggle="tab" data-bs-target="#timein-pm" type="button" role="tab" aria-controls="timein-pm" aria-selected="true">ARRIVAL</button>
                <button class="nav-link col-md-6" id="nav-out-pm-tab" data-bs-toggle="tab" data-bs-target="#timeout-pm" type="button" role="tab" aria-controls="timeout-pm" aria-selected="false">DEPARTURE</button>
              </div>
            </nav>
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
            
            <div class="tab-pane fade show active" id="timein-pm" role="tabpanel" aria-labelledby="nav-in-pm-tab">
              <form action="{{ route('dtr.afternoonarrival') }}" method="POST">
                @csrf
                <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                <input id="timein" name="timein" type="time" class="mt-4" value={{ $todayTime }}>
                <div class="d-flex justify-content-center">
                  <button class="col-md-3 btn btn-success">TIME IN</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade show" id="timeout-pm" role="tabpanel" aria-labelledby="nav-out-pm-tab">
              <form action="{{ route('dtr.afternoondeparture', $afternoonrecord->id) }}" method="POST">
                  @csrf
                  <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                  <input type="text" name="id" id="id" value={{$afternoonrecord->id}} hidden>
                  <input id="timeout" name="timeout" type="time" class="mt-4" value={{ $todayTime }}>
                  <div class="d-flex justify-content-center">
                    <button class="col-md-3 btn btn-primary">TIME OUT</button>
                  </div>
              </form>
            </div> 
          </div>
        </div>
      </div>

      <div class="modal-footer d-flex ">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>    
</div>
