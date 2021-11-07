@extends('layouts.home')
@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Health Consultation</h3>
        </div>
    </div>

    <div class="head-alert">
        <div class="head-func d-flex align-items-center justify-content-end">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="consult-pane text-center">
            <!--NAVIGATION TABS-->
            <ul class="nav nav-tabs" id="tab-next-prev" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Pregnant_info">Pregnant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Deliveries_info">Deliveries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#EPI_info">EPI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#NTP_info">NTP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Family-Planning_info">Family Planning</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Diarrheal_info">Diarrheal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Others_info">Others</a>
              </li>
            </ul><!--/NAVIGATION TABS-->

            {{-- TAB CONTENT --}}
            <div class="tab-content">
              <div class="tab-pane active" id="Pregnant_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button">
                    <h4 class="consulttable-title" style="text-align: center">List of Pregnancy</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addpregconsul">
                      <i class="fa fa-plus"></i>Create
                    </div>
<<<<<<< HEAD
                    
=======
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                  </div>
                    <div class="table-responsive">
                        <table id="" class="display" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th scope="col">Patient_ID</th>
                                    <th scope="col">Resident_ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Pregnancy Order</th>
                                    <th scope="col">Last Menstrual Period</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                              @if ($pregnants)
                                @foreach ($pregnants as $pregpatient)
                                <tr>
                                  <th>{{ $pregpatient->id }}</th>
                                  <td>{{ $pregpatient->resident_id }}</td>
                                  <td>{{ $pregpatient->res_name }}</td>
                                  <td>{{ $pregpatient->res_age }}</td>
                                  <td>{{ $pregpatient->pregnancyorder }}</td>
                                  <td>{{ $pregpatient->lmp }}</td>
                                  <td>{{ date('F d, Y h:i:s a',strtotime($pregpatient['created_at'])) }}</td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpregconsul">
                                        <i class="manage fas fa-eye"></i></a>
                                        {{-- @include('modals.pregnancy.Show') --}}
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editpregconsul">
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                        {{-- @include('modals.pregnancy.Edit') --}}
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletepregconsul">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
                                        {{-- @include('modals.pregnancy.Delete') --}}
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Deliveries_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">List of Deliveries</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#adddeliveriesconsul">
                      <i class="fa fa-plus"></i>Create
                    </div>
<<<<<<< HEAD
                    @include('modals.deliveries.Add')
=======
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                  </div>
                    <div class="table-responsive">
                        <table id="" class="display" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th scope="col">Patient_ID</th>
                                    <th scope="col">Resident_ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Date Delivered</th>
                                    <th scope="col">Outcome</th>
                                    <th scope="col">Place</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <th></th>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                    <td>
                                      {{-----***************************** SHOW BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewdeliveriesconsul">
                                      <i class="manage fas fa-eye"></i></a>
                                      @include('modals.deliveries.Show')
                                  </td>
                                  <td>
                                      {{-----***************************** EDIT BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editdeliveriesconsul">
                                      <i class="manage fas fa-edit"></i>
                                      </a>
                                      @include('modals.deliveries.Edit')
                                  </td>
                                  <td>
                                      {{-----***************************** DELETE BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletedeliveriesconsul">
                                      <i class="manage fas fa-trash"></i>
                                      </a>
                                      @include('modals.deliveries.Delete')
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="EPI_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button align-items-center" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">EPI</h4> 
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addepiconsul">
                      <i class="fa fa-plus"></i>Create
                    </div>
<<<<<<< HEAD
                    @include('modals.EPI.Add')
=======
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                  </div>
                    <div class="table-responsive">
                        <table id="" class="display" style="padding: 10px;">
                            <thead>
                                <tr role="row">
                                  <th scope="col">Patient_ID</th>
                                  <th scope="col">Resident_ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Birthdate</th>
                                  <th scope="col">Meds Given</th>
                                  <th scope="col">Date Added</th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      {{-----***************************** SHOW BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewepiconsul">
                                      <i class="manage fas fa-eye"></i></a>
                                      @include('modals.EPI.Show')
                                  </td>
                                  <td>
                                      {{-----***************************** EDIT BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editepiconsul">
                                      <i class="manage fas fa-edit"></i>
                                      </a>
                                      @include('modals.EPI.Edit')
                                  </td>
                                  <td>
                                      {{-----***************************** DELETE BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deleteepiconsul">
                                      <i class="manage fas fa-trash"></i>
                                      </a>
                                      @include('modals.EPI.Delete')
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="NTP_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">NTP</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addntpconsul">
                      <i class="fa fa-plus"></i>Create
<<<<<<< HEAD
=======
                    </div>
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th scope="col">Patient ID</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Type of Consultation</th>
                                    <th scope="col">Purok</th>
                                    <th scope="col">Family No</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewnewconsultation">
                                        <i class="manage fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editnewconsultation">
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletenewconsultation">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                    </div>
                    @include('modals.NTP.Add')
                  </div>  
                  <div class="table-responsive">
                      <table id="" class="display" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                <th scope="col">Patient_ID</th>
                                <th scope="col">Resident_ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Date Added</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th></th>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewntpconsul">
                                    <i class="manage fas fa-eye"></i></a>
                                    @include('modals.NTP.Show')
                                </td>
                                <td>
                                    {{-----***************************** EDIT BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editntpconsul">
                                    <i class="manage fas fa-edit"></i>
                                    </a>
                                    @include('modals.NTP.Edit')
                                </td>
                                <td>
                                    {{-----***************************** DELETE BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletentpconsul">
                                    <i class="manage fas fa-trash"></i>
                                    </a>
                                    @include('modals.NTP.Delete')
                                </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Family-Planning_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Family Planning</h4> 
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addfpconsul">
                      <i class="fa fa-plus"></i>Create
                    </div>
<<<<<<< HEAD
                    @include('modals.familyplanning.Add')
                  </div> 
                    <div class="table-responsive">
                        <table id="" class="display" style="padding: 10px">
=======
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                            <thead>
                                <tr role="row">
                                  <th scope="col">Patient_ID</th>
                                  <th scope="col">Resident_ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Age</th>
                                  <th scope="col">Method Used</th>
                                  <th scope="col">Date Added</th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewfpconsul">
                                        <i class="manage fas fa-eye"></i></a>
                                        @include('modals.familyplanning.Show')
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editfpconsul">
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                        @include('modals.familyplanning.Edit')
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletefpconsul">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
                                        @include('modals.familyplanning.Delete')
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
              </div>
              </div>

              <div class="tab-pane" id="Diarrheal_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Diarrheal</h4>  
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#adddiarrhealconsul">
                      <i class="fa fa-plus"></i>Create
                    </div>
<<<<<<< HEAD
                    @include('modals.diarrheal.Add')
                  </div> 
                    <div class="table-responsive">
                        <table id="" class="display" style="padding: 10px">
=======
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                            <thead>
                                <tr role="row">
                                    <th scope="col">Patient_ID</th>
                                    <th scope="col">Resident_ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewdiarrhealconsul">
                                        <i class="manage fas fa-eye"></i></a>
                                        @include('modals.diarrheal.Show')
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editdiarrhealconsul">
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                        @include('modals.diarrheal.Edit')
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletediarrhealconsul">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
                                        @include('modals.diarrheal.Delete')
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Others_info">
                <div class="consultation-list d-flex justify-content-end">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Others</h4>  
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addotherconsul">
                      <i class="fa fa-plus"></i>Create
                    </div>
<<<<<<< HEAD
                    @include('modals.othersconsul.Add')
=======
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
                  </div>
                    <div class="table-responsive">
                        <table id="" class="display" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th scope="col">ID</th>
                                    <th scope="col">Service Rendered</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewotherconsul">
                                        <i class="manage fas fa-eye"></i></a>
                                        @include('modals.othersconsul.Show')
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editotherconsul">
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                        @include('modals.othersconsul.Edit')
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deleteotherconsul">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
                                        @include('modals.othersconsul.Delete')
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
<<<<<<< HEAD
                </div>  
              </div> 
            </div><!--/consult-pane-->
=======
                </div>
              </div>
            </div>

          </div><!--/consult-pane-->
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
        </div>
      </div>
      @include('modals.pregnancy.Add')
</div>
<<<<<<< HEAD
@endsection
=======
@endsection

@section("scripts")
<script>
  $(document).ready(function() {
  $('#consultdatatable').DataTable( {
  } );
} );
</script>
@endsection
>>>>>>> b09f156786ce79d5a8b2ae0f3d94b097a591ae9c
