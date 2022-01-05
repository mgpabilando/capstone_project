<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AfternoonDtr;
use App\Models\MorningDtr;
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
            return view('navigation_links.dashboard', compact('afternoonrecord', 'todayTime') );
        }
        
        elseif(Auth::user()->hasRole('bhw')){
            $afternoonrecord = AfternoonDtr::get();
            $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
           
            return view('navigation_links.dashboard', compact('afternoonrecord', 'todayTime') );
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
            return back()->with('success', 'Have a Great Day!');

        }
        
        elseif (Auth::user()->hasRole('bhw')){
            $arrivalrecord = AfternoonDtr::create([
                'user_id' => Auth::user()->id,
                'Arrival' =>  Carbon::now()->format('H:i:m', 'Philippines'),
            ]);
    
            $arrivalrecord->save();
            return redirect()->route('dashboard')->with('success', 'Have a Great Day!');
    
        }
    }

    public function Departure(Request $request)
    {
        $userid = $request->id;
        //$Departure = $request->Departure;

        $departurerecord = AfternoonDtr::find($userid)->update(['Departure'=>Carbon::now()->format('H:i:m', 'Philippines')]);
        return redirect()->route('dashboard')->with('success', 'Have a Great Day!');
    }


}
