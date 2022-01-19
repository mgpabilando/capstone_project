<?php

namespace App\Http\Controllers;

use App\Models\familyplanning;
use Illuminate\Http\Request;

class FamilyplanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familyplanningconsulrecord = familyplanning::all();
        return view('navigation_links.healthconsultation.familyplanning')->with('familyplanningconsulrecord',$familyplanningconsulrecord);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.familyplanning');
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
            'age'=> 'required',
            'method_used'=> 'required',
        ]);

        $familyplanning = familyplanning::create([
            'resident_id' => $request['resID'],
            'name' => $request['resname'],
            'age' => $request['age'],
            'method_used' => $request['method_used'],
            'bp' => $request['bp'],
            'temp' => $request['temp'],
        ]);
        
        $familyplanning->save();
        return redirect()->route('familyplanning.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\familyplanning  $familyplanning
     * @return \Illuminate\Http\Response
     */
    public function show(familyplanning $familyplanning)
    {
        $familyplanningconsulrecord = familyplanning::find($id);
        return view('navigation_links.healthconsultation.familyplanning')->with($familyplanningconsulrecord, $id); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\familyplanning  $familyplanning
     * @return \Illuminate\Http\Response
     */
    public function edit(familyplanning $familyplanning)
    {
        $familyplanningconsulrecord = familyplanning::find($id);
        return view('navigation_links.healthconsultation.familyplanning')->with($familyplanningconsulrecord, $id); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\familyplanning  $familyplanning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, familyplanning $familyplanning)
    {
        $request->validate([
            'EresID' => 'required',
            'Eresname' => 'required',
            'Eage'=> 'required',
            'Emethod_used'=> 'required',
        ]);

        $familyplanningconsulrecord = array (
            'age' =>  $request->Eage,
            'method_used' => $request->Emethod_used,
        );

        familyplanning::findOrFail($request->Efamilyplanning_id)->update($familyplanningconsulrecord);
        return redirect()->route('familyplanning.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\familyplanning  $familyplanning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $familyplanningconsulrecord)
    {
        $familyplanningrecordDelete = familyplanning::findOrFail($familyplanningconsulrecord->Dfamilyplanning_id);
        $familyplanningrecordDelete->delete();
        return redirect()->route('familyplanning.index')->with('success', 'Deleted Successfully.');
    }
}
