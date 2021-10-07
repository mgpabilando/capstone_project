<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function customlogin (Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);

        
        $userinfo = User::where('email', '=', $request->email)->first(); 

        if (!$userinfo) {
            //return redirect()->back()->withErrors($userinfo)->withInput($request->all());
            return back()->with('fail', 'We do not recognize your email address');
        }
        else {
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('/homepage');
            }
            else {
                return back()->with('fail','Incorrect Password');
            }
        }
    }



    function homepage()
    {
        /* if(Auth::check())
        {
            return view('homepage');
        }
        
        return redirect("login")->withSuccess('You are not allowed to access'); */

        return view('homepage');
    }

    function signout() 
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

}
