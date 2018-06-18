<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 16 Jun 2018 20:19:59 +0000.
 */

namespace APICinema;

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
		return $this->belongsTo(\APICinema\Actor::class, 'actor');
	}

	public function film()
	{
		return $this->belongsTo(\APICinema\Film::class, 'film');
	}
}
