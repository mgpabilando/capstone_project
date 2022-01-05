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
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="block-title">Nurse Dashboard</h3>
            <button type="button" class="btn-dtr m-2 align-center" style="width: 100px; font-size:smaller" data-bs-toggle="modal" data-bs-target="#MORNING">
                      MORNING RECORD
            </button>
            @include('modals.DailyTimeRecord.MORNING') 
            <button type="button" class="btn-dtr m-2 align-center" style="width: 100px; font-size:smaller" data-bs-toggle="modal" data-bs-target="#AFTERNOON">
              AFTERNOON RECORD
            </button>
            @include('modals.DailyTimeRecord.AFTERNOON') 
            <button type="button" class="btn-dtr m-2 align-center" style="width: 100px; font-size:smaller" data-bs-toggle="modal" data-bs-target="#UNDERTIME">
              UNDERTIME RECORD
            </button>
            @include('modals.DailyTimeRecord.UNDERTIME') 

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
