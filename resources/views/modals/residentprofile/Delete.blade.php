<!--**************************------------------- DELETE RESIDENT MODAL -------------------****************************---------->
<div class="res-delete modal fade" id="deleteResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete Resident Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="delete-resident" action="{{route ('residentprofile.destroy', 'resident_id')}}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <div class="input-box">
                        <input name="resident_id" id="resident_id" type="hidden" placeholder="">
                    </div>
                    <h5>Are you sure you want to delete this?</h5>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Resident</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--**************************------------------- DELETE MODAL ENDS HERE-------------------****************************---------->
