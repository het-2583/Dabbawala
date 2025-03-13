<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
     {
        if (!Session()->has('sign'))
    {
        return redirect('/')->with('fail', 'Plz login first!!');
    }
        return $next($request);
 }
}
