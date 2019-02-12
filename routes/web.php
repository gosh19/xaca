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



Auth::routes();

Route::get('/', 'NoticiaController@index');
Route::get('/agregar', 'NoticiaController@agregar')->name('Noticia.agregar');
Route::POST('/Agregando', 'NoticiaController@store')->name('Noticia.store');
Route::get('/noticias', 'NoticiaController@noticias');
Route::get('/News','NoticiaController@show')->name('Noticia.show');
Route::get('/New','NoticiaController@showNew')->name('Noticia.showNew');
