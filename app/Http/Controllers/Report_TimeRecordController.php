<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\MorningDtr;
use Carbon\Carbon;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class Report_TimeRecordController extends Controller
{
    public function index()
    {
        $morning = MorningDtr::where('user_id', Auth::user()->id)->get();
        $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
        return view('navigation_links.reports.index', compact('morning', 'todayTime') );
    }
}
