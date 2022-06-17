<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Provider
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
        if(auth('provider') -> check() ){

            if(auth('provider')->user()->phoneactivated == "0" ) {
                return redirect("/providers/activate-phone");
            }
           }else{

            return redirect("/login");
        }
        return $next($request);
    }
}
