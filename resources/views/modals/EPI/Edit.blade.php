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
</style>

<div class="consul-show res-edit modal fade" id="editepiconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5> 
            </div>
            <form class="edit-consult" action="{{route('epi.update', 'id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">
                        <div class="input-box">
                            <input name="Eepi_id" id="Eepi_id" type="block" placeholder="" hidden>
                        </div>
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="EresID" id="EresID" placeholder="" required style="width:auto" readonly>
                        </div>
                        <hr>
                    </div>
                    <div class="res_prof row justify-content-center" id="details">
                        <div class="input-box col-md-6 pb-3">
                            <div class="details">Name:</div>
                            <input type="text" name="Eresname" id="Eresname" placeholder="" required readonly>
                        </div>
                        <div class="input-box col-md-6 pb-3">
                            <div class="details">Birthdate:</div>
                            <input type="date" name="Ebirthdate" id="Ebirthdate" placeholder="" readonly>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Temperature:</div>
                            <input type="text" name="Etemp" id="Etemp" placeholder="" required style="width:auto">
                        </div>
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Blood Pressure:</div>
                            <input type="text" name="Ebp" id="Ebp" placeholder="" required style="width:auto">
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="input-box col-md-12 pb-3">
                            <div class="details">Medicine Given:</div>
                            <textarea id="Emeds_given" name="Emeds_given" style="width:100%; height: 100px; padding: 5px; "></textarea>
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