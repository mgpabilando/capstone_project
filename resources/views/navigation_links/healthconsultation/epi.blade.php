@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
      <div class="col-md-12 d-flex flex-row justify-content-between">
          <h3 class="block-title">Health Consultation: EPI</h3>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="consultation-list container bhms-box-shadow">
          <div class="title-and-button d-flex justify-content-between align-items-center">
            <h4 class="consulttable-title pt-2 ps-2 mb-0" style="text-align: center">List of EPI</h4>
            <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addepiconsul">
              <i class="fas fa-file-medical"></i> ADD
            </div>
            @include('modals.epi.Add')
          </div>
            <hr>
            <div class="table-responsive mb-3">
                <table id="" class="display table table-bordered table-striped table-hover" style="padding: 10px">
                    <thead>
                        <tr role="row">
                            <th scope="col">Patient_ID</th>
                            <th scope="col">Resident_ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Medicines Given</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Date Updated</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if ($epiconsulrecord)
                            @foreach ($epiconsulrecord as $epiRec)
                            <tr>
                              <th>{{ $epiRec->id }}</th>
                              <td>{{ $epiRec->resident_id }}</td>
                              <td>{{ $epiRec->name }}</td>
                              <td>{{ $epiRec->meds_given }}</td>
                              <td>{{ date('F d, Y',strtotime($epiRec['birthdate'])) }}</td>
                              <td>{{ date('F d, Y h:i:s a',strtotime($epiRec['created_at'])) }}</td>
                              <td>{{ date('F d, Y h:i:s a',strtotime($epiRec['updated_at'])) }}</td>
                              <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                  {{-----***************************** SHOW BUTTON *******************************------}}
                                      <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewepiconsul"
                                      data-epi_id="{{ $epiRec->id }}" data-resident_id = "{{ $epiRec->resident_id }}" data-name = "{{ $epiRec->name }}"
                                      data-meds_given="{{ $epiRec->meds_given }}" data-birthdate="{{ $epiRec->birthdate }}">
                                      <i class="manage fas fa-eye"></i></a>
                                      @include('modals.epi.Show')
                              
                                  {{-----***************************** EDIT BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editepiconsul"
                                  data-epi_id="{{ $epiRec->id }}" data-resident_id = "{{ $epiRec->resident_id }}" data-name = "{{ $epiRec->name }}"
                                  data-meds_given="{{ $epiRec->meds_given }}" data-birthdate="{{ $epiRec->birthdate }}">
                              <i class="manage fas fa-edit"></i>
                                  </a>
                                  @include('modals.epi.Edit')
                              
                                  {{-----***************************** DELETE BUTTON *******************************------}}
                                  <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deleteepiconsul"
                                  data-epi_id="{{ $epiRec->id }}">
                                  <i class="manage fas fa-trash"></i>
                                  </a>
                                  @include('modals.epi.Delete')
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
