<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorningDtr;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class MorningDtrController extends Controller
{
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
