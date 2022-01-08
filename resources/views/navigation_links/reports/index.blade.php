@extends('layouts.home')

@section('content')    
<div id="content">
    @include('layouts.includes.topnavbar')
        {{-- <div class="row">
            <div class="{{ $chart->options['column_class'] }}">
                <h3>{!! $chart->options['chart_title'] !!}</h3>
                {!! $chart->renderHtml() !!}
            </div>

            <div class="col-md-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Day
                                </th>
                                <th>
                                    Total time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dateRange as $date)
                                <tr>
                                    <td>
                                        {{ $date }}
                                    </td>
                                    <td>
                                        {{ gmdate("H:i:s", $timeEntries[$date] ?? 0) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
</div>
   
@endsection

@section('scripts')


@endsection