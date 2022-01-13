<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\epi;
class Epi_DeleteController extends Controller
{
    // public function __invoke(Request $epiconsulrecord)  
    // {
    //     $deleteuser = epi::withTrashed()->findOrFail($epiconsulrecord->Depi_id);
    //     $deleteuser->forceDelete();
    //     return back()->with('success', 'Removed Permanently.');
    // }

    public function delete(Request $epiconsulrecord)  
    {
        $deleteuser = epi::withTrashed()->findOrFail($epiconsulrecord->Depi_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
