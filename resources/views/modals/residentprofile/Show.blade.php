    <!--**************************------------------- VIEW RESIDENT MODAL -------------------****************************---------->
    <div class="res-view modal fade" id="viewResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">RESIDENT PROFILE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="add-resident" action="{{route ('residentprofile.show', 'resident_id')}}" method="GET">
                    @csrf
                    <div class="modal-body">
                        <input type="text" name="resident_id" id="resident_id" hidden>

                        <div class="d-flex flex-wrap identification row ">
                            <div class="col-4 input-box">
                                <div class="details">Family No.:</div>
                                <input type="text" name="family_id" id="family_id">
                            </div>

                            <div class="col-4 input-box">
                                <div class="details">Family Head:</div>
                                <input type="text" name="family_head" id="family_head">
                            </div>
                        </div>

                        <div class="d-flex flex-wrap identification row ">
                            <div class="col-4 input-box">
                                <div class="details">First Name:</div>
                                <input name="fname" type="text" placeholder="" required>
                            </div>
                            <div class="col-4 input-box">
                                <div class="details">Middle Name:</div>
                                <input name="mname" type="text" placeholder="" required>
                            </div>
                            <div class="col-4 input-box">
                                <div class="details">Last Name:</div>
                                <input name="lname" type="text" placeholder="" required>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap identification row ">
                            <div class="col-4 input-box">
                                <div class="details">Age:</div>
                                <input name="age" type="number" placeholder="" required>
                            </div>
                            <div class="col-4 input-box">
                                <div class="details">Birthdate:</div>
                                <input name="bdate" type="date" class="date" placeholder="" required>
                            </div>
                            <div class="col-4 input-box">
                                <div class="details">Place of Birth:</div>
                                <input name="placeofbirth" type="text" placeholder="" required>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap identification row ">
                            <div class="col-4 input-box">
                                <div class="details">Sex:</div>
                                <select class="gender" name="sex">
                                <option selected>Select</option>'
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-4 input-box">
                                <div class="details">Civil Status:</div>
                                <select class="civil-status" name="civil_status">
                                    <option selected>Select</option>'
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="col-4 input-box">
                                <div class="details">Contact Number:</div>
                                <input name="mobile" type="number" placeholder="" required>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap identification row ">
                            <div class="col-6 input-box">
                                <div class="details">PhilHealth ID No:</div>
                                <input name="phil_health_id" type="text" placeholder="" required>
                            </div>
                            <div class="col-6 input-box">
                                <div class="details">4PS ID No:</div>
                                <input name="id_4ps" type="text" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--**************************--------------------- VIEW MODAL ENDS HERE -------------------**********************************----->
