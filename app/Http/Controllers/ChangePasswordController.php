<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    // function changePassword(Request $request){
    //     //Validate form
    //     $validator = \Validator::make($request->all(),[
    //         'old'=>[
    //             'required', function($attribute, $value, $fail){
    //                 if( !\Hash::check($value, Auth::user()->password) ){
    //                     return $fail(__('The current password is incorrect'));
    //                 }
    //             },
    //             'min:6',
    //             'max:12'
    //          ],
    //          'newpassword'=>'required|min:6|max:12',
    //          'password_confirmation'=>'required|same:newpassword',
    //      ],[
    //          'oldpassword.required'=>'Enter your current password',
    //          'oldpassword.min'=>'Old password must have atleast 6 characters',
    //          'oldpassword.max'=>'Old password must not be greater than 12 characters',
    //          'newpassword.required'=>'Enter new password',
    //          'newpassword.min'=>'New password must have atleast 6 characters',
    //          'newpassword.max'=>'New password must not be greater than 12 characters',
    //          'password_confirmation.required'=>'ReEnter your new password',
    //          'password_confirmation.same'=>'New password and Confirm new password must match'
    //      ]);

    //     if( !$validator->passes() ){
    //         return redirect()->route('myprofile.index')->with('error', $validator->errors());
    //     }else{
             
    //      $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);

    //      if( !$update ){
    //          return redirect()->route('myprofile.index')->with('error', 'Something went wrong, Failed to update password in db.');
    //      }else{
    //          return redirect()->route('myprofile.index')->with('success', 'Your password has been changed successfully.');
    //      }
    //     }
    // }

     /**
     * Change the current password
     * @param Request $request
     * @return Renderable
     */
    public function changePassword(Request $request)
    {       
        $user = Auth::user();
    
        $userPassword = $user->password;
        
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('success','password successfully updated');
    }


    
}
