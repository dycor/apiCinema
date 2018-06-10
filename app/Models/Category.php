<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:14 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $categoryName
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $films
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $table = 'category';

	protected $fillable = [
		'categoryName'
	];

	public function films()
	{
		return $this->belongsToMany(\App\Models\Film::class, 'category_film', 'category', 'film')
					->withPivot('id', 'category_film_name')
					->withTimestamps();
	}
}
