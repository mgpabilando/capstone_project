<!--**************************------------------- DELETE BHW MODAL -------------------****************************---------->
<div class="bhw-delete modal fade" id="deletebhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletebhw" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete BHW Profile</h5> 
            </div>
            <form class="bhw-modal"  class="delete_bhw" action="{{route ('bhw.destroy', 'user_id')}}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <div class="input-box">
                        <input name="user_id" class="deleteuser_id" type="hidden" placeholder="">
                    </div>
                    <h5>Are you sure you want to delete this?</h5>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--**************************------------------- DELETE MODAL ENDS HERE-------------------****************************---------->
