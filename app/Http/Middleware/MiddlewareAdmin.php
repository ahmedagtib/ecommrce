<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class MiddlewareAdmin
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
        if (!Auth::user()->isadmin) {
            return redirect('/');
        }
        return $next($request);
       
    }
}
