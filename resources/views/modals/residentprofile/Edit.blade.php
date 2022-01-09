
<!--**************************------------------- EDIT RESIDENT MODAL -------------------****************************---------->
<div class="res-edit modal fade" id="editResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Resident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="edit-resident" action="{{route ('residentprofile.update', 'resident_id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="text" name="Eresident_id" id="Eresident_id" hidden>

                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-6 input-box">
                            <div class="details">Family No.:</div>
                            <input type="text" name="Efamily_id" id="Efamily_id" readonly>
                        </div>

                        <div class="col-md-6 input-box">
                            <div class="details">Family Head:</div>
                            <input type="text" name="Efamily_head" id="Efamily_head" readonly>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details">First Name:</div>
                            <input name="Efname" id="Efname" type="text" placeholder="" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Middle Name:</div>
                            <input name="Emname" id="Emname" type="text" placeholder="">
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Last Name:</div>
                            <input name="Elname" id="Elname" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details mt-2">Age:</div>
                            <input name="Eage" id="Eage" type="number" placeholder="" max="500" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details mt-2">Birthdate:</div>
                            <input name="Ebdate" id="Ebdate" type="date" class="date" placeholder="" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details mt-2">Place of Birth:</div>
                            <input name="Eplaceofbirth" id="Eplaceofbirth" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details mt-2">Sex:</div>
                            <select class="gender required" name="Esex" id="Esex">
                                <option selected>Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details mt-2">Civil Status:</div>
                            <select class="civil-status required" name="Ecivil_status" id="Ecivil_status">
                                <option selected>Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details mt-2">Mobile Number:</div>
                            <input type="tel" class="form-control" id="Emobile" name="Emobile" pattern="[0-9]{11}" 
                            placeholder="09123456789" maxlength="11" title="Input valid mobile number." required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-6 input-box">
                            <div class="details mt-2">PhilHealth ID No:</div>
                            <input name="Ephil_health_id" id="Ephil_health_id" type="text" pattern="[0-9]{12}" placeholder="" maxlength="12">
                            <p>Leave it blank if not applicable</p>
                        </div>
                        <div class="col-md-6 input-box">
                            <div class="details mt-2">4PS ID No:</div>
                            <input name="Eid_4ps" id="Eid_4ps" type="text" placeholder="" pattern="[0-9]{18}" maxlength="18">
                            <p>Leave it blank if not applicable</p>
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