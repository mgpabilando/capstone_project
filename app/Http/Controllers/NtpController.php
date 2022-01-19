<?php

namespace App\Http\Controllers;

use App\Models\ntp;
use Illuminate\Http\Request;

class NtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ntpconsulrecord = ntp::all();
        if ($request->has('view_deleted')) {
            $ntpconsulrecord = ntp::onlyTrashed()->get();
        }  
        return view('navigation_links.healthconsultation.ntp')->with('ntpconsulrecord',$ntpconsulrecord);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.healthconsultation.ntp');
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
        ]);

        $ntps = ntp::create([
            'resident_id' => $request['resID'],
            'name' => $request['resname'],
            'age' => $request['age'],
            'bp' => $request['bp'],
            'temp' => $request['temp'],
        ]);
        
        // return dd($deliveries);
        $ntps->save();
        return redirect()->route('ntp.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ntp  $ntp
     * @return \Illuminate\Http\Response
     */
    public function show(ntp $ntp)
    {
        $ntpconsulrecord = ntp::find($id);
        return view('navigation_links.healthconsultation.ntp')->with($ntpconsulrecord, $id); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ntp  $ntp
     * @return \Illuminate\Http\Response
     */
    public function edit(ntp $ntp)
    {
        $ntpconsulrecord = ntp::find($id);
        return view('navigation_links.healthconsultation.ntp')->with($ntpconsulrecord, $id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ntp  $ntp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ntp $ntp)
    {
        $request->validate([
            'EresID' => 'required',
            'Eresname' => 'required',
            'Eage'=> 'required',
        ]);

        $ntpconsulrecord = array (
            'age' =>  $request->Eage,
        );

        ntp::findOrFail($request->Entp_id)->update($ntpconsulrecord);
        return redirect()->route('ntp.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ntp  $ntp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $ntpconsulrecord)
    {
        $ntprecordDelete = ntp::findOrFail($ntpconsulrecord->Dntp_id);
        $ntprecordDelete->delete();
        return redirect()->route('ntp.index')->with('success', 'Deleted Successfully.');
    }
}
