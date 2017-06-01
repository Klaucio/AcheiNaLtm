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
    return view('/home/home');
});
Route::resource('utentes', 'UtenteController');
Route::resource('achados', 'AchadosController');
Route::resource('levantamentos', 'LevantamentoController');
Route::get('searchachados','AchadosController@edit');
Route::post('updateachados','AchadosController@update');
Route::get('searchlevant','LevantamentoController@edit');
Route::post('updatelevant','LevantamentoController@update');