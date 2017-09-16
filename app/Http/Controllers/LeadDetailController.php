<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeadDNA as Leads;
use App\ContentStage as ContentStage;
use App\TopEntry as TopEntry;
use App\Userpagebehaviour as Userpage;


use App\Content as Content;
use App\Conversions as Conversions;
use App\MetPrePage as PageClick;
use DB;
use App\UserInfo as user_info;
use Auth;



class LeadDetailController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
/////////////////////////////////////////////////////////////////////////////////////////////
     public function showDetails(Request $request ){
     	$detail_id=$request['id'];
     	$details = Leads::where('e_id', $detail_id)->take(1)->get();

     	$progression = Leads::where('e_id', $detail_id)->orderBy('Date')->get();//->take(4)
        $converted_stage=Leads::where([['e_id', $detail_id],['Stage', 'Awareness']])->count();

     ///===== behavior ====	
        $count_aware=Leads::where([['e_id', $detail_id],['Stage', 'Awareness']])->count();
        $count_deciding=Leads::where([['e_id', $detail_id],['Stage', 'Deciding']])->count();
        $count_considering=Leads::where([['e_id', $detail_id],['Stage', 'Considering']])->count();
        $count_converted=Leads::where([['e_id', $detail_id],['Stage', 'Converted']])->count();

        $count_id = Leads::where('e_id', $detail_id)->count();
        $total_time=Leads::where('e_id', $detail_id)->sum('Time');
        $total_click=Leads::where('e_id', $detail_id)->sum('clickcount');

        $userpages_bubble=Userpage::where('e_id', $detail_id)->get();
 




       
        $count_unknown = Leads::where([['client_id', '004'],['Status', 'Unknown']])->count();
        $count_all = Leads::where('client_id', '004')->count();
 
      // $total_time = Leads::select(DB::raw('Time'))->where('e_id', $detail_id)->get();   
      // $device = Leads::select(DB::raw('device_type, count(device_type) as count'))->where('e_id', $detail_id)->groupBy('device_type')->get();  
      // $topdevice=0;
      // foreach($device as $devices)
      // {
      // if($devices->count>$topdevice)
      // $topdevice=$devices;

      // }

        $logo = user_info::select(DB::raw("logo"))->where('user_id', Auth::user()->id)->first();
    
        return view('detail',[
            'detail_id'=>$detail_id,
        	'details'=>$details,
        	'progression'=>$progression,
            'count_aware'=>$count_aware,
            'count_deciding'=>$count_deciding,
            'count_considering'=>$count_considering,
            'count_converted'=>$count_converted,
            'total_time' => $total_time,
            'count_id' => $count_id,
            'total_click'=>$total_click,
            'userpages_bubble'=>$userpages_bubble,


            

            'count_unknown'=>$count_unknown,
        	'count_all'=>$count_all,

           // 'total_time' => $total_time,
           // 'topdevice' => $topdevice,
            'logo' => $logo
        	]);
    }




    //========================================================================================
    public function showContent(Request $request ){
    	$content_id=$request['name'];
     	$current_page = Leads::where('PageName', $content_id)->take(1)->get();
             $pn=$current_page[0]->PageName;
             $p_id=$current_page[0]->e_id;

             $current_content=Content::where('PageName', $pn)->take(1)->get();
        $topcontent_value=$current_content[0]->Value;
        $current_contents=Content::where('PageName', $pn)->orderBy('Date')->get();
        $clicks=PageClick::where('e_id', $p_id)->get();
      //Engagement======
        $stage_count=ContentStage::where([['PageName', $content_id],['Stage', 'Awareness']])->count();
        if ($stage_count>0){
                $stage=ContentStage::where([['PageName', $content_id],['Stage', 'Awareness']])->first();
                $Aware=$stage->pct;
        } else {$Aware=0;}

        $stage_count=ContentStage::where([['PageName', $content_id],['Stage', 'Engaged']])->count();
        if ($stage_count>0){
                $stage=ContentStage::where([['PageName', $content_id],['Stage', 'Engaged']])->first();
                $Engage=$stage->pct;
        } else {$Engage=0;}

        $stage_count=ContentStage::where([['PageName', $content_id],['Stage', 'Converted']])->count();
        if ($stage_count>0){
                $stage=ContentStage::where([['PageName', $content_id],['Stage', 'Converted']])->first();
                $Converted=$stage->pct;
        } else {$Converted=0;}
        //==Top Entry===
        $topentrys=TopEntry::where('PageName', $content_id)->orderBy('Date')->get();

        $dategroup=TopEntry::where('PageName', $content_id)->orderBy('Date')->groupBy('Date')->get();

        $logo = user_info::select(DB::raw("logo"))->where('user_id', Auth::user()->id)->first();

        return view('content',[
        	'currentpage'=>$current_page ,
            'content_value'=>$topcontent_value,
            'current_contents'=>$current_contents,
            'clicks'=> $clicks,

            
            'Aware'=>$Aware,
            'Engage'=>$Engage,
            'Converted'=>$Converted,

            'topentrys'=>$topentrys,
            'dategroup'=>$dategroup,
            'logo' => $logo

        	]);
    }
}
