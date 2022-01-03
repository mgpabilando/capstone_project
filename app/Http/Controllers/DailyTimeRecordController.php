<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DailyTimeRecord;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class DailyTimeRecordController extends Controller
{
    public function index()
    {
        return view('navigation_links.dashboard')->with('dtr',$dtr);
    }

    public function showtimeIn(Request $request)
    {
        $timeinrecord = DailyTimeRecord::create([
            'user_id' => Auth::user()->id,
            'TimeIn' =>  Carbon::now()->format('H:i:m', 'Philippines'),
        ]);

        $timeinrecord->save();
        return back()->with('success', 'Good Day!');
    }

    public function showunderTime($id)
    {
        return DailyTimeRecord::find($id);
        return back()->with('success', 'Good Work!');
    }

    public function showtimeOut(Request $id)
    {
        // DailyTimeRecord::where('user_id', Auth::id())->where('TimeOut', $id)->firstOrFail()
        // ->update(['TimeOut' => Carbon::now()->format('H:i:m', 'Philippines')]);
        $data = DailyTimeRecord::find($id);
        return $data;
    }

    public function updateTimeOut(Request $id)
    {
        $data = DailyTimeRecord::where('id', $id)->firstOrFail()
        ->update(['TimeOut' => Carbon::now()->format('H:i:m', 'Philippines')]);
        dd( $data);
    }
}
