<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmpAuth
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
        if(auth()->check()){
            if(auth()->user()->rol == 'employee'){
                return $next($request);
            }
        }
        return redirect()->back();
        // return $next($request);
    }
}
