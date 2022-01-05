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
        $morningrecord = MorningDtr::get();
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
        return view('navigation_links.dashboard', compact('morningrecord', 'todayTime', 'bhw', 'resident', 'familynumber', 'pregnant', 'deliveries', 'epi', 'ntp', 'diarrheal', 'other_services', 'familyplanning') );
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
        return redirect()->route('dtr.morningrecord')->with('success', 'Updated Successfully.');
    }


}
