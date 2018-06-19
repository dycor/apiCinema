<?php

namespace APICinema\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Http\Resources\Film as FilmResource;
use APICinema\Http\Resources\Director as DirectorResource;
//use \App\Models\Film;
//use App\Models\Film;
//use App\Models\Film;
use APICinema\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $filters)
    {
//        dd($filter);
        //http://cinema.test/api/films/1?title=test&category=test&acteur=test&director=test&cinema=test
        $films = (new Film)->newQuery();

//Affiche les films d'un acteur ( paramètres issu des inputs par la méthode GET)
//Affiche les films d'un réalisateur ( paramètres issu des inputs par la méthode GET)

        if ($filters->has('title')) {
            $films->where('title', 'LIKE','%'.$filters->input('title').'%');
        }

        if ($filters->has('director')) {
            $films->where('director', $filters->input('director'));
        }

        if ($filters->has('releaseDate')) {
            $films->where('releaseDate', $filters->input('releaseDate'));
        }

        if ($filters->has('category')) {
            $films->join('category_film', 'film.id', '=', 'category_film.film');
            $films->join('category', 'category.id', '=', 'category_film.category');
            $films->where('categoryName', $filters->input('category'));
        }

        return FilmResource::collection($films->get()) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $film = Film::findOrFail($id);
//        $director = $film->director()->first();
//        $film->director  = new DirectorResource($director);
//        $film->director = new DirectorResource();

        return new FilmResource($film);
//        dd($film);
//        return $film;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
