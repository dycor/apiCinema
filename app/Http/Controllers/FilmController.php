<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        dd(Film::findOrFail($id));
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
