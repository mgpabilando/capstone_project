<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Alert;


class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //RETRIEVE DATA FROM RESIDENTS DB
        $residentprofile = Residents::get();

        if ($request->has('view_deleted')) {
            $residentprofile = Residents::onlyTrashed()->get();
        }   

        return view('navigation_links.residentprofile')->with('residents', $residentprofile);
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
        $validator = Validator::make($request->all(), [
            'fname' => 'required | string | max:255',
            'mname' => 'string | max:255',
            'lname' => 'required | string | max:255',
            'age' => 'required | integer',
            'placeofbirth' => 'required | string | max:255',
            'bdate' => 'required | date',
            'mobile' => 'required | string | max:11',
            'sex' => 'required | string | max:255',
            'civil_status' => 'required | string | max:255',
            'phil_health_id' => 'string | max:255 | unique:residents,phil_health_id',
            'id_4ps' => 'string | max:255 | unique:residents,id_4ps',
            'family_id' => 'required | string | max:255',
            'purok' => 'string | max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Identification Cards must be unique!')->withInput();
        }

        $residentprofile = Residents::create([
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
            'id_4ps' => $request['id_4ps'],
            'family_id' => $request['family_id'],
            'purok' => $request['purok'],
        ]);
        $residentprofile->save();
        return redirect()->route('residentprofile.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get the respondent
        $residentprofile = Residents::find($id);
        /* echo "<pre>"; print_r($residentprofile); die; */
        return view('navigation_links.residentprofile')->with($residentprofile, $id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $residentprofile = Residents::find($id);
        return view('navigation_links.residentprofile')->with($residentprofile, $id);

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
            'id_4ps' => 'string', 'max:255',
            'family_id' => 'required', 'string', 'max:255',
            'purok' => 'string', 'max:255',
        ]);

        $residentprofile = array (
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'bdate' => $request->bdate,
            'placeofbirth' => $request->placeofbirth,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'sex' => $request->sex,
            'civil_status' => $request->civil_status,
            'phil_health_id' => $request->phil_health_id,
            'id_4ps' => $request->id_4ps,
            'family_id' => $request->family_id,
            'purok' => $request->purok,
        );

        /* echo "<pre>"; print_r($residentprofile); die; */

        Residents::findOrFail($request->resident_id)->update($residentprofile);
        return redirect()->route('residentprofile.index')->with('success', 'Updated Successfully.');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $residentprofile)
    {
        $deleteresident = Residents::findOrFail($residentprofile->resident_id);
        $deleteresident->delete();
        return redirect()->route('residentprofile.index')->with('success', 'Deleted Successfully.');
    }
}
