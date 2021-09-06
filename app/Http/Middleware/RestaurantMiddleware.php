<?php

namespace App\Http\Middleware;

use Closure;

class RestaurantMiddleware
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
        if(!$request->route('restaurant')->restaurant == null){
            return $next($request);
        }

        return redirect()->route('front.hotel.show',$request->route('restaurant')->id);

    }
}
