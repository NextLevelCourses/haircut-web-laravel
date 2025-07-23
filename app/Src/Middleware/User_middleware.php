<?php

namespace App\Src\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            Auth::guard('user')->check() &&
            Auth::guard('user')->user()->roles_id == 2
        ) {
            return $next($request);
        }
        //redirect back to landing if user try to access admin route
        return redirect()->route('Landing.index')->with('error', 'Izin di tolak,and bukan admin');
    }
}
