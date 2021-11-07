@extends('layouts.home')
@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Purok</h3>
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
                <a class="nav-link active" data-bs-toggle="tab" href="#Pregnant_info">Purok 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Deliveries_info">Purok 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#EPI_info">Purok 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#NTP_info">Purok 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Family-Planning_info">Purok 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Diarrheal_info">Purok 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Others_info">Purok 7</a>
              </li>
            </ul><!--/NAVIGATION TABS-->

            {{-- TAB CONTENT --}}
            <div class="tab-content">
              <div class="tab-pane active" id="Pregnant_info">
                <div class="consultation-list align-items-center">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Uno List</h4>
                    </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th scope="col">Family ID No.</th>
                                    <th scope="col">Family Head</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
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
                <div class="consultation-list  align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Dos List</h4>
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                  <th scope="col">Family ID No.</th>
                                  <th scope="col">Family Head</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th></th>
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
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Tres List</h4>
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                  <th scope="col">Family ID No.</th>
                                  <th scope="col">Family Head</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th></th>
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
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Kwatro List</h4>
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
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Singko List</h4>
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                  <th scope="col">Family ID No.</th>
                                  <th scope="col">Family Head</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th></th>
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
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Sais List</h4>
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                  <th scope="col">Family ID No.</th>
                                  <th scope="col">Family Head</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th></th>
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
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Syete List</h4>
                  </div>
                  <hr>
                    <div class="table-responsive" style="border: 1px solid grey;">
                        <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                  <th scope="col">Family ID No.</th>
                                  <th scope="col">Family Head</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th></th>
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
