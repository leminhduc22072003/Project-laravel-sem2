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
        if (!$request->session()->exists('auth')) {
            if ($request->session()->get('role') === GROUP_ADMIN) {
                return $next($request);
            }
        }
        return redirect('auth/admin/login');
    }
}
