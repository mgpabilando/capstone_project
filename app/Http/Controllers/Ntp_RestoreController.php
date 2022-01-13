<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ntp;
class Ntp_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        ntp::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

    public function restore($id)  
    {
        ntp::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
