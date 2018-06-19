<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 16 Jun 2018 20:19:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Director
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
class Director extends Eloquent
{
	protected $table = 'director';

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
		return $this->hasMany(\App\Models\Film::class, 'director');
	}
}
