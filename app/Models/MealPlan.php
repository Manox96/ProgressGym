<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MealPlan
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MealPlanDay[] $meal_plan_days
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class MealPlan extends Model
{
	protected $table = 'meal_plans';

	protected $fillable = [
		'name',
		'description'
	];

	public function meal_plan_days()
	{
		return $this->hasMany(MealPlanDay::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_meal_plans')
					->withPivot('id')
					->withTimestamps();
	}
}
