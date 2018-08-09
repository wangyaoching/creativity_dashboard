<?php

namespace App\Http\Middleware;

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
        // 要透過public/register新增帳號先將此區註解
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }else{
            return redirect()->action('AdminController@login')->with('flash_message_error','請登入系統');
        }
        // END要透過register新增帳號先將此區註解        

        return $next($request);
    }
}
