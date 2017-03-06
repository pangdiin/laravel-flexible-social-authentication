<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/login/{service}', 'Auth\SocialLoginController@redirect');
Route::get('/login/{service}/callback', 'Auth\SocialLoginController@callback');


