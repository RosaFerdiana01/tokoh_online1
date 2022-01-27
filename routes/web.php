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
    return  view ('index');
});

Route::get('/jenis sayur', function () {
    $nama='';
    return  view ('Sayuran', ['nama' => $nama]);
});


Route::get('/', 'TokohController@home'); 
Route::get('/Sayuran', 'TokohController@Sayuran'); 


Route::get('/harga', 'HargaController@index');