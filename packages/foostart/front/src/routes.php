<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('front', [
    'as' => 'front',
    'uses' => 'Foostart\Front\Controllers\FrontController@index'
]);


/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {
    });
});
