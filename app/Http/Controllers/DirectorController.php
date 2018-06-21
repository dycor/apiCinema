<?php

namespace APICinema\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Director;
use APICinema\Http\Resources\Director as DirectorResource;

class DirectorController extends Controller
{
    public function show($id)
    {
        $director = Director::find($id) ;


        return new DirectorResource($director);

    }

    public function search(Request $filters)
    {
        $directors = (new Director)->newQuery();

        if ($filters->has('lastname')) {
            $directors->where('lastname', 'LIKE','%'.$filters->input('lastname').'%');
        }

        if ($filters->has('firstname')) {
            $directors->where('firstname', 'LIKE','%'.$filters->input('firstname').'%');
        }

        if ($filters->has('nationality')) {
            $directors->where('nationality', 'LIKE','%'.$filters->input('nationality').'%');
        }

        if ($filters->has('birthdate')) {
            $directors->where('birthdate',$filters->input('birthdate'));
        }




        return DirectorResource::collection($directors->distinct()->get()) ;

    }
}
