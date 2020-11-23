<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PertanyaanController;

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

// Tugas 1 Pekan 4

// Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');
// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
// Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');

Route::resource('pertanyaan', 'PertanyaanController');
