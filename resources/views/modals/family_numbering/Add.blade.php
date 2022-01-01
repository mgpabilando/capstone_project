<style>
    li:hover
    {
        background-color: #e8f0fe;
    }

    .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
    width:300px;
    }

    .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-size: 13px;
    }
</style>

<div class="consul-add modal fade" id="addfamilynumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">FAMILY NUMBER INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="searchResident" class="add-consult" action="{{route('familynumbering.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-search d-flex justify-content-center">
                        <select class="js-example-basic-single" id="selectResidentbyfamilynum" name="selectResidentbyfamilynum">
                        <option value="0">--Select Resident--</option>
                        </select>
                    </div>
                    <hr>
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box col-6 pb-3 align-self-center">
                            <div class="details">Family Number:</div>
                            <input type="text" name="familyID" id="familyID" placeholder="" required style="width:auto">
                        </div>

                        <div class="input-box col-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="resID" id="resID" placeholder="" required style="width:auto">
                        </div>
                        
                        <hr>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">SAVE AS FAMILY HEAD</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#addfamilynumber').on('hidden.bs.modal', function () {
        $('#addfamilynumber form')[0].reset();
        });
</script>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
        $( "#selectResidentbyfamilynum" ).select2({
            dropdownParent: $('#addfamilynumber'),
            ajax: { 
            url: "getResidentsFamilyNum",
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

        $("#selectResidentbyfamilynum").change(
        function () {
            $("#familyID").val($("#selectResidentbyfamilynum option:last-child").val());
            $("#resID").val($("#selectResidentbyfamilynum option:last-child").text());
        }
    );
    });
</script>
@endsection