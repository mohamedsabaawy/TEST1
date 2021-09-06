<?php

namespace App\Http\Middleware;

use Closure;

class CheckLocationCount
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
        if (count($request->user()->locations) >= 5)
            return redirect()->route('providers.index')->with('status' ,'you have only 5 location to add');
        return $next($request);
    }
}
