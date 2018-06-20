<?php

namespace APICinema\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Director extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 	[
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'nationality' => $this->nationality,
            'birthdate' => $this->birthdate,
            'biography' => $this->biography
        ];

    }
}
