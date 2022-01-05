<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;
use Carbon\Carbon;
use DB;
class MonthlyVisitor_ReportController extends Controller
{
    public function index()
    {
        $lastRecordDate = Residents::all()->sortByDesc('created_at');

        return view('navigation_links.reports.monthly_visitor', compact('lastRecordDate'));
    }
}
