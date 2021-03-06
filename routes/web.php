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
})->name('front');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::redirect('/home','/error','404');



Route::get('/films/create', 'FilmController@create')->name('filmAdd');



//Renvoie vers le traitement de création de film
Route::post('create', 'FilmController@store')->name('create');

