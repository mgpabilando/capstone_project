<?php

namespace App\Http\Controllers;

use App\Models\epi;
use Illuminate\Http\Request;
use App\Models\Residents;
class EpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $epiconsulrecord = epi::with('residents')->get();

        //dd($epiconsulrecord);
        if ($request->has('view_deleted')) {
            $epiconsulrecord = epi::onlyTrashed()->get();
        } 
        return view('navigation_links.healthconsultation.epi')->with('epiconsulrecord',$epiconsulrecord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.epi');
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
            'meds_given' => 'required',
        ]);

        $id = $request->resID;
        $birthdate = Residents::where('id', $id)->value('bdate');
        
        $epis = epi::create([
            'resident_id' => $request['resID'],
            'name' => $request['resname'],
            'meds_given'	=> $request['meds_given'],
            'birthdate' => $birthdate,
        ]);
        
        // return dd($deliveries);
        $epis->save();
        return redirect()->route('epi.index')->with('success', 'Added Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\epi  $epi
     * @return \Illuminate\Http\Response
     */
    public function show(epi $epi)
    {
        $epiconsulrecord = epi::find($id);
        return view('navigation_links.healthconsultation.epi')->with($epiconsulrecord, $id); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\epi  $epi
     * @return \Illuminate\Http\Response
     */
    public function edit(epi $epi)
    {
        $epiconsulrecord = epi::find($id);
        return view('navigation_links.healthconsultation.epi')->with($epiconsulrecord, $id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\epi  $epi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'EresID' => 'required',
            'Eresname' => 'required',
            'Emeds_given' => 'required',
        ]);

        $epiconsulrecord = array (
            'meds_given' => $request->Emeds_given,
        );

        epi::findOrFail($request->Eepi_id)->update($epiconsulrecord);
        return redirect()->route('epi.index')->with('success', 'Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\epi  $epi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $epiconsulrecord)
    {
        $epirecordDelete = epi::findOrFail($epiconsulrecord->Depi_id);
        $epirecordDelete->delete();
        return redirect()->route('epi.index')->with('success', 'Deleted Successfully.');

    }
}
