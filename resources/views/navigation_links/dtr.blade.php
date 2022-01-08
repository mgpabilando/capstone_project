@extends('layouts.home')
@section('content')

<style>
  .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    font-weight: 600;
}
</style>
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
                      {{-- <button type="button" id="morningrecord" class="btn-dtr m-2 align-center" style="width: 300px;" data-bs-toggle="modal" data-bs-target="#MORNING">
                        MORNING RECORD
                      </button>
                        @include('modals.DailyTimeRecord.morning.arrival_am')  --}}
                      <a href="#" class="btn btn-success"  id="morningtimer">
                          <i class="fa-fw fas fa-clock nav-icon">
        
                          </i>
                          <span>Start work</span>
                      </a>
                      <div class="table-responsive mt-3">
                        <table id="DTR-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th class="text-center" scope="col">Date</th>
                                    <th class="text-center" scope="col">Arrival</th>
                                    <th class="text-center" scope="col">Departure</th>
                                    <th class="text-center" scope="col">Inverval</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($morning as $morningrecord )
                                <tr data-morning-id="{{ $morningrecord->id }}">
                                  <th class="text-center" style="text-transform: uppercase">{{Carbon\Carbon::parse($morningrecord->created_at)->format('d-m-Y') ?? '' }}</th>
                                  <td class="text-center">{{ Carbon\Carbon::parse($morningrecord->Arrival)->format('g:i:s A')}}</td>
                                  <td class="text-center">{{ Carbon\Carbon::parse($morningrecord->Departure)->format('g:i:s A')}}</td>
                                  <td class="text-center">{{ gmdate("H:i:s", $morningrecord->total_time) }}</td>
                                </tr>  
                                @endforeach
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
  <script>
    function switchWorkStatus(data) {
      let $morningtimer = $("#morningtimer span");
      let text = $morningtimer.text() == 'Stop work' ? 'Start work' : 'Stop work';
      $morningtimer.text(text);
      swal({
          title: 'Success!',
          text: data.status,
          icon: 'success'
      }).then(function(){
        location.reload();
      });
  };
  $(document).ready(function(){
    $(function() {
        $.get("{{ route('dtr.showmorning') }}", function (data) {
            if(data.timeEntry != null) {
                switchWorkStatus();
            }
        });

        //var csrf_token = $('meta[name="csrf-token"]').attr('content');

        $('#morningtimer').click(function () {
            $.ajax({
              type: "POST",
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: "{{ route('dtr.updatemorning') }}",
              data: {
                _token : $('meta[name="csrf-token"]').attr('content'), 
              },
              success: (data) => switchWorkStatus(data),
              error: () => window.location.reload()
            });
        });
    });
  });

  </script>
@endsection


