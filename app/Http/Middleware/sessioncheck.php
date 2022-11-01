<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class sessioncheck
{
    //middleware
    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('loginId'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}
