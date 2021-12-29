<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;
use App\Models\FamilyNumbering;
use Illuminate\Support\Facades\DB;

class purokController extends Controller
{
    public function index()
    {
        $residentprofile = DB::table('residents')->where('purok', '1')->get();
        return view('navigation_links.purok', compact('residentprofile'));
    }
}
