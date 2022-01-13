<!--**************************------------------- DELETE RESIDENT MODAL -------------------****************************---------->
<div class="res-delete modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="delete" action="{{route ('pregnancy.permanentdelete', 'pregnant_id')}}" method="GET">
                @csrf
                <div class="modal-body">
                    <div class="input-box">
                        <input name="Dpregnant_id" id="Dpregnant_id" type="hidden" placeholder="">
                    </div>
                    <p style="font-size: 15px">This will be removed permanently. Do you want to continue?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--**************************------------------- DELETE MODAL ENDS HERE-------------------****************************---------->
