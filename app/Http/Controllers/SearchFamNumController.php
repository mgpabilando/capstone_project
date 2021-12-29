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
        $familynumbers = FamilyNumbering::select('id','familyhead' , 'purok')
                                ->limit(5)->get();

        }
        
        else
        {
        $familynumbers = FamilyNumbering::select('id','familyhead', 'purok')
                                ->where(DB::raw('CONCAT(id," ",familyhead)'), 'like', '%' .$search . '%')
                                ->limit(5)
                                ->get();
        }

        $response = array();
        foreach($familynumbers as $familynumber)
        {
        $response[] = array(
                "id"=>$familynumber->purok,
                "text"=>$familynumber->id,   
        );
        }
    
        return response()->json($response); 
    }
}
