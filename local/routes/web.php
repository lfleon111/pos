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

Route::get('/facturacion', 'Admin\FacturaController@index')->name('factura');
Route::get('/facturacion/form', 'Admin\FacturaController@form');

Route::get('/productos', 'Admin\ProductoController@index')->name('factura');
Route::get('/productos/create', 'Admin\ProductoController@create')->name('factura');
Route::get('/productos/update', 'Admin\ProductoController@update')->name('factura');
Route::get('/productos/delete', 'Admin\ProductoController@delete')->name('factura');

Route::get('/clientes', 'Admin\ClienteController@index')->name('factura');
Route::get('/clientes/create', 'Admin\ClienteController@create')->name('factura');
Route::get('/clientes/update', 'Admin\ClienteController@update')->name('factura');
Route::get('/clientes/delete', 'Admin\ClienteController@delete')->name('factura');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
