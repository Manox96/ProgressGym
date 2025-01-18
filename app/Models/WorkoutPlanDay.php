<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkoutPlanDay
 * 
 * @property int $id
 * @property int $workout_plan_id
 * @property int $day_number
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property WorkoutPlan $workout_plan
 *
 * @package App\Models
 */
class WorkoutPlanDay extends Model
{
	protected $table = 'workout_plan_days';

	protected $casts = [
		'workout_plan_id' => 'int',
		'day_number' => 'int'
	];

	protected $fillable = [
		'workout_plan_id',
		'day_number'
	];

	public function workout_plan()
	{
		return $this->belongsTo(WorkoutPlan::class);
	}
}
