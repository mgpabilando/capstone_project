<style>
    li:hover
    {
        background-color: #e8f0fe;
    }

    .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
    width:300px;
    }

    .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-size: 13px;
}
}
</style>

<div class="consul-show modal fade" id="editdeliveriesconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="edit-consult" action="{{route('deliveries.update', 'id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box">
                            <input name="Edeliveries_id" id="Edeliveries_id" type="block" placeholder="" hidden>
                        </div>
                        <div class="input-box col-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="EresID" id="EresID" placeholder="" required style="width:auto" readonly>
                        </div>
                        <hr>
                    </div>
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box pb-3">
                            <div class="details">Name:</div>
                            <input type="text" name="Eresname" id="Eresname" placeholder="" required readonly>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Age:</div>
                            <input type="number" name="Eage" id="Eage" placeholder="">
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Date Delivered:</div>
                            <input type="date" id="Edate_delivered" name="Edate_delivered" placeholder="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Outcome:</div>
                            <input type="text" id="Eoutcome" name="Eoutcome" placeholder="" required>
                        </div>   
                        <div class="input-box col pb-3">
                            <div class="details">Place:</div>
                            <input type="text" id="Eplace" name="Eplace" placeholder="" required>
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

