@extends('layouts.home')
@section('content')

<style>
  .fc .fc-toolbar > * > :first-child{
    font-size: small;
  }
  .fc-toolbar.fc-header-toolbar h2 {
        font-weight: 900;
        color: #15c5c4;
        margin-right: 10px;
    }

</style>

<div id="content" style="height: auto;">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between align-items-center">
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
                          <button class="nav-link active" id="pills-am-tab" data-bs-toggle="pill" data-bs-target="#pills-am" type="button" role="tab" aria-controls="pills-am" aria-selected="true" style="font-size: 1rem;">AM</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-pm-tab" data-bs-toggle="pill" data-bs-target="#pills-pm" type="button" role="tab" aria-controls="pills-pm" aria-selected="false" style="font-size: 1rem;">PM</button>
                        </li>
                      </ul>
                      <hr>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-am" role="tabpanel" aria-labelledby="pills-am-tab">
                          <ul class="nav nav-pills mb-3 dtr-link" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-TimeIn-tab" data-bs-toggle="pill" data-bs-target="#pills-TimeIn" type="button" role="tab" aria-controls="pills-TimeIn" aria-selected="true" style="font-size: 1rem;">TimeIn</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-TimeOut-tab" data-bs-toggle="pill" data-bs-target="#pills-TimeOut" type="button" role="tab" aria-controls="pills-TimeOut" aria-selected="false" style="font-size: 1rem;">TimeOut</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-UnderTime-tab" data-bs-toggle="pill" data-bs-target="#pills-UnderTime" type="button" role="tab" aria-controls="pills-UnderTime" aria-selected="false" style="font-size: 1rem;">UnderTime</button>
                            </li>
                          </ul>
                          <div class="tab-pane fade show active" id="pills-TimeIn" role="tabpanel" aria-labelledby="pills-TimeIn-tab">
                            <h2>Time In Morning</h2>
                          </div>
                          <div class="tab-pane fade" id="pills-TimeOut" role="tabpanel" aria-labelledby="pills-TimeOut-tab">
                            <h2>Time Out Morning</h2>
                          </div>
                          <div class="tab-pane fade" id="pills-UnderTime" role="tabpanel" aria-labelledby="pills-UnderTime-tab">
                            <h2>UnderTime Morning</h2>
                          </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-pm" role="tabpanel" aria-labelledby="pills-pm-tab">
                          <ul class="nav nav-pills mb-3 dtr-link" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-TimeIn-tab" data-bs-toggle="pill" data-bs-target="#pills-TimeIn" type="button" role="tab" aria-controls="pills-TimeIn" aria-selected="true" style="font-size: 1rem;">TimeIn</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-TimeOut-tab" data-bs-toggle="pill" data-bs-target="#pills-TimeOut" type="button" role="tab" aria-controls="pills-TimeOut" aria-selected="false" style="font-size: 1rem;">TimeOut</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-UnderTime-tab" data-bs-toggle="pill" data-bs-target="#pills-UnderTime" type="button" role="tab" aria-controls="pills-UnderTime" aria-selected="false" style="font-size: 1rem;">UnderTime</button>
                            </li>
                          </ul>
                        </div>
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
                  <p class="text-start cnt total m-0">{{ $bhw }}</p>
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
