<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Residents;
use DB;
use App\Models\pregnants;
use Carbon\Carbon;
use App\Models\DailyTimeRecord;
use App\Models\MorningDtr;
use App\Models\afternoonDtr;
use App\Models\undertimeDtr;
class DashboardController extends Controller
{
     public function index()
     {
          if(Auth::user()->hasRole('admin_nurse')){
               $bhw = User::whereRoleIs('bhw')->count();
               $resident = DB::table('residents')->count();
               $familynumber = DB::table('family_numberings')->count();
               $pregnant = DB::table('pregnants')->count();
               $deliveries = DB::table('deliveries')->count();
               $epi = DB::table('epis')->count();
               $ntp = DB::table('ntps')->count(); 
               $diarrheal = DB::table('diarrheals')->count();
               $other_services = DB::table('others')->count();
               $familyplanning = DB::table('familyplannings')->count();
               $todayTime = Carbon::now()->format('H:i:m', 'Philippines');

               return view('navigation_links/dashboard', compact('todayTime', 
               'bhw', 'resident', 'familynumber', 'pregnant', 'deliveries',
               'epi', 'ntp', 'diarrheal', 'other_services', 'familyplanning' ));

          }elseif(Auth::user()->hasRole('bhw')){
               $bhw = User::whereRoleIs('bhw')->count();
               $resident = DB::table('residents')->count();
               $familynumber = DB::table('family_numberings')->count();
               $pregnant = DB::table('pregnants')->count();
               $deliveries = DB::table('deliveries')->count();
               $epi = DB::table('epis')->count();
               $ntp = DB::table('ntps')->count(); 
               $diarrheal = DB::table('diarrheals')->count();
               $other_services = DB::table('others')->count();
               $familyplanning = DB::table('familyplannings')->count();
               $todayTime = Carbon::now()->format('H:i:m', 'Philippines');

               return view('navigation_links/dashboard', compact('todayTime', 
               'bhw', 'resident', 'familynumber', 'pregnant', 'deliveries',
               'epi', 'ntp', 'diarrheal', 'other_services', 'familyplanning' ));
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

     public function dtr()
     {
          return view('navigation_links.dtr');
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

     // HEALTH CONSULTATION
     public function pregnancy()
     {
     return view('navigation_links.healthconsultation.pregnancy');
     }

     public function deliveries()
     {
     return view('navigation_links.healthconsultation.deliveries');
     }

     public function ntp()
     {
     return view('navigation_links.healthconsultation.ntp');
     }

     public function epi()
     {
     return view('navigation_links.healthconsultation.epi');
     }

     public function diarrheal()
     {
     return view('navigation_links.healthconsultation.diarrheal');
     }

     public function familyplanning()
     {
     return view('navigation_links.healthconsultation.familyplanning');
     }

     public function other()
     {
     return view('navigation_links.healthconsultation.other');
     }
     //END HEALTH CONSULTATION

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
