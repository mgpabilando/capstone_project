<!--**************************------------------- EDIT RESIDENT MODAL -------------------****************************---------->
<div class="res-edit modal fade" id="editResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">EDIT RESIDENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="edit-resident" action="{{route ('residentprofile.update', 'resident_id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="d-flex flex-wrap identification row ">
                        <div class="input-box">
                            <input name="resident_id" id="resident_id" type="hidden" placeholder="">
                        </div>
                        <div class="col-6 input-box">
                            <div class="details">Purok No.:</div>
                            <select class="purok" name="purok" id="purok">
                                <option selected>Select</option>
                                <option value="1">UNO</option>
                                <option value="2">DOS</option>
                                <option value="3">TRES</option>
                                <option value="4">KWATRO</option>
                                <option value="5">SINGKO</option>
                                <option value="6">SAIS</option>
                                <option value="7">SYETE</option>
                            </select>
                        </div>
                        <div class="col-6 input-box">
                            <div class="details">Family ID No.:</div>
                            <input name="family_id" id="family_id" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">First Name:</div>
                            <input name="fname" id="fname" type="text" placeholder="" required>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Middle Name:</div>
                            <input name="mname" id="mname" type="text" placeholder="" required>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Last Name:</div>
                            <input name="lname" id="lname" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">Age:</div>
                            <input name="age" id="age" type="number" placeholder="" required>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Birthdate:</div>
                            <input name="bdate" id="bdate" type="date" class="date" placeholder="" required>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Place of Birth:</div>
                            <input name="placeofbirth" id="placeofbirth" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-4 input-box">
                            <div class="details">Sex:</div>
                            <select class="gender" name="sex" id="sex">
                            <option selected>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Civil Status:</div>
                            <select class="civil-status" name="civil_status" id="civil_status">
                                <option selected>Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="col-4 input-box">
                            <div class="details">Contact Number:</div>
                            <input name="mobile" id="mobile" type="number" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-6 input-box mr-3">
                            <div class="details">PhilHealth ID No:</div>
                            <input name="phil_health_id" id="phil_health_id" type="text" placeholder="" required>
                        </div>
                        <div class="col-6 input-box">
                            <div class="details">4PS ID No:</div>
                            <input name="id_4ps" id="id_4ps" type="text" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--**************************------------------- EDIT MODAL ENDS HERE-------------------****************************---------->
