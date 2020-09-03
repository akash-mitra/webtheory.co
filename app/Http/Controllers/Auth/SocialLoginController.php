<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Socialite;
use App\User;
use App\LoginProvider;

class SocialLoginController extends Controller
{
    /**
     * list of social drivers enabled for Social Auth
     */
    protected $providers = ['google', 'facebook', 'twitter', 'linkedin', 'github', 'gitlab', 'bitbucket'];

    public function login($provider)
    {
        if (!in_array($provider, $this->providers)) {
            return abort(404, 'Provider not supported');
        }
        
        return Socialite::driver($provider)->redirect();
    }


    public function callback($provider)
    {
        if (!in_array($provider, $this->providers)) {
            return abort(404, 'Provider not supported');
        }

        $authenticatedUser = $this->getAuthenticatedUser($provider);
        $this->abortIfInfoMissing($authenticatedUser);
        $existingUser = $this->authenticatedUserExisting($authenticatedUser);

        if ($existingUser) {
            $existingUser->createOrUpdateProvider($provider, $authenticatedUser);
            Auth::login($existingUser, true);
        } else {
            $user = $this->createUserWithProvider($provider, $authenticatedUser);
            Auth::login($user, true);
        }
        
        return redirect()->intended('/home');
    }


    private function createUserWithProvider($provider, $authenticatedUser)
    {
        $user = new User([
            'name' => $authenticatedUser->getName(),
            'email' => $authenticatedUser->getEmail(),
            'email_verified_at' => \Carbon\Carbon::now(),
            'role' => 'registered',
            'avatar' => $authenticatedUser->getAvatar(),
            'preferences' => ["broadcast","database","mail"],
        ]);

        $user->save();

        $user->providers()->create([
            'provider_user_id' => $authenticatedUser->getId(),
            'provider'         => $provider,
            'avatar'           => $authenticatedUser->getAvatar()
        ]);
        
        return $user;
    }

    private function getAuthenticatedUser($provider)
    {
        try {
            return Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return abort(400, 'Unable to authenticate user');
        }
    }


    private function authenticatedUserExisting($authenticatedUser)
    {
        return User::where('email', $authenticatedUser->getEmail())->first();
    }


    /**
     * Checks the authenticated user returned from the
     * social provider to make sure all the mandatory
     * information are present
     *
     * @param  object $authenticatedUser
     * @return void
     */
    private function abortIfInfoMissing($authenticatedUser)
    {
        if (empty($authenticatedUser->getEmail())
            || empty($authenticatedUser->getName())
            || empty($authenticatedUser->getAvatar())) {
            abort(406, "Must provide name, email and profile picture");
        }
    }
}
