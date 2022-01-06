<div class="modal fade dtr" id="departure_am" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>MORNING DAILY RECORD</h2>
      </div>
      <div class="modal-body">
        <form action="{{ route('dtr.departure', $morningrecord->id) }}" method="POST">
          @csrf
          <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
          <input type="text" name="id" id="id" value={{$morningrecord->id}} hidden>
          <input id="timeout" name="timeout" type="time" class="mb-2" value="{{ Carbon\Carbon::now()->format('H:i') }}">
          <div class="d-flex justify-content-center">
            <button class="col-md-3 btn btn-primary">TIME OUT</button>
          </div>
        </form>

      </div>
      <div class="modal-footer d-flex ">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      
    
