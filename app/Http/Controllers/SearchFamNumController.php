<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;
use App\Models\FamilyNumbering;
use DB;

class SearchFamNumController extends Controller
{
    public function index()
    {
            


    }

    public function getFamilynumber(Request $request){
        $search = $request->search;

        if($search == '')
        {
        $familynumbers = FamilyNumbering::has('resident')
                                ->limit(5)->get();

        }
        
        else
        {
        $familynumbers = FamilyNumbering::has('resident')
                                ->where(DB::raw('CONCAT(family_id," ",fname," ",mname," ",lname)'), 'like', '%' .$search . '%')
                                ->limit(5)
                                ->get();
        }

        $response = array();
        foreach($familynumbers as $familynumber)
        {
        $response[] = array(
                "id"=>$familynumber->resident->purok,
                "text"=>$familynumber->family_id,   
        );
        }
    
        return response()->json($response); 
    }
}
