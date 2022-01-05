<div class="modal fade dtr" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="morning-tab" data-bs-toggle="tab" data-bs-target="#morning" type="button" role="tab" aria-controls="morning" aria-selected="true">MORNING</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="afternoon-tab" data-bs-toggle="tab" data-bs-target="#afternoon" type="button" role="tab" aria-controls="afternoon" aria-selected="false">AFTERNOON</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="undertime-tab" data-bs-toggle="tab" data-bs-target="#undertime" type="button" role="tab" aria-controls="undertime" aria-selected="false">UNDERTIME</button>
          </li>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="dtr">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="morning" role="tabpanel" aria-labelledby="morning-tab">
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
              
              <div class="tab-content" id="nav-tabContent">
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
                
                <div class=" tab-pane fade" id="timeout-am" role="tabpanel" aria-labelledby="nav-out-am-tab">
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

            <div class="tab-pane fade" id="afternoon" role="tabpanel" aria-labelledby="afternoon-tab">
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
                  {{-- @if($afternoonrecord)
                    @foreach ($afternoonrecord as $afternoonrecord)
                    <tr>
                      <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($afternoonrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                      <td>{{ $afternoonrecord->Arrival }}</td>
                      <td>{{ $afternoonrecord->Departure }}</td>
                    </tr>
                    @endforeach
                  @endif --}}
                </tbody>
              </table>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="timein-pm" role="tabpanel" aria-labelledby="nav-in-pm-tab">
                  <form action="{{ route('dtr.arrival') }}" method="POST">
                    @csrf
                    <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                    <input id="timein" name="timein" type="time" class="mt-4" value={{ $todayTime }}>
                    <div class="d-flex justify-content-center">
                      <button class="col-md-3 btn btn-success">TIME IN</button>
                    </div>
                  </form>
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
                
                <div class="tab-pane fade" id="timeout-pm" role="tabpanel" aria-labelledby="nav-out-pm-tab">
                  <form action="{{ route('dtr.arrival') }}" method="POST">
                    @csrf
                    <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                    <input id="timein" name="timein" type="time" class="mt-4" value={{ $todayTime }}>
                    <div class="d-flex justify-content-center">
                      <button class="col-md-3 btn btn-success">TIME IN</button>
                    </div>
                  </form>
                  <form action="{{ route('dtr.departure', $morningrecord->id) }}" method="POST">
                    @csrf
                    <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
                    <input type="text" name="id" id="id" value={{$morningrecord->id}} hidden>
                    <input id="timeout" name="timeout" type="time" class="mt-4" value={{ $todayTime }}>
                    <div class="d-flex justify-content-center">
                      <button class="col-md-3 btn btn-primary">TIME OUT</button>
                    </div>
                  </form>

                  <input type="time" class="mt-4">
                  <div class="d-flex justify-content-center">
                    <input type="button" class="col-md-3 btn btn-primary" value="TIME IN">
                  </div>

                  <input type="time" class="mt-4">
                  <div class="d-flex justify-content-center">
                    <input type="button" class="col-md-3 btn btn-primary" value="TIME OUT">
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="undertime" role="tabpanel" aria-labelledby="undertime-tab">
              <div class="d-flex justify-content-center">
                <input type="number" class="col-md-6" placeholder="HOUR">
                <input type="number" class="col-md-6" placeholder="MINUTE">
              </div>
              <div class="d-flex justify-content-center">
                <input type="button" class="col-md-3 btn btn-primary" value="SUBMIT">
              </div>
              <table class="table table-bordered mt-3">
                <thead class="table-primary">
                  <tr>
                    <th style="width: 50%;">HOUR</th>
                    <th style="width: 50%;">MINUTE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>hour</th>
                    <td>minute</td>
                  </tr>
                </tbody>
              </table>
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