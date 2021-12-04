<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        session_start();
        if (isset($_SESSION['job']) && $_SESSION['job'] == $type)
            return $next($request);
        else if (isset($_SESSION['logged_in']))
            return response('Please log in as a ' . $type . ' to access this page!');
        else
            return response('Please login before accessing this page.');
    }
}
