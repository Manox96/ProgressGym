<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserMealPlan
 * 
 * @property int $id
 * @property int $user_id
 * @property int $meal_plan_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MealPlan $meal_plan
 * @property User $user
 *
 * @package App\Models
 */
class UserMealPlan extends Model
{
	protected $table = 'user_meal_plans';

	protected $casts = [
		'user_id' => 'int',
		'meal_plan_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'meal_plan_id'
	];

	public function meal_plan()
	{
		return $this->belongsTo(MealPlan::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
