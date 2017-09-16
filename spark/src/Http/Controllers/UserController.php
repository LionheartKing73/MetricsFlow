<?php

namespace Laravel\Spark\Http\Controllers;

use App\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Spark\Spark;
use Illuminate\Http\Request;
use GuzzleHttp\Client as HttpClient;
use Laravel\Spark\Contracts\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
//        $this->middleware('auth');
//        echo \Auth::user()->role_id;
//        if(\Auth::user()->role_id == 2 || \Auth::user()->role_id == 3 ){
//            return redirect('/settings');
//        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        if(\Auth::user()->role_id == 2 || \Auth::user()->role_id == 3 ){
            return redirect('/settings');
        }
        $users = User::all();
        return view('spark::users.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\Auth::user()->role_id == 2 || \Auth::user()->role_id == 3 ){
            return redirect('/settings');
        }
        $types = \DB::table('roles')->where('id','!=',1)->select('name', 'id')->get();
        return view('spark::users.add', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');
        if(\Auth::user()->role_id == 2 || \Auth::user()->role_id == 3 ){
            return redirect('/settings');
        }
        $validator = \Validator::make($request->all(),  [
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect('users/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $user_data = [
                'name'      => $request->input('name'),
                'email'     => $request->input('email'),
                'role_id'   => $request->input('role'),
                'token'     => str_random(40),
                'status'    => 1, // 1 for pending 2 for confirmed
            ];
            User::create($user_data);
            $user_data['subject'] = 'Matric, User Registration';
            $this->send_mail('spark::auth.emails.activate', $user_data);
            return redirect('/users');
        }

//        $user       = User::find($user_id->id);
//        $role       = $request->input('role');
//        $user->roles()->attach($role);
//        \Session::flash('message', 'User Created Successfully');

    }

    public function getActivate($token)
    {
        $types  = DB::table('roles')->select('name', 'id')->get();
        $user   = User::where('token', $token)->first();
        if($user)
            return view('spark::users.activate', compact('user', 'types'));
        else{

            return view('spark::users.activate', compact('user', 'types'));
        }

    }

    public function postActivate(Request $request, $token)
    {
        $validator = Validator::make($request->all(),  [
            'name'                  => 'required',
            'password'              => 'required|min:5|confirmed',
        ]);
        $password   = Hash::make($request->input('password'));
        $user       = User::where('token', $token)->first();
        if($user){
            if ($validator->fails()) {
                return redirect('users/activate/'.$token)
                    ->withErrors($validator)
                    ->withInput();
            }else{
                if($user){
                    $date = strtotime("+7 day");
                    $trial_ends_at = date('Y-m-d', $date);
                    $user->update(['status' => 2, 'token' => '', 'password' => $password, 'trial_ends_at' => $trial_ends_at ]);
//                    echo 'activate'; exit;
                    return redirect('/login');
                }
            }
        }else{
            return redirect('users/activate/'.$token)
                ->withErrors($validator)
                ->withInput();
        }
    }


    public function send_mail($view, $data)
    {
        \Mail::queue($view, ['user' => $data], function ($message) use ($data) {
            $message->to($data['email'], $data['name'] . ' ' . $data['email'])
                ->subject($data['subject']);
        });
    }


    /**
     * Get the current user of the appliation.
     *
     * @return Response
     */
    public function current()
    {
        return Spark::interact(UserRepository::class.'@current');
    }

    /**
     * Update the last read announcements timestamp.
     *
     * @param  Request  $request
     * @return Response
     */
    public function updateLastReadAnnouncementsTimestamp(Request $request)
    {
        $request->user()->forceFill([
            'last_read_announcements_at' => Carbon::now(),
        ])->save();
    }
}
