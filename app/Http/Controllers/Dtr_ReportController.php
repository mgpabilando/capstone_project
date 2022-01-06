<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorningDtr;
use App\Models\afternoonDtr;
use App\Models\undertimeDtr;
use Carbon\Carbon;
class Dtr_ReportController extends Controller
{
    public function index()
    {
        $morningrecord = MorningDtr::get();
        $afternoonrecord = afternoonDtr::get();
        $undertimerecord = undertimeDtr::get();
        $todayMonth = Carbon::now()->format('F, Y', 'Philippines');
        return view('navigation_links.reports.daily_timerec', compact('todayMonth', 'morningrecord', 'afternoonrecord', 'undertimerecord'));
    }
}
