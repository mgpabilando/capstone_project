<?php

namespace App\Http\Controllers;

use App\Models\other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otherconsulrecord = other::all();
        return view('navigation_links.healthconsultation.other')->with('otherconsulrecord',$otherconsulrecord);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.other');
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
            'otherservice' => 'required',
            'daterec' => 'required',
        ]);

        $others = other::create([
            'service_rendered' => $request['otherservice'],
            'date' => $request['daterec'],
        ]);
        
        // return dd($deliveries);
        $others->save();
        return redirect()->route('other.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(other $other)
    {
        $otherconsulrecord = other::find($id);
        return redirect()->route('other.index')->with($otherconsulrecord, $id); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(other $other)
    {
        $otherconsulrecord = other::find($id);
        return redirect()->route('other.index')->with($otherconsulrecord, $id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'Eotherservice' => 'required',
            'Edaterec' => 'required',
        ]);

        $otherconsulrecord = array (
            'service_rendered' =>  $request->Eotherservice,
            'date' => $request->Edaterec,
        );

        other::findOrFail($request->Eother_id)->update($otherconsulrecord);
        return redirect()->route('other.index')->with('success', 'Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $otherconsulrecord)
    {
        $otherrecordDelete = other::findOrFail($otherconsulrecord->Dother_id);
        $otherrecordDelete->delete();
        return redirect()->route('other.index')->with('success', 'Deleted Successfully.');

    }
}
