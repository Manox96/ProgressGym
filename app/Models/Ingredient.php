<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 * 
 * @property int $id
 * @property string $name
 * @property float $calories
 * @property float|null $protein
 * @property float|null $carbs
 * @property float|null $fats
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Meal[] $meals
 *
 * @package App\Models
 */
class Ingredient extends Model
{
	protected $table = 'ingredients';

	protected $casts = [
		'calories' => 'float',
		'protein' => 'float',
		'carbs' => 'float',
		'fats' => 'float'
	];

	protected $fillable = [
		'name',
		'calories',
		'protein',
		'carbs',
		'fats'
	];

	public function meals()
	{
		return $this->belongsToMany(Meal::class, 'meal_ingredients')
					->withPivot('id', 'quantity')
					->withTimestamps();
	}
}
