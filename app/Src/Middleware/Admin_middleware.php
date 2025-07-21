<?php

namespace App\Src\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            Auth::guard('admin')->check() &&
            Auth::guard('admin')->user()->roles_id == 1
        ) {
            return $next($request);
        }
        // redirect back to admin dashboard
        return redirect()->route('Landing.index')->with('error', 'Izin ditolak,anda bukan user');
    }
}
