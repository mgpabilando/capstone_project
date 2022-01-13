<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;

class restoreController extends Controller
{
    public function __invoke($id)  
    {
        Residents::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

    public function restore($id)  
    {
        Residents::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

}
