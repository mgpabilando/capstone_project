<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


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

        $credential = User::where('email', '=', $request->email)->first();
        if (!$credential) {
            return back()->with('toast_error', 'Email Not Recognized!');
        }
        else {
            if (Hash::check($password, optional($credential)->password))
            {
                $request->session()->put('success');
                if (Auth::attempt(['email' => $email, 'password' => $password]))
                    {
                        return redirect()->intended(route('dashboard'))->with('success', 'Login Successfully!');
                    }
            }
            else {
                return back()->with('toast_error','Password Is Incorrect!');
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
