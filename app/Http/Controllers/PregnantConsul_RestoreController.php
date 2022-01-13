<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregnants;

class PregnantConsul_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        pregnants::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

    public function restore($id)  
    {
        pregnants::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
