<?php


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', 'UserController@logout');
    Route::get('user', 'UserController@getAuthenticatedUser');
});
