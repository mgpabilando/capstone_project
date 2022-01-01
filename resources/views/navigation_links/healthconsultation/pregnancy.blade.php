@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Health Consultation: Pregnancy</h3>
        </div>
      </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12">
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
                <table id="pregnancy-datatable" class="table table-bordered table-striped table-hover">
                      <thead>
                          <tr role="row">
                              <th class="text-center" scope="col">Patient_ID</th>
                              <th class="text-center" scope="col">Resident_ID</th>
                              <th class="text-center" scope="col">Name</th>
                              <th class="text-center" scope="col">Height(cm)</th>
                              <th class="text-center" scope="col">Weight(kg)</th>
                              <th class="text-center" scope="col">Age</th>
                              <th class="text-center" scope="col">Pregnancy Order</th>
                              <th class="text-center" scope="col">Last Menstrual Period</th>
                              <th class="text-center" scope="col">Date Added</th>
                              <th class="text-center" scope="col">Date Updated</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if ($pregconsultationrecord)
                          @foreach ($pregconsultationrecord as $pregpatient)
                          <tr>
                            <th class="text-center">{{ $pregpatient->id }}</th>
                            <td class="text-center">{{ $pregpatient->resident_id }}</td>
                            <td class="text-center">{{ $pregpatient->name }}</td>
                            <td class="text-center">{{ $pregpatient->height_cm }}</td>
                            <td class="text-center">{{ $pregpatient->weight_kg }}</td>
                            <td class="text-center">{{ $pregpatient->age }}</td>
                            <td class="text-center">{{ $pregpatient->pregnancyorder }}</td>
                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($pregpatient['lmp'])) }}</td>
                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($pregpatient['created_at'])) }}</td>
                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($pregpatient['updated_at'])) }}</td>
                            <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                              {{-----***************************** SHOW BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewpregconsul"
                                    data-pregnant_id="{{ $pregpatient->id }}" data-resident_id = "{{ $pregpatient->resident_id }}" data-name = "{{ $pregpatient->name }}" 
                                    data-height_cm = "{{ $pregpatient->height_cm }}" data-weight_kg = "{{ $pregpatient->weight_kg }}" data-age = "{{ $pregpatient->age }}" 
                                    data-pregnancyorder = "{{ $pregpatient->pregnancyorder }}"
                                    data-lmp = "{{ $pregpatient->lmp }}">
                                  <i class="manage fas fa-eye"></i></a>
                                  @include('modals.pregnancy.Show')
                              
                                  {{-----***************************** EDIT BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editpregconsul"
                                    data-pregnant_id="{{ $pregpatient->id }}" data-resident_id = "{{ $pregpatient->resident_id }}" data-name = "{{ $pregpatient->name }}" 
                                    data-height_cm = "{{ $pregpatient->height_cm }}" data-weight_kg = "{{ $pregpatient->weight_kg }}" data-age = "{{ $pregpatient->age }}" 
                                    data-pregnancyorder = "{{ $pregpatient->pregnancyorder }}"
                                    data-lmp = "{{ $pregpatient->lmp }}">
                                  <i class="manage fas fa-edit"></i>
                                  </a>
                                  @include('modals.pregnancy.Edit')
                              
                                  {{-----***************************** DELETE BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletepregconsul"
                                  data-pregnant_id="{{$pregpatient->id}}">
                                  <i class="manage fas fa-trash"></i>
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
        </div>
    </div> <!-- /row d-flex justify-content-center -->
</div> <!--container-fluid -->
@endsection

