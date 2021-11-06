<div class="consul-add modal fade" id="addepiconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add-consult" action="{{route ('healthconsultation.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-search d-flex justify-content-center">
                        
                        <input type="text" id="hc-search-input" placeholder="Search...">
                        {{-- <span class="hc-search-btn" type="submit"><i class="fas fa-search"></i></span> --}}
                        <div id="residentlist"></div>
                        {{ csrf_field() }}
                    </div>
                    <hr>
                    <div class="res_prof row">
                        <div class="input-box col pb-3">
                            <div class="details">Name:</div>
                            <input type="text" id="resname" placeholder="" required>
                        </div>                           
                        <div class="input-box col pb-3">
                            <div class="details">Resident ID:</div>
                            <input type="text" id="resID" placeholder="" required>
                        </div>

                        <div class="input-box col pb-3">
                            <div class="details">Family No:</div>
                            <input type="text" id="resfamilyhead" placeholder="" required>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="details">Meds Given:</div>
                        <input type="text" id="medsgiven" placeholder="" required>
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