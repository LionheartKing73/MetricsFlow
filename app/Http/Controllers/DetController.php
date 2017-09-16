<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LeadDNA as Leads;

class DetController extends Controller
{
    public function showDetails(Request $request ){
     	$detail_id=$request['id'];
     	$details = Leads::where('e_id', $detail_id)->take(1)->get();

        
        return view('detail',['details'=>$details]);
    }
}
