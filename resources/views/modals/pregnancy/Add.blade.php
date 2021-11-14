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
}
</style>

<div class="consul-add modal fade" id="addpregconsul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="searchResident" class="add-consult" action="{{route('healthconsultation.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-search d-flex justify-content-center">
                        <select class="js-example-basic-single" id="selectresident" name="residents">
                        <option value="0">--Select Resident--</option>
                        </select>
                    </div>
                    <hr>
                    <div class="res_prof row justify-content-center" id="details">  
                        <div class="input-box col-6 pb-3 align-self-center">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="resID" id="resID" placeholder="" required style="width:auto">
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="input-box col pb-3">
                            <div class="details">Weight(kg):</div>
                            <input type="text" name="weight" id="weight" placeholder="">
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Height(cm):</div>
                            <input type="text" name="height" id="height" placeholder="">
                        </div>
                    </div>

                    <div class="row pregnancy-info">
                        <div class="input-box col pb-3">
                            <div class="details">Age:</div>
                            <input type="text" name="age" id="age" placeholder="">
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">LMP:</div>
                            <input type="date" name="lmp" id="lmp" placeholder="">
                        </div>
                        <div class="input-box col pb-3">
                            <div class="details">Pregnancy Order:</div>
                            <input type="text" name="pregnancyorder" id="pregnancyorder" placeholder="">
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
<script>
    $('#addpregconsul').on('hidden.bs.modal', function () {
        $('#addpregconsul form')[0].reset();
        });
</script>

   <!-- Script -->
   <script type="text/javascript">
   // CSRF Token
   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

   $(document).ready(function(){

     $( "#selectresident" ).select2({
         dropdownParent: $('#addpregconsul'),
        ajax: { 
          url: "getResidents",
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

     $("#selectresident").change(
       function () {
           $("#resID").val($(this).val());
           
       }
   );
   });
   </script>
</script> 
   </script>
@endsection