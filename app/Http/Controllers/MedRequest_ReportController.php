<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine_Request;
use Carbon\Carbon;
class MedRequest_ReportController extends Controller
{
    public function index()
    {               
        $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
        $medreq = Medicine_Request::get();
        $todayMonth = Carbon::now()->format('F, Y', 'Philippines');
        return view('navigation_links.reports.med_request', compact('todayMonth', 'medreq', 'todayTime'));
        ;
    }
}
