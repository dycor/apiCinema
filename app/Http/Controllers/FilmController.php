<?php

namespace APICinema\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Http\Resources\Film as FilmResource;
use APICinema\Http\Resources\Director as DirectorResource;


use APICinema\Film;
use APICinema\Director;

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

        if ($filters->has('releaseDate')) {
            $films->where('releaseDate', $filters->input('releaseDate'));
        }

        if ($filters->has('category')) {
            $films->join('category_film', 'film.id', '=', 'category_film.film');
            $films->join('category', 'category.id', '=', 'category_film.category');
            $films->where('categoryName', $filters->input('category'));
        }

        if ($filters->has('actorFirstname')) {
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
       $directors = Director::all();
       $values = [];

       foreach($directors as $director){
           $values[$director->id] = $director->firstname.' '.$director->lastname;
       }

       //dd($values);

       return view('forms.filmAdd',['values' =>$values]); //appel d'un helper dédié aux vues
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Film;
        $film->title = $request->title;
        $film->releaseDate = $request->releaseDate;
        $film->duration = strtotime($request->duration);
        $film->synopsis = $request->synopsis;
        $film->director = $request->director;
        $film->save();

        return redirect()->route('front');
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
        $film->director_data = $film->director_fk->toArray();

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
