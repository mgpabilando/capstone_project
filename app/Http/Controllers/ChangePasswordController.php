<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
     /**
     * Change the current password
     * @param Request $request
     * @return Renderable
     */

    public function profile()
    {
        return view('myprofile.index');
    }

    function changePassword(Request $request){
        //Validate form
        $validator = \Validator::make($request->all(),[
            'oldpassword'=>[
                'required', function($attribute, $value, $fail){
                    if( !\Hash::check($value, Auth::user()->password) ){
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:6',
                'max:12'
             ],
             'newpassword'=>'required|min:6|max:12',
             'password_confirmation'=>'required|same:newpassword',
         ],[
             'oldpassword.required'=>'Enter your current password',
             'oldpassword.min'=>'Old password must have atleast 6 characters',
             'oldpassword.max'=>'Old password must not be greater than 12 characters',
             'newpassword.required'=>'Enter new password',
             'newpassword.min'=>'New password must have atleast 6 characters',
             'newpassword.max'=>'New password must not be greater than 12 characters',
             'password_confirmation.required'=>'ReEnter your new password',
             'password_confirmation.same'=>'New password and Confirm new password must match'
         ]);

        if( !$validator->passes() ){
            // return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
            return redirect()->route('myprofile.index')->with('error', $validator->errors());
        }else{
             
         $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);

         if( !$update ){
             return redirect()->route('myprofile.index')->with('error', 'Something went wrong, Failed to update password in db.');
         }else{
             return redirect()->route('myprofile.index')->with('success', 'Your password has been changed successfully.');
         }
        }
    }


    
}
