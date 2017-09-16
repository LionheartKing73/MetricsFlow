<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
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
     * Show the campaign view.
     *
     * @return Response
     */
    public function show()
    {
        return view('content.content1');
    }

    public function two()
    {
        return view('content.content2');
    }

    public function three()
    {
        return view('content.content3');
    }

    public function four()
    {
        return view('content.content4');
    }
}
