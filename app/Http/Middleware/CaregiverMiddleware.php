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
        if (isset($_SESSION['type'])) {
            if (isset($_SESSION['job'])) {
                $type = $_SESSION['job'];
            }
        } else {
            $type = 'none';
        }

        if(!$loggedin) {
            if ($type == 'caregiver') {
                return $next($request);
            } else {
                return response('Please log in as a Caregiver to access this page!');
            }
        } else if ($loggedin){
            return response('Please login before accessing this page.');
        }
    }
}
