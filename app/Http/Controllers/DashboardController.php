<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
   {
       if(Auth::user()->hasRole('admin_nurse')){
            return view('navigation_links.dashboard');
       }elseif(Auth::user()->hasRole('bhw')){
            return view('navigation_links.bhwdashboard');
       }
   }
}
