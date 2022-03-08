<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next,...$roles)
    {
        if(in_array($request->user()->role,$roles)){
            return $next($request);
        }
        if (!Auth::user()) {
            return redirect('/');
        } else {
            return redirect('/home');
        }
    }
}
