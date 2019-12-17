<?php


Route::group(['namespace' => 'Demo\Web\Http\Controllers'],function(){

    Route::get('/demo','UserController@index');

    Route::post('create-user','UserController@store')->name('create-user');
});


