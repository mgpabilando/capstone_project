@extends('layouts.home')
@section('content')
<div id="content" style="height: auto;">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Daily Time Record</h3>
        </div>
    </div>

    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <div class="consultation-list container bhms-box-shadow">
            <div class="title-and-button d-flex justify-content-between align-items-center">
              <h4 class="consulttable-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">Daily Time Records</h4>
            </div>
              <hr>
                <ul class="nav nav-tabs nav-justified mb-3" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="morning-tab" data-bs-toggle="tab" data-bs-target="#morning" type="button" role="tab" aria-controls="morning" aria-selected="true">MORNING</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="afternoon-tab" data-bs-toggle="tab" data-bs-target="#afternoon" type="button" role="tab" aria-controls="afternoon" aria-selected="false">AFTERNOON</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="undertime-tab" data-bs-toggle="tab" data-bs-target="#undertime" type="button" role="tab" aria-controls="undertime" aria-selected="false">UNDERTIME</button>
                  </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="morning" role="tabpanel" aria-labelledby="morning-tab">
                      <button type="button" class="btn-dtr m-2 align-center" style="width: 300px;" data-bs-toggle="modal" data-bs-target="#MORNING">
                        MORNING RECORD
                      </button>
                        @include('modals.DailyTimeRecord.morning.arrival_am') 
                      
                      <div class="table-responsive mb-3">
                        <table id="DTR-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th class="text-center" scope="col">Date</th>
                                    <th class="text-center" scope="col">Arrival</th>
                                    <th class="text-center" scope="col">Departure</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @if($morning)
                                @foreach ($morning as $morningrecord )
                                <tr>
                                  <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($morningrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                                  <td class="text-center">{{ Carbon\Carbon::parse($morningrecord->Arrival)->format('g:i A') ?? '' }}</td>
                                  <td class="text-center">{{ Carbon\Carbon::parse($morningrecord->Departure)->format('g:i A') ?? '' }}</td>
                                  <td>
                                    <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#departure_am"  data-morning_id="{{$morningrecord->id}}">Time Out
                                    </a>
                                    
                                    @include('modals.DailyTimeRecord.morning.departure_am') 
                                  </td>
                                </tr>  
                                @endforeach
                              @endif
                            </tbody>
                        </table>
                      </div>
                    </div>
                
                  <div class="tab-pane fade" id="afternoon" role="tabpanel" aria-labelledby="afternoon-tab">
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="timein-pm" role="tabpanel" aria-labelledby="nav-in-pm-tab">
                        <button type="button" class="btn-dtr m-2 align-center" style="width: 300px;" data-bs-toggle="modal" data-bs-target="#AFTERNOON">
                          AFTERNOON RECORD
                        </button>
                          @include('modals.DailyTimeRecord.afternoon.arrival_pm') 
                        
                        <div class="table-responsive mb-3">
                          <table id="DTR-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                              <thead>
                                  <tr role="row">
                                      <th class="text-center" scope="col">Date</th>
                                      <th class="text-center" scope="col">Arrival</th>
                                      <th class="text-center" scope="col">Departure</th>
                                      <th class="text-center" scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @if($afternoon)
                                  @foreach ($afternoon as $afternoonrecord )
                                  <tr>
                                    <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($afternoonrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                                    <td class="text-center">{{ Carbon\Carbon::parse($afternoonrecord->Arrival)->format('g:i A') ?? '' }}</td>
                                    <td class="text-center">{{ Carbon\Carbon::parse($afternoonrecord->Departure)->format('g:i A') ?? '' }}</td>
                                    <td>
                                      <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                      data-bs-target="#departure_pm"  data-afternoon_id="{{$afternoonrecord->id}}">Time Out
                                      </a>
                                      @include('modals.DailyTimeRecord.afternoon.departure_pm') 
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
    
                  <div class="tab-pane fade" id="undertime" role="tabpanel" aria-labelledby="undertime-tab">
                    <button type="button" class="btn-dtr m-2 align-center" style="width: 300px;" data-bs-toggle="modal" data-bs-target="#UNDERTIME">
                      UNDERTIME RECORD
                    </button>
                      @include('modals.DailyTimeRecord.undertime.UNDERTIME') 
                    
                    <div class="table-responsive mb-3">
                      <table id="DTR-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                          <thead>
                              <tr role="row">
                                  <th class="text-center" scope="col">Date</th>
                                  <th class="text-center" scope="col">Hour/s</th>
                                  <th class="text-center" scope="col">Minute/s</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if($undertime)
                              @foreach ($undertime as $undertimerecord )
                              <tr>
                                <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($undertimerecord->created_at)->format('d-m-Y') ?? '' }}</th>
                                <td class="text-center">{{ $undertimerecord->Hour }}</td>
                                <td class="text-center">{{ $undertimerecord->Minute }}</td>
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
    </div>
</div>          
        
@endsection

@section('scripts')
  <script></script>
@endsection