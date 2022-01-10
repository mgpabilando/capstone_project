@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Health Consultation: NTP</h3>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="consultation-list container bhms-box-shadow">
                    <div class="title-and-button d-flex justify-content-between align-items-center">
                        <h4 class="consulttable-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">List of NTP</h4>
                        @if (Auth::user()->hasRole('admin_nurse'))
                            @if(request()->has('view_deleted'))
                            <a href="{{ route('ntp.index') }}" class="btn btn-primary">View All</a>
                                @else
                                    <button type="submit" class="btn btn-add me-2" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addntpconsul">
                                    <i class="fas fa-file-medical"></i> Add</button>
                                    @include('modals.ntp.Add')

                                    <a href="{{ route('ntp.index', ['view_deleted' => 'DeletedRecords']) }}"
                                        class="btn btn-danger"><i class="manage fas fa-trash"></i> Trash</a>
                            @endif
                        @endif                                                                                                

                    </div>
                        <hr>
                        <div class="table-responsive mb-3">
                            <table id="NTP-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                                <thead>
                                    <tr role="row">
                                        <th  scope="col">Patient ID</th> 
                                        <th  scope="col">Resident Name</th> 
                                        <th  scope="col">Date Added</th>
                                        <th  scope="col">Date Updated</th>
                                        <th  scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($ntpconsulrecord)
                                        @foreach ($ntpconsulrecord as $ntpRec)
                                        <tr>
                                        <td data-label="ID"  >{{ $ntpRec->id }}</td> 
                                        <td data-label="Name"  >{{ $ntpRec->name }}</td> 
                                        <td data-label="Date Added"   style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($ntpRec['created_at'])) }}</td>
                                        <td data-label="Date Updated"   style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($ntpRec['updated_at'])) }}</td>
                                        <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                            @if (request()->has('view_deleted'))
                                                <a href="{{ route('ntp.restore', $ntpRec->id) }}" class="btn btn-success">Restore</a>
                                                
                                                <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal"  data-ntp_id="{{$ntpRec->id}}">Delete
                                                </a>
                                                @include('modals.ntp.PermanentDelete')

                                                @else
                                                    {{-----***************************** SHOW BUTTON *******************************------}}
                                                        <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewntpconsul"
                                                        data-ntp_id="{{ $ntpRec->id }}" data-resident_id = "{{ $ntpRec->resident_id }}" data-name = "{{ $ntpRec->name }}"
                                                        data-age="{{ $ntpRec->age }}">
                                                        <i class="manage fas fa-eye"></i></a>
                                                        @include('modals.ntp.Show')
                                            
                                                    @if (Auth::user()->hasRole('admin_nurse'))
                                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                                        <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editntpconsul"
                                                        data-ntp_id="{{ $ntpRec->id }}" data-resident_id = "{{ $ntpRec->resident_id }}" data-name = "{{ $ntpRec->name }}"
                                                        data-age="{{ $ntpRec->age }}">                                    
                                                        <i class="manage fas fa-edit"></i>
                                                        </a>
                                                        @include('modals.ntp.Edit')
                                                    
                                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                                        <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletentpconsul"
                                                        data-ntp_id="{{ $ntpRec->id }}">
                                                        <i class="manage fas fa-trash"></i>
                                                        </a>
                                                        @include('modals.ntp.Delete')
                                                    @endif
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
        </div> <!-- /row d-flex justify-content-center -->
    </div> <!--container-fluid -->
</div>
@endsection
