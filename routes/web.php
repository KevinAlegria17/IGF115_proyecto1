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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::name('usuariosLista')->get('/usuarios', 'UserController@index');
	Route::name('usuarioCrear')->get('/usuarionuevo', 'UserController@create');
	Route::name('usuarioCrearPost')->post('/usuario/nuevo', 'UserController@store');
	Route::name('usuarioEditar')->get('/usuarioeditar/{id}', 'UserController@edit');
	Route::name('usuarioEditarPost')->post('/usuario/editar/{id}', 'UserController@update');
	
});