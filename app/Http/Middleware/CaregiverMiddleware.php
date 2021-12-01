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
        $loggedin = isset($_SESSION['logged_in']);
        $type = $_SESSION['type'];

        if(!$loggedin) {
            return redirect('login');
        } else if ($loggedin){
            return redirect('caregiver-home');
        }
        return $next($request);
    }
}
