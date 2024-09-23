<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->is_role == 1){
                return $next($request);
            }else{
                Auth::logout();
                return redirect(url('login'));
            }
        }else{
            Auth::logout();
            return redirect(url('login'));
        }
    }
}
