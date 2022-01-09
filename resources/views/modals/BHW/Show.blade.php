<!--**************************------------------- VIEW BHW MODAL -------------------****************************---------->
<div class="bhw-view modal fade" id="viewbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="viewbhw" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #007bff;
            color: #ffffff;">
                <h5 class="modal-title" id="registerModal">View Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="bhw-modal" method="GET" action=" {{route('bhw.show', 'user_id')}}">
                @csrf
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>
                        <div class="input-box">
                            <input name="user_id" class="user_id" type="hidden" placeholder="">
                        </div>
                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="fname">First Name:</label><br>
                                <input class="fname align-text-left" name="fname" type="text" placeholder="" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="lname">Last Name:</label><br>
                                <input class="lname align-text-left" name="lname" type="text" placeholder="" readonly>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="address">Address:</label><br>
                                <input class="address align-text-left" name="address" type="text" placeholder="" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="contact">Contact Number:</label><br>
                                <input class="contact align-text-left" name="contact" type="text" placeholder="" readonly>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6">
                                <label class="control-label" for="bdate">Birthdate:</label><br>
                                <input class="bdate align-text-left" name="bdate" type="date" placeholder="" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="age">Age:</label><br>
                                <input class="age align-text-left" name="age" type="text" placeholder="" readonly>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="account-info">
                        <p class="info-head text-center fw-bold">Account Information</p>
                        <div class="form-group">
                            <label class="control-label" for="email">Email Address:</label><br>
                            <input class="email align-text-left" name="email" type="email" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password:</label><br>
                            <input class="password align-text-left" name="password" type="password" placeholder="" readonly>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!--**************************------------------- VIEW BHW MODAL ENDS HERE -------------------****************************---------->