<?php

use Closure;
use Illuminate\Support\Facades\Auth;

class TwoFactorVerified
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_two_factor_enabled && !session('2fa:user:verified')) {
            return redirect()->route('2fa.verify');
        }

        return $next($request);
    }
}
