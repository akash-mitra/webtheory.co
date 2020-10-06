<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifySubscription
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
        if (Auth::user()->isAdmin()) {
            return $next($request);
        } else {
            $is_subscribed = Auth::user()->subscribed('main');

            if (Auth::user() && $is_subscribed) {
                return $next($request);
            } else {
                // This user is not a paying customer...
                // return abort(402, "You have no active Subscription Plan");
                return redirect()->intended('/subscriptions/onboard');
            }
            
            return $next($request);
        }
    }
}
