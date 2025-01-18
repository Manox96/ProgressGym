<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserWorkoutPlan
 * 
 * @property int $id
 * @property int $user_id
 * @property int $workout_plan_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property WorkoutPlan $workout_plan
 *
 * @package App\Models
 */
class UserWorkoutPlan extends Model
{
	protected $table = 'user_workout_plans';

	protected $casts = [
		'user_id' => 'int',
		'workout_plan_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'workout_plan_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function workout_plan()
	{
		return $this->belongsTo(WorkoutPlan::class);
	}
}
