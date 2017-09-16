<?php

//namespace Laravel\Spark\Http\Controllers;
namespace Laravel\Spark\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Carbon\Carbon;
use Laravel\Spark\Spark;
use Illuminate\Http\Request;
use GuzzleHttp\Client as HttpClient;
use Laravel\Spark\Contracts\Repositories\UserRepository;

class AccessController extends Controller
{
    public function __construct()
    {

    }


    public function index( )
    {
        echo 'role';
//        return view('backend.access.roles.index');
    }

    public function test(){
        echo 'test';
    }


}