<?php

namespace APICinema\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Film extends JsonResource
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
		'id' => $this->id,
		'title' => $this->title,
		'releaseDate' => $this->releaseDate,
		'synopsis' => $this->synopsis,
		'director' => $this->director,
		'created_at' => $this->created_at,
		'updated_at' => $this->updated_at
	
	];
    }
}
