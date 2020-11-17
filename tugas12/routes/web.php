<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', 'HomeController@index');

Route::get('/register', 'AuthController@daftar');

Route::post('/welcome', 'AuthController@datang');
