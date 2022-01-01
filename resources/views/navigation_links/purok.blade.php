@extends('layouts.home')
@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Purok</h3>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12">
            <div class="consultation-list align-items-center bhms-box-shadow">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok List</h4>
              </div>
              <hr>
              <div class="table-responsive">
                  <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                      <thead>
                        <tr role="row">
                            <th class="text-center" scope="col">Purok</th>
                            <th class="text-center" scope="col">Resident ID</th>
                            <th class="text-center" scope="col">Family ID No.</th>
                            <th class="text-center" scope="col">Family Head (Resident ID)</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Action</th>
                            
                        </tr>
                      </thead>

                      <tbody>
                        @if ($residentprofile)
                        @foreach ( $residentprofile as $row)
                        <tr>
                          <th class="text-center">{{ $row->purok }}</th>
                          <td class="text-center">{{ $row->id}}</td>
                          <td class="text-center">{{ $row->family_id }}</td>
                          <td class="text-center">{{ $row->familyNumbers->resident_id ?? 'Member' }}</td>
                          <td class="text-center">{{ $row->fname }} {{ $row->mname }} {{ $row->lname }}</td>
                          <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                            {{-----***************************** SHOW BUTTON *******************************------}}
                              <a data-bs-toggle="modal" type="button" class="btn btn-primary resview"  
                                data-resident_id="{{$row->id}}" data-purok="{{$row->purok}}" data-fname="{{$row->fname}}"
                                data-lname="{{$row->lname}}" data-mname="{{$row->mname}}"
                                data-family_id="{{ $row->family_id }}" data-age="{{ $row->age }}"
                                data-bdate="{{ $row->bdate }}" data-placeofbirth="{{ $row->placeofbirth }}"
                                data-sex="{{ $row->sex }}" data-mobile="{{ $row->mobile }}"
                                data-civil_status="{{ $row->civil_status }}"
                                data-phil_health_id="{{ $row->phil_health_id }}" data-id_4ps="{{ $row->id_4ps }}"
                                data-bs-target="#viewresidentdetail">
                              <i class="manage fas fa-eye"></i></a>
                              @include("modals.Purok.Show")
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
    </div>
</div>
@endsection

@section('scripts')
  <script>
    //   {{-----------------------------VIEW RESIDENT SCRIPT--------------------------------}
$('#viewresidentdetail').on('show.bs.modal', function(event) {
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
