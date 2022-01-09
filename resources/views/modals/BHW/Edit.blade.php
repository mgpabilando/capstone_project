<!--**************************------------------- EDIT BHW MODAL -------------------****************************---------->
<div class="bhw-edit modal fade" id="editbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editbhw" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style=" background-color: #ffc107;
            color: #ffffff;">
                <h5 class="modal-title" id="editbhw">{{ __('Edit') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="bhw-modal" method="POST" action=" {{route('bhw.update', 'edituser_id')}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>
                        <div class="input-box">
                            <input name="edituser_id" class="edituser_id" type="hidden" placeholder="">
                        </div>
                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="editfname">First Name:</label><br>
                                <input type="text" class="editfname form-control" name="editfname" value="{{ old('fname') }}">
                                <span class="invalid-feedback" role="alert" id="bhwfnameError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="editlname">Last Name:</label><br>
                                <input type="text" class="editlname form-control" name="editlname" value="{{ old('lname') }}">
                                <span class="invalid-feedback" role="alert" id="bhwlnameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="editaddress">Address:</label><br>
                                <input type="text" class="editaddress form-control" name="editaddress">
                                <span class="invalid-feedback" role="alert" id="bhwaddressError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="editcontact">Contact Number:</label><br>
                                <input type="number" class="editcontact form-control"  name="editcontact">
                                <span class="invalid-feedback" role="alert" id="bhwcontactError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6">
                                <label class="control-label" for="editbdate">Birthdate:</label><br>
                                <input type="date" class="editbdate form-control" name="editbdate">
                                <span class="invalid-feedback" role="alert" id="bhwbdateError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="editage">Age:</label><br>
                                <input type="number" class="editage form-control" name="editage">
                                <span class="invalid-feedback" role="alert" id="bhwageError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="account-info">
                        <p class="info-head text-center fw-bold">Account Information</p>
                        <div class="form-group">
                            <label class="control-label" for="editemail">Email Address:</label><br>
                            <input type="email" class="editemail form-control" name="editemail" value="{{ old('email') }}">
                            <span class="invalid-feedback" role="alert" id="bhwemailError">
                                <strong></strong>
                            </span>
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