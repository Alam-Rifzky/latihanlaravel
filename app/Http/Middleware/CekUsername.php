<?php

namespace App\Http\Middleware;

use Closure;

class CekUsername
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
        if ($request->mobile == "1") {
            return redirect('/users');
        }
        return $next($request);
    }
}
