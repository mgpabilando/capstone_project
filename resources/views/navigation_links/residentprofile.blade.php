@extends('layouts.home')
@section('content')
    <div class="col-md-9 content">
        <div class="d-flex flex-row justify-content-between align-items-center dbres-profile ">
        <div class="res-prof"><a href="dashboard.php"><i class="fas fa-chevron-left"></i></a>Resident Profile</div>
        <form class="dbres-search">
            <input class="dbres-input" placeholder="Search...">
            <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
        </form>
        </div>

        <div class="container position-relative d-flex flex-row  resident-list">
            <div class="col-9 res-list">
                <div class="res-account">
                    <p class="acc-info">NAME: </p>
                        <div class="d-flex res-info">
                            <p class="acc-info">SEX: </p>
                            <p class="acc-info">AGE: </p>
                        </div>
                    <div class="d-flex justify-content-between res-info">
                        <p class="acc-info">PUROK: </p>
                        <p class="acc-info"> FAMILY NO.: </p>

                        <!-- Button trigger modal -->
                        <button type="button" class="acc-info-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> See more... </button>

                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">RESIDENT INFORMATION</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="add-resident">
                                            <div class="d-flex flex-wrap identification">
                                                <div class="input-box">
                                                    <div class="details">Purok No.:</div>
                                                    <select class="purok" name="Select">
                                                        <option selected>Select</option>'
                                                        <option value="one">UNO</option>'
                                                        <option value="two">DOS</option>
                                                        <option value="three">TRES</option>
                                                        <option value="four">KWATRO</option>
                                                        <option value="five">SINGKO</option>
                                                        <option value="six">SAIS</option>
                                                        <option value="seven">SYETE</option>
                                                    </select>
                                                </div>
                                                <div class="input-box">
                                                    <div class="details">Family ID No.:</div>
                                                    <input type="text" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap identification">
                                                <div class="input-box">
                                                <div class="details">First Name:</div>
                                                <input type="text" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                <div class="details">Middle Name:</div>
                                                <input type="text" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                <div class="details">Last Name:</div>
                                                <input type="text" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap identification">
                                                <div class="input-box">
                                                <div class="details">Age:</div>
                                                <input type="text" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                <div class="details">Birthdate:</div>
                                                <input type="date" class="date" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                <div class="details">Address:</div>
                                                <input type="text" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap identification">
                                                <div class="input-box">
                                                <div class="details">Sex:</div>
                                                <select class="gender" name="gender">
                                                    <option selected>Select</option>'
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                </div>
                                                <div class="input-box">
                                                    <div class="details">Civil Status:</div>
                                                    <select class="civil-status" name="civil-stat">
                                                        <option selected>Select</option>'
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="divorced">Divorced</option>
                                                        <option value="Widowed">Widowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap identification">
                                                <div class="input-box">
                                                <div class="details">PhilHealth ID No:</div>
                                                <input type="text" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                <div class="details">4PS ID No:</div>
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
                <button type="button" class="btn-add-res text-wrap" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-user-plus"></i> Add Resident </button>
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ADD RESIDENT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="add-resident">
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">Purok No.:</div>
                                                <select class="purok" name="Select">
                                                <option selected>Select</option>'
                                                <option value="one">UNO</option>'
                                                <option value="two">DOS</option>
                                                <option value="three">TRES</option>
                                                <option value="four">KWATRO</option>
                                                <option value="five">SINGKO</option>
                                                <option value="six">SAIS</option>
                                                <option value="seven">SYETE</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Family ID No.:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">First Name:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Middle Name:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Last Name:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">Age:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Birthdate:</div>
                                                <input type="date" class="date" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Address:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">Sex:</div>
                                                <select class="gender" name="gender">
                                                <option selected>Select</option>'
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Civil Status:</div>
                                                    <select class="civil-status" name="civil-stat">
                                                    <option selected>Select</option>'
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">PhilHealth ID No:</div>
                                                <input type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">4PS ID No:</div>
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
        </div><!--col 3 end-->
    </div>
@endsection

