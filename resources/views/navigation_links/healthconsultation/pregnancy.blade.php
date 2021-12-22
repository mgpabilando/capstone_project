@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Pregnancy</h3>
        </div>
      </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="consultation-list container bhms-box-shadow">
            <div class="title-and-button d-flex justify-content-between align-items-center">
              <h4 class="consulttable-title pt-2 ps-2 mb-0" style="text-align: center">List of Pregnancy</h4>
              <div type="button"  class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addpregconsul">
                <i class="fas fa-file-medical"></i> ADD
              </div>
              @include('modals.pregnancy.Add')
            </div>
            <hr>
            <div class="table-responsive mb-3">
              <table id="" class="display table table-bordered table-striped table-hover">
                    <thead>
                        <tr role="row">
                            <th scope="col">Patient_ID</th> 
                            <th scope="col">Name</th> 
                            <th scope="col">Age</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Date Updated</th>
                            <th scope="col-md-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if ($pregconsultationrecord)
                        @foreach ($pregconsultationrecord as $pregpatient)
                        <tr>
                          <th data-label="Patient ID">{{ $pregpatient->id }}</th> 
                          <td data-label="Name">{{ $pregpatient->name }}</td> 
                          <td data-label="Age">{{ $pregpatient->age }}</td> 
                          <td data-label="Date Added">{{ date('F d, Y h:i:s a',strtotime($pregpatient['created_at'])) }}</td>
                          <td data-label="Date Updated">{{ date('F d, Y h:i:s a',strtotime($pregpatient['updated_at'])) }}</td>
                          <td style="white-space:nowrap; text-align:center;">
                            {{-----***************************** SHOW BUTTON *******************************------}}
                                <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewpregconsul"
                                  data-pregnant_id="{{ $pregpatient->id }}" data-resident_id = "{{ $pregpatient->resident_id }}" data-name = "{{ $pregpatient->name }}" 
                                  data-height_cm = "{{ $pregpatient->height_cm }}" data-weight_kg = "{{ $pregpatient->weight_kg }}" data-age = "{{ $pregpatient->age }}" 
                                  data-pregnancyorder = "{{ $pregpatient->pregnancyorder }}"
                                  data-lmp = "{{ $pregpatient->lmp }}">
                                <i class="manage text-success fas fa-eye"></i></a>
                                @include('modals.pregnancy.Show')
                            
                                {{-----***************************** EDIT BUTTON *******************************------}}
                                <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editpregconsul"
                                  data-pregnant_id="{{ $pregpatient->id }}" data-resident_id = "{{ $pregpatient->resident_id }}" data-name = "{{ $pregpatient->name }}" 
                                  data-height_cm = "{{ $pregpatient->height_cm }}" data-weight_kg = "{{ $pregpatient->weight_kg }}" data-age = "{{ $pregpatient->age }}" 
                                  data-pregnancyorder = "{{ $pregpatient->pregnancyorder }}"
                                  data-lmp = "{{ $pregpatient->lmp }}">
                                <i class="manage text-warning fas fa-edit"></i>
                                </a>
                                @include('modals.pregnancy.Edit')
                            
                                {{-----***************************** DELETE BUTTON *******************************------}}
                                <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletepregconsul"
                                data-pregnant_id="{{$pregpatient->id}}">
                                <i class="manage fas text-danger fa-trash"></i>
                                </a>
                                @include('modals.pregnancy.Delete')
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
@endsection

