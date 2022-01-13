<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;
class DeliveriesConsul_DeleteController extends Controller
{
    public function __invoke(Request $deliverconsulrecord)  
    {
        $deleteuser = Deliveries::withTrashed()->findOrFail($deliverconsulrecord->Ddeliveries_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }

    public function delete(Request $deliverconsulrecord)  
    {
        $deleteuser = Deliveries::withTrashed()->findOrFail($deliverconsulrecord->Ddeliveries_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
