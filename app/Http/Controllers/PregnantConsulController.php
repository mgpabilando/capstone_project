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
        $consultationrecord = pregnants::join('residents', 'residents.id', '=', 'pregnants.id')
                                        ->first(['pregnants.id', 'residents.id', 'residents.fname', 'residents.mname', 'residents.lname', 'residents.age']);
        
        return view('navigation_links.healthconsultation')->with('consultationrecord',$consultationrecord);

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
            'resID' => 'required',
            'lmp' => 'required',
            'age'=> 'required',
            'pregnancyorder' => 'required',
        ]);

        $pregnants = pregnants::create([
            'resident_id' => $request['resID'],
            'res_name' => $request['resname'],
            'res_age' => $request['age'],
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
