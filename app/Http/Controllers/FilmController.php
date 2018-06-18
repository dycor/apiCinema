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
    public function search(Request $filter)
    {
        //http://cinema.test/api/films/1?name=test&genre=test&acteur=test&director=test&cinema=test
        $film = (new Film)->newQuery();

        if ($filters->has('name')) {
            $film->where('name', $filters->input('name'));
        }
        if ($filters->has('genre')) {
            $film->where('genre', $filters->input('genre'));
        }
        if ($filters->has('acteur')) {
            $film->where('acteur', $filters->input('acteur'));
        }
        if ($filters->has('director')) {
            $film->where('director', $filters->input('director'));
        }

        return $film->get();

        //        return new FilmResource::collection(Film::all());
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
