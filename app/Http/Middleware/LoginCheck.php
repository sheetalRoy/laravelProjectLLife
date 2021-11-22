<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('user')){
            return $next($request);
        }else{
            if($request->ajax()){
                return response()->json(['message'=>"You need to login first for accessing URL",'url'=>url('login')],200);
            }else{
                return redirect('login');
            }
        }
    }
}
