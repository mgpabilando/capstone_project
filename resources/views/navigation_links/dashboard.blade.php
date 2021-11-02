@extends('layouts.home')
@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Dashboard</h3>
        </div>
    </div>

    <div class="chart-container mt-3 ms-3 col-md-6">
      <canvas id="myChart"></canvas>
    </div>

      <script>

      const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
      ];
      const data = {
        labels: labels,
        datasets: [{
          label: 'Health Consultation',
          backgroundColor: '#01ab40',
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

</div>
@endsection
