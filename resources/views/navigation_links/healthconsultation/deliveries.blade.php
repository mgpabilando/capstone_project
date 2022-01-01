@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
      <div class="col-md-12 d-flex flex-row justify-content-between">
          <h3 class="block-title">Health Consultation: Deliveries</h3>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <div class="consultation-list container bhms-box-shadow">
            <div class="title-and-button d-flex justify-content-between align-items-center">
              <h4 class="consulttable-title pt-2 ps-2 mb-0" style="text-align: center">List of Deliveries</h4>
              <div type="button" class="btn btn-add" title="Add Consultation" data-bs-toggle="modal" data-bs-target="#addDeliveriesconsul">
                <i class="fas fa-file-medical"></i> ADD
              </div>
              @include('modals.deliveries.Add')
            </div>
              <hr>
              <div class="table-responsive mb-3">
                  <table id="deliveries-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                      <thead>
                          <tr role="row">
                              <th class="text-center" scope="col">Patient_ID</th>
                              <th class="text-center" scope="col">Resident_ID</th>
                              <th class="text-center" scope="col">Name</th>
                              <th class="text-center" scope="col">Age</th>
                              <th class="text-center" scope="col">Date Delivered</th>
                              <th class="text-center" scope="col">Outcome</th>
                              <th class="text-center" scope="col">Place</th>
                              <th class="text-center" scope="col">Date Added</th>
                              <th class="text-center" scope="col">Date Updated</th>
                              <th class="text-center" scope="col">Actions</th>

                          </tr>
                      </thead>
                      <tbody>
                        @if ($deliverconsulrecord)
                          @foreach ($deliverconsulrecord as $deliveriesRec)
                          <tr>
                            <th class="text-center">{{ $deliveriesRec->id }}</th>
                            <td class="text-center">{{ $deliveriesRec->resident_id }}</td>
                            <td class="text-center">{{ $deliveriesRec->name }}</td>
                            <td class="text-center">{{ $deliveriesRec->age }}</td>
                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y',strtotime($deliveriesRec['date_delivered'])) }}</td>
                            <td class="text-center">{{ $deliveriesRec->outcome }}</td>
                            <td class="text-center">{{ $deliveriesRec->place }}</td>
                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($deliveriesRec['created_at'])) }}</td>
                            <td class="text-center" style="text-transform: uppercase">{{ date('F d, Y h:i:s a',strtotime($deliveriesRec['updated_at'])) }}</td>
                            <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                              {{-----***************************** SHOW BUTTON *******************************------}}
                                <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewdeliveriesconsul"
                                data-deliveries_id="{{ $deliveriesRec->id }}" data-resident_id = "{{ $deliveriesRec->resident_id }}" data-name = "{{ $deliveriesRec->name }}"
                                data-age="{{ $deliveriesRec->age }}" data-date_delivered="{{ $deliveriesRec->date_delivered }}"
                                data-outcome="{{ $deliveriesRec->outcome }}"  data-place="{{ $deliveriesRec->place }}">
                                <i class="manage fas fa-eye"></i></a>
                                @include('modals.deliveries.Show')
                          
                                {{-----***************************** EDIT BUTTON *******************************------}}
                                <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editdeliveriesconsul"
                                data-deliveries_id="{{ $deliveriesRec->id }}" data-resident_id = "{{ $deliveriesRec->resident_id }}" data-name = "{{ $deliveriesRec->name }}"
                                data-age="{{ $deliveriesRec->age }}" data-date_delivered="{{ $deliveriesRec->date_delivered }}"
                                data-outcome="{{ $deliveriesRec->outcome }}"  data-place="{{ $deliveriesRec->place }}">
                                <i class="manage fas fa-edit"></i>
                                </a>
                                @include('modals.deliveries.Edit')
                            
                                {{-----***************************** DELETE BUTTON *******************************------}}
                                <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletedeliveriesconsul"
                                data-deliveries_id="{{ $deliveriesRec->id }}">
                                <i class="manage fas fa-trash"></i>
                                </a>
                                @include('modals.deliveries.Delete')
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

