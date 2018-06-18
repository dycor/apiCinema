<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 16 Jun 2018 20:19:59 +0000.
 */

namespace APICinema;

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
		return $this->belongsToMany(\APICinema\Film::class, 'category_film', 'category', 'film')
					->withPivot('id', 'category_film_name')
					->withTimestamps();
	}
}
