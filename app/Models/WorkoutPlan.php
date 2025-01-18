<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkoutPlan
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 * @property Collection|WorkoutPlanDay[] $workout_plan_days
 *
 * @package App\Models
 */
class WorkoutPlan extends Model
{
	protected $table = 'workout_plans';

	protected $fillable = [
		'name',
		'description'
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_workout_plans')
					->withPivot('id')
					->withTimestamps();
	}

	public function workout_plan_days()
	{
		return $this->hasMany(WorkoutPlanDay::class);
	}
}
