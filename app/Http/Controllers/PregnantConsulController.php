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
        $pregconsultationrecord = pregnants::all();
        return view('navigation_links.healthconsultation.pregnancy')->with('pregconsultationrecord',$pregconsultationrecord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.pregnancy');
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
            'resID' => 'required',
            'resname' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'age'=> 'required',
            'lmp' => 'required',
            'pregnancyorder' => 'required',
        ]);

        $pregnants = pregnants::create([
            'resident_id' => $request['resID'],
            'name' => $request['resname'],
            'age' => $request['age'],
            'height_cm'	=> $request['height'],
            'weight_kg' => $request['weight'],
            'lmp' => $request['lmp'],
            'pregnancyorder' => $request['pregnancyorder'],
        ]);
        
        // return dd($pregnants);
        $pregnants->save();
        return redirect()->route('pregnancy.index')->with('success', 'Added Successfully.');
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
         return view('navigation_links.pregnancy.pregnancy')->with($pregconsultationrecord, $id);    
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
        return view('navigation_links.pregnancy.pregnancy')->with($pregconsultationrecord, $id);    

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
            'Eresident_id' => 'required',
            'Eweight' => 'required',
            'Eheight' => 'required',
            'Eage'=> 'required',
            'Elmp' => 'required',
            'Epregnancyorder' => 'required',
        ]);

        $pregconsultationrecord = array (
            'weight_kg' => $request->Eweight,
            'height_cm' => $request->Eheight,
            'lmp' => $request->Elmp,
            'pregnancyorder' => $request->Epregnancyorder,
        );

        pregnants::findOrFail($request->Epregnant_id)->update($pregconsultationrecord);
        return redirect()->route('pregnancy.index')->with('success', 'Updated Successfully.');

             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $pregconsultationrecord)
    {
        $pregrecordDelete = pregnants::findOrFail($pregconsultationrecord->Dpregnant_id);
        $pregrecordDelete->delete();
        return redirect()->route('pregnancy.index')->with('success', 'Deleted Successfully.');
    }
}
