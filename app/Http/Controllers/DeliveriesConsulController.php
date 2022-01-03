<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;
use Illuminate\Support\Facades\Auth;
use App\Models\Residents;
use Illuminate\Support\Facades\DB; 

class DeliveriesConsulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $deliverconsulrecord = Deliveries::all();
        if ($request->has('view_deleted')) {
            $deliverconsulrecord = Deliveries::onlyTrashed()->get();
        } 
        return view('navigation_links.healthconsultation.deliveries')->with('deliverconsulrecord',$deliverconsulrecord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.deliveries');
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
            'date_delivered' => 'required',
            'outcome' => 'required',
            'place' => 'required',
        ]);

        $deliveries = Deliveries::create([
            'resident_id' => $request['resID'],
            'name' => $request['resname'],
            'age' => $request['age'],
            'date_delivered'	=> $request['date_delivered'],
            'outcome' => $request['outcome'],
            'place' => $request['place'],
        ]);
        
        // return dd($deliveries);
        $deliveries->save();
        return redirect()->route('deliveries.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deliverconsulrecord = Deliveries::find($id);
        return view('navigation_links.healthconsultation.deliveries')->with($deliverconsulrecord, $id); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliverconsulrecord = Deliveries::find($id);
        return view('navigation_links.healthconsultation.deliveries')->with($deliverconsulrecord, $id); 

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
        $request->validate([
            'EresID' => 'required',
            'Eresname' => 'required',
            'Eage'=> 'required',
            'Edate_delivered' => 'required',
            'Eoutcome' => 'required',
            'Eplace' => 'required',
        ]);

        $deliverconsulrecord = array (
            'age' =>  $request->Eage,
            'date_delivered' => $request->Edate_delivered,
            'outcome' => $request->Eoutcome,
            'place' => $request->Eplace,
        );

        Deliveries::findOrFail($request->Edeliveries_id)->update($deliverconsulrecord);
        return redirect()->route('deliveries.index')->with('success', 'Updated Successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $deliverconsulrecord)
    {
        $deliverrecordDelete = Deliveries::findOrFail($deliverconsulrecord->Ddeliveries_id);
        $deliverrecordDelete->delete();
        return redirect()->route('deliveries.index')->with('success', 'Deleted Successfully.');
    }
}
