<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyNumbering;

class FamilyNumbering_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        FamilyNumbering::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
