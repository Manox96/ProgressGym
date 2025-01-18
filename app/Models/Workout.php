<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Workout
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Exercise[] $exercises
 *
 * @package App\Models
 */
class Workout extends Model
{
	protected $table = 'workouts';

	protected $fillable = [
		'name',
		'description'
	];

	public function exercises()
	{
		return $this->belongsToMany(Exercise::class, 'workout_exercises')
					->withPivot('id')
					->withTimestamps();
	}
}
