@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Health Consultation: Diarrheal Problems</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="consultation-list container bhms-box-shadow">
                <div class="title-and-button d-flex justify-content-between align-items-center">
                    <h4 class="consulttable-title pt-2 ps-2 mb-0" style="text-align: center">Control Of Diarrheal Problem</h4>  
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#adddiarrhealconsul">
                        <i class="fas fa-file-medical"></i> ADD
                    </div>
                @include('modals.diarrheal.Add')
                </div> 
                <hr>
                <div class="table-responsive mb-3">
                    <table id="" class="display table table-bordered table-striped table-hover" style="padding: 10px">
                        <thead>
                        <tr role="row">
                            <th scope="col">Patient_ID</th>
                            <th scope="col">Resident_ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Date Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if ($diarrhealconsulrecord)
                                @foreach ($diarrhealconsulrecord as $diarrhealRec)
                                    <tr>
                                        <th>{{ $diarrhealRec->id }}</th>
                                        <td>{{ $diarrhealRec->resident_id }}</td>
                                        <td>{{ $diarrhealRec->name }}</td>
                                        <td>{{ $diarrhealRec->age }}</td>
                                        <td>{{ date('F d, Y h:i:s a',strtotime($diarrhealRec['created_at'])) }}</td>
                                        <td>{{ date('F d, Y h:i:s a',strtotime($diarrhealRec['updated_at'])) }}</td>
                                        <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                                {{-----***************************** SHOW BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewdiarrhealconsul"
                                            data-diarrheal_id="{{ $diarrhealRec->id }}" data-resident_id = "{{ $diarrhealRec->resident_id }}" data-name = "{{ $diarrhealRec->name }}"
                                            data-age="{{ $diarrhealRec->age }}">
                                            <i class="manage fas fa-eye"></i></a>
                                            @include('modals.diarrheal.Show')
                                        
                                            {{-----***************************** EDIT BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editdiarrhealconsul"
                                            data-diarrheal_id="{{ $diarrhealRec->id }}" data-resident_id = "{{ $diarrhealRec->resident_id }}" data-name = "{{ $diarrhealRec->name }}"
                                            data-age="{{ $diarrhealRec->age }}">
                                            <i class="manage fas fa-edit"></i>
                                            </a>
                                            @include('modals.diarrheal.Edit')
                                        
                                            {{-----***************************** DELETE BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletediarrhealconsul"
                                            data-diarrheal_id="{{ $diarrhealRec->id }}">
                                            <i class="manage fas fa-trash"></i>
                                            </a>
                                            @include('modals.diarrheal.Delete')
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- /row d-flex justify-content-center -->
    </div> <!--container-fluid -->
</div>
@endsection