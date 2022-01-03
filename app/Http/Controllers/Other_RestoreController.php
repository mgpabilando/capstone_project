<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\other;
class Other_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        other::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
