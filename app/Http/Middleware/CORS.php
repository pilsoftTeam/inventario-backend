<?php

namespace App\Http\Middleware;

use Closure;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $domains = ['http://localhost:4000'];
        $origin = $request->server()['HTTP_ORIGIN'];

        if (in_array($origin, $domains)) {
            header('Access-Control-Allow-Origin : ' . $origin);
            header('Access-Control-Allow-Headers : Origin, Content-Type, Authorization ');
        }

        return $next($request);
    }
}
