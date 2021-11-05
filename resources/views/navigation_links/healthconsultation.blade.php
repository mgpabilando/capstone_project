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
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button">
                    <h4 class="consulttable-title" style="text-align: center">Pregnancy Consultation</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Deliveries_info">
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Deliveries</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="EPI_info">
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">EPI</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="NTP_info">
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">NTP</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Family-Planning_info">
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Family Planning</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Diarrheal_info">
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Diarrheal</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Others_info">
                <div class="consultation-list d-flex align-items-center">
                  <div class="title-and-button" style="margin: 10px">
                    <h4 class="consulttable-title" style="text-align: center">Others</h4>
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                      <i class="fa fa-plus"></i>Create
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
                    </div>
                </div>
              </div>
            </div>
            
          </div><!--/consult-pane-->
        </div>
      </div>
</div>
@endsection

@section("scripts")
<script>
  $(document).ready(function() {
  $('#consultdatatable').DataTable( {
  } );
} );
</script>
@endsection