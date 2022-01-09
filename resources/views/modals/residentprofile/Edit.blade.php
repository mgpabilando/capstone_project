<!--**************************------------------- EDIT RESIDENT MODAL -------------------****************************---------->
<div class="res-edit modal fade" id="editResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">EDIT RESIDENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="edit-resident" action="{{route ('residentprofile.update', 'resident_id')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="text" name="Eresident_id" id="Eresident_id" hidden>

                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details">Family No.:</div>
                            <input type="text" name="Efamily_id" id="Efamily_id" readonly>
                        </div>

                        <div class="col-md-4 input-box">
                            <div class="details">Family Head:</div>
                            <input type="text" name="Efamily_head" id="Efamily_head" readonly>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details">First Name:</div>
                            <input name="Efname" type="text" placeholder="" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Middle Name:</div>
                            <input name="Emname" type="text" placeholder="" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Last Name:</div>
                            <input name="Elname" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details">Age:</div>
                            <input name="Eage" type="number" placeholder="" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Birthdate:</div>
                            <input name="Ebdate" type="date" class="date" placeholder="" required>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Place of Birth:</div>
                            <input name="Eplaceofbirth" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-4 input-box">
                            <div class="details">Sex:</div>
                            <select class="gender" name="Esex">
                                <option selected>Select</option>'
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Civil Status:</div>
                            <select class="civil-status" name="Ecivil_status">
                                <option selected>Select</option>'
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="col-md-4 input-box">
                            <div class="details">Contact Number:</div>
                            <input name="Emobile" type="number"  pattern="[0-9]" placeholder="000000000000" maxlength="12" >
                        </div>
                    </div>
                    <div class="d-flex flex-wrap identification row ">
                        <div class="col-md-6 input-box">
                            <div class="details">PhilHealth ID No:</div>
                            <input name="Ephil_health_id" type="text" pattern="[0-9]" placeholder="000000000000" maxlength="12">
                        </div>
                        <div class="col-md-6 input-box">
                            <div class="details">4PS ID No:</div>
                            <input name="Eid_4ps" type="text" placeholder="000000000000000000"  pattern="[0-9]" maxlength="18">
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