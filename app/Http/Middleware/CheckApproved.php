<?php

namespace App\Http\Middleware;

use Closure;

class CheckApproved
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
        //dd(auth()->user());
        if (!auth()->user()->approved_at) {
            auth()->logout();
            return redirect()->route('approval');
        }
        return $next($request);
    }
}
