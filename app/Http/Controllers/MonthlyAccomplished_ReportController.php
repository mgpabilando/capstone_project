<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregnants;
use App\Models\Deliveries;
use App\Models\diarrheal;
use App\Models\epi;
use App\Models\ntp;
use App\Models\other;
use App\Models\familyplanning;
use App\Models\Medicine_Request;
use Carbon\Carbon;
class MonthlyAccomplished_ReportController extends Controller
{
    public function index()
    {
        $todayMonth = Carbon::now()->format('F, Y', 'Philippines');
        return view('navigation_links.reports.monthly_accomplished')
        ->with('pregnants', pregnants::all())
        ->with('Deliveries', Deliveries::all())
        ->with('diarrheal', diarrheal::all())
        ->with('epi', epi::all())
        ->with('ntp', ntp::all())
        ->with('other', other::all())
        ->with('familyplanning', Deliveries::all())
        ->with('todayMonth', $todayMonth);
        
    }
}
