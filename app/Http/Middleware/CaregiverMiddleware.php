<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CaregiverMiddleware
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

        session_start();
        if(!isset($_SESSION['logged_in'])) {
            return redirect(view('login')->with('error', 'Not Logged-In'));
        } else {
            return 'else ran';
        }
        return $next($request);
    }
}
