<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/home', 'HomeController@index');

Route::get('/register', 'AuthController@daftar');

Route::post('/welcome', 'AuthController@datang');

Route::get('/master', function () {
    return view('adminLTE.master');
});

Route::get('/', function () {
    return view('adminLTE.items.index');
});

Route::get('/data-tables', function () {
    return view('adminLTE.items.data-tables');
});

// Tugas15

Route::get('/question', 'PertanyaanController@index');
Route::get('/question/create', 'PertanyaanController@create');
Route::post('/question', 'PertanyaanController@store');
Route::get('/question/{id}', 'PertanyaanController@show');
Route::get('/question/{id}/edit', 'PertanyaanController@edit');
Route::put('/question/{id}', 'PertanyaanController@update');
Route::delete('/question/{id}', 'PertanyaanController@destroy');
