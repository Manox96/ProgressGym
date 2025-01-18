<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MealPlanDay
 * 
 * @property int $id
 * @property int $meal_plan_id
 * @property int $day_number
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MealPlan $meal_plan
 *
 * @package App\Models
 */
class MealPlanDay extends Model
{
	protected $table = 'meal_plan_days';

	protected $casts = [
		'meal_plan_id' => 'int',
		'day_number' => 'int'
	];

	protected $fillable = [
		'meal_plan_id',
		'day_number'
	];

	public function meal_plan()
	{
		return $this->belongsTo(MealPlan::class);
	}
}
