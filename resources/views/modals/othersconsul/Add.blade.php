<div class="consul-add modal fade" id="addotherconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add-consult" action="{{route ('other.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Other Service Rendered:</div>
                            <input type="text" id="otherservice" name="otherservice" placeholder="" required>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Date:</div>
                            <input type="date" id="daterec" name="daterec" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        
    </script>
@endsection