<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;
class DeliveriesConsul_RestoreController extends Controller
{
    public function __invoke($id)  
    {
        Deliveries::withTrashed()->find($id)->restore();
        return back()->with('success', 'Restored Successfully.');
    }

}
