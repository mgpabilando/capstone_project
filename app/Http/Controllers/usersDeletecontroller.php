<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usersDeletecontroller extends Controller
{
    public function __invoke(Request $bhws)  
    {
        $deleteresident = User::withTrashed()->findOrFail($bhws->user_id);
        $deleteresident->forceDelete();
        return back()->with('success', 'Removed Permanently.');
    }
}
