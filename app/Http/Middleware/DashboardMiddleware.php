<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if (Auth::check()) {
        //     $user = Auth::user();
        //     if ($user->isAdmin || $user->isSuper) {
        //         return redirect()->route('admin.dashboard');
        //     } elseif ($user->isVendor) {
        //         return redirect()->route('vendor.dashboard');
        //     } elseif ($user->isUser) {
        //         return redirect()->route('user.dashboard');
        //     } elseif ($user->isBlogger) {
        //         return redirect()->route('blogger.dashboard');
        //     }
        // } else {
        //     return redirect()->route('error');
        // }
        return $next($request);
    }
}
