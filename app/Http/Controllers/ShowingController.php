<?php

namespace APICinema\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Http\Resources\Showing as ShowingResource;

use APICinema\Showing;

class ShowingController extends Controller
{

    public function search(Request $filters){

      $showings = (new Showing)->newQuery();

      //La version de la séance
      if ($filters->has('language')) {
          $showings->leftjoin('language','language.id', '=', 'showing.language_showing')
          ->where('language.languageName', 'LIKE','%'.$filters->input('language').'%')
          ->get();
      }

      //Le titre du film
      if ($filters->has('title')) {
          $showings->leftjoin('film','film.id', '=', 'showing.film')
          ->where('film.title', 'LIKE','%'.$filters->input('title').'%')
          ->get();
      }

      //Le nom du cinéma
      if ($filters->has('cinemaName')) {
          $showings->leftjoin('cinema','cinema.id', '=', 'showing.cinema')
          ->where('cinema.cinemaName', 'LIKE','%'.$filters->input('cinemaName').'%')
          ->get();
      }

      //Les horaires
      if ($filters->has('schedule')) {
          $showings
            ->where('showing.schedule', 'LIKE','%'.$filters->input('schedule').'%')
            ->get();
      }

      //La date
      if ($filters->has('day')) {
          $showings
            ->where('showing.day', 'LIKE','%'.$filters->input('day').'%')
            ->get();
      }
      
      return ShowingResource::collection($showings->distinct()->get()) ;

    }


}
