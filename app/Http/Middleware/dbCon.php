<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class dbCon
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
        $db_name = Auth::user()->db_name;
        Config::set("database.connections.$db_name" ,[
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => $db_name,
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
        ]);
        return $next($request);
    }
}
