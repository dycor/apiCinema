<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Films routes
Route::get('/films/{id}','FilmController@show')->name('filmById');
Route::get('/films','FilmController@search')->name('films');

//Showings routes
Route::get('/showings/{id}','FilmController@show')->name('showingBydId');
Route::get('/showings','FilmController@search')->name('showings');

//Actors routes
Route::get('/actors/{id}','FilmController@show')->name('actorBydId');
Route::get('/actors','FilmController@search')->name('actors');

//Directors routes
Route::get('/directors/{id}','FilmController@show')->name('directorById');
Route::get('/directors','FilmController@search')->name('directors');

Route::get('/home', 'HomeController@index')->name('home');

