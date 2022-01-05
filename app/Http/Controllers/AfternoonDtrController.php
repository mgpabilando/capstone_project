<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AfternoonDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Residents;
use DB;
use App\Models\pregnants;
use App\Models\DailyTimeRecord;
class AfternoonDtrController extends Controller
{
    public function afternoonrecord ()
    {   
        if(Auth::user()->hasRole('admin_nurse')){
            $afternoonrecord = AfternoonDtr::get();
            $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
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
            return view('navigation_links.dashboard', compact('afternoonrecord', 'todayTime', 'bhw', 'resident', 'familynumber', 'pregnant', 'deliveries', 'epi', 'ntp', 'diarrheal', 'other_services', 'familyplanning') );
        }
        
        elseif(Auth::user()->hasRole('bhw')){
            $afternoonrecord = AfternoonDtr::get();
            $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
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
            return view('navigation_links.bhwdashboard', compact('afternoonrecord', 'todayTime', 'bhw', 'resident', 'familynumber', 'pregnant', 'deliveries', 'epi', 'ntp', 'diarrheal', 'other_services', 'familyplanning') );
        }
    
    }

    public function Arrival(Request $request)
    {
        if (Auth::user()->hasRole('admin_nurse')){
            $arrivalrecord = AfternoonDtr::create([
                'user_id' => Auth::user()->id,
                'Arrival' =>  Carbon::now()->format('H:i:m', 'Philippines'),
            ]);

            $arrivalrecord->save();
            return redirect()->route('dtr.afternoonrecord')->with('success', 'Have a Great Day!');

        }
        
        elseif (Auth::user()->hasRole('bhw')){
            $arrivalrecord = AfternoonDtr::create([
                'user_id' => Auth::user()->id,
                'Arrival' =>  Carbon::now()->format('H:i:m', 'Philippines'),
            ]);
    
            $arrivalrecord->save();
            return redirect()->route('dtr.afternoonrecord')->with('success', 'Have a Great Day!');
    
        }
    }

    public function Departure(Request $request)
    {
        $userid = $request->id;
        //$Departure = $request->Departure;

        $departurerecord = AfternoonDtr::find($userid)->update(['Departure'=>Carbon::now()->format('H:i:m', 'Philippines')]);
        return redirect()->route('dtr.afternoonrecord')->with('success', 'Have a Great Day!');
    }


}
