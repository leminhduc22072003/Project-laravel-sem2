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
        if($request->session()->exists('user')) {
            if($request->session()->get('role') === GROUP_USER) {
                return $next($request);
            }
        }
        return redirect('auth/user/login');
    }
}
