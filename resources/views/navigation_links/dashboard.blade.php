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
            @include('modals.DailyTimeRecord.DTR')  
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

{{-- <script>
  $('#staticBackdrop').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var other_id = button.data('other_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Dother_id').val(other_id);
    });
</script> --}}
@endsection


