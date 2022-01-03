<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregnants;
class PregnantConsul_DeleteController extends Controller
{
    public function __invoke(Request $pregconsultationrecord)  
    {
        $deleteuser = pregnants::withTrashed()->findOrFail($pregconsultationrecord->Dpregnant_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
