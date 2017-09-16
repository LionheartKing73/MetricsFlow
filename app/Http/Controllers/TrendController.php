<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TrendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function showTrend()
    {
        return view('Portfolio');
    }
}
