<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        return view('navigation_links.users_profile')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        //get the userinfo
        $user = User::find($id);
        return view('navigation_links.users_profile')->with($user, $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('navigation_links.users_profile')->with($user, $id);
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
        $user = Auth::User();

        $request->validate([
            'fname' => 'required', 'string', 'max:255',
            'lname' => 'required', 'string', 'max:255',
            'age' => 'required', 'integer',
            'address' => 'required', 'string', 'max:255',
            'bdate' => 'required', 'date',
            'contact' => 'required', 'string', 'max:11',
            'password' => 'required', 'min:6', 'max:12', 
            'password_confirmation' => 'required',
        ]);

        $user = array (
            'fname' => $request->fname,
            'mname' => $request->mname,
            'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
            'bdate' => $request->bdate,
            'contact' => $request->contact,
            'password' => $request->password,
        );

        User::findOrFail($request->user_id)->update($user);
        return redirect()->route('RegisteredUsers.index')->with('success', 'Updated Successfully.');
        
        
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
