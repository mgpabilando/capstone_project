<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Residents;
use DB;

class DashboardController extends Controller
{
     public function index()
     {
          if(Auth::user()->hasRole('admin_nurse')){
               $bhw = User::whereRoleIs('bhw')->count();
               $resident = DB::table('residents')->count();
               return view('navigation_links/dashboard', compact('bhw', 'resident'));
          }elseif(Auth::user()->hasRole('bhw')){
               return view('navigation_links/bhwdashboard');
          }
     }

     public function users_profile()
     {
     $user = Auth::User();
     return view('navigation_links.users_profile')->with('user', $user);
     }

     public function residentprofile()
     {
     return view('navigation_links.residentprofile');
     }

     public function bhw()
     {
     return view('navigation_links.bhw');
     }

     public function activityevents()
     {
     return view('navigation_links.events');
     }

     public function familynumbering()
     {
     return view('navigation_links.familynumbering');
     }

     public function healthconsultation()
     {
     return view('navigation_links.healthconsultation');
}

     public function medicinerequest()
     {
     return view('navigation_links.medicinerequest');
     }

     public function purok()
     {
     return view('navigation_links.purok');
     }

     public function reports()
     {
     return view('navigation_links.reports');
     }









}
