<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine_Request;

class MedRequestController extends Controller
{
    public function index(){
      //show content
      $medrequest = Medicine_Request::all();
       return view('navigation_links.medicinerequest')->with('medicine_requests', $medrequest);
    }

    public function store(Request $request){
      //add
      $request->validate([
          'medicine_name' => 'required', 'string', 'max:255',
          'med_quantity' => 'string', 'max:255',
      ]);

      $medrequest = Medicine_Request::create([
          'medicine_name' => $request['medicine_name'],
          'med_quantity' => $request['med_quantity'],

      ]);
      $medrequest->save();
      return redirect()->route('medicinerequest.index')->with('success', 'Added Successfully.');

    }

    public function create(){
      //show added data
       return view('navigation_links.medicinerequest');
    }

    public function show($id){

      $medrequest = Medicine_Request::find($id);
      return view('navigation_links.medicinerequest')->with($medrequest, $id);

    }

    public function edit($id){

    }

    public function update(Request $request){

    }

    public function destroy($id){

    }

}
