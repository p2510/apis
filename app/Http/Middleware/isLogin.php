<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isLogin
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
        $name=session()->get("name","Undefined"); 
        $password=session()->get("password","Undefined");
        if ($name=="apis2022" &&$password=="01233378marie") {
            return $next($request);
        }else {
            return  abort(403,"Accès interdit");
        }
       
    }
}
