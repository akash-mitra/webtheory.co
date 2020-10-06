<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public Routes
Route::get('/', 'PublicController@root')->name('root');
Route::get('features', 'PublicController@features')->name('features');
Route::get('blog', 'PublicController@blog')->name('blog');

// Auth Routes
Auth::routes(['verify' => true]);

// Change Password
Route::get('password/change', 'Auth\ChangePasswordController@showChangeForm')->name(
    'password.changeform'
);

Route::post('password/change', 'Auth\ChangePasswordController@change')->name(
    'password.change'
);

// Dashboard
// Route::get('home', 'HomeController@home')->name('home')->middleware('verified');
Route::get('home', 'HomeController@home')->name('home')->middleware('verify.subscription');

// Social Login
Route::get('social/login/{provider}', 'Auth\SocialLoginController@login')->name(
    'social.login'
);

Route::get(
    'social/login/{provider}/callback',
    'Auth\SocialLoginController@callback'
)->name('social.callback');

// Profile


// Google 2FA
Route::get('google2fa/enable', 'Auth\Google2FAController@enable')->name(
    'google2fa.enable'
);

Route::get('google2fa/validate', 'Auth\LoginController@getToken')->name(
    'google2fa.token'
);

Route::post('google2fa/validate', [
    'middleware' => 'throttle:5',
    'uses' => 'Auth\LoginController@validateToken',
])->name('google2fa.validate');

Route::get('google2fa/disable', 'Auth\Google2FAController@disable')->name(
    'google2fa.disable'
);

// Notifications
Route::get('notifications', 'NotificationController@index')->name(
    'notifications.index'
);
Route::get('notifications/{id}', 'NotificationController@show')->name(
    'notifications.show'
);
Route::delete('notifications/{id}', 'NotificationController@destroy')->name(
    'notifications.destroy'
);

// Plan
Route::get('plans', 'SubscriptionController@plans')->name(
    'subscriptions.plan'
);

// Subscription
Route::get('subscriptions/onboard', 'SubscriptionController@onboard')->name(
    'subscriptions.onboard'
);
Route::get('subscriptions/create', 'SubscriptionController@create')->name(
    'subscriptions.create'
);
Route::post('subscriptions', 'SubscriptionController@store')->name(
    'subscriptions.store'
);
Route::get('subscriptions/{site}/edit', 'SubscriptionController@edit')->name(
    'subscriptions.edit'
);
Route::patch('subscriptions/{site}', 'SubscriptionController@update')->name(
    'subscriptions.update'
);
Route::delete('subscriptions/{site}', 'SubscriptionController@destroy')->name(
    'subscriptions.destroy'
);

// Billing/Invoice


// Sites

// Deployer
