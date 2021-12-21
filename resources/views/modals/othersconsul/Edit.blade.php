<div class="consul-show modal fade" id="editotherconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="edit-consult" action="{{route('other.update', 'id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box">
                            <input name="Eother_id" id="Eother_id" type="block" placeholder="" hidden>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-box col-6 pb-3">
                            <div class="details">Other Service Rendered:</div>
                            <input type="text" id="Eotherservice" name="Eotherservice" placeholder="" required>
                        </div>
                        <div class="input-box col-6 pb-3">
                            <div class="details">Date:</div>
                            <input type="date" id="Edaterec" name="Edaterec" placeholder="" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>