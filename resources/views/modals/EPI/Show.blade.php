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

<div class="consul-show res-view modal fade" id="viewepiconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="show-consult" method="GET" action=" {{route('epi.show', 'id')}}">
                @csrf
                <div class="modal-body">
                    <div class="res_prof row justify-content-center" id="details">
                        <div class="input-box">
                            <input name="Vepi_id" id="Vepi_id" type="block" placeholder="" hidden>
                        </div>
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="VresID" id="VresID" placeholder="" required style="width:auto" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="res_prof justify-content-center" id="details">
                        <div class="input-box pb-3">
                            <div class="details">Name:</div>
                            <input type="text" name="Vresname" id="Vresname" placeholder="" required readonly>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="input-box col-md-12 pb-3">
                            <div class="details">Birthdate:</div>
                            <input type="date" name="Vbirthdate" id="Vbirthdate" placeholder="">
                        </div>
                        <div class="input-box col-md-12 pb-3">
                            <div class="details">Medicine Given:</div>
                            <textarea id="Vmeds_given" name="Vmeds_given" style="width:100%; height: 100px; padding: 5px; "></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>