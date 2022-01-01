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
        $residentprofile = Residents::with('familyNumbers')->get();
        return view('navigation_links.purok', compact('residentprofile'));


    }

    public function view($id)
    {
        $residentprofile = Residents::find($id)->where('family_id', '=', );
        echo "<pre>"; print_r($residentprofile); die; 
        return view('navigation_links.residentprofile')->with($residentprofile, $id);

    }
}
