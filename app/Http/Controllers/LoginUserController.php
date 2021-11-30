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
            return back()->with('fail', 'Email and Password is Incorrect!');
        }
        else {
            if (Hash::check($password, optional($credential)->password))
            {
                $request->session()->put('success');
                if (Auth::attempt(['email' => $email, 'password' => $password]))
                    {
                        return redirect()->intended(route('dashboard'));
                    }
            }
            else {
                return back()->with('fail','Email and Password is Incorrect!');
            }
            
        }
    }



    /* function homepage()
    {
        if(Auth::check())
        {
            
            if($user->hasRole('admin_nurse')){
                return view('dashboard');
           }elseif($user->hasRole('bhw')){
                return view('navigation_links/bhwdashboard');
           }
        }
        
        return redirect("login")->withSuccess('You are not allowed to access');

    } */

    function signout() 
    {
        Session::flush();
        Auth::logout();
  
        return Redirect()->route('userlogin');
    }

}
