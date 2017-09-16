<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage_users()
    {
        if (Auth::user()->id == 1){
            return view('users.manage');
        }
        else return back();
    }

    public function delete_user($user_id)
    {
        if (Auth::user()->id == 1){
            App\User::where('id', $user_id)->delete();
        }
        return back();;
    }
}