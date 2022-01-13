<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\epi;
class Epi_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        epi::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

    public function restore($id)  
    {
        epi::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
