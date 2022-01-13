<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\other;
class Other_DeleteController extends Controller
{
    public function __invoke(Request $otherconsulrecord)  
    {
        $deleteuser = other::withTrashed()->findOrFail($otherconsulrecord->Dother_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }

    public function delete(Request $otherconsulrecord)  
    {
        $deleteuser = other::withTrashed()->findOrFail($otherconsulrecord->Dother_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
