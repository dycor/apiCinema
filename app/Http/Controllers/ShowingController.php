<?php

namespace APICinema\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Http\Resources\Showing as ShowingResource;


use APICinema\Showing;

class ShowingController extends Controller
{

    public function search($attributes,$param){

      //dd($attributes." ".$param);
      //dd($filters->param);
      $showings = (new Showing)->newQuery();

      //dd($filters->input());
      //La version de la séance
      if ($attributes=='language') {
          $showings->leftjoin('language','language.id', '=', 'showing.language_showing')
          ->where('language.languageName', 'LIKE','%'.$param.'%')
          ->get();
      }

      //Le titre du film
      if ($attributes=='title') {
          $showings->leftjoin('film','film.id', '=', 'showing.film')
          ->where('film.title', 'LIKE','%'.$param.'%')
          ->get();
      }

      //Le nom du cinéma
      if ($attributes== 'cinemaName') {
          $showings->leftjoin('cinema','cinema.id', '=', 'showing.cinema')
          ->where('cinema.cinemaName', 'LIKE','%'.$param.'%')
          ->get();
      }

      //Les horaires
      if ($attributes=='schedule') {
          $showings
            ->where('showing.schedule', 'LIKE','%'.$param.'%')
            ->get();
      }

      //La date
      if ($attributes=='day') {
          $showings
            ->where('showing.day', 'LIKE','%'.$param.'%')
            ->get();
      }

      //dd($showings->distinct()->get());
      //On retourne une colloction d'objet de séance
      return ShowingResource::collection($showings->distinct()->get());
    }


    //Pour insérer une séance
    public function insert(Request $request){
      $showing = new Showing;
      $showing->language_showing = $request->post_content;
      //$showing->cinema = ;
      //$showing->schedule = ;
      //$showing->day = ;
      //$showing->cinema = ;
      //$showing->save();
      //return redirect()->route('/');
    }

    //Affiche les séances d'un film ( paramètres issu des inputs par la méthode GET)
    public function readByFilm(Request $request){
      //Mettre l'id du cinéma en paramètre
      $showing = new Showing;
      return $showing->where('', $request)->get();

    }

    //Affiche les séances pour une date ( paramètres issu des inputs par la méthode GET)
    public function readByDate(Request $request){
      //Mettre l'horaire en paramètre
      $showing = new Showing;
      $showing->where('day', $request)->get();
      return $showing;
    }

    //Affiche les seances pour une langue ( paramètres issu des inputs par la méthode GET)
    public function readByLanguage(Request $request){
      //Mettre l'horaire en paramètre
      $showing = new Showing;
      $showing->where('language_showing', $request)->get();
      return $showing;
    }


    // Affiche les séances pour un cinema ( paramètres issu des inputs par la méthode GET)
    public function readByCinema(Request $request){
      //Mettre l'horaire en paramètre
      $showing = new Showing;
      $showing->where('cinema', $request)->get();
      return $showing;
    }

}
