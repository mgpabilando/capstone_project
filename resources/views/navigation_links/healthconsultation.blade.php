@extends('layouts.home')
@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Health Consultation</h3>
        </div>
    </div>

    {{-- <div class="hc-btn-add">
        <div class="add-sec d-flex align-items-center justify-content-end">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="tab">
                    <button class="tablinks active" onclick="openConsul(event, 'pregnant')">PREGNANT</button>
                    <button class="tablinks" onclick="openConsul(event, 'deliveries')">DELIVERIES</button>
                    <button class="tablinks" onclick="openConsul(event, 'epi')">EPI</button>
                    <button class="tablinks" onclick="openConsul(event, 'ntp')">NTP</button>
                    <button class="tablinks" onclick="openConsul(event, 'fam-plan')">FAMILY PLANNING</button>
                    <button class="tablinks" onclick="openConsul(event, 'diarrheal')">DIARRHEAL</button>
                    <button class="tablinks" onclick="openConsul(event, 'other-services')">OTHERS</button>
                  </div>
                  
                  <div id="pregnant" class="tabcontent" style="display:block">
                    <div class="consultation-list bhms-box-shadow">
                            <h3 class="consulttable-title">Pregnancy Consultation</h3>
                            <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                                <i class="fas fa-user-plus"></i>Add New
                            </div>  
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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
                  
                  <div id="deliveries" class="tabcontent" style="display:none">
                    <div class="consultation-list bhms-box-shadow">
                        <h3 class="consulttable-title">Deliveries Consultation</h3>
                        <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                            <i class="fas fa-user-plus"></i>Add New
                        </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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
                  
                  <div id="epi" class="tabcontent" style="display:none">
                    <div class="consultation-list bhms-box-shadow">
                        <h3 class="consulttable-title">EPI Consultation</h3>
                        <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                            <i class="fas fa-user-plus"></i>Add New
                        </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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

                  <div id="ntp" class="tabcontent" style="display:none">
                    <div class="consultation-list bhms-box-shadow">
                        <h3 class="consulttable-title">NTP Consultation</h3>
                        <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                            <i class="fas fa-user-plus"></i>Add New
                        </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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
                  
                  <div id="fam-plan" class="tabcontent" style="display:none">
                    <div class="consultation-list bhms-box-shadow">
                        <h3 class="consulttable-title">Family Planning Consultation</h3>
                        <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                            <i class="fas fa-user-plus"></i>Add New
                        </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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
                  
                  <div id="diarrheal" class="tabcontent" style="display:none">
                    <div class="consultation-list bhms-box-shadow">
                        <h3 class="consulttable-title">Diarrheal Problem Consultation</h3>
                        <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                            <i class="fas fa-user-plus"></i>Add New
                        </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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
    
                  <div id="other-services" class="tabcontent" style="display:none">
                    <div class="consultation-list bhms-box-shadow">
                        <h3 class="consulttable-title">Other Consultation</h3>
                        <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#addnewconsultation">
                            <i class="fas fa-user-plus"></i>Add New
                        </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="consultdatatable" class="table table-bordered table-striped">
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
                {{-- end-sample --}}
                
            </div>
        </div>

        <!--******************************-------------- ADD CONSULTATION MODAL ------------*************************************-->   
        <div class="consul-add modal fade" id="addnewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-consult" action="{{route ('healthconsultation.store')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-search d-flex justify-content-center">
                                
                                <input type="text" id="hc-search-input" placeholder="Search...">
                                {{-- <span class="hc-search-btn" type="submit"><i class="fas fa-search"></i></span> --}}
                                <div id="residentlist"></div>
                                {{ csrf_field() }}
                            </div>
                            <hr>
                            <div class="res_prof row">
                                <div class="input-box col pb-3">
                                    <div class="details">NAME:</div>
                                    <input type="text" id="resname" placeholder="" required>
                                </div>                           
                                <div class="input-box col pb-3">
                                    <div class="details">RESIDENT ID NO.:</div>
                                    <input type="text" id="resID" placeholder="" required>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">FAMILY HEAD:</div>
                                    <input type="text" id="resfamilyhead" placeholder="" required>
                                </div>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">TYPE OF CONSULTATION:</div>
                                    <select type="text" id="consultation_type" placeholder="" required>
                                        <option selected>Select</option>
                                        <option value="Pregnant">Pregnant</option>
                                        <option value="Deliveries">Deliveries</option>
                                        <option value="EPI">EPI</option>
                                        <option value="NTP">NTP</option>
                                        <option value="FamilyPlanning">Family Planning</option>
                                        <option value="Diarrheal">Diarrheal</option>
                                        <option value="Other">Select</option>
                                    </select>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">LMP:</div>
                                    <input type="date" id="lmp" placeholder="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">HEIGHT.:</div>
                                    <input type="text" id="height_cm" placeholder="" required>
                                </div>

                                <div class="input-box col pb-3">
                                <div class="details">WEIGHT:</div>
                                <input type="text" id="weight_kg" placeholder="" required>
                                </div>
                            </div>    
                            <hr>
                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">COMPLAINS:</div>
                                    <textarea class="comment" id="complains" placeholder="Type here..."></textarea>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">FINDINGS:</div>
                                    <textarea class="comment" id="findings" placeholder="Type here..."></textarea>
                                </div>
                                <div class="input-box col pb-3">
                                    <div class="details">DIAGNOSIS:</div>
                                    <textarea class="comment" id="diagnosis" placeholder="Type here..."></textarea>
                                </div>
                                <div class="input-box col pb-3">
                                    <div class="details">TREATMENT:</div>
                                    <textarea class="comment" id="treatment" placeholder="Type here..."></textarea>
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
        <!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->  

        <!--**************************------------------- VIEW CONSULTATION MODAL -------------------****************************---------->   
        <div class="consul-view modal fade" id="viewnewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-consult" action="#{{-- {{route ('healthconsultation.store')}} --}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="res_prof row">
                                <div class="input-box col pb-3">
                                    <div class="details">NAME:</div>
                                    <input type="text" id="resname" placeholder="" readonly>
                                </div>                           
                                <div class="input-box col pb-3">
                                    <div class="details">RESIDENT ID NO.:</div>
                                    <input type="text" id="resID" placeholder="" readonly>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">FAMILY HEAD:</div>
                                    <input type="text" id="resfamilyhead" placeholder="" readonly>
                                </div>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">TYPE OF CONSULTATION:</div>
                                    <select type="text" id="consultation_type" placeholder="" readonly></select>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">LMP:</div>
                                    <input type="date" id="lmp" placeholder="" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">HEIGHT.:</div>
                                    <input type="text" id="height_cm" placeholder="" readonly>
                                </div>

                                <div class="input-box col pb-3">
                                <div class="details">WEIGHT:</div>
                                <input type="text" id="weight_kg" placeholder="" readonly>
                                </div>
                            </div>    
                            <hr>
                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">COMPLAINS:</div>
                                    <textarea class="comment" id="complains" placeholder="" readonly></textarea>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">FINDINGS:</div>
                                    <textarea class="comment" id="findings" placeholder="" readonly></textarea>
                                </div>
                                <div class="input-box col pb-3">
                                    <div class="details">DIAGNOSIS:</div>
                                    <textarea class="comment" id="diagnosis" placeholder="" readonly></textarea>
                                </div>
                                <div class="input-box col pb-3">
                                    <div class="details">TREATMENT:</div>
                                    <textarea class="comment" id="treatment" placeholder="" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--**************************------------------- VIEW CONSULTATION MODAL ENDS HERE -------------------****************************---------->   

        <!--**************************------------------- EDIT CONSULTATION MODAL -------------------****************************---------->   
        <div class="consul-edit modal fade" id="editnewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">EDIT HEALTH CONSULTATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-consult" action="#{{-- {{route ('healthconsultation.store')}} --}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="res_prof row">
                                <div class="input-box col pb-3">
                                    <div class="details">NAME:</div>
                                    <input type="text" id="resname" placeholder="" readonly>
                                </div>                           
                                <div class="input-box col pb-3">
                                    <div class="details">RESIDENT ID NO.:</div>
                                    <input type="text" id="resID" placeholder="" readonly>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">FAMILY HEAD:</div>
                                    <input type="text" id="resfamilyhead" placeholder="" readonly>
                                </div>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">TYPE OF CONSULTATION:</div>
                                    <select type="text" id="consultation_type" placeholder=""></select>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">LMP:</div>
                                    <input type="date" id="lmp" placeholder="" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">HEIGHT.:</div>
                                    <input type="text" id="height_cm" placeholder="">
                                </div>

                                <div class="input-box col pb-3">
                                <div class="details">WEIGHT:</div>
                                <input type="text" id="weight_kg" placeholder="">
                                </div>
                            </div>    
                            <hr>
                            <div class="row">
                                <div class="input-box col pb-3">
                                    <div class="details">COMPLAINS:</div>
                                    <textarea class="comment" id="complains" placeholder=""></textarea>
                                </div>

                                <div class="input-box col pb-3">
                                    <div class="details">FINDINGS:</div>
                                    <textarea class="comment" id="findings" placeholder=""></textarea>
                                </div>
                                <div class="input-box col pb-3">
                                    <div class="details">DIAGNOSIS:</div>
                                    <textarea class="comment" id="diagnosis" placeholder=""></textarea>
                                </div>
                                <div class="input-box col pb-3">
                                    <div class="details">TREATMENT:</div>
                                    <textarea class="comment" id="treatment" placeholder=""></textarea>
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

    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    // $(document).ready(function(){
    
    //   $( "#hc-search-input" ).autocomplete({
    //     source: function( request, response ) {
    //       // Fetch data
    //       $.ajax({
    //         url:"{{route('Consul.fetch')}}",
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //            _token: CSRF_TOKEN,
    //            search: request.term
    //         },
    //         success: function( data ) {
    //            response( data );
    //         }
    //       });
    //     },
    //     select: function (event, ui) {
    //        // Set selection
    //        $('#hc-search-input').val(ui.item.label); // display the selected text
    //        $('#resname').val(ui.item.value); // save selected id to input
    //        return false;
    //     }
    //   });
    
    // });

    function openConsul(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>

@endsection