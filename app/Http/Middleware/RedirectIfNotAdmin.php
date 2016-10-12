<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
      // dd($request);
      if (!Auth::guard($guard)->check()) {
        return redirect('/');
      }
      return $next($request);
    }
}
