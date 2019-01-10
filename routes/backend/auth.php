<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 10:15 PM
 */

Route::group(['as' => 'auth::'], function() {
    Route::get('register', ['as' => 'register.get', 'uses' => 'Backend\Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'Backend\Auth\RegisterController@register']);
    Route::get('login', ['as' => 'login.get', 'uses' => 'Backend\Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Backend\Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout.post', 'uses' => 'Backend\Auth\LoginController@logout']);
});