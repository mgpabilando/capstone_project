<div class="modal fade dtr" id="UNDERTIME" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>MORNING DAILY RECORD</h2>
      </div>
      <div class="modal-body">
        <form action="{{ route('dtr.undertime') }}" method="POST">
          @csrf
          <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
          <input type="number" placeholder="HOUR" id="Hour" name="Hour">
          <input type="number" placeholder="MINUTE" id="Minute" name="Minute">
          <div class="d-flex justify-content-center">
            <button class="col-md-3 btn btn-success mt-2">SUBMIT</button>
          </div>
        </form>         
      </div>
      <div class="modal-footer d-flex ">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      
    


