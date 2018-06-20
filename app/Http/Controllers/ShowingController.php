<?php

namespace APICinema\Http\Controllers;
use Illuminate\Http\Request;

use APICinema\Showing;

class ShowingController extends Controller
{

    public function read(){
      $showings = Showing::all();
      return view('single-film',['showings'=> $showings]);
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
      //return redirect()->route('/film');
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
