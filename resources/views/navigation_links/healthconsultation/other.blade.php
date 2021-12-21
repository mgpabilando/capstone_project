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
            <div class="consultation-list container bhms-box-shadow">
                <div class="title-and-button d-flex justify-content-between align-items-center">
                    <h4 class="consulttable-title pt-2 ps-2 mb-0" style="text-align: center">Others</h4>  
                    <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addotherconsul">
                    <i class="fas fa-file-medical"></i> ADD
                    </div>
                    @include('modals.othersconsul.Add')
                </div>
                <hr>
                <div class="table-responsive mb-3">
                    <table id="" class="display table table-bordered table-striped table-hover" style="padding: 10px">
                        <thead>
                            <tr role="row">
                                <th scope="col">ID</th>
                                <th scope="col">Service Rendered</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($otherconsulrecord)
                                @foreach ($otherconsulrecord as $otherRec)
                                    <tr>
                                        <th>{{ $otherRec->id }}</th>
                                        <td>{{ $otherRec->service_rendered }}</td>
                                        <td>{{ date('F d, Y',strtotime($otherRec['date'])) }}</td>
                                        <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                            {{-----***************************** SHOW BUTTON *******************************------}}
                                            <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewotherconsul"
                                            data-other_id="{{ $otherRec->id }}" data-service_rendered="{{ $otherRec->service_rendered }}" data-daterec="{{ $otherRec->date }}">
                                            <i class="manage fas fa-eye"></i></a>
                                            @include('modals.othersconsul.Show')
                                        
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