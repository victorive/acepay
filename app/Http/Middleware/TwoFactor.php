<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactor
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
        $user = Auth::user();

        if(auth()->check() && $user->token)
        {
            if($user->token_expires_at < now())
            {
                $user->resetToken();
                auth()->logout();

                return redirect()->route('login')->with('failed', 'Two-factor authentication code expired!');
            }

            if(!$request->is('verify*')){

                return redirect()->route('verify');
            }
        }
        return $next($request);
    }
}
