<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.items.index');
});

Route::get('/data-tables', function () {
    return view('layouts.items.dataTable');
});

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); //done

ROute::post('/pertanyaan', 'PertanyaanController@store'); //done

Route::get('/pertanyaan/create','PertanyaanController@create' ); //done

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); //menampilkan jawaban dari id tertentu

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); //menyimpan jawaban baru dari id tertentu

Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //menampilkan detail pertanyaan (QnA)

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');

Route::put('/pertanyaan/{id}', 'PertanyaanController@update');

Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');