@extends('layouts.home')
@section('content')

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
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size: 1rem;">ARRIVAL</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size: 1rem;">DEPARTURE</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="font-size: 1rem;">UNDERTIME</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <input type="time" name="">
                        <div class="d-flex justify-content-end">
                         <button type="button" class="btn dtr-btn btn-success">ADD</button>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <input type="time" name="">
                        <div class="d-flex justify-content-end">
                         <button type="button" class="btn dtr-btn btn-success">ADD</button>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <input type="number" name="" placeholder="HOUR">
                        <input type="number" name="" placeholder="MINUTE">
                        <div class="d-flex justify-content-end">
                         <button type="button" class="btn dtr-btn btn-success" style="margin-right: 35px;">ADD</button>
                        </div>
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

      <div class="row d-flex">
        <div class="chart-container mt-3 col-md-6">
          <canvas class="ms-4" id="myChart" height="200"></canvas>
        </div>
    
        <div class="col-md-6">
          <div class="event-list d-flex justify-content-center">
            <div class="panel-body mt-3 justify-content-center" style="border:1px solid;">
              <div class="calendar2"></div>
            </div>
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
          data: [{{ $pregnant }}, {{ $deliveries }}, {{ $epi }}, {{ $ntp }}, {{ $diarrheal }}, {{ $other_services }}],
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
          height: 320,
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
