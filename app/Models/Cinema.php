<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cinema
 * 
 * @property int $id
 * @property string $cinemaName
 * @property string $city
 * @property string $adress
 * @property string $postcode
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $showings
 *
 * @package App\Models
 */
class Cinema extends Eloquent
{
	protected $table = 'cinema';

	protected $fillable = [
		'cinemaName',
		'city',
		'adress',
		'postcode'
	];

	public function showings()
	{
		return $this->hasMany(\App\Models\Showing::class, 'cinema');
	}
}
