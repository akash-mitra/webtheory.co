<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at', 'role', 'avatar', 
        'address', 'city', 'state', 'postcode', 'country', 'tax_id', 
        'google2fa_secret', 'preferences', 'slack_webhook', 'country_code', 'mobile_no', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'google2fa_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'preferences' => 'array',
    ];


    // Role

    /**
     * Determine if the user has the given role.
     *
     * @param  mixed $role
     * @return boolean
     */
    public function hasRole($role)
    {
        return $this->role == $role;
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }


    // Social Login Providers

    public function providers($provider = null)
    {
        if (empty($provider)) {
            return $this->hasMany(LoginProvider::class);
        } else {
            return $this->hasOne(LoginProvider::class)->where('provider', $provider);
        }
    }

    public function createOrUpdateProvider(string $provider, $providerUser)
    {
        $authProvider = $this->providers($provider)->first();

        if (empty($authProvider)) {
            $this->providers()->create([
                'provider' => $provider,
                'provider_user_id' => $providerUser->getId(),
                'avatar' => $providerUser->getAvatar(),
            ]);
        } else {
            $authProvider->avatar = $providerUser->getAvatar();
            $authProvider->save();
        }

        $this->avatar = $providerUser->getAvatar();

        return $this->save();
    }


    // Notification Channel
    
    /**
     * Route notifications for the Slack channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForSlack($notification)
    {
        return $this->slack_webhook;
    }

    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForNexmo($notification)
    {
        return $this->country_code . $this->mobile_no;
    }

    /**
     * The channels the user receives notification broadcasts on.
     *
     * @return string
     */
    public function receivesBroadcastNotificationsOn()
    {
        return 'App.User.' . $this->id;
    }
}
