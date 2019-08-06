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

Route::get('/', 'ClienteController@index');
Route::get('/home', 'ClienteController@index');

Route::get('/novo', 'ClienteController@novo');
Route::post('/novo', 'ClienteController@adicionar');

Route::get('/editar/{id}', 'ClienteController@editar');
Route::post('/editar/{id}', 'ClienteController@update');

Route::get('/excluir/{id}', 'ClienteController@excluir');