<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\familyplanning;
class Familyplanning_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        familyplanning::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
