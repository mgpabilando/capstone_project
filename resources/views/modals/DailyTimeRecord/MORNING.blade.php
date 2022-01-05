<div class="modal fade dtr" id="MORNING" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>MORNING DAILY RECORD</h2>
      </div>
      <div class="modal-body">
        <div class="dtr">
          <div class="tab-content" id="myTabContent">
            <nav>
              <div class="nav nav-pills" id="nav-tab" role="tablist">
                <button class="nav-link active col-md-6" id="nav-in-am-tab" data-bs-toggle="tab" data-bs-target="#timein-am" type="button" role="tab" aria-controls="timein-am" aria-selected="true">ARRIVAL</button>
                <button class="nav-link col-md-6" id="nav-out-am-tab" data-bs-toggle="tab" data-bs-target="#timeout-am" type="button" role="tab" aria-controls="timeout-am" aria-selected="false">DEPARTURE</button>
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
            
            <div class="tab-pane fade show active" id="timein-am" role="tabpanel" aria-labelledby="nav-in-am-tab">
              <form action="{{ route('dtr.arrival') }}" method="POST">
                @csrf
                <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                <input id="timein" name="timein" type="time" class="mt-4" value={{ $todayTime }}>
                <div class="d-flex justify-content-center">
                  <button class="col-md-3 btn btn-success">TIME IN</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade show" id="timeout-am" role="tabpanel" aria-labelledby="nav-out-am-tab">
              <form action="{{ route('dtr.departure', $morningrecord->id) }}" method="POST">
                  @csrf
                  <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                  <input type="text" name="id" id="id" value={{$morningrecord->id}} hidden>
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
