@extends('layouts.home')
@include('layouts.navbar.topnavbar')
@include('layouts.navbar.sidebar')
@section('content')
    <div class="col-md-9 content">
        <div class="head-resprof">
            <div class="head-func d-flex align-items-center justify-content-end">
                <form class="form-search">
                    <input class="text-search" placeholder="Search...">
                    <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                </form>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (\Session::has('success'))
                    {{-- <div class="alert alert-success position-absolute">
                        <p>{{ \Session::get('success') }}</p>
                    </div> --}}
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ \Session::get('success') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Button trigger modal -->
                    <div type="button" class="btn-add-res d-flex align-items-center" title="Add New Resident"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-user-plus"></i>&nbsp;Add New</div>
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ADD RESIDENT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="add-resident" action="residentprofile" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">Purok No.:</div>
                                                <select class="purok" name="purok" >
                                                    <option selected>Select</option>'
                                                    <option value="1">UNO</option>'
                                                    <option value="2">DOS</option>
                                                    <option value="3">TRES</option>
                                                    <option value="4">KWATRO</option>
                                                    <option value="5">SINGKO</option>
                                                    <option value="6">SAIS</option>
                                                    <option value="7">SYETE</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Family ID No.:</div>
                                                <input name="family_id" type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">First Name:</div>
                                                <input name="fname" type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Middle Name:</div>
                                                <input name="mname" type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Last Name:</div>
                                                <input name="lname" type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">Age:</div>
                                                <input name="age" type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Birthdate:</div>
                                                <input name="bdate" type="date" class="date" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Place of Birth:</div>
                                                <input name="placeofbirth" type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">Sex:</div>
                                                <select class="gender" name="sex">
                                                <option selected>Select</option>'
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Civil Status:</div>
                                                <select class="civil-status" name="civil_status">
                                                    <option selected>Select</option>'
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">Contact Number:</div>
                                                <input name="mobile" type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap identification">
                                            <div class="input-box">
                                                <div class="details">PhilHealth ID No:</div>
                                                <input name="phil_health_id" type="text" placeholder="" required>
                                            </div>
                                            <div class="input-box">
                                                <div class="details">4PS ID No:</div>
                                                <input name="4ps_id" type="text" placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Add Resident</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
                            <!-- END MOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOODAL -->
        </div>

        <div class="container list-of-res">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Family Number</th>
                    <th scope="col">Purok</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($resident as $residentprofile)
                        <tr>
                            <th>{{ $residentprofile->id }}</th>
                            <td>{{ $residentprofile->family_id }}</td>
                            <td>{{ $residentprofile->purok }}</td>
                            <td>{{ $residentprofile->lname }}, {{ $residentprofile->fname }} {{ $residentprofile->mname }}</td>
                            <td>
                                <span type="button" class="btn-action view" data-bs-toggle="modal" data-bs-target="#viewResidentModal"><i class="fas fa-eye"></i>View</span>
                                <span type="button" class="btn-action edit"><i class="fas fa-edit"></i>Edit</span>
                                <span type="button" class="btn-action delete"><i class="fas fa-trash"></i>Delete</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>

        <div class="res-view modal fade" id="viewResidentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View Resident Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row head-info">
                            <div class="col-md-3">
                                <img src="images/macawayan logo.png" alt="" width="100px" height="100px">
                            </div>
                            <div class="col-md-9">
                                <h5>{{ $residentprofile->lname }}, {{ $residentprofile->fname }} {{ $residentprofile->mname }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    
@endsection

