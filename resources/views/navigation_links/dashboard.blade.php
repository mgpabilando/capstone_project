@extends('layouts.home')
@section('content')

<style>
  .fc .fc-toolbar > * > :first-child{
    font-size: medium;
  }

</style>

<div id="content" style="height: auto;">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Nurse Dashboard</h3>
            <button type="button" class="btn-dtr m-0" style="width: 200px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      DAILY TIME RECORD
            </button>
            <!-- Modal -->
            <div class="modal fade dtr" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">DAILY TIME RECORD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="dtr">
                    <ul class="nav nav-pills mb-3 dtr-link" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-timeIn-tab" data-bs-toggle="pill" data-bs-target="#pills-timeIn" type="button" role="tab" aria-controls="pills-timeIn" aria-selected="true" style="font-size: 1rem;">ARRIVAL</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-underTime-tab" data-bs-toggle="pill" data-bs-target="#pills-timeOut" type="button" role="tab" aria-controls="pills-timeOut" aria-selected="false" style="font-size: 1rem;">DEPARTURE</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-timeOut-tab" data-bs-toggle="pill" data-bs-target="#pills-underTime" type="button" role="tab" aria-controls="pills-underTime" aria-selected="false" style="font-size: 1rem;">UNDERTIME</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-timeIn" role="tabpanel" aria-labelledby="pills-timeIn-tab">
                        <input type="time" name="timeIn" id="timeIn" value="{{ $todayTime }}">
                        <div class="d-flex justify-content-end">
                         <a href="{{ route('dtr.timeIn', Auth::user()->id) }}" class="btn btn-success">Time In</a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-timeOut" role="tabpanel" aria-labelledby="pills-timeOut-tab">
                        <input type="time" name="timeOut" id="timeOut" value="{{ $todayTime }}">
                        <div class="d-flex justify-content-end">
                          <a href="{{ route('dtr.timeOut', Auth::user()->id) }}" onclick="event.preventDefault(); document.getElementById('submit-form').submit();" class="btn btn-success">Time Out</a>  
                          <form id="submit-form" action="{{ route('dtr.timeOut', Auth::user()->id) }}" method="post" >@csrf</form>                      
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-underTime" role="tabpanel" aria-labelledby="pills-underTime-tab">
                        <input type="time" name="underTime" id="underTime" value="{{ $todayTime }}">
                        <div class="d-flex justify-content-end">
                          <a href="{{ route('dtr.underTime', Auth::user()->id) }}" onclick="event.preventDefault(); document.getElementById('submit-form').submit();" class="btn btn-success">Time Out</a>  
                          <form id="submit-form" action="{{ route('dtr.underTime', Auth::user()->id) }}" method="post" >@csrf</form>                      
                        </div>
                      </div>
                      <hr>
                      {{-- DATATABLE FOR DAILY TIME RECORD --}}
                      <div class="table-responsive mb-3">
                        <table id="" class="table table-bordered table-striped table-hover">
                              <thead>
                                  <tr role="row">
                                      <th class="text-center" scope="col">Name</th>
                                      <th class="text-center" scope="col">Time In</th>
                                      <th class="text-center" scope="col">Time Out</th>
                                      <th class="text-center" scope="col">UnderTime</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @if ($dtr)
                                  @foreach ($dtr as $dtrs)
                                  <tr>
                                    <th class="text-center">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</th>
                                    <td class="text-center">{{ $dtrs->TimeIn }}</td>
                                    <td class="text-center">{{ $dtrs->TimeOut }}</td>
                                    <td class="text-center">{{ $dtrs->UnderTime }}</td>
                                  </tr>
                                  @endforeach
                                @endif
                              </tbody>
                        </table>
                      </div>
                      {{-- END DATATABLE FOR DAILY TIME RECORD --}}
                    </div>
                  </div>
                  </div>
                  <div class="modal-footer d-flex ">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>       
        </div>
    </div>

    <div class="container-fluid">
      <div class="row counter-row">
          <div class="col-md-4">
            <div class="d-flex justify-content-center">
              <div class="counter d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fas fa-user-nurse"></i>
                </div>
                <div class="total-data">
                  <p class="text-start m-0">Total BHW</p>
                  <p class="text-start total m-0">{{ $bhw }}</p>
                </div>
              </div>
            </div>
            </div>

          <div class="col-md-4">
              <div class="d-flex justify-content-center">
            <div class="counter d-flex align-items-center">
              <div class="icon d-flex align-items-center justify-content-center" style="border-color: #25e096">
                  <i class="fas fa-user-alt" style="color: #25e096"></i>
              </div>
              <div class="total-data">
                <p class="text-start m-0" style="color: #25e096">Total Resident</p>
                <p class="text-start total m-0" style="color: #25e096">{{ $resident }}</p>
              </div>
            </div>
          </div>
          </div>

          <div class="col-md-4">
              <div class="d-flex justify-content-center">
            <div class="counter d-flex align-items-center">
              <div class="icon d-flex align-items-center justify-content-center" style="border-color:gold">
                  <i class="fas fa-users" style="color: gold;"></i>
              </div>
              <div class="total-data">
                <p class="text-start m-0" style="color: gold">Total Family Head</p>
                <p class="text-start total m-0" style="color: gold">{{ $familynumber }}</p>
              </div>
            </div>
          </div>
          </div>
      </div>

      <hr>
      <div class="row d-flex">
        <div class="col-md-8">
          <div class="dashboarditem container">
          <canvas class="ms-4" id="myChart" height="200"></canvas>
          </div>
        </div>
    
        <div class="col-md-4">
            <div class="dashboarditem container">
              <div class="calendar2"></div>
            </div>
        </div>
      </div>

    </div>
</div>

@section('scripts')
<script>
var data = {
    labels : ['Pregnant', 'Deliveries','EPI','NTP','Diarrheal','Other Services', 'Family Planning'],

    datasets: [
        {
            label: "Health Consultation",
            backgroundColor: "#15c3c7",
            borderColor: "#15c3c7",
            borderWidth: 1,
            hoverBackgroundColor: "rgba(255,99,132,0.4)",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [{{ $pregnant }}, {{ $deliveries }}, {{ $epi }}, {{ $ntp }}, {{ $diarrheal }}, {{ $other_services }}, {{ $familyplanning }}],

        }
    ]
};

var options = {
    animation: {
        duration: 2000
    },
    scales: {
        yAxes: [{
            display: true,
            ticks: {
                suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                // OR //
                beginAtZero: true,   // minimum value will be 0.
                suggestedMax: 10
            },
            gridLines: {
                display: false
            },
            pointLabels: {
                fontFamily: "Arial"
            }
        }],
        xAxes: [{
            gridLines: {
                display: false
            },
            ticks: {
                fontFamily: "Arial",
            }
        }],
    },
};

var ctx = document.getElementById("myChart").getContext("2d");

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});






</script>

<script>
$(document).ready(function () {
  $.ajaxSetup({
  headers:{
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
  }
});

  var calendar = $('.calendar2').fullCalendar({
      height: 400,
      defaultView: 'listWeek', 
      events:'/events',
        header: true,
        views: {
          listDay: { buttonText: 'DAY' },
          listWeek: { buttonText: 'WEEK' },
          listMonth: { buttonText: 'MONTH' }
      },

      header: {
        left: 'title',
        center: '',
        right: 'listDay,listWeek,listMonth'
      },
  });

});
</script>
@endsection
