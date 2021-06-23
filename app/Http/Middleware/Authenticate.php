<?php

namespace App\Http\Middleware;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class Authenticate
{
    public function handle($request, Closure $next){
        

        if(!session()->has('USER')){
            return Redirect('/login');
        }


        return $next($request);
    }
}
