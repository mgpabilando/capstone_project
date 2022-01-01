<!-- Modal for Edit -->
    <div class="modal fade" id="editnewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add-resident" action="{{route ('medicinerequest.update', 'id')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">

                <div class="input-box">
                    <div class="text-start details">Medicine Name</div>
                    <input class="name align-text-left" name="medicine_name" id="medicine_name" type="text" placeholder="" readonly>
                </div>
                <div class="input-box">
                    <div class="text-start details">Medicine Name</div>
                    <input class="name align-text-left" name="med_quantity" id="med_quantity" type="text" placeholder="" readonly>
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submt" class="btn btn-primary">Update</button>
            </div>

            </form>
        </div>

        </div>

        </div> 