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

//
Route::apiResource('film', 'FilmController');

//Films routes
Route::get('/films/{id}','FilmController@show')->name('filmById');
Route::get('/films','FilmController@search')->name('films');

//Showing routes
Route::get('/showings/{param?}','ShowingController@search')->name('searchShowing');


//Actors routes
Route::get('/actors/{id}','ActorController@show')->name('actorBydId');
Route::get('/actors','ActorController@search')->name('actors');


//Directors routes
Route::get('/directors/{id}','DirectorController@show')->name('directorById');
Route::get('/directors','DirectorController@search')->name('directors');
