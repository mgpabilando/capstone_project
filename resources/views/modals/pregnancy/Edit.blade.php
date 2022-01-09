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

<div class="consul-show res-edit modal fade" id="editpregconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5> 
            </div>
            <form class="edit-consult" action="{{route('pregnancy.update', 'id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box">
                            <input name="Epregnant_id" id="Epregnant_id" type="block" placeholder="" readonly hidden>
                        </div>
                        <div class="input-box col-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="Eresident_id" id="Eresident_id" placeholder="" required style="width:auto" readonly>
                        </div>
                        <hr>
                    </div>
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box pb-3">
                            <div class="details">Name:</div>
                            <input type="text" name="Ename" id="Ename" placeholder="" required readonly>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Weight(kg):</div>
                            <input type="number" name="Eweight" id="Eweight" placeholder="" required>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Height(cm):</div>
                            <input type="number" name="Eheight" id="Eheight" placeholder="" required>
                        </div>
                    </div>

                    <div class="row pregnancy-info">
                        <div class="input-box col pb-3">
                            <div class="details">Age:</div>
                            <input type="number" name="Eage" id="Eage" placeholder="" required>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">LMP:</div>
                            <input type="date" name="Elmp" id="Elmp" placeholder="" required>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Pregnancy Order:</div>
                            <input type="number" name="Epregnancyorder" id="Epregnancyorder" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

