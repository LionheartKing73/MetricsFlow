<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
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
        Auth::logout();

        session()->flush();

        return redirect(
            property_exists($this, 'redirectAfterLogout')
                    ? $this->redirectAfterLogout : '/'
        );
    }
}
