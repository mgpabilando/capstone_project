<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorningDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
class dailyrecordController extends Controller
{
    public function records(Request $request){
        $morning = MorningDtr::where('user_id', Auth::user()->id)->get();
        $todayTime = Carbon::now()->format('H:i:m', 'Philippines');
        return view('navigation_links.dtr', compact('morning', 'todayTime') );
        
    }
}
