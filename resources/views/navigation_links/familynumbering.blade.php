@extends('layouts.home')

@section('content')
<div id="content">
  @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
      <div class="col-md-12 d-flex flex-row justify-content-between">
          <h3 class="block-title">Family Numbering</h3>
          <div type="button" class="btn-add-res d-flex justify-content-center" title="Add New Resident"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              <i class="fas fa-user-plus"></i>&nbsp;Add New
          </div>
      </div>
  </div>

    <div class="col-md-9 content">
        <div class="d-flex flex-row justify-content-between align-items-center dbres-profile ">
          <h3 class="mb-0">FAMILY HEAD LIST</h3>
          <form class="dbres-search">
            <input class="dbres-input" placeholder="Search...">
            <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>

        <div class="container position-relative d-flex flex-row  resident-list">
          <div class="col-9 res-list">
            <div class="res-account">
              <div class="d-grid flex-columns res-info">
                <p class="acc-info">FAMILY NO.: </p>
                <p class="acc-info">FAMILY HEAD: </p>
              </div>
              <div class="d-flex justify-content-end res-info">
                <!-- Button trigger modal -->
                <button type="button" class="acc-info-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> See more... </button>

                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">FAMILY HEAD INFORMATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="add-resident">

                          <div class="d-flex flex-columns identification">
                            <div class="input-box">
                              <div class="details">PUROK:</div>
                              <input type="text" placeholder="" required>
                            </div>
                            <div class="input-box">
                              <div class="details">FAMILY ID NO.:</div>
                              <input type="text" placeholder="" required>
                            </div>
                            <div class="input-box">
                              <div class="details">FAMILY HEAD:</div>
                              <input type="text" placeholder="" required>
                            </div>
                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-success">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





            </div>
          </div>

          <div class="col-3 position-relative d-flex justify-content-center add-res-modal">

            <div class=" d-grid add-resident-modal">

              <!-- Button trigger modal -->
              <button type="button" class="btn-add-res text-wrap" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-users"></i> ADD FAMILY HEAD </button>

              <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">ADD FAMILY HEAD</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="add-resident">

                      <div class="d-flex flex-columns identification">
                        <div class="input-box">
                          <div class="details">PUROK:</div>
                          <input type="text" placeholder="" required>
                        </div>
                        <div class="input-box">
                          <div class="details">FAMILY ID NO.:</div>
                          <input type="text" placeholder="" required>
                        </div>
                        <div class="input-box">
                          <div class="details">FAMILY HEAD:</div>
                          <input type="text" placeholder="" required>
                        </div>
                      </div>

                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-success">Add Resident</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END MOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOODAL -->
            </div>

          </div>
          <!--col 3 end-->

        </div>


      </div>
</div>
@endsection