        <!--**************************------------------- DELETE diarrhealconsul MODAL -------------------****************************---------->
        <div class="consul-delete modal fade" id="deletediarrhealconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletediarrhealconsul" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Record</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="deleteconsul-modal"  class="delete_diarrhealconsul" action="{{route ('diarrheal.destroy', 'id')}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            <div class="input-box">
                                <input name="Ddiarrheal_id" id="Ddiarrheal_id" type="hidden" placeholder="">
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
