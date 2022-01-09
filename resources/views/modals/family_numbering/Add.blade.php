<style>
<<<<<<< HEAD
    #addfamilynumber li:hover
    {
        background-color: #e8f0fe;
    }

    #addfamilynumber .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
    width:300px;
    }

    #addfamilynumber .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-size: 13px;
=======
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
>>>>>>> origin/jkgerero_branch
    }

    #addfamilynumber .details{
        font-weight: 600;
    }


</style>

<div class="consul-add modal fade" id="addfamilynumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">FAMILY NUMBER INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="searchResident" class="add-consult" action="{{route('familynumbering.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="d-flex identification row">
                        <div class="input-box col-md-4">
                            <div class="details">First Name:</div>
                            <input name="f_name" id="f_name" type="text" placeholder="" required>
                        </div>
                        <div class="input-box col-md-4">
                            <div class="details">Middle Name:</div>
                            <input name="m_name" id="m_name" type="text" placeholder="">
                        </div>
                        <div class="input-box col-md-4">
                            <div class="details">Last Name:</div>
                            <input name="l_name" type="text" placeholder="" required>
                        </div>
                    </div>

                    <div class="d-flex identification row">


                        <div class="input-box col-md-12 mt-2">
                            <div class="details">Purok No.:</div>
                            <select class="purok" name="purok" id="purok" class="required">
                                <option value="" selected>Select</option>
                                <option value="1">UNO</option>
                                <option value="2">DOS</option>
                                <option value="3">TRES</option>
                                <option value="4">KWATRO</option>
                                <option value="5">SINGKO</option>
                                <option value="6">SAIS</option>
                                <option value="7">SYETE</option>
                            </select>
                        </div>
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
    $('#addfamilynumber').on('hidden.bs.modal', function() {
        $('#addfamilynumber form')[0].reset();
    });
</script>

{{-- <script type="text/javascript">
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
</script> --}}
@endsection
