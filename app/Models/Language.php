<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 10 Jun 2018 12:45:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Language
 * 
 * @property int $id
 * @property string $languageName
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $showings
 *
 * @package App\Models
 */
class Language extends Eloquent
{
	protected $table = 'language';

	protected $fillable = [
		'languageName'
	];

	public function showings()
	{
		return $this->hasMany(\App\Models\Showing::class, 'language_showing');
	}
}
