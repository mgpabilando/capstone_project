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
        $email = $request->input('email');
        $password = $request->input('password');

        
        /* $userinfo = Auth::where('email', '=', $request->email)->first();  */
        $credential = User::where('email', '=', $request->email)->first();
        if (!$credential) {
            //return redirect()->back()->withErrors($userinfo)->withInput($request->all());
            return back()->with('fail', 'We do not recognize your email address');
        }
        else {
            if (Hash::check($password, optional($credential)->password))
            {
                $request->session()->put('success');
                if (Auth::attempt(['email' => $email, 'password' => $password]))
                    {
                        return redirect()->intended(route('/dasboard'));
                    }
            }
            else {
                return back()->with('fail','Incorrect Password');
            }
            
        }
    }



    function homepage()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    function signout() 
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

}
