<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diarrheal;
class Diarrheal_DeleteController extends Controller
{
    public function __invoke(Request $diarrhealconsulrecord)  
    {
        $deleteuser = diarrheal::withTrashed()->findOrFail($diarrhealconsulrecord->Ddiarrheal_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
