<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('info', 'InfoController@index');
Route::get('contact', 'ContactController@index');