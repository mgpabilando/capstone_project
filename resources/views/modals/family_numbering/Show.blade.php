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
</style>

<div class="consul-show modal fade" id="viewfamilynumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="show-consult" method="GET" action=" {{route('familynumbering.show', 'id')}}">
                @csrf
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details"> 
                        <div class="d-flex flex-wrap identification row ">
                            <div class="input-box">
                                <div class="details">Family Number:</div>
                                <input name="Vfamilynumber_id" id="Vfamilynumber_id" type="text" placeholder="" required readonly>
                            </div>
                            <div class="input-box">
                                <div class="details">First Name:</div>
                                <input name="Vf_name" id="Vf_name" type="text" placeholder="" required readonly>
                            </div>
                            <div class="input-box">
                                <div class="details">Middle Name:</div>
                                <input name="Vm_name" id="Vm_name" type="text" placeholder="" required readonly>
                            </div>

                            <div class="input-box">
                                <div class="details">Last Name:</div>
                                <input name="Vl_name" id="Vl_name" type="text" placeholder="" required readonly>
                            </div>

                            <div class="input-box">
                            <div class="details">Purok No.:</div>
                            <input type="text" name="Vpurok" id="Vpurok" placeholder="" required readonly>                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>