@extends('layouts.home')
@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Resident Profile</h3>
        </div>
    </div>

    <div class="head-resprof">
        <div class="head-func d-flex justify-content-center">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    {{--RESIDENT PROFILE TABLE--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container list-of-res bhms-box-shadow">
                    <div class="tabletitle-and-button d-flex">
                        <h3 class="restable-title col-9">List of Residents</h3>
                        <div type="button" class="btn btn-add col-3" style="margin-left:auto;" title="Add New Resident"  data-bs-toggle="modal" data-bs-target="#registerresident">
                            <i class="fa fa-user-plus"></i>&nbsp;Add
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="datatable" class="table table-bordered table-striped datatable-hover">
                                <thead>
                                    <tr role="row">
                                        <th scope="col">ID</th>
                                        <th scope="col">Family No</th>
                                        <th scope="col">Purok</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($residents)
                                    @foreach($residents as $residentprofile)
                                        <tr>
                                            <th>{{ $residentprofile->id }}</th>
                                            <td>{{ $residentprofile->family_id }}</td>
                                            <td>{{ $residentprofile->purok }}</td>
                                            <td>{{ $residentprofile->lname }}</td>
                                            <td>{{ $residentprofile->fname }}</td>
                                            <td>{{ $residentprofile->mname }}</td>
                                            <td>{{ date('F d, Y h:i:s a',strtotime($residentprofile['created_at'])) }}</td>
                                            <td>
                                                {{-----***************************** SHOW BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn-action view"
                                                data-resident_id="{{$residentprofile->id}}" data-purok="{{$residentprofile->purok}}" data-fname="{{$residentprofile->fname}}"
                                                data-lname="{{$residentprofile->lname}}" data-mname="{{$residentprofile->mname}}"
                                                data-family_id="{{ $residentprofile->family_id }}" data-age="{{ $residentprofile->age }}"
                                                data-bdate="{{ $residentprofile->bdate }}" data-placeofbirth="{{ $residentprofile->placeofbirth }}"
                                                data-sex="{{ $residentprofile->sex }}" data-mobile="{{ $residentprofile->mobile }}"
                                                data-civil_status="{{ $residentprofile->civil_status }}"
                                                data-phil_health_id="{{ $residentprofile->phil_health_id }}" data-id_4ps="{{ $residentprofile->id_4ps }}"
                                                data-bs-target="#viewResidentModal">
                                                <i class="fas fa-eye"></i></a>
                                            </td>
                                            <td>
                                                {{-----***************************** EDIT BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn-action edit"
                                                data-resident_id="{{$residentprofile->id}}" data-purok="{{$residentprofile->purok}}" data-fname="{{$residentprofile->fname}}"
                                                data-lname="{{$residentprofile->lname}}" data-mname="{{$residentprofile->mname}}"
                                                data-family_id="{{ $residentprofile->family_id }}" data-age="{{ $residentprofile->age }}"
                                                data-bdate="{{ $residentprofile->bdate }}" data-placeofbirth="{{ $residentprofile->placeofbirth }}"
                                                data-sex="{{ $residentprofile->sex }}" data-mobile="{{ $residentprofile->mobile }}"
                                                data-civil_status="{{ $residentprofile->civil_status }}"
                                                data-phil_health_id="{{ $residentprofile->phil_health_id }}" data-id_4ps="{{ $residentprofile->id_4ps }}"
                                                data-bs-target="#editResidentModal">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                {{-----***************************** DELETE BUTTON *******************************------}}
                                                <a type="button" class="btn-action delete" data-bs-toggle="modal"
                                                data-bs-target="#deleteResidentModal"
                                                data-resident_id="{{$residentprofile->id}}">
                                                <i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--******************************-------------- ADD RESIDENT MODAL ------------*************************************-->
        <div class="res-add modal fade" id="registerresident" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">ADD RESIDENT</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="add-resident" action="{{route ('residentprofile.store')}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="d-flex flex-wrap identification">
                                    <div class="input-box">
                                        <div class="details">Purok No.:</div>
                                        <select class="purok" name="purok" id="purok_id" >
                                            <option selected>Select</option>
                                            <option value="1">UNO</option>
                                            <option value="2">DOS</option>
                                            <option value="3">TRES</option>
                                            <option value="4">KWATRO</option>
                                            <option value="5">SINGKO</option>
                                            <option value="6">SAIS</option>
                                            <option value="7">SYETE</option>
                                        </select>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Family ID No.:</div>
                                        <input name="family_id" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap identification">
                                    <div class="input-box">
                                        <div class="details">First Name:</div>
                                        <input name="fname" type="text" placeholder="" required>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Middle Name:</div>
                                        <input name="mname" type="text" placeholder="" required>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Last Name:</div>
                                        <input name="lname" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap identification">
                                    <div class="input-box">
                                        <div class="details">Age:</div>
                                        <input name="age" type="text" placeholder="" required>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Birthdate:</div>
                                        <input name="bdate" type="date" class="date" placeholder="" required>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Place of Birth:</div>
                                        <input name="placeofbirth" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap identification">
                                    <div class="input-box">
                                        <div class="details">Sex:</div>
                                        <select class="gender" name="sex">
                                        <option selected>Select</option>'
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Civil Status:</div>
                                        <select class="civil-status" name="civil_status">
                                            <option selected>Select</option>'
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                    <div class="input-box">
                                        <div class="details">Contact Number:</div>
                                        <input name="mobile" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap identification">
                                    <div class="input-box">
                                        <div class="details">PhilHealth ID No:</div>
                                        <input name="phil_health_id" type="text" placeholder="" required>
                                    </div>
                                    <div class="input-box">
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

        <!--**************************------------------- VIEW RESIDENT MODAL -------------------****************************---------->
        <div class="res-view modal fade" id="viewResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">RESIDENT PROFILE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-resident" action="{{route ('residentprofile.show', 'resident_id')}}" method="GET">
                        @csrf
                        <div class="modal-body">
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">Last Name:</div>
                                    <input class="name align-text-left" name="lname" id="lname" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">First Name:</div>
                                    <input class="name" name="fname" id="fname" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">Middle Name:</div>
                                    <input class="name" name="mname" id="mname" type="text" placeholder="" required readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <input name="resident_id" id="resident_id" type="hidden" placeholder="">
                                </div>
                                <div class="input-box">
                                    <div class="details">Purok No.:</div>
                                    <input name="purok" id="purok" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">Family ID No.:</div>
                                    <input name="family_id" id="family_id" type="text" placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">Age:</div>
                                    <input name="age" id="age" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">Birthdate:</div>
                                    <input name="bdate" id="bdate" type="date" class="date" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">Place of Birth:</div>
                                    <input name="placeofbirth" id="placeofbirth" type="text" placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">Sex:</div>
                                    <input name="sex" id="sex" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">Civil Status:</div>
                                    <input name="civil_status" id="civil_status" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">Contact Number:</div>
                                    <input name="mobile" id="mobile" type="text" placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">PhilHealth ID No:</div>
                                    <input name="phil_health_id" id="phil_health_id" type="text" placeholder="" required readonly>
                                </div>
                                <div class="input-box">
                                    <div class="details">4PS ID No:</div>
                                    <input name="id_4ps" id="id_4ps" type="text" placeholder="" required readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--**************************--------------------- VIEW MODAL ENDS HERE -------------------**********************************----->

        <!--**************************------------------- EDIT RESIDENT MODAL -------------------****************************---------->
        <div class="res-edit modal fade" id="editResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">EDIT RESIDENT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-resident" action="{{route ('residentprofile.update', 'resident_id')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <input name="resident_id" id="resident_id" type="hidden" placeholder="">
                                </div>
                                <div class="input-box">
                                    <div class="details">Purok No.:</div>
                                    <select class="purok" name="purok" id="purok">
                                        <option selected>Select</option>
                                        <option value="1">UNO</option>
                                        <option value="2">DOS</option>
                                        <option value="3">TRES</option>
                                        <option value="4">KWATRO</option>
                                        <option value="5">SINGKO</option>
                                        <option value="6">SAIS</option>
                                        <option value="7">SYETE</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <div class="details">Family ID No.:</div>
                                    <input name="family_id" id="family_id" type="text" placeholder="" required>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">First Name:</div>
                                    <input name="fname" id="fname" type="text" placeholder="" required>
                                </div>
                                <div class="input-box">
                                    <div class="details">Middle Name:</div>
                                    <input name="mname" id="mname" type="text" placeholder="" required>
                                </div>
                                <div class="input-box">
                                    <div class="details">Last Name:</div>
                                    <input name="lname" id="lname" type="text" placeholder="" required>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">Age:</div>
                                    <input name="age" id="age" type="text" placeholder="" required>
                                </div>
                                <div class="input-box">
                                    <div class="details">Birthdate:</div>
                                    <input name="bdate" id="bdate" type="date" class="date" placeholder="" required>
                                </div>
                                <div class="input-box">
                                    <div class="details">Place of Birth:</div>
                                    <input name="placeofbirth" id="placeofbirth" type="text" placeholder="" required>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box">
                                    <div class="details">Sex:</div>
                                    <select class="gender" name="sex" id="sex">
                                    <option selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <div class="details">Civil Status:</div>
                                    <select class="civil-status" name="civil_status" id="civil_status">
                                        <option selected>Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <div class="details">Contact Number:</div>
                                    <input name="mobile" id="mobile" type="text" placeholder="" required>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap identification">
                                <div class="input-box mr-3">
                                    <div class="details">PhilHealth ID No:</div>
                                    <input name="phil_health_id" id="phil_health_id" type="text" placeholder="" required>
                                </div>
                                <div class="input-box">
                                    <div class="details">4PS ID No:</div>
                                    <input name="id_4ps" id="id_4ps" type="text" placeholder="" required>
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
        <!--**************************------------------- EDIT MODAL ENDS HERE-------------------****************************---------->

        <!--**************************------------------- DELETE RESIDENT MODAL -------------------****************************---------->
        <div class="res-delete modal fade" id="deleteResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Resident Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-resident" action="{{route ('residentprofile.destroy', 'resident_id')}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="modal-body delete_res">
                            <div class="input-box">
                                <input name="resident_id" id="resident_id" type="hidden" placeholder="">
                            </div>
                            <h5>Are you sure you want to delete this?</h5>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete Resident</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--**************************------------------- DELETE MODAL ENDS HERE-------------------****************************---------->

    </div>

</div>
@endsection

@section('scripts')

    {{-----------------------------EDIT RESIDENT SCRIPT--------------------------------}}
 <script>
    $('#editResidentModal').on('show.bs.modal', function(event) {
       var button = $(event.relatedTarget)
       var resident_id = button.data('resident_id')
       var fname = button.data('fname')
       var lname = button.data('lname')
       var mname = button.data('mname')
       var purok = button.data('purok')
       var age = button.data('age')
       var bdate = button.data('bdate')
       var placeofbirth = button.data('placeofbirth')
       var family_id = button.data('family_id')
       var phil_health_id = button.data('phil_health_id')
       var id_4ps = button.data('id_4ps')
       var mobile = button.data('mobile')
       var sex = button.data('sex')
       var civil_status = button.data('civil_status')

       var modal = $(this)
       modal.find('.modal-title').text('Edit Resident Profile');
       modal.find('.modal-body #resident_id').val(resident_id);
       modal.find('.modal-body #purok').val(purok);
       modal.find('.modal-body #family_id').val(family_id);
       modal.find('.modal-body #fname').val(fname);
       modal.find('.modal-body #mname').val(mname);
       modal.find('.modal-body #lname').val(lname);
       modal.find('.modal-body #age').val(age);
       modal.find('.modal-body #bdate').val(bdate);
       modal.find('.modal-body #placeofbirth').val(placeofbirth);
       modal.find('.modal-body #sex').val(sex);
       modal.find('.modal-body #civil_status').val(civil_status);
       modal.find('.modal-body #mobile').val(mobile);
       modal.find('.modal-body #phil_health_id').val(phil_health_id);
       modal.find('.modal-body #id_4ps').val(id_4ps);
       })
</script>

   {{-----------------------------DELETE RESIDENT SCRIPT--------------------------------}}
<script>
   $('#deleteResidentModal').on('show.bs.modal', function(event) {
       var button = $(event.relatedTarget)
       var resident_id = button.data('resident_id')


       var modal = $(this)
       modal.find('.modal-title').text(' Delete Resident Profile');
       modal.find('.modal-body #resident_id').val(resident_id);
   })

</script>

   {{-----------------------------VIEW RESIDENT SCRIPT--------------------------------}}
<script>
   $('#viewResidentModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var resident_id = button.data('resident_id')
      var fname = button.data('fname')
      var lname = button.data('lname')
      var mname = button.data('mname')
      var purok = button.data('purok')
      var age = button.data('age')
      var bdate = button.data('bdate')
      var placeofbirth = button.data('placeofbirth')
      var family_id = button.data('family_id')
      var phil_health_id = button.data('phil_health_id')
      var id_4ps = button.data('id_4ps')
      var mobile = button.data('mobile')
      var sex = button.data('sex')
      var civil_status = button.data('civil_status')

      var modal = $(this)
      modal.find('.modal-title').text('RESIDENT PROFILE');
      modal.find('.modal-body #resident_id').val(resident_id);
      modal.find('.modal-body #purok').val(purok);
      modal.find('.modal-body #family_id').val(family_id);
      modal.find('.modal-body #fname').val(fname);
      modal.find('.modal-body #mname').val(mname);
      modal.find('.modal-body #lname').val(lname);
      modal.find('.modal-body #age').val(age);
      modal.find('.modal-body #bdate').val(bdate);
      modal.find('.modal-body #placeofbirth').val(placeofbirth);
      modal.find('.modal-body #sex').val(sex);
      modal.find('.modal-body #civil_status').val(civil_status);
      modal.find('.modal-body #mobile').val(mobile);
      modal.find('.modal-body #phil_health_id').val(phil_health_id);
      modal.find('.modal-body #id_4ps').val(id_4ps);
   })

</script>
@endsection
