<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;
use DB;

class SearchResidentByFamilyNumber extends Controller
{
    public function getResidentsFamilyNum(Request $request){
        $search = $request->search;

        if($search == '')
        {
            $residents = Residents::select('id','lname', 'fname', 'family_id')
                                    ->limit(5)->get();
        }
        
        else
        {
            $residents = Residents::select('id','lname', 'fname', 'family_id')
                                ->where(DB::raw('CONCAT(fname," ",lname," ",id," ")'), 'like', '%' .$search . '%')
                                ->limit(5)
                                ->get();
        }

        $response = array();
        foreach($residents as $resident)
        {
            $response[] = array(
                    "id"=>$resident->family_id,
                    "text"=>$resident->id,
            );
        }

        return response()->json($response); 
    }
}
