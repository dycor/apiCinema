<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FilmActor
 * 
 * @property int $id
 * @property int $film
 * @property int $actor
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 *
 * @package App\Models
 */
class FilmActor extends Eloquent
{
	protected $table = 'film_actor';

	protected $casts = [
		'film' => 'int',
		'actor' => 'int'
	];

	protected $fillable = [
		'film',
		'actor'
	];

	public function actor()
	{
		return $this->belongsTo(\App\Models\Actor::class, 'actor');
	}

	public function film()
	{
		return $this->belongsTo(\App\Models\Film::class, 'film');
	}
}
