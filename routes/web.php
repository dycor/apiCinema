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


//Retourner le formulaire de création du film
//Route::get('/films/create', function () {
  //  return view('form-film'); //appel d'un helper dédié aux vues
//});

Route::get('/films/create', 'FilmController@create');

  //  return view('forms.filmAdd'); //appel d'un helper dédié aux vues

//Renvoie vers le traitement de création de film
Route::post('create', 'FilmController@store')->name('create');

//Vue pour y retourner le tableau des films
//Route::get('/films', function () {
    //return view('list-film'); //appel d'un helper dédié aux vues
//});

//Vue pour les infos d'un film
//Route::get('/showing/{idUri?}','ShowingController@read')->name('single');


//Vue pour les infos d'un film
//Route::get('/films/update', function () {
    //return view('update-film'); //appel d'un helper dédié aux vues
//});
