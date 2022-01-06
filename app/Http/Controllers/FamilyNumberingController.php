<?php

namespace App\Http\Controllers;

use App\Models\FamilyNumbering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;
use App\Models\Residents;

class FamilyNumberingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $familynumberrecord = FamilyNumbering::get();

        if ($request->has('view_deleted')) {
            $familynumberrecord = FamilyNumbering::onlyTrashed()->get();
        }   

        return view('navigation_links.familynumbering')->with('familynumberrecord',$familynumberrecord);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.familynumbering');
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
            'f_name' => 'required | string | max:255',
            'm_name' => 'string | max:255',
            'l_name' => 'required | string | max:255',
            'purok' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Do not leave it blank')->withInput();
        }

        $familyNumbering = FamilyNumbering::create([
            'f_name' => $request['f_name'],
            'm_name' => $request['m_name'],
            'l_name' => $request['l_name'],
            'purok' => $request['purok'],
        ]);
        
        $familyNumbering->save();
        return redirect()->route('familynumbering.index')->with('success', 'Added Successfully.');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FamilyNumbering  $familyNumbering
     * @return \Illuminate\Http\Response
     */
    public function show(FamilyNumbering $familyNumbering)
    {
        $familynumberrecord = FamilyNumbering::find($id);
        return view('navigation_links.familynumbering')->with($familynumberrecord, $id); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamilyNumbering  $familyNumbering
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilyNumbering $familyNumbering)
    {
        $familynumberrecord = FamilyNumbering::find($id);
        return view('navigation_links.familynumbering')->with($familynumberrecord, $id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamilyNumbering  $familyNumbering
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamilyNumbering $familyNumbering)
    {
        $request->validate([
            'Ef_name' => 'required',
            'Em_name' => 'required',
            'El_name' => 'required',
            'Epurok'=> 'required',
        ]);

        $familynumberrecord = array (
            'Ef_name'=> $request->Ef_name,
            'Em_name'=> $request->Em_name,
            'El_name'=> $request->El_name,
            'Epurok' => $request->Epurok,
        );

        FamilyNumbering::findOrFail($request->Efamilynumber_id)->update($familynumberrecord);
        return redirect()->route('familynumbering.index')->with('success', 'Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamilyNumbering  $familyNumbering
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $familynumberrecord)
    {
        $familynumberrecordDelete = FamilyNumbering::findOrFail($familynumberrecord->Dfamilynumber_id);
        $familynumberrecordDelete->delete();
        return redirect()->route('familynumbering.index')->with('success', 'Deleted Successfully.');

    }
}
