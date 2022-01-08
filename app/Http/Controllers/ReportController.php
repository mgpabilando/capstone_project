<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function monthly_accomplished()
     { 
     return view('navigation_links.reports.monthly_accomplished');
     }

     public function monthly_visitor()
     { 
     return view('navigation_links.reports.monthly_visitor');
     }

     public function dailytimerecord()
     { 
     return view('navigation_links.reports.index');
     } 

     public function med_request()
     { 
     return view('navigation_links.reports.med_request');
     } 
}
