<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregnants;
use App\Models\Deliveries;

class MonthlyAccomplished_ReportController extends Controller
{
    public function index()
    {
        
        return view('navigation_links.reports.monthly_accomplished')
        ->with('pregnants', pregnants::all())
        ->with('Deliveries', Deliveries::all());
    }
}
