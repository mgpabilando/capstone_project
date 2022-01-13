<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ntp;
class Ntp_DeleteController extends Controller
{
    public function __invoke(Request $ntpconsulrecord)  
    {
        $deleteuser = ntp::withTrashed()->findOrFail($ntpconsulrecord->Dntp_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }

    public function delete(Request $ntpconsulrecord)  
    {
        $deleteuser = ntp::withTrashed()->findOrFail($ntpconsulrecord->Dntp_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
