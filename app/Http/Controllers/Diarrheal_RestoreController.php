<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diarrheal;
class Diarrheal_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        diarrheal::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }
}
