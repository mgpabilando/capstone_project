<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\healthconsultation;
use App\Models\Residents;
use DB;

class HealthConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //RETRIEVE DATA FROM DBtable
        $consultationrecord = DB::select('select * from healthconsultation');
        return view('navigation_links.healthconsultation')->with('healthconsultation', $consultationrecord);
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
            'resname' => 'required', 'string', 'max:255',
            'resID' => 'string', 'max:255',
            'resfamilyhead' => 'required', 'string', 'max:255',
            'consultation_type' => 'required', 'string', 'max:255',
            'lmp' => 'required', 'date',
            'height_cm' => 'float', 'max:11',
            'weight_kg' => 'float', 'max:255',
            'complains' => 'text',
            'findings' => 'text',
            'diagnosis' => 'text',
            'treatment' => 'text',
        ]);

        $consulationrecord = healthconsultation::create([
            'res_id' => $request['resID'],
            'consultation_type' => $request['bdate'],
            'lmp' => $request['placeofbirth'],
            'height_cm' => $request['height_cm'],
            'weight_kg' => $request['weight_kg'],
            'complains' => $request['complains'],
            'findings' => $request['findings'],
            'diagnosis' => $request['diagnosis'],
            'treatment' => $request['treatment'],
        ]);

        $consulationrecord->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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