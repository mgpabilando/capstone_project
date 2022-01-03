<!--**************************------------------- VIEW BHW MODAL -------------------****************************---------->
<div class="bhw-view modal fade" id="viewbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="viewbhw" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="bhw-modal"  method="GET" action=" {{route('bhw.show', 'user_id')}}">
                @csrf
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>
                        <div class="input-box">
                            <input name="user_id" id="user_id" type="hidden" placeholder="">
                        </div>
                        <div class="row row-space">
                            <div class="form-group col-6">
                                <label class="control-label" for="fname">First Name:</label><br>
                                <input class="name align-text-left" id="fname" name="fname" type="text" placeholder="" required readonly>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="lname">Last Name:</label><br>
                                <input class="name align-text-left" id="lname" name="lname" type="text" placeholder="" required readonly>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-6">
                                <label class="control-label" for="address">Address:</label><br>
                                <input class="address align-text-left" id="address" name="address" type="text" placeholder="" required readonly>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="contact">Contact Number:</label><br>
                                <input class="contact align-text-left" id="contact" name="contact" type="text" placeholder="" required readonly>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-6">
                                <label class="control-label" for="bdate">Birthdate:</label><br>
                                <input class="bdate align-text-left" id="bdate" name="bdate" type="date" placeholder="" required readonly>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="age">Age:</label><br>
                                <input class="age align-text-left" id="age" name="age" type="text" placeholder="" required readonly>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="account-info">
                        <p class="info-head text-center fw-bold">Account Information</p>
                        <div class="form-group">
                            <label class="control-label" for="email">Email Address:</label><br>
                            <input class="email align-text-left" id="email" name="email" type="email" placeholder="" required readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password:</label><br>
                            <input class="password align-text-left" id="password" name="password" type="password" placeholder="" required readonly>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!--**************************------------------- VIEW BHW MODAL ENDS HERE -------------------****************************---------->
