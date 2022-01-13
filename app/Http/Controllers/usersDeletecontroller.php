<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usersDeletecontroller extends Controller
{
    public function __invoke(Request $bhws)  
    {
        $deleteuser = User::withTrashed()->findOrFail($bhws->user_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }

    public function delete(Request $bhws)  
    {
        $deleteuser = User::withTrashed()->findOrFail($bhws->user_id);
        $deleteuser->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
