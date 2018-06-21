<?php

namespace APICinema\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class Showing extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id'=> $this->id,
          'language'=> $this->language_showing,
          'schedule' => $this->getSchedule(),//Retourne le nom de l'attribut
          //Impossible de retourner l'horaire
          'day' => $this->day ,
          'cinema' => $this->cinema,
          'film'=> $this->film
        ];
    }
}
