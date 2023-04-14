<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdmin
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
            if($request->session()->exists('role') != GROUP_ADMIN) {
                return redirect('auth/admin/login');
            }
        }
        return $next($request);
    }
}
