<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:14 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Actor
 * 
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $nationality
 * @property \Carbon\Carbon $birthdate
 * @property string $biography
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $films
 *
 * @package App\Models
 */
class Actor extends Eloquent
{
	protected $table = 'actor';

	protected $dates = [
		'birthdate'
	];

	protected $fillable = [
		'firstname',
		'lastname',
		'nationality',
		'birthdate',
		'biography'
	];

	public function films()
	{
		return $this->belongsToMany(\App\Models\Film::class, 'film_actor', 'actor', 'film')
					->withPivot('id')
					->withTimestamps();
	}
}
