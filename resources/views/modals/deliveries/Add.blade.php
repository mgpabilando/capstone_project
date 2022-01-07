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

<div class="consul-add modal fade" id="addDeliveriesconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="searchResident" class="add-consult" action="{{route('deliveries.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-search d-flex justify-content-center">
                        <select class="js-example-basic-single" id="selectresident" name="selectresident">
                            <option value="0">--Select Resident--</option>
                        </select>
                    </div>
                    <hr>
                    <div class="res_prof row justify-content-center" id="details">
                        <div class="input-box col-md-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="resID" id="resID" placeholder="" required style="width:auto">
                            <input type="text" name="resname" id="resname" hidden>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Age:</div>
                            <input type="number" name="age" id="age" placeholder="">
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Date Delivered:</div>
                            <input type="date" id="date_delivered" name="date_delivered" placeholder="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Outcome:</div>
                            <input type="text" id="outcome" name="outcome" placeholder="" required>
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Place:</div>
                            <input type="text" id="place" name="place" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#addDeliveriesconsul').on('hidden.bs.modal', function() {
        $('#addDeliveriesconsul form')[0].reset();
    });
</script>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {
        $("#selectresident").select2({
            dropdownParent: $('#addDeliveriesconsul'),
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