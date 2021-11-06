<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $bhws = User::whereRoleIs('bhw')->get();
            return view('navigation_links.bhw')->with('bhws', $bhws);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_links.bhw');
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
            'lname' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'age' => 'required', 'integer',
            'address' => 'required', 'string', 'max:255',
            'bdate' => 'required', 'date',
            'contact' => 'required', 'string', 'max:11',
            'password' => 'required', 'min:6', 'max:12', 
            'password_confirmation' => 'required',
        ]);

        $user = User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'bdate' => $request['bdate'],
            'address' => $request['address'],
            'contact' => $request['contact'],
            'age' => $request['age'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->attachRole('bhw');  
        event(new Registered($user));

        return redirect()->route('bhw.index')->with('success', 'Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bhws = User::find($id)->whereRoleIs('bhw');
        return view('navigation_links.bhw')->with($bhws, $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bhws = User::find($id)->whereRoleIs('bhw');
        return view('navigation_links.bhw')->with($bhws, $id);
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
        if(!(Hash::check($request->get('password'),Auth::user()->password))){
            return back()->with('error','Your current password does not match what you provided');
         }
         if(strcmp($request->get('password'), $request->get('newpassword'))==0){
            return back()->with('error','Your new password cant be same with your current password');
         }
        
        $request->validate([
            'fname' => 'required', 'string', 'max:255',
            'lname' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'age' => 'required', 'integer',
            'address' => 'required', 'string', 'max:255',
            'bdate' => 'required', 'date',
            'contact' => 'required', 'string', 'max:11',
            'password' => 'required', 'min:6', 'max:12', 
            'password_confirmation' => 'required',
            'newpassword' => 'required|same:password_confirmation|min:6',
        ]);

        $bhws = array (
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,  
            'bdate' => $request->bdate, 
            'contact' => $request->contact,
        );    
    
        $user = Auth::User();
        $user->password = bcrypt($request->get('newpassword'));
        User::findOrFail($request->user_id)->update($bhws);
        // $user->save();
        return redirect()->route('bhw.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $bhws)
    {
        $delete = $bhws->all();

        /* echo "<pre>"; print_r($delete); die; */
        $deleteuser = User::findOrFail($bhws->user_id);
        $deleteuser->delete();
        return redirect()->route('bhw.index')->with('success', 'Deleted Successfully.');
    }
}
