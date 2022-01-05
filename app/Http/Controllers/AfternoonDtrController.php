<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AfternoonDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AfternoonDtrController extends Controller
{
    public function afternoonrecord ()
    {
        $afternoonrecord = AfternoonDtr::get();

        return view('navigation_links.dashboard')->with('afternoonrecord', $afternoonrecord);
    }

    public function Arrival(Request $request)
    {
       
        $arrivalrecord = AfternoonDtr::create([
            'user_id' => Auth::user()->id,
            'Arrival' =>  Carbon::now()->format('H:i:m', 'Philippines'),
        ]);

        $arrivalrecord->save();
        return back()->with('success', 'Good Day!');
    }

    public function Departure(Request $request)
    {
        $userid = $request->id;
        //$Departure = $request->Departure;

        $departurerecord = AfternoonDtr::find($userid)->update(['Departure'=>Carbon::now()->format('H:i:m', 'Philippines')]);
        return redirect()->route('deliveries.index')->with('success', 'Updated Successfully.');

    }


}
