<?php
/**
 * Created by PhpStorm.
 * User: Mima
 * Date: 25-Oct-16
 * Time: 5:14 PM
 */

namespace Laravel\Spark\Http\Controllers;

use App\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Spark\Campaign;
use Laravel\Spark\Spark;
use Illuminate\Http\Request;


class CampaignController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 0)
    {
//        $campaigns = Campaign::where('team_id', $id)->get();
        $campaigns = DB::table('campaigns')->where('team_id', $id)->get();
//        print_r($campaigns);
//        return view('spark::campaign.index', compact('campaigns'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
//        $date = strtotime("+7 day");
//        echo date('Y-m-d', $date); exit;
        return view('spark::campaigns.add', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
        ]);
        $team_id = $request->input('team_id');
        if ($validator->fails()) {
            return redirect('campaigns/create/'.$team_id)
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = [
                'name'      => $request->input('name'),
                'subject'   => $request->input('subject'),
                'body'      => $request->input('body'),
                'team_id'   => $request->input('team_id'),
            ];
            DB::table('campaigns')->insert($data);
            return redirect('/settings/teams/'.$team_id);
        }
    }

}