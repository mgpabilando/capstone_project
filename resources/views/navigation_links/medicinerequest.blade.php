@extends('layouts.home')
@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Medicine Requests</h3>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="container list-of-res medsRequest-list align-items-center bhms-box-shadow">
                    <div class="d-flex">
                        <h4 class="fw-bold head-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">List of Request</h4>
                        <button type="submit" class="btn btn-add mt-2 me-2" data-bs-toggle="modal" data-bs-target="#addnewmedicine">
                            <i class="fas fa-pills"></i> ADD</button>
                            @include('modals.MedicineRequest.Add')
                        <button type="submit" class="btn btn-add mt-2 me-2" data-bs-toggle="modal" data-bs-target="#medrequest" style="width:200px;">
                            <i class="fas fa-print"></i> GENERATE REPORT</button>
                            @include('modals.MedicineRequest.Generate')
                    </div>
                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="medRequest-datatable" class="table table-bordered table-striped datatable-hover">
                            <thead>
                                <tr role="row">
                                    <th class="text-center"scope="col">ID No.</th>
                                    <th class="text-center"scope="col">Medicine Name</th>
                                    <th class="text-center"scope="col">Quantity</th>
                                    <th class="text-center"scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if($medicine_requests)
                                    @foreach($medicine_requests as $medrequest)
                                    <tr>
                                        <th class="text-center">{{$medrequest->id}}</th>
                                        <td class="text-center">{{$medrequest->medicine_name}}</td>
                                        <td class="text-center">{{$medrequest->med_quantity}}</td>
                                        <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                            {{-----***************************** SHOW BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-primary"
                                            data-medicine_name="{{ $medrequest->medicine_name }}"
                                            data-med_quantity="{{ $medrequest->med_quantity }}"
                                            data-bs-target="#viewNewConsultation">
                                            <i class="fas fa-eye"></i>
                                            </a>
                                            @include('modals.MedicineRequest.Show')

                                            {{-----***************************** EDIT BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-warning"
                                            data-medicine_name="{{ $medrequest->medicine_name }}"
                                            data-med_quantity="{{ $medrequest->med_quantity }}"
                                            data-bs-target="#editnewconsultation">
                                            <i class="manage fas fa-edit"></i>
                                            </a>
                                            @include('modals.MedicineRequest.Edit')

                                            {{-----***************************** DELETE BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletenewconsultation" data-id="{{$medrequest->id}}">
                                            <i class="manage fas fa-trash"></i>
                                            </a>
                                            @include('modals.MedicineRequest.Delete')
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>