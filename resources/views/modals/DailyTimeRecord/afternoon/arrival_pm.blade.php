<div class="modal fade dtr" id="AFTERNOON" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>AFTERNOON DAILY RECORD</h2>
      </div>
      <div class="modal-body">
        <form action="{{ route('dtr.afternoonarrival') }}" method="POST">
          @csrf
          <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
          <input id="timein" name="timein" type="time" class="mb-2" value="{{ Carbon\Carbon::now()->format('H:i') }}">
          <div class="d-flex justify-content-center">
            <button class="col-md-3 btn btn-success">TIME IN</button>
          </div>
        </form>
      </div>
      <div class="modal-footer d-flex ">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      
    
