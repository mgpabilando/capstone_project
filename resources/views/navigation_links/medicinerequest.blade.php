@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Requests</h3>
        </div>
    </div>

    <div class="col-md-12 d-flex  d-inline-flex justify-content-center content">
              <div class="mt-2 table-responsive" style="border: 1px solid grey; width: 95%;">

                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Medicine Request List</h4>
                  <button type="submit" class="btn btn-add mt-2 me-2" title="Add FamilyHead" data-bs-toggle="modal" data-bs-target="#addnewmedicine"><i class="fa fa-plus"></i> Create</button>
                </div>

                  <center>
                    <hr style="width: 95%; ">
                  <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px; width: 99%; ">
                      <thead>
                          <tr role="row">
                              <th scope="col">ID No.</th>
                              <th scope="col">Medicine Name</th>
                              <th scope="col">Quantity</th>
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
                </center>
          </div>
        </div>
      </div>

      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addnewmedicine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New Medicine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">

          <div class="form-group">
            <label for="">Medicine Name</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" class="form-control" id="" placeholder="">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-primary">ADD</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
