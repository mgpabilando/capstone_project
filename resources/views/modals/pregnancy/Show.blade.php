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

<div class="consul-show modal fade" id="viewpregconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="show-consult" method="GET" action=" {{route('pregnancy.show', 'id')}}">
                @csrf
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box">
                            <input name="Vpregnant_id" id="Vpregnant_id" type="block" placeholder="" hidden>
                        </div>
                        <div class="input-box col-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="Vresident_id" id="Vresident_id" placeholder="" required style="width:auto" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="res_prof justify-content-center" id="details">  
                        <div class="input-box pb-3">
                            <div class="details">Name:</div>
                            <input type="text" name="Vname" id="Vname" placeholder="" required readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Weight(kg):</div>
                            <input type="text" name="Vweight" id="Vweight" placeholder="" readonly>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Height(cm):</div>
                            <input type="text" name="Vheight" id="Vheight" placeholder="" readonly>
                        </div>
                    </div>

                    <div class="row pregnancy-info">
                        <div class="input-box col pb-3">
                            <div class="details">Age:</div>
                            <input type="text" name="Vage" id="Vage" placeholder="" readonly>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">LMP:</div>
                            <input type="date" name="Vlmp" id="Vlmp" placeholder="" readonly>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Pregnancy Order:</div>
                            <input type="text" name="Vpregnancyorder" id="Vpregnancyorder" placeholder="" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>