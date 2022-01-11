<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Alert;
use Response;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bhws = User::whereRoleIs('bhw')->get();
        if ($request->has('view_deleted')) {
            $bhws = User::onlyTrashed()->get();
        }
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
    public function userEmailCheck(Request $request)
    {

        $data = $request->all(); // This will get all the request data.
        $userCount = User::where('email', $data['email']);
        if ($userCount->count()) {
            return Response::json(array('msg' => 'true'));
        } else {
            return Response::json(array('msg' => 'false'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required', 'string', 'max:255',
            'lname' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users, email',
            'age' => 'required', 'integer', 'max:3',
            'address' => 'required', 'string', 'max:255',
            'bdate' => 'required', 'date',
            'contact' => 'required', 'string', 'size:11',
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
        $request->validate([
            'editfname' => 'required', 'string', 'max:255',
            'editlname' => 'required', 'string', 'max:255',
            'editemail' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'editage' => 'required', 'integer',
            'editaddress' => 'required', 'string', 'max:255',
            'editbdate' => 'required', 'date',
            'editcontact' => 'required', 'string', 'size:11',
        ]);

        $bhws = array(
            'fname' => $request->editfname,
            'lname' => $request->editlname,
            'email' => $request->editemail,
            'age' => $request->editage,
            'address' => $request->editaddress,
            'bdate' => $request->editbdate,
            'contact' => $request->editcontact,
        );

        $user = Auth::User();
        User::findOrFail($request->edituser_id)->update($bhws);
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
        $deleteuser = User::findOrFail($bhws->user_id);
        $deleteuser->delete();
        return redirect()->route('bhw.index')->with('success', 'Deleted Successfully.');
    }
}
