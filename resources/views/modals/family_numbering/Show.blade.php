<style>
    li:hover
    {
        background-color: #e8f0fe;
    }

    .select2-container .select2-selection--single
    {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
    width:300px;
    }

    .select2-dropdown--below
    {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-size: 13px;
    }

    #viewfamilynumber .details {
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 3px;
    color: rgb(90, 90, 90);
    }
</style>

<div class="consul-show modal fade" id="viewfamilynumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff; color: #ffffff;">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <form class="show-consult" method="GET" action=" {{route('familynumbering.show', 'id')}}">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="input-box col-md-6">
                                    <div class="details">Family Number:</div>
                                    <input class="form-control" name="Vfamilynumber_id" id="Vfamilynumber_id" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box col-md-6">
                                    <div class="details">Purok No.:</div>
                                    <input class="form-control" type="text" name="Vpurok" id="Vpurok" placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-box col-md-4 mt-2">
                                    <div class="details">First Name:</div>
                                    <input class="form-control" name="Vf_name" id="Vf_name" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box col-md-4 mt-2">
                                    <div class="details">Middle Name:</div>
                                    <input class="form-control" name="Vm_name" id="Vm_name" type="text" placeholder="" required readonly>
                                </div>

                                <div class="input-box col-md-4 mt-2">
                                    <div class="details">Last Name:</div>
                                    <input class="form-control" name="Vl_name" id="Vl_name" type="text" placeholder="" required readonly>
                                </div>
                            </div>


                        </div>
                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>

