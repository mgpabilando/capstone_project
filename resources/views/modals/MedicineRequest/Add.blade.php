<!-- Adding new medicine Modal -->
    <div class="modal fade" id="addnewmedicine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add New Medicine</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
            <form class="" action="{{route ('medicinerequest.store')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="">Medicine Name</label>
                <input type="text" name="medicine_name" class="form-control" id="" placeholder="">
                </div>
    
                <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" name="med_quantity" class="form-control" id="" placeholder="">
                </div>
    
    
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
            <button type="submit"   class="btn btn-primary">ADD</button>
            </form>
            </div>
        </div>
        </div>
    </div>