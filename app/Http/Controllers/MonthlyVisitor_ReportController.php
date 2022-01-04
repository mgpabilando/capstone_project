<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyVisitor_ReportController extends Controller
{
    public function index()
    {
        return view('navigation_links.reports.monthly_visitor');
    }
}
