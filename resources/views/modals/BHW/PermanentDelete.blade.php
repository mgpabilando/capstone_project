<!--**************************------------------- DELETE RESIDENT MODAL -------------------****************************---------->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete BHW Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="delete-resident" action="{{route ('bhws.permanentdelete', 'user_id')}}" method="GET">
                @csrf
                <div class="modal-body">
                    <div class="input-box">
                        <input name="user_id" id="deleteuser_id" type="hidden" placeholder="">
                    </div>
                    <h5>This will be removed permanently. Do you want to continue?</h5>
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
