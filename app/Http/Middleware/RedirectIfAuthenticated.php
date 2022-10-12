<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //return redirect('/toppage');

        if (Auth::guard($guard)->check()) {
            //もし$guardがadminだったらリダイレクト先はadminトップページ
            if($guard == 'admin')   {
                return redirect(RouteServiceProvider::ADMIN_HOME);
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        }



        return $next($request);
    }
}
