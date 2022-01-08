@extends('layouts.home')

@section('content')
<div id="content">
  @include('layouts.includes.topnavbar')

  <div class="row no-margin-padding">
    <div class="col-md-12 d-flex flex-row justify-content-between">
      <h3 class="block-title">Reports</h3>
    </div>
  </div>

  <div class="row reports">
    <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
      <a href="monthly_accomplished">Monthly Accomplished</a>
    </div>

    <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
      <a href="monthly_visitor">Monthly Visitors</a>
    </div>

    <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
      <a href="{{ route("reports.index") }}">Daily Time Record</a>
    </div>

    <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
      <a href="med_request">Medicine Request</a>
    </div>

  </div>
</div>


@endsection