<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Medicine_Request;

class MedRequest_ReportController extends Controller
{
    public function index()
    {
        return view('navigation_links.reports.med_request');
    }
}
