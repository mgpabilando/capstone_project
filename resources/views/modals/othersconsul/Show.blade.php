<div class="consul-show modal fade" id="viewotherconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="show-consult" method="GET" action=" {{route('other.show', 'id')}}">
                @csrf
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box">
                            <input name="Vother_id" id="Vother_id" type="block" placeholder="" hidden>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-box col-6 pb-3">
                            <div class="details">Other Service Rendered:</div>
                            <input type="text" id="Votherservice" name="Votherservice" placeholder="" required readonly>
                        </div>
                        <div class="input-box col-6 pb-3">
                            <div class="details">Date:</div>
                            <input type="date" id="Vdaterec" name="Vdaterec" placeholder="" required readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>