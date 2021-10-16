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
                <h3 class="block-title">Purok</h3>
            </div>
        </div>

        <div class="col-md-9 content">
            <div class="purok-list">
              <!--modal start-->
            <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                PUROK <br> UNO
            </button>
    
    
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">PUROK UNO LIST</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-block justify-content-center">
                            <div class="purok-family">
                                <p class="fam-no">FAMILY NO.:</p>
                                <P class="fam-head">FAMILY HEAD:</p>
                                <div class="text-end see-more">
                                    <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop1SeeMore">
                                        See more...
                                    </a>
                                    <div class="modal fade" id="staticBackdrop1SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="purok-family-seemore">
                                                        <p class="text-start fam-head">FAMILY HEAD:</p>
                                                    </div>
    
                                                    <div class="purok-family-seemore">
                                                        <p class="text-start fam-head">FAMILY MEMBER:</p>
                                                        <center>
                                                        <table class="table table-bordered border-success  justify-content-center">
                                                          <thead class="bg-success">
                                                            <tr class="d-flex">
                                                              <th class="col">Resident ID. No</th>
                                                              <th class="col">NAME</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr class="d-flex">
                                                              <td class="col">data</td>
                                                              <td class="col">data</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </center>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    <!--modal end-->
    
    <!--modal start-->
    <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
      PUROK <br> DOS
    </button>
    
    
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">PUROK DOS LIST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-block justify-content-center">
                  <div class="purok-family">
                      <p class="fam-no">FAMILY NO.:</p>
                      <P class="fam-head">FAMILY HEAD:</p>
                      <div class="text-end see-more">
                          <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop2SeeMore">
                              See more...
                          </a>
                          <div class="modal fade" id="staticBackdrop2SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY HEAD:</p>
                                          </div>
    
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY MEMBER:</p>
                                              <center>
                                              <table class="table table-bordered border-success  justify-content-center">
                                                <thead class="bg-success">
                                                  <tr class="d-flex">
                                                    <th class="col">Resident ID. No</th>
                                                    <th class="col">NAME</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="d-flex">
                                                    <td class="col">data</td>
                                                    <td class="col">data</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </center>
    
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
    <!--modal end-->
    
    
    <!--modal start-->
    <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
      PUROK <br> TRES
    </button>
    
    
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">PUROK TRES LIST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-block justify-content-center">
                  <div class="purok-family">
                      <p class="fam-no">FAMILY NO.:</p>
                      <P class="fam-head">FAMILY HEAD:</p>
                      <div class="text-end see-more">
                          <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop3SeeMore">
                              See more...
                          </a>
                          <div class="modal fade" id="staticBackdrop3SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY HEAD:</p>
                                          </div>
    
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY MEMBER:</p>
                                              <center>
                                              <table class="table table-bordered border-success  justify-content-center">
                                                <thead class="bg-success">
                                                  <tr class="d-flex">
                                                    <th class="col">Resident ID. No</th>
                                                    <th class="col">NAME</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="d-flex">
                                                    <td class="col">data</td>
                                                    <td class="col">data</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </center>
    
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
    <!--modal end-->
    
    
    <!--modal start-->
    <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
      PUROK <br> CUATRO
    </button>
    
    
    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">PUROK CUATRO LIST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-block justify-content-center">
                  <div class="purok-family">
                      <p class="fam-no">FAMILY NO.:</p>
                      <P class="fam-head">FAMILY HEAD:</p>
                      <div class="text-end see-more">
                          <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop4SeeMore">
                              See more...
                          </a>
                          <div class="modal fade" id="staticBackdrop4SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY HEAD:</p>
                                          </div>
    
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY MEMBER:</p>
                                              <center>
                                              <table class="table table-bordered border-success  justify-content-center">
                                                <thead class="bg-success">
                                                  <tr class="d-flex">
                                                    <th class="col">Resident ID. No</th>
                                                    <th class="col">NAME</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="d-flex">
                                                    <td class="col">data</td>
                                                    <td class="col">data</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </center>
    
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
    <!--modal end-->
    
    
    <!--modal start-->
    <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
      PUROK <br> CINCO
    </button>
    
    
    <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">PUROK CINCO LIST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-block justify-content-center">
                  <div class="purok-family">
                      <p class="fam-no">FAMILY NO.:</p>
                      <P class="fam-head">FAMILY HEAD:</p>
                      <div class="text-end see-more">
                          <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop5SeeMore">
                              See more...
                          </a>
                          <div class="modal fade" id="staticBackdrop5SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY HEAD:</p>
                                          </div>
    
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY MEMBER:</p>
                                              <center>
                                              <table class="table table-bordered border-success  justify-content-center">
                                                <thead class="bg-success">
                                                  <tr class="d-flex">
                                                    <th class="col">Resident ID. No</th>
                                                    <th class="col">NAME</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="d-flex">
                                                    <td class="col">data</td>
                                                    <td class="col">data</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </center>
    
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
    <!--modal end-->
    
    <!--modal start-->
    <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
      PUROK <br> SAIS
    </button>
    
    
    <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">PUROK SAIS LIST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-block justify-content-center">
                  <div class="purok-family">
                      <p class="fam-no">FAMILY NO.:</p>
                      <P class="fam-head">FAMILY HEAD:</p>
                      <div class="text-end see-more">
                          <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop6SeeMore">
                              See more...
                          </a>
                          <div class="modal fade" id="staticBackdrop6SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY HEAD:</p>
                                          </div>
    
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY MEMBER:</p>
                                              <center>
                                              <table class="table table-bordered border-success  justify-content-center">
                                                <thead class="bg-success">
                                                  <tr class="d-flex">
                                                    <th class="col">Resident ID. No</th>
                                                    <th class="col">NAME</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="d-flex">
                                                    <td class="col">data</td>
                                                    <td class="col">data</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </center>
    
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
    <!--modal end-->
    
    
    <!--modal start-->
    <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
      PUROK <br> SIETE
    </button>
    
    
    <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">PUROK SIETE LIST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-block justify-content-center">
                  <div class="purok-family">
                      <p class="fam-no">FAMILY NO.:</p>
                      <P class="fam-head">FAMILY HEAD:</p>
                      <div class="text-end see-more">
                          <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop7SeeMore">
                              See more...
                          </a>
                          <div class="modal fade" id="staticBackdrop7SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY HEAD:</p>
                                          </div>
    
                                          <div class="purok-family-seemore">
                                              <p class="text-start fam-head">FAMILY MEMBER:</p>
                                              <center>
                                              <table class="table table-bordered border-success  justify-content-center">
                                                <thead class="bg-success">
                                                  <tr class="d-flex">
                                                    <th class="col">Resident ID. No</th>
                                                    <th class="col">NAME</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="d-flex">
                                                    <td class="col">data</td>
                                                    <td class="col">data</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </center>
    
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
    <hr>
    </section>
</div>
@endsection