<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'managers':
                if (Auth::guard($guard)->check()) {

                    if(Auth::guard($guard)->user()->role == config('auth.roles.department_manager'))
                    {
                        return redirect()->route('manager.department_manager.dashboard');
                    }
                    else
                    {
                        return redirect()->route('manager.chancellor.dashboard');
                    }
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }
        return $next($request);
    }
}
