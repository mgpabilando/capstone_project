@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
      <div class="col-md-12 d-flex flex-row justify-content-between">
          <h3 class="block-title">Health Consultation: Others</h3>
      </div>
    </div>

    <div class="container-fluid"> 
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="consultation-list container bhms-box-shadow">
                    <div class="title-and-button d-flex justify-content-between align-items-center">
                        <h4 class="consulttable-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">Rendered Services</h4>  
                        @if (Auth::user()->hasRole('admin_nurse'))
                            @if(request()->has('view_deleted'))
                            <a href="{{ route('other.index') }}" class="btn btn-primary">View All</a>
                                @else
                                    <button type="submit" class="btn btn-add me-2" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addotherconsul">
                                    <i class="fas fa-file-medical"></i> Add</button>
                                    @include('modals.othersconsul.Add')

                                    <a href="{{ route('other.index', ['view_deleted' => 'DeletedRecords']) }}"
                                        class="btn btn-danger"><i class="manage fas fa-trash"></i> Trash</a>
                            @endif
                        @endif                                                                                                

                    </div>
                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="other-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th  scope="col">ID</th>
                                    <th  scope="col">Service Rendered</th>
                                    <th  scope="col">Date</th>
                                    <th  scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($otherconsulrecord)
                                    @foreach ($otherconsulrecord as $otherRec)
                                        <tr>
                                            <td data-label="ID" >{{ $otherRec->id }}</td>
                                            <td data-label="Service Rendered" >{{ $otherRec->service_rendered }}</td>
                                            <td data-label="Date Added"  style="text-transform: uppercase">{{ date('F d, Y',strtotime($otherRec['date'])) }}</td>
                                            <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                                @if (request()->has('view_deleted'))
                                                    <a href="{{ route('other.restore', $otherRec->id) }}" class="btn btn-success">Restore</a>
                                                    
                                                    <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal"  data-other_id="{{$otherRec->id}}">Delete
                                                    </a>
                                                    @include('modals.othersconsul.PermanentDelete')
                                                    
                                                    @else
                                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                                        <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewotherconsul"
                                                        data-other_id="{{ $otherRec->id }}" data-service_rendered="{{ $otherRec->service_rendered }}" data-daterec="{{ $otherRec->date }}">
                                                        <i class="manage fas fa-eye"></i></a>
                                                        @include('modals.othersconsul.Show')
                                                    
                                                        @if (Auth::user()->hasRole('admin_nurse'))
                                                            {{-----***************************** EDIT BUTTON *******************************------}}
                                                            <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editotherconsul"
                                                            data-other_id="{{ $otherRec->id }}" data-service_rendered="{{ $otherRec->service_rendered }}" data-daterec="{{ $otherRec->date }}">
                                                            <i class="manage fas fa-edit"></i>
                                                            </a>
                                                            @include('modals.othersconsul.Edit')
                                                        
                                                            {{-----***************************** DELETE BUTTON *******************************------}}
                                                            <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deleteotherconsul"
                                                            data-other_id="{{ $otherRec->id }}">
                                                            <i class="manage fas fa-trash"></i>
                                                            </a>
                                                            @include('modals.othersconsul.Delete')
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