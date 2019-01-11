<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 10:15 PM
 */

include_once "auth.php";

Route::namespace('Backend')->group(function () {
    Route::group(['prefix' => 'manager', 'as' => 'manager::', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index.get', 'uses' => 'NewsController@indexAction']);

        include_once "news.php";
    });
});
