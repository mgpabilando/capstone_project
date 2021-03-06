        <!--**************************------------------- DELETE pregconsul MODAL -------------------****************************---------->
        <div class="consul-delete res-delete modal fade" id="deletedeliveriesconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletedeliveriesconsul" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Deliveries Record</h5> 
                    </div>
                    <form class="deleteconsul-modal"  class="delete_deliveriesconsul" action="{{route ('deliveries.destroy', 'id')}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            <div class="input-box">
                                <input name="Ddeliveries_id" id="Ddeliveries_id" type="hidden" placeholder="">
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
