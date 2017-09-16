<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\LeadDNA as Leads;

class APIController extends Controller
{
	
	public function apiauthenticate($email, $token){
		$json_object = null;

		//check if the token exists
		$check_token = DB::table('api_tokens')->select('token')->where('token', $token)->first();
		foreach ($check_token as $tok) {
				if($tok == $token){
					//get the data from the database
					$object = Leads::where([['email', $email], ['conversion', '1']])->get();
					$json_object = json_encode($object);
				}		
		}

		echo $json_object;
		return view('api', ['json_object' => $json_object]);



	}
    
}
