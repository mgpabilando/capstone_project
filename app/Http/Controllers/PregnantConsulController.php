<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregnants;
use Illuminate\Support\Facades\Auth;
use App\Models\Residents;
use Illuminate\Support\Facades\DB; 

class PregnantConsulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregconsultationrecord = pregnants::join('residents', 'pregnants.id', '=', 'residents.id')
        ->get(['pregnants.*', 'residents.fname', 'residents.mname', 'residents.lname']);
        return view('navigation_links.healthconsultation')->with('pregconsultationrecord',$pregconsultationrecord);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'age'=> 'required',
            'lmp' => 'required',
            'pregnancyorder' => 'required',
        ]);

        $pregnants = pregnants::create([
            'resident_id' => $request['resident_id'],
            'age' => $request['age'],
            'height_cm'	=> $request['height'],
            'weight_kg' => $request['weight'],
            'lmp' => $request['lmp'],
            'pregnancyorder' => $request['pregnancyorder'],
        ]);
        $pregnants->save();
        return redirect()->route('healthconsultation.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //get the pregnancyrecord
         $pregconsultationrecord = pregnants::find($id);
         return view('navigation_links.healthconsultation')->with($pregconsultationrecord, $id);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregconsultationrecord = pregnants::find($id);
        return view('navigation_links.healthconsultation')->with($pregconsultationrecord, $id);    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'resident_id' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'age'=> 'required',
            'lmp' => 'required',
            'pregnancyorder' => 'required',
        ]);

        $pregconsultationrecord = array (
            'weight_kg' => $request->weight,
            'height_cm' => $request->height,
            'lmp' => $request->lmp,
            'pregnancyorder' => $request->pregnancyorder,
        );

        pregnants::findOrFail($request->pregnant_id)->update($pregconsultationrecord);
        return redirect()->route('healthconsultation.index')->with('success', 'Updated Successfully.');

             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
