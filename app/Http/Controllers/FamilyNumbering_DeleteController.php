<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyNumbering;

class FamilyNumbering_DeleteController extends Controller
{
    public function __invoke(Request $familynumberRec)  
    {
        $deleteFamilyHead = FamilyNumbering::withTrashed()->findOrFail($familynumberRec->familyhead_id);
        $deleteFamilyHead->forceDelete();
        return back()->with('success', 'Removed Permanently.');

    }
}
