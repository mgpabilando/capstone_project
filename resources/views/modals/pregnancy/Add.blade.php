<style>
    li:hover {
        background-color: #e8f0fe;
    }

    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 28px;
        user-select: none;
        -webkit-user-select: none;
        width: 300px;
    }

    .select2-dropdown--below {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        font-size: 13px;
    }
</style>

<div class="consul-add res-add modal fade" id="addpregconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5> 
            </div>

            <form id="searchResident" class="add-consult" action="{{route('pregnancy.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-search d-flex justify-content-center">
                        <select class="col-md-6 js-example-basic-single" id="selectresident" name="selectresident">
                            <option value="0">--Select Resident--</option>
                        </select>
                    </div>
                    <hr>
                    <div class="res_prof row justify-content-center" id="details">
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="resID" id="resID" placeholder="" required style="width:auto" readonly>
                            <input type="text" name="resname" id="resname" hidden>
                        </div>
                        <div class="input-box col-md-4 pb-3">
                            <div class="details">Age:</div>
                            <input type="number" name="age" id="age"  placeholder="" required>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Temperature:</div>
                            <input type="text" name="temp" id="temp" placeholder="" required style="width:auto">
                        </div>
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Blood Pressure:</div>
                            <input type="text" name="bp" id="bp" placeholder="" required style="width:auto">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-box col-md-6 pb-3">
                            <div class="details">Weight(kg):</div>
                            <input type="number" name="weight" id="weight" placeholder="" required>
                        </div>
                        <div class="input-box col-md-6 pb-3">
                            <div class="details">Height(cm):</div>
                            <input type="number" name="height" id="height"   placeholder="" required>
                        </div>
                    </div>

                    <div class="row pregnancy-info">
                        <div class="input-box col-md-6 pb-3">
                            <div class="details">Last Menstrual Period (LMP):</div>
                            <input type="date" name="lmp" id="lmp" placeholder="" required>
                        </div>
                        <div class="input-box col-md-6 pb-3">
                            <div class="details">Pregnancy Order:</div>
                            <input type="number" name="pregnancyorder" id="pregnancyorder"  placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#addpregconsul').on('hidden.bs.modal', function() {
        $('#addpregconsul form')[0].reset();
    });
</script>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {
        $("#selectresident").select2({
            dropdownParent: $('#addpregconsul'),
            ajax: {
                url: "getResidents",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        _token: CSRF_TOKEN,
                        search: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        $("#selectresident").change(
            // function () {
            //    $("#resID").val($(this).val());
            // }
            function() {
                $("#resID").val($("#selectresident option:last-child").val());
                $("#resname").val($("#selectresident option:last-child").text());
            }
        );
    });
</script>
@endsection
