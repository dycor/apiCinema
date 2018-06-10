<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Showing
 * 
 * @property int $id
 * @property int $language_showing
 * @property \Carbon\Carbon $schedule
 * @property \Carbon\Carbon $day
 * @property int $cinema
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Language $language
 *
 * @package App\Models
 */
class Showing extends Eloquent
{
	protected $table = 'showing';

	protected $casts = [
		'language_showing' => 'int',
		'cinema' => 'int'
	];

	protected $dates = [
		'schedule',
		'day'
	];

	protected $fillable = [
		'language_showing',
		'schedule',
		'day',
		'cinema'
	];

	public function cinema()
	{
		return $this->belongsTo(\App\Models\Cinema::class, 'cinema');
	}

	public function language()
	{
		return $this->belongsTo(\App\Models\Language::class, 'language_showing');
	}
}
