<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\familyplanning;
class Familyplanning_DeleteController extends Controller
{
    public function __invoke(Request $familyplanningconsulrecord)  
    {
        $deleteuser = familyplanning::withTrashed()->findOrFail($familyplanningconsulrecord->Dfamilyplanning_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }

    public function delete(Request $familyplanningconsulrecord)  
    {
        $deleteuser = familyplanning::withTrashed()->findOrFail($familyplanningconsulrecord->Dfamilyplanning_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
