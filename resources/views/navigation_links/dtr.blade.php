@extends('layouts.home')
@section('content')
<div id="content" style="height: auto;">
    @include('layouts.includes.topnavbar')

    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Daily Time Record</h3>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('dtr.arrival') }}" method="POST">
          @csrf
          <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
          {{-- <input id="timein" name="timein" type="time" class="" value={{ $todayTime }}> --}}
          <div class="d-flex justify-content-center">
            <button class="col-md-3 btn btn-success">TIME IN</button>
          </div>
        </form>
      </div>
      <hr class="no-padding">
      <table id="dtr" class="table table-responsive table-bordered mt-3">
        <thead class="table-primary">
          <tr>
            <th  style="font-size: 11px">DATE</th>
            <th  style="font-size: 11px">ARRIVAL</th>
            <th  style="font-size: 11px">DEPARTURE</th>
          </tr>
        </thead>
        <tbody>
          @if($morningrecord)
            @foreach ($morningrecord as $morningrecord)
            <tr>
              <th class="text-center" style="text-transform: uppercase; font-size: 11px;">{{Carbon\Carbon::parse($morningrecord->created_at)->format('d-m-Y') ?? '' }}</th>
              <td class="text-center" style="font-size: 11px">{{ $morningrecord->Arrival }}</td>
              <td class="text-center" style="font-size: 11px">{{ $morningrecord->Departure }}</td>
            </tr>
            @endforeach
            <form action="{{ route('dtr.departure', $morningrecord->id) }}" method="POST">
              @csrf
              <input type="text" name="user_id" id="user_id" value={{ Auth::user()->id }} hidden>
              <input type="text" name="id" id="id" value={{$morningrecord->id}} hidden>
              <div class="d-flex justify-content-center">
                <button class="btn btn-primary">TIME OUT</button>
              </div>
            </form>
          @endif
        </tbody>
      </table>
</div>
@endsection