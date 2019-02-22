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

Route::middleware('rol')->group(function(){
    Route::get('/agregar', 'NoticiaController@agregar')->name('Noticia.agregar');
    Route::POST('/update', 'PublicidadController@update')->name('Publicidad.update');
    Route::GET('/modificar', 'NoticiaController@modificar')->name('Noticia.modificar');
    Route::GET('/editando', 'NoticiaController@edit')->name('Noticia.editar');
    Route::post('/guardando', 'NoticiaController@update')->name('Noticia.update');
});

Route::get('/register', 'NoticiaController@register')->name('register');
Route::get('/', 'NoticiaController@index')->name('Noticia.index');

Route::POST('/Agregando', 'NoticiaController@store')->name('Noticia.store');
Route::get('/noticias', 'NoticiaController@noticias');
Route::get('/News','NoticiaController@show')->name('Noticia.show');
Route::get('/New','NoticiaController@showNew')->name('Noticia.showNew');


