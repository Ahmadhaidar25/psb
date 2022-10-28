<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->jk=='L') {
            return $next($request);
        }elseif (auth()->user()->jk=='P') {
            return $next($request);
        }elseif (auth()->user()->level=='wali kelas'){
            return $next($request);
        }elseif (auth()->user()->level=='kesiswaan'){
            return $next($request);
        }

        return redirect('/');
        
    }
}
