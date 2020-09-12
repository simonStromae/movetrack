<?php

namespace App\Http\Middleware\Nkd;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthentificate
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
        if(empty(Auth()->user()) || !Auth::check() && !Auth()->user()->hasRole('admin')){
            return redirect()->route('backend.login');
        }
        return $next($request);
    }
}
