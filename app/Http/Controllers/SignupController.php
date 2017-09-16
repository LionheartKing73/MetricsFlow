<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Redirect;
use App\User as User;
use App\Role;
use App\Portfolio as Portfolio;
use App\Token as Token;

class SignupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {
        return view('tokens.signup');
    }

    //function to create a token for one-time url
    public function create_token(Request $request){
        if (Auth::user()->role_id == 1){

            $portfolio = Portfolio::where('id', intval($request->input('portfolio_id')))->first();
            $token = new Token;
            
            $token->token = sha1(uniqid(Auth::user()->name, true));
            $token->username = Auth::user()->name;
            $token->status = 'valid';

            $portfolio->tokens()->save($token);
        }
        return back();
    }


    //function to check if token exists in the table
    public function check_token(Request $request, $token){
        //query the database if the token that is passed to the function exists or not
         $check_token = DB::table('tokens')->where('token', $token)->pluck('token');

         //for each token from the database
         foreach ($check_token as $ctoken){
             //check if the status of the token is valid or used
             $status = DB::table('tokens')-> where('token', $ctoken) -> pluck('status');

             foreach($status as $st){
                //if the token exists in the database and it's status is used, then an error message is displayed
                if($token == $ctoken && $st == 'used'){
                    echo "Token has been used!";
                }
                //if the token exists and its status is either empty or valid, then token can be used and redirect to the page
                else if($token == $ctoken && (empty($st) || $st == 'valid')){
                    return view('tokens.signup', ['token' => $token]);
                }
                else{
                    return back();
                }
             }
         }         
    }

    //Sign up user 
    public function signup_user(Request $request){
        $token = Token::where('token', $request->input('token'))->first();
        $portfolio = $token->portfolio;

        $user = new User;
        $user->email = $request -> input('email');
        $user->name = $request -> input('name');
        $user->password = bcrypt($request -> input('password'));
        $user->role_id = $request->input('role_id');
      //  $user->roles()->attach(Role::where('name', 'Client')->first());
        $user->save();

        // DB::table('tokens') -> where ('token' , $token) -> update(['status' => 'used', 'updated_at' => date('Y-m-d H:i:s')]);
        $token->status = 'used';
        $token->save();

        echo $portfolio->owner_id;

        // if ($portfolio->owner_id < 1){
        //     $portfolio->owner_id = $user->id;
        // }else{
            
        // }
        $user->portfolios()->save($portfolio);

        return redirect('trend');//home
        
    }

    public function manage_tokens(Request $request){
        if (Auth::user()->role_id == 1){  
            $tokens =DB::connection('mysql')->table('tokens')->get();
            
            return view('tokens.manage', [
                'tokens' => $tokens,
            ]);
        }
        else{
            return back();
        }
    }

    public function delete_token(Request $request, $token_id){
        if (Auth::user()->role_id == 1){
            DB::table('tokens')->where('id', $token_id)->delete();
        }
        return back();
    }
}
