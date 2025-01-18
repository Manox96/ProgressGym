<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkoutExercise
 * 
 * @property int $id
 * @property int $workout_id
 * @property int $exercise_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Exercise $exercise
 * @property Workout $workout
 *
 * @package App\Models
 */
class WorkoutExercise extends Model
{
	protected $table = 'workout_exercises';

	protected $casts = [
		'workout_id' => 'int',
		'exercise_id' => 'int'
	];

	protected $fillable = [
		'workout_id',
		'exercise_id'
	];

	public function exercise()
	{
		return $this->belongsTo(Exercise::class);
	}

	public function workout()
	{
		return $this->belongsTo(Workout::class);
	}
}
