<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;



class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resident = Residents::all();
        return view('navigation_links.residentprofile')->with('resident', $resident);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.residentprofile');
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
            'fname' => 'required', 'string', 'max:255',
            'mname' => 'string', 'max:255',
            'lname' => 'required', 'string', 'max:255',
            'age' => 'required', 'integer',
            'placeofbirth' => 'required', 'string', 'max:255',
            'bdate' => 'required', 'date',
            'mobile' => 'required', 'string', 'max:11',
            'sex' => 'required', 'string', 'max:255',
            'civil_status' => 'required', 'string', 'max:255',
            'phil_health_id' => 'string', 'max:255',
            '4ps_id' => 'string', 'max:255',
            'family_id' => 'required', 'string', 'max:255',
            'purok' => 'string', 'max:255',
        ]);

        $resident = Residents::create([
            'fname' => $request['fname'],
            'mname' => $request['mname'],
            'lname' => $request['lname'],
            'bdate' => $request['bdate'],
            'placeofbirth' => $request['placeofbirth'],
            'mobile' => $request['mobile'],
            'age' => $request['age'],
            'sex' => $request['sex'],
            'civil_status' => $request['civil_status'],
            'phil_health_id' => $request['phil_health_id'],
            '4ps_id' => $request['4ps_id'],
            'family_id' => $request['family_id'],
            'purok' => $request['purok'],
        ]);
        //$resident->{($request->purok)};

        $resident->save();

        return redirect('residentprofile')->with('success', 'Data Saved.');
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
