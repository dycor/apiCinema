<?php

namespace APICinema\Http\Controllers;

use Illuminate\Http\Request;
use APICinema\Actor;
use APICinema\Http\Resources\Actor as ActorResource;

class ActorController extends Controller
{

    public function show($id)
    {
        $actor = Actor::find($id);
        return new ActorResource($actor);

    }

    public function search(Request $filters)
    {
        $actors = (new Actor)->newQuery();

        if ($filters->has('lastname')) {
            $actors->where('lastname', 'LIKE','%'.$filters->input('lastname').'%');
        }

        if ($filters->has('firstname')) {
            $actors->where('firstname', 'LIKE','%'.$filters->input('firstname').'%');
        }

        if ($filters->has('nationality')) {
            $actors->where('nationality', 'LIKE','%'.$filters->input('nationality').'%');
        }

        if ($filters->has('birthdate')) {
            $actors->where('birthdate', $filters->input('birthdate'));
        }



        return ActorResource::collection($actors->distinct()->get()) ;

    }
}
