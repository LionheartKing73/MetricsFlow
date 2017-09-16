<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->hasRole('Client')){
            echo "I'm inside Middleware route";
            return redirect('trend');
            //return Redirect::to('trend');
            
        }else if(Auth::user()->hasRole('Admin')){
            return $next($request);
        }
        return $next($request);
    }
}
