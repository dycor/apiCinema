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
Route::apiResource('film', 'FilmController');

//Films routes
Route::get('/films/{id}','FilmController@show')->name('filmById');
Route::get('/films','FilmController@search')->name('films');

//Showings routes
Route::get('/showings/{id}','FilmController@show')->name('showingBydId');
Route::get('/showings','FilmController@search')->name('showings');


Route::get('/showings/add/{showing?}','ShowingController@insert')->name('addShowing');
Route::get('/showings/readFilm/{film?}','ShowingController@readByFilm')->name('showingByFilm');
Route::get('/showings/readDate/{date?}','ShowingController@readByDate')->name('showingByDate');
Route::get('/showings/readLanguage/{language?}','ShowingController@readByLanguage')->name('showingByLanguage');
Route::get('/showings/readCinema/{date?}','ShowingController@readByCinema')->name('showingByCinema');



//Actors routes
Route::get('/actors/{id}','ActorController@show')->name('actorBydId');
Route::get('/actors','ActorController@search')->name('actors');

//Directors routes
Route::get('/directors/{id}','DirectorController@show')->name('directorById');
Route::get('/directors','DirectorController@search')->name('directors');

Route::get('/home', 'HomeController@index')->name('home');
