<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 16 Jun 2018 20:19:59 +0000.
 */

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
		return $this->belongsTo(\APICinema\Cinema::class, 'cinema');
	}

	public function language()
	{
		return $this->belongsTo(\APICinema\Language::class, 'language_showing');
	}
}
