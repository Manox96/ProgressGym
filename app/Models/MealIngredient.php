<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MealIngredient
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $ingredient_id
 * @property float $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Ingredient $ingredient
 * @property Meal $meal
 *
 * @package App\Models
 */
class MealIngredient extends Model
{
	protected $table = 'meal_ingredients';

	protected $casts = [
		'meal_id' => 'int',
		'ingredient_id' => 'int',
		'quantity' => 'float'
	];

	protected $fillable = [
		'meal_id',
		'ingredient_id',
		'quantity'
	];

	public function ingredient()
	{
		return $this->belongsTo(Ingredient::class);
	}

	public function meal()
	{
		return $this->belongsTo(Meal::class);
	}
}
