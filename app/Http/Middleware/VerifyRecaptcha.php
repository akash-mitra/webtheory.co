<?php

namespace App\Http\Middleware;

use Closure;
use ReCaptcha;

class VerifyRecaptcha
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
        if ($this->verifyRecaptcha($request)) {
            return $next($request);
        }

        return abort(403, "Restricted Access");
    }

    /**
     * Verify Recaptcha.
     */
    private function verifyRecaptcha($request)
    {
        $captcha = new ReCaptcha\ReCaptcha(env('RECAPTCHA_SECRET_KEY'));

        $captcha->setExpectedHostname($request->getHost());

        $token = $request->input('recaptcha');

        $captchaResponse = $captcha->verify($token, $request->ip());
        
        $score = $captchaResponse->getScore();
        
        if($score > 0.5)
            return true;

        return false;
    }
}
