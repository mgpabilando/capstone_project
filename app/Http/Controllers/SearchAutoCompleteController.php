<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;

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

    public function autosearch(Request $request)
    {
        if ($request->ajax()) {
            $data = Residents::where('id','LIKE',$request->id.'%')->get();
            $output = '';
            if (count($data)>0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                foreach ($data as $row) {
                    $output .= '<li class="list-group-item">'.$row->fname." ".$row->lname.'</li>';

                }
                $output .= '</ul>';
                
            }else {
                $output .= '<li class="list-group-item">'.'No Data Found'.'</li>';
            }
            return $output;
        }

        $residents = Residents::all();

        if (isset($residents))
        {
            $data = Residents::where('id','LIKE',$request->id.'%')->get();
            $output = '';
            $output = '<div class="res_prof row" id="details">
            <div class="input-box col pb-3">
                <div class="details">Name:</div>
                <input type="text" name="resname" id="resname" placeholder="" required>
            </div>                           
            <div class="input-box col pb-3">
                <div class="details">Resident ID:</div>
                <input type="text" name="resID" id="resID" placeholder="" required>
            </div>
            <hr>';

        foreach ($data as $row) {
            $output .=
            '<input type="text" name="resname" id="resname" placeholder="" required>'.$row->fname." ".$row->lname;
            '<input type="text" name="resID" id="resID" placeholder="" required>'.$row->id;
        }
            $output .= '</div>';  
            

        }

        

       
          
    }
    
}