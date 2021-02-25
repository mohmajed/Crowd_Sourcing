<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class facilitator
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

        if (!Auth::check() ) {
            return redirect()->route('login');
        }

        $user= Auth::user()->id;
        if (Auth::user()->role == 1) {
            return redirect()->route('admin');
        }
        if (Auth::user()->role == 2) {

            return redirect()->route('home/'.$user);
        }
        if (Auth::user()->role == 3) {
            return $next($request);
        }
    }
}
