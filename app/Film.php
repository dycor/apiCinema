<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:15 +0000.
 */

// namespace App\Models;
namespace APICinema;


use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Film
 * 
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon $releaseDate
 * @property \Carbon\Carbon $duration
 * @property string $synopsis
 * @property int $director
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $actors
 *
 * @package App\Models
 */
class Film extends Eloquent
{
	protected $table = 'film';

	protected $casts = [
		'director' => 'int'
	];

	protected $dates = [
		'releaseDate',
		'duration'
	];

	protected $fillable = [
		'title',
		'releaseDate',
		'duration',
		'synopsis',
		'director'
	];

	public function director()
	{
		return $this->belongsTo(\APICinema\Director::class, 'director');
	}

	public function categories()
	{
		return $this->belongsToMany(\APICinema\Category::class, 'category_film', 'film', 'category')
					->withPivot('id', 'category_film_name')
					->withTimestamps();
	}

	public function actors()
	{
		return $this->belongsToMany(\APICinema\Actor::class, 'film_actor', 'film', 'actor')
					->withPivot('id')
					->withTimestamps();
	}
}
