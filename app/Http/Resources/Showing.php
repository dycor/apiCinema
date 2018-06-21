<?php

namespace APICinema\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

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
        dd($this);
        return [
          'id'=> $this->id,
          'language'=> $this->language_showing,
          'schedule' => $this->getSchedule(),
          'day' => $this->day,
          'cinema' => $this->cinema,
          'film'=> $this->film
        ];
    }
}
