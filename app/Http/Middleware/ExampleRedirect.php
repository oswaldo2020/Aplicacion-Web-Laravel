<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExampleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(true){
            return $next($request);
        }
        return response('No puedes continuar', 404);
    }
}
