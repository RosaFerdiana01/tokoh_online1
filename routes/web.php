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

Route::get('/sayur', function () {
    $nama='';
    return  view ('sayur', ['nama' => $nama]);
});

Route::get('/sayur', 'SayurController');

Route::get('/sayur/data', 'SayurController@data');

Route::get('/sayur/add', 'SayurController@add');

Route::post('/sayur/addProcess', 'SayurController@addProcess');