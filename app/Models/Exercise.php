<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Exercise
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $video_url
 * @property string|null $photo_url
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Workout[] $workouts
 *
 * @package App\Models
 */
class Exercise extends Model
{
	protected $table = 'exercises';

	protected $fillable = [
		'name',
		'description',
		'video_url',
		'photo_url'
	];

	public function workouts()
	{
		return $this->belongsToMany(Workout::class, 'workout_exercises')
					->withPivot('id')
					->withTimestamps();
	}
}
