<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use APICinema\Http\Resources\Film as FilmResource;
>>>>>>> ccee1e89af5e290e0888d4fd1462d74d0b2a9266
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
        $films = (new Film)->newQuery();

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

        if ($filters->has('actorFirstname')) {
            var_dump('hello');
            $films->join('film_actor', 'film.id', '=', 'film_actor.film');
            $films->join('actor', 'actor.id', '=', 'film_actor.actor');
            $films->where('firstname', 'LIKE','%'.$filters->input('actorFirstname').'%');
        }

        if ($filters->has('actorLastname')) {
            $films->join('film_actor', 'film.id', '=', 'film_actor.film');
            $films->join('actor', 'actor.id', '=', 'film_actor.actor');
            $films->where('lastname', 'LIKE','%'.$filters->input('actorLastname').'%');
        }

        if ($filters->has('directorLastname')) {
            $films->join('director', 'director.id', '=', 'film.director');
            $films->where('lastname', 'LIKE','%'.$filters->input('directorLastname').'%');
        }
        if ($filters->has('directorFirstname')) {
            $films->join('director', 'director.id', '=', 'film.director');
            $films->where('firstname', 'LIKE','%'.$filters->input('directorFirstname').'%');
        }

        return FilmResource::collection($films->distinct()->get()) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $film = new Film;
        $film->title = $request->title;
        $film->releaseDate = $request->releaseDate;
        $film->duration = $request->duration;
        $film->synopsis = $request->synopsis;
        $film->director = $request->director;

        return redirect()->route('home');
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
    public function show($id)
    {
        $film = Film::find($id) ;
        return new FilmResource($film);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Film $film)
    {

        $filmUpdate = Film::where('id', $film->id)
            ->update([
                'title'=>$request->input('title'),
                'releaseDate'=>$request->input('releaseDate'),
                'duration'=>$request->input('duration'),
                'synopsis'=>$request->input('synopsis'),
                'director'=>$request->input('director')
            ]);

        if ($filmUpdate){
            return redirect()->route('home');
        }
        return back()->withInput();
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
