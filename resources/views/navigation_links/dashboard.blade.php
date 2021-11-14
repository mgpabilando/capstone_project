@extends('layouts.home')
@section('content')

<div id="content" style="height: auto;">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Dashboard</h3>
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
              <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fas fa-user-alt"></i>
              </div>
              <div class="total-data">
                <p class="text-start m-0">Total Resident</p>
                <p class="text-start total m-0">{{ $resident }}</p>
              </div>
            </div>
          </div>
          </div>

          <div class="col-md-4">
              <div class="d-flex justify-content-center">
            <div class="counter d-flex align-items-center">
              <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fas fa-users"></i>
              </div>
              <div class="total-data">
                <p class="text-start m-0">Total Family Head</p>
                <p class="text-start total m-0">0</p>
              </div>
            </div>
          </div>
          </div>
      </div>

      <hr>

      <div class="row">
        <div class="chart-container mt-3 col-md-6">
          <canvas class="ms-4" id="myChart" height="200"></canvas>
        </div>
      </div>

      <div class="col-md-6">
        <div class="event-list">
          <div class="panel-body justify-content-center">
            <div class="calendar2"></div>
          </div>
        </div>
     </div>
    </div>
</div>



      <script>
      const labels = ['Pregnant', 'Deliveries','EPI','NTP','Diarrheal','Other Services',];
      const data = {
        labels: labels,
        datasets: [{
          label: 'Health Consultation',
          backgroundColor: ['#08aeea', '#2ae88a' ],
          data: [39, 10, 5, 2, 20, 30, 45],
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {}
      };
    // === include 'setup' then 'config' above ===

    const myChart = new Chart(
      document.getElementById('myChart'),
      config
      );
    </script>


@endsection

@section('scripts')
<script>
  $(document).ready(function () {
      $.ajaxSetup({
      headers:{
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
  });
  
      var calendar = $('.calendar2').fullCalendar({
          defaultView: 'list',
          events:'/events',
            header: true,
            views: {
                list: {
                    duration: { days: 90 },
                    listDayAltFormat: 'dddd',
                }
            },
      });
  
  });
  
    
</script>
@endsection
