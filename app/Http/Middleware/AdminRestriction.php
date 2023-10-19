<?php

namespace App\Http\Middleware;

use Closure;

class AdminRestriction
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->is_admin) {
            return redirect()->route('admin.home')->with('error', 'Admins are not allowed to access the home.');
        }

        return $next($request);
    }
}
