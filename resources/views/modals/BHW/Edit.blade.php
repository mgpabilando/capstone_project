<!--**************************------------------- EDIT BHW MODAL -------------------****************************---------->
<div class="bhw-edit modal fade" id="editbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editbhw" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="editbhw">{{ __('CREATE ACCOUNT') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="bhw-modal"  method="POST" action=" {{route('bhw.update', 'user_id')}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>
                        <div class="input-box">
                            <input name="user_id" id="edituser_id" type="hidden" placeholder="">
                        </div>
                        <div class="row row-space">
                            <div class="form-group col-6">
                                <label class="control-label" for="fname">First Name:</label><br>
                                <input type="text" class="form-control" id="editfname" name="fname" value="{{ old('fname') }}">
                                <span class="invalid-feedback" role="alert" id="bhwfnameError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="lname">Last Name:</label><br>
                                <input type="text" class="form-control" id="editlname" name="lname" value="{{ old('lname') }}">
                                <span class="invalid-feedback" role="alert" id="bhwlnameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-6">
                                <label class="control-label" for="address">Address:</label><br>
                                <input type="text" class="form-control" id="editaddress" name="address">
                                <span class="invalid-feedback" role="alert" id="bhwaddressError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="contact">Contact Number:</label><br>
                                <input type="number" class="form-control" id="editcontact" name="contact">
                                <span class="invalid-feedback" role="alert" id="bhwcontactError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-6">
                                <label class="control-label" for="bdate">Birthdate:</label><br>
                                <input type="date" class="form-control" id="editbdate" name="bdate">
                                <span class="invalid-feedback" role="alert" id="bhwbdateError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="age">Age:</label><br>
                                <input type="number" class="form-control" id="editage" name="age">
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
                            <label class="control-label" for="email">Email Address:</label><br>
                            <input type="email" class="form-control" id="editemail" name="email" value="{{ old('email') }}">
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
