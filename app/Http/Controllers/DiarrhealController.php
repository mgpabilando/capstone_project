<?php

namespace App\Http\Controllers;

use App\Models\diarrheal;
use Illuminate\Http\Request;
use App\Models\Residents;
class DiarrhealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $diarrhealconsulrecord = diarrheal::get();
        if ($request->has('view_deleted')) {
            $diarrhealconsulrecord = diarrheal::onlyTrashed()->get();
        } 
        return view('navigation_links.healthconsultation.diarrheal')->with('diarrhealconsulrecord',$diarrhealconsulrecord);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.diarrheal');
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
        ]);
        $id = $request->resID;
        $age = Residents::where('id', $id)->value('age');
        $diarrheals = diarrheal::create([
            'resident_id' => $request['resID'],
            'name' => $request['resname'],
            'age' => $age,
        ]);
        
        // return dd($deliveries);
        $diarrheals->save();
        return redirect()->route('diarrheal.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diarrheal  $diarrheal
     * @return \Illuminate\Http\Response
     */
    public function show(diarrheal $diarrheal)
    {
        $diarrhealconsulrecord = diarrheal::find($id);
        return view('navigation_links.healthconsultation.diarrheal')->with($diarrhealconsulrecord, $id); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diarrheal  $diarrheal
     * @return \Illuminate\Http\Response
     */
    public function edit(diarrheal $diarrheal)
    {
        $diarrhealconsulrecord = diarrheal::find($id);
        return view('navigation_links.healthconsultation.diarrheal')->with($diarrhealconsulrecord, $id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diarrheal  $diarrheal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diarrheal $diarrheal)
    {
        $request->validate([
            'EresID' => 'required',
            'Eresname' => 'required',
        ]);

        $diarrhealconsulrecord = array (
            'age' =>  $request->Eage,
        );

        diarrheal::findOrFail($request->Ediarrheal_id)->update($diarrhealconsulrecord);
        return redirect()->route('diarrheal.index')->with('success', 'Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diarrheal  $diarrheal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $diarrhealconsulrecord)
    {
        $diarrhealrecordDelete = diarrheal::findOrFail($diarrhealconsulrecord->Ddiarrheal_id);
        $diarrhealrecordDelete->delete();
        return redirect()->route('diarrheal.index')->with('success', 'Deleted Successfully.');

    }
}
