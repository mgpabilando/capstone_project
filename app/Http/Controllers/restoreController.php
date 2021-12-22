<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;

class restoreController extends Controller
{
    public function __invoke($id)  
    {
        // $residentprofile = Residents::all();

        // if ($request->has('view_deleted')) {
        //     $residentprofile = Residents::onlyTrashed()->get();
        // }  
        Residents::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

}
