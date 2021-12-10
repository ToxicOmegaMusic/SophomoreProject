<?php

namespace App\Http\Middleware;

use App\Models\roles;
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
    public function handle(Request $request, Closure $next, $access_level)
    {
        // session_start();
        // $access_level = explode(' ', $access_level);
        // $lowest_req = roles::where('access_level', $access_level[0])->pluck('title')->first();

        // foreach ($access_level as $level) {
        //     if (isset($_SESSION['access_level']) && $_SESSION['access_level'] == $level)
        //         return $next($request);
        //     else if (isset($_SESSION['logged_in']))
        //         return response('Please log in as a ' . $lowest_req . ' to access this page!');
        //     else
        //         return response('Please login before accessing this page.');
        // }
        return next($request);
    }
}
