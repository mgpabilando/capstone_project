<style>
    li:hover
    {
        background-color: #e8f0fe;
    }

    .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 35px;
    user-select: none;
    -webkit-user-select: none;
    width:300px;
    margin: 5px 5px 0px 0px;
    }

    .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-size: 13px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 35px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px;
    position: absolute;
    top: 6px;
    right: 8px;
    width: 20px;
}
</style>

<!--******************************-------------- ADD RESIDENT MODAL ------------*************************************-->
    <div class="res-add modal fade" id="registerresident" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">ADD RESIDENT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="add-resident" action="{{route ('residentprofile.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="d-flex flex-wrap identification row">
                            <div class="col-5">
                                <div class="details">Search:</div>
                                <select class="js-example-basic-single" id="selectfamilynumber" name="selectfamilynumber">
                                <option value="0">Search By Family Number/Family Head</option>
                                </select>
                            </div>
                        </div>
                        <hr>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add Resident</button>
                    </div>
                </form>
            </div>
        </div>
</div>
<!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
        $( "#selectfamilynumber" ).select2({
            selectOnClose: true,
            dropdownParent: $('#registerresident'),
            ajax: { 
            url: "getFamilynumber",
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                _token: CSRF_TOKEN,
                search: params.term // search term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
            }
        });

        $("#selectfamilynumber").change(
        function () {
            $("#family_id").val($("#selectfamilynumber option:last-child").val());
            $("#family_head").val($("#selectfamilynumber option:last-child").text());
        }
    );
    });
</script>
@endsection