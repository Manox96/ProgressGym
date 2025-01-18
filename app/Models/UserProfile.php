<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProfile
 * 
 * @property int $id
 * @property int $user_id
 * @property int $age
 * @property string $gender
 * @property float $height
 * @property float $weight
 * @property string $activity_level
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserProfile extends Model
{
	protected $table = 'user_profiles';

	protected $casts = [
		'user_id' => 'int',
		'age' => 'int',
		'height' => 'float',
		'weight' => 'float'
	];

	protected $fillable = [
		'user_id',
		'age',
		'gender',
		'height',
		'weight',
		'activity_level'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
