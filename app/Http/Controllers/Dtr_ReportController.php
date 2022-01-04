<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dtr_ReportController extends Controller
{
    public function index()
    {
        return view('navigation_links.reports.daily_timerec');
    }
}
