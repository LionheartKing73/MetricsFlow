<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo as user_info;
use Auth;
use Redirect;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {
         //get the logo from the database
        $logo = user_info::select(DB::raw("logo"))->where('user_id', Auth::user()->id)->first();
        return view('demo', ['logo' => $logo]);
    }
    public function showTrend()
    {
        //get the user's client id from the request
        $user_id = Auth::user()->id;
        $id = explode(" ", Auth::user()->name);
        // $url = user_info::select(DB::raw('logo'))->where('user_id', $user_id)->first();
        // $name = user_info::select(DB::raw('name'))->where('user_id', $user_id)->first();
        $portfolio = user_info::where('user_id', $user_id)->get();
        $m5 = user_info::where([['user_id', $user_id], ['name', $id[0]]])->get();
        
        return view('Portfolio', [
            'portfolio' => $portfolio,
            'mfive' => $m5

        ]);
    }

    public function postAdminAssignRoles(Request $request){
        $user = User::where('email', $request['email']->first());
        $user->roles()->detach();
        
        if($request['role_user']){
            $user->roles()->attach(Role::where('name' , 'User')->first());
        }

         if($request['role_client']){
            $user->roles()->attach(Role::where('name' , 'Client')->first());
        }
    }

    public function createApiToken(){
        //get the username of the logged in user
        $username = Auth::user()->name;

        //get user id from username from the database
        $user_id = DB::table('users')->select('id')->where('name', $username)->first();
        foreach($user_id as $id){
           // echo $id;
        }        

        //create token against the username
        $api_token = sha1(uniqid($username, true));
       // echo $api_token;

        //check db if token for that user exists
        $check = DB::table('api_tokens')->where('user_id', $id)->get();

        if(!empty($check)){
            $api = $check;
        }else{
             $create_token = DB::table('api_tokens')->insert(['user_id' => $id, 'name' => $username, 'token' => $api_token, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now(), 'expires_at' => \Carbon\Carbon::tomorrow()]);

        }

        //get the data from db
        $api = DB::table('api_tokens')->where('user_id', $id)->get();

        return view ('profile', ['api' => $api]);


    }
}
