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
        /* if (array_has($request->server(), 'HTTP_ORIGIN')) {
            $origin = $request->server()['HTTP_ORIGIN'];
            if (in_array($origin, $domains)) {
                header('Access-Control-Allow-Origin : ' . $origin);
                header('Access-Control-Allow-Headers : Origin, Content-Type, Authorization ');
            }
            return $next($request);
        } else {
            return $next($request);
        }*/

        $domains = ['http://localhost:4000'];

        if (isset($request->server()['HTTP_ORIGIN'])) {
            $origin = $request->server()['HTTP_ORIGIN'];
            if (in_array($origin, $domains)) {
                header('Access-Control-Allow-Origin: ' . $origin);
                header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization, X-Requested-With');
            }
        }

        return $next($request);
    }
}
