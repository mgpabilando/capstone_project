@extends('layouts.home')

@section('content')
<div id="content">
    <section class="home-section">
        <nav class="navbar navbar-default d-flex">
            <div class="d-flex align-items-center">
                <ul class="topnav-link">
                    <li>
                        <span class="fa fa-bars"></span>
                    </li>
                </ul>

                <div class="account">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <img class="img-profile" width="40px" height="40px" src="{{asset ('images/profile.jpeg') }}" alt="">
                        </a>   
                        <div class="dropdown-menu profile">
                            @auth <div>Hi! I'm<h5>{{ Auth::user()->fname }}</h5></div>@endauth
                            <a class="dropdown-item" href=""><i class="fa fa-user-circle"></i><span class="usernav-link">User Profile</span></a>
                            <a class="dropdown-item" href="/signout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                <span class="usernav-link">Sign Out</span>
                            </a>
                            <form id="logout-form" action="signout" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>
                </div>
                
            </div>            
        </nav>

        <div class="row no-margin-padding">
            <div class="col-md-12 d-flex flex-row justify-content-between">
                <h3 class="block-title">Requests</h3>
            </div>
        </div>
    </section>

    <div class="col-md-9 content">
        <div class="d-flex flex-row justify-content-between align-items-center dbres-profile ">
            <h3 class="mb-0">MEDICINE NEED TO BE REQUESTED</h3>
            <form class="dbres-search">
                <input class="dbres-input" placeholder="Search...">
                <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <div class="container position-relative d-flex flex-row  resident-list">
            <div class="col-9 res-list">
                <div class="res-account">
                    <div class="d-grid flex-columns res-info">
                        <p class="acc-info">MEDICINE NAME: </p>
                        <p class="acc-info">QUANTITY: </p>
                        <div class="dlt-med d-flex justify-content-end me-1 mb-1">
                            <button type="button" class="btn btn-danger badge">Delete</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-3 position-relative d-flex justify-content-center add-res-modal">
                <div class="med_req position-relative d-flex flex-column align-items-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn col-12 btn-success fw-bold mt-3 " data-bs-toggle="modal" data-bs-target="#staticBackdropMed"><i class="fas fa-capsules"></i>
                        ADD MEDICINE
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropMed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ADD MEDICINE</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form class="add-resident">
                                      <div class="d-grid flex-rows identification">
                                          <div class="input-box">
                                              <div class="details">Medicine Name:</div>
                                              <input type="text" class="form-controll" placeholder="" required>
                                          </div>
                                          <div class="input-box">
                                              <div class="details">Quantity:</div>
                                              <input type="text" class="form-controll" placeholder="" required>
                                          </div>
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Medicine</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn col-12 fw-bold btn-success mt-3 " data-bs-toggle="modal" data-bs-target="#staticBackdropMedReq"> <i class="far fa-file-alt"></i>
                        GENERATE REQUEST
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropMedReq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">GENERATE REQUEST REPORT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form id="printThis" class="form-group">
                                    <h5 class="text-center">MEDICINE REQUEST FORM</h5>
                                    <br>
                                    <div  class="request_form">
                                    <p class="mb-1 fw-bold req_name">Requested By: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                                    <p class="mb-1 fw-bold req_name">Date Requested: <input type="date" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase req_date" name="" value=""></p>
                                    <p class="lh-sm fw-bold req_name">Request No.: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                                    <p class="lh-sm fst-italic text-uppercase fw-bold req_name">Medicine Needed:</p>

                                    <table class="table table-bordered border-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">QUANTITY</th>
                                          <th scope="col">MEDICINE NAME</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>data1</td>
                                          <td>data2</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <br>
                                  <div class="d-flex flex-row-reverse signature-line ">
                                  <p class="name_signature fw-bold mb-0 border-top ">Signature Over Printed Name</p>
                                </div>
                                
                                  </form>
                                </div>
                                <div class="modal-footer">
                                    <button id="btnPrint" type="button" class="btn btn-primary"><i <i class="fas fa-print"></i> PRINT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--col 3 end-->

        </div>


    </div>
</div>
@endsection