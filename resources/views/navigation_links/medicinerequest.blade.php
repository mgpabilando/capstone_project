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
            <div class="button-add">
              <button type="submit" class="btn btn-add mt-2 me-2" title="Add FamilyHead" data-bs-toggle="modal" data-bs-target="#addnewmedicine"><i class="fa fa-plus"></i> Create</button>
                <button type="submit" class="btn btn-add mt-2 me-2" title="Add FamilyHead" data-bs-toggle="modal" data-bs-target="#medrequest" style="width:200px;"><i class="fa fa-plus"></i> Generate Report</button>
                </div>
                </div>

                  <center>
                    <hr style="width: 95%; ">
                  <table id="consultdatatable" class="table table-bordered table-striped" style="padding: 10px; width: 99%; ">
                      <thead>
                          <tr role="row">
                              <th class="text-center"scope="col">ID No.</th>
                              <th class="text-center"scope="col">Medicine Name</th>
                              <th class="text-center"scope="col">Quantity</th>
                              <th class="text-center"scope="col"></th>
                              <th class="text-center"scope="col"></th>
                              <th class="text-center"scope="col"></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th class="text-center"></th>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center">
                                  {{-----***************************** SHOW BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewnewconsultation">
                                  <i class="manage fas fa-eye"></i></a>
                              </td>
                                    <!-- Modal For Show -->
                                    <div class="modal fade" id="viewnewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
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
                                        </div>
                                      </div>
                                    </div>

                              <td class="text-center">
                                  {{-----***************************** EDIT BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editnewconsultation">
                                  <i class="manage fas fa-edit"></i>
                                  </a>
                              </td>

                              <!-- Modal for Edit -->
                              <div class="modal fade" id="editnewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
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
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <td class="text-center">
                                  {{-----***************************** DELETE BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletenewconsultation">
                                  <i class="manage fas fa-trash"></i>
                                  </a>
                              </td>
                              <!-- Modal for Delete -->
                              <div class="modal fade" id="deletenewconsultation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="add-resident" action="" method="POST">
                                          <div class="modal-body m-0 p-0">
                                              <div class="input-box">
                                                  <input name="resident_id" id="resident_id" type="hidden" placeholder="">
                                              </div>
                                              <h6 class="p-0 m-0">Are you sure you want to delete this?</h6>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-danger">Delete Resident</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
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

<div class="modal fade" id="medrequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Generate Medicine Report</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="medrequestPrint" style="width:100%;" class="form-group-mar" method="post">
          <div class="d-flex justify-content-center flex-column mar-report">
          <h5 class="text-center">MEDICINE REQUEST FORM</h5>
              <br>
                <div  class="request_form">
                  <p class="mb-1 fw-bold req_name">Requested By: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                  <p class="mb-1 fw-bold req_name">Date Requested: <input type="date" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase req_date" name="" value=""></p>
                  <p class="lh-sm fw-bold req_name">Request No.: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                  <p class="lh-sm fst-italic text-uppercase fw-bold req_name">Medicine Needed:</p>

                  <center>
                    <table style="width:100%" class="table table-bordered border-dark">

                      <thead>
                        <tr>
                        <th class="text-center"scope="col">QUANTITY</th>
                        <th class="text-center"scope="col">MEDICINE NAME</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>data1</td>
                        <td>data2</td>
                        </tr>
                        </tbody>
                        </table>
                        </center>
                        </div>
                        <br>
                        <div class="d-flex flex-row-reverse signature-line ">
                        <p class="name_signature fw-bold mb-0 border-top ">Signature Over Printed Name</p>
                </div>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
        <button id="medreqBtn" type="button" class="btn btn-primary"><i class="fas fa-print"></i> PRINT</button>
      </div>
    </div>
  </div>
</div>

</div>

<script>document.getElementById("medreqBtn").onclick = function() {
    printElement(document.getElementById("medrequestPrint"));
    window.print();
}

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}

</script>
@endsection
