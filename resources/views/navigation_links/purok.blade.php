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
          <div class="consult-pane text-center">
            <!--NAVIGATION TABS-->
            <ul class="nav nav-tabs" id="tab-next-prev" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Uno">Purok 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Dos">Purok 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Tres">Purok 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Kwatro">Purok 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Singko">Purok 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Sais">Purok 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Syete">Purok 7</a>
              </li>
            </ul><!--/NAVIGATION TABS-->

            {{-- TAB CONTENT --}}
            <div class="tab-content">
              <div class="tab-pane active" id="Uno">
                <div class="consultation-list align-items-center">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Uno List</h4>
                    </div>
                  <hr>
                    <div class="table-responsive">
                        <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th scope="col">Family ID No.</th>
                                    <th scope="col">Family Head</th>
                                    <th scope="col">Resident ID</th>
                                    <th scope="col">Purok</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @if ($residentprofile)
                              @foreach ( $residentprofile as $row)
                              <tr>
                                <th>{{ $row->purok }}</th>
                                <td>{{ $row->family_id }}</td>
                                <td>{{ $row->purok }}</td>
                                <td>{{ $row->lname }}</td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
                                </td>
                            </tr>
                              @endforeach
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>

              <div class="tab-pane" id="Dos">
                <div class="consultation-list  align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Dos List</h4>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">Family ID No.</th>
                                <th scope="col">Family Head</th>
                                <th scope="col">Resident ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Tres">
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Tres List</h4>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">Family ID No.</th>
                                <th scope="col">Family Head</th>
                                <th scope="col">Resident ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Kwatro">
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Kwatro List</h4>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">Family ID No.</th>
                                <th scope="col">Family Head</th>
                                <th scope="col">Resident ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Singko">
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Singko List</h4>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">Family ID No.</th>
                                <th scope="col">Family Head</th>
                                <th scope="col">Resident ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Sais">
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Sais List</h4>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">Family ID No.</th>
                                <th scope="col">Family Head</th>
                                <th scope="col">Resident ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Syete">
                <div class="consultation-list align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Purok Syete List</h4>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table id="" class="purok table table-bordered table-striped" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">Family ID No.</th>
                                <th scope="col">Family Head</th>
                                <th scope="col">Resident ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                    <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewpurok1">
                                    <i class="manage fas fa-eye"></i></a>
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
