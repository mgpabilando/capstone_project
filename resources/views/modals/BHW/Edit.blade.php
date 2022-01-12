<!--**************************------------------- EDIT BHW MODAL -------------------****************************---------->
<div class="bhw-edit modal fade" id="editbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editbhw" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style=" background-color: #ffc107;
            color: #ffffff;">
                <h5 class="modal-title" id="editbhw">{{ __('Edit') }}</h5> 
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
                            <div class=" d-flex flex-wrap col-md-6">
                                    <label class="control-label" for="editbdate">Birthdate:</label>
                                    <input type="date" class="editbdate form-control" name="editbdate" onchange="calculateAge()">
                                    <span class="invalid-feedback" role="alert" id="bdateError">
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

    {{-- CALCULATE AGE --}}
<script>
    function calculateAge() {
    var birth_date = new Date(document.getElementsByClassName("editbdate").value);
    var requiredBdate = birth_date[0];
    var birth_date_day = requiredBdate.getDate();
    var birth_date_month = requiredBdate.getMonth()
    var birth_date_year = requiredBdate.getFullYear();

    var today_date = new Date();
    var today_day = today_date.getDate();
    var today_month = today_date.getMonth();
    var today_year = today_date.getFullYear();

    var calculated_age = 0;

    if (today_month > birth_date_month) {
        calculated_age = today_year - birth_date_year;
    }
    else if (today_month == birth_date_month)
    {
        if (today_day >= birth_date_day) {
            calculated_age = today_year - birth_date_year;
        }
        else {
            calculated_age = today_year - birth_date_year - 1;
        }
    }

    else {
        calculated_age = today_year - birth_date_year - 1;
    }

    var output_value = calculated_age;

    if(output_value <= 0){
        calculated_age = 0;
    }
    else{
        calculated_age = output_value;
    }
    var output = document.getElementsByClassName('editage').value = calculated_age;
    }
</script>
<!--**************************------------------- EDIT MODAL ENDS HERE-------------------****************************---------->