<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\afternoonDtr;
use App\Models\MorningDtr;
use App\Models\undertimeDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class dailyrecordController extends Controller
{
    public function records(){
        $afternoon = afternoonDtr::get();
        $morning = MorningDtr::get();
        $undertime = undertimeDtr::get();

        return view('navigation_links.dtr', compact('afternoon', 'undertime', 'morning'));
        
    }
}