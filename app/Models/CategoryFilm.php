<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CategoryFilm
 * 
 * @property int $id
 * @property string $category_film_name
 * @property int $category
 * @property int $film
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 *
 * @package App\Models
 */
class CategoryFilm extends Eloquent
{
	protected $table = 'category_film';

	protected $casts = [
		'category' => 'int',
		'film' => 'int'
	];

	protected $fillable = [
		'category_film_name',
		'category',
		'film'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class, 'category');
	}

	public function film()
	{
		return $this->belongsTo(\App\Models\Film::class, 'film');
	}
}
