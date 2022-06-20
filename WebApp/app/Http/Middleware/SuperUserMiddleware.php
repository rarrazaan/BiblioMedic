<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperUserMiddleware
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
        if(session()->has('user')){
            if(session()->get('user')->role == 'superuser'){
                return $next($request);
            }
        }
        return redirect('/')->with('error', 'Harus Login Dahulu');
    }
}