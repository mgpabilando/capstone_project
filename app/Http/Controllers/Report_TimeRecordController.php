<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\MorningDtr;
use Carbon\Carbon;
use DB;

class Report_TimeRecordController extends Controller
{
    public function index()
    {
        $morning = MorningDtr::where('user_id', Auth::user()->id)->get();
        $todayTime = Carbon::now()->format('H:i:m', 'Philippines');

    //     $subquery = MorningDtr::
    //         select('*', 
    //         DB::raw('timestampdiff(second, Arrival, Departure) as time_difference'))
    //         ->whereRaw('date(Arrival)', '2020-07-19');
    //     dd($subquery);
    // $query = User::
    //         select('Users.id as User_id', 
    //                 'Users.fname', 
    //                 DB::raw('date(Arrival) as day'), 
    //                 DB::raw('sec_to_time(sum(time_difference)) as total_time') )
    //         ->joinSub($subquery, 'time_diff_table', function($join){
    //             $join->on('Users.id', 'time_diff_table.User_id');
    //         })
    //         ->groupBy(DB::raw('date(Arrival)'), 'User_id')
    //         ->get();
            
        return view('navigation_links.reports.index', compact('morning', 'todayTime') );
    }
}
