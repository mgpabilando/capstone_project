<style>
    li:hover
    {
        background-color: #e8f0fe;
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
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                                <div id="product_list"></div>
                            </div>
                    </div>
                    <hr>
                    <div class="res_prof row" id="details">
                        <div class="input-box col pb-3">
                            <div class="details">Name:</div>
                            <input type="text" name="resname" id="resname" placeholder="" required>
                        </div>                           
                        <div class="input-box col pb-3">
                            <div class="details">Resident ID:</div>
                            <input type="text" name="resID" id="resID" placeholder="" required>
                        </div>
                        <hr>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#name').on('keyup',function () {
            var query = $(this).val();
            $.ajax({
                url:'{{ route('search') }}',
                type:'GET',
                data:{'id':query},
                success:function (data) {
                    $('#product_list').html(data);

                }
            })
        });
        $(document).on('click', 'li', function(){
              
                // var value = $(data).text();
                // $('#resname').val(value);
                // $('#product_list').html("");
                $.ajax({
                url:'{{ route('search') }}',
                type:'POST',
                data:{'id':id},
                success:function (data) {
                    $('#details').html(data);

                }
            })


        });
    });

</script> 
@endsection