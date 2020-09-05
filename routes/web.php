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

Route::get('/', 'PublicController@root')->name('root');
Route::get('/features', 'PublicController@features')->name('features');
Route::get('/blog', 'PublicController@blog')->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

// Route::get('social/login/{provider}', 'Auth\SocialLoginController@login')->name(
//     'social.login'
// );
// Route::get(
//     'social/login/{provider}/callback',
//     'Auth\SocialLoginController@callback'
// )->name('social.callback');

// Route::get('google2fa/enable', 'Auth\Google2FAController@enable')->name(
//     'google2fa.enable'
// );
// Route::get('google2fa/validate', 'Auth\LoginController@getToken')->name(
//     'google2fa.token'
// );
// Route::post('google2fa/validate', [
//     'middleware' => 'throttle:5',
//     'uses' => 'Auth\LoginController@validateToken',
// ])->name('google2fa.validate');
// Route::get('google2fa/disable', 'Auth\Google2FAController@disable')->name(
//     'google2fa.disable'
// );

// Route::get('notifications', 'NotificationController@index')->name(
//     'notifications.index'
// );
// Route::get('notifications/{id}', 'NotificationController@show')->name(
//     'notifications.show'
// );
// Route::delete('notifications/{id}', 'NotificationController@destroy')->name(
//     'notifications.destroy'
// );

// Route::get('subscriptions', 'SubscriptionController@index')->name(
//     'subscriptions.index'
// );
// Route::get('subscriptions/create', 'SubscriptionController@create')->name(
//     'subscriptions.create'
// );
// Route::post('subscriptions', 'SubscriptionController@store')->name(
//     'subscriptions.store'
// );
// Route::patch('subscriptions/{plan}', 'SubscriptionController@update')->name(
//     'subscriptions.update'
// );
// Route::delete('subscriptions/{plan}', 'SubscriptionController@destroy')->name(
//     'subscriptions.destroy'
// );

// Route::get('billing', 'BillingController@index')->name('billing.index');
// Route::get('billing/{id}', 'BillingController@show')->name('billing.show');
