<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Jun 2018 12:58:33 +0000.
 */

//namespace App\Models;
namespace APICinema;

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
 * @property int $film
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
		'cinema' => 'int',
		'film' => 'int'
	];

	protected $dates = [
		'schedule',
		'day'
	];

	protected $fillable = [
		'language_showing',
		'schedule',
		'day',
		'cinema',
		'film'
	];

	public function getSchedule(){
		return $this->schedule->format('Y-m-d H:i:s');
	}

	public function cinema()
	{
		return $this->belongsTo(\App\Models\Cinema::class, 'cinema');
	}

	public function film()
	{
		return $this->belongsTo(\App\Models\Film::class, 'film');
	}

	public function language()
	{
		return $this->belongsTo(\App\Models\Language::class, 'language_showing');
	}
}
