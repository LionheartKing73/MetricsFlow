<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\LeadDNA as Leads;
use App\Contentspage as Contentspage;
use App\UserInfo as user_info;
use Carbon;
use Auth;
use Redirect;

class ReportsController extends Controller
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
        $logo = user_info::select(DB::raw("logo"))->where('user_id', Auth::user()->id)->first();
        return view('reports', [
             'logo' => $logo,
            ]);       
    }
}
