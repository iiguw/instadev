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

// Rota incial 
Route::get('/', function () {
    return view('home');
});

// Gravação de imagens e posts
Route::post('/store', 'PostsController@store')
	->name('postar');

// Retorna posts
Route::get('/list', 'PostsController@list')
	->name('listar');