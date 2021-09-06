<?php

namespace App\Http\Middleware;

use Closure;

class HotelMiddleware
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
        if($request->route('hotel')->restaurant == null){
            return $next($request);
        }

        return redirect()->route('front.restaurant.show',$request->route('hotel')->id);

    }
}
