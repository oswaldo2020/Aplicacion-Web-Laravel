<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckRoles
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

        $roles = array_slice(func_get_args(), 2 );
        // dd($roles);

        if (auth()->user()->hasRoles($roles) )
        {
            return $next($request);
        }

        return redirect('/');
    }
}
