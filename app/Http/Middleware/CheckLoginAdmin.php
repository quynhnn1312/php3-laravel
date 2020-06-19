<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoginAdmin
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

        if (Auth::check()) {
            $user = Auth::user();
            if ($user !== null && $user->role_id == 2 && $user->status == 1) {
                return $next($request);
            }else{
                return redirect()->route('login.admin')->with('message', 'Email hoặc password không chính xác !');
            }
        } else {
            return redirect()->route('login.admin');
        }
    }
}
