<style>
    li:hover {
        background-color: #e8f0fe;
    }

    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 28px;
        user-select: none;
        -webkit-user-select: none;
        width: 300px;
    }

    .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-size: 13px;
    }

    #editfamilynumber .details {
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 3px;
    color: rgb(90, 90, 90);
}

    #editfamilynumber .modal-header{
    background-color: #ffc107;
    color: #ffffff;
    }



</style>

<div class="consul-show modal fade" id="editfamilynumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5> 
            </div>
            <form class="edit-consult" action="{{route('familynumbering.update', 'id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="d-flex flex-wrap identification row ">
                        <div class="input-box text-center"  style="width: 50%;">
                            <div class="details">Family Number:</div>
                            <input name="Efamilynumber_id" id="Efamilynumber_id" style=" text-align:center;" type="text" placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="d-flex identification row mt-2">
                        <div class="input-box" style="width: 50%">
                            <div class="details">First Name:</div>
                            <input name="Ef_name" id="Ef_name" type="text" placeholder="" required>
                        </div>
                        <div class="input-box" style="width: 50%">
                            <div class="details">Middle Name:</div>
                            <input name="Em_name" id="Em_name" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="d-flex identification row">
                        <div class="input-box mt-2" style="width: 50%">
                            <div class="details">Last Name:</div>
                            <input name="El_name" id="El_name" type="text" placeholder="" required>
                        </div>
                    
                        <div class="input-box  mt-2" style="width: 50%">
                            <div class="details">Purok No.:</div>
                            <select class="purok" name="Epurok" id="Epurok" class="required">
                                <option value="" selected>Select</option>
                                <option value="1">UNO</option>
                                <option value="2">DOS</option>
                                <option value="3">TRES</option>
                                <option value="4">KWATRO</option>
                                <option value="5">SINGKO</option>
                                <option value="6">SAIS</option>
                                <option value="7">SYETE</option>
                            </select>
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