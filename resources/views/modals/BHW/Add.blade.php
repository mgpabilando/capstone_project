<!--******************************-------------- ADD BHW MODAL ------------*************************************-->
<div class="bhw-add modal fade" id="addbhwModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addbhwModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #2ae88a;
            color: #ffffff">
                <h5 class="modal-title" id="addbhwModal">{{ __('CREATE ACCOUNT') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>

            </div>
            <form class="bhw-modal" method="POST" action=" {{route('bhw.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="fname">First Name:</label>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                                <span class="invalid-feedback" role="alert" id="fnameError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="lname">Last Name:</label>
                                <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
                                <span class="invalid-feedback" role="alert" id="lnameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="address">Address:</label>
                                <input type="text" class="form-control" name="address">
                                <span class="invalid-feedback" role="alert" id="addressError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="contact">Contact Number:</label>
                                <input type="text" class="form-control" id="contact" name="contact" pattern="[0-9]{11}" placeholder="09123456789" maxlength="11" required>
                                <span class="invalid-feedback" role="alert" id="contactError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6">
                                <label class="control-label" for="bdate">Birthdate:
                                    <input type="date" class="form-control" name="bdate"></label>
                                <span class="invalid-feedback" role="alert" id="bdateError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="age">Age:</label>
                                <input type="number" class="form-control" name="age">
                                <span class="invalid-feedback" role="alert" id="ageError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="account-info">
                        <p class="info-head text-center fw-bold">Account Information</p>
                        <div class="form-group">
                            <label class="control-label" for="email">Email Address:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="invalid-feedback" role="alert" id="emailError">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="newpass">
                                <span class="invalid-feedback" role="alert" id="passwordError">
                                    <strong></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="password_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" name="password_confirmation" id="newpass_confirm">
                                <span class="invalid-feedback" role="alert" id="password_confirmationError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->
