<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\undertimeDtr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class UndertimeDtrController extends Controller
{
    public function undertimerecord (Request $request)
    {
        if (Auth::user()->hasRole('admin_nurse')){
            $arrivalrecord = undertimeDtr::create([
                'user_id' => Auth::user()->id,
                'Hour' =>  $request->Hour,
                'Minute' =>  $request->Minute,
            ]);

            $arrivalrecord->save();
            return back()->with('success', 'Have a Great Day!');

        }
        
        elseif (Auth::user()->hasRole('bhw')){
            $arrivalrecord = undertimeDtr::create([
                'user_id' => Auth::user()->id,
                'Hour' =>  $request->Hour,
                'Minute' =>  $request->Minute,
            ]);
    
            $arrivalrecord->save();
            return back()->with('success', 'Have a Great Day!');

        }
    }
}