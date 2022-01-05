<div class="modal fade dtr" id="UNDERTIME" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <H2>UNDERTIME</H2>
      </div>
      <div class="modal-body">
        <table id="dtr" class="table table-responsive table-bordered mt-3">
          <thead class="table-primary">
            <tr>
              <th>DATE</th>
              <th>HOUR/S </th>
              <th>MINUTE/S </th>
            </tr>
          </thead>
          <tbody>
            @if($undertimerecord)
              @foreach ($undertimerecord as $undertimerecord)
              <tr>
                <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($undertimerecord->created_at)->format('d-m-Y') ?? '' }}</th>
                <td>{{ $undertimerecord->Hour }}</td>
                <td>{{ $undertimerecord->Minute }}</td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
        <div class="dtr">
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
      </div>
    
      <div class="modal-footer d-flex ">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>