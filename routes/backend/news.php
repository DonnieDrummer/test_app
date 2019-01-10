<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 10:47 PM
 */

Route::group(['prefix' => 'news', 'as' => 'news:'], function() {
    Route::get('/edit/{id?}', ['as' => 'edit.get', 'uses' => 'NewsController@editAction']);
    Route::post('/edit/{id?}', ['as' => 'edit.post', 'uses' => 'NewsController@storeAction']);
});