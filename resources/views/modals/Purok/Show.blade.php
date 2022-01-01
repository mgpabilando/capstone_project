<div class="res-view modal fade" id="viewresidentdetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">RESIDENT DETAILS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="show-resident" action="{{route ('purok.show', 'resident_id')}}" method="GET">
                @csrf
                <div class="modal-body">
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">Last Name:</div>
                            <input class="name align-text-left" name="lname" id="lname" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">First Name:</div>
                            <input class="name" name="fname" id="fname" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Middle Name:</div>
                            <input class="name" name="mname" id="mname" type="text" placeholder="" required readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">Resident ID No.:</div>
                            <input name="resident_id" id="resident_id" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Purok No.:</div>
                            <input name="purok" id="purok" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Family ID No.:</div>
                            <input name="family_id" id="family_id" type="text" placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">Age:</div>
                            <input name="age" id="age" type="number" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Birthdate:</div>
                            <input name="bdate" id="bdate" type="date" class="date" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Place of Birth:</div>
                            <input name="placeofbirth" id="placeofbirth" type="text" placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">Sex:</div>
                            <input name="sex" id="sex" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Civil Status:</div>
                            <input name="civil_status" id="civil_status" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Contact Number:</div>
                            <input name="mobile" id="mobile" type="number" placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-6 input-box">
                            <div class="details">PhilHealth ID No:</div>
                            <input name="phil_health_id" id="phil_health_id" type="text" placeholder="" required readonly>
                        </div>
                        <div class="col-6 input-box">
                            <div class="details">4PS ID No:</div>
                            <input name="id_4ps" id="id_4ps" type="text" placeholder="" required readonly>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>