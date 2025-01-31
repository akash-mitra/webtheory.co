<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Cache;
use App\Http\Requests\SecretRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Send the post-authentication response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @return \Illuminate\Http\Response
     */
    private function authenticated(Request $request, Authenticatable $user)
    {
        if ($user->google2fa_secret) {
            Auth::logout();

            $request->session()->put('2fa:user:id', $user->id);

            return redirect('google2fa/validate');
        }
        
        return redirect()->intended($this->redirectTo);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function getToken()
    {
        if (session('2fa:user:id')) {
            return view('google2fa/validate');
        }

        return redirect('login');
    }

    /**
     *
     * @param  App\Http\Requests\SecretRequest $request
     * @return \Illuminate\Http\Response
     */
    public function validateToken(SecretRequest $request)
    {
        // get user id and create cache key
        $userId = $request->session()->pull('2fa:user:id');
        $key    = $userId . ':' . $request->totp;

        // use cache to store token to blacklist
        Cache::add($key, true, 4);

        // login and redirect user
        Auth::loginUsingId($userId);

        return redirect()->intended($this->redirectTo);
    }
}
