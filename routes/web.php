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

Route::get('/', 'HomeController@index');
//Route::get('/', function () {
//    return view('/home/index');
//});
//Route::get('items/getChart', 'ItemController@getChart');
Route::resource('items', 'ItemController');
Route::resource('utentes', 'UtenteController');
Route::resource('achados', 'AchadosController');
Route::resource('encomendas', 'EncomendaController');
Route::resource('levantamentos', 'LevantamentoController');
Route::get('searchachados','AchadosController@edit');
Route::post('updateachados','AchadosController@update');
Route::get('searchlevant','LevantamentoController@edit');
Route::post('updatelevant','LevantamentoController@update');
//Route::get('items/getChart', ['as' => 'graficos', function ($id) {
//    //
//    $faculdade = \App\Models\faculdade::findOrFail($id);
//    return view('admin.departamentos.createWithId', compact('faculdade'));
//}]);