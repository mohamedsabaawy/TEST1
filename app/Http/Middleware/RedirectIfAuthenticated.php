<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        switch ($guard){
            case 'web':
                if (Auth::guard($guard)->check()){
                    return redirect(route('admin.index'));
                }
            case 'provider':
                if (Auth::guard($guard)->check()){
                    return redirect(route('providers.index'));
                }
            default:
                if (Auth::guard($guard)->check()){
                    return redirect('/admin');
                }
                break;
        }
        return $next($request);
    }
}
