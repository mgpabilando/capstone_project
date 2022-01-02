@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Family Numbering</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="consultation-list container bhms-box-shadow">
                    <div class="title-and-button d-flex justify-content-between align-items-center">
                        <h4 class="consulttable-title pt-2 ps-2 mb-0" style="text-align: center">Family Numbering</h4> 
                        <div type="button" class="btn btn-add" title="Add Family Number" data-bs-toggle="modal" data-bs-target="#addfamilynumber">
                            <i class="fas fa-plus"></i> ADD
                        </div>
                        @include('modals.family_numbering.Add')
                    </div> 
                        <hr>
                    <div class="table-responsive mb-3">
                        <table id="familynumbering-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th class="text-center" scope="col">Family_Number</th>
                                    <th class="text-center" scope="col">Resident_ID</th>
                                    <th class="text-center" scope="col">Family Head</th>
                                    <th class="text-center" scope="col">Purok</th>
                                    <th class="text-center" scope="col">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($familynumberrecord)
                                    @foreach ($familynumberrecord as $familynumberRec)
                                        <tr>
                                            <th class="text-center">{{ $familynumberRec->family_id }}</th>
                                            <td class="text-center">{{ $familynumberRec->resident_id }}</td>
                                            <td class="text-center">{{ $familynumberRec->resident->fname }} {{ $familynumberRec->resident->mname }} {{ $familynumberRec->resident->lname }}</td>
                                            <td class="text-center">{{ $familynumberRec->resident->purok }}</td>
                                            <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                                {{-----***************************** SHOW BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewfamilynumber"
                                                data-familynumber_id="{{ $familynumberRec->id }}" data-resident_id = "{{ $familynumberRec->resident_id }}" 
                                                data-name = "{{ $familynumberRec->resident->fname }} {{ $familynumberRec->resident->mname }} {{ $familynumberRec->resident->lname }}"
                                                data-purok="{{ $familynumberRec->resident->purok }}">
                                                <i class="manage fas fa-eye"></i></a>
                                                @include('modals.family_numbering.Show')
                                            
                                                {{-----***************************** EDIT BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editfamilynumber"
                                                data-familynumber_id="{{ $familynumberRec->id }}" data-resident_id = "{{ $familynumberRec->resident_id }}" data-name = "{{ $familynumberRec->familyhead }}"
                                                data-purok="{{ $familynumberRec->purok }}">
                                                <i class="manage fas fa-edit"></i>
                                                </a>
                                                @include('modals.family_numbering.Edit')
                                            
                                                {{-----***************************** DELETE BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletefamilynumber"
                                                data-familynumber_id="{{ $familynumberRec->id }}">
                                                <i class="manage fas fa-trash"></i>
                                                </a>
                                                @include('modals.family_numbering.Delete')
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- /row d-flex justify-content-center -->  
    </div> <!--container-fluid -->
</div>
@endsection
