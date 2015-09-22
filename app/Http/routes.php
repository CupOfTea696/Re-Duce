<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('t', function() {
    dd([
        'IP' => $_SERVER['REMOTE_ADDR'],
        'for' => array_get($_SERVER, 'HTTP_X_FORWARDED_FOR'),
        'user_agent' => $_SERVER['HTTP_USER_AGENT'],
        'referrer' => array_get($_SERVER, 'HTTP_REFERER'),
        $_SERVER
    ]);
});

Route::get('{slug}', ['as' => 'shortlink.redirect', 'uses' => 'ShortLinkController@redirect']);
Route::get('{slug}/stats', ['as' => 'shortlink.show', 'uses' => 'ShortLinkController@show']);
Route::group(['prefix' => 'api'], function() {
    Route::post('shorten', ['as' => 'shortlink.store', 'uses' => 'ShortLinkController@store']);
    Route::post('{slug}', ['uses' => 'ShortLinkController@store']);
    Route::put('{slug}', ['as' => 'shortlink.update', 'uses' => 'ShortLinkController@update']);
    Route::delete('{slug}', ['as' => 'shortlink.destroy', 'uses' => 'ShortLinkController@destroy']);
});
