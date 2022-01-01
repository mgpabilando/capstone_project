<!-- Modal for Delete -->
    <div class="modal fade" id="deletenewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="add-resident" action="{{route ('medicinerequest.destroy', 'id')}}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-body m-0 p-0">
                    <div class="input-box">
                        <input name="id" id="id" type="hidden" placeholder="">
                    </div>
                    <h6 class="p-0 m-0">Are you sure you want to delete this?</h6>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Resident</button>
            </div>
            </form>
        </div>
        </div>
    </div>