<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;

class ResidentDeleteController extends Controller
{
    public function __invoke(Request $residentprofile)  
    {
        $deleteresident = Residents::withTrashed()->findOrFail($residentprofile->resident_id);
        $deleteresident->forceDelete();
        return back()->with('success', 'Removed Permanently.');

    }
}
