<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // Periksa apakah pengguna terotentikasi dan memiliki peran admin
        if (Auth::guard($guard)->check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Jika bukan admin, arahkan kembali ke halaman login atau halaman lain yang diinginkan
        return redirect()->route('login')->with('error', 'Please contact your administrator.');
    }
}
