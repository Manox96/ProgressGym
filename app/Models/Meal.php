<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Meal
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Ingredient[] $ingredients
 *
 * @package App\Models
 */
class Meal extends Model
{
	protected $table = 'meals';

	protected $fillable = [
		'name',
		'description'
	];

	public function ingredients()
	{
		return $this->belongsToMany(Ingredient::class, 'meal_ingredients')
					->withPivot('id', 'quantity')
					->withTimestamps();
	}
}
