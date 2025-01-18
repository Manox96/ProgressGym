<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoachProfile
 * 
 * @property int $id
 * @property int $user_id
 * @property string|null $specialty
 * @property string|null $bio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class CoachProfile extends Model
{
	protected $table = 'coach_profiles';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'specialty',
		'bio'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
