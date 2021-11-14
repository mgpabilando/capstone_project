<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;
use DB;
class SearchAutoCompleteController extends Controller
{
    public function index()
    {
            


    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function getResidents(Request $request){
      $search = $request->search;

      if($search == '')
      {
         $residents = Residents::select('id','lname', 'fname')
                                 ->limit(5)->get();

      }
      
      else
      {
         $residents = Residents::select('id','lname', 'fname')
                                 ->where(DB::raw('CONCAT(fname," ",lname)'), 'like', '%' .$search . '%')
                                 ->limit(5)
                                 ->get();
      }

      $response = array();
      foreach($residents as $resident)
      {
         $response[] = array(
               "id"=>$resident->id,
               "text"=>$resident->id."-".$resident->fname." ".$resident->lname,
                
         );
      }
    
      return response()->json($response); 
   }

    
}