<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorningDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Residents;
use DB;
use App\Models\pregnants;
use App\Models\DailyTimeRecord;
class MorningDtrController extends Controller
{
    public function morningrecord ()
    {   
        if(Auth::user()->hasRole('admin_nurse')){
            $morningrecord = MorningDtr::get();
            $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
            return view('navigation_links.dashboard', compact('morningrecord', 'todayTime') );
        }
        
        elseif(Auth::user()->hasRole('bhw')){
            $morningrecord = MorningDtr::get();
            $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
            return view('navigation_links.bhwdashboard', compact('morningrecord', 'todayTime') );
        }
    
    }

    public function Arrival(Request $request)
    {
        if (Auth::user()->hasRole('admin_nurse')){
            $arrivalrecord = MorningDtr::create([
                'user_id' => Auth::user()->id,
                'Arrival' =>  Carbon::now()->format('H:i:m', 'Philippines'),
            ]);

            $arrivalrecord->save();
            return redirect()->route('dashboard')->with('success', 'Have a Great Day!');

        }
        
        elseif (Auth::user()->hasRole('bhw')){
            $arrivalrecord = MorningDtr::create([
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

        $departurerecord = MorningDtr::find($userid)->update(['Departure'=>Carbon::now()->format('H:i:m', 'Philippines')]);
        return redirect()->route('dashboard')->with('success', 'Have a Great Day!');
    }


}
