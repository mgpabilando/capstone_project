<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorningDtr;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class MorningDtrController extends Controller
{
    // public function morningrecord ()
    // {   
    //     if(Auth::user()->hasRole('admin_nurse')){
    //         $morningrecord = MorningDtr::get();
    //         $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
    //         return view('navigation_links.dashboard', compact('morningrecord', 'todayTime') );
    //     }
        
    //     elseif(Auth::user()->hasRole('bhw')){
    //         $morningrecord = MorningDtr::get();
    //         $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
    //         return view('navigation_links.bhwdashboard', compact('morningrecord', 'todayTime') );
    //     }
    
    // }

    // public function Arrival(Request $request)
    // {
    //     if (Auth::user()->hasRole('admin_nurse')){
    //         $arrivalrecord = MorningDtr::create([
    //             'user_id' => Auth::user()->id,
    //             'Arrival' => $request['timein'],
      
    //         ]);
    //         $arrivalrecord->save();
    //         return back()->with('success', 'Have a Great Day!');
    //     }
        
    //     elseif (Auth::user()->hasRole('bhw')){
    //         $arrivalrecord = MorningDtr::create([
    //             'user_id' => Auth::user()->id,
    //             'Arrival' => $request['timein'],
    //         ]);
    
    //         $arrivalrecord->save();
    //         return json_encode(array(
    //             "statusCode"=>200
    //         ));
    //         // return back()->with('success', 'Have a Great Day!');
    //     }
    // }

    // public function Departure(Request $request)
    // {
    //     $userid = $request->id;
    //     $departurerecord = MorningDtr::find($userid)->update(['Departure'=>Carbon::now()->format('H:i:m')]);
    //     return redirect()->route('dashboard')->with('success', 'Have a Great Day!');
    // }

    public function showmorning()
    {
        $timeEntry = MorningDtr::whereNull('Departure')
            ->whereHas('user', function ($query) {
                $query->where('id', auth()->id());
            })->first();
            

        return response()->json(compact('timeEntry'));
    }

    public function updatemorning()
    {
        $timeEntry = MorningDtr::whereNull('Departure')
            ->whereHas('user', function ($query) {
                $query->where('id', auth()->id());
            })
            ->first();

        if ($timeEntry)
        {
            $timeEntry->update([
                'Departure' => now()
            ]);

            return response()->json([
                'status' => 'Work time has stopped at ['. gmdate("H:i:s ", $timeEntry->total_time) . '] hours'
            ]);
        } else {
            auth()->user()->morningrecord()->create([
                'Arrival' => now()
            ]);

            return response()->json([
                'status' => 'Work time has started at ['. Carbon::parse($timeEntry)->format('g:i:s A') .']'
            ]);
        };
    }
}
