<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorningDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class MorningDtrController extends Controller
{
    public function morningrecord ()
    {
        $morningrecord = MorningDtr::get();

        return view('navigation_links.dashboard')->with('morningrecord', $morningrecord);
    }

    public function Arrival(Request $request)
    {
       
        $arrivalrecord = MorningDtr::create([
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

        $departurerecord = MorningDtr::find($userid)->update(['Departure'=>Carbon::now()->format('H:i:m', 'Philippines')]);
        return back()->with('success', 'Good Day!');
    }


}
