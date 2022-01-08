<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ReportService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class Report_TimeRecordController extends Controller
{
    public function index(Request $request, ReportService $reportService)
    {
        // $employees = User::whereHas('roles', function ($query) {
        //         $query->whereId(2);
        //     })
        //     ->get();

        //$user = User::get();
        
        $dateRange = $reportService->generateDateRange();

        $timeEntries = $reportService->generateReport(Auth::user()->id);
        if ($timeEntries) {
            $chart = new LaravelChart([
                'chart_title'           => 'Hours of work per day',
                'chart_type'            => 'line',
                'report_type'           => 'group_by_date',
                'model'                 => 'App\Models\MorningDtr',
                'group_by_field'        => 'Arrival',
                'group_by_period'       => 'day',
                'aggregate_function'    => 'sum',
                'aggregate_field'       => 'total_time_chart',
                'column_class'          => 'col-md-8',
                'continuous_time'       => true,
            ]);
        } else {
            $chart = NULL;
        }

        return view('navigation_links.reports.index', compact('timeEntries', 'dateRange', 'chart'));
    }
}
