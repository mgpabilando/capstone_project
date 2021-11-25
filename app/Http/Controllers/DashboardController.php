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
               $pregnant = DB::table('pregnants')->count();
               $deliveries = DB::table('deliveries_consul')->count();
               $epi = DB::table('e_p_i_consul')->count();
               $ntp = DB::table('n_t_p_consul')->count(); 
               $diarrheal = DB::table('diarrheal_consul')->count();
               $other_services = DB::table('other_consul')->count();

               return view('navigation_links/dashboard', compact('bhw', 'resident', 'pregnant', 'deliveries', 'epi', 'ntp', 'diarrheal', 'other_services'));
          }elseif(Auth::user()->hasRole('bhw')){
               $bhw = User::whereRoleIs('bhw')->count();
               $resident = DB::table('residents')->count();
               $pregnant = DB::table('pregnants')->count();
               $deliveries = DB::table('deliveries_consul')->count();
               $epi = DB::table('e_p_i_consul')->count();
               $ntp = DB::table('n_t_p_consul')->count(); 
               $diarrheal = DB::table('diarrheal_consul')->count();
               $other_services = DB::table('other_consul')->count();

               return view('navigation_links/bhwdashboard', compact('bhw', 'resident', 'pregnant', 'deliveries', 'epi', 'ntp', 'diarrheal', 'other_services'));
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
