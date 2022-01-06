<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            $FamilyNumbering = FamilyNumbering::select('id','f_name', 'm_name', 'l_name')
                                    ->limit(5)->get();
        }
        
        else
        {
            $FamilyNumbering = FamilyNumbering::select('id','f_name', 'm_name', 'l_name')
                                ->where(DB::raw('CONCAT(f_name," ",m_name," ",l_name," ",id," ")'), 'like', '%' .$search . '%')
                                ->limit(5)
                                ->get();
        }

        $response = array();
        foreach($FamilyNumbering as $familynumber)
        {
        $response[] = array(
                "id"=>$familynumber->id,
                "text"=>$familynumber->f_name." ".$familynumber->m_name." ".$familynumber->l_name,   
        );
        }
    
        return response()->json($response); 
    }
}
