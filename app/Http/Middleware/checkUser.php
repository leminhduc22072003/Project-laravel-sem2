<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkUser
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
        if(!$request->session()->exists('auth')) {
            if($request->session()->exists('role') != GROUP_USER) {
                return redirect('auth/user/login');
            }
        }
        return $next($request);
    }
}
