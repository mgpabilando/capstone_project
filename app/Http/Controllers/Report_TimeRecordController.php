<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class Report_TimeRecordController extends Controller
{
    public function index()
    {

        return view('navigation_links.reports.index');
    }
}
