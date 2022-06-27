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
        if(auth('providers') -> check() ){

            if(auth('providers')->user()->phoneactivated == "0" ) {
                return redirect("/providers/activate-phone");
            }
           }else{

            return redirect("/providers/dashboard");
        }

        return $next($request);
    }
}
