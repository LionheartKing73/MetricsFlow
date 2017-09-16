<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\LeadDNA as Leads;
use App\Content as Content;
use App\Conversions as Conversions;
use App\TotalUsers as TotalUsers;
use App\MetUsers as MetUsers;
use App\Channels as Channels;

class LeadController extends Controller
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

    //Query the database to find the leads according to Verafin's account
    public function showLeads(){
        $sessions = Leads::where('client_id', '004')->take(60)->get();
        $conversions = Leads::where('client_id', '004')->take(60)->get();

        $hadAdblock = Leads::where([['client_id', '004'],['hasAdblock' , '=', 'true']])->count('hasAdblock');

        $noAdBlock = Leads::where([['client_id', '004'],['hasAdblock' , '=', 'false']])->count('hasAdblock');

        $csum = Content::where('client_id', '004')->sum('Value');

        $converted_content = Content::where('client_id', '004')->orderBy('Value', 'DESC')->take(3)->get();

        $channels = Channels::orderBy('Value', 'DESC')->take(3)->get();
        $chan_sum = Channels::sum('Value');

        $lead_detail = Content::where('client_id', '004')->orderBy('Value', 'DESC')->take(3)->get(); 

        $sum = Conversions::where('client_id', '004')->sum('Value');

        $conversion = Conversions::where([ ['client_id', '=', '004'], ['conversion', '=', '1'], ])->take(3)->get();


       
        //SELECT count(e_id) FROM MetUsers where client_id=004 and has_cookies=0 and allow_cookies='true';
        $green_lead = MetUsers::where([['client_id', '004'], ['has_cookies', 'N/A'], ['allow_cookies', 'true']])->count();
        $blue_lead = MetUsers::where([['client_id', '004'], ['allow_cookies', 'false']])->count();
        $red_lead = MetUsers::where([['client_id', '004'], ['has_cookies', 'N/A']])->count();
              
        return view('leads', [
            'sessions' => $sessions,
            'AddBlock' => $hadAdblock,
            'NoAdBlock' => $noAdBlock,
            'lead_detail' => $lead_detail,
            'sum' => $sum,
            'conversion' => $conversion,
            'converted_content' => $converted_content,
             'csum' => $csum,
             'green_lead' => $green_lead,
             'blue_lead' => $blue_lead,
             'red_lead' => $red_lead,
             'channels' => $channels,
             'chan_sum' => $chan_sum,
            ]);       
    }


}
