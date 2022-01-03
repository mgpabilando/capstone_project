@extends('layouts.home')
@section('content')
<div id="content" style="height: auto">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Resident Profile</h3>
        </div>
    </div>

    {{--RESIDENT PROFILE TABLE--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container list-of-res bhms-box-shadow">

                    <div class="d-flex">
                        <h4 class="fw-bold head-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">Resident List</h4>
                            @if(request()->has('view_deleted'))
                                <a href="{{ route('residentprofile.index') }}" class="btn btn-primary">View All</a>
                            @else
                                <button type="submit" class="btn btn-add me-2" title="Add New Resident" data-bs-toggle="modal" data-bs-target="#registerresident">
                                <i class="fas fa-user-plus"></i> Add</button>
                                @include('modals.residentprofile.Add')
                                <a href="{{ route('residentprofile.index', ['view_deleted' => 'DeletedRecords']) }}"
                                class="btn btn-danger">Trash </a>
                            @endif
                    </div>
                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="residentprofile-datatable" class="table table-bordered table-striped datatable-hover">
                                <thead>
                                    <tr role="row">
                                        <th class="text-center" scope="col">ID</th>
                                        <th class="text-center" scope="col">Family No</th>
                                        <th class="text-center" scope="col">Purok</th>
                                        <th class="text-center" scope="col">Last Name</th>
                                        <th class="text-center" scope="col">First Name</th>
                                        <th class="text-center" scope="col">Middle Name</th>
                                        <th class="text-center" scope="col">Date Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($residents)
                                    @foreach($residents as $residentprofile)
                                        <tr>
                                            <td class="text-center">{{ $residentprofile->family_id }}</td>
                                            <th class="text-center">{{ $residentprofile->id }}</th>
                                            <td class="text-center">{{ $residentprofile->purok }}</td>
                                            <td class="text-center">{{ $residentprofile->lname }}</td>
                                            <td class="text-center">{{ $residentprofile->fname }}</td>
                                            <td class="text-center">{{ $residentprofile->mname }}</td>
                                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($residentprofile['created_at'])) }}</td>
                                            <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                                @if (request()->has('view_deleted'))
                                                    <a href="{{ route('resident.restore', $residentprofile->id) }}" class="btn btn-success">Restore</a>
                                                    <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal"  data-resident_id="{{$residentprofile->id}}">Delete
                                                    </a>
                                                    @include('modals.residentprofile.PermanentDelete')
                                                @else
                                                {{-----***************************** SHOW BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-primary resview"  data-resident_id="{{$residentprofile->id}}" data-purok="{{$residentprofile->purok}}" data-fname="{{$residentprofile->fname}}"
                                                data-lname="{{$residentprofile->lname}}" data-mname="{{$residentprofile->mname}}"
                                                data-family_id="{{ $residentprofile->family_id }}" data-age="{{ $residentprofile->age }}"
                                                data-bdate="{{ $residentprofile->bdate }}" data-placeofbirth="{{ $residentprofile->placeofbirth }}"
                                                data-sex="{{ $residentprofile->sex }}" data-mobile="{{ $residentprofile->mobile }}"
                                                data-civil_status="{{ $residentprofile->civil_status }}"
                                                data-phil_health_id="{{ $residentprofile->phil_health_id }}" data-id_4ps="{{ $residentprofile->id_4ps }}"
                                                data-bs-target="#viewResidentModal">
                                                <i class="fas fa-eye"></i></a>
                                                @include('modals.residentprofile.Show')
                                            
                                                {{-----***************************** EDIT BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-warning resedit"
                                                data-resident_id="{{$residentprofile->id}}" data-purok="{{$residentprofile->purok}}" data-fname="{{$residentprofile->fname}}"
                                                data-lname="{{$residentprofile->lname}}" data-mname="{{$residentprofile->mname}}"
                                                data-family_id="{{ $residentprofile->family_id }}" data-age="{{ $residentprofile->age }}"
                                                data-bdate="{{ $residentprofile->bdate }}" data-placeofbirth="{{ $residentprofile->placeofbirth }}"
                                                data-sex="{{ $residentprofile->sex }}" data-mobile="{{ $residentprofile->mobile }}"
                                                data-civil_status="{{ $residentprofile->civil_status }}"
                                                data-phil_health_id="{{ $residentprofile->phil_health_id }}" data-id_4ps="{{ $residentprofile->id_4ps }}"
                                                data-bs-target="#editResidentModal">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                @include('modals.residentprofile.Edit')

                                                {{-----***************************** DELETE BUTTON *******************************------}}
                                                <a type="button" class="btn btn-danger resdelete" data-bs-toggle="modal"
                                                data-bs-target="#deleteResidentModal"
                                                data-resident_id="{{$residentprofile->id}}">
                                                <i class="fas fa-trash"></i></a>
                                                @include('modals.residentprofile.Delete')

                                                @endif
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
</div>
@endsection

