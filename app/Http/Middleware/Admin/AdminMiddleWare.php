<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)  {
        if(auth()->user()->user_role_id == 2){
            return $next($request);
        }
   
        return redirect('home')->with('adminLoginError',"Unathourized Access!!");
    }
}
