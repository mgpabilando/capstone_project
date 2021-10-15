<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\healthconsultation;

class ConsulController extends Controller
{
    function index()
    {
        return('navigationlinks.healthconsultation');
    }
    

    function fetch(Request $request)
     {

        /* if ($request->get('query'))
        {   
            $query = $request->get('query');
            $data = Residents::where('fname', 'LIKE', '%'.$query.'%')
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row)
            {
                $output .= '<li><a href="#">'.$row->names.'</a></li>';
            }

            $output .= '</ul>';
            echo $output;
        }; */

        $search = $request->search;

      if($search == ''){
         $residents = Residents::orderby('fname','asc')->select('id','fname')->limit(5)->get();
      }else{
         $residents = Residents::orderby('fname','asc')->select('id','fname')->where('fname', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($residents as $resident){
         $response[] = array("value"=>$resident->id,"label"=>$residents->fname);
      }

      return response()->json($response);
     }
}
