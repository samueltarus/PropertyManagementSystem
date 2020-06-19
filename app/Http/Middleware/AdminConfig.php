<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminConfig
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
        if(!Auth::check()){

            return redirect()->route('login');
        }

        // role 1= admin
        if(Auth::user()->role == 1){


            return $next($request);
        }
        
        //role 2 -manager
       
       
    }
}
